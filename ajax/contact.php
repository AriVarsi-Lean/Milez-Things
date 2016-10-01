<?php
if (isset($_POST['fullname'],$_POST['phonenumber'],$_POST['email'],$_POST['message'])){

        $name = $_POST['fullname'];
$phone = $_POST['phonenumber'];
$email_address = $_POST['email'];
$message = $_POST['message'];

/*
    print_r($_POST);
    echo 'Your name  is '.$_POST['name'];*/
	
// create email body and send it	
$to = 'info@milezauto.co.za'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "From Proffessional Accreds site:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@milezauto.co.za\n";
$headers .= "Reply-To: info@milezauto.co.za";	
mail($to,$email_subject,$email_body,$headers);

}
?>