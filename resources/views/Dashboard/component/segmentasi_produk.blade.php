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
                                            <span class="text-gray-800 fw-bold fs-6 me-1">38</span>
                                        </div>
                                    </td>
                                    <td class="" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-900 fw-bold fs-6 me-3"> 890,685</span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td class="" colspan="2">
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">KMG
                                        Anuitas</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">56</span>
                                    </div>
                                </td>
                                <td class="" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-900 fw-bold fs-6 me-3">1,399,085</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="2">
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">KMU PJ
                                        Anuitas</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">3</span>
                                    </div>
                                </td>
                                <td class="" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-900 fw-bold fs-6 me-3">227,572</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="2">
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">KMB TA
                                        Anuitas</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">6</span>
                                    </div>
                                </td>
                                <td class="" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-900 fw-bold fs-6 me-3">27,860</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="2">
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">KMG PNS
                                        Sertif</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">179</span>
                                    </div>
                                </td>
                                <td class="" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-900 fw-bold fs-6 me-3">8,172,064</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="2">
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">KMG PNS
                                        Gaji</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">86</span>
                                    </div>
                                </td>
                                <td class="" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-900 fw-bold fs-6 me-3">2,087,065</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="2">
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">KMG PNS
                                        Tunda/Tukin</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">117</span>
                                    </div>
                                </td>
                                <td class="" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-900 fw-bold fs-6 me-3">3,466,251</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="2">
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">KMG
                                        Pegawai Swasta</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">1737</span>
                                    </div>
                                </td>
                                <td class="" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-900 fw-bold fs-6 me-3">40,511,912</span>
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
                            <tr>
                                <td class="" colspan="2">
                                    <a href="#"
                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">1 - Lancar</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6">1,687</span>
                                    </div>
                                </td>
                                <td class="" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-900 fw-bold fs-6">45,246,633</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="2">
                                    <a href="#"
                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">2 - Dalam Perhatian Khusus</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6">145</span>
                                    </div>
                                </td>
                                <td class="" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-900 fw-bold fs-6">3,636,332</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="2">
                                    <a href="#"
                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">3 - Kurang Lancar</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6">53</span>
                                    </div>
                                </td>
                                <td class="" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-900 fw-bold fs-6">1,100,242</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="2">
                                    <a href="#"
                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">4 - Diragukan</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6">101</span>
                                    </div>
                                </td>
                                <td class="" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-900 fw-bold fs-6">1,775,497</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="2">
                                    <a href="#"
                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">5 - Macet</a>
                                </td>
                                <td class="pe-0" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-800 fw-bold fs-6">236</span>
                                    </div>
                                </td>
                                <td class="" colspan="2">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-gray-900 fw-bold fs-6">5,023,790</span>
                                    </div>
                                </td>
                            </tr>
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
