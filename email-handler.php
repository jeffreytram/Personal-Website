<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $company = $_POST['company'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_subject = "Contact Message from $firstname";

    $email_body = "Name: $firstname $lastname\n".
                    "Company: $company\n".
                        "Email: $visitor_email.\n".
                            "Message: $message.\n";
    $to ="jeffrey_tram@yahoo.com";

    $headers = "From: $visitor_email \r\n";

    $headers .= "Reply-To: $visitor_email\r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");


?>