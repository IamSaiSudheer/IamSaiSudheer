<?php

//Configure the data to be sent
$to = 'sai.sudheer9@gmail.com';
$subject = 'New Message : iamsaisudheer.com';
$fields = array(
                'name' => 'Sender Name ',
                'email' => 'Contact Mail ',
                'message' => 'Message '
                );

//Success and Failure Message Content
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';
$errorMessage = 'There was an error while submitting the form. Please try again later';

//To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//Additional headers
$headers .= "From: " . strip_tags('email') . "\r\n";
$headers .= "Reply-To: ". strip_tags('email') . "\r\n";
$headers .= "CC: sai.sudheer9@yahoo.in\r\n";

try
{
    $message = "Hey Sai !\n You have new message from your Personal Website <a href='http://www.iamsaisudheer.tk' target='_blank'>IamSaiSudheer.com</a>\n\n\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $message .= "$fields[$key] : $value\n\n";
        }
    }

    // Initiate the Mail Functionality
    mail($to, $subject, $message, $headers);
    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    
    header('Content-Type: application/json');
    
    echo $encoded;
}
else {
    echo $responseArray['message'];
}
?>