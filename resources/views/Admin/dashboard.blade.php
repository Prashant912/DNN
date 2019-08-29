@extends('Admin.layouts.master')

@section('content')
<div class="main-content">
       <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12 nopad-right">
            <div class="dashboard-stats">
                <div class="left">
                    <h3 class="flatBluec counter" data-to="7684" data-speed="4000">7684</h3>
                    <h4>Monthly User</h4>
                </div>
                <div class="right flatBlue">
                    <i class="ion ion-ios-heart-outline"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 nopad-right">
            <div class="dashboard-stats">
                <div class="left">
                    <h3 class="flatGreenc counter" data-to="6433" data-speed="4000">6433</h3>
                    <h4>peoples in circles</h4>
                </div>
                <div class="right flatGreen">
                    <i class="ion ion-ios-color-filter-outline"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 nopad-right">
            <div class="dashboard-stats">
                <div class="left">
                    <h3 class="flatRedc counter" data-to="4532" data-speed="4000">4532</h3>
                    <h4>monthly notifications</h4>
                </div>
                <div class="right flatRed">
                    <i class="ion ion-ios-alarm-outline"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 nopad-right">
            <div class="dashboard-stats">
                <div class="left">
                    <h3 class="flatOrangec counter" data-to="345" data-speed="8000">345</h3>
                    <h4>monthly targets</h4>
                </div>
                <div class="right flatOrange">
                    <i class="ion ion-ios-analytics-outline"></i>
                </div>
            </div>
        </div>
        <!-- /panel -->
</div>
</div>
@endsection