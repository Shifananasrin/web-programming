<?php
	$to="snehakaliyath@gmail.com";
	$subject="Test Email";
	$message="hello,this is a test email from PHP!";
	$header="from:shifananasrin941@gmail.com";
	if(mail($to,$subject,$message,$header))
	{
		echo"email sent successfully";
	}
	else
	{
		echo"failed to send email";
	}
?>
