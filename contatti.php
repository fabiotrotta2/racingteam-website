<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{Name} Racing Team Contatti</title>

    <!-- Bootstrap Core CSS -->
    <link rel="icon" href="./img/fav.ico" />
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->

    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php 
    include './navbar.php';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-centered">
                <div class="page-header">
                    <h1>
                        Contatti
                    </h1>
                </div>
                <p>
                    <b>Faculty Advisor</b> (Nome Cognome)<br> 
                    Tel: 012 34 56 789<br> 
                    Mail: <a href="mailto:mail@mail.com">mail@mail.com</a><br><br>

                    <b>Team Leader </b>(Andrea Strino)<br>
                    Tel: 366 34 81 740<br> 
                    Mail: <a href="mailto:and.strino@gmail.com">and.strino@gmail.com</a><br><br>
                    
                    <b>Team</b><br>
                    Mail: <a href="mailto:teamracing{Name}@gmail.com">teamracing{Name}@gmail.com</a><br>
                    Facebook: <a href="http://facebook.com/{Name}racingteam/" target="_blank">facebook.com/{Name}racingteam</a><br>
                    Twitter: <a href="http://twitter.com/{Name}_team" target="_blank">twitter.com/{Name}_team</a><br>
                    Instagram: <a href="http://instagram.com/{Name}racingteam" target="_blank">instagram.com/{Name}racingteam</a><br>
                    
                    <hr>
                </p>
                    <h1>
                        Dove siamo
                    </h1>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJieXJ8gdnocVrm9hEt4_FvGEFVwVC-tM&callback=initMap"> </script>
                    <script>
                    function initMap() {
                      var myLatLng = {lat: 40.828376, lng: 14.190427};

                      var map = new google.maps.Map(document.getElementById('googleMap'), {
                        zoom: 16,
                        center: myLatLng
                      });

                      var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map
                      });

                      var contenuto = '<h3 style="width: 180px; height: 20px; margin:0 !important; font-size: 18px; color:#2c539e">{Name} Racing Team</h3>';

                      var infowindow = new google.maps.InfoWindow({
                        maxWidth: 350,
                        content: contenuto
                      });

                      google.maps.event.addListener(marker, 'click', (function(marker) {
                        return function() {
                          infowindow.setContent(contenuto);
                          infowindow.open(map, marker);
                        }
                      })(marker));
                    }
                    </script>
                    <div id="googleMap"></div>
            </div>
        </div>
    </div>
    <div id="footer">
      <div class="container-fluid">
        <p class="muted credit">Developed by <a href="https://www.facebook.com/Fabio.Trotta.1991" target="_blank">Fabio Trotta</a>.</p>
      </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
