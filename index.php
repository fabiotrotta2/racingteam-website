<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{Name} Racing Team</title>

    <!-- Bootstrap Core CSS -->
    <link rel="icon" href="./img/fav.ico" />
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->

    <link href="css/main.css" rel="stylesheet">
    <style type="text/css">html,body{background-color: white}</style>

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
            <div class="col-md-10 col-centered personal" style="min-height: 600px;">
                <p>
                    <img src="./img/home.png" style="margin: 0 auto; display: block; margin-left: auto; margin-right: auto; margin-top: -60px; width: 600px; height: 600x;">
                </p>
            </div>
        </div>
    </div>
    <div id="footer" style="@media (max-width: 767px) {background-color: #fff}"> 
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
