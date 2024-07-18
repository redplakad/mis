
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Manajemen Informasi Sistem | PT BPR Serang</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by Bprserang" />
		<meta property="og:url" content="https://bprserang.co.id" />
		<meta property="og:site_name" content="BPR SERANG" />
		<link rel="canonical" href="http://preview.bprserang.co.id" />
		<link rel="shortcut icon" href="{{ env('APP_URL') }}/assets/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{ env('APP_URL') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ env('APP_URL') }}/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ env('APP_URL') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ env('APP_URL') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				@include('layouts.header')
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Toolbar-->
					<div id="kt_app_toolbar" class="app-toolbar">
						<!--begin::Toolbar container-->
						<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex align-items-start">
							<!--begin::Toolbar container-->
							<div class="d-flex flex-column flex-row-fluid">
								<!--begin::Toolbar wrapper-->
								<div class="d-flex align-items-center pt-1"></div>
								<!--end::Toolbar wrapper=-->
								<!--begin::Page title-->
								<div class="page-title d-flex align-items-center me-3 mb-4 pt-9 pt-lg-17 mb-lg-15">
									<div class="btn btn-icon btn-custom h-65px w-65px me-6">
										<img alt="Logo" src="{{ env('APP_URL') }}/assets/media/svg/misc/layer.svg" class="h-40px" />
									</div>
									<!--begin::Title-->
									<h1 class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">007 - Kantor Cabang Kragilan
									<!--begin::Description-->
									<span class="page-desc fs-6 fw-bold pt-4">
										<span class="custom-text me-3 lh-0">bprkragilan07ok@gmail.com</span>
									</span>
									<!--end::Description--></h1>
									<!--end::Title-->
								</div>
								<!--end::Page title-->
								<!--begin::Toolbar wrapper=-->
								<div class="d-flex justify-content-between flex-wrap gap-4 gap-lg-10">
									<!--begin::Toolbar menu-->
									<div class="app-toolbar-menu menu menu-rounded menu-gray-800 menu-state-bg flex-wrap fs-5 fw-semibold">
										<!--begin::Menu item-->
										<div class="menu-item pb-xl-8 pb-4 mt-5 mt-lg-0">
											<a class="menu-link active" href="{{ route('dashboard') }}">
												<span class="menu-title">Ringkasan</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item pb-xl-8 pb-4 mt-5 mt-lg-0">
											<a class="menu-link" href="{{ route('dashboard.neraca') }}">
												<span class="menu-title">Neraca</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item pb-xl-8 pb-4 mt-5 mt-lg-0">
											<a class="menu-link" href="{{ route('dashboard.kredit') }}">
												<span class="menu-title">Kredit</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item pb-xl-8 pb-4 mt-5 mt-lg-0">
											<a class="menu-link" href="{{ route('dashboard.tabungan') }}">
												<span class="menu-title">Tabungan</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item pb-xl-8 pb-4 mt-5 mt-lg-0">
											<a class="menu-link" href="{{ route('dashboard.deposito') }}">
												<span class="menu-title">Deposito</span>
											</a>
										</div>
									</div>
								</div>
								<!--end::Toolbar wrapper=-->
							</div>
							<!--end::Toolbar container=-->
						</div>
						<!--end::Toolbar container-->
					</div>
					<!--end::Toolbar-->
				@yield('contents')
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->

		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-outline ki-arrow-up"></i>
		</div>
		<!--end::Scrolltop-->


		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ env('APP_URL') }}/assets/plugins/global/plugins.bundle.js"></script>
		<script src="{{ env('APP_URL') }}/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{ env('APP_URL') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="{{ env('APP_URL') }}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ env('APP_URL') }}/assets/js/widgets.bundle.js"></script>
		<script src="{{ env('APP_URL') }}/assets/js/custom/widgets.js"></script>
		<script src="{{ env('APP_URL') }}/assets/js/custom/apps/chat/chat.js"></script>
		<script src="{{ env('APP_URL') }}/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="{{ env('APP_URL') }}/assets/js/custom/utilities/modals/new-target.js"></script>
		<script src="{{ env('APP_URL') }}/assets/js/custom/utilities/modals/users-search.js"></script>
        @stack('javascript')
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
