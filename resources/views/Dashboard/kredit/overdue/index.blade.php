@extends('layouts.default')
@section('contents')
	<!--begin::Wrapper container-->
	<div class="app-container container-xxl">
		<!--begin::Main-->
		<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
			<!--begin::Content wrapper-->
			<div class="d-flex flex-column flex-column-fluid">
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <div class="row gx-5 gx-xl-10">
                        <!--begin::Col-->
                        <div class="col-xxl-12 mb-5 mb-xl-12">
                            <!--begin::Chart widget 28-->
                            <div class="card card-flush h-xl-100">
                                <div class="card-body">
                                    <h1 class="anchor fw-bold mb-5" id="column-rendering" data-kt-scroll-offset="50">
                                        <a href="#column-rendering"></a>

                                        Debitur Telat Bayar - {{ $overdue->title }}</h1>
                                    <div class="d-flex flex-stack flex-wrap mb-5">
                                        <!--begin::Search-->
                                        <form method="post" action="">
                                            @csrf
                                            <div class="d-flex align-items-center position-relative my-1 mb-2 mb-md-0">
                                                <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span
                                                        class="path2"></span></i> <input type="text" data-kt-docs-table-filter="search"
                                                    class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers">
                                            </div>
                                        </form>
                                        <!--end::Search-->

                                        <!--begin::Toolbar-->
                                        <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                                            <a href="{{ route('dashboard.kredit') }}" class="btn btn-light-success me-3">
                                            <i class="ki-duotone ki-entrance-right fs-2"><span class="path1"></span><span class="path2"></span></i> Kembali
                                            </a>
                                            <button type="button" class="btn btn-light-success me-3">
                                            <i class="ki-duotone ki-file-up fs-2"><span class="path1"></span><span class="path2"></span></i> Export
                                            </button>

                                            <!--begin::Filter-->
                                            <button type="button" class="btn btn-light-success me-3" data-kt-menu-trigger="click"
                                                data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i> Filter
                                            </button>
                                            <!--begin::Menu 1-->
                                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" id="kt-toolbar-filter">
                                                <!--begin::Header-->
                                                <div class="px-7 py-5">
                                                    <div class="fs-4 text-gray-900 fw-bold">Filter Options</div>
                                                </div>
                                                <!--end::Header-->

                                                <!--begin::Separator-->
                                                <div class="separator border-gray-200"></div>
                                                <!--end::Separator-->

                                                <!--begin::Content-->
                                                <form method="post" action="">
                                                    @csrf
                                                    <div class="px-7 py-5">
                                                        <!--begin::Input group-->
                                                        <div class="mb-10">
                                                            <!--begin::Label-->
                                                            <label class="form-label fs-5 fw-semibold mb-3">Durasi Telat Bayar:</label>
                                                            <!--end::Label-->

                                                            <!--begin::Options-->
                                                            <div class="d-flex flex-column flex-wrap fw-semibold" data-kt-docs-table-filter="payment_type">
                                                                <!--begin::Option-->
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                                    <input class="form-check-input" type="radio" name="payment_type" value="7h"
                                                                        checked="checked">
                                                                    <span class="form-check-label text-gray-600">
                                                                        Telat 7 Hari
                                                                    </span>
                                                                </label>
                                                                <!--end::Option-->

                                                                <!--begin::Option-->
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                                    <input class="form-check-input" type="radio" name="payment_type" value="14h">
                                                                    <span class="form-check-label text-gray-600">
                                                                        Telat 14 Hari
                                                                    </span>
                                                                </label>
                                                                <!--end::Option-->

                                                                <!--begin::Option-->
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-3">
                                                                    <input class="form-check-input" type="radio" name="payment_type" value="1b">
                                                                    <span class="form-check-label text-gray-600">
                                                                        Telat 1 Bulan
                                                                    </span>
                                                                </label>
                                                                <!--end::Option-->

                                                                <!--begin::Option-->
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-3">
                                                                    <input class="form-check-input" type="radio" name="payment_type" value="2b">
                                                                    <span class="form-check-label text-gray-600">
                                                                        Telat 2 Bulan
                                                                    </span>
                                                                </label>
                                                                <!--end::Option-->

                                                                <!--begin::Option-->
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="radio" name="payment_type" value="3b">
                                                                    <span class="form-check-label text-gray-600">
                                                                        Telat 3 Bulan
                                                                    </span>
                                                                </label>
                                                                <!--end::Option-->
                                                            </div>
                                                            <!--end::Options-->
                                                        </div>
                                                        <!--end::Input group-->

                                                        <!--begin::Actions-->
                                                        <div class="d-flex justify-content-end">
                                                            <button type="reset" class="btn btn-light btn-active-light-success me-2"
                                                                data-kt-menu-dismiss="true" data-kt-docs-table-filter="reset">Reset</button>

                                                            <button type="submit" class="btn btn-success" data-kt-menu-dismiss="true"
                                                                data-kt-docs-table-filter="filter">Apply</button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </div>
                                                </form>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Menu 1--> <!--end::Filter-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>



                                    <table id="kt_datatable_column_rendering" class="table table-striped table-row-bordered gy-5 gs-7">
                                        <thead>
                                            <tr class="fw-semibold fs-6 text-gray-800">
                                                <th>Nama</th>
                                                <th>Durasi</th>
                                                <th>Kol</th>
                                                <th>Bakidebet</th>
                                                <th>Tunggakan</th>
                                                <th>AO</th>
                                                <th>Plan</th>
                                                <th>Action</th>
                                                <th>Result</th>
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tunggakan as $deb)
                                            <tr>
                                                <td>{{ $deb->NAMA_NASABAH }}</td>
                                                <td>{{ $deb->JML_HARI_TUNGGAKAN }} hari</td>
                                                <td>{{ $deb->KODE_KOLEK }}</td>
                                                <td>{{ number_format($deb->POKOK_PINJAMAN) }}</td>
                                                <td>{{ number_format($deb->TUNGGAKAN_POKOK+$deb->TUNGGAKAN_BUNGA) }}</td>
                                                <td>{{ $deb->AO }}</td>
                                                <td><span class="badge badge-light-success fs-base">Penagihan</span></td>
                                                <td><span class="badge badge-light-warning fs-base">Desk Collection</span></td>
                                                <td><span class="badge badge-light-primary fs-base">Bayar</span></td>
                                                <td>
                                                    <a href="" class="btn-s btn-dark"><i class="bi bi-eye"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $tunggakan->links('components.pagination') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<!--end::Content-->
			</div>
			<!--end::Content wrapper-->
			<!--begin::Footer-->
			@include('layouts.footer')
			<!--end::Footer-->
		</div>
		<!--end:::Main-->
	</div>
	<!--end::Wrapper container-->
@endsection
