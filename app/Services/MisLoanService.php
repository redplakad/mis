<?php

    namespace App\Services;

    use App\Models\MisLoan;
    use Carbon\Carbon;

    class MisloanService
    {
        protected $misLoan;

        public function __construct(MisLoan $misLoan)
        {
            $this->misLoan = $misLoan;
        }

        public function getTop25Loans($datadate, $cab)
        {
            return $this->misLoan->where('DATADATE', $datadate)
                                 ->where('CAB', $cab)
                                 ->orderBy('POKOK_PINJAMAN', 'desc')
                                 ->take(25)
                                 ->get();
        }

        public function calculateOverdue($datadate, $cab)
        {
            return [
                'overdue7H'     => $this->misLoan->where('DATADATE', $datadate)
                                             ->where('CAB', $cab)
                                             ->whereBetween('JML_HARI_TUNGGAKAN', [1, 7])
                                             ->count(),
                'overdue14H'    => $this->misLoan->where('DATADATE', $datadate)
                                             ->where('CAB', $cab)
                                             ->whereBetween('JML_HARI_TUNGGAKAN', [8, 14])
                                             ->count(),
                'overdue1B'     => $this->misLoan->where('DATADATE', $datadate)
                                             ->where('CAB', $cab)
                                             ->whereBetween('JML_HARI_TUNGGAKAN', [15, 30])
                                             ->count(),
                'overdue2B'     => $this->misLoan->where('DATADATE', $datadate)
                                             ->where('CAB', $cab)
                                             ->whereBetween('JML_HARI_TUNGGAKAN', [31, 60])
                                             ->count(),
                'overdue3B'     => $this->misLoan->where('DATADATE', $datadate)
                                             ->where('CAB', $cab)
                                             ->whereBetween('JML_HARI_TUNGGAKAN', [61, 90])
                                             ->count(),
            ];
        }

        public function sumBakiDebet($datadate, $cab)
        {
            return $this->misLoan->where('DATADATE', $datadate)
                                 ->where('CAB', $cab)
                                 ->sum('POKOK_PINJAMAN');
        }

        public function sumPencairanBulanIni($datadate, $cab)
        {
            return $this->misLoan->whereRaw('LEFT(TGL_PK, 6) = ?', [Carbon::now()->format('Ym')])
                                 ->sum('POKOK_PINJAMAN');
        }

        public function sumNPL($datadate, $cab)
        {
            return $this->misLoan->where('DATADATE', $datadate)
                                 ->where('CAB', $cab)
                                 ->whereBetween('KODE_KOLEK', [3, 5])
                                 ->sum('POKOK_PINJAMAN');
        }

        public function sumPPAP($datadate, $cab)
        {
            return $this->misLoan->where('DATADATE', $datadate)
                                 ->where('CAB', $cab)
                                 ->sum('CADANGAN_PPAP');
        }

        public function getDistinctProducts()
        {
            return $this->misLoan->select('KET_KD_PRD')
                                 ->distinct()
                                 ->get();
        }

        public function segmentProductCount($datadate, $cab)
        {
            // sp for segmentasi produk
            $spCount = [];
            $products = $this->getDistinctProducts($datadate, $cab);

            foreach ($products as $product) {
                $count = $this->misLoan->where('DATADATE', $datadate)
                                       ->where('CAB', $cab)
                                       ->where('KET_KD_PRD', $product->KET_KD_PRD)
                                       ->count();
                $spCount[str_replace(' ', '_', $product->KET_KD_PRD)] = $count;
            }

            return $spCount;
        }

        public function segmentProductSum($datadate, $cab)
        {
            // sp for segmentasi produk
            $spSum = [];
            $products = $this->getDistinctProducts($datadate, $cab);

            foreach ($products as $product) {
                $sum = $this->misLoan->where('DATADATE', $datadate)
                                       ->where('CAB', $cab)
                                       ->where('KET_KD_PRD', $product->KET_KD_PRD)
                                       ->sum('POKOK_PINJAMAN');
                $spSum[str_replace(' ', '_', $product->KET_KD_PRD)] = $sum;
            }

            return $spSum;
        }

        public function loanDescriptionKolektibilitas($kol)
        {
            $kolDesc = [
                1 => 'Lancar',
                2 => 'Dalam Perhatian Khusus',
                3 => 'Kurang Lancar',
                4 => 'Diragukan',
                5 => 'Macet'
            ];

            return $kolDesc[$kol];
        }

        public function loanKolektibilitasCount($datadate, $cab, $kol)
        {
            // menghitung (sum) pokok pinjaman/bakidebet berdasarkan kolektibilitas
            $kolektibilitasCount = $this->misLoan->where('DATADATE', $datadate)
                                      ->where('CAB', $cab)
                                      ->where('KODE_KOLEK', $kol)
                                      ->count();
            return $kolektibilitasCount;
        }

        public function loanKolektibilitasSum($datadate, $cab, $kol)
        {
            // menghitung (sum) pokok pinjaman/bakidebet berdasarkan kolektibilitas
            $kolektibilitasSum = $this->misLoan->where('DATADATE', $datadate)
                                      ->where('CAB', $cab)
                                      ->where('KODE_KOLEK', $kol)
                                      ->sum('POKOK_PINJAMAN');
            return $kolektibilitasSum;
        }
    }
