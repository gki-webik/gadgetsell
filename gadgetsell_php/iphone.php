<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apple iPhone</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <?php require ("./components/header.php"); ?>

    <style>
        br {
            display: none;
        }
    </style>
    <style>
        .ctg_1_Tb,
        .ctg_2_Tb,
        .ctg_64_Gb,
        .ctg_128_Gb,
        .ctg_256_Gb,
        .ctg_512_Gb {
            display: none;
        }

        .d_flex {
            display: flex !important;
        }

        .d_flex_2 {
            display: flex !important;
        }
    </style>
    <main>
        <div class="kroshka_box">
            <div class="kroshka">
                <a href="/">Главная</a> / <a href="/catalog">Каталог</a> / <a href="/iphone"
                    class="a_kroshka_active">iPhone</a>
            </div>
        </div>
        <div class="main_box_big">
            <div class="catalog__iPhone">
                <div class="catalog__iPhone_box scroll scroll_hidden">
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-15-pro-max', '_parent')">
                        <div class="catalog__iPhone_item__img img_1"></div>
                        <div class="catalog__iPhone_item__text">iPhone 15 Pro Max</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-15-pro', '_parent')">
                        <div class="catalog__iPhone_item__img img_2"></div>
                        <div class="catalog__iPhone_item__text">iPhone 15 Pro</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-15-plus', '_parent')">
                        <div class="catalog__iPhone_item__img img_3"></div>
                        <div class="catalog__iPhone_item__text">iPhone 15 Plus</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-15', '_parent')">
                        <div class="catalog__iPhone_item__img img_4"></div>
                        <div class="catalog__iPhone_item__text">iPhone 15</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-14-pro-max', '_parent')">
                        <div class="catalog__iPhone_item__img img_5"></div>
                        <div class="catalog__iPhone_item__text">iPhone 14 Pro Max</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-14-pro', '_parent')">
                        <div class="catalog__iPhone_item__img img_6"></div>
                        <div class="catalog__iPhone_item__text">iPhone 14 Pro</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-14-plus', '_parent')">
                        <div class="catalog__iPhone_item__img img_7"></div>
                        <div class="catalog__iPhone_item__text">iPhone 14 Plus</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-14', '_parent')">
                        <div class="catalog__iPhone_item__img img_8"></div>
                        <div class="catalog__iPhone_item__text">iPhone 14</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-13-pro-max', '_parent')">
                        <div class="catalog__iPhone_item__img img_9"></div>
                        <div class="catalog__iPhone_item__text">iPhone 13 Pro Max</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-13-pro', '_parent')">
                        <div class="catalog__iPhone_item__img img_10"></div>
                        <div class="catalog__iPhone_item__text">iPhone 13 Pro</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-13', '_parent')">
                        <div class="catalog__iPhone_item__img img_11"></div>
                        <div class="catalog__iPhone_item__text">iPhone 13</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-13-mini', '_parent')">
                        <div class="catalog__iPhone_item__img img_12"></div>
                        <div class="catalog__iPhone_item__text">iPhone 13 mini</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-12-pro-max', '_parent')">
                        <div class="catalog__iPhone_item__img img_13"></div>
                        <div class="catalog__iPhone_item__text">iPhone 12 Pro Max</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-12', '_parent')">
                        <div class="catalog__iPhone_item__img img_14"></div>
                        <div class="catalog__iPhone_item__text">iPhone 12</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-12-mini', '_parent')">
                        <div class="catalog__iPhone_item__img img_15"></div>
                        <div class="catalog__iPhone_item__text">iPhone 12 mini</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-se', '_parent')">
                        <div class="catalog__iPhone_item__img img_16"></div>
                        <div class="catalog__iPhone_item__text">iPhone SE</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('/iphone/iphone-11', '_parent')">
                        <div class="catalog__iPhone_item__img img_17"></div>
                        <div class="catalog__iPhone_item__text">iPhone 11</div>
                    </div>
                    <div class="catalog__iPhone_item" onclick="window.open('', '_parent')">
                        <div class="catalog__iPhone_item__img img_18"></div>
                        <div class="catalog__iPhone_item__text">Аксессуары</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_catalog_container">
            <div class="main_catalog_box__item__filter__details">
                <div class="filter__details__header">
                    <button><img src="https://gadgetsell.ru/wp-content/uploads/img_catalog_ingo_img_filter.svg"
                            alt="">Фильтры</button>
                    <label>
                        <input type="text"
                            class="main_catalog_box__item__filter__search main_catalog_box__item__filter__search1"
                            placeholder="Поиск">
                        <svg class="t-store__search-icon t-store__search-icon1 js-store-filter-search-btn"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88 88">
                            <path fill="#757575"
                                d="M85 31.1c-.5-8.7-4.4-16.6-10.9-22.3C67.6 3 59.3 0 50.6.6c-8.7.5-16.7 4.4-22.5 11-11.2 12.7-10.7 31.7.6 43.9l-5.3 6.1-2.5-2.2-17.8 20 9 8.1 17.8-20.2-2.1-1.8 5.3-6.1c5.8 4.2 12.6 6.3 19.3 6.3 9 0 18-3.7 24.4-10.9 5.9-6.6 8.8-15 8.2-23.7zM72.4 50.8c-9.7 10.9-26.5 11.9-37.6 2.3-10.9-9.8-11.9-26.6-2.3-37.6 4.7-5.4 11.3-8.5 18.4-8.9h1.6c6.5 0 12.7 2.4 17.6 6.8 5.3 4.7 8.5 11.1 8.9 18.2.5 7-1.9 13.8-6.6 19.2z">
                            </path>
                        </svg>
                    </label>
                </div>
                <section class="div_details__filter none">
                    <div class="div_details__filter__items">
                        <details class="div_details__filter__item">
                            <summary class="div_details__filter__question">Сортировка <span>></span></summary>
                            <div class="div_details__filter__answer">
                                <div class="div_details__filter__text">
                                    <p>
                                    <nav class="div_details__filter__text__nav">
                                        <a href="?sort=0">Порядок: по умолчанию</a>
                                        <a href="?sort=1">Порядок: сперва новые</a>
                                        <a href="?sort=2">Порядок: сперва старые</a>
                                        <a href="?sort=3">Цена: по возрастанию</a>
                                        <a href="?sort=4">Цена: по убыванию</a>
                                        <a href="?sort=5">Название: А—Я</a>
                                        <a href="?sort=6">Название: Я—А</a>
                                    </nav>
                                    </p>
                                </div>
                            </div>
                        </details>
                        <details class="div_details__filter__item">
                            <summary class="div_details__filter__question">Встроенная память <span>></span></summary>
                            <div class="div_details__filter__answer">
                                <div class="item__filter item__filter__1">
                                    <span>Встроенная память</span>
                                    <lable><input type="checkbox" id="ctgm_1_Tb" />1 Tb</lable>
                                    <lable><input type="checkbox" id="ctgm_2_Tb" />2 Tb</lable>
                                    <lable><input type="checkbox" id="ctgm_64_Gb" />64 Gb</lable>
                                    <lable><input type="checkbox" id="ctgm_128_Gb" />128 Gb</lable>
                                    <lable><input type="checkbox" id="ctgm_256_Gb" />256 Gb</lable>
                                    <lable><input type="checkbox" id="ctgm_512_Gb" />512 Gb</lable>
                                </div>
                            </div>
                        </details>
                        <details class="div_details__filter__item">
                            <summary class="div_details__filter__question">Цвет <span>></span></summary>
                            <div class="item__filter item__filter__color item__filter__2">
                                <div>
                                    <label><input type="checkbox" id="ctgm_Silver" />
                                        <div class="color_filter cf_Silver"></div>
                                    </label>
                                    <label><input type="checkbox" id="ctgm_Gray" />
                                        <div class="color_filter cf_Gray"></div>
                                    </label>
                                    <label><input type="checkbox" id="ctgm_Black" />
                                        <div class="color_filter cf_Black"></div>
                                    </label>
                                    <label><input type="checkbox" id="ctgm_Yellow" />
                                        <div class="color_filter cf_Yellow"></div>
                                    </label>
                                    <label><input type="checkbox" id="ctgm_Pink" />
                                        <div class="color_filter cf_Pink"></div>
                                    </label>
                                    <label><input type="checkbox" id="ctgm_White" />
                                        <div class="color_filter cf_White"></div>
                                    </label>
                                    <label><input type="checkbox" id="ctgm_Violet" />
                                        <div class="color_filter cf_Violet"></div>
                                    </label>
                                </div>
                            </div>
                        </details>
                        <details class="div_details__filter__item">
                            <summary class="div_details__filter__question">Диагональ <span>></span></summary>
                            <div class="div_details__filter__answer">
                                <div class="div_details__filter__text">
                                    <lable><input type="checkbox" id="ctgm_5_4" />5.4 дюйм</lable>
                                    <lable><input type="checkbox" id="ctgm_6_1" />6.1 дюйм</lable>
                                    <lable><input type="checkbox" id="ctgm_6_7" />6.7 дюйм</lable>
                                </div>
                            </div>
                        </details>
                        <!-- <details class="div_details__filter__item">
                            <summary class="div_details__filter__question">Модель устройства <span>></span></summary>
                            <div class="div_details__filter__answer">
                                <div class="div_details__filter__text">
                                    <lable><input type="checkbox" />iPhone 14</lable>
                                    <lable><input type="checkbox" />iPhone 14 Plus</lable>
                                    <lable><input type="checkbox" />iPhone 14 Pro Max</lable>
                                    <lable><input type="checkbox" />iPhone 15</lable>
                                    <lable><input type="checkbox" />iPhone 15 Plus</lable>
                                    <lable><input type="checkbox" />iPhone 15 Pro</lable>
                                    <lable><input type="checkbox" />iPhone 15 Pro Max</lable>
                                </div>
                            </div>
                        </details> -->
                        <!-- <details class="div_details__filter__item">
    <summary class="div_details__filter__question">SIM-карта <span>></span></summary>
    <div class="div_details__filter__answer">
    <div class="div_details__filter__text">
    <lable><input type="checkbox" />Nano Sim + Nano Sim</lable>
    <lable><input type="checkbox" />Nano Sim + eSIM</lable>
    <lable><input type="checkbox" />eSIM</lable>
    <lable><input type="checkbox" />nano-SIM, eSIM</lable>
    </div>
    </div>
    </details>
    <details class="div_details__filter__item">
    <summary class="div_details__filter__question">Процессор <span>></span></summary>
    <div class="div_details__filter__answer">
    <div class="div_details__filter__text">
    <lable><input type="checkbox" />A15 Bionic</lable>
    <lable><input type="checkbox" />A16 Bionic</lable>
    <lable><input type="checkbox" />A17 Pro</lable>
    <lable><input type="checkbox" />Apple A13 Bionic</lable>
    <lable><input type="checkbox" />Apple A14 Bionic</lable>
    <lable><input type="checkbox" />Apple A15</lable>
    </div>
    </div>
    </details>-->
                        <details class="div_details__filter__item div_details__filter__item__close_filter">
                            <summary class="div_details__filter__question">
                                <p>Свернуть ↑</p>
                            </summary>
                        </details>
                    </div>
                </section>
            </div>
            <div class="pc_select_filter_cards">
                <select onchange='document.location="?sort=" + this.options[this.selectedIndex].value'>
                    <option value="0" <?php if (isset ($_GET["sort"])) {
                        if ($_GET["sort"] == "0") {
                            echo ("selected");
                        }
                    } ?>>
                        Порядок: по умолчанию</option>
                    <option value="1" <?php if (isset ($_GET["sort"])) {
                        if ($_GET["sort"] == "1") {
                            echo ("selected");
                        }
                    } ?>>
                        Цена: по возрастанию</option>
                    <option value="2" <?php if (isset ($_GET["sort"])) {
                        if ($_GET["sort"] == "2") {
                            echo ("selected");
                        }
                    } ?>>
                        Цена: по убыванию</option>
                    <option value="3" <?php if (isset ($_GET["sort"])) {
                        if ($_GET["sort"] == "3") {
                            echo ("selected");
                        }
                    } ?>>
                        Название: А—Я</option>
                    <option value="4" <?php if (isset ($_GET["sort"])) {
                        if ($_GET["sort"] == "4") {
                            echo ("selected");
                        }
                    } ?>>
                        Название: Я—А</option>
                    <option value="5" <?php if (isset ($_GET["sort"])) {
                        if ($_GET["sort"] == "5") {
                            echo ("selected");
                        }
                    } ?>>
                        Порядок: сперва новые</option>
                    <option value="6" <?php if (isset ($_GET["sort"])) {
                        if ($_GET["sort"] == "6") {
                            echo ("selected");
                        }
                    } ?>>
                        Порядок: сперва старые</option>
                </select>
            </div>
            <div class="main_catalog_box">
                <div class="main_catalog_box__item__filter">
                    <label>
                        <input type="text"
                            class="main_catalog_box__item__filter__search main_catalog_box__item__filter__search2"
                            placeholder="Поиск"><svg
                            class="t-store__search-icon t-store__search-icon2 js-store-filter-search-btn"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88 88">
                            <path fill="#757575"
                                d="M85 31.1c-.5-8.7-4.4-16.6-10.9-22.3C67.6 3 59.3 0 50.6.6c-8.7.5-16.7 4.4-22.5 11-11.2 12.7-10.7 31.7.6 43.9l-5.3 6.1-2.5-2.2-17.8 20 9 8.1 17.8-20.2-2.1-1.8 5.3-6.1c5.8 4.2 12.6 6.3 19.3 6.3 9 0 18-3.7 24.4-10.9 5.9-6.6 8.8-15 8.2-23.7zM72.4 50.8c-9.7 10.9-26.5 11.9-37.6 2.3-10.9-9.8-11.9-26.6-2.3-37.6 4.7-5.4 11.3-8.5 18.4-8.9h1.6c6.5 0 12.7 2.4 17.6 6.8 5.3 4.7 8.5 11.1 8.9 18.2.5 7-1.9 13.8-6.6 19.2z">
                            </path>
                        </svg>
                    </label>
                    <div class="item__filter item__filter__1">
                        <span>Встроенная память</span>
                        <lable><input type="checkbox" id="ctg_1_Tb" />1 Tb</lable>
                        <lable><input type="checkbox" id="ctg_2_Tb" />2 Tb</lable>
                        <lable><input type="checkbox" id="ctg_64_Gb" />64 Gb</lable>
                        <lable><input type="checkbox" id="ctg_128_Gb" />128 Gb</lable>
                        <lable><input type="checkbox" id="ctg_256_Gb" />256 Gb</lable>
                        <lable><input type="checkbox" id="ctg_512_Gb" />512 Gb</lable>
                    </div>
                    <div class="item__filter item__filter__color item__filter__2">
                        <span>Цвет</span>
                        <div>
                            <label><input type="checkbox" id="ctg_Silver" />
                                <div class="color_filter cf_Silver"></div>
                            </label>
                            <label><input type="checkbox" id="ctg_Gray" />
                                <div class="color_filter cf_Gray"></div>
                            </label>
                            <label><input type="checkbox" id="ctg_Black" />
                                <div class="color_filter cf_Black"></div>
                            </label>
                            <label><input type="checkbox" id="ctg_Yellow" />
                                <div class="color_filter cf_Yellow"></div>
                            </label>
                            <label><input type="checkbox" id="ctg_Pink" />
                                <div class="color_filter cf_Pink"></div>
                            </label>
                            <label><input type="checkbox" id="ctg_White" />
                                <div class="color_filter cf_White"></div>
                            </label>
                            <label><input type="checkbox" id="ctg_Violet" />
                                <div class="color_filter cf_Violet"></div>
                            </label>
                        </div>
                    </div>
                    <div class="item__filter item__filter__2">
                        <span>Диагональ</span>
                        <lable><input type="checkbox" id="ctg_5_4" />5.4 дюйм</lable>
                        <lable><input type="checkbox" id="ctg_6_1" />6.1 дюйм</lable>
                        <lable><input type="checkbox" id="ctg_6_7" />6.7 дюйм</lable>
                    </div>
                    <!--  <div class="item__filter item__filter__2">
                        <span>Модель устройства</span>
                        <lable><input type="checkbox" />iPhone 14</lable>
                        <lable><input type="checkbox" />iPhone 14 Plus</lable>
                        <lable><input type="checkbox" />iPhone 14 Pro Max</lable>
                        <lable><input type="checkbox" />iPhone 15</lable>
                        <lable><input type="checkbox" />iPhone 15 Plus</lable>
                        <lable><input type="checkbox" />iPhone 15 Pro</lable>
                        <lable><input type="checkbox" />iPhone 15 Pro Max</lable>
                    </div>-->
                    <!-- <div class="item__filter item__filter__2">
    <span>SIM-карта</span>
    <lable><input type="checkbox" />Nano Sim + Nano Sim</lable>
    <lable><input type="checkbox" />Nano Sim + eSIM</lable>
    <lable><input type="checkbox" />eSIM</lable>
    <lable><input type="checkbox" />nano-SIM, eSIM</lable>
    </div>
    <div class="item__filter item__filter__2">
    <span>Процессор</span>
    <lable><input type="checkbox" />A15 Bionic</lable>
    <lable><input type="checkbox" />A16 Bionic</lable>
    <lable><input type="checkbox" />A17 Pro</lable>
    <lable><input type="checkbox" />Apple A13 Bionic</lable>
    <lable><input type="checkbox" />Apple A14 Bionic</lable>
    <lable><input type="checkbox" />Apple A15</lable>
    </div>
-->
                </div>
                <div class="main_catalog_box__item__cards">
                    <?php
                    $host = 'localhost';
                    $user = 'root';
                    $db = 'u2526134_wp500';
                    $password = '';
                    $conn = new mysqli($host, $user, $password, $db);
                    $conn->query("SET NAMES 'utf8mb4'");
                    if (isset ($_GET["sort"])) {
                        if ($_GET["sort"] == "1") {
                            $suc = $conn->query("SELECT * FROM `telefony_apple` ORDER BY `price` ASC");
                        } else if ($_GET["sort"] == "2") {
                            $suc = $conn->query("SELECT * FROM `telefony_apple` ORDER BY `price` DESC");
                        } else if ($_GET["sort"] == "3") {
                            $suc = $conn->query("SELECT * FROM `telefony_apple` ORDER BY `name` ASC");
                        } else if ($_GET["sort"] == "4") {
                            $suc = $conn->query("SELECT * FROM `telefony_apple` ORDER BY `name` DESC");
                        } else if ($_GET["sort"] == "5") {
                            $suc = $conn->query("SELECT * FROM `telefony_apple` ORDER BY `id` ASC");
                        } else if ($_GET["sort"] == "6") {
                            $suc = $conn->query("SELECT * FROM `telefony_apple` ORDER BY `id` DESC");
                        } else {
                            $suc = $conn->query("SELECT * FROM `telefony_apple`");
                        }
                    } else {
                        $suc = $conn->query("SELECT * FROM `telefony_apple`");
                    }
                    if ($suc->num_rows > 0) {
                        while ($row = $suc->fetch_assoc()) {
                            $id = $row["id"];
                            $name = $row["name"];
                            $price = $row["price"];
                            $color = $row["color"];
                            $memory = $row["memory"];
                            $memory = str_replace(" ", "_", $memory);
                            $properties = $row["properties"];
                            $photo_1 = $row["photo_1"];
                            $object = json_decode($properties);
                            $diagonal = $object->Diagonal;
                            $diagonal = str_replace(" ", "", $diagonal);
                            $diagonal = str_replace(".", "_", $diagonal);
                            $diagonal = str_replace("дюйм", "", $diagonal);
                            $result_card = "<div class='item__cards__block ctg_$diagonal ctg_$color ctg_$memory'><div class='item__cards__img' onclick=\"window.open('/ipad/page?id_page=$id', '_parent')\" style='width: 100%;background-size:cover;height: 225px;text-align: center;background-position: center;background-image: url(https://store77.net$photo_1);'></div><div onclick=\"window.open('/ipad/page?id_page=$id', '_parent')\" class='item__cards__text'>$name</div><div class='item__cards__price' onclick=\"window.open('/ipad/page?id_page=$id', '_parent')\">$price ₽</div><button class='item__cards__btn item__cards__btn_$id'>В корзину</button></div>
                            <script>
                            document.querySelector('.item__cards__btn_$id').addEventListener('click', () => { 
                                if(localStorage.getItem('products_basket')){
                                    let arr_b_$id = JSON.parse(localStorage.getItem('products_basket'));
                                    let pp_$id = arr_b_$id.find(item => item.id === '$id');
                                    if(pp_$id === undefined){
                                        arr_b_$id.push({\"id\": \"$id\", \"img\": \"$photo_1\", \"name\": \"$name\", \"price\": \"$price\", \"product\": \"iphone\", \"count\": 1});
                                        localStorage.setItem('products_basket', JSON.stringify(arr_b_$id));
                                    } else{
                                        alert('Этот товар уже есть в корзине!');  
                                    }
                                }
                                else{
                                    localStorage.setItem('products_basket', '[{\"id\": \"$id\", \"img\": \"$photo_1\", \"name\": \"$name\", \"price\": \"$price\", \"product\": \"iphone\", \"count\": 1}]');
                                } 
                            });
                            </script>";
                            print_r($result_card);
                        }
                    } else {
                        echo ("Товаров не найдено!");
                    }
                    ?>
                </div>
            </div>
    </main>
    <script>
        let search_input = document.querySelector(".main_catalog_box__item__filter__search2");
        let search_input_btn = document.querySelector(".t-store__search-icon2");
        let search_input2 = document.querySelector(".main_catalog_box__item__filter__search1");
        let search_input_btn2 = document.querySelector(".t-store__search-icon1");
        let blocks = document.querySelectorAll(".item__cards__block");
        search_input_btn.addEventListener("click", () => {
            let search_input_value = search_input.value.toLowerCase();
            blocks.forEach((e) => {
                let blocks_value = e.innerHTML.toLowerCase();
                if (blocks_value.includes(search_input_value)) {
                    e.classList.add("d_flex_2");
                } else {
                    e.classList.remove("d_flex_2");
                }
            });
        });
        search_input_btn2.addEventListener("click", () => {
            let search_input_value2 = search_input2.value.toLowerCase();
            blocks.forEach((e) => {
                let blocks_value = e.innerHTML.toLowerCase();
                if (blocks_value.includes(search_input_value2)) {
                    e.classList.add("d_flex_2");
                } else {
                    e.classList.remove("d_flex_2");
                }
            });
        });
        let item__cards__block_0 = document.querySelectorAll(".item__cards__block");
        let item__cards__block_1 = document.querySelectorAll(".item__cards__block.ctg_1_Tb");
        let item__cards__block_2 = document.querySelectorAll(".item__cards__block.ctg_2_Tb");
        let item__cards__block_3 = document.querySelectorAll(".item__cards__block.ctg_64_Gb");
        let item__cards__block_4 = document.querySelectorAll(".item__cards__block.ctg_128_Gb");
        let item__cards__block_5 = document.querySelectorAll(".item__cards__block.ctg_256_Gb");
        let item__cards__block_6 = document.querySelectorAll(".item__cards__block.ctg_512_Gb");
        let item__cards__block_7 = document.querySelectorAll(".item__cards__block.ctg_5_4_");
        let item__cards__block_8 = document.querySelectorAll(".item__cards__block.ctg_6_1_");
        let item__cards__block_9 = document.querySelectorAll(".item__cards__block.ctg_6_7_");
        let item__cards__block_11 = document.querySelectorAll(".item__cards__block.ctg_Silver");
        let item__cards__block_12 = document.querySelectorAll(".item__cards__block.ctg_Gray");
        let item__cards__block_13 = document.querySelectorAll(".item__cards__block.ctg_Black");
        let item__cards__block_14 = document.querySelectorAll(".item__cards__block.ctg_Yellow");
        let item__cards__block_15 = document.querySelectorAll(".item__cards__block.ctg_Pink");
        let item__cards__block_16 = document.querySelectorAll(".item__cards__block.ctg_White");
        let item__cards__block_17 = document.querySelectorAll(".item__cards__block.ctg_Violet");
        let ctg_1_Tb = document.querySelector("#ctg_1_Tb");
        let ctg_2_Tb = document.querySelector("#ctg_2_Tb");
        let ctg_64_Gb = document.querySelector("#ctg_64_Gb");
        let ctg_128_Gb = document.querySelector("#ctg_128_Gb");
        let ctg_256_Gb = document.querySelector("#ctg_256_Gb");
        let ctg_512_Gb = document.querySelector("#ctg_512_Gb");
        let ctg_5_4_ = document.querySelector("#ctg_5_4");
        let ctg_6_1_ = document.querySelector("#ctg_6_1");
        let ctg_6_7_ = document.querySelector("#ctg_6_7");
        let ctg_Violet = document.querySelector("#ctg_Violet");
        let ctg_White = document.querySelector("#ctg_White");
        let ctg_Pink = document.querySelector("#ctg_Pink");
        let ctg_Yellow = document.querySelector("#ctg_Yellow");
        let ctg_Black = document.querySelector("#ctg_Black");
        let ctg_Gray = document.querySelector("#ctg_Gray");
        let ctg_Silver = document.querySelector("#ctg_Silver");
        let ctgm_1_Tb = document.querySelector("#ctgm_1_Tb");
        let ctgm_2_Tb = document.querySelector("#ctgm_2_Tb");
        let ctgm_64_Gb = document.querySelector("#ctgm_64_Gb");
        let ctgm_128_Gb = document.querySelector("#ctgm_128_Gb");
        let ctgm_256_Gb = document.querySelector("#ctgm_256_Gb");
        let ctgm_512_Gb = document.querySelector("#ctgm_512_Gb");
        let ctgm_5_4_ = document.querySelector("#ctgm_5_4");
        let ctgm_6_1_ = document.querySelector("#ctgm_6_1");
        let ctgm_6_7_ = document.querySelector("#ctgm_6_7");
        let ctgm_Violet = document.querySelector("#ctgm_Violet");
        let ctgm_White = document.querySelector("#ctgm_White");
        let ctgm_Pink = document.querySelector("#ctgm_Pink");
        let ctgm_Yellow = document.querySelector("#ctgm_Yellow");
        let ctgm_Black = document.querySelector("#ctgm_Black");
        let ctgm_Gray = document.querySelector("#ctgm_Gray");
        let ctgm_Silver = document.querySelector("#ctgm_Silver");

        item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
        item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
        item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
        item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
        item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
        item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
        item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
        item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
        item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });
        item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
        item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
        item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
        item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
        item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
        item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
        item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
        ctg_1_Tb.addEventListener("change", () => {
            if (!ctg_1_Tb.checked && !ctg_2_Tb.checked && !ctg_64_Gb.checked && !ctg_128_Gb.checked && !ctg_256_Gb.checked && !ctg_512_Gb.checked && !ctg_5_4_.checked && !ctg_6_1_.checked && !ctg_6_7_.checked && !ctg_Silver.checked && !ctg_Gray.checked && !ctg_Black.checked && !ctg_Yellow.checked && !ctg_Pink.checked && !ctg_White.checked && !ctg_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctg_1_Tb.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctg_2_Tb.addEventListener("change", () => {
            if (!ctg_1_Tb.checked && !ctg_2_Tb.checked && !ctg_64_Gb.checked && !ctg_128_Gb.checked && !ctg_256_Gb.checked && !ctg_512_Gb.checked && !ctg_5_4_.checked && !ctg_6_1_.checked && !ctg_6_7_.checked && !ctg_Silver.checked && !ctg_Gray.checked && !ctg_Black.checked && !ctg_Yellow.checked && !ctg_Pink.checked && !ctg_White.checked && !ctg_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctg_2_Tb.checked) {
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctg_64_Gb.addEventListener("change", () => {
            if (!ctg_1_Tb.checked && !ctg_2_Tb.checked && !ctg_64_Gb.checked && !ctg_128_Gb.checked && !ctg_256_Gb.checked && !ctg_512_Gb.checked && !ctg_5_4_.checked && !ctg_6_1_.checked && !ctg_6_7_.checked && !ctg_Silver.checked && !ctg_Gray.checked && !ctg_Black.checked && !ctg_Yellow.checked && !ctg_Pink.checked && !ctg_White.checked && !ctg_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctg_64_Gb.checked) {
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctg_128_Gb.addEventListener("change", () => {
            if (!ctg_1_Tb.checked && !ctg_2_Tb.checked && !ctg_64_Gb.checked && !ctg_128_Gb.checked && !ctg_256_Gb.checked && !ctg_512_Gb.checked && !ctg_5_4_.checked && !ctg_6_1_.checked && !ctg_6_7_.checked && !ctg_Silver.checked && !ctg_Gray.checked && !ctg_Black.checked && !ctg_Yellow.checked && !ctg_Pink.checked && !ctg_White.checked && !ctg_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctg_128_Gb.checked) {
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctg_256_Gb.addEventListener("change", () => {
            if (!ctg_1_Tb.checked && !ctg_2_Tb.checked && !ctg_64_Gb.checked && !ctg_128_Gb.checked && !ctg_256_Gb.checked && !ctg_512_Gb.checked && !ctg_5_4_.checked && !ctg_6_1_.checked && !ctg_6_7_.checked && !ctg_Silver.checked && !ctg_Gray.checked && !ctg_Black.checked && !ctg_Yellow.checked && !ctg_Pink.checked && !ctg_White.checked && !ctg_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctg_256_Gb.checked) {
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            }
        });
        ctg_512_Gb.addEventListener("change", () => {
            if (!ctg_1_Tb.checked && !ctg_2_Tb.checked && !ctg_64_Gb.checked && !ctg_128_Gb.checked && !ctg_256_Gb.checked && !ctg_512_Gb.checked && !ctg_5_4_.checked && !ctg_6_1_.checked && !ctg_6_7_.checked && !ctg_Silver.checked && !ctg_Gray.checked && !ctg_Black.checked && !ctg_Yellow.checked && !ctg_Pink.checked && !ctg_White.checked && !ctg_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctg_512_Gb.checked) {
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex") });
            }
        });

        ctg_5_4_.addEventListener("change", () => {
            if (!ctg_1_Tb.checked && !ctg_2_Tb.checked && !ctg_64_Gb.checked && !ctg_128_Gb.checked && !ctg_256_Gb.checked && !ctg_512_Gb.checked && !ctg_5_4_.checked && !ctg_6_1_.checked && !ctg_6_7_.checked && !ctg_Silver.checked && !ctg_Gray.checked && !ctg_Black.checked && !ctg_Yellow.checked && !ctg_Pink.checked && !ctg_White.checked && !ctg_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctg_5_4_.checked) {
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctg_6_1_.addEventListener("change", () => {
            if (!ctg_1_Tb.checked && !ctg_2_Tb.checked && !ctg_64_Gb.checked && !ctg_128_Gb.checked && !ctg_256_Gb.checked && !ctg_512_Gb.checked && !ctg_5_4_.checked && !ctg_6_1_.checked && !ctg_6_7_.checked && !ctg_Silver.checked && !ctg_Gray.checked && !ctg_Black.checked && !ctg_Yellow.checked && !ctg_Pink.checked && !ctg_White.checked && !ctg_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctg_6_1_.checked) {
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctg_6_7_.addEventListener("change", () => {
            if (!ctg_1_Tb.checked && !ctg_2_Tb.checked && !ctg_64_Gb.checked && !ctg_128_Gb.checked && !ctg_256_Gb.checked && !ctg_512_Gb.checked && !ctg_5_4_.checked && !ctg_6_1_.checked && !ctg_6_7_.checked && !ctg_Silver.checked && !ctg_Gray.checked && !ctg_Black.checked && !ctg_Yellow.checked && !ctg_Pink.checked && !ctg_White.checked && !ctg_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctg_6_7_.checked) {
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctg_Silver.addEventListener("change", () => {
            if (!ctg_1_Tb.checked && !ctg_2_Tb.checked && !ctg_64_Gb.checked && !ctg_128_Gb.checked && !ctg_256_Gb.checked && !ctg_512_Gb.checked && !ctg_5_4_.checked && !ctg_6_1_.checked && !ctg_6_7_.checked && !ctg_Silver.checked && !ctg_Gray.checked && !ctg_Black.checked && !ctg_Yellow.checked && !ctg_Pink.checked && !ctg_White.checked && !ctg_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctg_Silver.checked) {
                item__cards__block_11.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctg_Gray.addEventListener("change", () => {
            if (!ctg_1_Tb.checked && !ctg_2_Tb.checked && !ctg_64_Gb.checked && !ctg_128_Gb.checked && !ctg_256_Gb.checked && !ctg_512_Gb.checked && !ctg_5_4_.checked && !ctg_6_1_.checked && !ctg_6_7_.checked && !ctg_Silver.checked && !ctg_Gray.checked && !ctg_Black.checked && !ctg_Yellow.checked && !ctg_Pink.checked && !ctg_White.checked && !ctg_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctg_Gray.checked) {
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctg_Black.addEventListener("change", () => {
            if (!ctg_1_Tb.checked && !ctg_2_Tb.checked && !ctg_64_Gb.checked && !ctg_128_Gb.checked && !ctg_256_Gb.checked && !ctg_512_Gb.checked && !ctg_5_4_.checked && !ctg_6_1_.checked && !ctg_6_7_.checked && !ctg_Silver.checked && !ctg_Gray.checked && !ctg_Black.checked && !ctg_Yellow.checked && !ctg_Pink.checked && !ctg_White.checked && !ctg_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctg_Black.checked) {
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctg_Yellow.addEventListener("change", () => {
            if (!ctg_1_Tb.checked && !ctg_2_Tb.checked && !ctg_64_Gb.checked && !ctg_128_Gb.checked && !ctg_256_Gb.checked && !ctg_512_Gb.checked && !ctg_5_4_.checked && !ctg_6_1_.checked && !ctg_6_7_.checked && !ctg_Silver.checked && !ctg_Gray.checked && !ctg_Black.checked && !ctg_Yellow.checked && !ctg_Pink.checked && !ctg_White.checked && !ctg_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctg_Yellow.checked) {
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctg_Pink.addEventListener("change", () => {
            if (!ctg_1_Tb.checked && !ctg_2_Tb.checked && !ctg_64_Gb.checked && !ctg_128_Gb.checked && !ctg_256_Gb.checked && !ctg_512_Gb.checked && !ctg_5_4_.checked && !ctg_6_1_.checked && !ctg_6_7_.checked && !ctg_Silver.checked && !ctg_Gray.checked && !ctg_Black.checked && !ctg_Yellow.checked && !ctg_Pink.checked && !ctg_White.checked && !ctg_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctg_Pink.checked) {
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctg_White.addEventListener("change", () => {
            if (!ctg_1_Tb.checked && !ctg_2_Tb.checked && !ctg_64_Gb.checked && !ctg_128_Gb.checked && !ctg_256_Gb.checked && !ctg_512_Gb.checked && !ctg_5_4_.checked && !ctg_6_1_.checked && !ctg_6_7_.checked && !ctg_Silver.checked && !ctg_Gray.checked && !ctg_Black.checked && !ctg_Yellow.checked && !ctg_Pink.checked && !ctg_White.checked && !ctg_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctg_White.checked) {
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctg_Violet.addEventListener("change", () => {
            if (!ctg_1_Tb.checked && !ctg_2_Tb.checked && !ctg_64_Gb.checked && !ctg_128_Gb.checked && !ctg_256_Gb.checked && !ctg_512_Gb.checked && !ctg_5_4_.checked && !ctg_6_1_.checked && !ctg_6_7_.checked && !ctg_Silver.checked && !ctg_Gray.checked && !ctg_Black.checked && !ctg_Yellow.checked && !ctg_Pink.checked && !ctg_White.checked && !ctg_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctg_Violet.checked) {
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctgm_1_Tb.addEventListener("change", () => {
            if (!ctgm_1_Tb.checked && !ctgm_2_Tb.checked && !ctgm_64_Gb.checked && !ctgm_128_Gb.checked && !ctgm_256_Gb.checked && !ctgm_512_Gb.checked && !ctgm_5_4_.checked && !ctgm_6_1_.checked && !ctgm_6_7_.checked && !ctgm_Silver.checked && !ctgm_Gray.checked && !ctgm_Black.checked && !ctgm_Yellow.checked && !ctgm_Pink.checked && !ctgm_White.checked && !ctgm_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctgm_1_Tb.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctgm_2_Tb.addEventListener("change", () => {
            if (!ctgm_1_Tb.checked && !ctgm_2_Tb.checked && !ctgm_64_Gb.checked && !ctgm_128_Gb.checked && !ctgm_256_Gb.checked && !ctgm_512_Gb.checked && !ctgm_5_4_.checked && !ctgm_6_1_.checked && !ctgm_6_7_.checked && !ctgm_Silver.checked && !ctgm_Gray.checked && !ctgm_Black.checked && !ctgm_Yellow.checked && !ctgm_Pink.checked && !ctgm_White.checked && !ctgm_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctgm_2_Tb.checked) {
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctgm_64_Gb.addEventListener("change", () => {
            if (!ctgm_1_Tb.checked && !ctgm_2_Tb.checked && !ctgm_64_Gb.checked && !ctgm_128_Gb.checked && !ctgm_256_Gb.checked && !ctgm_512_Gb.checked && !ctgm_5_4_.checked && !ctgm_6_1_.checked && !ctgm_6_7_.checked && !ctgm_Silver.checked && !ctgm_Gray.checked && !ctgm_Black.checked && !ctgm_Yellow.checked && !ctgm_Pink.checked && !ctgm_White.checked && !ctgm_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctgm_64_Gb.checked) {
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctgm_128_Gb.addEventListener("change", () => {
            if (!ctgm_1_Tb.checked && !ctgm_2_Tb.checked && !ctgm_64_Gb.checked && !ctgm_128_Gb.checked && !ctgm_256_Gb.checked && !ctgm_512_Gb.checked && !ctgm_5_4_.checked && !ctgm_6_1_.checked && !ctgm_6_7_.checked && !ctgm_Silver.checked && !ctgm_Gray.checked && !ctgm_Black.checked && !ctgm_Yellow.checked && !ctgm_Pink.checked && !ctgm_White.checked && !ctgm_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctgm_128_Gb.checked) {
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctgm_256_Gb.addEventListener("change", () => {
            if (!ctgm_1_Tb.checked && !ctgm_2_Tb.checked && !ctgm_64_Gb.checked && !ctgm_128_Gb.checked && !ctgm_256_Gb.checked && !ctgm_512_Gb.checked && !ctgm_5_4_.checked && !ctgm_6_1_.checked && !ctgm_6_7_.checked && !ctgm_Silver.checked && !ctgm_Gray.checked && !ctgm_Black.checked && !ctgm_Yellow.checked && !ctgm_Pink.checked && !ctgm_White.checked && !ctgm_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctgm_256_Gb.checked) {
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            }
        });
        ctgm_512_Gb.addEventListener("change", () => {
            if (!ctgm_1_Tb.checked && !ctgm_2_Tb.checked && !ctgm_64_Gb.checked && !ctgm_128_Gb.checked && !ctgm_256_Gb.checked && !ctgm_512_Gb.checked && !ctgm_5_4_.checked && !ctgm_6_1_.checked && !ctgm_6_7_.checked && !ctgm_Silver.checked && !ctgm_Gray.checked && !ctgm_Black.checked && !ctgm_Yellow.checked && !ctgm_Pink.checked && !ctgm_White.checked && !ctgm_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctgm_512_Gb.checked) {
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex") });
            }
        });

        ctgm_5_4_.addEventListener("change", () => {
            if (!ctgm_1_Tb.checked && !ctgm_2_Tb.checked && !ctgm_64_Gb.checked && !ctgm_128_Gb.checked && !ctgm_256_Gb.checked && !ctgm_512_Gb.checked && !ctgm_5_4_.checked && !ctgm_6_1_.checked && !ctgm_6_7_.checked && !ctgm_Silver.checked && !ctgm_Gray.checked && !ctgm_Black.checked && !ctgm_Yellow.checked && !ctgm_Pink.checked && !ctgm_White.checked && !ctgm_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctgm_5_4_.checked) {
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctgm_6_1_.addEventListener("change", () => {
            if (!ctgm_1_Tb.checked && !ctgm_2_Tb.checked && !ctgm_64_Gb.checked && !ctgm_128_Gb.checked && !ctgm_256_Gb.checked && !ctgm_512_Gb.checked && !ctgm_5_4_.checked && !ctgm_6_1_.checked && !ctgm_6_7_.checked && !ctgm_Silver.checked && !ctgm_Gray.checked && !ctgm_Black.checked && !ctgm_Yellow.checked && !ctgm_Pink.checked && !ctgm_White.checked && !ctgm_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctgm_6_1_.checked) {
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctgm_6_7_.addEventListener("change", () => {
            if (!ctgm_1_Tb.checked && !ctgm_2_Tb.checked && !ctgm_64_Gb.checked && !ctgm_128_Gb.checked && !ctgm_256_Gb.checked && !ctgm_512_Gb.checked && !ctgm_5_4_.checked && !ctgm_6_1_.checked && !ctgm_6_7_.checked && !ctgm_Silver.checked && !ctgm_Gray.checked && !ctgm_Black.checked && !ctgm_Yellow.checked && !ctgm_Pink.checked && !ctgm_White.checked && !ctgm_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctgm_6_7_.checked) {
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex") });
            }
        });

        ctgm_Silver.addEventListener("change", () => {
            if (!ctgm_1_Tb.checked && !ctgm_2_Tb.checked && !ctgm_64_Gb.checked && !ctgm_128_Gb.checked && !ctgm_256_Gb.checked && !ctgm_512_Gb.checked && !ctgm_5_4_.checked && !ctgm_6_1_.checked && !ctgm_6_7_.checked && !ctgm_Silver.checked && !ctgm_Gray.checked && !ctgm_Black.checked && !ctgm_Yellow.checked && !ctgm_Pink.checked && !ctgm_White.checked && !ctgm_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctgm_Silver.checked) {
                item__cards__block_11.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctgm_Gray.addEventListener("change", () => {
            if (!ctgm_1_Tb.checked && !ctgm_2_Tb.checked && !ctgm_64_Gb.checked && !ctgm_128_Gb.checked && !ctgm_256_Gb.checked && !ctgm_512_Gb.checked && !ctgm_5_4_.checked && !ctgm_6_1_.checked && !ctgm_6_7_.checked && !ctgm_Silver.checked && !ctgm_Gray.checked && !ctgm_Black.checked && !ctgm_Yellow.checked && !ctgm_Pink.checked && !ctgm_White.checked && !ctgm_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctgm_Gray.checked) {
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctgm_Black.addEventListener("change", () => {
            if (!ctgm_1_Tb.checked && !ctgm_2_Tb.checked && !ctgm_64_Gb.checked && !ctgm_128_Gb.checked && !ctgm_256_Gb.checked && !ctgm_512_Gb.checked && !ctgm_5_4_.checked && !ctgm_6_1_.checked && !ctgm_6_7_.checked && !ctgm_Silver.checked && !ctgm_Gray.checked && !ctgm_Black.checked && !ctgm_Yellow.checked && !ctgm_Pink.checked && !ctgm_White.checked && !ctgm_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctgm_Black.checked) {
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctgm_Yellow.addEventListener("change", () => {
            if (!ctgm_1_Tb.checked && !ctgm_2_Tb.checked && !ctgm_64_Gb.checked && !ctgm_128_Gb.checked && !ctgm_256_Gb.checked && !ctgm_512_Gb.checked && !ctgm_5_4_.checked && !ctgm_6_1_.checked && !ctgm_6_7_.checked && !ctgm_Silver.checked && !ctgm_Gray.checked && !ctgm_Black.checked && !ctgm_Yellow.checked && !ctgm_Pink.checked && !ctgm_White.checked && !ctgm_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctgm_Yellow.checked) {
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctgm_Pink.addEventListener("change", () => {
            if (!ctgm_1_Tb.checked && !ctgm_2_Tb.checked && !ctgm_64_Gb.checked && !ctgm_128_Gb.checked && !ctgm_256_Gb.checked && !ctgm_512_Gb.checked && !ctgm_5_4_.checked && !ctgm_6_1_.checked && !ctgm_6_7_.checked && !ctgm_Silver.checked && !ctgm_Gray.checked && !ctgm_Black.checked && !ctgm_Yellow.checked && !ctgm_Pink.checked && !ctgm_White.checked && !ctgm_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctgm_Pink.checked) {
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctgm_White.addEventListener("change", () => {
            if (!ctgm_1_Tb.checked && !ctgm_2_Tb.checked && !ctgm_64_Gb.checked && !ctgm_128_Gb.checked && !ctgm_256_Gb.checked && !ctgm_512_Gb.checked && !ctgm_5_4_.checked && !ctgm_6_1_.checked && !ctgm_6_7_.checked && !ctgm_Silver.checked && !ctgm_Gray.checked && !ctgm_Black.checked && !ctgm_Yellow.checked && !ctgm_Pink.checked && !ctgm_White.checked && !ctgm_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctgm_White.checked) {
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
        ctgm_Violet.addEventListener("change", () => {
            if (!ctgm_1_Tb.checked && !ctgm_2_Tb.checked && !ctgm_64_Gb.checked && !ctgm_128_Gb.checked && !ctgm_256_Gb.checked && !ctgm_512_Gb.checked && !ctgm_5_4_.checked && !ctgm_6_1_.checked && !ctgm_6_7_.checked && !ctgm_Silver.checked && !ctgm_Gray.checked && !ctgm_Black.checked && !ctgm_Yellow.checked && !ctgm_Pink.checked && !ctgm_White.checked && !ctgm_Violet.checked) {
                item__cards__block_1.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.add("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.add("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex_2"); });
            }
            if (ctgm_Violet.checked) {
                item__cards__block_17.forEach((e) => { e.classList.add("d_flex"); });
                item__cards__block_1.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_2.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_3.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_4.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_5.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_6.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_7.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_8.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_9.forEach((e) => { e.classList.remove("d_flex_2"); });

                item__cards__block_11.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_12.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_13.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_14.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_15.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_16.forEach((e) => { e.classList.remove("d_flex_2"); });
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex_2"); });
            } else {
                item__cards__block_17.forEach((e) => { e.classList.remove("d_flex") });
            }
        });
    </script>
    <?php require ("./components/footer.php"); ?>
</body>

</html>