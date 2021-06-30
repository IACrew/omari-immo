<?php
    $receipt = "Badi3.info@gmail.com";
   $name =  $_POST['name'];
   $Email = $_POST['email'];
   $Reason = $_POST['reason'];
   $Num = $_POST['phone'];
   $body = $_POST['message'];

   $bodyM = " Nom : $name \n Email : $Email \n Numéro : $Num \n Raison : $Reason \n Message : $body";
   mail($receipt, "Contact", $bodyM);
   header("Location: Contact.php");
   //echo $bodyM ;

?>