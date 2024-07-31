<?php

    namespace App\Services;

    use Illuminate\Support\Facades\Cache;
    use App\Models\MisDeposit;
    use Carbon\Carbon;

    class MisDepositService
    {
        protected $misDeposit;

        public function __construct(MisDeposit $misDeposit)
        {
            $this->misDeposit = $misDeposit;
        }

        public function depositBalanceSum($datadate, $cab)
        {
            $cacheKey = 'depositBalanceSum_' . $datadate . '_' . $cab;

            // Coba mendapatkan data dari cache Redis
            $sumBalance = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                return $this->misDeposit->where('DATADATE', $datadate)
                                        ->where('CAB', $cab)
                                        ->sum('NILAI_NOMINAL');
            });

            return $sumBalance;
        }

        public function depositAccountCount($datadate, $cab)
        {
            $cacheKey = 'depositAccountCount_' . $datadate . '_' . $cab;

            // Coba mendapatkan data dari cache Redis
            $countAccount = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                return $this->misDeposit->where('DATADATE', $datadate)
                                        ->where('CAB', $cab)
                                        ->count();
            });

            return $countAccount;
        }

        public function getDistinctProducts()
        {
            $cacheKey = 'distinctProducts_deposit';

            // Mencoba untuk mendapatkan data dari cache
            $distinctProducts = Cache::remember($cacheKey, now()->addHours(1), function () {
                return $this->misDeposit->select('KET_KD_PRD')
                                    ->distinct()
                                    ->get();
            });

            return $distinctProducts;
        }

        public function segmentProductCount($datadate, $cab)
        {
            // sp for segmentasi produk
            $cacheKey = 'segmentProductCount_deposit_' . $datadate . '_' . $cab;

            // Mencoba untuk mendapatkan data dari cache
            $spCount = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                $spCount = [];
                $products = $this->getDistinctProducts();

                foreach ($products as $product) {
                    $count = $this->misDeposit->where('DATADATE', $datadate)
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
            $cacheKey = 'segmentProductSum_deposit_' . $datadate . '_' . $cab;

            // Mencoba untuk mendapatkan data dari cache
            $spSum = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                $spSum = [];
                $products = $this->getDistinctProducts();

                foreach ($products as $product) {
                    $sum = $this->misDeposit->where('DATADATE', $datadate)
                                            ->where('CAB', $cab)
                                            ->where('KET_KD_PRD', $product->KET_KD_PRD)
                                            ->sum('NILAI_NOMINAL');
                    $spSum[str_replace(' ', '_', $product->KET_KD_PRD)] = $sum;
                }

                return $spSum;
            });

            return $spSum;
        }

        public function sumDepositNewAccount($datadate, $cab)
        {
            $cacheKey = 'sumDepositNewAccount_' . $datadate . '_' . $cab;

            // Mencoba untuk mendapatkan data dari cache
            $sumDeposito = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                return $this->misDeposit->whereRaw('LEFT(TGL_MULAI, 6) = ?', [Carbon::now()->format('Ym')])
                                    ->sum('NILAI_NOMINAL');
            });

            return $sumDeposito;
        }

        public function sumDepositOverdue($datadate, $cab)
        {
            $cacheKey = 'sumDepositOverdue_' . $datadate . '_' . $cab;

            // Mencoba untuk mendapatkan data dari cache
            $sumDeposito = Cache::remember($cacheKey, now()->addHours(1), function () use ($datadate, $cab) {
                return $this->misDeposit->whereRaw('LEFT(TGL_AKHIR, 6) = ?', [Carbon::now()->format('Ym')])
                                    ->sum('NILAI_NOMINAL');
            });

            return $sumDeposito;
        }

        public function breadcrumb($url)
        {
            $path = parse_url($url, PHP_URL_PATH);
            $segments = explode('/', $path);
    
            $breadcrumb = '<ol class="breadcrumb text-muted fs-6 fw-semibold">';
            $breadcrumb .= '<li class="breadcrumb-item"><a href="' . url('/') . '" class="text-success">Dashboard</a></li>';
    
            $url = '';
            foreach ($segments as $segment) {
                if (!empty($segment)) {
                    $url .= '/' . $segment;
                    if (end($segments) == $segment) {
                        $breadcrumb .= '<li class="breadcrumb-item text-muted">' . ucfirst($segment) . '</li>';
                    } else {
                        $breadcrumb .= '<li class="breadcrumb-item"><a href="' . url($url) . '" class="text-success">' . ucfirst($segment) . '</a></li>';
                    }
                }
            }
    
            $breadcrumb .= '</ol>';
    
            return $breadcrumb;
        }

    }
