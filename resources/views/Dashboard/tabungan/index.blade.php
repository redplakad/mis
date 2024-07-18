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
                    <div class="row gy-5 g-xl-10"">
                        <div class="col-xxl-4 mb-5 mb-xl-10">
                            @include('card.saving.balance')
                        </div>
                        <div class="col-xxl-4 mb-5 mb-xl-10">
                            @include('card.saving.deposit')
                        </div>
                        <div class="col-xxl-4 mb-5 mb-xl-10">
                            @include('card.saving.withdraw')
                        </div>
                    </div>
					<div class="row gy-5 g-xl-10"">
                        <div class="col-xl-6 mb-5 mb-xl-10">
                            @include('card.saving.statisticBalance')
                        </div>
                        <div class="col-xl-6 mb-5 mb-xl-10">
                            @include('card.saving.produk')
                        </div>
                    </div>
					<div class="row gy-5 g-xl-10"">
                        @include('card.saving.kas')
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
<script>
    var data_cair = [30, 40, 43, 90, 91, 72, 79, 56, 43, 55, 67, 80]
    var data_npl = [10, 20, 53, 40, 71, 32, 49, 86, 43, 65, 77, 90]
    var data_ppap = [10, 30, 53, 80, 61, 82, 69, 86, 63, 75, 97, 30]
    var data_produk = [10, 30, 53, 80, 61, 82, 69, 86, 63, 75, 97, 30]
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
@endpush
