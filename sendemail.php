<?php

// Define some constants
define( "RECIPIENT_NAME", "John Kent" );
define( "RECIPIENT_EMAIL", "info@dhfoundation.com.ng" );


// Read the form values
$success = false;
$senderName = isset( $_POST['username'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['username'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$senderPhone = isset( $_POST['phone'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone'] ) : "";
$location = isset( $_POST['location'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['location'] ) : "";


$location = isset( $_POST['location'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['location'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Location:|Content-Type:)/", "", $_POST['message'] ) : "";

// If all values exist, send the email
if ( $senderName && $senderEmail && $senderPhone && $location && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $senderName . " <" . $senderEmail . ">";
  $msgBody = " Phone: " . $senderPhone ." Location: " . $location ." Message: " . $message . "";
  $success = mail( $recipient, $headers, $msgBody );

  //Set Location After Successsfull Submission
  header('Location: contact.html?message=success');
}

else{
	//Set Location After Unsuccesssfull Submission
  	header('Location: index.html?message=unsuccessfull');	
}

?>