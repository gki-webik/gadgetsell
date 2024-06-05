<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trade-in</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style_trade-in.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <?php require($_SERVER["DOCUMENT_ROOT"] . "/components/header.php"); ?>
    <main>
        <div class="kroshka_box">
            <div class="kroshka">
                <a href="/">Главная</a> / <a href="/trade-in" class="a_kroshka_active">Trade-in</a>
            </div>
        </div>
        <div class="main_box_big">
            <div class="info_block">
                <h2>Меняйтесь легко!</h2>
                <p>
                    Хотите купить новый гаджет, но не знаете, что делать со старым? Мы предлагаем вам обменять старый
                    гаджет по системе Trade-in!
                </p>
            </div>
            <div class="info_block">
                <h2>Как это работает?</h2>
                <p>
                    <b>Способ №1:</b>
                    С помощью онлайн-калькулятора оцениваете предварительный размер скидки, кликаете на кнопку «Получить
                    выгоду», откроется заявка на Trade-in.
                    В заявке необходимо будет указать:
                    – Модель гаджета, объем памяти, цвет;
                    – Комплектация;
                    – Был ли гаджет в ремонте, что было заменено;
                    – IMEI устройства или серийный номер (по желанию);
                    – Вашу контактную информацию, чтобы менеджеры могли дать вам предварительный ответ об оценочной
                    стоимости устройства.
                </p>
                <p>
                    <b>Способ №2:</b>
                    Вы можете позвонить к нам в магазин, оформить заказ на нужный гаджет и сказать менеджеру, что вы
                    хотите учесть в заказе Trade-in. Менеджер пригласит вас в магазин на оценку, где можно будет
                    обменять старый гаджет на новый с хорошей выгодой!
                </p>
            </div>
            <div class="info_block">
                <h2>Что мы не принимаем в Trade-in</h2>
                <p>Заблокированные гаджеты по Apple ID, к сожалению, обменять не получится.</p>
                <p>По вопросам Trade-in — звоните: <a href="tel:+74991100359" class="not-hover">+7 (499) 110-03-59</a>
                    (с 10:00 до 21:00) или пишите: <a href="mailto:info@gadgetstore.ru">info@gadgetstore.ru</a></p>
            </div>
        </div>
        <div class="block_constructor_box">
            <div class="block_constructor">
                <div class="lbl">
                    <p>Устройство</p>
                    <select class="select_Trade_in__1 active">
                        <option>*** выберите устройство ***</option>
                        <option>iPhone</option>
                        <option>MacBook</option>
                        <option>iPad</option>
                        <option>Apple Watch</option>
                        <option>iMac</option>
                    </select>
                </div>

                <div class="lbl">
                    <p>Модель</p>
                    <select class="select_Trade_in__2 active">
                        <option>*** выберите модель ***</option>
                        <option>iPhone</option>
                        <option>MacBook</option>
                        <option>iPad</option>
                        <option>Apple Watch</option>
                        <option>iMac</option>
                    </select>
                </div>

                <div class="lbl">
                    <p>Объем памяти</p>
                    <select class="select_Trade_in__3 active">
                        <option>*** выберите объем памяти ***</option>
                        <option>126 GB</option>
                        <option>256 GB</option>
                        <option>512 GB</option>
                        <option>1 TB</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="block_constructor_box__2">
            <div class="block_constructor__2">
                <h2>iPad Butterfly 2 X920E</h2>
                <h3>Замена дисплейного модуля = 1332 руб.</h3>
                <button class="select_Trade_in__btn">Получить выгоду</button>
            </div>
        </div>
    </main>
    <?php require($_SERVER["DOCUMENT_ROOT"] . "/components/footer.php"); ?>
</body>

</html>