<?php // single quotes = literal string... double = interperates php (like backticks in js)
    if(empty($_POST)){
        echo 'Bruh.';
        exit;
    }

    $name = '';
    $email = '';
    $phone = '';
    $subject = '';
    $message = '';
    $recipient = 'bruh@gmail.com';

    //validation
    if(isset($_POST['name'])){
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['email'])){
        $email = str_replace(array("\r","\n","%0a", "%0d"),'',$_POST['email']);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    // Syntax error
    if(isset($_POST['subject'])){
        $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING)
    }

    if(isset($_POST['message'])){
        $message = $_POST['message'];
    }

    $headers = [ //email header /from //to
        'From' => 'noreply@test.ca', // replace "test" with your domain
        'Reply-To' =>$name.'<'.$email.'>'
    ];

    if(mail($recipient,$subject,$message,$headers)){
        echo '<p>Thank you for the message,'.$name.'. We will get back to you as soon as possible<\p>'; //use "." to join vars to ''.
    }else{
        echo '<p> Sorry, but the email did not go through.';
    }
?>