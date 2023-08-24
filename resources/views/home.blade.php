@extends('layouts.app')

@section('content')
<section class="content">
<div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-8 row">
            <div class="col-12 col-md-4">
                <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-tag"></i></span>

                <div class="info-box-content">
                    <span class="info-box-number">Total Cost</span>
                    <span class="info-box-text">
                        ${{ number_format($total_cost, 0, '', '.') }}
                    {{-- $31,868 --}}
                    </span>
                </div>
                <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-md-4">
                <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-trophy"></i></span>

                <div class="info-box-content">
                    <span class="info-box-number">Total Sales</span>
                    <span class="info-box-text">
                    $66,053
                    </span>
                </div>
                <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-md-4">
                <div class="info-box mb-3">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-calendar"></i></span>

                <div class="info-box-content">
                    <span class="info-box-number">This Week</span>
                    <span class="info-box-text">$35,000,00</span>
                </div>
                <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>

        <div class="col-md-4 row">
            <div class="col-12 col-md-6">
                <div class="info-box mb-3">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-chart-pie"></i></span>
        
                <div class="info-box-content">
                    <span class="info-box-number">Revanue</span>
                    <span class="info-box-text">$63,00k</span>
                </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="info-box mb-3">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-wallet"></i></span>
        
                <div class="info-box-content">
                    <span class="info-box-number">$1250</span>
                    <span class="info-box-text">Last Payment</span>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 row">
            <div class="col-md-4">
                <div class="card card-danger">
                    <div class="card-header">
                    <h3 class="card-title">Earnings</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    </div>
                    <div class="card-body">
                    <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card card-success">
                    <div class="card-header">
                    <h3 class="card-title">Orders</h3>
    
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="chart">
                        <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Profit: 371k</h3>
    
                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                        <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card card-danger">
                    <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Total Profit</h3>
                        <a href="javascript:void(0);">View Report</a>
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="d-flex">
                        <p class="d-flex flex-column">
                        <span class="text-bold text-lg">$842.98</span>
                        <span>Sales Over Time</span>
                        </p>
                        <p class="ml-auto d-flex flex-column text-right">
                        <span class="text-success">
                            <i class="fas fa-arrow-up"></i> 33.1%
                        </span>
                        <span class="text-muted">Since last month</span>
                        </p>
                    </div>
                    <!-- /.d-flex -->
    
                    <div class="position-relative mb-4">
                        <canvas id="salesChart" height="200"></canvas>
                    </div>
    
                    <div class="d-flex flex-row justify-content-end">
                        <span class="mr-2">
                        <i class="fas fa-square text-primary"></i> Earning
                        </span>
    
                        <span>
                        <i class="fas fa-square text-gray"></i> Expense
                        </span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Activity overview</h3>
    
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-2 pr-2">
                    <li class="item">
                        <div class="product-img">
                        <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                        </div>
                        <div class="product-info">
                        <a href="javascript:void(0)" class="product-title"><b>Nick Mark</b> Mentioned <b>Sara Smith</b> In new Post</a>
                        <span class="product-description">
                            11 JUL 20:10
                        </span>
                        </div>
                    </li>
                    <li class="item">
                        <div class="product-img">
                        <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                        </div>
                        <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">The <b>Post Name</b> was removed by <b>Nick Mark</b></a>
                        <span class="product-description">
                            11 JUL 21:10
                        </span>
                        </div>
                    </li>
                    <li class="item">
                        <div class="product-img">
                        <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                        </div>
                        <div class="product-info">
                        <a href="javascript:void(0)" class="product-title"><b>Patrick Sulivan</b> Published a New Post</a>
                        <span class="product-description">
                            12 JUL 22:10
                        </span>
                        </div>
                    </li>
                    <li class="item">
                        <div class="product-img">
                        <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                        </div>
                        <div class="product-info">
                        <a href="javascript:void(0)" class="product-title"><b>240+ users</b> have subscribed to Newsletter #1</a>
                        <span class="product-description">
                            12 JUL 22:10
                        </span>
                        </div>
                    </li>
                    <li class="item">
                        <div class="product-img">
                        <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                        </div>
                        <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">The <b>Post Name</b> was suspanded by <b>Nick Mark</b></a>
                        <span class="product-description">
                            12 JUL 22:10
                        </span>
                        </div>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

@section('script')
    <script>
        Chart.defaults.global.defaultFontColor = "#fff";

        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData        = {
        labels: [
            'Total Sales',
            'Total Orders',
        ],
        datasets: [
            {
            data: {{ $earnings_chart }},
            backgroundColor : ['#0bb885', '#ff814a'],
            }
        ]
        }
        var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
        })

        var rowChartData = {
        labels  : ['April', 'May', 'June', 'July', 'August'],
        datasets: [
            {
            label               : 'Total: 341k',
            backgroundColor     : '#ff814a',
            borderColor         : '#ff814a',
            pointRadius         : false,
            pointColor          : '#ff814a',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [65, 59, 80, 81, 56]
            },
        ]
        }

        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = $.extend(true, {}, rowChartData)
        var temp0 = rowChartData.datasets[0]
        barChartData.datasets[0] = temp0

        var barChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        datasetFill             : false
        }

        new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
        })

        var rowLineChartData = {
        labels  : ['April', 'May', 'June', 'July', 'August'],
        datasets: [
            {
            backgroundColor     : '#0bb885',
            borderColor         : '#0bb885',
            pointRadius         : false,
            pointColor          : '#0bb885',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [65, 59, 80, 71, 96]
            },
        ]
        }

        var rowLineChartOptions = {
        maintainAspectRatio : false,
        responsive : true,
        legend: {
            display: false
        },
        scales: {
            xAxes: [{
            gridLines : {
                display : false,
            }
            }],
            yAxes: [{
            gridLines : {
                display : false,
            }
            }]
        }
        }

        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        var lineChartOptions = $.extend(true, {}, rowLineChartOptions)
        var lineChartData = $.extend(true, {}, rowLineChartData)
        lineChartData.datasets[0].fill = false;
        lineChartOptions.datasetFill = false

        var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions
        })

        var $salesChart = $('#salesChart')
        var salesChart = new Chart($salesChart, {
            type: 'bar',
            data: {
            labels: ['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
            datasets: [
                {
                backgroundColor: '#007bff',
                borderColor: '#007bff',
                data: [1000, 2000, 3000, 2500, 2700, 2500, 3000]
                },
                {
                backgroundColor: '#ced4da',
                borderColor: '#ced4da',
                data: [700, 1700, 2700, 2000, 1800, 1500, 2000]
                }
            ]
            },
            options: {
            maintainAspectRatio: false,
            tooltips: {
                mode: mode,
                intersect: intersect
            },
            hover: {
                mode: mode,
                intersect: intersect
            },
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                // display: false,
                gridLines: {
                    display: true,
                    lineWidth: '4px',
                    color: 'rgba(0, 0, 0, .2)',
                    zeroLineColor: 'transparent'
                },
                ticks: $.extend({
                    beginAtZero: true,

                    // Include a dollar sign in the ticks
                    callback: function (value) {
                    if (value >= 1000) {
                        value /= 1000
                        value += 'k'
                    }

                    return '$' + value
                    }
                }, ticksStyle)
                }],
                xAxes: [{
                display: true,
                gridLines: {
                    display: false
                },
                ticks: ticksStyle
                }]
            }
            }
        })
    </script>
@endsection
