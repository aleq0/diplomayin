@extends('layouts.app', ['pageSlug' => 'temperature'])

@section('content')
    <div class="row">
        {{--<div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Total Shipments</h5>
                            <h2 class="card-title">Performance</h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                            <label class="btn btn-sm btn-primary btn-simple active" id="0">
                                <input type="radio" name="options" checked>
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-single-02"></i>
                                </span>
                            </label>
                            <label class="btn btn-sm btn-primary btn-simple" id="1">
                                <input type="radio" class="d-none d-sm-none" name="options">
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchases</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-gift-2"></i>
                                </span>
                            </label>
                            <label class="btn btn-sm btn-primary btn-simple" id="2">
                                <input type="radio" class="d-none" name="options">
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Sessions</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-tap-02"></i>
                                </span>
                            </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartBig1"></canvas>
                    </div>
                </div>
            </div>
        </div>--}}
        <div class="col-lg-12">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Total Shipments</h5>
                    <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Daily Sales</h5>
                    <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> 3,500€</h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="CountryChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Completed Tasks</h5>
                    <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 12,100K</h3>
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

        <div class="col-lg-6 col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Simple Table</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table tablesorter" id="">
                                <thead class=" text-primary">
                                <tr>
                                    <th>@lang('Օր')</th>
                                    <th>@lang('Ժամ')</th>
                                    <th>@lang('Արժեք')</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($temps->items() as $item)
                                        <tr>
                                            <td>{{$item->date}}</td>
                                            <td>{{$item->time}}</td>
                                            <td>{{$item->value}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="dtBasicExample_info" role="status" aria-live="polite">
                                Showing 1 to 10 of 57 entries
                            </div>
                        </div>
                        {{--<div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dtBasicExample_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="dtBasicExample_previous"><a href="#" aria-controls="dtBasicExample"
                                                                        data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                    </li>
                                    <li class="paginate_button page-item active"><a href="#"
                                                                                    aria-controls="dtBasicExample"
                                                                                    data-dt-idx="1" tabindex="0"
                                                                                    class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="dtBasicExample"
                                                                              data-dt-idx="2" tabindex="0"
                                                                              class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="dtBasicExample"
                                                                              data-dt-idx="3" tabindex="0"
                                                                              class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="dtBasicExample"
                                                                              data-dt-idx="4" tabindex="0"
                                                                              class="page-link">4</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="dtBasicExample"
                                                                              data-dt-idx="5" tabindex="0"
                                                                              class="page-link">5</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="dtBasicExample"
                                                                              data-dt-idx="6" tabindex="0"
                                                                              class="page-link">6</a></li>
                                    <li class="paginate_button page-item next" id="dtBasicExample_next"><a href="#"
                                                                                                           aria-controls="dtBasicExample"
                                                                                                           data-dt-idx="7"
                                                                                                           tabindex="0"
                                                                                                           class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>--}}
                        <div class="col-sm-12 col-md-7">
                            {{$temps->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>

        var data = {!! json_encode($todayTemps->toArray()) !!};

        yValues = [];

        $.each(data, function (key, item) {
            yValues.push(item.value);
        });

        console.log(yValues);
        
        $(document).ready(function() {
          demo.initChart(yValues);
        });
    </script>
@endpush
