<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    
    $mailTo = "wmike@live.co.uk";
    
    $headers = "From: ".$mailFrom;
    $text = "You have got an email from ".$name.".\n\n".$message;
    
    
    mail($mailTo, $subject, $text, $headers);
    header("Location: index.php?mailsent");
    

}