@extends('layouts.admin')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div id="crypto-stats-3" class="row">
                <div class="col-xl-3 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                    <h4>{{__('dashboard.total_sales')}}</h4>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>$944</h4>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                    <canvas id="btc-chartjs" class="height-75 chartjs-render-monitor" width="533" height="75" style="display: block; width: 533px; height: 75px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>{{__('dashboard.total_requests')}}</h4>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>$944</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                    <canvas id="eth-chartjs" class="height-75 chartjs-render-monitor" width="533" height="75" style="display: block; width: 533px; height: 75px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>{{__('dashboard.number_of_products')}}</h4>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>$1.2</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                    <canvas id="xrp-chartjs" class="height-75 chartjs-render-monitor" width="533" height="75" style="display: block; width: 533px; height: 75px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>{{__('dashboard.number_of_clients')}}</h4>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>$1.2</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                    <canvas id="xrp-chartjs" class="height-75 chartjs-render-monitor" width="533" height="75" style="display: block; width: 533px; height: 75px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Candlestick Multi Level Control Chart -->

            <!-- Sell Orders & Buy Order -->
            <div class="row match-height">
                <div class="col-12 col-xl-8">
                    <div class="card" style="height: 355px;">
                        <div class="card-header">
                            <h4 class="card-title">{{__('dashboard.latest_orders')}}</h4>

                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            {{-- <div class="heading-elements">
                                <p class="text-muted">Total BTC available: 6542.56585</p>
                            </div> --}}
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-de mb-0">
                                    <thead>
                                    <tr>
                                        <th>{{__('dashboard.order_id')}}</th>
                                        <th>{{__('dashboard.client')}}</th>
                                        <th>{{__('dashboard.price')}}</th>
                                        <th>{{__('dashboard.order_status')}}</th>
                                        <th>{{__('dashboard.total')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="bg-success bg-lighten-5">
                                        <td>10583.4</td>
                                        <td><i class="cc BTC-alt"></i> 0.45000000</td>
                                        <td>$ 4762.53</td>
                                        <td>$ 4762.53</td>
                                        <td>$ 4762.53</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="card" style="height: 355px;">
                        <div class="card-header">
                            <h4 class="card-title">{{__('dashboard.latest_reviews')}}</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            {{-- <div class="heading-elements">
                                <p class="text-muted">Total USD available: 9065930.43</p>
                            </div> --}}
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-de mb-0">
                                    <thead>
                                    <tr>
                                        <th>{{__('dashboard.client')}}</th>
                                        <th>{{__('dashboard.product')}}</th>
                                        <th>{{__('dashboard.review')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="bg-danger bg-lighten-5">
                                        <td>10599.5</td>
                                        <td><i class="cc BTC-alt"></i>1</td>
                                        <td>$ 2</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Sell Orders & Buy Order -->
            <!-- Active Orders -->
            <!-- Active Orders -->
        </div>
    </div>
</div>
@stop
