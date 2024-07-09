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
									<div class="row gx-5 gx-xl-10">
										<!--begin::Col-->
										<div class="col-xxl-4 mb-5 mb-xl-10">
											<!--begin::Chart widget 28-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header py-7">
													<!--begin::Statistics-->
													<div class="m-0">
														<!--begin::Heading-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Title-->
															<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">694,133</span>
															<!--end::Title-->
															<!--begin::Label-->
															<span class="badge badge-light-success fs-base">
															<i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.2%</span>
															<!--end::Label-->
														</div>
														<!--end::Heading-->
														<!--begin::Description-->
														<span class="fs-6 fw-semibold text-gray-500">Laba Rugi (Dalam Ribuan)</span>
														<!--end::Description-->
													</div>
													<!--end::Statistics-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body d-flex align-items-end ps-4 pe-0 pb-4">
													<!--begin::Chart-->
													<div id="kt_charts_laba" class="h-300px w-100 min-h-auto" style="height: 300px;"></div>
													<!--end::Chart-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 28-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xxl-4 mb-5 mb-xl-10">
											<!--begin::Chart widget 27-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header py-7">
													<!--begin::Statistics-->
													<div class="m-0">
														<!--begin::Heading-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Title-->
															<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"> 56,782,497</span>
															<!--end::Title-->
															<!--begin::Label-->
															<span class="badge badge-light-danger fs-base">
															<i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>8.02%</span>
															<!--end::Label-->
														</div>
														<!--end::Heading-->
														<!--begin::Description-->
														<span class="fs-6 fw-semibold text-gray-500">Kredit Yang Diberikan (Dalam Ribuan)</span>
														<!--end::Description-->
													</div>
													<!--end::Statistics-->

												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-0 pb-1">
													<div id="kt_charts_kyd" class="min-h-auto" style="height: 300px"></div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 27-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xxl-4 mb-5 mb-xl-10">
											<!--begin::List widget 9-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header py-7">
													<!--begin::Statistics-->
													<div class="m-0">
														<!--begin::Heading-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Title-->
															<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">55,608,003</span>
															<!--end::Title-->
															<!--begin::Label-->
															<span class="badge badge-light-success fs-base">
															<i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.2%</span>
															<!--end::Label-->
														</div>
														<!--end::Heading-->
														<!--begin::Description-->
														<span class="fs-6 fw-semibold text-gray-500">Balance Sheet (Dalam Ribuan)</span>
														<!--end::Description-->
													</div>
													<!--end::Statistics-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body card-body d-flex justify-content-between flex-column pt-3">
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Flag-->
														<i class="ki-duotone ki-crown fs-3x text-success me-4 w-30px">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <!--end::Flag-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Aktiva</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Bulan ini</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bold fs-4 me-3">55,608,003</span>
																<!--end::Number-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Flag-->
														<i class="ki-duotone ki-graph-up fs-3x text-primary me-4 w-30px">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                            <span class="path5"></span>
                                                            <span class="path6"></span>
                                                        </i>
                                                        <!--end::Flag-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Pend. Operasional</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Bulan ini</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bold fs-4 me-3">7,087,057</span>
																<!--end::Number-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Flag-->
														<i class="ki-duotone ki-chart-line-down-2 text-danger fs-3x me-4 w-30px">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <!--end::Flag-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Beban Operasional</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Bulan ini</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bold fs-4 me-3">6,392,596</span>
																<!--end::Number-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Flag-->
														<i class="ki-duotone ki-chart-line-up-2 text-primary fs-3x me-4 w-30px">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <!--end::Flag-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Pend. Non Operasional</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Bulan ini</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bold fs-4 me-3">1,608</span>
																<!--end::Number-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Flag-->
														<i class="ki-duotone ki-chart-line-down text-danger fs-3x me-4 w-30px">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
														<!--end::Flag-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Beban Non Opr.</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Bulan ini</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bold fs-4 me-3">1,591,332</span>
																<!--end::Number-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::List widget 9-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
                                    @include('Dashboard.index.segmentasi')
									<!--end::Row-->

								</div>
								<!--end::Content-->
							</div>
							<!--end::Content wrapper-->
							<!--begin::Footer-->
							<div id="kt_app_footer" class="app-footer d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-2 py-lg-4">
								<!--begin::Copyright-->
								<div class="text-gray-900 order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2024&copy;</span>
									<a href="https://bprserang.co.id" target="_blank" class="text-gray-800 text-hover-primary">PT BPR SERANG (Perseroda)</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://bprserang.co.id" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.bprserang.co.id" target="_blank" class="menu-link px-2">Support</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer-->
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
@endpush
