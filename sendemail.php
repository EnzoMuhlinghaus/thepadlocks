<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Merci beaucoup de nous contacter. Nous tâcherons de vous recontacter le plus vite possible !'
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = "contact";
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'enzomuhlinghaus@gmail.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;
