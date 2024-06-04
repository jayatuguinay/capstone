<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        
          
<meta name="theme-color" content="#712cf9">
      
    <style>
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
  <body>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto bg1 fixed-top shadow">
    <div class="bg-4">
        <p class="text2">This is the official website of NVSU-VEEMS</p>
    </div>
  </header>

  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5 bg-light p-5 rounded shadow" style="opacity:0.9;">
            <main class="px-3">
                <h3 class="mb-2 text4 text-center">ADMIN</h3>
                <form>
                    <div class="form-group">
                        <label class="text4">Username</label>
                        <input type="text" class="form-control" id="uname" name="uname" placeholder="Write your given username">
                    </div>
                    <div class="form-group">
                        <label class="text4">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Write your password">
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <button type="submit" name="btn_submit" id="btn_login" name="btn_login" class="btn btn-success mt-2 w-50 me-2">Login</button>
                        <button type="button" name="btn_cancel" id="btn_cancel" name="btn_cancel" class="btn btn-danger mt-2 w-50">Cancel</button>
                    </div>
                </form>
            </main>
        </div>
    </div>
</div>


  <footer class="mt-auto text-white-50">
    <p>All right reserved</p>
  </footer>
    </body>
    
</html>
