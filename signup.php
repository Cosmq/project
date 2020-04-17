<?php

include_once 'include/db.php';

$user_first = mysqli_real_escape_string($conn, $_POST['user_first']) ;
$user_last = mysqli_real_escape_string($conn, $_POST['user_last']);
$user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
$user_uname = mysqli_real_escape_string($conn, $_POST['user_uname']);
$user_pwd = mysqli_real_escape_string($conn, $_POST['user_pwd']);
$user_address = mysqli_real_escape_string($conn, $_POST['user_address']);
$user_town = mysqli_real_escape_string($conn, $_POST['user_town']);
$user_county = mysqli_real_escape_string($conn, $_POST['user_county']);
$user_postcode = mysqli_real_escape_string($conn, $_POST['user_postcode']);
$user_country = mysqli_real_escape_string($conn, $_POST['user_country']);
$user_contact_num = mysqli_real_escape_string($conn, $_POST['user_contact_num']);
$user_DOB = mysqli_real_escape_string($conn, $_POST['user_DOB']);
$user_gender = mysqli_real_escape_string($conn, $_POST['user_gender']);


$sql = "INSERT INTO users (user_first, user_last, user_email, user_uname, user_pwd,user_address, user_town, user_county, user_postcode, user_country, user_contact_num, user_DOB, user_gender) VALUES ('$user_first','$user_last','$user_email','$user_uname','$user_pwd','$user_address','$user_town','$user_county','$user_postcode','$user_country','$user_contact_num','$user_DOB','$user_gender');";


$result = mysqli_query($conn, $sql);
   
if($result){
    echo '<script type="text/javascript"> alert("Successfully Registered")</script>';
}   
else{
    echo '<script type="text/javascript"> alert("Failed to Register")</script>';
}


header("Location: index.php?signup=success");