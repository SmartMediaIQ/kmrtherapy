@extends('layouts.app')

@section('title', 'Insights')

@section('content')
<div class="row">
    <div class="card crd-1 p-0">
        <div class="card-body pt-5 border-bottom">
            <div class="clearfix">
                <div class="float-end">
                    <div class="input-group input-group-sm">
                        <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                            <i class="fa fa-calendar"></i>&nbsp;
                            <span></span> <i class="fa fa-caret-down"></i>
                        </div>
                    </div>
                </div>
                <h2 class="float-start">Insights</h2>
            </div>

        </div>
        <div class="card-body pt-1 border-bottom">
            <div class="row mt-3">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                    <div class="mb-3">
                        <label class="form-label"><b>View insights for</b></label><br>
                        <select class="select2 form-control hs-select" data-placeholder="Select">
                                <option selected>Agent - Brendon Thomas</option>
                                <option>Option 2</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body pt-4 border-bottom row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                    <div class="card mini-stats-wid">
                        <div class="card-body">

                            <div class="d-flex flex-wrap">
                                <div class="me-3">
                                    <p class="text-muted mb-2">Leads</p>
                                    <h5 class="mb-0">1</h5>
                                </div>

                                <div class="avatar-sm ms-auto">
                                    <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                        <i class="bx bxs-book-bookmark"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                    <div class="card mini-stats-wid">
                        <div class="card-body">

                            <div class="d-flex flex-wrap">
                                <div class="me-3">
                                    <p class="text-muted mb-2">Submitted applications</p>
                                    <h5 class="mb-0">0</h5>
                                </div>

                                <div class="avatar-sm ms-auto">
                                    <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                        <i class="bx bxs-book-bookmark"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                    <div class="card mini-stats-wid">
                        <div class="card-body">

                            <div class="d-flex flex-wrap">
                                <div class="me-3">
                                    <p class="text-muted mb-2">Average plan premium</p>
                                    <h5 class="mb-0">$0.00</h5>
                                </div>

                                <div class="avatar-sm ms-auto">
                                    <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                        <i class="bx bxs-book-bookmark"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                    <div class="card mini-stats-wid">
                        <div class="card-body">

                            <div class="d-flex flex-wrap">
                                <div class="me-3">
                                    <p class="text-muted mb-2">Total annual premium</p>
                                    <h5 class="mb-0">$0.00</h5>
                                </div>

                                <div class="avatar-sm ms-auto">
                                    <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                        <i class="bx bxs-book-bookmark"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Monthly Activity</h4>
                                <div id="mix-line-bar"  data-colors='["--bs-success","--bs-primary", "--bs-danger"]' class="e-charts"></div>
                            </div>
                        </div>
                    </div>
        </div>
</div>
@endsection

@section('page-specific-script')
<script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>
<script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>
<script src="{{asset('assets/libs/echarts/echarts.min.js')}}"></script>
<script src="{{asset('assets/js/pages/echarts.init.js')}}"></script>
<script type="text/javascript" src="cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
@endsection
