<?php

$connect = mysqli_connect("localhost", "id16489302_garage_db", "UEpX4PJ1W>>4Tj/O", "id16489302_garagemanagement") or die("failed to reach server");
if(isset($_REQUEST['fname']) || isset($_REQUEST['lname']) || isset($_REQUEST['email']) || isset($_REQUEST['mobile']) || isset($_REQUEST['cmessage'] )) {
$fname = mysqli_real_escape_string($connect, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($connect, $_REQUEST['lname']);
$email = mysqli_real_escape_string($connect, $_REQUEST['email']);
$mobile = mysqli_real_escape_string($connect, $_REQUEST['mobile']);
$cmessage = mysqli_real_escape_string($connect, $_REQUEST['cmessage']);
}
if (isset($email) && !empty($mobile)) {
    $query = "INSERT INTO customer_queries (fname, lname, email, mobile, cmessage)VALUES('$fname', '$lname', '$email', '$mobile', '$cmessage')";
    mysqli_query($connect, $query);
    echo '<script language="javascript">';
    echo 'alert("Your message has been received we will get back to you shortly. Thank you")';
    echo'</script>';
}
?>