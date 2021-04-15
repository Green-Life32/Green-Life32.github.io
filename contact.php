<?php
  if(!empty($_POST["send"])) {
    $name = $_POST["Nom"];
    $email = $_POST["Email"];
    $subject = $_POST["Objet"];
    $message = $_POST["Message"];
    $toEmail = "contactsgreenlife@gmail.com";
    $mailHeaders = "From: " . $name . "<". $email .">\r\n";
    if(mail($toEmail, $subject, $message, $mailHeaders)) {
      $mail_msg = "Vos informations de contact ont été reçues avec succés.";
      $type_mail_msg = "success";
    }else{
      $mail_msg = "Erreur lors de l'envoi de l'e-mail.";
      $type_mail_msg = "error";
    }
  }
?>