@extends('shared.master')

@section('title','Home')
@section('css')

@endsection
@section('content')

    <?php
    $drivers = \App\Constants\Firebase::getDriverData();
    $customers = \App\Constants\Firebase::getCustomerData();
    $drivers_history =\App\Constants\Firebase::getDriverHistory();
    $drivers_history_count = 0;
    foreach ($drivers_history as $dri){
            $drivers_history_count += count($dri);
    }

    $customers_history = \App\Constants\Firebase::getCustomerHistory();
    $customers_history_count = 0;
    foreach ($customers_history as $custome){
        $customers_history_count += count($custome);
    }
        ?>

    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <i class="fa fa-users float-right icon-grey-big"></i>
                    </div>
                    <h4 class="card-title font-weight-normal text-success">{{count($drivers)}}</h4>
                    <h6 class="card-subtitle mb-4">Drivers</h6>
                    <div class="progress progress-slim">
                        <div class="progress-bar bg-success-gadient" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <i class="fa fa-users float-right icon-grey-big"></i>
                    </div>
                    <h4 class="card-title font-weight-normal text-info">{{count($customers)}}</h4>
                    <h6 class="card-subtitle mb-4">Customers</h6>
                    <div class="progress progress-slim">
                        <div class="progress-bar bg-info-gadient" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <i class="fa fa-book float-right icon-grey-big"></i>
                    </div>
                    <h4 class="card-title font-weight-normal text-warning">{{$drivers_history_count}}</h4>
                    <h6 class="card-subtitle mb-4">Drivers Request</h6>
                    <div class="progress progress-slim">
                        <div class="progress-bar bg-warning-gadient" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <i class="fa fa-pie-chart float-right icon-grey-big"></i>
                    </div>
                    <h4 class="card-title font-weight-normal text-danger">{{$customers_history_count}}</h4>
                    <h6 class="card-subtitle mb-4">Customers Requsts</h6>
                    <div class="progress progress-slim">
                        <div class="progress-bar bg-danger-gadient" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')

@endsection
