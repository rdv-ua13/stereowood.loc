<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?/*<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">*/?>
	<?/*<meta name="theme-color" content="#111111">*/?>

	<?/*
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    */?>

    <title>StereoWood - Детские игровые комплексы и оборудование для благоустройства</title>

    <link rel="preload" href="fonts/Gilroy/Gilroy-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Gilroy/Manrope-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Gilroy/Manrope-Semibold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Gilroy/Gilroy-Bold.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/vendors.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <?/* Подключение библиотек (отдельно)*/?>
    <script defer src="js/jquery.js"></script>    <!-- jquery -->
    <script defer src="js/jquery.validate.js"></script>    <!-- validate -->
    <script defer src="js/messages_ru.js"></script>    <!-- validate -->
    <script defer src="js/popper.js"></script>    <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>    <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>    <!-- tippy -->
    <script defer src="js/fancybox.umd.js"></script>    <!-- fancybox -->
    <script defer src="js/select2.js"></script>    <!-- select2 -->
    <script defer src="js/readmore.js"></script>    <!-- readmore -->
    <script defer src="js/gsap.min.js"></script>    <!-- gsap -->

    <script defer src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>

    <script defer src="js/main.js"></script>
</head>

<? if(strpos($_SERVER["REQUEST_URI"], "index.php")) : ?> <?/*<? if($APPLICATION->GetCurDir() != "/") : ?>*/?>
<body class="index">
<? else : ?>
<body>
<? endif; ?>
    <header class="header">
        <div class="header-topline">
            <div class="container header-container">
                <div class="header-menu">
                    <ul class="list-reset header-menu__list">
                        <li>
                            <a href="javascript:;" class="link">Каталог</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="link">О компании</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="link">Доставка</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="link">Новости</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="link">Портфолио</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="link">Контакты</a>
                        </li>
                    </ul>
                </div>

                <div class="header-contacts">
                    <div class="header-contacts__msg">
                        <a class="link" href="javascript:;">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/whatsapp.svg"
                                    width="32"
                                    height="32"
                                    alt="whatsapp"
                            >
                        </a>
                    </div>
                    <div class="header-contacts__list-container">
                        <button class="btn-reset btn header-contacts__list-spoiler">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#call"></use>
                            </svg>
                            <span class="btn__text">Связаться</span>
                        </button>
                        <ul class="list-reset header-contacts__list">
                            <li>
                                <a href="javascript:;" class="link">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#call"></use>
                                    </svg>
                                    <span>+7 (863) 275-07-31</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="link">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#call"></use>
                                    </svg>
                                    <span>+7 (863) 275-07-32</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="link">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#email"></use>
                                    </svg>
                                    <span>info@stereowood.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main">
            <div class="container header-container">
                <div class="header-logo">
                    <a class="logo" href="javascript:;">
                        <img
                                loading="lazy"
                                class="image"
                                src="img/logo.svg"
                                width="310"
                                height="62"
                                alt="StereoWood - OUTDOOR & PLAYGROUND"
                        >
                    </a>
                </div>

                <div class="header-popular">
                    <ul class="list-reset header-popular__list">
                        <li class="dropdown-container">
                            <a href="javascript:;" class="link header-popular__heading dropdown-spoiler">
                                <span>Детское игровое оборудование</span>
                                <svg class="icon">
                                    <use href="img/chevron-down.svg#chevron-down"></use>
                                </svg>
                            </a>
                            <ul class="list-reset header-popular__dropdown dropdown-menu">
                                <li>
                                    <a href="javascript:;" class="link">
                                        <span>Игровые комплексы</span>
                                        <svg class="icon">
                                            <use href="img/chevron-down.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="link">
                                        <span>Пространственные сетки</span>
                                        <svg class="icon">
                                            <use href="img/chevron-down.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="link">
                                        <span>Детские домики</span>
                                        <svg class="icon">
                                            <use href="img/chevron-down.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="link">
                                        <span>Качели</span>
                                        <svg class="icon">
                                            <use href="img/chevron-down.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="link">
                                        <span>Горки</span>
                                        <svg class="icon">
                                            <use href="img/chevron-down.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="link">
                                        <span>Встраиваемые батуты</span>
                                        <svg class="icon">
                                            <use href="img/chevron-down.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="link">
                                        <span>Игровые элементы</span>
                                        <svg class="icon">
                                            <use href="img/chevron-down.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="link">
                                        <span>Песочницы</span>
                                        <svg class="icon">
                                            <use href="img/chevron-down.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="link">
                                        <span>Канатные конструкции</span>
                                        <svg class="icon">
                                            <use href="img/chevron-down.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="all-section">
                                    <a href="javascript:;" class="link">
                                        <span>Показать все товары</span>
                                        <svg class="icon">
                                            <use href="img/chevron-down.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-container">
                            <a href="javascript:;" class="link header-popular__heading dropdown-spoiler">
                                <span>Спортивное оборудование</span>
                                <svg class="icon">
                                    <use href="img/chevron-down.svg#chevron-down"></use>
                                </svg>
                            </a>
                            <ul class="list-reset header-popular__dropdown dropdown-menu">
                                <li>
                                    <a href="javascript:;" class="link">
                                        <span>Спортивное оборудование</span>
                                        <svg class="icon">
                                            <use href="img/chevron-down.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="all-section">
                                    <a href="javascript:;" class="link">
                                        <span>Показать все товары</span>
                                        <svg class="icon">
                                            <use href="img/chevron-down.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-container">
                            <a href="javascript:;" class="link header-popular__heading dropdown-spoiler">
                                <span>МАФ</span>
                                <svg class="icon">
                                    <use href="img/chevron-down.svg#chevron-down"></use>
                                </svg>
                            </a>
                            <ul class="list-reset header-popular__dropdown dropdown-menu">
                                <li>
                                    <a href="javascript:;" class="link">
                                        <span>МАФ</span>
                                        <svg class="icon">
                                            <use href="img/chevron-down.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="all-section">
                                    <a href="javascript:;" class="link">
                                        <span>Показать все товары</span>
                                        <svg class="icon">
                                            <use href="img/chevron-down.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="header-actions">
                    <div class="header-mobile-menu">
                        <button
                                class="btn-reset burger"
                                aria-label="Открыть меню"
                                aria-expanded="false"
                                data-menu-spoiler
                        >
                            <svg class="icon icon-default">
                                <use href="img/sprite.svg#burger"></use>
                            </svg>
                            <svg class="icon icon-selected">
                                <use href="img/sprite.svg#cross"></use>
                            </svg>
                        </button>
                    </div>
                    <ul class="list-reset header-actions__list">
                        <li class="header-actions__item header-search">
                            <div class="header-search-spoiler">
                                <svg class="icon btn__icon icon-md icon-default">
                                    <use href="img/sprite.svg#search"></use>
                                </svg>
                                <svg class="icon btn__icon icon-md icon-selected">
                                    <use href="img/sprite.svg#cross"></use>
                                </svg>
                            </div>
                            <form id="" class="header-search-form form" method="" action="javascript:;">
                                <div class="input-wrapper input-search-wrapper">
                                    <input
                                            class="input-reset input input-search"
                                            type="search"
                                            name=""
                                            placeholder="Удобный поиск по всему ассортименту"
                                            autocomplete="off"
                                    >
                                    <button class="btn-reset btn btn-secondary input-search-btn" type="submit">Найти</button>
                                </div>
                            </form>
                        </li>
                        <li class="header-actions__item header-profile not-logged">
                            <a href="javascript:;" class="link">
                                <svg class="icon">
                                    <use href="img/sprite.svg#user"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="header-actions__item header-cart">
                            <a href="javascript:;" class="link">
                                <svg class="icon">
                                    <use href="img/sprite.svg#cart"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-menu" data-menu>
        <div class="mobile-menu-container">
            <div class="mobile-menu__item header-menu">
                <ul class=" list-reset mobile-menu-list header-menu__list">
                    <li><a href="javascript:;" class="link" target="_blank">Каталог</a></li>
                    <li><a href="javascript:;" class="link" target="_blank">О компании</a></li>
                    <li><a href="javascript:;" class="link" target="_blank">Доставка</a></li>
                    <li><a href="javascript:;" class="link" target="_blank">Новости</a></li>
                    <li><a href="javascript:;" class="link" target="_blank">Портфолио</a></li>

                    <li class="header-profile not-logged">
                        <a href="javascript:;" class="link">
                            <svg class="icon">
                                <use href="img/sprite.svg#user"></use>
                            </svg>
                            <span>Личный кабинет</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <main class="main">