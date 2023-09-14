<?php

$name = "Md Habibur Rahman";
$nick_name = "Habib";
$age = 26;
$village = "Barokona";
$police_station = "Phulbari";
$district = "Dinajpur";
$division = "Rangpur";
$country = "Bangladesh";
$brief_info = "I am $name $nick_name. I am a WordPress Developer, currently working on a UK based company, full-time remote. My skills are HTML, CSS, PHP, JS, jQuery, WordPress.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <style>

        body {
            background-color: #6E7889;
            color: #E6EBEE;
        }

        section.personal-info-section {
            background-color: #393B45;
            height: auto;
            width: 500px;
            margin: 10vh auto;
            border-radius: 25px;
            padding-bottom: 1px;
            box-shadow: 2px 2px 5px #4069E2;
        }

        .page-title {
            text-align: center;
            width: 100%;
            background-color: #E6EBEE;
            border-radius: 25px 25px 0 0;
            color: #393B45;
            padding: 30px 0;
            font-weight: 800;
            margin: 0;
        }

        .page-title h1 {
            margin: 0;
            padding: 0;
        }

        .personal-info-section-inner p {
            padding: 0;
            margin: 0;
        }
        .personal-info-section-inner {
            padding: 35px 25px;
        }

        .info-single {
            display: grid;
            grid-template-columns: 1fr 3fr;
            grid-column-gap: 15px;
        }

        .title p {
            font-size: 18px;
            line-height: 25px;
            margin-bottom: 15px;
            font-weight: bold;
        }
    
    </style>
</head>
<body>
    <section class="personal-info-section">
        <div class="page-title">
        <h1 class="page-title">Personal Information</h1>
        </div>
        <div class="personal-info-section-inner">
            <div class="info-single">
                <div class="title"><p>Name</p></div>
                <div class="content">
                    <p class="name"><?php echo $name." ".$nick_name; ?></p>
                </div>
            </div>

            <div class="info-single">
                <div class="title"><p>Age</p></div>
                <div class="content">
                    <p class="name"><?php echo $age; ?> years</p>
                </div>
            </div>

            <div class="info-single">
                <div class="title"><p>Address</p></div>
                <div class="content">
                    <p class="name"><?php echo $village." ".$police_station." ".$district." ".$division; ?></p>
                </div>
            </div>

            <div class="info-single">
                <div class="title"><p>Country</p></div>
                <div class="content">
                    <p class="name"><?php echo $country; ?></p>
                </div>
            </div>

            <div class="info-single">
                <div class="title"><p>Brief Story</p></div>
                <div class="content">
                    <p class="name"><?php echo $brief_info; ?></p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>