<?php
$username = "";
$_SESSION['success'] = "";
$connect = mysqli_connect("localhost", "id16489302_garage_db", "UEpX4PJ1W>>4Tj/O", "id16489302_garagemanagement") or die("failed to reach server");
if(isset($_REQUEST['usr']) || isset($_REQUEST['pass'])) {
$email = mysqli_real_escape_string($connect, $_REQUEST['usr']);
$password = mysqli_real_escape_string($connect, $_REQUEST['pass']);
if (isset($email) && !empty($password)) {
    $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        echo '<script type = "text/javascript">
        window.location = "main_menu.php";
       </script>';
    } else {
          echo '<script language="javascript">';
        echo 'alert("Your Login Name or Password is invalid")';
        echo '</script>';
    }
} else {
    echo "Please fill all the required fields";
}
}
?>