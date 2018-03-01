<?php

require_once '../vendor/autoload.php';

// Using Medoo namespace
use Medoo\Medoo;

$file = '../storage/database.db';
if (is_writable('../storage/database.local.db')) {
    $file = '../storage/database.local.db';
}

$database = new Medoo([
    'database_type' => 'sqlite',
    'database_file' => $file
]);

$comment = new Kaizen\Comment($database);
try {
    $comment->setEmail('denis@kaizen-design.ru')
            ->setName('Denis Bondarchuk')
            ->setComment('Hooray! Saving comments work!')
            ->save();
} catch (Exception $e) {

}

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Guestbook</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <form method="post">
            <label>Name: <input type="text" name="name" placeholder="Your name"></label>
            <label>Email: <input type="email" name="email" placeholder="your@email.com"></label>
            <label>Comment: <textarea name="comment" cols="30" rows="10"></textarea></label>
            <input type="submit" value="Save">
        </form>

        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
