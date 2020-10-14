<?php

    $name = $_POST['email'];
    $cust_email = $_POST['email']
    $cust_phone = $_POST['phone']
    $message = $_POST['message'];

    $email_from = '9killz9@gmail.com';

    $email_subject = "Customer Message";

    $email_body = "Customer Name: $name.\n".
                    "Customer Email: $cust_email.\n".
                        "Phone Number: $cust_phone.\n".
                            "Message: $message.\n";

    
    $to = "devrajbhati2001@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $cust_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: home.html");