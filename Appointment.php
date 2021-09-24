<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include ('AppointmentSQL.php') ?>
<html lang="en" ng-app>
    <head >
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script type="text/javascript" src="/assets/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/assets/js/angular.min.js"></script>
        <script type="text/javascript" src="/assets/js/toggleVisibility.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Appointment</title>
    </head>
    <body style="min-height: 100vh;">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-target="#nav-toggle" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 
                <a href="/main_menu.php" class="navbar-brand">Home</a>
            </div>
            <div class="collapse navbar-collapse" id="nav-toggle">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="Appointment.php">Appointment</a></li>

                </ul>
            </div>
        </nav>
        <form action="Appointment.php" class="form-horizontal">
            <fieldset>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-lg-10">
                            <div id="ui">
                                <form action="Appointment.php" class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Full Name: </label>
                                            <input type="text" name="fname" placeholder="john doe" required class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Phone Number: </label>
                                            <input type="tel" name="tel_no" placeholder="7123456789" required class="form-control">
                                        </div>
                                    </div>
                                    <label>Email </label>
                                    <input type="email" name="email" placeholder="@example.com" required class="form-control">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Number Plate: </label>
                                            <input type="text" name="plate" required class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Car brand: </label>
                                            <select id="cars" name="brand" class="form-control">
                                                <option value="volvo" name="brand">Volvo</option>
                                                <option value="Toyota" name="brand">Toyota</option>
                                                <option value="Subaru" name="brand">Subaru</option>
                                                <option value="Hyundai" name="brand">Hyundai</option>
                                                <option value="Nissan" name="brand">Nissan</option>
                                                <option value="Tesla" name="brand">Tesla</option>
                                                <option value="Saab" name="brand">Saab</option>
                                                <option value="Fiat" name="brand">Fiat</option>
                                                <option value="Audi" name="brand">Audi</option>
                                                <option value="Mitsubishi" name="brand">Mitsubishi</option>
                                                <option value="Isuzu" name="brand">Isuzu</option>
                                                <option value="TATA" name="brand">TATA</option>
                                            </select>
                                        </div>

                                </form>
                            </div>
                            <label>Application Date </label>
                            <input type="date" name="date" required class="form-control">
                            <label>Describe car problem</label>
                            <textarea name="cproblem" rows="6" cols="10" name="email" class="form-control" placeholder="Describe your car problem here"></textarea>
                            <br>
                            <button type="submit"  class="btn-primary btn-block">Submit</button>
                        </div>
                    </div>

                </div>

            </fieldset>
        </form>
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