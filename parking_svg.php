<?php
header('Content-Type: text/html; charset=utf-8');
$mysqli = mysqli_connect("localhost", "zykcyspz_0207", "12345", "zykcyspz_0207");
$result_name = mysqli_query($mysqli, "SELECT * FROM `parking`"); // выборка всех мест в паркинге по возрастанию имени

// $result_mm = mysqli_query($mysqli, "SELECT * FROM `parking` WHERE `implement`= "MM""); // выборка только машиномест

$result_area = mysqli_query($mysqli, "SELECT * FROM `parking` ORDER BY `area`"); // выборка всех мест в паркинге по возрастанию площадей

$result_rentPrice = mysqli_query($mysqli, "SELECT * FROM `parking` ORDER BY `rentPrice`"); // выборка всех мест в паркинге по возрастанию площадей

?>
<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles.css">
    <title>Паркинг</title>

    

</head>

<body>
    <h3>Схема парковки на 1 этаже</h3>
    <div class="container-xs">
        <div class="row">


            <!--начало работы с левой частью картинки  -->
            <div class="col-xs-6 ml-3">
                <div class="map podsvet">
                    <svg viewBox="0 0 750 886" id="1">
                        <a href="/378a.php" id='mm378a'>
                            <path class="car_place" d="m 233.28332,614.91969 v -18.47017 l -38.58913,0.3552 -8e-5,18.11497 z" title="MM/378a" id='m378a'>
                        </a>
                        <a href="/123.php">
                            <path class="park_left" d="m 389.68849,698.36009 0.21224,-34.5846 -14.23219,-0.0951 -4e-5,34.67968 z" title="MB/123" id='m123'>
                        </a>
                        <a href="/126.php">
                            <path class="park_left" d="m 334.35629,767.37427 v -12.53668 l -20.76695,0.24109 -4e-5,12.29559 z" title="MB/126" id='m126'>
                        </a>
                        <a href="/127.php">
                            <path class="park_left" d="m 355.1232,767.37427 v -12.7825 l -20.76691,0.24582 -4e-5,12.53668 z" title="MB/127" id='m127'>
                        </a>
                        <a href="/128.php">
                            <path class="park_left" d="m 375.89007,767.36954 v -13.02832 l -20.76687,0.25055 -4e-5,12.77777 z" title="MB/128" id='m128'>
                        </a>
                        <a href="/129.php">
                            <path class="park_left" d="m 395.09308,767.38198 v -13.29647 l -19.20301,0.25571 -4e-5,13.04076 z" title="MB/129" id='m129'>
                        </a>
                        <a href="/130.php">
                            <path class="park_left" d="m 412.75562,767.39129 v -13.56668 l -17.66254,0.2609 -4e-5,13.30578 z" title="MB/130" id='m130'>
                        </a>
                        <a href="/131.php">
                            <path class="park_left" d="m 431.41797,767.39129 v -13.80404 l -18.6623,0.26547 -5e-5,13.53857 z" title="MB/131" id='m131'>
                        </a>
                        <a href="/141.php">
                            <path class="park_left" d="m 187.82676,592.10163 v -10.30944 l -17.99528,0.19826 -3e-5,10.11118 z" title="MB/141" id='m141'>
                        </a>
                        <a href="/142.php">
                            <path class="park_left" d="m 207.77914,592.07596 v -10.25813 l -19.92684,0.19728 -3e-5,10.06085 z" title="MB/142" id='m142'>
                        </a>
                        <a href="/153.php">
                            <path class="park_left" d="m 182.15956,712.65164 0.21992,-22.73213 -14.74675,-0.0625 -3e-5,22.79464 z" title="MB/153" id='m153'>
                        </a>
                        <a href="/154.php">
                            <path class="park_left" d="m 196.90631,712.71414 0.21992,-22.73213 -14.74675,-0.0625 -3e-5,22.79464 z" title="MB/154" id='m154'>
                        </a>
                        <a href="/155.php">
                            <path class="park_left" d="m 211.21609,712.8255 0.21289,-22.75386 -14.27586,-0.0625 -3e-5,22.81643 z" title="MB/155" id='m155'>
                        </a>
                        <a href="/160.php">
                            <path class="park_left" d="m 394.63294,286.48165 14.86042,-0.2886 0.14713,14.43016 -14.99659,0.28869 z" title="MB/160" id="m160">
                        </a>
                        <a href="/161.php">
                            <path class="park_left" d="m 412.39339,286.48338 14.4297,-0.14578 -0.14575,14.14101 -14.28123,0 z" title="MB/161" id='m161'>
                        </a>
                        <a href="/162.php">
                            <path class="park_left" d="m 452.91533,353.93962 0.18999,-28.59986 -12.73948,-0.0786 -2e-5,28.67851 z" title="MB/162" id='m162'>
                        </a>
                        <a href="/163.php">
                            <path class="park_left" d="m 452.61633,383.6761 0.18547,-29.65493 -12.43598,-0.0815 -2e-5,29.73648 z" title="MB/163" id='m163'>
                        </a>
                        <a href="/135.php">
                            <path class="park_left" d="m 513.53758,641.71999 0.18897,-25.41608 -12.67173,-0.0699 -3e-5,25.48596 z" title="MB/135" id='m135'>
                        </a>
                        <a href="/136.php">
                            <path class="park_left" d="m 692.22864,753.35022 0.14019,-25.02113 -9.40077,-0.0688 -2e-5,25.08993 z" title="MB/136" id='m136'>
                        </a>
                    </svg>
                    <img src="/img/first_floor_empty_25_left_1.jpg" alt="схема паркинга слева">
                </div>
            </div>
            <!--конец работы с левой частью картинки  -->

            <!--начало работы с правой частью картинки  -->
            <div class="col-xs-6">
                <div class="map">
                    <svg viewBox="0 0 750 886">
                        <a href="/112.php">
                            <path class="park_right" d="m 66.6642,220.51767 25.186056,-0.19826 0.467728,12.17317 -25.455525,-0.0232 z" title="MB/112" id='m112'>
                        </a>
                        <a href="/114.php">
                            <path class="park_right" d="m 140.06193,221.21122 19.05997,-1e-5 v 11.84029 l -19.05997,-1e-5 z" title="MB/114" id='m114'>
                        </a>
                        <a href="/115.php">
                            <path class="park_right" d="m 159.69948,221.06683 19.05997,-1e-5 v 11.84029 l -19.05997,-10e-6 z" title="MB/115" id='m115'>
                        </a>
                        <a href="/119.php">
                            <path class="park_right" d="m 120.66662,363.93204 19.05997,-10e-6 v 11.84029 l -19.05997,-10e-6 z" title="MB/119" id='m119'>
                        </a>
                        <a href="/120.php">
                            <path class="park_right" d="m 120.4456,384.10872 19.05997,-1e-5 V 395.949 l -19.05997,-1e-5 z" title="MB/120" id='m120'>
                        </a>
                        <a href="/139.php">
                            <path class="park_right" d="m 18.239775,222.04943 h 21.015392 l 0.198259,10.90421 -21.213651,0.19826 z" title="MB/139" id='m139'>
                        </a>
                        <a href="/156.php">
                            <path class="park_right" d="m 49.55567,221.64807 15.067639,0.19826 0.396517,25.17882 -15.265898,0 z" title="MB/156" id='m156'>
                        </a>
                        <a href="/165.php">
                            <path class="park_right" d="m 242.15709,225.11863 19.76438,-1e-5 v 11.82273 l -19.76438,-1e-5 z" title="MB/165" id='m165'>
                        </a>
                        <a href="/170.php">
                            <path class="park_right" d="m 50.178099,247.24375 h 14.627915 l 0.384945,24.3374 -15.01286,0.36605 z" title="MB/170" id='m170'>
                        </a>
                        <a href="/121.php">
                            <path class="park_right" d="m 360.46835,363.81544 19.05997,-1e-5 v 11.84029 l -19.05997,-10e-6 z" title="MB/121" id='m121'>
                        </a>
                        <a href="/122.php">
                            <path class="park_right" d="m 360.46285,384.25177 19.05997,-1e-5 v 11.84029 l -19.05997,-10e-6 z" title="MB/122" id='m122'>
                        </a>


                    </svg>
                    <img src="/img/first_floor_empty_25_right_1.jpg" alt="схема паркинга справа" id="park_right">
                </div>
            </div>
            <!--конец работы с правой частью картинки  -->

        </div>

        <div class="row mb-10">
            <!-- начало списка -->
            <div class="col-xs-6 mx-3 ">
                <!-- начало списка с сортировкой по имени -->
                <div id="parkListName" class="my-3 overflow-auto">

                    <?php while ($parking = mysqli_fetch_assoc($result_name)) { ?>
                        <p class="list_place">
                            <a href="/<?php echo $parking['name'] ?>.php" style="color: black">
                                <span><?php echo $parking['id'] ?>. </span>
                                <span> Место: <span><?php echo $parking['name'] ?></span> </span></br>
                                <span>Площадь: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['area'] ?></span> м<sup>2</span></br>
                                <span>Стоимость аренды: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['rentPrice'] ?></span> руб.</span>
                            </a>
                        </p>
                    <?php
                    }
                    ?>
                </div>
                <!-- конец списка с сортировкой по имени -->

                <!-- начало списка с сортировкой по площади -->
                <div id="parkListArea" class="my-3 overflow-auto" hidden>

                    <?php while ($parking = mysqli_fetch_assoc($result_area)) { ?>
                        <p class="list_place">
                            <a href="/<?php echo $parking['name'] ?>.php" style="color: black">
                                <span><?php echo $parking['id'] ?>. </span>
                                <span> Место: <span><?php echo $parking['name'] ?></span> </span></br>
                                <span>Площадь: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['area'] ?></span> м<sup>2</span></br>
                                <span>Стоимость аренды: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['rentPrice'] ?></span> руб.</span>
                            </a>

                        </p>
                    <?php
                    }
                    ?>
                </div>
                <!-- конец списка с сортировкой по площади -->

                <!-- начало списка с сортировкой по стоимости -->
                <div id="parkListRentPrice" class="my-3 overflow-auto" hidden>

                    <?php while ($parking = mysqli_fetch_assoc($result_rentPrice)) { ?>
                        <p class="list_place">
                            <a href="/<?php echo $parking['name'] ?>.php" style="color: black">
                                <span><?php echo $parking['id'] ?>. </span>
                                <span> Место: <span><?php echo $parking['name'] ?></span> </span></br>
                                <span>Площадь: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['area'] ?></span> м<sup>2</span></br>
                                <span>Стоимость аренды: <span style=" color: white; background-color: rgb(81, 23, 164);"><?php echo $parking['rentPrice'] ?></span> руб.</span>
                            </a>

                        </p>
                    <?php
                    }
                    ?>
                </div>
                <!-- конец списка с сортировкой по стоимости -->
            </div>
            <!-- конец списка -->
            <!-- начало кнопок фильтров -->
            <div class="col-xs-6 mx-3 ">
                <div id="parkListSort" class="my-3 overflow-auto">
                    <button type="button" class="btn btn-block" id="showParkListName"><span>Фильтр по возрастанию</span></br> <span>номера места</span></button></br>
                    <button type="button" class="btn btn-block" id="showParkListArea"><span>Фильтр по возрастанию</span></br> <span>площади места</span></button></br>
                    <button type="button" class="btn btn-block" id="showParkListRentPrice"><span>Фильтр по возрастанию</span></br> <span>стоимости аренды</span></button>
                </div>
            </div>
            <!-- конец кнопок фильтров -->
        </div>


    </div>
    <script>
        showParkListName.addEventListener("click", () => {
            parkListName.hidden = false;
            parkListArea.hidden = true;
            parkListRentPrice.hidden = true;

        });

        showParkListArea.addEventListener("click", () => {
            parkListName.hidden = true;
            parkListArea.hidden = false;
            parkListRentPrice.hidden = true;
        });
        showParkListRentPrice.addEventListener("click", () => {
            parkListName.hidden = true;
            parkListArea.hidden = true;
            parkListRentPrice.hidden = false;
        });




        // this.list_place.addEventListener("click", ()=>{
        //     window.location.pathname=this."/<?php echo $parking['name'] ?>.php";
        // })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>