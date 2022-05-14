<?php
header('Content-Type: text/html; charset=utf-8');
$mysqli = mysqli_connect("localhost", "zykcyspz_0207", "12345", "zykcyspz_0207");

$result_a = mysqli_query($mysqli, "SELECT * FROM `parking` WHERE `name` = '135'");
$result = mysqli_fetch_assoc($result_a);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">
    <link rel="stylesheet" href="/styles_2.css">
    <title>Место 135</title>
    <style>
        
    </style>
</head>

<body>
    <div class="container-xs">
        <div class="col-xs-6 ml-3">
            <div class="map">
                <svg viewBox="0 0 750 886" id="1">
                    <a href="#">
                        <path class="park_left" d="m 513.53758,641.71999 0.18897,-25.41608 -12.67173,-0.0699 -3e-5,25.48596 z" title="MB/135" id='m135'>
                    </a>

                </svg>
                <img src="/img/first_floor_empty_25_left.jpg" alt="схема паркинга слева" class="img">
            </div>
        </div>
        <p class="list_place mx-5">
            <span>Место: <span><?php echo $result['name'] ?></span> </span></br>
            <span>Площадь: <span><?php echo $result['area'] ?></span> м<sup>2</span></br>
            <span>Стоимость аренды: <span><?php echo $result['rentPrice'] ?></span> руб.</span>
        </p>

        <a href="/index.html" class="btn  btn-lg active" role="button" aria-pressed="true">На главную страницу</a>

        <div class="col-xs-6 pic">

            <p class="list_place mx-5"> Фотографии места:</p>

            <img src="/img/1_135.jpg" alt="1" class="img-fluid" >
            <img src="/img/2_135.jpg" alt="2" class="img-fluid" >
            <img src="/img/3_135.jpg" alt="3" class="img-fluid">
            

        </div>

    </div>



</body>

</html>