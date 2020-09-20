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
<?php require "header.php" ?>

<h2 class="title-3">Our service</h2>

<div class="container d-flex flex-wrap">
    <?php
    for ($i = 1; $i <= 3; $i++):
        ?>
        <div class="card shadow-sm mb-4 ml-2">
            <div class="card-header bg-white">
                <h4 class="my-0 font-weight-normal text-center"><?php if ($i == 1) echo "Social media"; else if ($i == 2) echo "Website for developer"; else if ($i == 3) echo "Media project" ?></h4>
            </div>
            <div class="card-body">
                <img src="img/<?php if ($i == 1) echo "xing"; else if ($i == 2) echo "javascript"; else if ($i == 3) echo "dzone" ?>.png" alt="logo" class="imgCard mb-5">

                <a href="<?php if ($i == 1) echo "https://www.xing.com/"; else if ($i == 2) echo "https://www.javascript.com/"; else if ($i == 3) echo "https://dzone.com/" ?>" target="_blank" class="btn btn-lg btn-block btn-outline-primary">More</a>
            </div>
        </div>
    <?php endfor; ?>
</div>

<?php require "footer.php" ?>
</body>
</html>