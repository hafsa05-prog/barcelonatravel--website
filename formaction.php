<?php
include "./database.php";

$name = $_POST['name'];
$people = $_POST['No_of_people'];
$phone_number = $_POST['phone_no'];
$date= $_POST['date'];

$sql="INSERT INTO `travel`(`Name`, `Numberofpeople`, `Phonenumber`, `Date`) VALUES ('$name ','$people','$phone_number','$date')";
$query = mysqli_query($connection , $sql);

 if ($query) {
    echo "record is inserted";
 } 
 
?>