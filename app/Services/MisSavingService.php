<?php

    namespace App\Services;

    use Illuminate\Support\Facades\Cache;
    use App\Models\MisSaving;
    use Carbon\Carbon;

    class MisSavingService
    {
        protected $misSaving;

        public function __construct(MisSaving $misSaving)
        {
            $this->misSaving = $misSaving;
        }

        public function SavingBalanceSum($datadate, $cab)
        {
            $cacheKey = 'SavingBalanceSum_' . $datadate . '_' . $cab;

            // Coba mendapatkan data dari cache Redis
            $sumBalance = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                return $this->misSaving->where('DATADATE', $datadate)
                                        ->where('CAB_REK', $cab)
                                        ->sum('SALDO_EFEKTIF');
            });

            return $sumBalance;
        }

        public function SavingAccountCount($datadate, $cab)
        {
            $cacheKey = 'SavingAccountCount_' . $datadate . '_' . $cab;

            // Coba mendapatkan data dari cache Redis
            $countAccount = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                return $this->misSaving->where('DATADATE', $datadate)
                                        ->where('CAB_REK', $cab)
                                        ->count();
            });

            return $countAccount;
        }

        public function getDistinctProducts()
        {
            $cacheKey = 'distinctProducts_Saving';

            // Mencoba untuk mendapatkan data dari cache
            $distinctProducts = Cache::remember($cacheKey, now()->addHours(1), function () {
                return $this->misSaving->select('KET_KD_PRD')
                                    ->distinct()
                                    ->get();
            });

            return $distinctProducts;
        }

        public function segmentProductCount($datadate, $cab)
        {
            // sp for segmentasi produk
            $cacheKey = 'segmentProductCount_Saving_' . $datadate . '_' . $cab;

            // Mencoba untuk mendapatkan data dari cache
            $spCount = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                $spCount = [];
                $products = $this->getDistinctProducts();

                foreach ($products as $product) {
                    $count = $this->misSaving->where('DATADATE', $datadate)
                                              ->where('CAB_REK', $cab)
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
            $cacheKey = 'segmentProductSum_Saving_' . $datadate . '_' . $cab;

            // Mencoba untuk mendapatkan data dari cache
            $spSum = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                $spSum = [];
                $products = $this->getDistinctProducts();

                foreach ($products as $product) {
                    $sum = $this->misSaving->where('DATADATE', $datadate)
                                            ->where('CAB_REK', $cab)
                                            ->where('KET_KD_PRD', $product->KET_KD_PRD)
                                            ->sum('SALDO_EFEKTIF');
                    $spSum[str_replace(' ', '_', $product->KET_KD_PRD)] = $sum;
                }

                return $spSum;
            });

            return $spSum;
        }

        public function getDistinctBranches()
        {
            $cacheKey = 'distinctBranch_Saving';

            // Mencoba untuk mendapatkan data dari cache
            $distinctProducts = Cache::remember($cacheKey, now()->addHours(1), function () {
                return $this->misSaving->select('AO')
                                    ->distinct()
                                    ->get();
            });

            return $distinctProducts;
        }

        public function segmentBranchSum($datadate, $cab)
        {
            // sp for segmentasi produk
            $cacheKey = 'segmentBranchSum_Saving_' . $datadate . '_' . $cab;

            // Mencoba untuk mendapatkan data dari cache
            $spSum = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                $sbSum = [];
                $branches = $this->getDistinctBranches();

                foreach ($branches as $branch) {
                    $sum = $this->misSaving->where('DATADATE', $datadate)
                                            ->where('CAB_REK', $cab)
                                            ->where('AO', $branch->AO)
                                            ->sum('SALDO_EFEKTIF');
                    $sbSum[str_replace(' ', '_', $branch->AO)] = $sum;
                }

                return $sbSum;
            });

            return $sbSum;
        }

        public function segmentBranchCount($datadate, $cab)
        {
            // sp for segmentasi produk
            $cacheKey = 'segmentBranchCount_Saving_' . $datadate . '_' . $cab;

            // Mencoba untuk mendapatkan data dari cache
            $sbCount = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                $sbCount = [];
                $branches = $this->getDistinctBranches();

                foreach ($branches as $branch) {
                    $count = $this->misSaving->where('DATADATE', $datadate)
                                            ->where('CAB_REK', $cab)
                                            ->where('AO', $branch->AO)
                                            ->count();
                    $sbCount[str_replace(' ', '_', $branch->AO)] = $count;
                }

                return $sbCount;
            });

            return $sbCount;
        }
    }
