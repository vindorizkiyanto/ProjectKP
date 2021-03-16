<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <title>Registrasi</title>
    <link rel="stylesheet" href="/css/regist.css">
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="top-right links">
            <a href="{{ route('login') }}">Login</a>
        </div>
    </div>
    <form class="box" action="{{ route('register') }}" method="post">
        {{ csrf_field() }}
        <h1>Register</h1>
        <input type="text" name="email" id="inputEmail" class="form-control {{$errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email" value="{{old('email')}}" required autofocus>
        @if ($errors->has('email'))
        <div class="invalid-feedback">
            {{$errors->first('email')}}
        </div>
        @endif

        <input type="text" name="name" id="inputName" class="form-control {{$errors->has('name') ? 'is-invalid' : '' }}" placeholder="Username" value="{{old('name')}}" required>
        @if ($errors->has('name'))
        <div class="invalid-feedback">
            {{$errors->first('name')}}
        </div>
        @endif

        <input type="password" name="password" id="inputPassword" class="form-control {{$errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" required>
        @if ($errors->has('password'))
        <div class="invalid-feedback">
            {{$errors->first('password')}}
        </div>
        @endif

        <input type="password" name="password_confirmation" id="inputPassword" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : '' }}" placeholder="Re-Type Password">
        @if ($errors->has('password_confirmation'))
        <div class="invalid-feedback">
            {{$errors->first('password_confirmation')}}
        </div>
        @endif

        <input type="submit" name="" value="Create Account">
        <span class="dark-color d-inline-block line-height-2">Sudah Punya Account? <a href="{{ route('login') }}">Login</a></span>
    </form>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>