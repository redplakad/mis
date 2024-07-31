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
                            <div class="card">
                                <!--begin::Card header-->
                                <div class="card-header border-0 pt-6">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1">
                                            <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i> <input type="text"
                                                data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13"
                                                placeholder="Search user">
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--begin::Card title-->

                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Toolbar-->
                                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                            <!--begin::Filter-->
                                            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                                                data-kt-menu-placement="bottom-end">
                                                <i class="ki-outline ki-filter fs-2"></i> Filter
                                            </button>
                                            <!--begin::Menu 1-->
                                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                                <!--begin::Header-->
                                                <div class="px-7 py-5">
                                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                                </div>
                                                <!--end::Header-->

                                                <!--begin::Separator-->
                                                <div class="separator border-gray-200"></div>
                                                <!--end::Separator-->

                                                <!--begin::Content-->
                                                <div class="px-7 py-5" data-kt-user-table-filter="form">
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <label class="form-label fs-6 fw-semibold">Role:</label>
                                                        <select class="form-select form-select-solid fw-bold select2-hidden-accessible"
                                                            data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true"
                                                            data-kt-user-table-filter="role" data-hide-search="true"
                                                            data-select2-id="select2-data-7-vor3" tabindex="-1" aria-hidden="true"
                                                            data-kt-initialized="1">
                                                            <option data-select2-id="select2-data-9-1d1u"></option>
                                                            <option value="Administrator">Administrator</option>
                                                            <option value="Analyst">Analyst</option>
                                                            <option value="Developer">Developer</option>
                                                            <option value="Support">Support</option>
                                                            <option value="Trial">Trial</option>
                                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                            dir="ltr" data-select2-id="select2-data-8-h2vh" style="width: 100%;"><span
                                                                class="selection"><span
                                                                    class="select2-selection select2-selection--single form-select form-select-solid fw-bold"
                                                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                                    aria-disabled="false" aria-labelledby="select2-zjk5-container"
                                                                    aria-controls="select2-zjk5-container"><span class="select2-selection__rendered"
                                                                        id="select2-zjk5-container" role="textbox" aria-readonly="true"
                                                                        title="Select option"><span class="select2-selection__placeholder">Select
                                                                            option</span></span><span class="select2-selection__arrow"
                                                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <label class="form-label fs-6 fw-semibold">Two Step Verification:</label>
                                                        <select class="form-select form-select-solid fw-bold select2-hidden-accessible"
                                                            data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true"
                                                            data-kt-user-table-filter="two-step" data-hide-search="true"
                                                            data-select2-id="select2-data-10-o8cn" tabindex="-1" aria-hidden="true"
                                                            data-kt-initialized="1">
                                                            <option data-select2-id="select2-data-12-v1ki"></option>
                                                            <option value="Enabled">Enabled</option>
                                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                            dir="ltr" data-select2-id="select2-data-11-9mt9" style="width: 100%;"><span
                                                                class="selection"><span
                                                                    class="select2-selection select2-selection--single form-select form-select-solid fw-bold"
                                                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                                    aria-disabled="false" aria-labelledby="select2-xt8z-container"
                                                                    aria-controls="select2-xt8z-container"><span class="select2-selection__rendered"
                                                                        id="select2-xt8z-container" role="textbox" aria-readonly="true"
                                                                        title="Select option"><span class="select2-selection__placeholder">Select
                                                                            option</span></span><span class="select2-selection__arrow"
                                                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset"
                                                            class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                                            data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                                        <button type="submit" class="btn btn-primary fw-semibold px-6"
                                                            data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Menu 1--> <!--end::Filter-->

                                            <!--begin::Export-->
                                            <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_export_users">
                                                <i class="ki-outline ki-exit-up fs-2"></i> Export
                                            </button>
                                            <!--end::Export-->

                                            <!--begin::Add user-->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_add_user">
                                                <i class="ki-outline ki-plus fs-2"></i> Add User
                                            </button>
                                            <!--end::Add user-->
                                        </div>
                                        <!--end::Toolbar-->

                                        <!--begin::Group actions-->
                                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                                            <div class="fw-bold me-5">
                                                <span class="me-2" data-kt-user-table-select="selected_count"></span> Selected
                                            </div>

                                            <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">
                                                Delete Selected
                                            </button>
                                        </div>
                                        <!--end::Group actions-->

                                        <!--begin::Modal - Adjust Balance-->
                                        <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header">
                                                        <!--begin::Modal title-->
                                                        <h2 class="fw-bold">Export Users</h2>
                                                        <!--end::Modal title-->

                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                            data-kt-users-modal-action="close">
                                                            <i class="ki-outline ki-cross fs-1"></i>
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>
                                                    <!--end::Modal header-->

                                                    <!--begin::Modal body-->
                                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                        <!--begin::Form-->
                                                        <form id="kt_modal_export_users_form"
                                                            class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="fs-6 fw-semibold form-label mb-2">Select Roles:</label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <select name="role" data-control="select2" data-placeholder="Select a role"
                                                                    data-hide-search="true"
                                                                    class="form-select form-select-solid fw-bold select2-hidden-accessible"
                                                                    data-select2-id="select2-data-13-jgpx" tabindex="-1" aria-hidden="true"
                                                                    data-kt-initialized="1">
                                                                    <option data-select2-id="select2-data-15-fyad"></option>
                                                                    <option value="Administrator">Administrator</option>
                                                                    <option value="Analyst">Analyst</option>
                                                                    <option value="Developer">Developer</option>
                                                                    <option value="Support">Support</option>
                                                                    <option value="Trial">Trial</option>
                                                                </select><span class="select2 select2-container select2-container--bootstrap5"
                                                                    dir="ltr" data-select2-id="select2-data-14-1x62"
                                                                    style="width: 100%;"><span class="selection"><span
                                                                            class="select2-selection select2-selection--single form-select form-select-solid fw-bold"
                                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                                            tabindex="0" aria-disabled="false"
                                                                            aria-labelledby="select2-role-98-container"
                                                                            aria-controls="select2-role-98-container"><span
                                                                                class="select2-selection__rendered" id="select2-role-98-container"
                                                                                role="textbox" aria-readonly="true" title="Select a role"><span
                                                                                    class="select2-selection__placeholder">Select a
                                                                                    role</span></span><span class="select2-selection__arrow"
                                                                                role="presentation"><b
                                                                                    role="presentation"></b></span></span></span><span
                                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10 fv-plugins-icon-container">
                                                                <!--begin::Label-->
                                                                <label class="required fs-6 fw-semibold form-label mb-2">Select Export
                                                                    Format:</label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <select name="format" data-control="select2" data-placeholder="Select a format"
                                                                    data-hide-search="true"
                                                                    class="form-select form-select-solid fw-bold select2-hidden-accessible"
                                                                    data-select2-id="select2-data-16-by7z" tabindex="-1" aria-hidden="true"
                                                                    data-kt-initialized="1">
                                                                    <option data-select2-id="select2-data-18-qm90"></option>
                                                                    <option value="excel">Excel</option>
                                                                    <option value="pdf">PDF</option>
                                                                    <option value="cvs">CVS</option>
                                                                    <option value="zip">ZIP</option>
                                                                </select><span class="select2 select2-container select2-container--bootstrap5"
                                                                    dir="ltr" data-select2-id="select2-data-17-xcpw"
                                                                    style="width: 100%;"><span class="selection"><span
                                                                            class="select2-selection select2-selection--single form-select form-select-solid fw-bold"
                                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                                            tabindex="0" aria-disabled="false"
                                                                            aria-labelledby="select2-format-5t-container"
                                                                            aria-controls="select2-format-5t-container"><span
                                                                                class="select2-selection__rendered"
                                                                                id="select2-format-5t-container" role="textbox"
                                                                                aria-readonly="true" title="Select a format"><span
                                                                                    class="select2-selection__placeholder">Select a
                                                                                    format</span></span><span class="select2-selection__arrow"
                                                                                role="presentation"><b
                                                                                    role="presentation"></b></span></span></span><span
                                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                <!--end::Input-->
                                                                <div
                                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Actions-->
                                                            <div class="text-center">
                                                                <button type="reset" class="btn btn-light me-3"
                                                                    data-kt-users-modal-action="cancel">
                                                                    Discard
                                                                </button>

                                                                <button type="submit" class="btn btn-primary"
                                                                    data-kt-users-modal-action="submit">
                                                                    <span class="indicator-label">
                                                                        Submit
                                                                    </span>
                                                                    <span class="indicator-progress">
                                                                        Please wait... <span
                                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </form>
                                                        <!--end::Form-->
                                                    </div>
                                                    <!--end::Modal body-->
                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
                                        </div>
                                        <!--end::Modal - New Card-->

                                        <!--begin::Modal - Add task-->
                                        <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header" id="kt_modal_add_user_header">
                                                        <!--begin::Modal title-->
                                                        <h2 class="fw-bold">Add User</h2>
                                                        <!--end::Modal title-->

                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                            data-kt-users-modal-action="close">
                                                            <i class="ki-outline ki-cross fs-1"></i>
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>
                                                    <!--end::Modal header-->

                                                    <!--begin::Modal body-->
                                                    <div class="modal-body px-5 my-7">
                                                        <!--begin::Form-->
                                                        <form id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                                            action="#">
                                                            <!--begin::Scroll-->
                                                            <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll"
                                                                data-kt-scroll="true" data-kt-scroll-activate="true"
                                                                data-kt-scroll-max-height="auto"
                                                                data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                                data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px"
                                                                style="max-height: 183px;">
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="d-block fw-semibold fs-6 mb-5">Avatar</label>
                                                                    <!--end::Label-->


                                                                    <!--begin::Image placeholder-->
                                                                    <style>
                                                                        .image-input-placeholder {
                                                                            background-image: url('/metronic8/demo32/assets/media/svg/files/blank-image.svg');
                                                                        }

                                                                        [data-bs-theme="dark"] .image-input-placeholder {
                                                                            background-image: url('/metronic8/demo32/assets/media/svg/files/blank-image-dark.svg');
                                                                        }
                                                                    </style>
                                                                    <!--end::Image placeholder-->
                                                                    <!--begin::Image input-->
                                                                    <div class="image-input image-input-outline image-input-placeholder"
                                                                        data-kt-image-input="true">
                                                                        <!--begin::Preview existing avatar-->
                                                                        <div class="image-input-wrapper w-125px h-125px"
                                                                            style="background-image: url(/metronic8/demo32/assets/media/avatars/300-6.jpg);">
                                                                        </div>
                                                                        <!--end::Preview existing avatar-->

                                                                        <!--begin::Label-->
                                                                        <label
                                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                                            aria-label="Change avatar" data-bs-original-title="Change avatar"
                                                                            data-kt-initialized="1">
                                                                            <i class="ki-outline ki-pencil fs-7"></i>
                                                                            <!--begin::Inputs-->
                                                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                                                            <input type="hidden" name="avatar_remove">
                                                                            <!--end::Inputs-->
                                                                        </label>
                                                                        <!--end::Label-->

                                                                        <!--begin::Cancel-->
                                                                        <span
                                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                                            aria-label="Cancel avatar" data-bs-original-title="Cancel avatar"
                                                                            data-kt-initialized="1">
                                                                            <i class="ki-outline ki-cross fs-2"></i> </span>
                                                                        <!--end::Cancel-->

                                                                        <!--begin::Remove-->
                                                                        <span
                                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                                            aria-label="Remove avatar" data-bs-original-title="Remove avatar"
                                                                            data-kt-initialized="1">
                                                                            <i class="ki-outline ki-cross fs-2"></i> </span>
                                                                        <!--end::Remove-->
                                                                    </div>
                                                                    <!--end::Image input-->

                                                                    <!--begin::Hint-->
                                                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                                    <!--end::Hint-->
                                                                </div>
                                                                <!--end::Input group-->

                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                                    <!--begin::Label-->
                                                                    <label class="required fw-semibold fs-6 mb-2">Full Name</label>
                                                                    <!--end::Label-->

                                                                    <!--begin::Input-->
                                                                    <input type="text" name="user_name"
                                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                                        placeholder="Full name" value="Emma Smith">
                                                                    <!--end::Input-->
                                                                    <div
                                                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                                    </div>
                                                                </div>
                                                                <!--end::Input group-->

                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                                    <!--begin::Label-->
                                                                    <label class="required fw-semibold fs-6 mb-2">Email</label>
                                                                    <!--end::Label-->

                                                                    <!--begin::Input-->
                                                                    <input type="email" name="user_email"
                                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                                        placeholder="example@domain.com" value="smith@kpmg.com">
                                                                    <!--end::Input-->
                                                                    <div
                                                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                                    </div>
                                                                </div>
                                                                <!--end::Input group-->

                                                                <!--begin::Input group-->
                                                                <div class="mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="required fw-semibold fs-6 mb-5">Role</label>
                                                                    <!--end::Label-->

                                                                    <!--begin::Roles-->
                                                                    <!--begin::Input row-->
                                                                    <div class="d-flex fv-row">
                                                                        <!--begin::Radio-->
                                                                        <div class="form-check form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input me-3" name="user_role" type="radio"
                                                                                value="0" id="kt_modal_update_role_option_0"
                                                                                checked="checked">
                                                                            <!--end::Input-->

                                                                            <!--begin::Label-->
                                                                            <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                                                <div class="fw-bold text-gray-800">Administrator</div>
                                                                                <div class="text-gray-600">Best for business owners and company
                                                                                    administrators</div>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Radio-->
                                                                    </div>
                                                                    <!--end::Input row-->

                                                                    <div class="separator separator-dashed my-5"></div> <!--begin::Input row-->
                                                                    <div class="d-flex fv-row">
                                                                        <!--begin::Radio-->
                                                                        <div class="form-check form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input me-3" name="user_role" type="radio"
                                                                                value="1" id="kt_modal_update_role_option_1">
                                                                            <!--end::Input-->

                                                                            <!--begin::Label-->
                                                                            <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                                                <div class="fw-bold text-gray-800">Developer</div>
                                                                                <div class="text-gray-600">Best for developers or people primarily
                                                                                    using the API</div>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Radio-->
                                                                    </div>
                                                                    <!--end::Input row-->

                                                                    <div class="separator separator-dashed my-5"></div> <!--begin::Input row-->
                                                                    <div class="d-flex fv-row">
                                                                        <!--begin::Radio-->
                                                                        <div class="form-check form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input me-3" name="user_role" type="radio"
                                                                                value="2" id="kt_modal_update_role_option_2">
                                                                            <!--end::Input-->

                                                                            <!--begin::Label-->
                                                                            <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                                                <div class="fw-bold text-gray-800">Analyst</div>
                                                                                <div class="text-gray-600">Best for people who need full access to
                                                                                    analytics data, but don't need to update business settings</div>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Radio-->
                                                                    </div>
                                                                    <!--end::Input row-->

                                                                    <div class="separator separator-dashed my-5"></div> <!--begin::Input row-->
                                                                    <div class="d-flex fv-row">
                                                                        <!--begin::Radio-->
                                                                        <div class="form-check form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input me-3" name="user_role" type="radio"
                                                                                value="3" id="kt_modal_update_role_option_3">
                                                                            <!--end::Input-->

                                                                            <!--begin::Label-->
                                                                            <label class="form-check-label" for="kt_modal_update_role_option_3">
                                                                                <div class="fw-bold text-gray-800">Support</div>
                                                                                <div class="text-gray-600">Best for employees who regularly refund
                                                                                    payments and respond to disputes</div>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Radio-->
                                                                    </div>
                                                                    <!--end::Input row-->

                                                                    <div class="separator separator-dashed my-5"></div> <!--begin::Input row-->
                                                                    <div class="d-flex fv-row">
                                                                        <!--begin::Radio-->
                                                                        <div class="form-check form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input me-3" name="user_role" type="radio"
                                                                                value="4" id="kt_modal_update_role_option_4">
                                                                            <!--end::Input-->

                                                                            <!--begin::Label-->
                                                                            <label class="form-check-label" for="kt_modal_update_role_option_4">
                                                                                <div class="fw-bold text-gray-800">Trial</div>
                                                                                <div class="text-gray-600">Best for people who need to preview
                                                                                    content data, but don't need to make any updates</div>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Radio-->
                                                                    </div>
                                                                    <!--end::Input row-->

                                                                    <!--end::Roles-->
                                                                </div>
                                                                <!--end::Input group-->
                                                            </div>
                                                            <!--end::Scroll-->

                                                            <!--begin::Actions-->
                                                            <div class="text-center pt-10">
                                                                <button type="reset" class="btn btn-light me-3"
                                                                    data-kt-users-modal-action="cancel">
                                                                    Discard
                                                                </button>

                                                                <button type="submit" class="btn btn-primary"
                                                                    data-kt-users-modal-action="submit">
                                                                    <span class="indicator-label">
                                                                        Submit
                                                                    </span>
                                                                    <span class="indicator-progress">
                                                                        Please wait... <span
                                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </form>
                                                        <!--end::Form-->
                                                    </div>
                                                    <!--end::Modal body-->
                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
                                        </div>
                                        <!--end::Modal - Add task-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body py-4">

                                    <!--begin::Table-->
                                    <div id="kt_table_users_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
                                        <div id="" class="table-responsive">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="kt_table_users"
                                                style="width: 1201.5px;">
                                                <colgroup>
                                                    <col data-dt-column="0" style="width: 36.3906px;">
                                                    <col data-dt-column="1" style="width: 225.422px;">
                                                    <col data-dt-column="2" style="width: 181.625px;">
                                                    <col data-dt-column="3" style="width: 181.625px;">
                                                    <col data-dt-column="4" style="width: 181.625px;">
                                                    <col data-dt-column="5" style="width: 241.953px;">
                                                    <col data-dt-column="6" style="width: 152.859px;">
                                                </colgroup>
                                                <thead>
                                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0" role="row">
                                                        <th class="w-10px pe-2 dt-orderable-none" data-dt-column="0" rowspan="1"
                                                            colspan="1" aria-label=""><span class="dt-column-title">
                                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                                        data-kt-check-target="#kt_table_users .form-check-input" value="1">
                                                                </div>
                                                            </span><span class="dt-column-order"></span></th>
                                                        <th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="1"
                                                            rowspan="1" colspan="1" aria-label="User: Activate to sort" tabindex="0">
                                                            <span class="dt-column-title" role="button">Pegawai</span><span
                                                                class="dt-column-order"></span></th>
                                                        <th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="2"
                                                            rowspan="1" colspan="1" aria-label="Role: Activate to sort" tabindex="0">
                                                            <span class="dt-column-title" role="button">Posisi</span><span
                                                                class="dt-column-order"></span></th>
                                                        <th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="3"
                                                            rowspan="1" colspan="1" aria-label="Last login: Activate to sort"
                                                            tabindex="0"><span class="dt-column-title" role="button">Plan</span><span
                                                                class="dt-column-order"></span></th>
                                                        <th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="4"
                                                            rowspan="1" colspan="1" aria-label="Two-step : Activate to sort"
                                                            tabindex="0"><span class="dt-column-title" role="button">Action</span><span
                                                                class="dt-column-order"></span></th>
                                                        <th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="5"
                                                            rowspan="1" colspan="1" aria-label="Joined Date: Activate to sort"
                                                            tabindex="0"><span class="dt-column-title" role="button">Result</span><span
                                                                class="dt-column-order"></span></th>
                                                                <th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="5"
                                                                    rowspan="1" colspan="1" aria-label="Joined Date: Activate to sort"
                                                                    tabindex="0"><span class="dt-column-title" role="button">Grade</span><span
                                                                        class="dt-column-order"></span></th>
                                                        <th class="text-end min-w-100px dt-orderable-none" data-dt-column="6" rowspan="1"
                                                            colspan="1" aria-label="Actions"><span class="dt-column-title">Actions</span><span
                                                                class="dt-column-order"></span></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-gray-600 fw-semibold">
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="1">
                                                            </div>
                                                        </td>
                                                        <td class="d-flex align-items-center">
                                                            <!--begin:: Avatar -->
                                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                <a href="/metronic8/demo32/apps/user-management/users/view.html">
                                                                    <div class="symbol-label">
                                                                        <img src="{{ env('APP_URL') }}/assets/media/avatars/300-1.jpg"
                                                                            alt="Dimas Saputra" class="w-100">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::User details-->
                                                            <div class="d-flex flex-column">
                                                                <a href="/metronic8/demo32/apps/user-management/users/view.html"
                                                                    class="text-gray-800 text-hover-primary mb-1">Dimas Saputra</a>
                                                                <span>dimas@bankserang.com</span>
                                                            </div>
                                                            <!--begin::User details-->
                                                        </td>
                                                        <td>
                                                            Supervisor Bisnis </td>
                                                        <td data-order="2024-07-30T11:12:47+07:00">
                                                            280/300
                                                            <div class="badge badge-primary fw-bold">80%</div>
                                                        </td>
                                                        <td>
                                                            196/280
                                                            <div class="badge badge-warning fw-bold">70%</div>
                                                        </td>
                                                        <td>
                                                            98/196
                                                            <div class="badge badge-danger fw-bold">50%</div>
                                                        </td>
                                                        <td>
                                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                <div class="symbol-label fs-3 bg-light-primary text-primary">
                                                                        <strong>B</strong>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                Actions
                                                                <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                                            <!--begin::Menu-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                                data-kt-menu="true" style="">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="/metronic8/demo32/apps/user-management/users/view.html"
                                                                        class="menu-link px-3">
                                                                        Edit
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3"
                                                                        data-kt-users-table-filter="delete_row">
                                                                        Delete
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu-->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="1">
                                                            </div>
                                                        </td>
                                                        <td class="d-flex align-items-center">
                                                            <!--begin:: Avatar -->
                                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                <a href="/metronic8/demo32/apps/user-management/users/view.html">
                                                                    <div class="symbol-label">
                                                                        <img src="{{ env('APP_URL') }}/assets/media/avatars/300-1.jpg"
                                                                            alt="Emma Smith" class="w-100">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::User details-->
                                                            <div class="d-flex flex-column">
                                                                <a href="/metronic8/demo32/apps/user-management/users/view.html"
                                                                    class="text-gray-800 text-hover-primary mb-1">Agus Widodo</a>
                                                                <span>agus@bankserang.com</span>
                                                            </div>
                                                            <!--begin::User details-->
                                                        </td>
                                                        <td>
                                                            Leader Kredit </td>
                                                        <td data-order="2024-07-30T11:12:47+07:00">
                                                            60/100
                                                            <div class="badge badge-warning fw-bold">60%</div>
                                                        </td>
                                                        <td>
                                                            196/280
                                                            <div class="badge badge-warning fw-bold">70%</div>
                                                        </td>
                                                        <td>
                                                            98/196
                                                            <div class="badge badge-danger fw-bold">50%</div>
                                                        </td>
                                                        <td>
                                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                <div class="symbol-label fs-3 bg-light-warning text-warning">
                                                                        <strong>C</strong>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                Actions
                                                                <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                                            <!--begin::Menu-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                                data-kt-menu="true" style="">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="/metronic8/demo32/apps/user-management/users/view.html"
                                                                        class="menu-link px-3">
                                                                        Edit
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3"
                                                                        data-kt-users-table-filter="delete_row">
                                                                        Delete
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu-->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="1">
                                                            </div>
                                                        </td>
                                                        <td class="d-flex align-items-center">
                                                            <!--begin:: Avatar -->
                                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                <a href="/metronic8/demo32/apps/user-management/users/view.html">
                                                                    <div class="symbol-label">
                                                                        <img src="{{ env('APP_URL') }}/assets/media/avatars/300-1.jpg"
                                                                            alt="Emma Smith" class="w-100">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::User details-->
                                                            <div class="d-flex flex-column">
                                                                <a href="/metronic8/demo32/apps/user-management/users/view.html"
                                                                    class="text-gray-800 text-hover-primary mb-1">Ahmad Santoso</a>
                                                                <span>ahmad@bankserang.com</span>
                                                            </div>
                                                            <!--begin::User details-->
                                                        </td>
                                                        <td>
                                                            Account Officer </td>
                                                        <td data-order="2024-07-30T11:12:47+07:00">
                                                            80/100
                                                            <div class="badge badge-primary fw-bold">80%</div>
                                                        </td>
                                                        <td>
                                                            56/80
                                                            <div class="badge badge-warning fw-bold">70%</div>
                                                        </td>
                                                        <td>
                                                            56/56
                                                            <div class="badge badge-primary fw-bold">100%</div>
                                                        </td>
                                                        <td>
                                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                <div class="symbol-label fs-3 bg-light-primary text-primary">
                                                                        <strong>A</strong>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                Actions
                                                                <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                                            <!--begin::Menu-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                                data-kt-menu="true" style="">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="/metronic8/demo32/apps/user-management/users/view.html"
                                                                        class="menu-link px-3">
                                                                        Edit
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3"
                                                                        data-kt-users-table-filter="delete_row">
                                                                        Delete
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu-->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="1">
                                                            </div>
                                                        </td>
                                                        <td class="d-flex align-items-center">
                                                            <!--begin:: Avatar -->
                                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                <a href="/metronic8/demo32/apps/user-management/users/view.html">
                                                                    <div class="symbol-label">
                                                                        <img src="{{ env('APP_URL') }}/assets/media/avatars/300-1.jpg"
                                                                            alt="Emma Smith" class="w-100">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::User details-->
                                                            <div class="d-flex flex-column">
                                                                <a href="/metronic8/demo32/apps/user-management/users/view.html"
                                                                    class="text-gray-800 text-hover-primary mb-1">Jaya Jaenudin</a>
                                                                <span>jaya@bankserang.com</span>
                                                            </div>
                                                            <!--begin::User details-->
                                                        </td>
                                                        <td>
                                                            Account Officer </td>
                                                        <td data-order="2024-07-30T11:12:47+07:00">
                                                            20/100
                                                            <div class="badge badge-danger fw-bold">20%</div>
                                                        </td>
                                                        <td>
                                                            10/20
                                                            <div class="badge badge-warning fw-bold">50%</div>
                                                        </td>
                                                        <td>
                                                            2/10
                                                            <div class="badge badge-danger fw-bold">20%</div>
                                                        </td>
                                                        <td>
                                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                                        <strong>D</strong>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                Actions
                                                                <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                                            <!--begin::Menu-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                                data-kt-menu="true" style="">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="/metronic8/demo32/apps/user-management/users/view.html"
                                                                        class="menu-link px-3">
                                                                        Edit
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3"
                                                                        data-kt-users-table-filter="delete_row">
                                                                        Delete
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu-->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot></tfoot>
                                            </table>
                                        </div>
                                        <div id="" class="row">
                                            <div id=""
                                                class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar">
                                            </div>
                                            <div id=""
                                                class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                                <div class="dt-paging paging_simple_numbers">
                                                    <ul class="pagination">
                                                        <li class="dt-paging-button page-item disabled"><a class="page-link previous"
                                                                aria-controls="kt_table_users" aria-disabled="true" aria-label="Previous"
                                                                data-dt-idx="previous" tabindex="-1"><i class="previous"></i></a></li>
                                                        <li class="dt-paging-button page-item active"><a href="#" class="page-link"
                                                                aria-controls="kt_table_users" aria-current="page" data-dt-idx="0"
                                                                tabindex="0">1</a></li>
                                                        <li class="dt-paging-button page-item"><a href="#" class="page-link"
                                                                aria-controls="kt_table_users" data-dt-idx="1" tabindex="0">2</a></li>
                                                        <li class="dt-paging-button page-item"><a href="#" class="page-link"
                                                                aria-controls="kt_table_users" data-dt-idx="2" tabindex="0">3</a></li>
                                                        <li class="dt-paging-button page-item"><a href="#" class="page-link next"
                                                                aria-controls="kt_table_users" aria-label="Next" data-dt-idx="next"
                                                                tabindex="0"><i class="next"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Card body-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
