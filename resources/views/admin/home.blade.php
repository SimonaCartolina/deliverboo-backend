@extends('layouts.app')

@section('content')

@vite(['resources/sass/app.scss', 'resources/js/app.js'])


<section id="main-content" class="d-flex flex-column">
    <div class="row d-flex flex-column">
        <div class="card d-flex flex-column py-4" id="special-card">
            <div>
                <h1 class="mx-4">Hey <span>{{ Auth::user()->name }}!</span></h1>
                <p class="mx-4">This is the personal area of your restaurant. Here you will find the details on your restaurant, your dishes and your orders!</p>
            </div>

            <div>

                @if (Auth()->user()->restaurant)
                <div class="mt-3 btn mx-4">
                    <a href="{{route('admin.create')}}">

                        <span class="fw-bolder ">Check your restaurant</span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                        </svg>
                    </a>
                </div>

                @else
                <div class="mt-3 mx-4 btn">
                    <span class="fw-bolder">Create restaurant</span>
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

</section>

<div class="img-container">
    <img src="{{asset('storage/' . 'uploads/deliverboochart.png')}}" alt="" srcset="">
</div>

</template>


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

<style scoped>
    .btn {
        background-color: whitesmoke;
        border: 3px solid #e4c8a5;
        border-radius: 25px;
    }

    #special-card {
        position: relative;
        left: 10%;
    }

    h1 {
        color: #00C2B2;
        font-family: 'Agbalumo';
    }

    #special-card p {
        line-height: 2rem;
        margin-right: 5rem;
    }

    .img-container {
        width: 100vw;
        height: 100vh;

    }

    .img-container img {
        width: 100%;
        height: 100%;
    }

    section.background {
        height: 90vh;
    }
</style>
@endsection