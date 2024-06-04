<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="j6uthqzcyVJ0v4UUjDsseUoJwSkier8yxt0ZxIy5" />
    <title>admin</title>
    <script src="/cdn-cgi/apps/head/PCMA3cA-XbgZFhohYKJd7QGgM1c.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-image: url('public/img/admin.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100vw;
            position: relative; /* Add position relative */
            overflow: hidden; /* Prevent scrollbar */
        }
        .logo{
            background-repeat: no-repeat;
            background-size: cover;
            height: 50vh;
            width: 50vh;
            position: relative; /* Add position relative */
            overflow: hidden; /* Prevent scrollbar */
        }

        .header .navbar-nav {
            align-items: flex-start;
            height: 100%;
        } 
        
        /* Adjustments */
        .navbar {
            height: 100vh;
            flex-direction: column; /* Align navbar items vertically */
           
        }

        .navbar-collapse {
            width: 100%; /* Occupy full width */
            max-height: calc(100vh - 56px); /* Subtract navbar height */
            overflow-y: auto; /* Enable scrolling */
        }
        
        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }

        /* Adjusted widths */
        .navbar-column {
            width: 250px; /* Adjust width as needed */
            padding-right: 15px; /* Add some padding for spacing */
        }

        .content-column {
            flex: 1; /* Occupy remaining width */
        }

        /* Custom CSS for nav items */
        .navbar-nav .nav-item {
            width: 100%; /* Occupy full width */
            text-align: left; /* Align text to the left */
        }
        .background{
            background-color: #070F2B;
        }
        body::after {
            content: "";
            background: rgba(0, 0, 0, 0.4); /* Adjust the alpha value (0 to 1) for opacity */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
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
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-0 navbar-column"> <!-- Set width of navbar column -->
                <nav class="navbar navbar-expand-sm navbar-light h-100"> <!-- Set navbar height to 100vh -->
                    <div class="container-fluid background " style="height: 100vh;">
                      <a class="navbar-brand text-light" href="#"></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    
                      <div class="collapse navbar-collapse" id="navbarNavDropdown" style="height: 100vh;">
                        <ul class="navbar-nav flex-column"> <!-- Adjusted to display vertically -->
                          <li class="nav-item">
                            <a class="nav-link active text-light text-center bg-warning" aria-current="page" href="{{ url('/admindashboard') }}">Home</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light text-center" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              History
                            </a>
                            <ul class="dropdown-menu bg-dark flex-column" aria-labelledby="navbarDropdownMenuLink">
                              <li><a class="dropdown-item text-light" href="{{ url('/entry') }}">Entry</a></li>
                              <li><a class="dropdown-item text-light" href="{{ url('/exit') }}">Exit</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-light text-center" href="#">Manage Account</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
            <div class="col-md-10 content-column"> <!-- Adjusted content column width -->
                @yield('content')
            </div>
        </div>
    </div>

    <section class="breadcrumbs overlay">
    
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
