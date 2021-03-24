<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>SPACE TRAVEL AGENCY - Greetings</title>
</head>

<body id="home-view">
    <div class="postcard">
        <div class="text-postcard">
            <?php
            echo '<p>Dear ' . $_GET['firstname'] . ',</p>
            <p>Thank you very much for your request about your next destination : ' . $_GET['destination'] . '.</p>
            <p>We will get back to you as soon as possible on your email address : ' . $_GET['user_email'] . '</p>
            <p>Best regards,</p>
            <p>Space Travel Agency.</p>'
            ?>
        </div>
        <img src="assets/postcard.png" alt="postcard image" id="imgpostcard">
        <div class="deco-postcard">
            <video autoplay loop muted id="bench-video">
                <source src="assets/travel.mp4" type="video/mp4" />
            </video>
        </div>
        <img src="assets/stamp.png" alt="stamp logo" id="stamp">
    </div>
</body>

</html>