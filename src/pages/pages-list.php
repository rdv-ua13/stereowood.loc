<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pages</title>
        <style type="text/css">
            body {
                margin: 0;
                font-family: sans-serif;
                font-size: 16px;
                line-height: 1.4;
                box-sizing: border-box;
            }
            a {
                display: inline-block;
            }
            a:focus {
                color: chocolate;
            }
            div {
                padding-left: 40px;
                margin-bottom: 20px;
            }
            img {
                min-width: 200px;
                width: 200px;
            }
            ul {
                padding-left: 15px;
                list-style: none;
            }
            li {
                position: relative;
                margin-bottom: 10px;
                padding-left: 15px;
            }
            li:before {
                position: absolute;
                content: "";
                top: 7px;
                left: 0;
                width: 5px;
                height: 5px;
                border-radius: 50%;
                background-color: #000;
            }
            .logo {
                display: inline-flex;
                margin-right: 40px;
                padding: 15px 40px;
            }

            .block-ready {
                color: forestgreen;
                font-weight: 900;
                font-size: 18px;
            }
            .block-ready::before,
            .block-ready::after {
                content: none;
            }
            .ready {
                color: forestgreen;
                font-weight: 600;
            }
        </style>
    </head>

    <body>
    <div style="display: flex; align-items:center; margin: 0 0 15px 20px;">
        <div class="logo">
            <img src="img/logo.svg" width="180" height="50" alt="Логотип компании">
        </div>
        <span style="display: inline-flex; align-items:center; font-size: 24px;">
            <span style="color: forestgreen; font-weight: 600;">11 + ui</span>
            &nbsp;/&nbsp;
            <span style="font-size: 24px;">18 + ui (всего страниц в макете)</span>
        </span>
    </div>

    <div>
        <ul>
            <li><a href="index.php" target="_blank" class="ready">Главная</a></li>
            <br>

            <li><a href="catalog.php" target="_blank" class="ready">Каталог</a></li>
            <li><a href="product-card.php" target="_blank" class="ready">Карточка товара</a></li>
            <li><a href="about.php" target="_blank" class="ready">О компании</a></li>
            <li><a href="portfolio.php" target="_blank" class="ready">Портфолио</a></li>
            <li><a href="portfolio-details.php" target="_blank" class="ready">Портфолио - детальная</a></li>
            <li><a href="news.php" target="_blank" class="ready">Новости</a></li>
            <li><a href="news-details.php" target="_blank" class="ready">Новости - детальная</a></li>
            <li><a href="site-search.php" target="_blank" class="ready">Поиск по сайту</a></li>
            <li><a href="contacts.php" target="_blank" class="ready">Контакты</a></li>
            <li><a href="delivery.php" target="_blank" class="ready">Доставка</a></li>
            <li><a href="cart.php" target="_blank" class="ready">Корзина</a></li>
            <br>

            <li><a href="auth.php" target="_blank" class="ready">Авторизация</a></li>

            <br>
            <br>

            <li><a href="ui.php" target="_blank">ui</a></li>
        </ul>
    </div>
    </body>
</html>