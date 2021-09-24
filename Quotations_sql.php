<?php
$connect = mysqli_connect("localhost", "id16489302_garage_db", "UEpX4PJ1W>>4Tj/O", "id16489302_garagemanagement") or die("failed to reach server");
if (isset($_REQUEST['fname']) || isset($_REQUEST['lname']) || isset($_REQUEST['email']) || isset($_REQUEST['part']) || isset($_REQUEST['brand']) | isset($_REQUEST['specifications'])) {
    $fname = mysqli_real_escape_string($connect, $_REQUEST['fname']);
    $lname = mysqli_real_escape_string($connect, $_REQUEST['lname']);
    $email = mysqli_real_escape_string($connect, $_REQUEST['email']);
    $part = mysqli_real_escape_string($connect, $_REQUEST['part']);
    $brand = mysqli_real_escape_string($connect, $_REQUEST['brand']);
    $specifications = mysqli_real_escape_string($connect, $_REQUEST['specifications']);
    $query = "INSERT INTO Quotations (fname, lname, email, part, specifications, brand)VALUES('$fname', '$lname', '$email', '$part', '$specifications','$brand')";
    mysqli_query($connect, $query);
    echo '<script language="javascript">';
    echo 'alert("Your message has been received you will receive a quotation back shortly. Thank you")';
    echo'</script>';
}
?>