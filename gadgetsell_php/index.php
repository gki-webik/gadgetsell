<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Интернет-магазин техники Apple — гаджеты и электроника по низким ценам в Москве</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <?php require($_SERVER["DOCUMENT_ROOT"] . "/components/header.php"); ?>
    <main>
        <div class="main_box_big">
            <h1>Интернет-магазин оригинальной <br> техники Apple</h1>
            <div class="main_blocks">
                <div class="main_blocks_div div1" onclick="window.open('/iphone/iphone-15-pro-max', '_parent')">
                    <div class="main_blocks_div__header">НОВИНКА!</div>
                    <div class="main_blocks_div__h1 v1">iPhone 15 Pro | Pro Max</div>
                    <div class="main_blocks_div__h2">Титановый. Мощный. Профессиональный.</div>
                    <img src="./assets/images/img_1.png" class="main_blocks_div__img img_1" alt="">
                </div>
                <div class="main_blocks_div div2" onclick="window.open('/mac/macbook-m3', '_parent')">
                    <div class="main_blocks_div__header">НОВИНКА!</div>
                    <div class="main_blocks_div__h1 v1">MacBook M3</div>
                    <div class="main_blocks_div__h2">Процессор М3. Неудержимая мощь.</div>
                    <img src="./assets/images/img_2.png" class="main_blocks_div__img img_2" alt="">
                </div>
                <div class="main_blocks_div div3" onclick="window.open('/watch/', '_parent')">
                    <div class="main_blocks_div__header">НОВИНКА!</div>
                    <div class="main_blocks_div__h1">Apple Watch Ultra 2</div>
                    <div class="main_blocks_div__h2">Новый уровень приключений.</div>
                    <img src="./assets/images/img_3.png" class="main_blocks_div__img img_3" alt="">
                </div>
                <div class="main_blocks_div div4" onclick="window.open('/iphone/iphone-15', '_parent')">
                    <div class="main_blocks_div__header">НОВИНКА!</div>
                    <div class="main_blocks_div__h1">iPhone 15</div>
                    <div class="main_blocks_div__h2">Новая камера. Новый дизайн.</div>
                    <img src="./assets/images/img_4.png" class="main_blocks_div__img img_4" alt="">
                </div>
                <div class="main_blocks_div div5" onclick="window.open('/watch/', '_parent')">
                    <div class="main_blocks_div__header">НОВИНКА!</div>
                    <div class="main_blocks_div__h1">Apple Watch Series 9</div>
                    <img src="./assets/images/img_5.png" class="main_blocks_div__img img_5" alt="">
                </div>
                <div class="main_blocks_div div6" onclick="window.open('/catalog', '_parent')">
                    <div class="main_blocks_div__header">КАТАЛОГ</div>
                    <div class="main_blocks_div__h1">Все устройства</div>
                </div>
            </div>
        </div>
        <div class="catalog">
            <div class="catalog_box scroll scroll_hidden">
                <div class="catalog_item" onclick="window.open('/iphone', '_parent')">
                    <div class="catalog_item__img img_1"></div>
                    <div class="catalog_item__text">iPhone</div>
                </div>
                <div class="catalog_item" onclick="window.open('', '_parent')">
                    <div class="catalog_item__img img_2"></div>
                    <div class="catalog_item__text">Mac</div>
                </div>
                <div class="catalog_item" onclick="window.open('', '_parent')">
                    <div class="catalog_item__img img_3"></div>
                    <div class="catalog_item__text">iPad</div>
                </div>
                <div class="catalog_item" onclick="window.open('', '_parent')">
                    <div class="catalog_item__img img_4"></div>
                    <div class="catalog_item__text">Apple Watch</div>
                </div>
                <div class="catalog_item" onclick="window.open('', '_parent')">
                    <div class="catalog_item__img img_5"></div>
                    <div class="catalog_item__text">AirPods</div>
                </div>
                <div class="catalog_item" onclick="window.open('', '_parent')">
                    <div class="catalog_item__img img_6"></div>
                    <div class="catalog_item__text">Аксессуары</div>
                </div>
                <div class="catalog_item" onclick="window.open('', '_parent')">
                    <div class="catalog_item__img img_7"></div>
                    <div class="catalog_item__text">AirTag</div>
                </div>
                <div class="catalog_item" onclick="window.open('', '_parent')">
                    <div class="catalog_item__img img_8"></div>
                    <div class="catalog_item__text">HomePod</div>
                </div>
                <div class="catalog_item" onclick="window.open('', '_parent')">
                    <div class="catalog_item__img img_9"></div>
                    <div class="catalog_item__text">Apple TV</div>
                </div>
            </div>
        </div>
        <div class="catalog_info">
            <div class="catalog_info_box">
                <div class="catalog_info_box__item">
                    <img src="./assets/images/img_catalog_ingo_img_1.svg" alt="">
                    Удобная доставка
                </div>
                <div class="catalog_info_box__item">
                    <img src="./assets/images/img_catalog_ingo_img_2.svg" alt="">
                    Trade in и сервис
                </div>
                <div class="catalog_info_box__item">
                    <img src="./assets/images/img_catalog_ingo_img_3.svg" alt="">
                    Выгодные цены на гаджеты
                </div>
                <div class="catalog_info_box__item">
                    <img src="./assets/images/img_catalog_ingo_img_4.svg" alt="">
                    Быстрый обмен и возврат
                </div>
            </div>
        </div>
    </main>
    <?php require($_SERVER["DOCUMENT_ROOT"] . "/components/footer.php"); ?>
</body>

</html>