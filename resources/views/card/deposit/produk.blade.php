<!--begin::List widget 11-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header pt-7 mb-3">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-800">Produk Deposito</span>
            <span class="text-gray-500 mt-1 fw-semibold fs-6">Total {{ $deposit->account }} Rekening</span>
        </h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-custom-class="tooltip-inverse" data-bs-original-title="Logistics App is coming soon" data-kt-initialized="1">Lihat Semua</a>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-4">
            @foreach ($deposit->products as $prd)
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <i class="ki-duotone ki-note-2 fs-1 text-success">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-success fs-6">{{ $prd->KET_KD_PRD }}</a>
                            <!--end::Title-->

                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">{{ number_format($deposit->product_count[str_replace(" ", "_", $prd->KET_KD_PRD)]) }} Rekening</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Wrapper-->
                    <div class="text-gray-500 fw-bold fs-7 text-end">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-6 d-block">{{ number_format($deposit->product_sum[str_replace(" ", "_", $prd->KET_KD_PRD)]/1000) }}</span>
                        <!--end::Number-->
                        Rupiah
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Item-->
            <!--begin::Separator-->
            <div class="separator separator-dashed my-5"></div>
            <!--end::Separator-->
            @endforeach

    </div>
    <!--end::Body-->
</div>
<!--end::List widget 11-->
