<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal Homepage">
    <meta name="author" content="Kevin Jackson">

    <title>Personal HomePage</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <link href="css/PH.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-home"></i> <span class="light">Personal</span> Homepage
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Wsection">Weather</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Lsection">Location</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Msection">Map</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <br><h1 class="brand-heading">Welcome Back</h1>
                        <p class="intro-text">
                          <h1>The time is:</h1><h2 id="time"></h2>
                          <script>
                                    var currentTime = new Date();
                                    var hours = currentTime.getHours();
                                    var minutes = currentTime.getMinutes();

                                    var suffix = "AM";

                                    if (hours >= 12) {
                                      suffix = "PM";
                                      hours = hours - 12;
                                    }

                                    if (hours == 0) {
                                      hours = 12;
                                    }

                                    if (minutes < 10) {
                                      minutes = "0" + minutes;
                                    }
                          document.getElementById('time').innerHTML= "<b>" + hours + ":" + minutes + " " + suffix + "</b>";
                         </script>
<br><h1>Today is:</h1><h2 id="day"></h2> <script>var cd = new Date(); var month = cd.getMonth(); var date = cd.getDate(); var year = cd.getFullYear(); var months = ["January","February","March","April","May","June","July","August","September","October","November","December"]; var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];document.getElementById("day").innerHTML = days[cd.getDay()] +" "+months[cd.getMonth()] + " " + date + " " + " " + year;</script>
                        <a href="#Wsection" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="Wsection" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div id="weather">
                <h1>Weather</h1>
                <img src="img/nothing.png" id="icon" alt="clouds" height="200" width="200"><br>
                <h1 id="content"></h1>
              </div>
            </div>
        </div>
    </section>


    <section id="Lsection" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>Your Current Location:</h1>
                <h2 id="city"></h2>
            </div>
        </div>
</section>

  <section id="Msection">

    <div id="map"></div>
  </section>

    <footer>
        <div class="container text-center">
            <p>Personal Homepage By Kevin Jackson</p>
        </div>
    </footer>

    <script src="vendor/jquery/jquery.js"></script>

    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src=js/getWeather.js></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpAgBTOO8KfkoECApXdcQSvC55I_M_HdA&sensor=false"></script>
    <script src="js/PH.js"></script>

</body>

</html>
