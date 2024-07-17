<div class="row gx-5 gx-xl-10">
    <!--begin::Col-->
    <div class="col-xxl-4 mb-5 mb-xl-10">
        <!--begin::Chart widget 28-->
        <div class="card card-flush h-xl-100">
            <!--begin::Header-->
            <div class="card-header py-7">
                <!--begin::Statistics-->
                <div class="m-0">
                    <!--begin::Heading-->
                    <div class="d-flex align-items-center mb-2">
                        <!--begin::Title-->
                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">{{ $loan->nominal_bakidebet }}</span>
                        <!--end::Title-->
                        <!--begin::Label-->
                        <span class="badge badge-light-primary fs-base">
                            <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.2%</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Description-->
                    <span class="fs-6 fw-semibold text-gray-500">Segmentasi Produk (Dalam Ribuan)</span>
                    <!--end::Description-->
                </div>
                <!--end::Statistics-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body d-flex align-items-end ps-4 pe-0 pb-4">
                <!--begin::Chart-->
                <div id="kt_charts_pie_produk" class="h-300px w-100 min-h-auto" style="height: 300px;"></div>
                <!--end::Chart-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Chart widget 28-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xxl-4 mb-5 mb-xl-10">
        <!--begin::Chart widget 27-->
        <div class="card card-flush h-xl-100">
            <!--begin::Header-->
            <div class="card-header py-7">
                <!--begin::Statistics-->
                <div class="m-0">
                    <!--begin::Heading-->
                    <div class="d-flex align-items-center mb-2">
                        <!--begin::Title-->
                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">{{ $loan->nominal_bakidebet }}</span>
                        <!--end::Title-->
                        <!--begin::Label-->
                        <span class="badge badge-light-danger fs-base">
                            <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>8.02%</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Description-->
                    <span class="fs-6 fw-semibold text-gray-500">Kredit Yang Diberikan (Dalam Ribuan)</span>
                    <!--end::Description-->
                </div>
                <!--end::Statistics-->

            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-0 pb-1">
                <div id="kt_charts_kyd" class="min-h-auto" style="height: 300px"></div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Chart widget 27-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xxl-4 mb-5 mb-xl-10">
        <!--begin::List widget 5-->
        <div class="card card-flush h-xl-100">
            <!--begin::Header-->
            <div class="card-header pt-7">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-900">Penanganan Dini</span>
                    <span class="text-gray-500 mt-1 fw-semibold fs-6">Resiko dini Kredit Bermasalah</span>
                </h3>
                <!--end::Title-->

                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <a href="/metronic8/demo32/apps/ecommerce/sales/details.html" class="btn btn-sm btn-light">Lihat
                        Semua</a>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body">
                <div class="mb-0">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-30px me-5">
                                <span class="symbol-label">
                                    <i class="ki-outline ki-magnifier fs-3 text-gray-600"></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="{{ route('overdue.show', ['range' => '7h']) }}" class="text-gray-800 fw-bold text-hover-success fs-6">Telat Bayar 7 Hari</a>
                                <!--end::Title-->

                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct link
                                    clicks</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                            <!--begin::Number-->
                            <span class="text-gray-800 fw-bold fs-6 me-3">{{ number_format($count_tunggakan_hari['tunggakan_7h']) }}</span>
                            <!--end::Number-->

                            <!--begin::Info-->
                            <div class="d-flex flex-center">
                                <!--begin::label-->
                                <span class="badge badge-light-primary fs-base">
                                    <i class="ki-outline ki-arrow-up fs-5 text-primary ms-n1"></i>
                                    2.4%
                                </span>
                                <!--end::label-->

                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-30px me-5">
                                <span class="symbol-label">
                                    <i class="ki-outline ki-tiktok fs-3 text-gray-600"></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="{{ route('overdue.show', ['range' => '14h']) }}" class="text-gray-800 fw-bold text-hover-success fs-6">Telat Bayar 14 Hari</a>
                                <!--end::Title-->

                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct link
                                    clicks</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                            <!--begin::Number-->
                            <span class="text-gray-800 fw-bold fs-6 me-3">{{ number_format($count_tunggakan_hari['tunggakan_14h']) }}</span>
                            <!--end::Number-->

                            <!--begin::Info-->
                            <div class="d-flex flex-center">
                                <!--begin::label-->
                                <span class="badge badge-light-danger fs-base">
                                    <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>
                                    9.4%
                                </span>
                                <!--end::label-->

                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-30px me-5">
                                <span class="symbol-label">
                                    <i class="ki-outline ki-sms fs-3 text-gray-600"></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="{{ route('overdue.show', ['range' => '1b']) }}" class="text-gray-800 fw-bold text-hover-success fs-6">Telat Bayar 1 Bulan</a>
                                <!--end::Title-->

                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct link
                                    clicks</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                            <!--begin::Number-->
                            <span class="text-gray-800 fw-bold fs-6 me-3">{{ number_format($count_tunggakan_hari['tunggakan_1b']) }}</span>
                            <!--end::Number-->

                            <!--begin::Info-->
                            <div class="d-flex flex-center">
                                <!--begin::label-->
                                <span class="badge badge-light-primary fs-base">
                                    <i class="ki-outline ki-arrow-up fs-5 text-primary ms-n1"></i>
                                    0.2%
                                </span>
                                <!--end::label-->

                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-30px me-5">
                                <span class="symbol-label">
                                    <i class="ki-outline ki-icon fs-3 text-gray-600"></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="{{ route('overdue.show', ['range' => '2b']) }}" class="text-gray-800 fw-bold text-hover-success fs-6">Telat Bayar 2 Bulan</a>
                                <!--end::Title-->

                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct link
                                    clicks</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                            <!--begin::Number-->
                            <span class="text-gray-800 fw-bold fs-6 me-3">{{ number_format($count_tunggakan_hari['tunggakan_2b']) }}</span>
                            <!--end::Number-->

                            <!--begin::Info-->
                            <div class="d-flex flex-center">
                                <!--begin::label-->
                                <span class="badge badge-light-danger fs-base">
                                    <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>
                                    0.4%
                                </span>
                                <!--end::label-->

                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-30px me-5">
                                <span class="symbol-label">
                                    <i class="ki-outline ki-abstract-25 fs-3 text-gray-600"></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="{{ route('overdue.show', ['range' => '3b']) }}" class="text-gray-800 fw-bold text-hover-success fs-6">Telat Bayar 3 Bulan</a>
                                <!--end::Title-->

                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct link
                                    clicks</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                            <!--begin::Number-->
                            <span class="text-gray-800 fw-bold fs-6 me-3">{{ number_format($count_tunggakan_hari['tunggakan_3b']) }}</span>
                            <!--end::Number-->

                            <!--begin::Info-->
                            <div class="d-flex flex-center">
                                <!--begin::label-->
                                <span class="badge badge-light-primary fs-base">
                                    <i class="ki-outline ki-arrow-up fs-5 text-primary ms-n1"></i>
                                    8.3%
                                </span>
                                <!--end::label-->

                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Item-->


                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::List widget 5-->
    </div>
    <!--end::Col-->
</div>
