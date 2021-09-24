<?php include ('Quotations_sql.php') ?>
<!DOCTYPE Html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quotations</title>
        <link rel="stylesheet" href="/assets/css/contact_style.css">
    </head>
    <body>
        <form action="quotations.php" class="container">
            <h2>Get Quote</h2>
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
                                    <span class="line"></span>
                                    <select id="cars" name="part" class="inputBox">
                                        <option value="Alternator" name="part">Alternator</option>
                                        <option value="Engine" name="part">Engine</option>
                                        <option value="Battery" name="part">Battery</option>
                                        <option value="Starter" name="part">Starter Motor</option>
                                        <option value="Brakes" name="part">Distributor</option>
                                        <option value="Ignition" name="part">Ignition</option>
                                        <option value="Spark Plug" name="part">Spark Plug</option>
                                        <option value="Radiator" name="part">Radiator</option>
                                        <option value="Shock Absorbers" name="part">Shock Absorbers</option>
                                        <option value="Car Lights" name="part">Car Lights</option>
                                        <option value="Body works" name="part">Body Works</option>
                                        <option value="Other" name="Part">Other</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="col">
                                <div class="inputBox">

                                    <span class="line"></span>
                                    <select id="cars" name="brand" class="inputBox">
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
                                        <option value="Other" name="brand">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="col">
                                <div class="inputBox textarea">
                                    <textarea name="specifications" required="required" ></textarea>
                                    <span class="text">Type your specifications and other information here...</span>
                                    <span class="line"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="col">
                                <input type="submit" value="Send">
                                <input type="submit" value="Menu" onclick="window.open('main_menu.php')">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>