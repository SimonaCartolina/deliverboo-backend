@extends('layouts.app')

@section('content')

<div class="navbar-jumbo px-5">
    <div class="row">


        <div class="column column-30">
            <div class="user-section">
                <div class="username">
                    <h4>{{ Auth::user()->name }}</h4>
                    <p>Restaurant owner</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <section id="main-content" class="column column-offset-20">
        <div class="row grid-responsive">
            <div class="column page-heading">
                <div class="large-card">
                    <h1 class="mx-4">Hey there!</h1>
                    <div class="d-flex align-items-center">
                        <div class="button-container  mx-4 p-2">

                            <a href="{{route('admin.create')}}">Create a new restaurant</a>


                        </div>

                        <div class="button-container  mx-4 p-2">

                            <a href="{{route('admin.index')}}">Check all restaurants</a>

                        </div>

                    </div>


                </div>
            </div>
        </div>

        <!--Charts-->
        <h5>Charts</h5><a class="anchor" name="charts"></a>
        <div class="row grid-responsive">
            <div class="column column-50">
                <div class="card">
                    <div class="card-title">
                        <h2>Statystics</h2>
                    </div>
                    <div class="card-block">
                        <div class="canvas-wrapper">
                            <canvas class="chart" id="line-chart" height="auto" width="auto"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="row grid-responsive">
            <div class="column ">
                <div class="card">
                    <div class="card-title">
                        <h3>Staff</h3>
                    </div>
                    <div class="card-block">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Age</th>
                                    <th>Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Simona Cartolina</td>
                                    <td>Bartender</td>
                                    <td>25</td>
                                    <td>Milano, 91050</td>
                                </tr>
                                <tr>
                                    <td>Cosimo Collucci</td>
                                    <td>Supervisor</td>
                                    <td>26</td>
                                    <td>Milano, 91050</td>
                                </tr>
                                <tr>
                                    <td>Francesco Bifero</td>
                                    <td>Bar supervisor</td>
                                    <td>28</td>
                                    <td>Milano, 91050</td>
                                </tr>
                                <tr>
                                    <td>Luca Mazzoli</td>
                                    <td>Chef</td>
                                    <td>24</td>
                                    <td>Milano, 91050</td>
                                </tr>
                                <tr>
                                    <td>Alessio di Nardo</td>
                                    <td>Pizza Chef</td>
                                    <td>27</td>
                                    <td>Milano, 91050</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


</div>
</section>
</div>

<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script>
    window.onload = function() {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
        var chart2 = document.getElementById("bar-chart").getContext("2d");
        window.myBar = new Chart(chart2).Bar(barChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
        var chart4 = document.getElementById("pie-chart").getContext("2d");
        window.myPie = new Chart(chart4).Pie(pieData, {
            responsive: true,
            segmentShowStroke: false
        });
        var chart5 = document.getElementById("radar-chart").getContext("2d");
        window.myRadarChart = new Chart(chart5).Radar(radarData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.05)",
            angleLineColor: "rgba(0,0,0,.2)"
        });
        var chart6 = document.getElementById("polar-area-chart").getContext("2d");
        window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            segmentShowStroke: false
        });
    };
</script>
@endsection