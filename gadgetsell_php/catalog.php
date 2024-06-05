<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталог</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <?php require($_SERVER["DOCUMENT_ROOT"] . "/components/header.php"); ?>
    <main>
        <div class="kroshka_box">
            <div class="kroshka">
                <a href="/">Главная</a> / <a href="/catalog" class="a_kroshka_active">Каталог</a>
            </div>
        </div>
        <div class="main_box_big">
            <div class="catalog">
                <div class="catalog_box scroll scroll_hidden">
                    <div class="catalog_item" onclick="window.open('/iphone', '_parent')">
                        <div class="catalog_item__img img_1"></div>
                        <div class="catalog_item__text">iPhone</div>
                    </div>
                    <div class="catalog_item" onclick="window.open('/mac', '_parent')">
                        <div class="catalog_item__img img_2"></div>
                        <div class="catalog_item__text">Mac</div>
                    </div>
                    <div class="catalog_item" onclick="window.open('/ipad', '_parent')">
                        <div class="catalog_item__img img_3"></div>
                        <div class="catalog_item__text">iPad</div>
                    </div>
                    <div class="catalog_item" onclick="window.open('/watch', '_parent')">
                        <div class="catalog_item__img img_4"></div>
                        <div class="catalog_item__text">Apple Watch</div>
                    </div>
                    <div class="catalog_item" onclick="window.open('/airpods', '_parent')">
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
        </div>
    </main>
    <?php require($_SERVER["DOCUMENT_ROOT"] . "/components/footer.php"); ?>
</body>

</html>