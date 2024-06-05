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
    $suc = $conn->query("INSERT INTO `planshety_apple`(`id`, `name`, `price`, `memory`, `color`, `properties`, `availability`, `description`, `photo_1`, `photo_all`) VALUES (NULL, '$name', '$price', '$memory', '$color', '$json', '$availability', '$description', '$photo_1', '$photo_all')");
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
        <input type="text" name="add_product_ipad_post" hidden>
        <label>
            <span>Название товара</span>
            <input type="text" required name="name" placeholder="Планшет Apple iPad 2021 10.2 Wi-Fi 64Gb (Серый космос)">
        </label>
        <label>
            <span>Цена</span>
            <input type="text" required name="price" placeholder="45203">
        </label>
        <label>
            <span>Внутрення память</span>
            <input type="text" required name="memory" placeholder="64 Gb">
        </label>
        <label>
            <span>Цвет</span>
            <input type="text" required name="color" placeholder="Gray">
        </label>
        <label>
            <span>Доступность</span>
            <input type="text" required name="availability" placeholder="есть">
        </label>
        <label>
            <span>Описание</span>
            <input type="text" required name="description" placeholder="iPad - это круто!">
        </label>
        <label>
            <span>Основное фото</span>
            <input type="text" required name="photo_1" placeholder="https://example.com/img.png">
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
            <span>Вес</span>
            <input type="text" required name="json_Ves" placeholder="487 г">
        </label>
        <label>
            <span>Аудио</span>
            <input type="text" required name="json_Audio" placeholder="AAC, Apple Lossless, WAV, MP3">
        </label>
        <label>
            <span>Экран</span>
            <input type="text" required name="json_Ekran" placeholder="10.2">
        </label>
        <label>
            <span>Видео</span>
            <input type="text" required name="json_Video" placeholder="MPEG-4, H.264, MOV, MP4, M-JPEG">
        </label>
        <label>
            <span>Датчики</span>
            <input type="text" required name="json_Datchiki" placeholder="Touch ID, трёхосевой гироскоп, акселерометр, барометр, датчик внешней освещённости  ">
        </label>
        <label>
            <span>Процессор</span>
            <input type="text" required name="json_Processor" placeholder="A13 Bionic с 64‑битной архитектурой">
        </label>
        <label>
            <span>Поддержка</span>
            <input type="text" required name="json_Podderzhka" placeholder="стилус Apple Pencil (1-го поколения), клавиатура Smart Keyboard, Bluetooth-клавиатура">
        </label>
        <label>
            <span>Разрешение</span>
            <input type="text" required name="json_Razreshenie" placeholder="2160х1620">
        </label>
        <label>
            <span>Тип дисплея</span>
            <input type="text" required name="json_Tip_displeya" placeholder="IPS">
        </label>
        <label>
            <span>Комплектация</span>
            <input type="text" required name="json_Komplektaciya" placeholder="кабель Lightning/USB-C, iPad, адаптер питания USB‑C мощностью 20 Вт">
        </label>
        <label>
            <span>Поддержка NFC</span>
            <input type="text" required name="json_Podderzhka_NFC" placeholder="нет">
        </label>
        <label>
            <span>Размеры</span>
            <input type="text" required name="json_Razmery_DhShhG" placeholder="250.6x174.1x7.5 мм">
        </label>
        <label>
            <span>Сотовая связь</span>
            <input type="text" required name="json_Sotovaya_svyaz" placeholder="нет">
        </label>
        <label>
            <span>Сенсорный экран</span>
            <input type="text" required name="json_Sensornyj_ekran" placeholder="емкостный, мультитач">
        </label>
        <label>
            <span>Тыловая камера</span>
            <input type="text" required name="json_Tylovaya_kamera" placeholder="есть, 8 Мпикс">
        </label>
        <label>
            <span>Зарядка от USB</span>
            <input type="text" required name="json_Zaryadka_ot_USB" placeholder="есть">
        </label>
        <label>
            <span>Материал корпуса</span>
            <input type="text" required name="json_Material_korpusa" placeholder="алюминий">
        </label>
        <label>
            <span>Поддержка Wi-Fi</span>
            <input type="text" required name="json_Podderzhka_Wi_Fi" placeholder="есть, Wi-Fi 802.11ac   ">
        </label>
        <label>
            <span>Покрытие дисплея</span>
            <input type="text" required name="json_Pokrytie_displeya" placeholder="олеофобное (устойчивое к появлению следов от пальцев)">
        </label>
        <label>
            <span>Тип аккумулятора</span>
            <input type="text" required name="json_Tip_akkumulyatora" placeholder="Li-Ion">
        </label>
        <label>
            <span>Фронтальная камера</span>
            <input type="text" required name="json_Frontalnaya_kamera" placeholder="есть, 12 Мпикс, ƒ/2.4">
        </label>
        <label>
            <span>Встроенная камера</span>
            <input type="text" required name="json_Vstroennaya_pamyat" placeholder="64 Гб">
        </label>
        <label>
            <span>Разрешение видео</span>
            <input type="text" required name="json_Razreshenie_video__" placeholder="HD-видео 1080p с частотой 30 кадров/с">
        </label>
        <label>
            <span>Встроенные динамики</span>
            <input type="text" required name="json_Vstroennye_dinamiki" placeholder="есть - 2 стерео      ">
        </label>
        <label>
            <span>Ёмкость аккумулятора</span>
            <input type="text" required name="json_Emkost_akkumulyatora" placeholder="32.4 Вт⋅ч">
        </label>
        <label>
            <span>Поддержка Bluetooth</span>
            <input type="text" required name="json_Podderzhka_Bluetooth" placeholder="есть, Bluetooth 4.2">
        </label>
        <label>
            <span>Слот для карты памяти</span>
            <input type="text" required name="json_Slot_dlya_kart_pamyati" placeholder="нет">
        </label>
        <label>
            <span>Операционная система</span>
            <input type="text" required name="json_Operacionnaya_sistema" placeholder="iOS 15">
        </label>
        <label>
            <span>Количество микрофонов</span>
            <input type="text" required name="json_Kolichestvo_mikrofonov" placeholder="  2 ">
        </label>
        <label>
            <span>Сканер отпечатка пальца</span>
            <input type="text" required name="json_Skaner_otpechatka_palca" placeholder="есть">
        </label>
        <label>
            <span>Особенности тыловой камеры</span>
            <input type="text" required name="json_Osobennosti_tylovoj_kamery" placeholder="автоматическая стабилизация изображения, автофокус, фокусировка касанием, распознавание лиц и фигур,контроль экспозиции,фотосъёмка в режиме HDR,панорамная съемка,серийная съемка, режим таймера, привязка фотографий к месту съемки,Live Photos">
        </label>
        <label>
            <span>Диафрагма фронтальной камеры</span>
            <input type="text" required name="json_Diafragma_frontalnoj_kamery" placeholder="ƒ/2.2">
        </label>
        <label>
            <span>Число пикселей на дюйм (PPI)</span>
            <input type="text" required name="json_Chislo_pikselej_na_dyujm_PPI" placeholder="264">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <label>
            <span></span>
            <input type="text" required name="json_" placeholder="">
        </label>
        <input type="submit" value="Добавить"/>
    </form>
</div>
<?php require("./components/footer.php"); ?>
</body>
</html>