@extends('layouts.app')

@section('content')
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex pt-3 pb-2 no-block">
                        <div class="align-self-center mr-3 knob-icon">
                            <div style="display:inline;width:70px;height:70px;"><canvas width="140" height="140" style="width: 70px; height: 70px;"></canvas><input class="dial" data-plugin="knob" data-width="70" data-height="70" data-linecap="round" data-fgcolor="#f95476" data-thickness=".2" value="85" style="width: 39px; height: 23px; position: absolute; vertical-align: middle; margin-top: 23px; margin-left: -54px; border: 0px; background: none; font: bold 14px Arial; text-align: center; color: rgb(249, 84, 118); padding: 0px; -webkit-appearance: none;"></div>
                            <i class="flaticon-tool text-pink"></i> </div>
                        <div class="align-slef-center mr-auto">
                            <h2 class="m-b-0 text-uppercase font-18 font-medium lp-5">Storage</h2>
                            <h6 class="text-light m-b-0">Used <strong>315 Gb</strong> / Free <strong>25 Gb</strong></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex pt-3 pb-2 no-block">
                        <div class="align-self-center mr-3 knob-icon knob-icon-2">
                            <div style="display:inline;width:70px;height:70px;"><canvas width="140" height="140" style="width: 70px; height: 70px;"></canvas><input class="dial" data-plugin="knob" data-width="70" data-height="70" data-linecap="round" data-fgcolor="#4886ff " data-thickness=".2" value="40" style="width: 39px; height: 23px; position: absolute; vertical-align: middle; margin-top: 23px; margin-left: -54px; border: 0px; background: none; font: bold 14px Arial; text-align: center; color: rgb(72, 134, 255); padding: 0px; -webkit-appearance: none;"></div>
                            <i class="flaticon-tool-2 font-25 text-primary"></i> </div>
                        <div class="align-slef-center mr-auto">
                            <h2 class="m-b-0 text-uppercase font-18 font-medium lp-5">Bandwidth</h2>
                            <h6 class="text-light m-b-0">100 mb/s</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex pt-3 pb-2 no-block">
                        <div class="align-self-center mr-3 knob-icon knob-icon-2">
                            <div style="display:inline;width:70px;height:70px;"><canvas width="140" height="140" style="width: 70px; height: 70px;"></canvas><input class="dial" data-plugin="knob" data-width="70" data-height="70" data-linecap="round" data-fgcolor="#ffb74e" data-thickness=".2" value="89" style="width: 39px; height: 23px; position: absolute; vertical-align: middle; margin-top: 23px; margin-left: -54px; border: 0px; background: none; font: bold 14px Arial; text-align: center; color: rgb(255, 183, 78); padding: 0px; -webkit-appearance: none;"></div>
                            <i class="flaticon-reload font-25 text-warning"></i> </div>
                        <div class="align-slef-center mr-auto">
                            <h2 class="m-b-0 text-uppercase font-18 font-medium lp-5">Cluster Load</h2>
                            <h6 class="text-light m-b-0">89%</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
@endsection
