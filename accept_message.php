<?php 
include "conn.php";

#since this is an assignment which will be reviewed by a lecturer i will not be providing the conn.php
#file that's on the hosting server but the url for will be provided
#https://www.rentaxgh.com/kelvin/accept_message.php
#https://www.rentaxgh.com/kelvin/conn.php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql ="INSERT into `support_mes` (`name`,`email`,`message`) Value('$name','$email','$message')";

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Hi $name, Your message $message hase been sent successfully. i will get to you soon '); window.history.back();</script>";
    }
    else{
        echo "error";
    }
}

?>