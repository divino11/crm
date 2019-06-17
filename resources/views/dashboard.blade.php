@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <div class="float-left" dir="ltr">
                    <div style="display:inline;width:70px;height:70px;">
                        <input data-plugin="knob" data-width="70" data-height="70" data-fgcolor="#1abc9c"
                               data-bgcolor="#d1f2eb" value="{{ $customers_percentage }}" data-skin="tron" data-angleoffset="0"
                               data-readonly="true" data-thickness=".15" readonly="readonly"
                               style="width: 39px; height: 23px; position: absolute; vertical-align: middle; margin-top: 23px; margin-left: -54px; border: 0px; background: none; font: bold 14px Arial; text-align: center; color: rgb(26, 188, 156); padding: 0px; -webkit-appearance: none;">
                    </div>
                </div>
                <div class="text-right">
                    <h3 class="mb-1"> {{ $customers_count }} </h3>
                    <p class="text-muted mb-1">New Customers</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <div class="float-left" dir="ltr">
                    <div style="display:inline;width:70px;height:70px;">
                        <input data-plugin="knob" data-width="70" data-height="70" data-fgcolor="#3bafda"
                               data-bgcolor="#d8eff8" value="{{ $events_percentage }}" data-skin="tron" data-angleoffset="0"
                               data-readonly="true" data-thickness=".15" readonly="readonly"
                               style="width: 39px; height: 23px; position: absolute; vertical-align: middle; margin-top: 23px; margin-left: -54px; border: 0px; background: none; font: bold 14px Arial; text-align: center; color: rgb(59, 175, 218); padding: 0px; -webkit-appearance: none;">
                    </div>
                </div>
                <div class="text-right">
                    <h3 class="mb-1"> {{ $events_count }} </h3>
                    <p class="text-muted mb-1">Events Today</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <div class="float-left" dir="ltr">
                    <div style="display:inline;width:70px;height:70px;">
                        <input data-plugin="knob" data-width="70" data-height="70" data-fgcolor="#f672a7"
                               data-bgcolor="#fde3ed" value="77" data-skin="tron" data-angleoffset="0"
                               data-readonly="true" data-thickness=".15" readonly="readonly"
                               style="width: 39px; height: 23px; position: absolute; vertical-align: middle; margin-top: 23px; margin-left: -54px; border: 0px; background: none; font: bold 14px Arial; text-align: center; color: rgb(246, 114, 167); padding: 0px; -webkit-appearance: none;">
                    </div>
                </div>
                <div class="text-right">
                    <h3 class="mb-1"> $925.78 </h3>
                    <p class="text-muted mb-1">Revenue Today</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <div class="float-left" dir="ltr">
                    <div style="display:inline;width:70px;height:70px;">
                        <input data-plugin="knob" data-width="70" data-height="70" data-fgcolor="#6c757d"
                               data-bgcolor="#e2e3e5" value="35" data-skin="tron" data-angleoffset="0"
                               data-readonly="true" data-thickness=".15" readonly="readonly"
                               style="width: 39px; height: 23px; position: absolute; vertical-align: middle; margin-top: 23px; margin-left: -54px; border: 0px; background: none; font: bold 14px Arial; text-align: center; color: rgb(108, 117, 125); padding: 0px; -webkit-appearance: none;">
                    </div>
                </div>
                <div class="text-right">
                    <h3 class="mb-1"> $78.58 </h3>
                    <p class="text-muted mb-1">Weekly Sum</p>
                </div>
            </div>
        </div>

        <!-- Calendar -->
    @include('fullcalendar')
    <!-- Calendar -->
    </div>
    <script>
        $(document).ready(function () {
            $('.card-box input').knob();
        });
    </script>
@endsection
