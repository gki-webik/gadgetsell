<?php
if (isset($_POST["login"]) || isset($_POST["password"])) {
    $host = 'localhost';
    $user = 'root';
    $db = 'u2526134_wp500';
    $password = '';
    $login = $_POST["login"];
    $conn = new mysqli($host, $user, $password, $db);
    $conn->query("SET NAMES 'utf8mb4'");
    $token = md5($_COOKIE["token_admin"]);
    $suc = $conn->query("SELECT * FROM `admin` WHERE `login` = '$login'");
    if ($suc->num_rows > 0) {
        while ($row = $suc->fetch_assoc()){
            if ($row["password"] === md5($_POST["password"])){
                setcookie('token_admin', "1mo3foin3rviuo3v0912384gj31uvnr2oeqcnpwroeuvwe408wvhrwjubevvrewpjo_WEBIK_gki-webik.ru", time() + 36000000, "/");

                print_r('<script>document.location.href="admin.php"</script>');
            } else{
                setcookie('token_admin', "", time() - 3600, "/");

                print_r('<script>document.location.href="admin_login.php"</script>');
            }
        }
    } else {
        setcookie('token_admin', "", time() - 3600, "/");
        print_r('<script>document.location.href="admin_login.php"</script>');
    }
}
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
        print_r('<script>document.location.href="admin.php"</script>');
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
    <title>Админ-панель | Вход</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<?php require("./components/header.php"); ?>
<div class="kroshka_box">
    <div class="kroshka">
        <a href="/">Главная</a> / <a href="/admin">Админ-панель</a> / <a
                class="a_kroshka_active">Вход</a>
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
        max-width: 450px;
    }

    .adm_box_form form input {
        min-width: 300px;
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
</style>
<div class="adm_box_form">
    <form action="" method="post">
        <input type="text" name="login" required placeholder="Логин"/>
        <input type="password" name="password" required placeholder="Пароль"/>
        <input type="submit" value="Войти"/>
    </form>
</div>
<?php require("./components/footer.php"); ?>
</body>
</html>