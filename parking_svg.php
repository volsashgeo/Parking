<?php
header('Content-Type: text/html; charset=utf-8');
$mysqli = mysqli_connect("localhost", "zykcyspz_0207", "12345", "zykcyspz_0207");
$result_name_up = mysqli_query($mysqli, "SELECT * FROM `parking` ORDER BY `name`"); // выборка всех мест в паркинге по возрастанию номера
$result_name_down = mysqli_query($mysqli, "SELECT * FROM `parking` ORDER BY `name`DESC"); // выборка всех мест в паркинге по убыванию номера 

// $result_mm = mysqli_query($mysqli, "SELECT * FROM `parking` WHERE `implement`= "MM""); // выборка только машиномест

$result_area_up = mysqli_query($mysqli, "SELECT * FROM `parking` ORDER BY `area`"); // выборка всех мест в паркинге по возрастанию площадей
$result_area_down = mysqli_query($mysqli, "SELECT * FROM `parking` ORDER BY `area`DESC"); //выборка всех мест в паркинге по убыванию площадей

$result_rentPrice_up = mysqli_query($mysqli, "SELECT * FROM `parking` ORDER BY `rentPrice`"); // выборка всех мест в паркинге по возрастанию площадей
$result_rentPrice_down = mysqli_query($mysqli, "SELECT * FROM `parking` ORDER BY `rentPrice`DESC"); // выборка всех мест в паркинге по убыванию площадей

?>
<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/parking.png" />
    <link rel="stylesheet" href="/styles.css">
    <title></i>>Паркинг</title>
    <style>
        @media (max-width: 764px) {


            .parkListAll {
                max-height: 20rem;
            }
        }
    </style>
</head>

<body>
    <h5 style="text-align: left ; margin-left: 3rem; text-align: center;">Схема парковки на 1 этаже</h5>
    <div class="container-fluid">
        <div class="row">


            <!--начало работы с  картинкой  -->
            <div class="col d-flex ">
                <div class="map">
                    <svg viewBox="0 0 750 886" id="svg_1">
                        <a href="/378a.php" id='mm378a'>
                            <path class="car_place parks" d="m 233.28332,614.91969 v -18.47017 l -38.58913,0.3552 -8e-5,18.11497 z" title="MM/378a" id='378a'>
                        </a>
                        <a href="/123.php">
                            <path class="park_left parks" d="m 389.68849,698.36009 0.21224,-34.5846 -14.23219,-0.0951 -4e-5,34.67968 z" title="MB/123" id='123'>
                        </a>
                        <a href="/126.php">
                            <path class="park_left parks" d="m 334.35629,767.37427 v -12.53668 l -20.76695,0.24109 -4e-5,12.29559 z" title="MB/126" id='126'>
                        </a>
                        <a href="/127.php">
                            <path class="park_left parks" d="m 355.1232,767.37427 v -12.7825 l -20.76691,0.24582 -4e-5,12.53668 z" title="MB/127" id='127'>
                        </a>
                        <a href="/128.php">
                            <path class="park_left parks" d="m 375.89007,767.36954 v -13.02832 l -20.76687,0.25055 -4e-5,12.77777 z" title="MB/128" id='128'>
                        </a>
                        <a href="/129.php">
                            <path class="park_left parks" d="m 395.09308,767.38198 v -13.29647 l -19.20301,0.25571 -4e-5,13.04076 z" title="MB/129" id='129'>
                        </a>
                        <a href="/130.php">
                            <path class="park_left parks" d="m 412.75562,767.39129 v -13.56668 l -17.66254,0.2609 -4e-5,13.30578 z" title="MB/130" id='130'>
                        </a>
                        <a href="/131.php">
                            <path class="park_left parks" d="m 431.41797,767.39129 v -13.80404 l -18.6623,0.26547 -5e-5,13.53857 z" title="MB/131" id='131'>
                        </a>
                        <a href="/141.php">
                            <path class="park_left parks" d="m 187.82676,592.10163 v -10.30944 l -17.99528,0.19826 -3e-5,10.11118 z" title="MB/141" id='141'>
                        </a>
                        <a href="/142.php">
                            <path class="park_left parks" d="m 207.77914,592.07596 v -10.25813 l -19.92684,0.19728 -3e-5,10.06085 z" title="MB/142" id='142'>
                        </a>
                        <a href="/153.php">
                            <path class="park_left parks" d="m 182.15956,712.65164 0.21992,-22.73213 -14.74675,-0.0625 -3e-5,22.79464 z" title="MB/153" id='153'>
                        </a>
                        <a href="/154.php">
                            <path class="park_left parks" d="m 196.90631,712.71414 0.21992,-22.73213 -14.74675,-0.0625 -3e-5,22.79464 z" title="MB/154" id='154'>
                        </a>
                        <a href="/155.php">
                            <path class="park_left parks" d="m 211.21609,712.8255 0.21289,-22.75386 -14.27586,-0.0625 -3e-5,22.81643 z" title="MB/155" id='155'>
                        </a>
                        <a href="/160.php">
                            <path class="park_left parks" d="m 394.63294,286.48165 14.86042,-0.2886 0.14713,14.43016 -14.99659,0.28869 z" title="MB/160" id="160">
                        </a>
                        <a href="/161.php">
                            <path class="park_left parks" d="m 412.39339,286.48338 14.4297,-0.14578 -0.14575,14.14101 -14.28123,0 z" title="MB/161" id='161'>
                        </a>
                        <a href="/162.php">
                            <path class="park_left parks" d="m 452.91533,353.93962 0.18999,-28.59986 -12.73948,-0.0786 -2e-5,28.67851 z" title="MB/162" id='162'>
                        </a>
                        <a href="/163.php">
                            <path class="park_left parks" d="m 452.61633,383.6761 0.18547,-29.65493 -12.43598,-0.0815 -2e-5,29.73648 z" title="MB/163" id='163'>
                        </a>
                        <a href="/135.php">
                            <path class="park_left parks" d="m 513.53758,641.71999 0.18897,-25.41608 -12.67173,-0.0699 -3e-5,25.48596 z" title="MB/135" id='135'>
                        </a>
                        <a href="/136.php">
                            <path class="park_left parks" d="m 692.22864,753.35022 0.14019,-25.02113 -9.40077,-0.0688 -2e-5,25.08993 z" title="MB/136" id='136'>
                        </a>
                    </svg>
                    <img src="/img/first_floor_empty_25_left_1.jpg" alt="схема паркинга слева">
                </div>
                <div class="map">
                    <svg viewBox="0 0 750 886" id="svg_2">
                        <a href="/112.php">
                            <path class="park_right parks" d="m 66.6642,220.51767 25.186056,-0.19826 0.467728,12.17317 -25.455525,-0.0232 z" title="MB/112" id='112'>
                        </a>
                        <a href="/114.php">
                            <path class="park_right parks" d="m 140.06193,221.21122 19.05997,-1e-5 v 11.84029 l -19.05997,-1e-5 z" title="MB/114" id='114'>
                        </a>
                        <a href="/115.php">
                            <path class="park_right parks" d="m 159.69948,221.06683 19.05997,-1e-5 v 11.84029 l -19.05997,-10e-6 z" title="MB/115" id='115'>
                        </a>
                        <a href="/119.php">
                            <path class="park_right parks" d="m 120.66662,363.93204 19.05997,-10e-6 v 11.84029 l -19.05997,-10e-6 z" title="MB/119" id='119'>
                        </a>
                        <a href="/120.php">
                            <path class="park_right parks" d="m 120.4456,384.10872 19.05997,-1e-5 V 395.949 l -19.05997,-1e-5 z" title="MB/120" id='120'>
                        </a>
                        <a href="/139.php">
                            <path class="park_right parks" d="m 18.239775,222.04943 h 21.015392 l 0.198259,10.90421 -21.213651,0.19826 z" title="MB/139" id='139'>
                        </a>
                        <a href="/156.php">
                            <path class="park_right parks" d="m 49.55567,221.64807 15.067639,0.19826 0.396517,25.17882 -15.265898,0 z" title="MB/156" id='156'>
                        </a>
                        <a href="/165.php">
                            <path class="park_right parks" d="m 242.15709,225.11863 19.76438,-1e-5 v 11.82273 l -19.76438,-1e-5 z" title="MB/165" id='165'>
                        </a>
                        <a href="/170.php">
                            <path class="park_right parks" d="m 50.178099,247.24375 h 14.627915 l 0.384945,24.3374 -15.01286,0.36605 z" title="MB/170" id='170'>
                        </a>
                        <a href="/121.php">
                            <path class="park_right parks" d="m 360.46835,363.81544 19.05997,-1e-5 v 11.84029 l -19.05997,-10e-6 z" title="MB/121" id='121'>
                        </a>
                        <a href="/122.php">
                            <path class="park_right parks" d="m 360.46285,384.25177 19.05997,-1e-5 v 11.84029 l -19.05997,-10e-6 z" title="MB/122" id='122'>
                        </a>


                    </svg>
                    <img src="/img/first_floor_empty_25_right_1.jpg" alt="схема паркинга справа" id="park_right">
                </div>
            </div>
            <!--конец работы с картинкой  -->
        </div>

        <div class="row">
            <!-- начало списка -->
            <div class="col parkListAll ">
                <div class="row justify-content-between">
                    <p style="margin-bottom: 0rem;" class="col-3">Сортировка по:</p>
                    <p class="col-4"></p>
                    <a href="/index.html" class="btn btn-lg_1 active col-3 mb-0" role="button" aria-pressed="true">На главную страницу</a>
                </div>
                <div id="parkListSort" class="row my-1">
                    <!-- начало кнопок сортировки -->
                    <button type="button" class="btn btn-sm col-xs-2 col-2" id="showParkListNameUp"><span> возр. номера места</span></button>
                    <button type="button" class="btn btn-sm col-xs-2 col-2" id="showParkListNameDown"><span> убыв. номера места</span></button>
                    <button type="button" class="btn btn-sm col-xs-5  col-2" id="showParkListAreaUp"><span>возр. площади места</span></button>
                    <button type="button" class="btn btn-sm col-xs-5  col-2" id="showParkListAreaDown"><span>убыв. площади места</span></button>

                    <button type="button" class="btn btn-sm col-xs-6 col-2" id="showParkListRentPriceUp"><span>возр. стоимости аренды</span></button>
                    <button type="button" class="btn btn-sm col-xs-6 col-2" id="showParkListRentPriceDown"><span>убыв. стоимости аренды</span></button>
                </div>
                <!-- конец кнопок сортировки -->
                <!-- начало списка с сортировкой по возрастанию номера места -->
                <div id="parkListNameUp" class="my-1 overflow-auto">
                    <?php while ($parking = mysqli_fetch_assoc($result_name_up)) { ?>
                        <p class="list_place list_place_names">
                            <a href="/<?php echo $parking['name'] ?>.php" style="color: black; font-size: 1.1rem;border: 1px solid black;" role="button" class="btn">
                                <span><?php echo $parking['id'] ?>. </span>
                                <span> Место: <span><?php echo $parking['name'] ?></span> </span>
                                <span>Площадь: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['area'] ?></span> м<sup>2</span>
                                <span>Стоимость аренды: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['rentPrice'] ?></span> руб.</span>
                            </a>
                        </p>
                    <?php
                    }
                    ?>
                </div>
                <!-- конец списка с сортировкой по возрастанию номера места -->
                <!-- начало списка с сортировкой по убыванию номера места -->
                <div id="parkListNameDown" class="my-1 overflow-auto" hidden>
                    <?php while ($parking = mysqli_fetch_assoc($result_name_down)) { ?>
                        <p class="list_place list_place_names">
                            <a href="/<?php echo $parking['name'] ?>.php" style="color: black; font-size: 1.1rem;border: 1px solid black;" role="button" class="btn">
                                <span><?php echo $parking['id'] ?>. </span>
                                <span> Место: <span><?php echo $parking['name'] ?></span> </span>
                                <span>Площадь: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['area'] ?></span> м<sup>2</span>
                                <span>Стоимость аренды: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['rentPrice'] ?></span> руб.</span>
                            </a>
                        </p>
                    <?php
                    }
                    ?>
                </div>
                <!-- конец списка с сортировкой по убыванию места -->

                <!-- начало списка с сортировкой по возрастанию площади -->
                <div id="parkListAreaUp" class="my-1 overflow-auto" hidden>
                    <?php while ($parking = mysqli_fetch_assoc($result_area_up)) { ?>
                        <p class="list_place list_place_areas">
                            <a href="/<?php echo $parking['name'] ?>.php" style="color: black; font-size: 1.1rem;border: 1px solid black;" role="button" class="btn">
                                <span><?php echo $parking['id'] ?>. </span>
                                <span> Место: <span><?php echo $parking['name'] ?></span> </span>
                                <span>Площадь: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['area'] ?></span> м<sup>2</span>
                                <span>Стоимость аренды: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['rentPrice'] ?></span> руб.</span>
                            </a>

                        </p>
                    <?php
                    }
                    ?>
                </div>
                <!-- конец списка с сортировкой по возрастанию площади -->
                <!-- начало списка с сортировкой по убыванию площади -->
                <div id="parkListAreaDown" class="my-1 overflow-auto" hidden>
                    <?php while ($parking = mysqli_fetch_assoc($result_area_down)) { ?>
                        <p class="list_place list_place_areas">
                            <a href="/<?php echo $parking['name'] ?>.php" style="color: black; font-size: 1.1rem;border: 1px solid black;" role="button" class="btn">
                                <span><?php echo $parking['id'] ?>. </span>
                                <span> Место: <span><?php echo $parking['name'] ?></span> </span>
                                <span>Площадь: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['area'] ?></span> м<sup>2</span>
                                <span>Стоимость аренды: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['rentPrice'] ?></span> руб.</span>
                            </a>

                        </p>
                    <?php
                    }
                    ?>
                </div>
                <!-- конец списка с сортировкой по убыванию площади -->

                <!-- начало списка с сортировкой по возрастанию стоимости -->
                <div id="parkListRentPriceUp" class="my-1 overflow-auto" hidden>

                    <?php while ($parking = mysqli_fetch_assoc($result_rentPrice_up)) { ?>
                        <p class="list_place list_place_rentPrices">
                            <a href="/<?php echo $parking['name'] ?>.php" style="color: black; font-size: 1.1rem;border: 1px solid black;" role="button" class="btn">
                                <span><?php echo $parking['id'] ?>. </span>
                                <span> Место: <span><?php echo $parking['name'] ?></span> </span>
                                <span>Площадь: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['area'] ?></span> м<sup>2</span>
                                <span>Стоимость аренды: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['rentPrice'] ?></span> руб.</span>
                            </a>

                        </p>
                    <?php
                    }
                    ?>
                </div>
                <!-- конец списка с сортировкой по возрастанию стоимости -->
                <!-- начало списка с сортировкой по убыванию стоимости -->
                <div id="parkListRentPriceDown" class="my-1 overflow-auto" hidden>

                    <?php while ($parking = mysqli_fetch_assoc($result_rentPrice_down)) { ?>
                        <p class="list_place list_place_rentPrices">
                            <a href="/<?php echo $parking['name'] ?>.php" style="color: black; font-size: 1.1rem;border: 1px solid black;" role="button" class="btn">
                                <span><?php echo $parking['id'] ?>. </span>
                                <span> Место: <span><?php echo $parking['name'] ?></span> </span>
                                <span>Площадь: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['area'] ?></span> м<sup>2</span>
                                <span>Стоимость аренды: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['rentPrice'] ?></span> руб.</span>
                            </a>

                        </p>
                    <?php
                    }
                    ?>
                </div>
                <!-- конец списка с сортировкой по убыванию стоимости -->
            </div>
        </div>


    </div>
    <script>
        let list_place_areas = document.getElementsByClassName("list_place_areas");
        let list_place_names = document.getElementsByClassName("list_place_names");
        let list_place_rentPrices = document.getElementsByClassName("list_place_rentPrices");

        let elemSpiskaNames = [];
        for (i = 0; i < list_place_names.length; i++) {
            elemSpiskaNames.push(list_place_names[i].children[0].children[1].children[0].innerText);
        }

        let elemSpiskaAreas = [];
        for (i = 0; i < list_place_areas.length; i++) {
            elemSpiskaAreas.push(list_place_areas[i].children[0].children[1].children[0].innerText);
        }

        let elemSpiskaRentPrices = [];
        for (i = 0; i < list_place_rentPrices.length; i++) {
            elemSpiskaRentPrices.push(list_place_rentPrices[i].children[0].children[1].children[0].innerText);
        }




        for (let i = 0; i < list_place_rentPrices.length; i++) {
            list_place_rentPrices[i].addEventListener("mouseover", () => {
                return document.getElementById(elemSpiskaRentPrices[i]).style.opacity = 1;
            });
            list_place_rentPrices[i].addEventListener("mouseout", () => {
                return document.getElementById(elemSpiskaRentPrices[i]).style.opacity = 0.2;
            });
        }

        for (let i = 0; i < list_place_areas.length; i++) {
            list_place_areas[i].addEventListener("mouseover", () => {
                return document.getElementById(elemSpiskaAreas[i]).style.opacity = 1;
            });
            list_place_areas[i].addEventListener("mouseout", () => {
                return document.getElementById(elemSpiskaAreas[i]).style.opacity = 0.2;
            });
        }

        for (let i = 0; i < list_place_names.length; i++) {
            list_place_names[i].addEventListener("mouseover", () => {
                return document.getElementById(elemSpiskaNames[i]).style.opacity = 1;
            });
            list_place_names[i].addEventListener("mouseout", () => {
                return document.getElementById(elemSpiskaNames[i]).style.opacity = 0.2;
            });
        }
        // Видимость списка с сортировкой по возрастанию номера- начало
        showParkListNameUp.addEventListener("click", () => {
            parkListNameUp.hidden = false;
            parkListNameDown.hidden = true;
            parkListAreaUp.hidden = true;
            parkListAreaDown.hidden = true;
            parkListRentPriceUp.hidden = true;
            parkListRentPriceDown.hidden = true;

            showParkListNameUp.style.backgroundColor = "rgb(141, 186, 238)";
            showParkListNameDown.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListAreaUp.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListAreaDown.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListRentPriceUp.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListRentPriceDown.style.backgroundColor = "rgb(241, 230, 209)";
        });
        //Видимость списка с сортировкой по возрастанию номера- конец   
        // Видимость списка с сортировкой по убыванию номера- начало
        showParkListNameDown.addEventListener("click", () => {
            parkListNameUp.hidden = true;
            parkListNameDown.hidden = false;
            parkListAreaUp.hidden = true;
            parkListAreaDown.hidden = true;
            parkListRentPriceUp.hidden = true;
            parkListRentPriceDown.hidden = true;

            showParkListNameUp.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListNameDown.style.backgroundColor = "rgb(141, 186, 238)";
            showParkListAreaUp.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListAreaDown.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListRentPriceUp.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListRentPriceDown.style.backgroundColor = "rgb(241, 230, 209)";
        });
        //Видимость списка с сортировкой по убыванию номера- конец     
        //Видимость списка с сортировкой по возрастанию площади- начало
        showParkListAreaUp.addEventListener("click", () => {
            parkListNameUp.hidden = true;
            parkListNameDown.hidden = true;
            parkListAreaUp.hidden = false;
            parkListAreaDown.hidden = true;
            parkListRentPriceUp.hidden = true;
            parkListRentPriceDown.hidden = true;

            showParkListNameUp.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListNameDown.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListAreaUp.style.backgroundColor = "rgb(141, 186, 238)";
            showParkListAreaDown.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListRentPriceUp.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListRentPriceDown.style.backgroundColor = "rgb(241, 230, 209)";
        });
        //Видимость списка с сортировкой по возрастанию площади- конец
        //Видимость списка с сортировкой по убыванию площади- начало
        showParkListAreaDown.addEventListener("click", () => {
            parkListNameUp.hidden = true;
            parkListNameDown.hidden = true;
            parkListAreaUp.hidden = true;
            parkListAreaDown.hidden = false;
            parkListRentPriceUp.hidden = true;
            parkListRentPriceDown.hidden = true;

            showParkListNameUp.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListNameDown.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListAreaUp.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListAreaDown.style.backgroundColor = "rgb(141, 186, 238)";
            showParkListRentPriceUp.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListRentPriceDown.style.backgroundColor = "rgb(241, 230, 209)";
        });
        //Видимость списка с сортировкой по убыванию площади- конец
        //Видимость списка с сортировкой по возрастанию цены аренды- начало
        showParkListRentPriceUp.addEventListener("click", () => {
            parkListNameUp.hidden = true;
            parkListNameDown.hidden = true;
            parkListAreaUp.hidden = true;
            parkListAreaDown.hidden = true;
            parkListRentPriceUp.hidden = false;
            parkListRentPriceDown.hidden = true;

            showParkListNameUp.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListNameDown.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListAreaUp.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListAreaDown.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListRentPriceUp.style.backgroundColor = "rgb(141, 186, 238)";
            showParkListRentPriceDown.style.backgroundColor = "rgb(241, 230, 209)";
        });
        //Видимость списка с сортировкой по возрастанию цены аренды- конец
        //Видимость списка с сортировкой по убыванию цены аренды- начало
        showParkListRentPriceDown.addEventListener("click", () => {
            parkListNameUp.hidden = true;
            parkListNameDown.hidden = true;
            parkListAreaUp.hidden = true;
            parkListAreaDown.hidden = true;
            parkListRentPriceUp.hidden = true;
            parkListRentPriceDown.hidden = false;

            showParkListNameUp.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListNameDown.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListAreaUp.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListAreaDown.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListRentPriceUp.style.backgroundColor = "rgb(241, 230, 209)";
            showParkListRentPriceDown.style.backgroundColor = "rgb(141, 186, 238)";
        });
        //Видимость списка с сортировкой по убыванию цены аренды- конец
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>
