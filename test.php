<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$ph_number = $_POST['phone-number'];
$from = "support@flutter.startupkt.com";
$to = "start@startupkt.com";
$subject = "New Customer Registration";
$message = "Customer Details\n Name: $name \n Email: $visitor_email \n Phone Number:$ph_number ";
$headers = "From:" . $from;

if(mail($to,$subject,$message, $headers)) {
    echo '<div>
                <h2 style="text-align: center;">Your registration request has been sent successfully,</h2>
                <p style="text-align: center;">you will be contacted soon</p>
            </div>';
} else {
    echo '            <div>
                <h2 style="text-align: center;">Registration request could not be sent...</h2>
            </div>';
}
?>