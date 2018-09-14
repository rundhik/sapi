<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>KPSP - Populasi Sapi Login</title>

    <link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('global/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('global/css/bootstrap-extend.min.css')}}">
    <link rel="stylesheet" href="{{('assets/css/site.min.css')}}">
    <link rel="stylesheet" href="{{('assets/css/alerts.css')}}">
    
    <!-- Plugins -->
        <link rel="stylesheet" href="{{asset('assets/examples/css/pages/login.css')}}">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('global/fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('global/fonts/brand-icons/brand-icons.min.css')}}">
</head>
<body class="animsition page-login layout-full page-dark">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
      <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <div class="brand">
          <img class="brand-img" src="{{asset('assets/images/logo.png')}}" alt="...">
          <h2 class="brand-text">KPSP Setia Kawan - Nongkojajar</h2>
        </div>
        <p>Silahkan login untuk mengakses aplikasi</p>
        <form method="post" action="{{ route('login') }}">
        {{ csrf_field() }}
          <div class="form-group">
            <label class="sr-only" for="username">{{ __('Username') }}</label>
            <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" id="username" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>
            
            
          </div>
          <div class="form-group">
            <label class="sr-only" for="password">{{ __('Password') }}</label>
            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password"
             placeholder="Password" required>
          </div>
          @if ($errors->has('username'))
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ $errors->first('username') }}</strong>
          </div>
            @endif
        @if ($errors->has('password'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ $errors->first('password') }}</strong>
        </div>
         @endif
          <div class="form-group clearfix">
            <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
              <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">{{ __('Ingat saya') }}</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Masuk</button>
        </form>
        <footer class="page-copyright page-copyright-inverse">
          <p>Skripsi Randy Anwar</p>
          <p>© 2018. Universitas Narotama.</p>
        </footer>
      </div>
    </div>
    <!-- End Page -->
    {{-- Core --}}
    <script src="{{asset('global/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
    <script src="{{asset('global/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('global/vendor/popper-js/umd/popper.min.js')}}"></script>
    <script src="{{asset('global/vendor/bootstrap/bootstrap.js')}}"></script>
</body>
</html>