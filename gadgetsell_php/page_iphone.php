<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Часы Apple Watch Ultra 2 GPS + Cellular 49 мм, титановый корпус, ремешок Alpine Синего цвета,размер M</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
<?php require("./components/header.php"); ?>
<style>
    .none {
        display: none;
    }
</style>
<main>
    <div class="kroshka_box">
        <div class="kroshka">
            <a href="/">Главная</a> / <a href="/catalog">Каталог</a> / <a href="/iphone">Apple iPhone</a> / <a
                    class="a_kroshka_active">
                <?php
                $host = 'localhost';
                $user = 'u2526134_wp500';
                $db = 'u2526134_wp500';
                $password = 'd40c4MX84o0yIC16';
                $conn = new mysqli($host, $user, $password, $db);
                $conn->query("SET NAMES 'utf8mb4'");
                $id_get = $_GET['id_page'];
                $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` = $id_get");
                if ($suc->num_rows > 0) {
                    while ($row = $suc->fetch_assoc()) {
                        $id = $row["id"];
                        $name = $row["name"];
                        $price = $row["price"];
                        $memory = $row["memory"];
                        $color = $row["color"];
                        $properties = $row["properties"];
                        $availability = $row["availability"];
                        echo($name);
                    }
                }
                ?>
            </a>
        </div>
    </div>
    <div class="main_box_tovar">
        <div class="main_box_tovar_items">
            <div class="main_box_tovar_items__1">
                <div class="main_box_tovar_items__1__img1">
                    <?php
                    $host = 'localhost';
                    $user = 'u2526134_wp500';
                    $db = 'u2526134_wp500';
                    $password = 'd40c4MX84o0yIC16';
                    $conn = new mysqli($host, $user, $password, $db);
                    $conn->query("SET NAMES 'utf8mb4'");
                    $id_get = $_GET['id_page'];
                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` = $id_get");
                    if ($suc->num_rows > 0) {
                        while ($row = $suc->fetch_assoc()) {
                            $photo_1 = $row["photo_1"];
                            print_r('<img src="https://store77.net' . $photo_1 . '" alt="">');
                        }
                    }
                    ?>
                </div>
                <div class="main_box_tovar_items__1__img23">
                    <?php
                    $host = 'localhost';
                    $user = 'u2526134_wp500';
                    $db = 'u2526134_wp500';
                    $password = 'd40c4MX84o0yIC16';
                    $conn = new mysqli($host, $user, $password, $db);
                    $conn->query("SET NAMES 'utf8mb4'");
                    $id_get = $_GET['id_page'];
                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` = $id_get");
                    if ($suc->num_rows > 0) {
                        while ($row = $suc->fetch_assoc()) {
                            $photo_all = $row["photo_all"];
                        }
                        print_r('
                    <div class="wk-data-img23"></div>
                    <script>
                        const wk_obj_img23 = ' . $photo_all . ';
                        document.querySelector(".wk-data-img23").innerHTML = `<img src="https://store77.net${wk_obj_img23.img_1}" alt="" /><img src="https://store77.net${wk_obj_img23.img_2}" alt="" />`;
                    </script>
                    ');
                    }
                    ?>
                </div>
                <div class="main_box_tovar_items__2__mobile">
                    <div class="main_box_tovar_items__2__1">
                        Код товара: 8-1520001
                    </div>
                    <div class="main_box_tovar_items__2__2">
                        <h2>
                            <?php
                            $host = 'localhost';
                            $user = 'u2526134_wp500';
                            $db = 'u2526134_wp500';
                            $password = 'd40c4MX84o0yIC16';
                            $conn = new mysqli($host, $user, $password, $db);
                            $conn->query("SET NAMES 'utf8mb4'");
                            $id_get = $_GET['id_page'];
                            $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` = $id_get");
                            if ($suc->num_rows > 0) {
                                while ($row = $suc->fetch_assoc()) {
                                    $id = $row["id"];
                                    $name = $row["name"];
                                    $price = $row["price"];
                                    $memory = $row["memory"];
                                    $color = $row["color"];
                                    $properties = $row["properties"];
                                    $availability = $row["availability"];
                                    echo($name);
                                }
                            }
                            ?>
                        </h2>
                    </div>
                    <div class="main_box_tovar_items__2__3">
                        Цвет <span class="tovar_color tovar_color__1"></span><span
                                class="tovar_color tovar_color__2"></span><span
                                class="tovar_color tovar_color__3"></span>
                    </div>
                    <div class="main_box_tovar_items__2__45__iii">
                        <div class="main_box_tovar_items__2__4">
                            <div class="main_box_tovar_items__2__4__price">
                                    <span>
                                        <?php
                                        $host = 'localhost';
                                        $user = 'u2526134_wp500';
                                        $db = 'u2526134_wp500';
                                        $password = 'd40c4MX84o0yIC16';
                                        $conn = new mysqli($host, $user, $password, $db);
                                        $conn->query("SET NAMES 'utf8mb4'");
                                        $id_get = $_GET['id_page'];
                                        $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` = $id_get");
                                        if ($suc->num_rows > 0) {
                                            while ($row = $suc->fetch_assoc()) {
                                                $id = $row["id"];
                                                $name = $row["name"];
                                                $price = $row["price"];
                                                $memory = $row["memory"];
                                                $color = $row["color"];
                                                $properties = $row["properties"];
                                                $availability = $row["availability"];
                                                echo($price);
                                                echo(" ₽");
                                            }
                                        }
                                        ?>
                                    </span>
                                <!-- <span>XXXXX — бонусов</span> -->
                            </div>
                            <div class="main_box_tovar_items__2__4__btns">
                                <button>В КОРЗИНУ</button>
                                <button>КУПИТЬ В 1 КЛИК</button>
                            </div>
                        </div>
                        <div class="main_box_tovar_items__2__5">
                            <table class="tovar_table wk-table is-line is-fullwidth">
                                <tr>
                                    <td>Наличие:</td>
                                    <td>
                                        <?php
                                        $host = 'localhost';
                                        $user = 'u2526134_wp500';
                                        $db = 'u2526134_wp500';
                                        $password = 'd40c4MX84o0yIC16';
                                        $conn = new mysqli($host, $user, $password, $db);
                                        $conn->query("SET NAMES 'utf8mb4'");
                                        $id_get = $_GET['id_page'];
                                        $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` = $id_get");
                                        if ($suc->num_rows > 0) {
                                            while ($row = $suc->fetch_assoc()) {
                                                $id = $row["id"];
                                                $name = $row["name"];
                                                $price = $row["price"];
                                                $memory = $row["memory"];
                                                $color = $row["color"];
                                                $properties = $row["properties"];
                                                $availability = $row["availability"];
                                                echo($availability);
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Гарантия:</td>
                                    <td>от магазина</td>
                                </tr>
                                <tr>
                                    <td>Доставка:</td>
                                    <td>490 руб. | 1-2 дня</td>
                                </tr>
                                <tr>
                                    <td>Самовывоз:</td>
                                    <td>1-2 дня | м. Фили</td>
                                </tr>
                                <tr>
                                    <td>Срок службы:</td>
                                    <td>3 года</td>
                                </tr>
                                <tr>
                                    <td>Страна изготовитель:</td>
                                    <td>Китай</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="main_box_tovar_items__1__2">
                    <div class="tovar_items__1__ads">
                        <img src="https://store77.net/upload/w247/imageCache/e25/465/75eb55f670c4919371fc99edc0fbf8b7.png"
                             alt="">
                    </div>
                    <div class="tovar_items__1__description" tabindex="0">
                        <div class="idesc">
                            <h2>Описание</h2>
                            <div>
                                <div>
                                    <?php
                                    $host = 'localhost';
                                    $user = 'u2526134_wp500';
                                    $db = 'u2526134_wp500';
                                    $password = 'd40c4MX84o0yIC16';
                                    $conn = new mysqli($host, $user, $password, $db);
                                    $conn->query("SET NAMES 'utf8mb4'");
                                    $id_get = $_GET['id_page'];
                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` = $id_get");
                                    if ($suc->num_rows > 0) {
                                        while ($row = $suc->fetch_assoc()) {
                                            $description = $row["description"];
                                            print_r($description);
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!--<div class="tovar_items__1__complect">
                        <h2>Комплекты</h2>
                        <div class="complect_header">
                            <ul class="ul_o_modeli scroll">
                                <li><a role="button" class="a_content_complect_1">VIP-комплект со скидкой</a></li>
                                <li><a role="button" class="a_content_complect_2">Стандарт-комплект</a></li>
                                <li><a role="button" class="a_content_complect_3">Мини-комплект</a></li>
                            </ul>
                        </div>
                        <div class="main_img__and__text__price_header">
                            <div class="main_img__and__text__price_header_b">
                                <div class="main_img__and__text__price_header__1">
                                    Экономия: <div class="complect_price_s1">789 Р</div>
                                </div>
                                <div class="main_img__and__text__price_header__2">
                                    За комплект: <div class="complect_price_s2">87 461 Р</div>
                                </div>
                            </div>
                            <button>Купить</button>
                        </div>
                        <div class="complect_header__content">
                            <div class="complect_header__content__item__box">
                                <div class="complect_header__content__item complect_header__content__item__1">
                                    <img src="https://store77.net/upload/resize_cache/iblock/867/205_220_1/86713e2aac1f2857992f456c80138baf.jpg"
                                        alt="">
                                    <div>
                                        <span>1 490 Р</span>
                                        Защитное стекло для Apple Watch Ultra 49mm (Прозрачное)
                                    </div>
                                    <nav>
                                        <a href=""><img
                                                src="https://store77.net/bitrix/templates/v11/components/store77/catalog.element/.default/images/edit.svg"
                                                alt=""></a>
                                        <a href=""><img
                                                src="https://store77.net/bitrix/templates/v11/components/store77/catalog.element/.default/images/garb.svg"
                                                alt=""></a>
                                    </nav>
                                </div>
                                <div class="complect_header__content__item complect_header__content__item__2">
                                    <img src="https://store77.net/upload/w247/imageCache/18d/0e1/59db98fd65f7140631ed36768d5e21ae.jpg"
                                        alt="">
                                    <div>
                                        <span>4 490 Р</span>
                                        Ремешок Uniq для Apple Watch 42/44/45/49mm Strova Strap Link Steel (Черный)
                                    </div>
                                    <nav>
                                        <a href=""><img
                                                src="https://store77.net/bitrix/templates/v11/components/store77/catalog.element/.default/images/edit.svg"
                                                alt=""></a>
                                        <a href=""><img
                                                src="https://store77.net/bitrix/templates/v11/components/store77/catalog.element/.default/images/garb.svg"
                                                alt=""></a>
                                    </nav>
                                </div>
                                <div class="complect_header__content__item complect_header__content__item__3">
                                    <img src="https://store77.net/upload/w247/imageCache/bba/b9f/10c0cab08ec76fe34a3f707c2b058aad.jpg"
                                        alt="">
                                    <div>
                                        <span>1 490 Р</span>
                                        Кабель Apple с магнитным креплением для зарядки Apple Watch, USB-C 1m
                                        (Белый)
                                    </div>
                                    <nav>
                                        <a href=""><img
                                                src="https://store77.net/bitrix/templates/v11/components/store77/catalog.element/.default/images/edit.svg"
                                                alt=""></a>
                                        <a href=""><img
                                                src="https://store77.net/bitrix/templates/v11/components/store77/catalog.element/.default/images/garb.svg"
                                                alt=""></a>
                                    </nav>
                                </div>

                            </div>
                            <div class="main_img__and__text">
                                <img src="https://store77.net/upload/resize_cache/iblock/e26/205_220_1/e269c712c5b5cc9a97830adad4fd2b4b.jpeg"
                                    class="main_img" alt="">
                                <span>222</span>
                                <div>333</div>
                            </div>
                        </div>
                    </div>-->
                        <div class="tovar_items__1__model">
                            <div id="cardOptions" class="card_anchor_section pages_card_padding secOptions">
                                <div class="card_bgsection">
                                    <h2 class="card_bgsection__title">О модели</h2>
                                    <div class="card_bgsection__content">
                                        <ul class="ul_o_modeli scroll">
                                            <li><a role="button" class="a_content_model_1">Общие</a></li>
                                            <li><a role="button" class="a_content_model_2">Экран</a></li>
                                            <li><a role="button" class="a_content_model_3">Камера</a></li>
                                            <li><a role="button" class="a_content_model_4">Запись видео</a></li>
                                            <li><a role="button" class="a_content_model_5">Связь</a></li>
                                            <li><a role="button" class="a_content_model_6">Память и процессор</a>
                                            </li>
                                            <li><a role="button" class="a_content_model_7">Питание</a>
                                            </li>
                                            <li><a role="button" class="a_content_model_8">Другие Функции</a>
                                            </li>
                                            <li><a role="button" class="a_content_model_9">Дополнительная
                                                    информация</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab_content_model_1">
                                        <table class="wk-table is-fullwidth">
                                            <tr>
                                                <td>Тип</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Tip'></div>
                                                    <script>
                                                        let wk_obj_Tip = $properties;
                                                        document.querySelector('.wk-data-Tip').innerHTML = wk_obj_Tip.Tip;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Операционная система</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Operacionnaya_sistema'></div>
                                                    <script>
                                                        let wk_obj_Operacionnaya_sistema = $properties;
                                                        document.querySelector('.wk-data-Operacionnaya_sistema').innerHTML = wk_obj_Operacionnaya_sistema.Operacionnaya_sistema;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Тип корпуса</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Tip_korpusa'></div>
                                                    <script>
                                                        let wk_obj_Tip_korpusa = $properties;
                                                        document.querySelector('.wk-data-Tip_korpusa').innerHTML = wk_obj_Tip_korpusa.Tip_korpusa;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Конструкция</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Konstrukciya'></div>
                                                    <script>
                                                        let wk_obj_Konstrukciya = $properties;
                                                        document.querySelector('.wk-data-Konstrukciya').innerHTML = wk_obj_Konstrukciya.Konstrukciya;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Материал корпуса</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Material_korpusa'></div>
                                                    <script>
                                                        let wk_obj_Material_korpusa = $properties;
                                                        document.querySelector('.wk-data-Material_korpusa').innerHTML = wk_obj_Material_korpusa.Material_korpusa;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Тип SIM-карты</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Tip_SIM_karty'></div>
                                                    <script>
                                                        let wk_obj_Tip_SIM_karty = $properties;
                                                        document.querySelector('.wk-data-Tip_SIM_karty').innerHTML = wk_obj_Tip_SIM_karty.Tip_SIM_karty;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Вес</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Ves'></div>
                                                    <script>
                                                        let wk_obj_Ves = $properties;
                                                        document.querySelector('.wk-data-Ves').innerHTML = wk_obj_Ves.Ves;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Размеры</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Razmery '></div>
                                                    <script>
                                                        let wk_obj_Razmery = $properties;
                                                        document.querySelector('.wk-data-Razmery ').innerHTML = wk_obj_Razmery.Razmery;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab_content_model_2">
                                        <table class="wk-table is-fullwidth">
                                            <tr>
                                                <td>Тип экрана</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Tip_ekrana'></div>
                                                    <script>
                                                        let wk_obj_Tip_ekrana = $properties;
                                                        document.querySelector('.wk-data-Tip_ekrana').innerHTML = wk_obj_Tip_ekrana.Tip_ekrana;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Тип сенсорного экрана</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Tip_sensornogo_ekrana'></div>
                                                    <script>
                                                        let wk_obj_Tip_sensornogo_ekrana = $properties;
                                                        document.querySelector('.wk-data-Tip_sensornogo_ekrana').innerHTML = wk_obj_Tip_sensornogo_ekrana.Tip_sensornogo_ekrana;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Диагональ</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Diagonal'></div>
                                                    <script>
                                                        let wk_obj_Diagonal = $properties;
                                                        document.querySelector('.wk-data-Diagonal').innerHTML = wk_obj_Diagonal.Diagonal;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Контрастность</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Kontrastnost'></div>
                                                    <script>
                                                        let wk_obj_Kontrastnost = $properties;
                                                        document.querySelector('.wk-data-Kontrastnost').innerHTML = wk_obj_Kontrastnost.Kontrastnost;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Размер изображения</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Razmer_izobrazheniya'></div>
                                                    <script>
                                                        let wk_obj_Razmer_izobrazheniya = $properties;
                                                        document.querySelector('.wk-data-Razmer_izobrazheniya').innerHTML = wk_obj_Razmer_izobrazheniya.Razmer_izobrazheniya;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Число пикселей на дюйм (PPI)</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Chislo_pikselej_na_dyujm_PPI'></div>
                                                    <script>
                                                        let wk_obj_Chislo_pikselej_na_dyujm_PPI = $properties;
                                                        document.querySelector('.wk-data-Chislo_pikselej_na_dyujm_PPI').innerHTML = wk_obj_Chislo_pikselej_na_dyujm_PPI.Chislo_pikselej_na_dyujm_PPI;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Максимальная яркость</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Yarkost'></div>
                                                    <script>
                                                        let wk_obj_Yarkost = $properties;
                                                        document.querySelector('.wk-data-Yarkost').innerHTML = wk_obj_Yarkost.Yarkost;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Покрытие</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Tip_sensornogo_ekrana'></div>
                                                    <script>
                                                        let wk_obj_Tip_sensornogo_ekrana = $properties;
                                                        document.querySelector('.wk-data-Tip_sensornogo_ekrana').innerHTML = wk_obj_Tip_sensornogo_ekrana.Tip_sensornogo_ekrana;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab_content_model_3">
                                        <table class="wk-table is-fullwidth">
                                            <tr>
                                                <td>Тыловая фотокамера</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Tylovaya_fotokamera'></div>
                                                    <script>
                                                        let wk_obj_Tylovaya_fotokamera = $properties;
                                                        document.querySelector('.wk-data-Tylovaya_fotokamera').innerHTML = wk_obj_Tylovaya_fotokamera.Tylovaya_fotokamera;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Зум (фото)</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Zum_foto'></div>
                                                    <script>
                                                        let wk_obj_Zum_foto = $properties;
                                                        document.querySelector('.wk-data-Zum_foto').innerHTML = wk_obj_Zum_foto.Zum_foto;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Функции тыловой фотокамеры</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Funkcii_tylovoj_fotokamery'></div>
                                                    <script>
                                                        let wk_obj_Funkcii_tylovoj_fotokamery = $properties;
                                                        document.querySelector('.wk-data-Funkcii_tylovoj_fotokamery').innerHTML = wk_obj_Funkcii_tylovoj_fotokamery.Funkcii_tylovoj_fotokamery;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Диафрагма тыловой фотокамеры</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Diafragma_tylovoj_fotokamery'></div>
                                                    <script>
                                                        let wk_obj_Diafragma_tylovoj_fotokamery = $properties;
                                                        document.querySelector('.wk-data-Diafragma_tylovoj_fotokamery').innerHTML = wk_obj_Diafragma_tylovoj_fotokamery.Diafragma_tylovoj_fotokamery;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Тип объектива</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Tip_obektiva'></div>
                                                    <script>
                                                        let wk_obj_Tip_obektiva = $properties;
                                                        document.querySelector('.wk-data-Tip_obektiva').innerHTML = wk_obj_Tip_obektiva.Tip_obektiva;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Защита объектива</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Zashchita_obektiva'></div>
                                                    <script>
                                                        let wk_obj_Zashchita_obektiva = $properties;
                                                        document.querySelector('.wk-data-Zashchita_obektiva').innerHTML = wk_obj_Zashchita_obektiva.Zashchita_obektiva;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Разрешение фронтальной камеры</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Razreshenie_frontalnoj_kamery'></div>
                                                    <script>
                                                        let wk_obj_Razreshenie_frontalnoj_kamery = $properties;
                                                        document.querySelector('.wk-data-Razreshenie_frontalnoj_kamery').innerHTML = wk_obj_Razreshenie_frontalnoj_kamery.Razreshenie_frontalnoj_kamery;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Функции фронтальной камеры</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Funkcii_frontalnoj_kamery'></div>
                                                    <script>
                                                        let wk_obj_Funkcii_frontalnoj_kamery = $properties;
                                                        document.querySelector('.wk-data-Funkcii_frontalnoj_kamery').innerHTML = wk_obj_Funkcii_frontalnoj_kamery.Funkcii_frontalnoj_kamery;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Разрешение видео фронтальной камеры</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Razreshenie_video_frontalnoj_kamery'></div>
                                                    <script>
                                                        let wk_obj_Razreshenie_video_frontalnoj_kamery = $properties;
                                                        document.querySelector('.wk-data-Razreshenie_video_frontalnoj_kamery').innerHTML = wk_obj_Razreshenie_video_frontalnoj_kamery.Razreshenie_video_frontalnoj_kamery;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Диафрагма фронтальной камеры</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Diafragma_frontalnoj_kamery'></div>
                                                    <script>
                                                        let wk_obj_Diafragma_frontalnoj_kamery = $properties;
                                                        document.querySelector('.wk-data-Diafragma_frontalnoj_kamery').innerHTML = wk_obj_Diafragma_frontalnoj_kamery.Diafragma_frontalnoj_kamery;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab_content_model_4">
                                        <table class="wk-table is-fullwidth">
                                            <tr>
                                                <td>Разрешение видео</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Razreshenie_video'></div>
                                                    <script>
                                                        let wk_obj_Razreshenie_video = $properties;
                                                        document.querySelector('.wk-data-Razreshenie_video').innerHTML = wk_obj_Razreshenie_video.Razreshenie_video;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Зум (видео)</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Zum_video'></div>
                                                    <script>
                                                        let wk_obj_Zum_video = $properties;
                                                        document.querySelector('.wk-data-Zum_video').innerHTML = wk_obj_Zum_video.Zum_video;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Функции видео</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Funkcii_video'></div>
                                                    <script>
                                                        let wk_obj_Funkcii_video = $properties;
                                                        document.querySelector('.wk-data-Funkcii_video').innerHTML = wk_obj_Funkcii_video.Funkcii_video;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Разрешение замедленного видео</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Razreshenie_zamedlennogo_video'></div>
                                                    <script>
                                                        let wk_obj_Razreshenie_zamedlennogo_video = $properties;
                                                        document.querySelector('.wk-data-Razreshenie_zamedlennogo_video').innerHTML = wk_obj_Razreshenie_zamedlennogo_video.Razreshenie_zamedlennogo_video;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab_content_model_5">
                                        <table class="wk-table is-fullwidth">
                                            <tr>
                                                <td>Стандарт</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Standart'></div>
                                                    <script>
                                                        let wk_obj_Standart = $properties;
                                                        document.querySelector('.wk-data-Standart').innerHTML = wk_obj_Standart.Standart;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>SIM-карта</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-SIM_karta'></div>
                                                    <script>
                                                        let wk_obj_SIM_karta = $properties;
                                                        document.querySelector('.wk-data-SIM_karta').innerHTML = wk_obj_SIM_karta.SIM_karta;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Разъём</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Zaryadka'></div>
                                                    <script>
                                                        let wk_obj_Zaryadka = $properties;
                                                        document.querySelector('.wk-data-Zaryadka').innerHTML = wk_obj_Zaryadka.Zaryadka;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Интерфейсы</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Interfejsy'></div>
                                                    <script>
                                                        let wk_obj_Interfejsy = $properties;
                                                        document.querySelector('.wk-data-Interfejsy').innerHTML = wk_obj_Interfejsy.Interfejsy;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Спутниковая навигация</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Sputnikovaya_navigaciya'></div>
                                                    <script>
                                                        let wk_obj_Sputnikovaya_navigaciya = $properties;
                                                        document.querySelector('.wk-data-Sputnikovaya_navigaciya').innerHTML = wk_obj_Sputnikovaya_navigaciya.Sputnikovaya_navigaciya;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cистема A-GPS</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Cistema_A_GPS'></div>
                                                    <script>
                                                        let wk_obj_Cistema_A_GPS = $properties;
                                                        document.querySelector('.wk-data-Cistema_A_GPS').innerHTML = wk_obj_Cistema_A_GPS.Cistema_A_GPS;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab_content_model_6">
                                        <table class="wk-table is-fullwidth">
                                            <tr>
                                                <td>Процессор</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Processor'></div>
                                                    <script>
                                                        let wk_obj_Processor = $properties;
                                                        document.querySelector('.wk-data-Processor').innerHTML = wk_obj_Processor.Processor;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Объем встроенной памяти</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Obem_vstroennoj_pamyati'></div>
                                                    <script>
                                                        let wk_obj_Obem_vstroennoj_pamyati = $properties;
                                                        document.querySelector('.wk-data-Obem_vstroennoj_pamyati').innerHTML = wk_obj_Obem_vstroennoj_pamyati.Obem_vstroennoj_pamyati;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab_content_model_7">
                                        <table class="wk-table is-fullwidth">
                                            <tr>
                                                <td>Тип аккумулятора</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Tip_akkumulyatora'></div>
                                                    <script>
                                                        let wk_obj_Tip_akkumulyatora = $properties;
                                                        document.querySelector('.wk-data-Tip_akkumulyatora').innerHTML = wk_obj_Tip_akkumulyatora.Tip_akkumulyatora;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Аккумулятор</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Akkumulyator'></div>
                                                    <script>
                                                        let wk_obj_Akkumulyator = $properties;
                                                        document.querySelector('.wk-data-Akkumulyator').innerHTML = wk_obj_Akkumulyator.Akkumulyator;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Зарядка</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Zaryadka2'></div>
                                                    <script>
                                                        let wk_obj_Zaryadka2 = $properties;
                                                        document.querySelector('.wk-data-Zaryadka2').innerHTML = wk_obj_Zaryadka2.Zaryadka;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Время работы в режиме прослушивания музыки</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Vremya_raboty_v_rezhime_proslushivaniya_muzyki'>
                                                    </div>
                                                    <script>
                                                        let wk_obj_Vremya_raboty_v_rezhime_proslushivaniya_muzyki = $properties;
                                                        document.querySelector('.wk-data-Vremya_raboty_v_rezhime_proslushivaniya_muzyki').innerHTML = wk_obj_Vremya_raboty_v_rezhime_proslushivaniya_muzyki.Vremya_raboty_v_rezhime_proslushivaniya_muzyki;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Воспроизведение видео</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Vosproizvedenie_video'></div>
                                                    <script>
                                                        let wk_obj_Vosproizvedenie_video = $properties;
                                                        document.querySelector('.wk-data-Vosproizvedenie_video').innerHTML = wk_obj_Vosproizvedenie_video.Vosproizvedenie_video;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Проигрывание видео</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Razreshenie_video_frontalnoj_kamery2'></div>
                                                    <script>
                                                        let wk_obj_Razreshenie_video_frontalnoj_kamery2 = $properties;
                                                        document.querySelector('.wk-data-Razreshenie_video_frontalnoj_kamery2').innerHTML = wk_obj_Razreshenie_video_frontalnoj_kamery2.Razreshenie_video_frontalnoj_kamery;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-'></div>
                                                    <script>
                                                        let wk_obj_ = $properties;
                                                        document.querySelector('.wk-data-').innerHTML = wk_obj_.;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab_content_model_8">
                                        <table class="wk-table is-fullwidth">
                                            <tr>
                                                <td>Громкая связь (встроенный динамик)</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Gromkaya_svyaz_vstroennyj_dinamik'></div>
                                                    <script>
                                                        let wk_obj_Gromkaya_svyaz_vstroennyj_dinamik = $properties;
                                                        document.querySelector('.wk-data-Gromkaya_svyaz_vstroennyj_dinamik').innerHTML = wk_obj_Gromkaya_svyaz_vstroennyj_dinamik.Gromkaya_svyaz_vstroennyj_dinamik;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Управление</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Upravlenie'></div>
                                                    <script>
                                                        let wk_obj_Upravlenie = $properties;
                                                        document.querySelector('.wk-data-Upravlenie').innerHTML = wk_obj_Upravlenie.Upravlenie;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Уровень защиты от влаги</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Uroven_zashchity_ot_vlagi'></div>
                                                    <script>
                                                        let wk_obj_Uroven_zashchity_ot_vlagi = $properties;
                                                        document.querySelector('.wk-data-Uroven_zashchity_ot_vlagi').innerHTML = wk_obj_Uroven_zashchity_ot_vlagi.Uroven_zashchity_ot_vlagi;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Датчики</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Datchiki'></div>
                                                    <script>
                                                        let wk_obj_Datchiki = $properties;
                                                        document.querySelector('.wk-data-Datchiki').innerHTML = wk_obj_Datchiki.Datchiki;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Фонарик</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Fonarik'></div>
                                                    <script>
                                                        let wk_obj_Fonarik = $properties;
                                                        document.querySelector('.wk-data-Fonarik').innerHTML = wk_obj_Fonarik.Fonarik;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab_content_model_9">
                                        <table class="wk-table is-fullwidth">
                                            <tr>
                                                <td>Комплектация</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Komplektaciya'></div>
                                                    <script>
                                                        let wk_obj_Komplektaciya = $properties;
                                                        document.querySelector('.wk-data-Komplektaciya').innerHTML = wk_obj_Komplektaciya.Komplektaciya;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Особенности</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Osobennosti'></div>
                                                    <script>
                                                        let wk_obj_Osobennosti = $properties;
                                                        document.querySelector('.wk-data-Osobennosti').innerHTML = wk_obj_Osobennosti.Osobennosti;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Дата анонсирования</td>
                                                <td>
                                                    <?php
                                                    $conn = new mysqli(
                                                        "localhost",
                                                        "u2526134_wp500",
                                                        "d40c4MX84o0yIC16",
                                                        "u2526134_wp500"
                                                    );
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $properties = $row["properties"];
                                                        }
                                                        print_r("
                                                    <div class='wk-data-Data_anonsirovaniya'></div>
                                                    <script>
                                                        let wk_obj_Data_anonsirovaniya = $properties;
                                                        document.querySelector('.wk-data-Data_anonsirovaniya').innerHTML = wk_obj_Data_anonsirovaniya.Data_anonsirovaniya;
                                                    </script>
                                                    ");
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tovar_items__1__receiving">
                            <h2>Получение</h2>
                            <div class="receiving_header">
                                <ul class="ul_o_modeli scroll">
                                    <li><a role="button" class="a_content_receiving_1">Доставка</a></li>
                                    <li><a role="button" class="a_content_receiving_2">Оплата</a></li>
                                    <li><a role="button" class="a_content_receiving_3">Самовывоз</a></li>
                                    <li><a role="button" class="a_content_receiving_4">Гарантия</a></li>
                                </ul>
                            </div>
                            <div class="receiving_header__content">
                                <div class="receiving_header__content__item receiving_header__content__item__1">
                                    <ul class="ul_o_rx scroll">
                                        <li><a role="button" class="a_content_receiving_1_1 white">ПО МОСКВЕ В
                                                ПРЕДЕЛАХ
                                                МКАД</a></li>
                                        <li><a role="button" class="a_content_receiving_2_1 gray">ПО МОСКВЕ ЗА
                                                ПРЕДЕЛАМИ
                                                МКАД</a></li>
                                    </ul>
                                    <div class="receiving_content_item_0 receiving_content_item_1_1">
                                        <table class="wk-table is-fullwidth receiving_tbd">
                                            <tr>
                                                <td>Наличие товара:</td>
                                                <td>
                                                    <?php
                                                    $host = 'localhost';
                                                    $user = 'u2526134_wp500';
                                                    $db = 'u2526134_wp500';
                                                    $password = 'd40c4MX84o0yIC16';
                                                    $conn = new mysqli($host, $user, $password, $db);
                                                    $conn->query("SET NAMES 'utf8mb4'");
                                                    $id_get = $_GET['id_page'];
                                                    $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` =
                                                    $id_get");
                                                    if ($suc->num_rows > 0) {
                                                        while ($row = $suc->fetch_assoc()) {
                                                            $id = $row["id"];
                                                            $name = $row["name"];
                                                            $price = $row["price"];
                                                            $memory = $row["memory"];
                                                            $color = $row["color"];
                                                            $properties = $row["properties"];
                                                            $availability = $row["availability"];
                                                            echo($availability);
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Стоимость доставки:</td>
                                                <td>390 рублей</td>
                                            </tr>
                                            <tr>
                                                <td>Срок доставки:</td>
                                                <td>1-2 дня</td>
                                            </tr>
                                            <tr>
                                                <td>Интервал доставки:</td>
                                                <td>с 11:00 до 15:00, с 15:00 до 18:00, с 18:00 до 20:00</td>
                                            </tr>
                                        </table>
                                        <div>
                                            <h4>При покупке VIP комплекта бесплатно</h4>
                                            <p>Сроки и возможность доставки согласовываются с менеджером после
                                                оформления заказа. Курьер доставит заказ по указанному адресу в
                                                выбранный вами интервал времени, предварительно оповестив вас за
                                                один
                                                час.</p>
                                        </div>
                                    </div>
                                    <div class="receiving_content_item_0 receiving_content_item_1_2">
                                        <table class="wk-table is-fullwidth receiving_tbd">
                                            <tr>
                                                <td>
                                                    Стоимость доставки:
                                                </td>
                                                <td>390 рублей +
                                                    <b>50 рублей за каждый километр удаленности от МКАД</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Интервал доставки:</td>
                                                <td>с 11:00 до 15:00, с 15:00 до 18:00, с 18:00 до 20:00</td>
                                            </tr>
                                        </table>
                                        <div>
                                            <h4>При покупке VIP комплекта оплачиваются только километры за МКАД</h4>
                                            <p>Сроки и возможность доставки согласовываются с менеджером после
                                                оформления заказа. Курьер доставит заказ по указанному адресу в
                                                выбранный вами интервал времени, предварительно оповестив вас за
                                                один
                                                час.</p>
                                            <blockquote>
                                                <p>В целях обеспечения безопасности курьеров, при заказе от 30 000
                                                    рублей в квартиру жилого дома обязательно наличие
                                                    консьержа/охраны
                                                    или стационарного номера телефона, по которому мы сможем
                                                    связаться с
                                                    вами для подтверждения заказа.</p>
                                                <p>Курьерская доставка осуществляется по фактическому адресу в
                                                    квартиру
                                                    или офис. Передача товара в любых других местах (улица,
                                                    автомобиль,
                                                    метро, магазин, ресторан и т.п.) категорически запрещена.</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="receiving_header__content__item receiving_header__content__item__2">
                                    <ul class="ul_o_rx scroll">
                                        <li><a role="button" class="a_content_receiving_1_2 white">НАЛИЧНЫЙ
                                                РАСЧЕТ</a>
                                        </li>
                                        <li><a role="button" class="a_content_receiving_2_2 gray">ОПЛАТА ПО СЧЕТУ
                                                ДЛЯ
                                                ЮРИДИЧЕСКИХ ЛИЦ</a></li>
                                    </ul>
                                    <div class="receiving_content_item_0 receiving_content_item_2_1">
                                        <div>
                                            <p>
                                                Оплата производится наличными в рублях пунктах самовывоза или при
                                                передаче товара курьером. При оформлении заказа через корзину
                                                выберите
                                                платежную систему "Наличные".
                                            </p>
                                        </div>
                                    </div>
                                    <div class="receiving_content_item_0 receiving_content_item_2_2">
                                        <div>
                                            <b>Безналичная оплата по счету для юридических лиц.
                                                Оплата счета означает согласие с условиями поставки товара.
                                                Уведомление об оплате обязательно, в противном случае не
                                                гарантируется
                                                наличие товара на складе.</b>
                                        </div>
                                        <div>
                                            <blockquote>
                                                <p>Резервирование товара происходит по факту поступления денег на
                                                    расчетный счет. Внимание! Все цены на сайте указаны с учетом
                                                    скидки
                                                    для физ.лиц, при оплате по безналичному расчету данная скидка не
                                                    предоставляется! Итоговую стоимость уточняйте у менеджера при
                                                    подтверждении Вашей заявки.</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="receiving_header__content__item receiving_header__content__item__3">
                                    <div class="receiving_content_item_0">
                                        <table class="wk-table is-fullwidth receiving_tbd">
                                            <tr>
                                                <td>Адрес:</td>
                                                <td>Большая Грузинская ул.</td>
                                            </tr>
                                            <tr>
                                                <td>Режим работы</td>
                                                <td>10:00 до 21:00</td>
                                            </tr>
                                            <tr>
                                                <td>Телефон:</td>
                                                <td>+7 (499) 110-03-59</td>
                                            </tr>
                                        </table>
                                        <div>
                                            <h4>Для тех, кто решил приехать на автомобиле</h4>
                                            <p>Наш магазин находится рядом с третьим транспортным кольцом, между
                                                магистралями - Кутузовским проспектом, Шмитовским проездом и Большой
                                                Филевской улицей. Подъехать к магазину нужно со стороны улицы
                                                Багратионовский проезд. Ориентиром служит банк Русский Стандарт.
                                                Если
                                                ваш путь из центра, через Кутузовский проспект, то после Третьего
                                                транспортного кольца нужно, через улицу Генерала Ермолова и
                                                Неверовского, повернуть на улицу Барклая. Продолжайте движение по
                                                улице
                                                Барклая около 800 метров. На большом перекрестке, у светофора,
                                                сверните
                                                на улицу Багратионовский проезд. Двигайтесь по Багратионовскому
                                                проезду
                                                прямо, с правой стороны вы будите проезжать Сбербанк, кафе Якитория
                                                и
                                                офис Центрального банка, после него также справа вы увидите банк
                                                Русский
                                                Стандарт, прямо над ним находится наш магазин. Вход в магазин
                                                находится
                                                далее в арке справа. Вы можете припарковать свою машину далее в
                                                переди
                                                на платной парковке у ТЦ Филион, или же на внутренней парковке
                                                данного
                                                ТЦ.</p>
                                        </div>
                                        <div>
                                            <h4>Для тех кто решил приехать пешком</h4>
                                            <p>Ближайшей станцией столичного метрополитена к нашему магазину
                                                является
                                                "Фили". Выходите из первого вагона по направлению ИЗ центра.
                                                Поднимитесь
                                                по лестнице и после стеклянных дверей поверните налево к пешеходному
                                                переходу. Продолжайте движение до еще одного пешеходного перехода на
                                                противоположную сторону дороги. Затем идите все время прямо по улице
                                                Багратионовский проезд. После ТЦ "Филион" увидите еще одно здание.
                                                Идите
                                                вдоль него, пока не увидите крутящуюся дверь входа в бизнес центр,
                                                сразу
                                                на ней будет арка. Войдите в арку и справа увидите дверь.
                                                Поднимайтесь
                                                на второй этаж. Здесь находится вход в наш магазин Gadgetsell. Дорога
                                                от
                                                метро "Фили" до магазина займет примерно 10 минут.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="receiving_header__content__item receiving_header__content__item__4">
                                    <div class="receiving_content_item_0">
                                        <b>
                                            Уважаемые покупатели, гарантийный отдел магазина Gadgetsell располагается
                                            по
                                            адресу:
                                        </b>
                                        <table class="wk-table is-fullwidth receiving_tbd">
                                            <tr>
                                                <td>Адрес:</td>
                                                <td>Большая Грузинская ул.</td>
                                            </tr>
                                            <tr>
                                                <td>Режим работы</td>
                                                <td>10:00 до 21:00, Без выходных</td>
                                            </tr>
                                            <tr>
                                                <td>Телефон:</td>
                                                <td>+7 (499) 110-03-59</td>
                                            </tr>
                                        </table>
                                        <div>
                                            <blockquote>
                                                <p>
                                                    Обращаем ваше внимание,
                                                    что в выходные и праздничные дни
                                                    гарантийный отдел не работает
                                                </p>
                                            </blockquote>
                                        </div>
                                        <div class="bdiv_cont_1">
                                            <h4>Гарантийное обслуживание в сервисном центре</h4>
                                            <p>
                                                по новой технике — 1 Год с момента приобретения товара.
                                            </p>
                                            <p>по технике из разделов <b>УЦЕНКА</b> — 1 Месяц с момента приобретения
                                                товара.</p>
                                        </div>
                                        <div class="bdiv_cont_1">
                                            <h4>Возврат/обмен товара</h4>
                                            <p>
                                                В течении 14 дней с момента покупки, включая день покупки.
                                            </p>
                                            <p>Возврат денежных средств, либо обмен товара происходит только в том
                                                случае: если не нарушен внешний вид устройства, устройство не было
                                                активировано и не регистрировалось в службе AppStore, сохранен чек и
                                                товарная накладная.</p>
                                            <p>Хотим обратить особое внимание на то, что выбранный вами
                                                производитель, а
                                                не продавец закладывает в свою продукцию качество товара!</p>
                                        </div>
                                        <div class="bdiv_cont_1 bdiv_cont_1_1">
                                            <h4>Гарантийное обслуживание в магазине Gadgetsell.net</h4>
                                            <p>
                                                Продавец обязуется в течении гарантийного срока осуществлять
                                                гарантийный
                                                ремонт и обслуживание изделия.
                                            </p>
                                            <p>Гарантийное обслуживание не распространяется на повреждения,
                                                вызванные
                                                неправильным подключением, эксплуатацией в нештатном режиме, а также
                                                происшедшим вследствие действия сторонних обстоятельств (скачков
                                                напряжения, стихийных бедствий и т.д.).</p>
                                            <p>Гарантийное обслуживание не распространяется на механические дефекты
                                                и
                                                тепловые повреждения устройства. Повреждения процессора, материнской
                                                платы и т.д. вследствие «разгона» ГАРАНТИИ НЕ ПОДЛЕЖАТ.
                                            </p>
                                            <p>Выпадение точек экрана количеством не более 4-х не является
                                                существенным
                                                недостатком iPad, iPhone, MacBook, iMac и прочих аппаратов имеющих
                                                ЖК
                                                дисплей. В соответствии с Законом о защите прав потребителя
                                                позднейшая
                                                редакция постановления Правительства Российской Федерации № 55 от 19
                                                января 1998 г.</p>
                                            <p>«Перечень непродовольственных товаров надлежащего качества, не
                                                подлежащих
                                                возврату или обмену на аналогичный товар других размеров, формы,
                                                габарита, фасона, расцветки или комплектации» (с изменениями на 20
                                                октября 1998 г.).</p>
                                            <blockquote>
                                                <p class="no_b_p">МАГАЗИН НЕ ОБЯЗАН ПРИНИМАТЬ ОБРАТНО ИСПРАВНОЕ
                                                    ОБОРУДОВАНИЕ, ЕСЛИ ОНО
                                                    ПО КАКИМ-ЛИБО ПРИЧИНАМ НЕ ПОДОШЛО ПОКУПАТЕЛЮ.</p>
                                            </blockquote>
                                            <p>
                                                А так же гарантия не распространяется:
                                                <br>
                                                - При наличии в изделии следов попытки разбора, ремонта или
                                                вмешательства в устройство.
                                                <br>
                                                - При повреждении устройства или механическом воздействии на
                                                устройство.
                                                <br>
                                                - Если оригинальные заводские номера на устройство уничтожены,
                                                повреждены или имеют исправления.
                                            </p>
                                            <p>
                                                Причина возникновения дефектов определяют специалисты гарантийного
                                                отдела магазина. При не согласии с заключением может быть
                                                произведена
                                                независимая экспертиза в соответствии с законом о Защите прав
                                                потребителей.
                                            </p>
                                            <p>
                                                Гарантийное обслуживание мониторов, принтеров, сканеров и любого
                                                другого
                                                периферийного оборудования, гарантия на которое поддерживается
                                                производителем производится в специализированных сервисных центрах с
                                                момента покупки. Доставка оборудования на гарантийный ремонт
                                                осуществляется силами покупателя.
                                            </p>
                                            <p>
                                                Совершение покупки означает согласие покупателя с настоящими
                                                правилами.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tovar_items__1__similar">
                            <h2>Похожие товары</h2>
                            <div class="similar__content scroll">
                                <?php
                                $host = 'localhost';
                                $user = 'u2526134_wp500';
                                $db = 'u2526134_wp500';
                                $password = 'd40c4MX84o0yIC16';
                                $conn = new mysqli($host, $user, $password, $db);
                                $conn->query("SET NAMES 'utf8mb4'");
                                $suc = $conn->query("SELECT * FROM `telefony_apple` order by RAND() LIMIT 5");
                                if ($suc->num_rows > 0) {
                                    while ($row = $suc->fetch_assoc()) {
                                        $id = $row["id"];
                                        $name = $row["name"];
                                        $price = $row["price"];
                                        $photo_1 = $row["photo_1"];
                                        $result_card = "<div class='item__cards__block' style='min-width:250px'
                                    onclick=\"window.open('/iphone/page?id_page=$id', '_parent' )\">
                                    <div class='item__cards__img'
                                        style='width: 100%;background-size:cover;height: 225px;text-align: center;background-position: center;background-image: url(https://store77.net$photo_1);'>
                                    </div>
                                    <div class='item__cards__text'>$name</div>
                                    <div class='item__cards__price'>$price ₽</div><button class='item__cards__btn'>В
                                        корзину</button>
                                </div>";
                                        print_r($result_card);
                                    }
                                } else {
                                    echo("Товаров не найдено!");
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tovar_items__1__similar">
                            <h2>Аксессуары</h2>
                            <div class="similar__content scroll">
                                <?php
                                $host = 'localhost';
                                $user = 'u2526134_wp500';
                                $db = 'u2526134_wp500';
                                $password = 'd40c4MX84o0yIC16';
                                $conn = new mysqli($host, $user, $password, $db);
                                $conn->query("SET NAMES 'utf8mb4'");
                                $suc = $conn->query("SELECT * FROM `aksessuary` order by RAND() LIMIT 5");
                                if ($suc->num_rows > 0) {
                                    while ($row = $suc->fetch_assoc()) {
                                        $id = $row["id"];
                                        $name = $row["name"];
                                        $price = $row["price"];
                                        $photo_1 = $row["photo_1"];
                                        $result_card = "<div class='item__cards__block' style='min-width:250px'
                                    onclick=\"window.open('/iphone/page?id_page=$id', '_parent' )\">
                                    <div class='item__cards__img'
                                        style='width: 100%;background-size:cover;height: 225px;text-align: center;background-position: center;background-image: url(https://store77.net$photo_1);'>
                                    </div>
                                    <div class='item__cards__text'>$name</div>
                                    <div class='item__cards__price'>$price ₽</div><button class='item__cards__btn'>В
                                        корзину</button>
                                </div>";
                                        print_r($result_card);
                                    }
                                } else {
                                    echo("Товаров не найдено!");
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    let a_content_receiving_1_1 = document.querySelector(".a_content_receiving_1_1");
                    let a_content_receiving_2_1 = document.querySelector(".a_content_receiving_2_1");
                    let receiving_content_item_1_1 = document.querySelector(".receiving_content_item_1_1");
                    let receiving_content_item_1_2 = document.querySelector(".receiving_content_item_1_2");
                    let a_content_receiving_1_2 = document.querySelector(".a_content_receiving_1_2");
                    let a_content_receiving_2_2 = document.querySelector(".a_content_receiving_2_2");
                    let receiving_content_item_2_1 = document.querySelector(".receiving_content_item_2_1");
                    let receiving_content_item_2_2 = document.querySelector(".receiving_content_item_2_2");
                    a_content_receiving_1_1.addEventListener("click", () => {
                        a_content_receiving_1_1.classList.replace("gray", "white");
                        a_content_receiving_2_1.classList.replace("white", "gray");
                        receiving_content_item_1_1.style.display = "block";
                        receiving_content_item_1_2.style.display = "none";
                    });
                    a_content_receiving_2_1.addEventListener("click", () => {
                        a_content_receiving_1_1.classList.replace("white", "gray");
                        a_content_receiving_2_1.classList.replace("gray", "white");
                        receiving_content_item_1_1.style.display = "none";
                        receiving_content_item_1_2.style.display = "block";
                    });
                    a_content_receiving_1_2.addEventListener("click", () => {
                        a_content_receiving_1_2.classList.replace("gray", "white");
                        a_content_receiving_2_2.classList.replace("white", "gray");
                        receiving_content_item_2_1.style.display = "block";
                        receiving_content_item_2_2.style.display = "none";
                    });
                    a_content_receiving_2_2.addEventListener("click", () => {
                        a_content_receiving_1_2.classList.replace("white", "gray");
                        a_content_receiving_2_2.classList.replace("gray", "white");
                        receiving_content_item_2_1.style.display = "none";
                        receiving_content_item_2_2.style.display = "block";
                    });
                </script>
                <div class="main_box_tovar_items__2">
                    <div class="main_box_tovar_items__2__1">
                        Код товара: 8-1520001
                    </div>
                    <div class="main_box_tovar_items__2__2">
                        <h2>
                            <?php
                            $host = 'localhost';
                            $user = 'u2526134_wp500';
                            $db = 'u2526134_wp500';
                            $password = 'd40c4MX84o0yIC16';
                            $conn = new mysqli($host, $user, $password, $db);
                            $conn->query("SET NAMES 'utf8mb4'");
                            $id_get = $_GET['id_page'];
                            $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` = $id_get");
                            if ($suc->num_rows > 0) {
                                while ($row = $suc->fetch_assoc()) {
                                    $id = $row["id"];
                                    $name = $row["name"];
                                    $price = $row["price"];
                                    $memory = $row["memory"];
                                    $color = $row["color"];
                                    $properties = $row["properties"];
                                    $availability = $row["availability"];
                                    echo($name);
                                }
                            }
                            ?>
                        </h2>
                    </div>
                    <div class="main_box_tovar_items__2__3">
                        Цвет <span class="tovar_color tovar_color__1"></span><span
                                class="tovar_color tovar_color__2"></span><span
                                class="tovar_color tovar_color__3"></span>
                    </div>
                    <div class="main_box_tovar_items__2__45__iii">
                        <div class="main_box_tovar_items__2__4">
                            <div class="main_box_tovar_items__2__4__price">
                                    <span>
                                        <?php
                                        $host = 'localhost';
                                        $user = 'u2526134_wp500';
                                        $db = 'u2526134_wp500';
                                        $password = 'd40c4MX84o0yIC16';
                                        $conn = new mysqli($host, $user, $password, $db);
                                        $conn->query("SET NAMES 'utf8mb4'");
                                        $id_get = $_GET['id_page'];
                                        $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` = $id_get");
                                        if ($suc->num_rows > 0) {
                                            while ($row = $suc->fetch_assoc()) {
                                                $id = $row["id"];
                                                $name = $row["name"];
                                                $price = $row["price"];
                                                $memory = $row["memory"];
                                                $color = $row["color"];
                                                $properties = $row["properties"];
                                                $availability = $row["availability"];
                                                echo($price);
                                                echo(" ₽");
                                            }
                                        }
                                        ?>
                                    </span>
                                <!-- <span>XXXXX — бонусов</span> -->
                            </div>
                            <div class="main_box_tovar_items__2__4__btns">
                                <button>В КОРЗИНУ</button>
                                <button>КУПИТЬ В 1 КЛИК</button>
                            </div>
                        </div>
                        <div class="main_box_tovar_items__2__5">
                            <table class="tovar_table wk-table is-line is-fullwidth">
                                <tr>
                                    <td>Наличие:</td>
                                    <td>
                                        <?php
                                        $host = 'localhost';
                                        $user = 'u2526134_wp500';
                                        $db = 'u2526134_wp500';
                                        $password = 'd40c4MX84o0yIC16';
                                        $conn = new mysqli($host, $user, $password, $db);
                                        $conn->query("SET NAMES 'utf8mb4'");
                                        $id_get = $_GET['id_page'];
                                        $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` = $id_get");
                                        if ($suc->num_rows > 0) {
                                            while ($row = $suc->fetch_assoc()) {
                                                $id = $row["id"];
                                                $name = $row["name"];
                                                $price = $row["price"];
                                                $memory = $row["memory"];
                                                $color = $row["color"];
                                                $properties = $row["properties"];
                                                $availability = $row["availability"];
                                                echo($availability);
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Гарантия:</td>
                                    <td>от магазина</td>
                                </tr>
                                <tr>
                                    <td>Доставка:</td>
                                    <td>490 руб. | 1-2 дня</td>
                                </tr>
                                <tr>
                                    <td>Самовывоз:</td>
                                    <td>1-2 дня | м. Фили</td>
                                </tr>
                                <tr>
                                    <td>Срок службы:</td>
                                    <td>3 года</td>
                                </tr>
                                <tr>
                                    <td>Страна изготовитель:</td>
                                    <td>Китай</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<script>
    let a_content_receiving_1_1 = document.querySelector(".a_content_receiving_1_1");
    let a_content_receiving_2_1 = document.querySelector(".a_content_receiving_2_1");
    let receiving_content_item_1_1 = document.querySelector(".receiving_content_item_1_1");
    let receiving_content_item_1_2 = document.querySelector(".receiving_content_item_1_2");
    let a_content_receiving_1_2 = document.querySelector(".a_content_receiving_1_2");
    let a_content_receiving_2_2 = document.querySelector(".a_content_receiving_2_2");
    let receiving_content_item_2_1 = document.querySelector(".receiving_content_item_2_1");
    let receiving_content_item_2_2 = document.querySelector(".receiving_content_item_2_2");
    a_content_receiving_1_1.addEventListener("click", () => {
        a_content_receiving_1_1.classList.replace("gray", "white");
        a_content_receiving_2_1.classList.replace("white", "gray");
        receiving_content_item_1_1.style.display = "block";
        receiving_content_item_1_2.style.display = "none";
    });
    a_content_receiving_2_1.addEventListener("click", () => {
        a_content_receiving_1_1.classList.replace("white", "gray");
        a_content_receiving_2_1.classList.replace("gray", "white");
        receiving_content_item_1_1.style.display = "none";
        receiving_content_item_1_2.style.display = "block";
    });
    a_content_receiving_1_2.addEventListener("click", () => {
        a_content_receiving_1_2.classList.replace("gray", "white");
        a_content_receiving_2_2.classList.replace("white", "gray");
        receiving_content_item_2_1.style.display = "block";
        receiving_content_item_2_2.style.display = "none";
    });
    a_content_receiving_2_2.addEventListener("click", () => {
        a_content_receiving_1_2.classList.replace("white", "gray");
        a_content_receiving_2_2.classList.replace("gray", "white");
        receiving_content_item_2_1.style.display = "none";
        receiving_content_item_2_2.style.display = "block";
    });
</script>
<div class="main_box_tovar_items__2 none">
    <div class="main_box_tovar_items__2__1">
        Код товара: 8-1520001
    </div>
    <div class="main_box_tovar_items__2__2">
        <h2>
            <?php
            $host = 'localhost';
            $user = 'u2526134_wp500';
            $db = 'u2526134_wp500';
            $password = 'd40c4MX84o0yIC16';
            $conn = new mysqli($host, $user, $password, $db);
            $conn->query("SET NAMES 'utf8mb4'");
            $id_get = $_GET['id_page'];
            $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` = $id_get");
            if ($suc->num_rows > 0) {
                while ($row = $suc->fetch_assoc()) {
                    $id = $row["id"];
                    $name = $row["name"];
                    $price = $row["price"];
                    $memory = $row["memory"];
                    $color = $row["color"];
                    $properties = $row["properties"];
                    $availability = $row["availability"];
                    echo($name);
                }
            }
            ?>
        </h2>
    </div>
    <div class="main_box_tovar_items__2__3">
        Цвет <span class="tovar_color tovar_color__1"></span><span class="tovar_color tovar_color__2"></span><span
                class="tovar_color tovar_color__3"></span>
    </div>
    <div class="main_box_tovar_items__2__45__iii">
        <div class="main_box_tovar_items__2__4">
            <div class="main_box_tovar_items__2__4__price">
                    <span>
                        <?php
                        $host = 'localhost';
                        $user = 'u2526134_wp500';
                        $db = 'u2526134_wp500';
                        $password = 'd40c4MX84o0yIC16';
                        $conn = new mysqli($host, $user, $password, $db);
                        $conn->query("SET NAMES 'utf8mb4'");
                        $id_get = $_GET['id_page'];
                        $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` = $id_get");
                        if ($suc->num_rows > 0) {
                            while ($row = $suc->fetch_assoc()) {
                                $id = $row["id"];
                                $name = $row["name"];
                                $price = $row["price"];
                                $memory = $row["memory"];
                                $color = $row["color"];
                                $properties = $row["properties"];
                                $availability = $row["availability"];
                                echo($price);
                                echo(" ₽");
                            }
                        }
                        ?>
                    </span>
                <!-- <span>XXXXX— бонусов</span> -->
            </div>
            <div class="main_box_tovar_items__2__4__btns">
                <button>В КОРЗИНУ</button>
                <button>КУПИТЬ В 1 КЛИК</button>
            </div>
        </div>
        <div class="main_box_tovar_items__2__5">
            <table class="tovar_table wk-table is-line is-fullwidth">
                <tr>
                    <td>Наличие:</td>
                    <td>
                        <?php
                        $host = 'localhost';
                        $user = 'u2526134_wp500';
                        $db = 'u2526134_wp500';
                        $password = 'd40c4MX84o0yIC16';
                        $conn = new mysqli($host, $user, $password, $db);
                        $conn->query("SET NAMES 'utf8mb4'");
                        $id_get = $_GET['id_page'];
                        $suc = $conn->query("SELECT * FROM `telefony_apple` WHERE `id` = $id_get");
                        if ($suc->num_rows > 0) {
                            while ($row = $suc->fetch_assoc()) {
                                $id = $row["id"];
                                $name = $row["name"];
                                $price = $row["price"];
                                $memory = $row["memory"];
                                $color = $row["color"];
                                $properties = $row["properties"];
                                $availability = $row["availability"];
                                echo($availability);
                            }
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Гарантия:</td>
                    <td>от магазина</td>
                </tr>
                <tr>
                    <td>Доставка:</td>
                    <td>490 руб. | 1-2 дня</td>
                </tr>
                <tr>
                    <td>Самовывоз:</td>
                    <td>1-2 дня | м. Фили</td>
                </tr>
                <tr>
                    <td>Срок службы:</td>
                    <td>3 года</td>
                </tr>
                <tr>
                    <td>Страна изготовитель:</td>
                    <td>Китай</td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</main>
<script>
    let a_content_model_1 = document.querySelector(".a_content_model_1");
    let a_content_model_2 = document.querySelector(".a_content_model_2");
    let a_content_model_3 = document.querySelector(".a_content_model_3");
    let a_content_model_4 = document.querySelector(".a_content_model_4");
    let a_content_model_5 = document.querySelector(".a_content_model_5");
    let a_content_model_6 = document.querySelector(".a_content_model_6");
    let a_content_model_7 = document.querySelector(".a_content_model_7");
    let a_content_model_8 = document.querySelector(".a_content_model_8");
    let a_content_model_9 = document.querySelector(".a_content_model_9");
    let tab_content_model_1 = document.querySelector(".tab_content_model_1");
    let tab_content_model_2 = document.querySelector(".tab_content_model_2");
    let tab_content_model_3 = document.querySelector(".tab_content_model_3");
    let tab_content_model_4 = document.querySelector(".tab_content_model_4");
    let tab_content_model_5 = document.querySelector(".tab_content_model_5");
    let tab_content_model_6 = document.querySelector(".tab_content_model_6");
    let tab_content_model_7 = document.querySelector(".tab_content_model_7");
    let tab_content_model_8 = document.querySelector(".tab_content_model_8");
    let tab_content_model_9 = document.querySelector(".tab_content_model_9");
    a_content_model_1.addEventListener("click", () => {
        tab_content_model_1.style.display = "block";
        tab_content_model_2.style.display = "none";
        tab_content_model_3.style.display = "none";
        tab_content_model_4.style.display = "none";
        tab_content_model_5.style.display = "none";
        tab_content_model_6.style.display = "none";
        tab_content_model_7.style.display = "none";
        tab_content_model_8.style.display = "none";
        tab_content_model_9.style.display = "none";
        a_content_model_1.style.color = "black";
        a_content_model_2.style.color = "gray";
        a_content_model_3.style.color = "gray";
        a_content_model_4.style.color = "gray";
        a_content_model_5.style.color = "gray";
        a_content_model_6.style.color = "gray";
        a_content_model_7.style.color = "gray";
        a_content_model_8.style.color = "gray";
        a_content_model_9.style.color = "gray";
    });
    a_content_model_2.addEventListener("click", () => {
        tab_content_model_1.style.display = "none";
        tab_content_model_2.style.display = "block";
        tab_content_model_3.style.display = "none";
        tab_content_model_4.style.display = "none";
        tab_content_model_5.style.display = "none";
        tab_content_model_6.style.display = "none";
        tab_content_model_7.style.display = "none";
        tab_content_model_8.style.display = "none";
        tab_content_model_9.style.display = "none";
        a_content_model_1.style.color = "gray";
        a_content_model_2.style.color = "black";
        a_content_model_3.style.color = "gray";
        a_content_model_4.style.color = "gray";
        a_content_model_5.style.color = "gray";
        a_content_model_6.style.color = "gray";
        a_content_model_7.style.color = "gray";
        a_content_model_8.style.color = "gray";
        a_content_model_9.style.color = "gray";
    });
    a_content_model_3.addEventListener("click", () => {
        tab_content_model_1.style.display = "none";
        tab_content_model_2.style.display = "none";
        tab_content_model_3.style.display = "block";
        tab_content_model_4.style.display = "none";
        tab_content_model_5.style.display = "none";
        tab_content_model_6.style.display = "none";
        tab_content_model_7.style.display = "none";
        tab_content_model_8.style.display = "none";
        tab_content_model_9.style.display = "none";
        a_content_model_1.style.color = "gray";
        a_content_model_2.style.color = "gray";
        a_content_model_3.style.color = "black";
        a_content_model_4.style.color = "gray";
        a_content_model_5.style.color = "gray";
        a_content_model_6.style.color = "gray";
        a_content_model_7.style.color = "gray";
        a_content_model_8.style.color = "gray";
        a_content_model_9.style.color = "gray";
    });
    a_content_model_4.addEventListener("click", () => {
        tab_content_model_1.style.display = "none";
        tab_content_model_2.style.display = "none";
        tab_content_model_3.style.display = "none";
        tab_content_model_4.style.display = "block";
        tab_content_model_5.style.display = "none";
        tab_content_model_6.style.display = "none";
        tab_content_model_7.style.display = "none";
        tab_content_model_8.style.display = "none";
        tab_content_model_9.style.display = "none";
        a_content_model_1.style.color = "gray";
        a_content_model_2.style.color = "gray";
        a_content_model_3.style.color = "gray";
        a_content_model_4.style.color = "black";
        a_content_model_5.style.color = "gray";
        a_content_model_6.style.color = "gray";
        a_content_model_7.style.color = "gray";
        a_content_model_8.style.color = "gray";
        a_content_model_9.style.color = "gray";
    });
    a_content_model_5.addEventListener("click", () => {
        tab_content_model_1.style.display = "none";
        tab_content_model_2.style.display = "none";
        tab_content_model_3.style.display = "none";
        tab_content_model_4.style.display = "none";
        tab_content_model_5.style.display = "block";
        tab_content_model_6.style.display = "none";
        tab_content_model_7.style.display = "none";
        tab_content_model_8.style.display = "none";
        tab_content_model_9.style.display = "none";
        a_content_model_1.style.color = "gray";
        a_content_model_2.style.color = "gray";
        a_content_model_3.style.color = "gray";
        a_content_model_4.style.color = "gray";
        a_content_model_5.style.color = "black";
        a_content_model_6.style.color = "gray";
        a_content_model_7.style.color = "gray";
        a_content_model_8.style.color = "gray";
        a_content_model_9.style.color = "gray";
    });
    a_content_model_6.addEventListener("click", () => {
        tab_content_model_1.style.display = "none";
        tab_content_model_2.style.display = "none";
        tab_content_model_3.style.display = "none";
        tab_content_model_4.style.display = "none";
        tab_content_model_5.style.display = "none";
        tab_content_model_6.style.display = "block";
        tab_content_model_7.style.display = "none";
        tab_content_model_8.style.display = "none";
        tab_content_model_9.style.display = "none";
        a_content_model_1.style.color = "#gray";
        a_content_model_2.style.color = "gray";
        a_content_model_3.style.color = "gray";
        a_content_model_4.style.color = "gray";
        a_content_model_5.style.color = "gray";
        a_content_model_6.style.color = "black";
        a_content_model_7.style.color = "gray";
        a_content_model_8.style.color = "gray";
        a_content_model_9.style.color = "gray";
    });
    a_content_model_7.addEventListener("click", () => {
        tab_content_model_1.style.display = "none";
        tab_content_model_2.style.display = "none";
        tab_content_model_3.style.display = "none";
        tab_content_model_4.style.display = "none";
        tab_content_model_5.style.display = "none";
        tab_content_model_6.style.display = "none";
        tab_content_model_7.style.display = "block";
        tab_content_model_8.style.display = "none";
        tab_content_model_9.style.display = "none";
        a_content_model_1.style.color = "gray";
        a_content_model_2.style.color = "gray";
        a_content_model_3.style.color = "gray";
        a_content_model_4.style.color = "gray";
        a_content_model_5.style.color = "gray";
        a_content_model_6.style.color = "gray";
        a_content_model_7.style.color = "black";
        a_content_model_8.style.color = "gray";
        a_content_model_9.style.color = "gray";
    });
    a_content_model_8.addEventListener("click", () => {
        tab_content_model_1.style.display = "none";
        tab_content_model_2.style.display = "none";
        tab_content_model_3.style.display = "none";
        tab_content_model_4.style.display = "none";
        tab_content_model_5.style.display = "none";
        tab_content_model_6.style.display = "none";
        tab_content_model_7.style.display = "none";
        tab_content_model_8.style.display = "block";
        tab_content_model_9.style.display = "none";
        a_content_model_1.style.color = "gray";
        a_content_model_2.style.color = "gray";
        a_content_model_3.style.color = "gray";
        a_content_model_4.style.color = "gray";
        a_content_model_5.style.color = "gray";
        a_content_model_6.style.color = "gray";
        a_content_model_7.style.color = "gray";
        a_content_model_8.style.color = "black";
        a_content_model_9.style.color = "gray";
    });
    a_content_model_9.addEventListener("click", () => {
        tab_content_model_1.style.display = "none";
        tab_content_model_2.style.display = "none";
        tab_content_model_3.style.display = "none";
        tab_content_model_4.style.display = "none";
        tab_content_model_5.style.display = "none";
        tab_content_model_6.style.display = "none";
        tab_content_model_7.style.display = "none";
        tab_content_model_8.style.display = "none";
        tab_content_model_9.style.display = "block";
        a_content_model_1.style.color = "gray";
        a_content_model_2.style.color = "gray";
        a_content_model_3.style.color = "gray";
        a_content_model_4.style.color = "gray";
        a_content_model_5.style.color = "gray";
        a_content_model_6.style.color = "gray";
        a_content_model_7.style.color = "gray";
        a_content_model_8.style.color = "gray";
        a_content_model_9.style.color = "black";
    });
    /* let a_content_complect_1 = document.querySelector(".a_content_complect_1");
     let a_content_complect_2 = document.querySelector(".a_content_complect_2");
     let a_content_complect_3 = document.querySelector(".a_content_complect_3");
     let complect_header__content__item__1 = document.querySelector(".complect_header__content__item__1");
     let complect_header__content__item__2 = document.querySelector(".complect_header__content__item__2");
     let complect_header__content__item__3 = document.querySelector(".complect_header__content__item__3");
     let complect_price_s1 = document.querySelector(".complect_price_s1");
     let complect_price_s2 = document.querySelector(".complect_price_s2");
     a_content_complect_1.addEventListener("click", () => {
         complect_header__content__item__1.style.display = "flex";
         complect_header__content__item__2.style.display = "flex";
         complect_header__content__item__3.style.display = "flex";
         a_content_complect_1.style.color = "black";
         a_content_complect_2.style.color = "gray";
         a_content_complect_3.style.color = "gray";
         complect_price_s1.textContent = "789 Р";
         complect_price_s2.textContent = "87 461 Р";
     });
     a_content_complect_2.addEventListener("click", () => {
         complect_header__content__item__1.style.display = "flex";
         complect_header__content__item__2.style.display = "flex";
         complect_header__content__item__3.style.display = "none";
         a_content_complect_1.style.color = "gray";
         a_content_complect_2.style.color = "black";
         a_content_complect_3.style.color = "gray";
         complect_price_s1.textContent = "549 Р";
         complect_price_s2.textContent = "82 911 Р";
     });
     a_content_complect_3.addEventListener("click", () => {
         complect_header__content__item__1.style.display = "flex";
         complect_header__content__item__2.style.display = "none";
         complect_header__content__item__3.style.display = "none";
         a_content_complect_1.style.color = "gray";
         a_content_complect_2.style.color = "gray";
         a_content_complect_3.style.color = "black";
         complect_price_s1.textContent = "149 Р";
         complect_price_s2.textContent = "75 321 Р";
     });*/
    let a_content_receiving_1 = document.querySelector(".a_content_receiving_1");
    let a_content_receiving_2 = document.querySelector(".a_content_receiving_2");
    let a_content_receiving_3 = document.querySelector(".a_content_receiving_3");
    let a_content_receiving_4 = document.querySelector(".a_content_receiving_4");
    let receiving_header__content__item__1 = document.querySelector(".receiving_header__content__item__1");
    let receiving_header__content__item__2 = document.querySelector(".receiving_header__content__item__2");
    let receiving_header__content__item__3 = document.querySelector(".receiving_header__content__item__3");
    let receiving_header__content__item__4 = document.querySelector(".receiving_header__content__item__4");
    a_content_receiving_1.addEventListener("click", () => {
        receiving_header__content__item__1.style.display = "block";
        receiving_header__content__item__2.style.display = "none";
        receiving_header__content__item__3.style.display = "none";
        receiving_header__content__item__4.style.display = "none";
        a_content_receiving_1.style.color = "black";
        a_content_receiving_2.style.color = "gray";
        a_content_receiving_3.style.color = "gray";
        a_content_receiving_4.style.color = "gray";
    });
    a_content_receiving_2.addEventListener("click", () => {
        receiving_header__content__item__1.style.display = "none";
        receiving_header__content__item__2.style.display = "block";
        receiving_header__content__item__3.style.display = "none";
        receiving_header__content__item__4.style.display = "none";
        a_content_receiving_1.style.color = "gray";
        a_content_receiving_2.style.color = "black";
        a_content_receiving_3.style.color = "gray";
        a_content_receiving_4.style.color = "gray";
    });
    a_content_receiving_3.addEventListener("click", () => {
        receiving_header__content__item__1.style.display = "none";
        receiving_header__content__item__2.style.display = "none";
        receiving_header__content__item__3.style.display = "block";
        receiving_header__content__item__4.style.display = "none";
        a_content_receiving_1.style.color = "gray";
        a_content_receiving_2.style.color = "gray";
        a_content_receiving_3.style.color = "black";
        a_content_receiving_4.style.color = "gray";
    });
    a_content_receiving_4.addEventListener("click", () => {
        receiving_header__content__item__1.style.display = "none";
        receiving_header__content__item__2.style.display = "none";
        receiving_header__content__item__3.style.display = "none";
        receiving_header__content__item__4.style.display = "block";
        a_content_receiving_1.style.color = "gray";
        a_content_receiving_2.style.color = "gray";
        a_content_receiving_3.style.color = "gray";
        a_content_receiving_4.style.color = "black";
    });
</script>
<?php require("./components/footer.php"); ?>
</body>

</html>