<?php
    $receipt = "Badi3.info@gmail.com";
   $name =  $_POST['name'];
   $Email = $_POST['email'];
   $Reason = $_POST['reason'];
   $Num = $_POST['phone'];
   $body = $_POST['message'];

   $bodyM = " Name : $name \n Email : $Email \n Number : $Num \n Reason : $Reason \n Message : $body";
   mail($receipt, "Contact", $bodyM);
   header("Location: Contact.php");
   //echo $bodyM ;

?>