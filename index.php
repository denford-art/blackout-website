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
<section class="mainSection">
    <?php require "header.php"; ?>


    <div class="container mt-5">

        <div class="mainTitle">
            <h1 class="title-1">Professional website development</h1>
            <h3 class="title-2">
                We are developing on <a href="https://github.com/laravel/laravel" class="title-link" target="_blank">Laravel</a>.
                We also use <a href="https://www.docker.com/"
                               class="title-link"
                               target="_blank">Docker</a>
                and <a href="https://www.postgresql.org/" class="title-link" target="_blank">PostgreSQL</a>. We create
                services and startups,
                complex online stores, and large corporate websites. We have been working since 2019
            </h3>

            <div class="icon">
                <img src="img/icon-laravel.svg" alt="laravel">
                <img src="img/icon-docker.svg" alt="docker">
                <img src="img/icon-postgres.svg" alt="postgresSQL">
            </div>

        </div>
</section>

<div>
    <h2 class="title-3">Our service</h2>
</div>

<div class="container d-flex flex-wrap">
    <?php
    for ($i = 1; $i <= 3; $i++): ?>
        <div class="card shadow-sm mb-4 ml-2">
            <div class="card-header bg-white">
                <h4 class="my-0 font-weight-normal text-center"><?php if ($i == 1) echo "Websites for business"; else if ($i == 2) echo "Business automation"; else if ($i == 3) echo "Services and startups"; ?></h4>
            </div>
            <div class="card-body">
                <img src="img/<?php echo $i; ?>.png" alt="logo" class="imgCard">
                <ul class="list-unstyled mt-3 mb-4 text-center">
                    <li><?php if ($i == 1) echo "Corporate site"; else if ($i == 2) echo "Personal account"; else if ($i == 3) echo "Online learning systems"; ?></li>
                    <li><?php if ($i == 1) echo "Online store"; else if ($i == 2) echo "Chat bots"; else if ($i == 3) echo "Online services"; ?></li>
                    <li><?php if ($i == 1) echo "Website redesign"; else if ($i == 2) echo "Tender sites"; else if ($i == 3) echo "Information portal"; ?></li>
                </ul>
                <a href="portfolio.php" class="btn btn-lg btn-block btn-outline-primary">More</a>
            </div>
        </div>
    <?php endfor; ?>
</div>

</div>

<?php require "footer.php"; ?>

</body>
</html>