<?php 
$server="localhost";
$user="root";
$password="";
$db="booking";
try {

    // $connection = mysqli_connect($server, $user, $password, $db);
    $conn = mysqli_connect("sql300.infinityfree.com", "if0_41751453", "waB1K4B8iP9", "if0_41751453_booking");
}
catch (\Exception $e){
    echo "could not connect to db";
}
?>