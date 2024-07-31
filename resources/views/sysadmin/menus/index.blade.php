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


                            <br>
                            <!--begin::Chart widget 28-->
                            <div class="card card-flush h-xl-100">
                                <div class="card-body">
                                    <h1 class="anchor fw-bold mb-5" id="column-rendering" data-kt-scroll-offset="50">
                                        <a href="#column-rendering"></a>
                                        Daftar Menu
                                    </h1>
                                    <div class="d-flex flex-stack flex-wrap mb-5">
                                        <!--begin::Search-->
                                        <form method="post" action="">
                                            @csrf
                                            <div class="d-flex align-items-center position-relative my-1 mb-2 mb-md-0">
                                                <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span
                                                        class="path2"></span></i> <input type="text" data-kt-docs-table-filter="search"
                                                    class="form-control form-control-solid w-250px ps-15" placeholder="Search Menu" id="keyword">
                                            </div>
                                        </form>
                                        <!--end::Search-->

                                        <!--begin::Toolbar-->
                                        <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                                            <a href="{{ route('dashboard') }}" class="btn btn-light-success me-3">
                                                <i class="ki-duotone ki-entrance-right fs-2"><span class="path1"></span><span class="path2"></span></i> Kembali
                                            </a>
                                            <a href="{{ route('mis_menu.create') }}" class="btn btn-light-success me-3">
                                                <i class="ki-duotone ki-file-up fs-2"><span class="path1"></span><span class="path2"></span></i> Add New
                                            </a>
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>

                                    <table id="kt_datatable_column_rendering" class="table table-striped table-row-bordered gy-5 gs-7">
                                        <thead>
                                            <tr class="fw-semibold fs-6 text-gray-800">
                                                <th>Menu</th>
                                                <th>URL</th>
                                                <th>Kategori</th>
                                                <th>Parent</th>
                                                <th>Role</th>
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        <tbody id="resultList">
                                            @foreach ($menus as $menu)
                                            <tr>
                                                <td>{{ $menu->menu }}</td>
                                                <td>{{ $menu->url }}</td>
                                                <td>{{ $menu->category }}</td>
                                                <td>{{ $menu->parent }}</td>
                                                <td>{{ $menu->role }}</td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        Actions
                                                        <i class="ki-outline ki-down fs-5 ms-1"></i>
                                                    </a>

                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" data-popper-placement="top-end">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ route('mis_menu.edit', $menu->id) }}" class="menu-link px-3">
                                                                Edit
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $menus->links('components.pagination') }}
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
