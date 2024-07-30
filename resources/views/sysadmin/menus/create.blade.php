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
                    <div class="row gy-5 g-xl-10">
                        <form action="{{ route('mis_menu.store') }}" method="POST">
                            @csrf
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Menu Navigation</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
        
                                <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Nama Menu</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" name="menu" class="form-control mb-2" placeholder="Nama Menu" value="">
                                                    <!--end::Input-->
                                                    <!--end::Description-->
                                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">URL Menu</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" name="url" class="form-control mb-2" placeholder="Barcode Number" value="">
                                                    <!--end::Input-->
                                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Kategori Menu</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                                        <select name="category" class="form-control">
                                                            <option value="Kredit">Kredit</option>
                                                            <option value="tabungan">Tabungan</option>
                                                            <option value="neraca">Neraca</option>
                                                            <option value="deposito">Deposito</option>
                                                            <option value="monitoring">Monitoring</option>
                                                            <option value="general">General</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Input-->
                                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Parent Menu</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                                        <select name="category" class="form-control">
                                                            <option>Silahkan Pilih Parent Menu</option>
                                                            @foreach ($menus as $item)
                                                                <option value="{{ $item->id }}">{{ $item->menu }}</option>   
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <!--end::Input-->
                                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Role Menu</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <div class="form-check form-check-custom form-check-solid mb-2">
                                                        <input class="form-control" type="text" name="role">
                                                    </div>
                                                    <!--end::Input-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Ketik role yg dapat akses menu ini</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                        </div>
                                    </div>
                                <!--end::Card header-->
                            </div>
                            <br>
                            <div class="d-flex justify-content-end">
                                <!--begin::Button-->
                                <a href="{{ route('mis_menu.index') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
                                    Cancel
                                </a>
                                <!--end::Button-->
                    
                                <!--begin::Button-->
                                <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                    <span class="indicator-label">
                                        Save Changes
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                                <!--end::Button-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection