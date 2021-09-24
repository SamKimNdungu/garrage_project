<?php include ('contact_sql.php') ?>
<!DOCTYPE Html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact us</title>
        <link rel="stylesheet" href="/assets/css/contact_style.css">
    </head>
    <body>
        <form action="contact_us.php" class="container">
            <h2>contact us</h2>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="fname" required="required">
                        <span class="text">First Name</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="row100">
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="lname" required="required">
                            <span class="text">Last Name</span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="row100">
                        <div class="col">
                            <div class="inputBox">
                                <input type="text" name="email" required="required">
                                <span class="text">Email</span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="col">
                                <div class="inputBox">
                                    <input type="text" name="mobile" required="required">
                                    <span class="text">Mobile</span>
                                    <span class="line"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="col">
                                <div class="inputBox textarea">
                                    <textarea name="cmessage" required="required" ></textarea>
                                    <span class="text">Type your message here...</span>
                                    <span class="line"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="col">
                                <input type="submit" value="Send">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>