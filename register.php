<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include ('reg_server.php') ?>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/toggleVisibility.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register with us</title>
    </head>
    <body class="container">
        <form action="register.php" class="page-header jumbotron container">

            <p class="text-uppercase">Register to continue</p>

            <div class=" form-group">
                <label for="Email">Email Address:</label>
                <input type="email" required="required" name="email" class="form-control" placeholder="Email Address">
                <br>
                <small class="text-info">Your Email won't be shared to any third party entity</small>
            </div>
            <div class=" form-group">
                <label for="text">Username:</label>
                <input type="text" required="required" name="usr" class="form-control" placeholder="username">
                <br>

            </div>
            <div class=" form-group ">
                <label for="password">Password:</label>
                <input type="password" required="required" name="pass" id="viewpass" placeholder="password" class="form-control">
            </div>
            <div class=" form-group ">
                <label for="password">Confirm Password:</label>
                <input type="password" required="required" name="pass_confirm" id="viewpass2" placeholder="repeat password" class="form-control">
            </div>
            <div class="form-group">
                <input type="checkbox" onclick="viewPass()"> show password
            </div>

            <button type="submit" class=" btn-primary"">Register</button>
        </form>

    </body>
</html>
