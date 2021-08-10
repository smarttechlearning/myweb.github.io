<?php 
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'vendor2/autoload.php';
	$mail = new PHPMailer(true);

if(isset($_POST['submit'])){
	$toMail = 'mansisoni982@gmail.com';
	$subject = 'My Website';
	$body = $_POST['body'];

	// echo $toMail;

	try {
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'sonimansi169@gmail.com';                 
    $mail->Password   = 'sonimansi@sonimansi';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
  
    $mail->setFrom('sonimansi169@gmail.com', 'User');           
    $mail->addAddress($toMail);
    // $mail->addAddress('aastikgupta1542@gmail.com', 'Aastik');
       
    $mail->isHTML(true);                                  
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    if($mail->send())
    {echo "Mail has been sent successfully!";
      }
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

}
else{
	echo 'Somethig went wrong with form.';
}
	

?>