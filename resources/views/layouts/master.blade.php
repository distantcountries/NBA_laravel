<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div style="padding:2rem;">

        <!-- stil za potvrnu poruku, recimo kada se ulogujemo -->
        @if($flash = session('message_true'))
            <div class="alert alert-success" role="alert"> 
                {{ $flash }}
            </div>
        @endif

        <!-- stil za negativnu poruku, recimo kada se izlogujemo -->
        @if($flash = session('message_false'))
            <div class="alert alert-danger" role="alert"> 
                {{ $flash }}
            </div>
        @endif

        @include('layouts.header')

        <div class="row">

            <div class="col-sm-8 blog-main" style="margin: 3rem;">
                @yield('content')
            </div>

            @if (Auth::check())
                @include('layouts.sidebar')
            @endif

        </div>

        @include('layouts.footer')
        
    </div>

</body>
</html>