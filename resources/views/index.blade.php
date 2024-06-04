<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <meta name="theme-color" content="#712cf9">
    <style>
        .navbar {
            background-color: #254336; /* Change this to your desired background color */
        }
        .navbar-brand {
            color: #CAF4FF; /* Change this to your desired text color */
        }
        .nav-link {
            color: #CAF4FF !important; /* Change this to your desired text color */
        }
        body{
           /* background-image: url('public/img/daan.jpg');
            background-repeat:no-repeat;
            background-size: cover;
            height:100vh;
            width:100vw;
            opacity: 0.9;*/
            background-color: #e6effc
        }
        .bg1{
        background-color: #254336;
        }
        .bg2{
            background-color: #6B8A7A;
        }
        .bg3{
            background-color: #4D869C;
        }
        .bg4{
            background-color: #DAD3BE;
        }
        .bg5{
          background-color: #a8344b;
        }
        .bg6{
          background-color: #01204E
        }
        .text1{
          color: #CAF4FF;
        }
        .text2{
          color:#A0DEFF;
        }
        .text3{
          color: #e6effc;
        }
        .text4{
          color: #1A4D2E;
        }
    </style>
    <link href="cover.css" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center ">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg1">
            <div class="container-fluid">
              <p class="text2">This is the official website of NVSU-VEEMS</p>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                </div>
            </div>
        </nav>
    </header>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-light shadow mt-5 p-5 rounded" style="opacity:0.9;">
                <main class="px-3">
                    <h1>Welcome</h1>
                    <p class="lead">Nueva Vizcaya State University RFID-based Vehicle Entry and Exit Monitoring System.</p>
                    <p class="lead">
                        <h5>LOGIN as</h5>
                        <a class="btn btn-m btn-light text-light bg-success w-50 border-white btn-sm shadow" href="{{url('/admin_login')}}"><b>ADMINISTRATOR</b></a>
                        <a class="btn btn-m btn-light text-light w-50 border-white btn-sm bg-success mt-4 shadow" href="{{url('/security_login')}}"><b>SECURITY PERSONNEL</b></a>
                    </p>
                </main>
            </div>
        </div>
    </div>
</div>
<!--<footer class="mt-auto text-white-50">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-light text-dark" style="opacity:0.9;">
            <p>All right reserved</p>
        </div>
    </div>
</div>
</footer>-->
</body>
</html>
