<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (!empty($name) && !empty($email) && !empty($message)) {
    // Process the form data or do something else
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $receiver = "alideanbaskoro@gmail.com";
        $subject = "From: $name <$email>";
        $body = "Name: $name\nEmail: $email\nMessage: $message\n\nRegards,\n$name";
        $sender = "From: $email";
        if (mail($receiver, $subject, $body, $sender)) {
            echo "The message has been sent to me";
        } else {
            echo "The message you were trying to send is experiencing error";
        }
    }
} else {
    if (empty($name) && empty($email) && empty($message)) {
        echo "You haven't fill up any of the forms, be a homie and fill that up for me";
    } else {
        $emptyFields = [];
        if (empty($name)) {
            $emptyFields[] = "name";
        }
        if (empty($email)) {
            $emptyFields[] = "email";
        }
        if (empty($message)) {
            $emptyFields[] = "message";
        }

        $emptyFieldsStr = implode(" and ", $emptyFields);
        echo "Bro... write the damn " . $emptyFieldsStr . " form man, goddamn";
    }
}



?>