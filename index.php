<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'server.php'; ?>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/toggleVisibility.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Garage.KE</title>
    </head>
    <body class="container">


        <form action="index.php" class="page-header jumbotron container">
            <p class="text-uppercase">Welcome To Smart Garage Kenya please log in to continue</p>

            <div class=" form-group">
                <label for="Email">Email Address:</label>
                <input type="email" requirSamuel Kimanied="required" name="usr" class="form-control" placeholder="Email Address">
                <br>
                <small class="text-info">Your Email won't be shared to any third party entity</small>
            </div>
            <div class=" form-group ">
                <label for="password">Password:</label>
                <input type="password" required="required" name="pass" id="viewpass" placeholder="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="checkbox" onclick="viewPass()"> show password
            </div>
            <button type="submit" class=" btn-primary"">login</button>
        </form>
        <p class="page-header">
            New user?
            <a href="register.php">Click to register!</a>
        </p>
        
    </body>
</html>
