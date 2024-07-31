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
                                        @include('Dashboard.component.card')
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        @include('Dashboard.component.statistik')
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        @include('Dashboard.component.segmentasi')
                                        <!--end::Row-->

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

        <div class="modal fade" tabindex="-1" id="kt_modal_1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Shortcut Menu</h3>

                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>

                    <div class="modal-body">
                        <ul>
                            @foreach(App\Helpers\MenuHelper::getMenus() as $menu)
                                <li><a href="{{ route($menu->url) }}">{{ $menu->menu }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
@endsection
@push('javascript')
<script>
    document.addEventListener('keydown', function(event) {
        if (event.ctrlKey && event.key === 'm') {
            $('#kt_modal_1').modal('show');
        }
    });

    var laba_data = [30, 40, 43, 90, 91, 72, 79, 56, 43, 55, 67, 80]
    var data_cair = [30, 40, 43, 90, 91, 72, 79, 56, 43, 55, 67, 80]
</script>
<script src="assets/js/custom/laba.js"></script>
<script src="assets/js/custom/kyd.js"></script>
<script src="assets/js/custom/pencairan.js"></script>
<script src="assets/js/custom/tabungan.js"></script>
<script src="assets/js/custom/deposito.js"></script>
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endpush
