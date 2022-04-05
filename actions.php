<?php
  use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;


   
  if(isset($_POST['send']) ){
    $Name = $_POST['Name'];
    $emails = $_POST['Email'];
    $subject = $_POST['Subject'];
    $comment = $_POST['Comment'];
   
    require 'PHPMailer.php';
    require 'SMTP.php';
    require 'Exception.php';
      $mails = new PHPMailer(true);                            
      try {
      
          //Server settings
          $mails->isSMTP();    
          $mails->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                                 
          $mails->Host = 'tls://smtp.gmail.com';     
          $mails->SMTPDebug =0;  
          $mails->IsHTML(true);               
          $mails->SMTPAuth = true;                             
          $mails->Username = 'brunchiescafe29@gmail.com';     
          $mails->Password = 'Brun_ches123';           
          $mails->SMTPOptions = array(
              'tls' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
              )
          );                         
          $mails->SMTPSecure = 'tls';                           
          $mails->Port = 587;                                   
   
          //Send Email
          $mails->setFrom('brunchiescafe29@gmail.com');
   
          //Recipients
          $mails->addAddress("brunchiescafe29@gmail.com");              
          $mails->addReplyTo('brunchiescafe29@gmail.com');
   
          //Content
          $mails->isHTML(true); 
          $mails->Subject= $Name;                                 
          $mails->Subject = "Message from : $emails " ;
          $mails->Body    = $subject;
          $mails->Body    = $comment;

   
          $mails->send();
          
   
         $_SESSION['result'] = 'Order has been sent';
       $_SESSION['status'] = 'ok';
      } catch (Exception $e) {
       $_SESSION['result'] = 'Order could not be sent. Mailer Error: '.$mails->ErrorInfo;
       $_SESSION['status'] = 'error';
      }
    }
    if(isset($_POST['send']) ){
      $Name = $_POST['Name'];
    $emails = $_POST['Email'];
    $subject = $_POST['Subject'];
    $comment = $_POST['Comment'];
   
    $mail = new PHPMailer(true); 
                               
    try {

        //Server settings
        $mail->isSMTP();                                     
        $mail->Host = 'tls://smtp.gmail.com';     
          $mail->SMTPDebug =0;  
          $mail->IsHTML(true);               
          $mail->SMTPAuth = true;                             
          $mail->Username = 'brunchiescafe29@gmail.com';     
          $mail->Password = 'Brun_ches123';           
          $mail->SMTPOptions = array(
              'tls' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
              )
          );                         
          $mail->SMTPSecure = 'tls';                           
          $mail->Port = 587;                                  
 
        //Send Email
        $mail->setFrom('brunchiescafe29@gmail.com');
 
        //Recipients
        $mail->addAddress("$emails");              
        $mail->addReplyTo('brunchiescafe29@gmail.com');
 
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = "Message from : brunchiescafe29@gmail.com " ;
        $mail->Body    = "Dear valued customer , your message would be attended to shortly";
 
        $mail->send();
        
        $_SESSION['result'] = 'Message has been sent';
        $_SESSION['status'] = 'ok';
       } catch (Exception $e) {
        $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
        $_SESSION['status'] = 'error';
       }
  
      }
?>