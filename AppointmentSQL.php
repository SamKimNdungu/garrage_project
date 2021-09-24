<?php

$connect = mysqli_connect("localhost", "id16489302_garage_db", "UEpX4PJ1W>>4Tj/O", "id16489302_garagemanagement") or die("failed to reach server");
if(isset($_REQUEST['fname']) || isset($_REQUEST['tel_no']) || isset($_REQUEST['email'])||isset($_REQUEST['plate']) || isset($_REQUEST['brand']) | isset($_REQUEST['date'])) {
$fname = mysqli_real_escape_string ($connect, $_REQUEST['fname']);
$tel_no = mysqli_real_escape_string($connect, $_REQUEST['tel_no']);
$email = mysqli_real_escape_string($connect, $_REQUEST['email']);
$number_plate = mysqli_real_escape_string($connect, $_REQUEST['plate']);
$car_brand = mysqli_real_escape_string($connect, $_REQUEST['brand']);
$cproblem = mysqli_real_escape_string($connect, $_REQUEST['cproblem']);
$date = mysqli_real_escape_string($connect, $_REQUEST['date']);
if (isset($email) && !empty($tel_no)) {
    $query = "INSERT INTO appointments (NAME, Phone_NUMBER, Number_plate, car_brand, email, app_day, cproblem)VALUES('$fname', '$tel_no', '$number_plate', '$car_brand', '$email', '$date', '$cproblem')";
    mysqli_query($connect, $query);
    echo '<script language="javascript">';
    echo 'alert("Appointment Created Successfully")';
    echo'</script>';
}
}
?>