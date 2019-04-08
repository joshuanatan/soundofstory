<?php
include("../req/head-open.php");
include("../req/head-close.php");
include("../req/menu.php");
include("../req/header.php");
?>
<div class="content mt-3">


<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-1">
        <div class="card-body pb-0">
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Members Registered</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart1"></canvas>
            </div>

        </div>

    </div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-2">
        <div class="card-body pb-0">
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Stories Upload</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart2"></canvas>
            </div>

        </div>
    </div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-3">
        <div class="card-body pb-0">
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Episodes Upload</p>

        </div>

        <div class="chart-wrapper px-0" style="height:70px;" height="70">
            <canvas id="widgetChart3"></canvas>
        </div>
    </div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-4">
        <div class="card-body pb-0">
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Page Visit</p>

            <div class="chart-wrapper px-3" style="height:70px;" height="70">
                <canvas id="widgetChart4"></canvas>
            </div>

        </div>
    </div>
</div>
<!--/.col-->


<div class="col-xl-3 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-user text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Audience - January</div>
                    <div class="stat-digit">1,012</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-xl-3 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Favourite Genre</div>
                    <div class="stat-digit">Romance</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Stories - January</div>
                    <div class="stat-digit">10</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-layout-grid2 text-danger border-danger"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Episodes - January</div>
                    <div class="stat-digit">25</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h4 class="mb-3">Genre Counts - January</h4>
            <canvas id="singelBarChart"></canvas>
        </div>
    </div>
</div><!-- /# column -->
<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h4 class="mb-3">Audience Growth - 2019</h4>
            <canvas id="team-chart"></canvas>
        </div>
    </div>
</div><!-- /# column -->
</div>
<?php 
include("../req/footer.php");
include("../req/close.php");

?>

<script src="../vendors/chart.js/dist/Chart.bundle.min.js"></script>
<script>
//ini bar yang perbandingan genre bulan ini
( function ( $ ) {
    "use strict";
    // single bar chart
    var ctx = document.getElementById( "singelBarChart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [ "Fantasy", "Science Fiction", "Romance", "Thriller", "Mystery", "Detective", "Dystopia" ],
            datasets: [
                {
                    label: "Audience",
                    data: [ 40, 55, 75, 81, 56, 55, 40 ],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );




} )( jQuery );
</script>
<script>
var ctx = document.getElementById( "team-chart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Agt", "Sep", "Oct", "Nov", "Dec" ],
            type: 'line',
            defaultFontFamily: 'Montserrat',
            datasets: [ {
                data: [ 0, 7, 3, 5, 2, 10, 7,7.6,3,4,6,8 ],
                label: "Audience",
                backgroundColor: 'rgba(0,103,255,.15)',
                borderColor: 'rgba(0,103,255,0.5)',
                borderWidth: 3.5,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(0,103,255,0.5)',
                    }, ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            legend: {
                display: false,
                position: 'top',
                labels: {
                    usePointStyle: true,
                    fontFamily: 'Montserrat',
                },


            },
            scales: {
                xAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: false,
                        labelString: 'Month'
                    }
                        } ],
                yAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                        } ]
            },
            title: {
                display: false,
            }
        }
    } );
</script>