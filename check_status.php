<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/check_status.css">
        <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/angular.min.js"></script>
        <script type="text/javascript" src="assets/js/toggleVisibility.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <title>
            check vehicle status
        </title>

    </head>
    <body>

        <nav class="navbar navbar-default" style="hidden">
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
                    <li><a href="check_status.php">check status</a></li>                  
                </ul>
            </div>
        </nav>
        <form action="check_status.php" class="container">
            <h2>Check vehicle status</h2>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="fname" required="required">
                        <span class="text">Number plate</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="row100">
                    <div class="col">
                        <input type="submit" value="Send">
                    </div>
                </div>
            </div>
        </form>
      
    </body>
</html>