<?php

    namespace App\Services;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Cache;
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
            $cacheKey = 'top25loans_' . $datadate . '_' . $cab;

            // Mencoba untuk mendapatkan data dari cache
            $topLoans = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                return $this->misLoan->where('DATADATE', $datadate)
                                    ->where('CAB', $cab)
                                    ->orderBy('POKOK_PINJAMAN', 'desc')
                                    ->take(25)
                                    ->get();
            });

            return $topLoans;
        }
        public function calculateOverdue($datadate, $cab)
        {
            $cacheKey = 'overdue_' . $datadate . '_' . $cab;

            // Mencoba untuk mendapatkan data dari cache
            $overdueCounts = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                return [
                    'overdue7H'  => $this->misLoan->where('DATADATE', $datadate)
                                                  ->where('CAB', $cab)
                                                  ->whereBetween('JML_HARI_TUNGGAKAN', [1, 7])
                                                  ->count(),
                    'overdue14H' => $this->misLoan->where('DATADATE', $datadate)
                                                  ->where('CAB', $cab)
                                                  ->whereBetween('JML_HARI_TUNGGAKAN', [8, 14])
                                                  ->count(),
                    'overdue1B'  => $this->misLoan->where('DATADATE', $datadate)
                                                  ->where('CAB', $cab)
                                                  ->whereBetween('JML_HARI_TUNGGAKAN', [15, 30])
                                                  ->count(),
                    'overdue2B'  => $this->misLoan->where('DATADATE', $datadate)
                                                  ->where('CAB', $cab)
                                                  ->whereBetween('JML_HARI_TUNGGAKAN', [31, 60])
                                                  ->count(),
                    'overdue3B'  => $this->misLoan->where('DATADATE', $datadate)
                                                  ->where('CAB', $cab)
                                                  ->whereBetween('JML_HARI_TUNGGAKAN', [61, 90])
                                                  ->count(),
                ];
            });

            return $overdueCounts;
        }

        public function sumBakiDebet($datadate, $cab)
        {
            $cacheKey = 'sumBakiDebet_' . $datadate . '_' . $cab;

            // Mencoba untuk mendapatkan data dari cache
            $sumBakiDebet = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                return $this->misLoan->where('DATADATE', $datadate)
                                    ->where('CAB', $cab)
                                    ->sum('POKOK_PINJAMAN');
            });

            return $sumBakiDebet;
        }

        public function sumPencairanBulanIni($datadate, $cab)
        {
            $cacheKey = 'sumPencairanBulanIni_' . $datadate . '_' . $cab;

            // Mencoba untuk mendapatkan data dari cache
            $sumPencairan = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                return $this->misLoan->whereRaw('LEFT(TGL_PK, 6) = ?', [Carbon::now()->format('Ym')])
                                    ->sum('POKOK_PINJAMAN');
            });

            return $sumPencairan;
        }

        public function sumNPL($datadate, $cab)
        {
            $cacheKey = 'sumNPL_' . $datadate . '_' . $cab;

            // Mencoba untuk mendapatkan data dari cache
            $sumNPL = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                return $this->misLoan->where('DATADATE', $datadate)
                                    ->where('CAB', $cab)
                                    ->whereBetween('KODE_KOLEK', [3, 5])
                                    ->sum('POKOK_PINJAMAN');
            });

            return $sumNPL;
        }

        public function sumPPAP($datadate, $cab)
        {
            $cacheKey = 'sumPPAP_' . $datadate . '_' . $cab;

            // Mencoba untuk mendapatkan data dari cache
            $sumPPAP = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                return $this->misLoan->where('DATADATE', $datadate)
                                    ->where('CAB', $cab)
                                    ->sum('CADANGAN_PPAP');
            });

            return $sumPPAP;
        }

        public function getDistinctProducts()
        {
            $cacheKey = 'distinctProducts_loan';

            // Mencoba untuk mendapatkan data dari cache
            $distinctProducts = Cache::remember($cacheKey, now()->addHours(1), function () {
                return $this->misLoan->select('KET_KD_PRD')
                                    ->distinct()
                                    ->get();
            });

            return $distinctProducts;
        }
        public function segmentProductCount($datadate, $cab)
        {
            // sp for segmentasi produk
            $cacheKey = 'segmentProductCount_loan_' . $datadate . '_' . $cab;

            // Mencoba untuk mendapatkan data dari cache
            $spCount = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                $spCount = [];
                $products = $this->getDistinctProducts();

                foreach ($products as $product) {
                    $count = $this->misLoan->where('DATADATE', $datadate)
                                        ->where('CAB', $cab)
                                        ->where('KET_KD_PRD', $product->KET_KD_PRD)
                                        ->count();
                    $spCount[str_replace(' ', '_', $product->KET_KD_PRD)] = $count;
                }

                return $spCount;
            });

            return $spCount;
        }

        public function segmentProductSum($datadate, $cab)
        {
            // sp for segmentasi produk
            $cacheKey = 'segmentProductSum_loan_' . $datadate . '_' . $cab;

            // Mencoba untuk mendapatkan data dari cache
            $spSum = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                $spSum = [];
                $products = $this->getDistinctProducts();

                foreach ($products as $product) {
                    $sum = $this->misLoan->where('DATADATE', $datadate)
                                        ->where('CAB', $cab)
                                        ->where('KET_KD_PRD', $product->KET_KD_PRD)
                                        ->sum('POKOK_PINJAMAN');
                    $spSum[str_replace(' ', '_', $product->KET_KD_PRD)] = $sum;
                }

                return $spSum;
            });

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
            // Membuat kunci cache unik berdasarkan parameter input
            $cacheKey = 'loanKolektibilitasCount_' . $datadate . '_' . $cab . '_' . $kol;

            // Mencoba untuk mendapatkan data dari cache
            $kolektibilitasCount = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab, $kol) {
                return $this->misLoan->where('DATADATE', $datadate)
                                    ->where('CAB', $cab)
                                    ->where('KODE_KOLEK', $kol)
                                    ->count();
            });

            return $kolektibilitasCount;
        }

        public function loanKolektibilitasSum($datadate, $cab, $kol)
        {
            // Membuat kunci cache unik berdasarkan parameter input
            $cacheKey = 'loanKolektibilitasSum_' . $datadate . '_' . $cab . '_' . $kol;

            // Mencoba untuk mendapatkan data dari cache
            $kolektibilitasSum = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab, $kol) {
                return $this->misLoan->where('DATADATE', $datadate)
                                    ->where('CAB', $cab)
                                    ->where('KODE_KOLEK', $kol)
                                    ->sum('POKOK_PINJAMAN');
            });

            return $kolektibilitasSum;
        }

        public function getOverdueLoans(string $range, Request $request)
        {
            $page = $request->get('page', 1);
            $cacheKey = 'overdue_loans_' . $range . '_page_' . $page . '_' . md5(json_encode($request->all()));

            return Cache::remember($cacheKey, 60, function () use ($range, $request) {
                $query = MisLoan::query();

                if ($request->has('keyword')) {
                    $keyword = $request->keyword;
                    $query->where('NAMA_NASABAH', 'like', '%' . $keyword . '%');
                }

                switch ($range) {
                    case '7h':
                        $query->whereBetween('JML_HARI_TUNGGAKAN', [1, 7]);
                        $overdueTitle = "7 Hari";
                        break;
                    case '14h':
                        $query->whereBetween('JML_HARI_TUNGGAKAN', [8, 14]);
                        $overdueTitle = "14 Hari";
                        break;
                    case '1b':
                        $query->whereBetween('JML_HARI_TUNGGAKAN', [15, 30]);
                        $overdueTitle = "1 Bulan";
                        break;
                    case '2b':
                        $query->whereBetween('JML_HARI_TUNGGAKAN', [31, 60]);
                        $overdueTitle = "2 Bulan";
                        break;
                    case '3b':
                        $query->whereBetween('JML_HARI_TUNGGAKAN', [61, 90]);
                        $overdueTitle = "3 Bulan";
                        break;
                    default:
                        abort(404); // If range is not valid, show a 404 page
                }

                $tunggakan = $query->paginate(50); // Add pagination with 50 items per page

                return [
                    'tunggakan' => $tunggakan,
                    'title' => $overdueTitle
                ];
            });
        }
    }
