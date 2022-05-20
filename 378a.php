<?php
header('Content-Type: text/html; charset=utf-8');
$mysqli = mysqli_connect("localhost", "zykcyspz_0207", "12345", "zykcyspz_0207");

$result_a = mysqli_query($mysqli, "SELECT * FROM `parking` WHERE `name` = '378a'");
$result = mysqli_fetch_assoc($result_a);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles.css">
    <link rel="stylesheet" href="/styles_2.css">
    <link rel="shortcut icon" href="./img/parking.png"/>
    <title>Место 378a</title>
    <style>
        
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="col-xs-6 ml-3">
            <div class="map">
                <svg viewBox="0 0 750 886" id="1">
                    <a href="#">
                        <path class="car_place" d="m 233.28332,614.91969 v -18.47017 l -38.58913,0.3552 -8e-5,18.11497 z" title="MM/378a" id='m378a'>
                    </a>

                </svg>
                <img src="/img/first_floor_empty_25_left.jpg" alt="схема паркинга слева" class="img">
            </div>
        </div>
        <p class="list_place_solo">
            <span>Место: <span><?php echo $result['name'] ?>.</span> </span>
            <span>Площадь: <span><?php echo $result['area'] ?></span> м<sup>2</span>
            <span>Стоимость аренды: <span><?php echo $result['rentPrice'] ?></span> руб.</span>
        </p>

        <a href="/index.html" class="btn btn-lg active" role="button" aria-pressed="true">На главную страницу</a>

        <div class="col">

            <p class="list_place_solo foto"> Фотографии места:</p>

            <img src="/img/1_141_142_378a.jpg" alt="1" class="img-fluid" >
            <img src="/img/2_141_142_378a.jpg" alt="2" class="img-fluid" >
            <img src="/img/3_141_142_378a.jpg" alt="3" class="img-fluid">
            <img src="/img/4_141_142_378a.jpg" alt="4" class="img-fluid" >

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>