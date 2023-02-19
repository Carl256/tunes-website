// create a contact form
// send the form to the email address lukhobacarljulius@gmail.com
// if the form is sent successfully, redirect to the thank you page
// if the form is not sent successfully, redirect to the error page

// get the form fields, remove whitespace and escape the form values
$name = strip_tags(trim($_POST["name"]));
$name = str_replace(array("
","
"),array(" "," "),$name);
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$subject = trim($_POST["subject"]);
$message = trim($_POST["message"]);

// check the data
if (empty($name) OR empty($subject) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: https://lukhobacarljulius.github.io/error.html");
    exit;
}

// set the recipient email address
$recipient = "lukhobacarljulius@gmail.com";

// set the email subject
$subject = "New contact from $name";

// build the email content
$email_content = "Name: $name

";
$email_content .= "Email: $email

";
$email_content .= "Subject: $subject

";
$email_content .= "Message:

$message

";
<?php
// create a contact form
// send the form to the email address lukhobacarljulius@gmail.com
// if the form is sent successfully, redirect to the thank you page
// if the form is not sent successfully, redirect to the error page

// get the form fields, remove whitespace and escape the form values
$name = strip_tags(trim($_POST["name"]));
$name = str_replace(array("
","
"),array(" "," "),$name);
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$subject = trim($_POST["subject"]);
$message = trim($_POST["message"]);

// // check the data
// if (empty($name) OR empty($subject) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     header("Location: https://lukhobacarljulius.github.io/error.html");
//     exit;
// }

// set the recipient email address
$recipient = "lukhobacarljulius@gmail.com";

// set the email subject
$subject = "New contact from $name";

// build the email content
$email_content = "Name: $name";
$email_content .= "Email: $email";
$email_content .= "Subject: $subject";
$email_content .= "Message:$message";

// build the email headers
$email_headers = "From: $name <$email>";

// send the email
mail($recipient, $subject, $email_content, $email_headers);

// return a thank you message email sent 
if(mail($recipient, $email_content, $email_body, $headers)) {

    echo "<p>Thank you for contacting us, $name. You will get a reply within 24 hours.</p>";

} else {

    echo '<p>We are sorry but the email did not go through.</p>';

}



?>

