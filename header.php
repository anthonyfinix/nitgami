<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body <?php body_class() ?>>
    <header id="main-header" class="sticky top-0 bg-white z-50">
        <div class="container py-4 flex items-center justify-around">
            <img class="mr-4" src="https://www.99logos.in/img/logo.png" width="137px">
            <nav class="flex items-center gap-6 mr-auto">
                <p>Our Work</p>
                <p>Contact Us</p>
            </nav>
            <p class="flex items-center"><span class="material-icons">call</span> +91 8888 6446 12</p>
        </div>
    </header>