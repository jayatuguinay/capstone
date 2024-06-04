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
    <link rel="stylesheet" href = "{{url('public/css/admin.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
     /* body {
      background-image: url('public/img/admin.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      height: 100vh;
      width: 100vw;
      position: relative; 
      overflow: hidden; 
     background-color:#e6e2e2;
    }*/
    

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
    .bg7{
      background-color:#ff8c00;
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
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-0 navbar-column"> <!-- Set width of navbar column -->
                <nav class="navbar navbar-expand-sm  navbar-light h-150 shadow bg7" style="width:190px;"> <!-- Set navbar height to 100vh -->
                    <div class="container-fluid " style="height: 20vh;">
                      <a class="navbar-brand text-light" href="#"></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    
                      <div class="collapse navbar-collapse mt-5" id="navbarNavDropdown" style="height: 100vh;">
                        <ul class="navbar-nav flex-column"> <!-- Adjusted to display vertically -->
                          <li class="text3">
                            <b>SECURITY PERSONNEL</b>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active text4 text-left shadow-sm" aria-current="page" href="{{ url('/spdashboard') }}"><i class="bi bi-house"></i> Home</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark text-left shadow-sm" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi bi-clock-history"></i> History
                            </a>
                            <ul class="dropdown-menu bg-light flex-column" aria-labelledby="navbarDropdownMenuLink">
                              <li><a class="dropdown-item text-dark" href="{{ url('/spentry') }}">Entry</a></li>
                              <li><a class="dropdown-item text-dark" href="{{ url('/spexit') }}">Exit</a></li>
                            </ul>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark text-left shadow-sm" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi bi-upc-scan"></i> Scan
                            </a>
                            <ul class="dropdown-menu bg-light flex-column" aria-labelledby="navbarDropdownMenuLink">
                              <li><a class="dropdown-item text-dark" href="{{ url('/scanentry') }}">Scan Entry</a></li>
                              <li><a class="dropdown-item text-dark" href="{{ url('/scanexit') }}">Scan Exit</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <button class="btn btn-sm w-100 bg5 text3" type="submit"  id="splogout">Logout</button>
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
<!--
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="update-form">
        @csrf
          <div class="modal-header">
            <h5 class="modal-title">Edit Record</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Please enter necessary changes.</p>
                <div class="container bg-light mt-4 p-5">
                  <p class="lead">Please Fill-up the form below to register</p>
                <div class="form-group">
                  <label> ID Number</label>
                  <input type="text" class="form-control" name="idnumber" id="idnumber" required readonly>
                </div>
                <div class="form-group mb-3">
                  <label> First Name</label>
                  <input type="text" class="form-control" name="firstname" id="firstname" required>
                </div>

                <div class="form-group mb-3">
                  <label> Last Name</label>
                  <input type="text" class="form-control" name="lastname" id="lastname" required>
                </div>

                <div class="form-group mb-3">
                  <label> Course</label>
                  <select class="form-select" name="course" id="course"> 
                  <option value="">Select Course</option>
                  <option value="BSCS"> BS in Computer Science</option>
                  <option value="BSIT"> BS in Information Technology</option>
                  <option value="BSIS"> BS in Information System</option>
                  </select>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
      </form>
    </div>
  </div>
</div>-->