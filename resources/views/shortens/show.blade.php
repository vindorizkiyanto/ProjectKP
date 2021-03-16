@extends('layout/main')

@section('title', 'Detail Link')

@section('container')
<link rel="stylesheet" href="/css/shorten.css">
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class=mt-3>Detail Link</h1>

            <div class="card text-white bg-dark mb-3 mb-5">
                <div class="card-body">
                    <h5 class="card-title mb-4 text-light">Judul <br>
                        <p class="text-light mt-1">{{ $shorten->judul }}</p>
                    </h5>
                    <h5 class="card-subtitle mb-4 text-light">Link Asli <br>
                        <p class="text-light mt-1">{{ $shorten->long_url }}</p>
                    </h5>
                    <h5 class="card-text mb-4 text-light">Shorten Link <br>
                        <p class="text-light mt-1">{{ $shorten->short_url }}</p>
                    </h5>
                    <h5 class="card-text mb-4 text-light">SLUG <br>
                        <p class="text-light mt-1">{{ $shorten->random }}</p>
                    </h5>
                    <h5 class="card-text mb-4 text-light">IP Access <br>
                        <!-- IP -->

                        <div id="data"></div>
                        <script>
                            function callback(response) {
                                console.log(response)

                                document.getElementById("data").innerHTML = response.IPv4;
                            }
                            $.ajax({

                                url: "https://geoip-db.com/jsonp/",
                                dataType: "jsonp"

                            })
                        </script>
                        <!-- IP -->
                    </h5>
                    <a href="/shortens" class="back btn btn-primary">Back</a>
                </div>
            </div>

        </div>
        <div clas="panel">
            <div id="chartVisitor"></div>

        </div>
    </div>
</div>
@endsection
@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
    Highcharts.chart('chartVisitor', {

        title: {
            text: 'Data Pengguna Link'
        },

        subtitle: {
            text: '2021'
        },

        yAxis: {
            title: {
                text: 'Jumlah Pengunjung link'
            }
        },

        xAxis: {
            accessibility: {
                rangeDescription: 'Range: 1 to 12'
            }
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: 1
            }
        },

        series: [{
            name: 'Pengguna link',
            data: [13, 15, 10, 20, 14, 10, 10, 17, 20, 20, 21, 16]
        }, ],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });
</script>
@endsection