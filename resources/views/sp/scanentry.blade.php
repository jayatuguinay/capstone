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
    .custom-height {
            height: 200px; /* Set your desired height here */
        }
        .logo{
            background-repeat: no-repeat;
            background-size: cover;
            height: 80vh;
            width: 80vh;
            position: relative; /* Add position relative */
            overflow: hidden; /* Prevent scrollbar */
            
        }
        
    </style>
   
</head>
<!--PLAIN DESIGN LANG MUNA, YUNG FINAL DESIGN, KAPAG TAPOS NA YUNG MGA  FUNCTIONALITIES NIYA-->
<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="dropdown-item text-dark" href="{{ url('/spdashboard') }}"><h3>ENTRY</h3></a><!--Eto yung exit button niya para bumalik saa dashboard-->
            </div>
        </div>
        <div class="row">
            <form class="d-flex"  role="search">
                <input class="form-control bg-light" style="width:300px; height:30px;" type="search"><!--nilagay ko tong searh bar para dito mainput yung scanned rfid para masearch niya tapos ma display. Pero pwede mo naman tanggalin, depende sayo kung paano mo isesearch yung scanned rfid tag(number) para-->
            </form>
            <div class="col-md-7 shadow d-flex justify-content-center align-items-center">
                <img src="{{ URL('public/img/nvsu.png') }}" class="img-fluid logo" alt="Logo">
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-4 d-flex flex-column justify-content-center">
                <h1 class="display-4">Juan Dela Cruz</h1>
                <h3>Student</h3>
                <h3>Yamaha Aerox 155</h3>
                <h3>HGU G56</h3>
            </div>
            <div style="text-align: right;" class="fixed-bottom">
                <div class="col-md-12">
                    <div id="clock"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>







