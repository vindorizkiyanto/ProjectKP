@extends('layout/main')

@section('title', 'U-Link')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
@section('container')
<link rel="stylesheet" href="css/style.css">
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Make your business link <span>shorter</span> and <span>better</span> with us</h1>
        <a href="/shortens/create" class="btn btn-primary tombol"> Shorten Now</a>
    </div>
</div>
<!-- Akhir Jumbotron -->

<!-- Container -->
<div class="container">

    <!-- Info Panel -->
    <div class="row justify-content-center">
        <div class="col-10 info-panel">
            <div class="row">
                <div class="col-lg">
                    <img src="img/url.png" alt="Employee" class="float-left">
                    <h4>URL Shorten</h4>
                    <p>This can easily help you to<br> shorten your meeting link.</p>
                </div>
                <div class="col-lg">
                    <img src="img/stat.png" alt="High Res" class="float-left">
                    <h4>Real-Time Analytic</h4>
                    <p>With real-time analytics, you<br> can check data in real time.</p>
                </div>
                <div class="col-lg">
                    <img src="img/qr.png" alt="Security" class="float-left">
                    <h4>QR Code</h4>
                    <p>with qr code you can increase<br> the attractiveness of your link.</p>
                </div>

            </div>
        </div>
    </div>
    <!-- Akhir Info -->



    <!-- Working Space -->

    <div class="row workingspace">
        <div class="col-lg-6">
            <img src="/img/kantor1.jpg" alt="workingspace" class="img-fluid">
        </div>
        <div class="col-lg-5">
            <h3>Your meeting's link will be <span>better</span></h3>
        </div>

    </div>

    <!-- Akhir Working Space -->

    <!-- Testi -->

    <section class="testimonial">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h5>"Link meeting yang simple dan lebih menarik"</h5>
            </div>

        </div>

        <div class="row justify-content-center">

            <div class="col-lg-6 d-flex justify-content-center">
                <figure class="figure">
                    <img src="img/vin.jpg" class="figure-img img-fluid rounded-circle" alt="Testi 1">
                </figure>
                <figure class="figure">
                    <img src="img/kokom.jpg" class="figure-img img-fluid rounded-circle utama" alt="Testi 2">
                    <figcaption class="figure-caption">
                        <h5>Team</h5>
                        <p>S1 Ilmu Komputer</p>
                    </figcaption>
                </figure>
                <figure class="figure">
                    <img src="img/jere.jpg" class="figure-img img-fluid rounded-circle" alt="Testi 3">
                    <figure class="figure">
                    </figure>
            </div>

        </div>


    </section>

    <!-- Akhir testi -->

    <!-- Footer -->

    <div class="row footer">
        <div class="col text-center">
            <p>2021 All Rights Reserved by LIPI.</p>
        </div>
    </div>

    <!-- Akhir Footer -->


</div>
<!-- Akhir Container -->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

@endsection