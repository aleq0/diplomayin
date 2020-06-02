@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <i class="fa fa-temperature-high fa-1x temperature-color"></i>     @lang('Temperature')
                    </h4>
                </div>
                <div class="card-body">
                    <div class="text-muted card_info">@lang('Value'): <div class="text">Fstx</div></div>
                    <div class="text-muted">@lang('Time'):</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <i class="fa fa-lightbulb fa-1x light-color"></i>     @lang('Light')
                    </h4>
                </div>
                <div class="card-body">
                    <div class="text-muted card_info">@lang('Value'): <div class="text">Fstx</div></div>
                    <div class="text-muted">@lang('Time'):</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <i class="fa fa-tint airHumidity-color"></i>     @lang('Air Humidity')
                    </h4>
                </div>
                <div class="card-body">
                    <div class="text-muted card_info">@lang('Value'): <div class="text">Fstx</div></div>
                    <div class="text-muted">@lang('Time'):</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <i class="fa fa-faucet soilHumidity-color"></i>     @lang('Soil Humidity')
                    </h4>
                </div>
                <div class="card-body">
                    <div class="text-muted card_info">@lang('Value'): <div class="text">Fstx</div></div>
                    <div class="text-muted">@lang('Time'):</div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-6">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h4 class="card-title">@lang('Temperature')</h4>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartBig1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title">@lang('Light')</h4>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartLinePurple"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title">@lang('Air Humidity')</h4>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="CountryChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h4 class="card-title">@lang('Soil Humidity')</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn-group btn-group-toggle float-right">
                                <button class="btn btn-sm btn-primary disabled" id="1" style="border: 1px solid #d6d0d042">
                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">@lang('Sensor') 1</span>
                                </button>
                                <button class="btn btn-sm btn-primary" id="2" style="border: 1px solid #d6d0d042">
                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">@lang('Sensor') 2</span>
                                </button>
                            </div>
                        </div>
                    </div>
            </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartLineGreen"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="card card-tasks">
                <div class="card-header ">
                    <h6 class="title d-inline">@lang('Control Panel')</h6>
                </div>

                <div class="management_block">
                    <ul class="drops_list">
                        <li>
                            <div class="management_inner">
                                <div class="form_check">
                                    <i class="fa fa-temperature-high temperature-color"></i>
                                </div>
                                <div>
                                    <div class="title">@lang('Temperature')</div>
                                    <div class="text-muted">@lang('Value'): 12</div>
                                </div>
                                <div class="btn_block">
                                    <a href="" class="drop_button edit_value"
                                       data-target="temp_input">
                                        <i class="tim-icons icon-pencil"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="drop_element">
                                <div class="drop_title">
                                    @lang('Value')
                                </div>
                                <div>
                                    <div>
                                        <input type="text" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                    </div>
                                </div>
                                <div class="drop_btn">
                                    <button type="button" rel="tooltip" title="" class="btn_inner"
                                            data-target="temp_input">
                                        <i class="fa fa-save svg-inline--fa"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="management_inner">
                                <div class="form_check">
                                    <i class="fa fa-faucet soilHumidity-color"></i>
                                </div>
                                <div>
                                    <div class="title">@lang('Soil Humidity')</div>
                                    <div class="text-muted">@lang('Value'): 22</div>
                                </div>
                                <div class="btn_block">
                                    <a href="" class="drop_button edit_value"
                                       data-target="temp_input">
                                        <i class="tim-icons icon-pencil"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="drop_element">
                                <div class="drop_title">
                                    @lang('Value')
                                </div>
                                <div>
                                    <div>
                                        <input type="text" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                    </div>
                                </div>
                                <div class="drop_btn">
                                    <button type="button" rel="tooltip" title="" class="btn_inner"
                                            data-target="temp_input">
                                        <i class="fa fa-save svg-inline--fa"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="management_inner">
                                <div class="form_check">
                                    <i class="fa fa-tint airHumidity-color"></i>
                                </div>
                                <div>
                                    <div class="title">@lang('Air Humidity')</div>
                                    <div class="text-muted">@lang('Value'): 22</div>
                                </div>
                                <div class="btn_block">
                                    <a href="" class="drop_button edit_value"
                                       data-target="temp_input">
                                        <i class="tim-icons icon-pencil"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="drop_element">
                                <div class="drop_title">
                                    @lang('Value')
                                </div>
                                <div>
                                    <div>
                                        <input type="text" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                    </div>
                                </div>
                                <div class="drop_btn">
                                    <button type="button" rel="tooltip" title="" class="btn_inner"
                                            data-target="temp_input">
                                        <i class="fa fa-save svg-inline--fa"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="management_inner">
                                <div class="form_check">
                                    <i class="fa fa-lightbulb light-color"></i>
                                </div>
                                <div>
                                    <div class="title">@lang('Light')</div>
                                    <div class="text-muted">@lang('Value'): 22</div>
                                </div>
                                <div class="btn_block">
                                    <a href="" class="drop_button edit_value"
                                       data-target="temp_input">
                                        <i class="tim-icons icon-pencil"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="drop_element">
                                <div class="drop_title">
                                    @lang('Value')
                                </div>
                                <div>
                                    <div>
                                        <input type="text" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                    </div>
                                </div>
                                <div class="drop_btn">
                                    <button type="button" rel="tooltip" title="" class="btn_inner"
                                            data-target="temp_input">
                                        <i class="fa fa-save svg-inline--fa"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-8">
            <div class="card card-plain">
                <div class="card-body">
                    <div id="map" class="map"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
      var map;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZgqO2gavNBbPsJ6tXLq3L_9Ax9WpKxpk&callback=initMap"
            async defer></script>--}}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZgqO2gavNBbPsJ6tXLq3L_9Ax9WpKxpk"></script>

    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
      $(document).ready(function () {
        demo.initDashboardPageCharts();
        demo.initGoogleMaps();
      });
    </script>
@endpush
