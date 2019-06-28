<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BRU botline</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('js/bootstrap.min.js')}}" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<body style="background: #FFF399">
    <!-- Image and text -->
    <nav class="navbar navbar-light text-white" style="background: #1686a6"  >

        <div class="form-group row">

            <p>
                <a class="navbar-brand" href="#">
                    <img src="https://www.bru.ac.th/wp-content/uploads/2018/06/bru-web-logo.svg" height="111" width="550">
                </a>
                <strong style="margin-right: 2rem;  font-size: 30px"></strong>
            </p>
        </div>

    </nav>
    <nav class="navbar navbar-light  text-white" style="background: #e5db7e">
        <a class="navbar-brand" style="background: #c9c0aa"></a>
        <form class="form-inline">
            @if (Route::has('login'))
                <div class="nav-item">
                    @if (Auth::check())
                        <a class="btn btn-dark text-white" href="{{ url('/home') }}">หน้าหลัก</a>
                    @else
                        <a   class="btn btn-dark text-white" href="{{ url('/login') }}">สำหรับเจ้าหน้าที่  </a>
                        <a   class="btn btn-dark text-white" href="{{ url('/register') }}">สมัครสมาชิก  </a>
                    @endif
                </div>
            @endif
        </form>
    </nav>

</head>

</body>
</html>
