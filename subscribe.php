<?php
$to = "info@dhfoundation.com.ng";
$subject = "Subscribe form";
$txt = "Hello, I am subscrbing to dhfoundation!";
$headers = "From: info@dhfoundation.com.ng" . "\r\n" .
"CC: segun@dhfoundation.com.ng.com";

mail($to,$subject,$txt,$headers);
?>
