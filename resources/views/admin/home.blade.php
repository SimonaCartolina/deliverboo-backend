@extends('layouts.app')

@section('content')

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<div class="container">
    <!-- <div class="navbar-jumbo px-5">
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
    </div> -->

    <div class="row">

        <section id="main-content" class="col-12">
            <div class="row grid-responsive">
                <div class="column page-heading">
                    <div class="large-card d-flex justify-content-center">
                        <div class="d-inline-block">
                            <h1 class="mx-4">Hey {{ Auth::user()->name }}!</h1>
                        </div>
                        <div class="d-inline-block align-items-center">

                            @if (Auth()->user()->restaurant)
                            <div class="mx-4 p-2" style="background-color: #14D0C1;">
                                <span>Modifica il tuo Ristorante</span>
                                <a href="{{route('admin.create')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                                </a>
                            </div>
                            @else
                            <div class="mx-4 p-2" style="background-color: #14D0C1;">
                                <span>Crea il tuo Ristorante</span>
                                <a href="{{route('admin.create')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="2rem" viewBox="0 0 448 512">
                                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                    </svg>
                                </a>
                            </div>
                            @endif
                        </div>


                    </div>
                </div>
            </div>

            <div class="row grid-responsive">
                <div class="column column-50">
                    <div class="card">
                        <div class="card-title" style="background-color:#14D0C1">
                            <h2>Statistiche</h2>
                        </div>
                        <div class="card-block">
                            <div class="">                                 
                                <img src="https://img.freepik.com/free-vector/construction-with-black-yellow-stripes_1017-30755.jpg?w=1800&t=st=1695915259~exp=1695915859~hmac=e581075be22da46a5d566339a0e8bf32764f28a7e87ec4de7c125e6ecc4a8aff" alt="" style="width: 100%; height: 12rem;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row grid-responsive">
                <div class="column ">
                    <div class="card">
                        <div class="card-title" style="background-color:#14D0C1">
                            <h3>Membri del Team</h3>
                        </div>
                        <div class="card-block">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Ruolo</th>
                                        <th>Età</th>
                                        <th>Provenienza</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Simona Cartolina</td>
                                        <td>Si concentra Meglio da sola</td>
                                        <td>Da non chiedere</td>
                                        <td>Ovungue passi qualcuno con uno scarico modificato</td>
                                    </tr>
                                    <tr>
                                        <td>Cosimo Collucci</td>
                                        <td>FullStack Web Developer</td>
                                        <td>27</td>
                                        <td>Torre, 72028</td>
                                    </tr>
                                    <tr>
                                        <td>Francesco Bifero</td>
                                        <td>Scappato di casa</td>
                                        <td>All'anagrafe 26</td>
                                        <td>Non ha un domicilio</td>
                                    </tr>
                                    <tr>
                                        <td>Luca Mazzoli</td>
                                        <td>Si ci sono</td>
                                        <td>Non ho ancora chiesto</td>
                                        <td>Non pervenuta</td>
                                    </tr>
                                    <tr>
                                        <td>Alessio di Nardo</td>
                                        <td>Porta a spasso i cani</td>
                                        <td>27</td>
                                        <td>Ovunque si trovano i suoi cuccioli</td>
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