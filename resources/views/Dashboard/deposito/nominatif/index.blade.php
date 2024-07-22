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

                                        Nominatif Deposito</h1>
                                    <div class="d-flex flex-stack flex-wrap mb-5">

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



                                    <table id="nominatif_deposito" class="table table-striped table-row-bordered gy-5 gs-7">
                                        <thead>
                                            <tr>
                                                <th>DATADATE</th>
                                                <th>CAB</th>
                                                <th>NO_REK</th>
                                                <th>CIF</th>
                                                <th>NAMA_NASABAH</th>
                                                <th>ALAMAT</th>
                                                <th>NILAI_EFEKTIF</th>
                                                <!-- Tambahkan kolom lain sesuai kebutuhan -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
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
@push('javascript')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#nominatif_deposito').DataTable({
            processing: false,
            serverSide: false,
            ajax: "{{ route('mis-deposit.data') }}",
            columns: [
                { data: 'DATADATE', name: 'DATADATE' },
                { data: 'CAB', name: 'CAB' },
                { data: 'NO_REK', name: 'NO_REK' },
                { data: 'CIF', name: 'CIF' },
                { data: 'NAMA_NASABAH', name: 'NAMA_NASABAH' },
                { data: 'ALAMAT', name: 'ALAMAT' },
                { data: 'NILAI_EFEKTIF', name: 'NILAI_EFEKTIF' },
                // Tambahkan kolom lain sesuai kebutuhan
            ]
        });
    });
</script>    
@endpush
@push('css')
        <style>
        #nominatif_deposito_length{
            display: none;
        }
        #keyword{
            opacity: 0;
        }

        .dataTables_paginate {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .dataTables_paginate a {
            display: inline-block;
            padding: 8px 12px;
            margin: 0 5px;
            border-radius: 4px;
            text-decoration: none;
            color: #007bff;
            border: 1px solid #007bff;
            transition: background-color 0.3s, color 0.3s;
        }

        .dataTables_paginate a:hover {
            background-color: #007bff;
            color: #fff;
        }

        .dataTables_paginate a.current {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }

        .dataTables_paginate a.disabled {
            pointer-events: none;
            color: #ccc;
            border-color: #ccc;
        }

        .dataTables_paginate .ellipsis {
            display: inline-block;
            padding: 8px 12px;
            color: #333;
        }

        @media (max-width: 600px) {
            .dataTables_paginate a {
                padding: 6px 10px;
                margin: 0 3px;
            }

            .dataTables_paginate .ellipsis {
                padding: 6px 10px;
            }
        }

        .dataTables_filter {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-bottom: 20px;
        }

        .dataTables_filter label {
            font-weight: bold;
            margin-right: 10px;
        }

        .dataTables_filter input[type="search"] {
            padding: 10px 15px;
            font-size: 16px;
            border: 1px solid #f9f9f9;
            border-radius: 10px;
            outline: none;
            transition: border-color 0.3s, box-shadow 0.3s;

            background-color: #f9f9f9;
            color:#4b5675;
        }

        .dataTables_filter input[type="search"]:focus {
            border-color: #f2f2f2;
            background-color: #f2f2f2;
        }

        @media (max-width: 600px) {
            .dataTables_filter {
                flex-direction: column;
                align-items: stretch;
            }

            .dataTables_filter label {
                margin-right: 0;
                margin-bottom: 10px;
                text-align: left;
            }

            .dataTables_filter input[type="search"] {
                width: 100%;
                font-size: 14px;
            }
        }

        .dataTables_length {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .dataTables_length label {
            font-size: 16px;
            color: #6c757d;
            display: flex;
            align-items: center;
        }

        .dataTables_length select {
            margin-left: 10px;
            padding: 5px 10px;
            font-size: 16px;
            border: 1px solid #ced4da;
            border-radius: 25px;
            background-color: #f8f9fa;
            outline: none;
            cursor: pointer;
            appearance: none; /* Remove default arrow */
            background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill="none" stroke="%236c757d" stroke-width="1.1" d="M5.5 7.5l4.5 4 4.5-4"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 10px;
            transition: border-color 0.2s;
        }

        .dataTables_length select:focus {
            border-color: #80bdff;
        }

    </style>
@endpush