<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $mailTo = "ennisogidan@hotmail.co.uk";
    $headers = "From: ".mailFrom;
    $txt = $name. "has sent you a new email from your website .\n\n".$message; 
   
    mail($mailTo, $subject, $txt, $headers;);
    // header("Location: index.php?mailsend");
}
