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
                        <div class="col-sm-6 col-xl-2 mb-xl-10">
                            @include('card.neraca.statRatio')
                        </div>
                    </div>
                    <div class="row gy-5 g-xl-10">
                        <div class="col-xxl-4 mb-5 mb-xl-10">
                            @include('card.neraca.statBalance')
                        </div>
                        <div class="col-xxl-4 mb-5 mb-xl-10">
                            @include('card.neraca.statMutation')
                        </div>
                        <div class="col-xxl-4 mb-5 mb-xl-10">
                            @include('card.neraca.statProjection')
                        </div>
                    </div>
                    <div class="row gy-5 g-xl-10"">
                        <div class="col-xxl-6 mb-5 mb-xl-10">
                            @include('card.neraca.chartRevenue')
                        </div>
                        <div class="col-xxl-6 mb-5 mb-xl-10">
                            @include('card.neraca.chartExpense')
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="{{ env('APP_URL') }}/assets/js/dashboard/neraca/chartRevenue.js"></script>
<script type="text/javascript" src="{{ env('APP_URL') }}/assets/js/dashboard/neraca/chartExpense.js"></script>
@endpush
