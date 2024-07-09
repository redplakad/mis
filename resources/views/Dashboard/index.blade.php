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
									<!--begin::Row-->
									@include('Dashboard.index.card')
									<!--end::Row-->
									<!--begin::Row-->
									@include('Dashboard.index.statistik')
									<!--end::Row-->
									<!--begin::Row-->
                                    @include('Dashboard.index.segmentasi')
									<!--end::Row-->

								</div>
								<!--end::Content-->
							</div>
							<!--end::Content wrapper-->
						</div>
						<!--end:::Main-->
					</div>
					<!--end::Wrapper container-->
@endsection
@push('javascript')
<script>
    var laba_data = [30, 40, 43, 90, 91, 72, 79, 56, 43, 55, 67, 80]
</script>
<script src="assets/js/custom/laba.js"></script>
<script src="assets/js/custom/kyd.js"></script>
<script src="assets/js/custom/pencairan.js"></script>
<script src="assets/js/custom/tabungan.js"></script>
<script src="assets/js/custom/deposito.js"></script>
@endpush
