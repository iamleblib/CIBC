@extends('layouts.admin')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Customers</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Reg. Customers (<i class="fa fa-users"></i>)</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="{{ $customers->count() }}">0</span>
                                    </h4>
                                </div>

                            </div>
                            <div class="text-nowrap">
                                <span class="ms-1 text-muted font-size-13">Total Registered Accounts</span>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-4 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Active Customers ($)</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="0">0</span>
                                    </h4>
                                </div>
                            </div>
                            <div class="text-nowrap">
                                <span class="ms-1 text-muted font-size-13">Total Funded Accounts</span>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col-->

                <div class="col-xl-4 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Suspended (<i class="fa fa-ban"></i>)</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="6258">0</span>
                                    </h4>
                                </div>
                            </div>
                            <div class="text-nowrap">
                                <span class="ms-1 text-muted font-size-13">Total Suspended Accounts</span>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col-->
            </div><!-- end row-->


            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Revenue & Staffs</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">

                <div class="col-xl-4 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Rev. (<i class="fa fa-money-bill-wave" aria-hidden="true"></i>)</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="0">0</span>
                                    </h4>
                                </div>

                            </div>
                            <div class="text-nowrap">
                                <span class="ms-1 text-muted font-size-13">{{ getenv('APP_NAME') }} Total Revenue</span>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->


                <div class="col-xl-4 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Reg. Staffs (<i class="fa fa-users"></i>)</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="0">0</span>
                                    </h4>
                                </div>

                            </div>
                            <div class="text-nowrap">
                                <span class="ms-1 text-muted font-size-13">Total Registered Staffs</span>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-4 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Suspended Staffs (<i class="fa fa-ban"></i>)</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="0">0</span>
                                    </h4>
                                </div>

                            </div>
                            <div class="text-nowrap">
                                <span class="ms-1 text-muted font-size-13">Total Suspended Staffs</span>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
