<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
					<!--begin::Header container-->
					<div class="app-container container-xxl d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<!--begin::Header mobile toggle-->
						<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
								<i class="ki-outline ki-abstract-14 fs-2 text-white"></i>
							</div>
						</div>
						<!--end::Header mobile toggle-->
						<!--begin::Logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
							<a href="index.html">
								<img alt="Logo" src="assets/logo.png" class="h-40px d-lg-none" />
								<img alt="Logo" src="assets/logo.png" class="h-40px d-none d-lg-inline" />
							</a>
						</div>
						<!--end::Logo-->
						<!--begin::Header wrapper-->
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
							<!--begin::Menu wrapper-->
							@include('layouts.topmenu')
							<!--end::Menu wrapper-->
							<!--begin::Navbar-->
							<div class="app-navbar flex-shrink-0">
								<!--begin::Search-->
								@include('layouts.search')
								<!--end::Search-->
								<!--begin::Chat-->
								<div class="app-navbar-item ms-1 ms-lg-5">
									<!--begin::Menu wrapper-->
									<div class="btn btn-icon btn-color-white btn-active-color-primary w-35px h-35px w-md-40px h-md-40px position-relative">
										<i class="ki-outline ki-notification-on fs-1"></i>
									</div>
									<!--end::Menu wrapper-->
								</div>
								<!--end::Chat-->
								<!--begin::User menu-->
								@include('layouts.usermenu')
								<!--end::User menu-->
							</div>
							<!--end::Navbar-->
						</div>
						<!--end::Header wrapper-->
					</div>
					<!--end::Header container-->
				</div>
