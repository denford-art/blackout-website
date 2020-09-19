<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PHP Website</title>
</head>
<body>
<?php require "blocks/header.php" ?>
<div class="container mt-5">
    <h3 class="text-center">Contacts</h3>
    <form action="check.php" method="post">

        <input type="text" name="name" placeholder="first and last name*" class="form-control"><br>
        <input type="email" name="email" placeholder="email*" class="form-control"><br>
        <input type="tel" name="number" placeholder="phone number*" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="message*"></textarea><br>

        <button type="submit" name="send" class="btn btn-success mb-5">Send</button>


    </form>
</div
<?php require "blocks/footer.php" ?>
</body>
</html>