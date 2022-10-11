<?php
    include('Mail.php');

    $recipients = 'joe@example.com';

    $headers['From']    = 'richard@example.com';
    $headers['To']      = 'joe@example.com';
    $headers['Subject'] = 'Test message';

    $body = 'Test message';

    $smtpinfo["host"] = "smtp.server.com";
    $smtpinfo["port"] = "25";
    $smtpinfo["auth"] = true;
    $smtpinfo["username"] = "smtp_user";
    $smtpinfo["password"] = "smtp_password";


    // Create the mail object using the Mail::factory method
    $mail_object =& Mail::factory("smtp", $smtpinfo); 

    $mail_object->send($recipients, $headers, $body);
?> 