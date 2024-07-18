<div class="row gx-5 gx-xl-10">
    <!--begin::Col-->
    <div class="col-xl-6 mb-5 mb-xl-10">
        <!--begin::Table widget 9-->
        <div class="card card-flush h-xl-100">
            <!--begin::Header-->
            <div class="card-header pt-5">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-800">Segmentasi Produk Kredit</span>
                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Dalam Ribuan</span>
                </h3>
                <!--end::Title-->
                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <a href="#" class="btn btn-sm btn-light">PDF Report</a>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fs-7 fw-bold border-0 text-gray-500">
                                <th class="min-w-150px" colspan="2">PRODUK</th>
                                <th class="min-w-150px text-end pe-0" colspan="2">DEBITUR</th>
                                <th class="text-end min-w-150px" colspan="2">NOMINAL</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @foreach($loan->daftar_produk as $produk)
                                <tr>
                                    <td class="" colspan="2">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{ $produk->KET_KD_PRD }}</a>
                                    </td>
                                    <td class="pe-0" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-800 fw-bold fs-6 me-1">{{ number_format($loan->product_count[str_replace(' ', '_', $produk->KET_KD_PRD)]) }}</span>
                                        </div>
                                    </td>
                                    <td class="" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-900 fw-bold fs-6 me-3"> {{ number_format($loan->product_sum[str_replace(' ', '_', $produk->KET_KD_PRD)]/1000) }}</span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Table Widget 9-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-6 mb-5 mb-xl-10">
        <!--begin::Table widget 10-->
        <div class="card card-flush h-xl-100">
            <!--begin::Header-->
            <div class="card-header pt-5">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-800">Kolektibilitas Kredit</span>
                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Dalam Ribuan</span>
                </h3>
                <!--end::Title-->
                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <a href="#" class="btn btn-sm btn-light">PDF Report</a>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fs-7 fw-bold border-0 text-gray-500">
                                <th class="min-w-200px" colspan="2">KOLEKTIBILITAS</th>
                                <th class="min-w-100px text-end pe-0" colspan="2">DEBITUR</th>
                                <th class="text-end min-w-100px" colspan="2">NOMINAL</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @for($i = 1; $i <= 5; $i++)
                            <tr>
                                <td class="" colspan="2">
                                    <a href="#"
                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{ $i }} - {{ $loan->loanKolDesc[$i] }}</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6">{{ number_format($loan->loanKolCount[$i]) }}</span>
                                    </div>
                                </td>
                                <td class="" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-900 fw-bold fs-6">{{ number_format($loan->loanKolSum[$i]/1000) }}</span>
                                    </div>
                                </td>
                            </tr>
                            @endfor
                            <tr>
                                <td class="" colspan="2">
                                    <a href="#"
                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">TOTAL KREDIT</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6">2222</span>
                                    </div>
                                </td>
                                <td class="" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-900 fw-bold fs-6">56,782,497</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="2">
                                    <a href="#"
                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">TOTAL PERFORMING</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6">1,832</span>
                                    </div>
                                </td>
                                <td class="" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-900 fw-bold fs-6">48,882,966</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="2">
                                    <a href="#"
                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">TOTAL NON PERFORMING</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6">390</span>
                                    </div>
                                </td>
                                <td class="" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-900 fw-bold fs-6">7,899,530</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Table Widget 10-->
    </div>
    <!--end::Col-->
</div>
