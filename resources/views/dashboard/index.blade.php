@extends('dashboard.layouts.master')

@section('title')
    Dashboard
@endsection

@push('css')
@endpush

@section('crumbs')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> Dashboard</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="index.html" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- widgets -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 mb-20">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-start">
                            <span class="text-danger">
                                <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-end text-end">
                            <p class="card-text text-dark">
                                Visitors
                            </p>
                            <h4>65,650</h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fa fa-exclamation-circle me-1" aria-hidden="true"></i>
                        81% lower growth
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-20">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-start">
                            <span class="text-warning">
                                <i class="fa fa-shopping-cart highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-end text-end">
                            <p class="card-text text-dark">
                                Orders
                            </p>
                            <h4>656</h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fa fa-bookmark-o me-1" aria-hidden="true"></i>
                        Total sales
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-20">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-start">
                            <span class="text-success">
                                <i class="fa fa-dollar highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-end text-end">
                            <p class="card-text text-dark">
                                Revenue
                            </p>
                            <h4>$65656</h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fa fa-calendar me-1" aria-hidden="true"></i>
                        Sales Per Week
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-20">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-start">
                            <span class="text-primary">
                                <i class="fa fa-twitter highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-end text-end">
                            <p class="card-text text-dark">
                                Followers
                            </p>
                            <h4>62,500+</h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fa fa-repeat me-1" aria-hidden="true"></i>
                        Just Updated
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Orders Status widgets-->
    <div class="row">
        <div class="col-xl-4 mb-20">
            <div class="card card-statistics h-100">
                <!-- action group -->
                <div class="btn-group info-drop">
                    <button type="button" class="dropdown-toggle-split text-muted" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="ti-more"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="text-primary ti-reload"></i>Refresh</a>
                        <a class="dropdown-item" href="#"><i class="text-secondary ti-eye"></i>View
                            all</a>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Market summary</h5>
                    <h4>$50,500</h4>
                    <div class="row mt-20">
                        <div class="col-4">
                            <h6>Apple</h6>
                            <b class="text-info">+ 82.24 % </b>
                        </div>
                        <div class="col-4">
                            <h6>Instagram</h6>
                            <b class="text-danger">- 12.06 %
                            </b>
                        </div>
                        <div class="col-4">
                            <h6>Google</h6>
                            <b class="text-warning">+ 24.86 %
                            </b>
                        </div>
                    </div>
                </div>
                <div id="sparkline2" class="scrollbar-x text-center"></div>
            </div>
        </div>
        <div class="col-xl-8 mb-20">
            <div class="card h-100">
                <div class="btn-group info-drop">
                    <button type="button" class="dropdown-toggle-split text-muted" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="ti-more"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="text-primary ti-reload"></i>Refresh</a>
                        <a class="dropdown-item" href="#"><i class="text-secondary ti-eye"></i>View
                            all</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-block d-md-flexx justify-content-between">
                        <div class="d-block">
                            <h5 class="card-title">
                                Site Visits Growth
                            </h5>
                        </div>
                        <div class="d-flex">
                            <div class="clearfix mr-30">
                                <h6 class="text-success">
                                    Income
                                </h6>
                                <p>+584</p>
                            </div>
                            <div class="clearfix mr-50">
                                <h6 class="text-danger">
                                    Outcome
                                </h6>
                                <p>-255</p>
                            </div>
                        </div>
                    </div>
                    <div id="morris-area" style="height: 320px"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
