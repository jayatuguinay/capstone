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
    <script>
        function updateTime() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();
        var timeString = formatTime(hours) + ":" + formatTime(minutes) + ":" + formatTime(seconds);
        document.getElementById("clock").textContent = timeString + " " + "<?php echo date('l, F jS Y'); ?>";
    }

    function formatTime(time) {
        return (time < 10 ? "0" : "") + time;
    }

    // Update time every second
    setInterval(updateTime, 1000);
</script>
    <style>
      body {
      /*background-image: url('public/img/admin.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      height: 100vh;
      width: 100vw;
      position: relative; 
      overflow: hidden; */
     background-color:#d8d8d8;
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
                <nav class="navbar navbar-expand-sm  navbar-light h-150 bg-light shadow" style="width:190px;"> <!-- Set navbar height to 100vh -->
                    <div class="container-fluid " style="height: 20vh;">
                      <a class="navbar-brand text-light" href="#"></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavDropdown" style="height: 100vh;">
                        <ul class="navbar-nav flex-column mt-5"> <!-- Adjusted to display vertically -->
                          <li class="nav-item">
                            <p><b>ADMINISTRATOR</b></p>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active text-dark text-left shadow-sm" aria-current="page" href="{{ url('/admindashboard') }}"><i class="bi bi-house"></i> Home</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark text-left shadow-sm" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-clock-history"></i> History
                            </a>
                            <ul class="dropdown-menu bg-light flex-column" aria-labelledby="navbarDropdownMenuLink">
                              <li><a class="dropdown-item text-dark" href="{{ url('/entry') }}">Entry</a></li>
                              <li><a class="dropdown-item text-dark" href="{{ url('/exit') }}">Exit</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-dark text-left shadow-sm" href="{{ url('/manage') }}"><i class="bi bi-kanban"></i> Manage</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-dark text-left shadow-sm" href="{{ url('/logs') }}"><i class="bi bi-activity"></i> Activity Logs</a>
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
<!-- Create secrurity Password Modal -->
<div class="modal fade" id="createPasswordModal" tabindex="-1" aria-labelledby="createPasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <form id="create-password-form">
              @csrf
              <div class="modal-header">
                  <h5 class="modal-title" id="createPasswordModalLabel">Create New Password</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body bg-light">
                  <div class="container">
                      <p class="lead">Create a new password for security personnel</p>
                      <div class="form-group">
                        <label for="c_password">USER ID</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" name="uid" id="uid" required>
                        </div>
                    </div>
                      <div class="form-group">
                          <label for="c_password">PASSWORD</label>
                          <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="bi bi-lock"></i></span>
                              </div>
                              <input type="password" class="form-control" name="c_password" id="c_password" required>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
              </div>
          </form>
      </div>
  </div>
</div>

<!-- Delete security personnel Password Modal -->
<div class="modal fade" id="deletePasswordModal" tabindex="-1" aria-labelledby="deletePasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <form id="delete-password-form">
              @csrf
              <div class="modal-header">
                  <h5 class="modal-title" id="deletePasswordModalLabel">Delete Password</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body bg-light">
                  <div class="container">
                      <p class="lead">Delete password for security personnel</p>
                      <div class="form-group">
                          <label for="c_password">PASSWORD</label>
                          <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="bi bi-lock"></i></span>
                              </div>
                              <input type="password" class="form-control" name="c_password" id="c_password" required>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
              </div>
          </form>
      </div>
  </div>
</div>

<!-- Create Admin Account -->
<div class="modal fade" id="CreateAccountModal" tabindex="-1" aria-labelledby="CreateAccountModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <form id="create-admin-form">
              @csrf
              <div class="modal-header">
                  <h5 class="modal-title" id="CreateAccountModal">Create Admin Account</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body bg-light">
                  <div class="container">
                      <div class="form-group">
                        <label for="c_password">USERNAME</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                            </div>
                            <input type="password" class="form-control" name="adminuname" id="adminuname" required>
                        </div>
                    </div>
                      <div class="form-group">
                          <label for="c_password">PASSWORD</label>
                          <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="bi bi-lock"></i></span>
                              </div>
                              <input type="password" class="form-control" name="adminpassword" id="adminpassword" required>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
              </div>
          </form>
      </div>
  </div>
</div>

<!-- DELETE Admin Account -->
<div class="modal fade" id="DeletAccountModal" tabindex="-1" aria-labelledby="CreateAccountModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <form id="delete-admin-form">
              @csrf
              <div class="modal-header">
                  <h5 class="modal-title" id="DeletAccountModal">Delete</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body bg-light">
                  <div class="container">
                      <p class="lead">Delete admin account</p>
                      <div class="form-group">
                          <label for="adminpassword">PASSWORD</label>
                          <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="bi bi-lock"></i></span>
                              </div>
                              <input type="password" class="form-control" name="deleteadmin" id="deleteadmin" required>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
              </div>
          </form>
      </div>
  </div>
</div>