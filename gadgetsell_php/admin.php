<?php
if (isset($_COOKIE["token_admin"])) {
    $host = 'localhost';
    $user = 'root';
    $db = 'u2526134_wp500';
    $password = '';
    $conn = new mysqli($host, $user, $password, $db);
    $conn->query("SET NAMES 'utf8mb4'");
    $token = md5($_COOKIE["token_admin"]);
    $suc = $conn->query("SELECT * FROM `admin` WHERE `token` = '$token'");
    if ($suc->num_rows > 0) {
    } else {
        setcookie('token_admin', "", time() - 3600, "/");
        print_r('<script>document.location.href="admin_login.php"</script>');
    }
} else {
    print_r('<script>document.location.href="admin_login.php"</script>');
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
        <a href="/">Главная</a> / <a href="/admin">Админ-панель</a>
    </div>
</div>
<style>
    .adm_box_1 {
        display: flex;
        justify-content: center;
        align-content: center;
        margin: 70px 20px;
        gap: 20px;
    }

    .adm_box_1__item {
        background-color: white;
        padding: 10px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-content: center;
        text-align: center;
        transition: all 0.15s ease-in-out;
        justify-content: center;
        gap: 20px;
        width: 200px;
        cursor: pointer;
        height: 200px;
    }

    .adm_box_1__item:hover {
        background-color: #f6f6f6;
    }

    .adm_box_1__item i {
        font-size: 3em;
    }
</style>
<div class="adm_box_1" onclick="window.open('admin_add_product_iphone.php')">
    <div class="adm_box_1__item">
        <i class='bx bx-plus'></i>
        Добавить товар
    </div>
    <div class="adm_box_1__item" onclick="window.open('admin_edit_product.php')">
        <i class='bx bx-edit-alt'></i>
        Изменить товар
    </div>
</div>
<?php require("./components/footer.php"); ?>
</body>
</html>