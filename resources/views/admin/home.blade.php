@extends('layouts.app')

@section('content')

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<div class="container">
    <div class="navbar-jumbo px-5">
        <div class="row">
            <div class="col-12 column">
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

        <section id="main-content" class="col-12">
            <div class="row grid-responsive">
                <div class="column page-heading">
                    <div class="large-card">
                        <h1 class="mx-4">Hey {{ Auth::user()->name }}!</h1>
                        <div class="d-flex align-items-center">
                            @if ($newRestaurant)
                                <img src="path_to_your_image.jpg" alt="{{(auth()->user()->restaurant)}}">
                            @else
                                <p>non hai ancora un ristorante.</p>
                            @endif
                        
                            <div class="mx-4 p-2" style="background-color: #14D0C1;">
                                <span>Crea il tuo Ristorante</span>
                                <a href="{{route('admin.create')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="2rem" viewBox="0 0 448 512">
                                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                    </svg>
                                </a>


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
                        <div class="card-title" style="background-color:#14D0C1">
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
                        <div class="card-title" style="background-color:#14D0C1">
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