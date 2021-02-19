<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width", initial-scale="1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/contactus.css">
	<title>contact us</title>
</head>
<body>
		<!--start nav bar-->
		<nav class="navbar navbar-expand-md navbar-dark " style="background-color: #6001ff">
   
   <div class="dual-collapse1">
	  <b> <a class="navbar-brand mx-auto" href="index.html">LIBRARY</a></b>
	   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
		   <span class="navbar-toggler-icon "></span>
	   </button>
   </div>
   <div class="navbar-collapse collapse w-100 order-3 dual-collapse2 navpos">
	   <ul class="navbar-nav ml-auto itme-end">
		   <li class="nav-item">
			   <b><a class="nav-link" href="./index.php">Home</a></b>
		   </li>
		   <li class="nav-item">
			  <b> <a class="nav-link" href="./ourbooks.php">Books</a></b>
		   </li>
		   <li>
			   <b> <a class="nav-link" href="./contactus.php">contact us</a></b>
		   </li>
	   </ul>
   </div>
</nav>
<!--end nav bar-->

<!-- middlt -->

<?php
require './function/db.php';
$page = 'contactus';
require './PHPMailerAutoload.php';
require './cridential.php';

if (isset($_POST['submit'])){



session_start();
$_SESSION["emailsender"] = null;

$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = mm_mail;                 // SMTP username
$mail->Password = pp_pass;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($_POST['mail'], 'Mailer');
$mail->addAddress('test@gmail.com', 'Joe User');     // Add a recipient
              // Name is optional
$mail->addReplyTo(mm_mail, 'Information');

    $mail->isHTML(true);                                  // Set email format to HTML
    // $mail->Subject = $_POST['mail'];
    $mail->Body    = $_POST['msg'];
    $mail->AltBody = $_POST['name'];

    if($mail->send()==true){ 

echo '
  <div class="container ">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> your message has been asent successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  </div>
    ';




    }else{echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";}



}



?> 














<form action="" method="POST" style=" width: 300px;
  box-sizing : border-box; margin: auto;margin-top: 100px;">
  <label style="  display:block;
  margin-bottom: 6px;">
    name
  </label>
  <input type="text" name="name" style="  display:block;
  margin-bottom: 6px;padding: 5px;
  width:100%;
  outline:none;
  border: none;
  background-color:#f4F4F4;
  resize:none;" >
  <label style="  display:block;
  margin-bottom: 6px;">
    Email
  </label>
  <input type="text" name="mail" style="  display:block;
  margin-bottom: 6px;padding: 5px;
  width:100%;
  outline:none;
  border: none;
  background-color:#f4F4F4;
  resize:none;" >
  <label style="  display:block;
  margin-bottom: 6px;padding: 5px;
;">
    Message
  </label>
  <textarea style=" display:block;
  margin-bottom: 6px;padding: 5px;
  width:100%;
  outline:none;
  border: none;
  background-color:#f4F4F4;
  resize:none; height:40px" name="msg"></textarea>
  <input type="submit" name="submit" style="  display:inline-block;
  float: right ;
  border: none;
  outline : none;
  color:white;
  background-color: #6001FF;
  padding:5px 10px;
  ">
  
</form>


<!-- footer -->
	<footer class="footer" style="text-align: center; color:white; background-color: #6001ff    position: fixed;left: 0; bottom: 0; width: 100%;">
		library @copyrights 2020/2021
	</footer>
<!--scripts-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
</body>
</html>