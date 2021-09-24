<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en" ng-app >
    <head >
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/angular.min.js"></script>
        <script type="text/javascript" src="assets/js/toggleVisibility.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>main Menu</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-target="#nav-toggle" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 
                <a href="" class="navbar-brand">Home</a>
            </div>
            <div class="collapse navbar-collapse" id="nav-toggle">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="Appointment.php">Appointment</a></li>
                    <li><a href="check_status.php">Check status</a></li>
                    <li><a href="quotations.php">Get quote</a></li>
                    <li><a href="contact_us.php">Contact us</a></li>
                    <li><a href="about_us.php">About us</a></li>
                </ul>
            </div>
        </nav>
        <div class="thumb">
            <a href="#">
                <span>Garage Ke</span>
            </a>
        </div>
        <footer>
            <div class="footer-content">
                <h3>Garrage KE</h3>
                <p>Visit our Socials</p>
                <ul class="socials">
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                    <li><a href=""><i class="fa fa-youtube"></i></a></li>
                    <li><a href=""><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy; Musa Designs <span>MUSA MUHAMMED</span> </p>
            </div>
        </footer>
    </body>
</html>