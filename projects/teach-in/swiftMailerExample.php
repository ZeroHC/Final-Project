<?php

//Load composer's autoloader
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('hanchen.greenriverdev.com', 25))
->setUsername('test')
->setPassword('XxsFTE+YbJzC')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
->setFrom(['dontreply@hanchen.com' => 'SwiftMailer Test'])
->setTo(['hliu10@mail.greenriver.edu' => 'zero']);

// Create the attachment
// * Note that you can technically leave the content-type parameter out
$attachment = Swift_Attachment::fromPath('bg.jpg');

// Attach it to the message
$message->attach($attachment);

/*// The two statements above could be written in one line instead
$message->attach(Swift_Attachment::fromPath('/path/to/image.jpg'));

// You can attach files from a URL if allow_url_fopen is on in php.ini
$message->attach(Swift_Attachment::fromPath('http://site.tld/logo.png'));*/

// Set the body
$message->setBody(
    '<html>' .
    ' <body>' .
    '  Here is an image <img src="' . // Embed the file
    $message->embed(Swift_Image::fromPath('bg.jpg')) .
    '" alt="Image" />' .
    '  Rest of message' .
    ' </body>' .
    '</html>',
    'text/html' // Mark the content-type as HTML
);

// Send the message
$result = $mailer->send($message);