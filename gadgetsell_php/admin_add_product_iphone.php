<?php
if (isset($_POST["name"])) {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $memory = $_POST["memory"];
    $color = $_POST["color"];
    $availability = $_POST["availability"];
    $description = $_POST["description"];
    $photo_1 = $_POST["photo_1"];
    $photo_2 = $_POST["photo_2"];
    $photo_3 = $_POST["photo_3"];
    $json_Tip = $_POST["json_Tip"];
    $json_Ves = $_POST["json_Ves"];
    $json_Razem = $_POST["json_Razem"];
    $json_Fonarik = $_POST["json_Fonarik"];
    $json_Obektiv = $_POST["json_Obektiv"];
    $json_Razmery = $_POST["json_Razmery"];
    $json_Yarkost = $_POST["json_Yarkost"];
    $json_Datchiki = $_POST["json_Datchiki"];
    $json_Diagonal = $_POST["json_Diagonal"];
    $json_Standart = $_POST["json_Standart"];
    $json_Zaryadka = $_POST["json_Zaryadka"];
    $json_Zum_foto = $_POST["json_Zum_foto"];
    $json_Processor = $_POST["json_Processor"];
    $json_SIM_karta = $_POST["json_SIM_karta"];
    $json_Zum_video = $_POST["json_Zum_video"];
    $json_Interfejsy = $_POST["json_Interfejsy"];
    $json_Tip_ekrana = $_POST["json_Tip_ekrana"];
    $json_Upravlenie = $_POST["json_Upravlenie"];
    $json_Osobennosti = $_POST["json_Osobennosti"];
    $json_Tip_korpusa = $_POST["json_Tip_korpusa"];
    $json_Akkumulyator = $_POST["json_Akkumulyator"];
    $json_Konstrukciya = $_POST["json_Konstrukciya"];
    $json_Kontrastnost = $_POST["json_Kontrastnost"];
    $json_Tip_obektiva = $_POST["json_Tip_obektiva"];
    $json_Cistema_A_GPS = $_POST["json_Cistema_A_GPS"];
    $json_Funkcii_video = $_POST["json_Funkcii_video"];
    $json_Komplektaciya = $_POST["json_Komplektaciya"];
    $json_Tip_SIM_karty = $_POST["json_Tip_SIM_karty"];
    $json_Material_korpusa = $_POST["json_Material_korpusa"];
    $json_Razreshenie_video = $_POST["json_Razreshenie_video"];
    $json_Tip_akkumulyatora = $_POST["json_Tip_akkumulyatora"];
    $json_Zashchita_obektiva = $_POST["json_Zashchita_obektiva"];
    $json_Data_anonsirovaniya = $_POST["json_Data_anonsirovaniya"];
    $json_Sootnoshenie_storon = $_POST["json_Sootnoshenie_storon"];
    $json_Tylovaya_fotokamera = $_POST["json_Tylovaya_fotokamera"];
    $json_Kolichestvo_SIM_kart = $_POST["json_Kolichestvo_SIM_kart"];
    $json_Razmer_izobrazheniya = $_POST["json_Razmer_izobrazheniya"];
    $json_Operacionnaya_sistema = $_POST["json_Operacionnaya_sistema"];
    $json_Tip_sensornogo_ekrana = $_POST["json_Tip_sensornogo_ekrana"];
    $json_Vosproizvedenie_video = $_POST["json_Vosproizvedenie_video"];
    $json_Obem_vstroennoj_pamyati = $_POST["json_Obem_vstroennoj_pamyati"];
    $json_Sputnikovaya_navigaciya = $_POST["json_Sputnikovaya_navigaciya"];
    $json_Funkcii_frontalnoj_kamery = $_POST["json_Funkcii_frontalnoj_kamery"];
    $json_Uroven_zashchity_ot_vlagi = $_POST["json_Uroven_zashchity_ot_vlagi"];
    $json_Funkcii_tylovoj_fotokamery = $_POST["json_Funkcii_tylovoj_fotokamery"];
    $json_Diafragma_frontalnoj_kamery = $_POST["json_Diafragma_frontalnoj_kamery"];
    $json_Chislo_pikselej_na_dyujm_PPI = $_POST["json_Chislo_pikselej_na_dyujm_PPI"];
    $json_Diafragma_tylovoj_fotokamery = $_POST["json_Diafragma_tylovoj_fotokamery"];
    $json_Razreshenie_frontalnoj_kamery = $_POST["json_Razreshenie_frontalnoj_kamery"];
    $json_Razreshenie_zamedlennogo_video = $_POST["json_Razreshenie_zamedlennogo_video"];
    $json_Gromkaya_svyaz_vstroennyj_dinamik = $_POST["json_Gromkaya_svyaz_vstroennyj_dinamik"];
    $json_Razreshenie_video_frontalnoj_kamery = $_POST["json_Razreshenie_video_frontalnoj_kamery"];
    $json_Vremya_raboty_v_rezhime_proslushivaniya_muzyki = $_POST["json_Vremya_raboty_v_rezhime_proslushivaniya_muzyki"];
    $json = '{
        "Tip": "' . $json_Tip . '",
        "Ves": "' . $json_Ves . '",
        "Razem": "' . $json_Razem . '",
        "Fonarik": "' . $json_Fonarik . '",
        "Obektiv": "' . $json_Obektiv . '",
        "Razmery": "' . $json_Razmery . '",
        "Yarkost": "' . $json_Yarkost . '",
        "Datchiki": "' . $json_Datchiki . '",
        "Diagonal": "' . $json_Diagonal . '",
        "Standart": "' . $json_Standart . '",
        "Zaryadka": "' . $json_Zaryadka . '",
        "Zum_foto": "' . $json_Zum_foto . '",
        "Processor": "' . $json_Processor . '",
        "SIM_karta": "' . $json_SIM_karta . '",
        "Zum_video": "' . $json_Zum_video . '",
        "Interfejsy": "' . $json_Interfejsy . '",
        "Tip_ekrana": "' . $json_Tip_ekrana . '",
        "Upravlenie": "' . $json_Upravlenie . '",
        "Osobennosti": "' . $json_Osobennosti . '",
        "Tip_korpusa": "' . $json_Tip_korpusa . '",
        "Akkumulyator": "' . $json_Akkumulyator . '",
        "Konstrukciya": "' . $json_Konstrukciya . '",
        "Kontrastnost": "' . $json_Kontrastnost . '",
        "Tip_obektiva": "' . $json_Tip_obektiva . '",
        "Cistema_A_GPS": "' . $json_Cistema_A_GPS . '",
        "Funkcii_video": "' . $json_Funkcii_video . '",
        "Komplektaciya": "' . $json_Komplektaciya . '",
        "Tip_SIM_karty": "' . $json_Tip_SIM_karty . '",
        "Material_korpusa": "' . $json_Material_korpusa . '",
        "Razreshenie_video": "' . $json_Razreshenie_video . '",
        "Tip_akkumulyatora": "' . $json_Tip_akkumulyatora . '",
        "Zashchita_obektiva": "' . $json_Zashchita_obektiva . '",
        "Data_anonsirovaniya": "' . $json_Data_anonsirovaniya . '",
        "Sootnoshenie_storon": "' . $json_Sootnoshenie_storon . '",
        "Tylovaya_fotokamera": "' . $json_Tylovaya_fotokamera . '",
        "Kolichestvo_SIM_kart": "' . $json_Kolichestvo_SIM_kart . '",
        "Razmer_izobrazheniya": "' . $json_Razmer_izobrazheniya . '",
        "Operacionnaya_sistema": "' . $json_Operacionnaya_sistema . '",
        "Tip_sensornogo_ekrana": "' . $json_Tip_sensornogo_ekrana . '",
        "Vosproizvedenie_video": "' . $json_Vosproizvedenie_video . '",
        "Obem_vstroennoj_pamyati": "' . $json_Obem_vstroennoj_pamyati . '",
        "Sputnikovaya_navigaciya": "' . $json_Sputnikovaya_navigaciya . '",
        "Funkcii_frontalnoj_kamery": "' . $json_Funkcii_frontalnoj_kamery . '",
        "Uroven_zashchity_ot_vlagi": "' . $json_Uroven_zashchity_ot_vlagi . '",
        "Funkcii_tylovoj_fotokamery": "' . $json_Funkcii_tylovoj_fotokamery . '",
        "Diafragma_frontalnoj_kamery": "' . $json_Diafragma_frontalnoj_kamery . '",
        "Chislo_pikselej_na_dyujm_PPI": "' . $json_Chislo_pikselej_na_dyujm_PPI . '",
        "Diafragma_tylovoj_fotokamery": "' . $json_Diafragma_tylovoj_fotokamery . '",
        "Razreshenie_frontalnoj_kamery": "' . $json_Razreshenie_frontalnoj_kamery . '",
        "Razreshenie_zamedlennogo_video": "' . $json_Razreshenie_zamedlennogo_video . '",
        "Gromkaya_svyaz_vstroennyj_dinamik": "' . $json_Gromkaya_svyaz_vstroennyj_dinamik . '",
        "Razreshenie_video_frontalnoj_kamery": "' . $json_Razreshenie_video_frontalnoj_kamery . '",
        "Vremya_raboty_v_rezhime_proslushivaniya_muzyki": "' . $json_Vremya_raboty_v_rezhime_proslushivaniya_muzyki . '"
    }';
    $photo_all = '{
    "img_1": "' . $photo_2 . '",
    "img_2": "' . $photo_3 . '"
    }';
    $host = 'localhost';
    $user = 'root';
    $db = 'u2526134_wp500';
    $password = '';
    $conn = new mysqli($host, $user, $password, $db);
    $conn->query("SET NAMES 'utf8mb4'");
    $token = md5($_COOKIE["token_admin"]);
    $suc = $conn->query("INSERT INTO `telefony_apple`(`id`, `name`, `price`, `memory`, `color`, `properties`, `availability`, `description`, `photo_1`, `photo_all`) VALUES (NULL, '$name', '$price', '$memory', '$color', '$json', '$availability', '$description', '$photo_1', '$photo_all')");
    if ($suc) {
        print_r("<script>alert('Товар успешно добавлен!'); setTimeout(()=> { document.location.href='admin.php';}, 1000)</script>");
    } else {
        setcookie('token_admin', "", time() - 3600, "/");
        header("Location: admin_login.php");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ-панель</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<?php require("./components/header.php"); ?>
<div class="kroshka_box">
    <div class="kroshka">
        <a href="/">Главная</a> / <a href="/admin">Админ-панель</a> / <a
                class="a_kroshka_active">Добавление товара</a>
    </div>
</div>
<style>
    .adm_box_form {
        display: flex;
        justify-content: center;
        align-content: center;
        margin: 70px 20px;
        gap: 20px;
        padding: 20px;
    }

    .adm_box_form form {
        display: flex;
        flex-direction: column;
        background-color: #f3f3f3;
        padding: 40px;
        width: 100%;
        gap: 20px;
        max-width: 550px;
    }

    .adm_box_form form input {
        width: 100%;
        height: 50px;
        padding: 0 10px;
        font-size: 17px;
    }

    .adm_box_form form input[type="submit"] {
        cursor: pointer;
        border: 2px solid #0271e3;
        transition: all 0.15s ease-in-out;
    }

    .adm_box_form form input[type="submit"]:hover {
        background-color: #0271e3;
        color: white;
    }

    .adm_box_form form label {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .adm_box_form form label span {
        display: flex;
        flex-direction: column;
        gap: 10px;
        color: #707a8c;
    }

    .adm_box_form form input::placeholder {
        color: grey;
        font-size: 13px;
    }

    @media screen and  (max-width: 432px) {
        .adm_box_form {
            padding: 0;
            margin: 0;
        }
    }
</style>
<div class="adm_box_form">
    <form action="/admin" method="post">
        <input type="text" name="add_product_iphone_post" hidden>
        <label>
            <span>Название товара</span>
            <input type="text" required name="name" placeholder="Телефон Apple iPhone 11 64Gb (Black)">
        </label>
        <label>
            <span>Цена</span>
            <input type="text" required name="price" placeholder="45030">
        </label>
        <label>
            <span>Встроенная память</span>
            <input type="text" required name="memory" placeholder="64 Gb">
        </label>
        <label>
            <span>Цвет</span>
            <input type="text" required name="color" placeholder="Black">
        </label>
        <label>
            <span>Описание</span>
            <input type="text" required name="description" placeholder="iPhone Это круто!">
        </label>






        <label>
            <span>Доступность</span>
            <input type="text" required name="availability" placeholder="есть">
        </label>
        <label>
            <span>Добавочное изображение N1</span>
            <input type="text" required name="photo_2" placeholder="https://example.com/img.png">
        </label>
        <label>
            <span>Добавочное изображение N2</span>
            <input type="text" required name="photo_3" placeholder="https://example.com/img.png">
        </label>
        <label>
            <span>Основное изображение</span>
            <input type="text" required name="photo" placeholder="https://example.com/img.png">
        </label>
        <label>
            <span>Тип</span>
            <input type="text" required name="json_Tip" placeholder="смартфон">
        </label>
        <label>
            <span>Вес</span>
            <input type="text" required name="json_Ves" placeholder="206 г">
        </label>
        <label>
            <span>Разъём</span>
            <input type="text" required name="json_Razem" placeholder="Lightning">
        </label>
        <label>
            <span>Фонарик</span>
            <input type="text" required name="json_Fonarik" placeholder="есть">
        </label>
        <label>
            <span>Объектив</span>
            <input type="text" required name="json_Obektiv" placeholder="пятилинзовый и семилинзовый">
        </label>
        <label>
            <span>Размер</span>
            <input type="text" required name="json_Razmery" placeholder="147.5x71.5x7.85 мм">
        </label>
        <label>
            <span>Яркость</span>
            <input type="text" required name="json_Yarkost" placeholder="2000 кд/м² ">
        </label>
        <label>
            <span>Датчики</span>
            <input type="text" required name="json_Datchiki"
                   placeholder="освещения,ориентации дисплея, приближения, трёхосевой гироскоп, акселерометр, барометр, сканер LiDAR ">
        </label>
        <label>
            <span>Диагональ</span>
            <input type="text" required name="json_Diagonal" placeholder="6.1 дюйм.">
        </label>
        <label>
            <span>Стандрат</span>
            <input type="text" required name="json_Standart"
                   placeholder="5G (sub‑6 GHz), Gigabit Class LTE, GSM/EDGE, UMTS/​HSPA+/​DC-HSDPA, MIMO, экспресс‑карты с резервным питанием">
        </label>
        <label>
            <span>Зарядка</span>
            <input type="text" required name="json_Zaryadka" placeholder="от сети">
        </label>
        <label>
            <span>Зум (фото)</span>
            <input type="text" required name="json_Zum_foto"
                   placeholder="оптический 2x (на уменьшение), оптический 3x (на увеличение), диапазон оптического зума 6x, цифровой 15x">
        </label>
        <label>
            <span>Процессор</span>
            <input type="text" required name="json_Processor" placeholder="A16 Bionic">
        </label>
        <label>
            <span>SIM-карта</span>
            <input type="text" required name="json_SIM_karta" placeholder="eSIM">
        </label>
        <label>
            <span>Зум (видео)</span>
            <input type="text" required name="json_Zum_video"
                   placeholder="цифровой 9х, оптический 2x (на уменьшение), оптический 3x (на увеличение), диапазон оптического зума 6x">
        </label>
        <label>
            <span>Интерфейс</span>
            <input type="text" required name="json_Interfejsy"
                   placeholder="Wi‑Fi 6 (802.11ax), Bluetooth 5.3, NFC с поддержкой режима считывания">
        </label>
        <label>
            <span>Тип экрана</span>
            <input type="text" required name="json_Tip_ekrana" placeholder="OLED / Super Retina XDR">
        </label>
        <label>
            <span>Управление</span>
            <input type="text" required name="json_Upravlenie" placeholder="голосовой набор, голосовое управление">
        </label>
        <label>
            <span>Особенности</span>
            <input type="text" required name="json_Osobennosti" placeholder="Face ID">
        </label>
        <label>
            <span>Тип корпуса</span>
            <input type="text" required name="json_Tip_korpusa" placeholder="классический">
        </label>
        <label>
            <span>Аккумулятор</span>
            <input type="text" required name="json_Akkumulyator" placeholder="несъемный">
        </label>
        <label>
            <span>Конструкция</span>
            <input type="text" required name="json_Konstrukciya" placeholder="водозащита">
        </label>
        <label>
            <span>Контрасность</span>
            <input type="text" required name="json_Kontrastnost" placeholder="2000000:1">
        </label>
        <label>
            <span>Тип объектива</span>
            <input type="text" required name="json_Tip_obektiva" placeholder="основной, сверхширокоугольный, телефото">
        </label>
        <label>
            <span>Система GPS</span>
            <input type="text" required name="json_Cistema_A_GPS" placeholder="есть">
        </label>
        <label>
            <span>Функции видео</span>
            <input type="text" required name="json_Funkcii_video"
                   placeholder="запись макровидео, в том числе замедленная съемка и таймлапс, режим «Таймлапс» со стабилизацией изображения, видео «Таймлапс» в ночном режиме, функция QuickTake, аудиозум, вспышка True Tone, следящий автофокус, возможность съёмки фотографий во время записи видео, увеличение при воспроизведении, запись стереозвука, форматы видео: HEVC, H.264 и ProRes, кинематографич. стабилизация видео (4K, 1080p и 720p), режим «Киноэффект» для съёмки видео до 4K, HDR с частотой 30 к/с, режим Action для съёмки видео до 2.8К с частотой 60 к/с">
        </label>
        <label>
            <span>Комплектация</span>
            <input type="text" required name="json_Komplektaciya" placeholder="смартфон, кабель Lightning / USB-С   ">
        </label>
        <label>
            <span>Тип SIM-карты</span>
            <input type="text" required name="json_Tip_SIM_karty" placeholder="eSIM + eSIM">
        </label>
        <label>
            <span>Материал корпуса</span>
            <input type="text" required name="json_Material_korpusa" placeholder="стекло, керамика, нержавеющая сталь">
        </label>
        <label>
            <span>Разрешение видео</span>
            <input type="text" required name="json_Razreshenie_video"
                   placeholder="ProRes видео до 4K с частотой 30 к/с (для 128 ГБ памяти: до 1080p с частотой 30 к/с), HDR‑видео в стандарте Dolby Vision до 60 к/с, 4K с частотой 24, 25, 30 или 60 к/с, HD-видео 1080p с частотой 25, 30 или 60 к/с, HD-видео 720p с частотой 30 к/с">
        </label>
        <label>
            <span>Тип аккумулятора</span>
            <input type="text" required name="json_Tip_akkumulyatora" placeholder="Li-Ion">
        </label>
        <label>
            <span>Защита объектива</span>
            <input type="text" required name="json_Zashchita_obektiva" placeholder="сапфировое стекло">
        </label>
        <label>
            <span>Дата анонсирования</span>
            <input type="text" required name="json_Data_anonsirovaniya" placeholder="2022">
        </label>
        <label>
            <span>Соотношение сторон</span>
            <input type="text" required name="json_Sootnoshenie_storon" placeholder="19.5:9">
        </label>
        <label>
            <span>Тыловая фотокамера</span>
            <input type="text" required name="json_Tylovaya_fotokamera" placeholder="тройная 48 МП + 12 МП + 12 МП    ">
        </label>
        <label>
            <span>Количество SIM-карт</span>
            <input type="text" required name="json_Kolichestvo_SIM_kart" placeholder="4">
        </label>
        <label>
            <span>Размер изображения</span>
            <input type="text" required name="json_Razmer_izobrazheniya" placeholder="2556x1179">
        </label>
        <label>
            <span>Операционная система</span>
            <input type="text" required name="json_Operacionnaya_sistema" placeholder="iOS 16">
        </label>
        <label>
            <span>Тип сенсорного экрана</span>
            <input type="text" required name="json_Tip_sensornogo_ekrana" placeholder="мультитач">
        </label>
        <label>
            <span>Воспроизведение видео</span>
            <input type="text" required name="json_Vosproizvedenie_video" placeholder="до 23 ч">
        </label>
        <label>
            <span>Объём встроенной памяти</span>
            <input type="text" required name="json_Obem_vstroennoj_pamyati" placeholder="256 Гб">
        </label>
        <label>
            <span>Спутниковая навигация</span>
            <input type="text" required name="json_Sputnikovaya_navigaciya"
                   placeholder="GPS, ГЛОНАСС, Galileo, QZSS,BeiDou">
        </label>
        <label>
            <span>Функции фронтальной камеры</span>
            <input type="text" required name="json_Funkcii_frontalnoj_kamery"
                   placeholder="вспышка Retina Flash, функция Smart HDR 4, автофокус с технологией Focus Pixels, технология Photonic Engine, технология Deep Fusion, режим «Портрет» с улучшенным эффектом боке и функцией «Глубина», портретное освещение, анимированные смайлики Animoji и Memoji, ночной режим, фотографические стили, формат Apple ProRAW, широкий цветовой диапазон для фотографий и Live Photos, коррекция искажений объектива, автомат. стабилизация изображения, серийная съëмка, режим «Киноэффект» для съёмки видео до 4K HDR с частотой 30 к/с, режим «Таймлапс» со стабилизацией изображения, функция QuickTake, видео «Таймлапс» в ночном режиме, кинематографическая стабилизация видео (4K, 1080p и 720p)">
        </label>
        <label>
            <span>Уровень защиты от влаги</span>
            <input type="text" required name="json_Uroven_zashchity_ot_vlagi"
                   placeholder="Ip 68 допускается погружение в воду на глубину до 6 метров длительностью до 30 минут">
        </label>
        <label>
            <span>Функции тыловой фотокамеры</span>
            <input type="text" required name="json_Funkcii_tylovoj_fotokamery"
                   placeholder="вспышка True Tone, режим «Портрет» с улучшенным эффектом боке и функцией «Глубина», автомат. стабилизация изображения, автофокус, функция Smart HDR 4, ночной режим, панорамная съёмка, серийная съëмка, привязка фотографий к месту съёмки, портретное освещение, коррекция искажений объектива, технология Deep Fusion, форматы изображений: heif, jpg, dng, широкий цветовой диапазон для фотографий и Live Photos, макросъемка, портреты в ноч. режиме с помощью LiDAR Scanner, фотографические стили, технология Photonic Engine, формат Apple ProRAW, передовая с-ма устранения эффекта красных глаз">
        </label>
        <label>
            <span>Диафрагма фронтальной камеры</span>
            <input type="text" required name="json_Diafragma_frontalnoj_kamery" placeholder="ƒ/1.9">
        </label>
        <label>
            <span>Число пикселей на дюйм (PPI)</span>
            <input type="text" required name="json_Chislo_pikselej_na_dyujm_PPI" placeholder="460">
        </label>
        <label>
            <span>Диафрагма тыловой фотокамеры</span>
            <input type="text" required name="json_Diafragma_tylovoj_fotokamery" placeholder="ƒ/1.78, ƒ/2.2, ƒ/2.8">
        </label>
        <label>
            <span>Разрешение фронтальной камеры</span>
            <input type="text" required name="json_Razreshenie_frontalnoj_kamery" placeholder="12 МП">
        </label>
        <label>
            <span>Разрешение замедленного видео</span>
            <input type="text" required name="json_Razreshenie_zamedlennogo_video"
                   placeholder="HD-видео 1080р c частотой 120 к/с или 240 к/с">
        </label>
        <label>
            <span>Громкая связь встроенных динамиков</span>
            <input type="text" required name="json_Gromkaya_svyaz_vstroennyj_dinamik" placeholder="есть">
        </label>
        <label>
            <span>Разрешение видео фронтальной камеры</span>
            <input type="text" required name="json_Razreshenie_video_frontalnoj_kamery"
                   placeholder="ProRes видео до 4K с частотой 30 к/с (для 128 ГБ памяти: до 1080p с частотой 30 к/с), HDR‑видео в стандарте Dolby Vision до 60 к/с, 4K с частотой 24, 25, 30 или 60 к/с, HD-видео 1080p с частотой 25, 30 или 60 к/с, HD-видео 720p с частотой 30 к/с">
        </label>
        <label>
            <span>Время работы в режиме прослушивания музыки</span>
            <input type="text" required name="json_Vremya_raboty_v_rezhime_proslushivaniya_muzyki"
                   placeholder="до 75 ч">
        </label>
        <input type="submit" value="Добавить"/>
    </form>
</div>
<?php require("./components/footer.php"); ?>
</body>
</html>