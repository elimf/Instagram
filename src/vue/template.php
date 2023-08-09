<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Inclure Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-xrRjBfSNpvqG2JrmkkTKPmv4qwnr/+80Bz/5Uqqy1dVkUt6v2xksVXusvfa0b4Q" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title><?= $title ?></title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-2.1.4.js"></script>


</head>
<style>
    <?php require_once "../src/public/css/navbar.css"; ?>
</style>
<style>
    <?php require_once "../src/public/css/home.css"; ?>
</style>
<style>
    <?php require_once "../src/public/css/insta.css"; ?>
</style>

<body style="margin-top:100px;background-color: #FFFFFF;">
    <?php require_once "partials/navbar.php";
    if (!isset($_ENV['url'])) {
        $_ENV['url'] = "http://localhost:4000";
    } ?>

    <?php if ($content == " ") {
        echo $content;
    } else {
        echo $content;
    } ?>
</body>

</html>