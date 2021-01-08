<?php
require_once './config/connection.php';
function insert($con,$firstname,$lastname, $email,$phone,$subject,$date,$message){

    $query="INSERT INTO `apoinment` ( `name`, `podobi`, `phone`, `email`, `subject`, `date`, `description`) 
    VALUES ( '$firstname', '$lastname', '$phone', '$email', '$subject', '$date', '$message') ";
    //echo  $query;
    if(mysqli_query($con,$query)){ 
        return true;
    }
    else{
        return false;
    }

}
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $firstname = strip_tags(trim($_POST["user-first-name"]));
                $firstname = str_replace(array("\r","\n"),array(" "," "),$firstname);
        $lastname = strip_tags(trim($_POST["user-last-name"]));
                $lastname = str_replace(array("\r","\n"),array(" "," "),$lastname);
        $email = filter_var(trim($_POST["user-email"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["user-phone"]);
        $subject = trim($_POST["user-subject"]);
        $date = trim($_POST["user-select-date"]);
        $message = trim($_POST["user-message"]);

        // Check that data was sent to the mailer.
        if ( empty($firstname) OR empty($lastname) OR empty($phone) OR empty($subject) OR empty($date) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "info@bdlac.com";

        // Set the email subject.
        $subject = "New contact from $firstname $lastname";

        // Build the email content.
        $email_content = "Name: $firstname $lastname\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Phone: $phone\n\n";
        $email_content .= "Subject: $subject\n\n";
        $email_content .= "Date: $date\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $firstname $lastname <$email>";

        // Send the email.
       // if (mail($recipient, $subject, $email_content, $email_headers)) {
       if(insert($con,$firstname,$lastname, $email,$phone,$subject,$date,$message)){
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
