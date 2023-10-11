<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>StereoWood - ui</title>

    <link rel="preload" href="fonts/Gilroy/Gilroy-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Gilroy/Gilroy-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Gilroy/Gilroy-Semibold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Gilroy/Gilroy-Bold.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/vendors.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

	<?/* Подключение библиотек (отдельно) */?>
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

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js"></script>

    <style>
        body {
            margin: 0;
            overflow-x: hidden;
            background: #F5F5F5;
        }
        h1, h2, h3, h4, h5, h6 {
            margin-bottom: 20px;
        }
        pre {
            margin: 0;
        }

        .ui-item {
            padding-bottom: 20px;
            border-bottom: 1px solid lightslategray;
        }
        .ui-item:not(:last-child) {
            margin-bottom: 40px;
        }
        .ui-item__heading {
            text-align: center;
        }
        .ui-container {
            display:flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        .ui-col {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .ui-row {
            /*display: flex;
            align-items: center;
            gap: 16px;*/
        }
        .ui-row:not(:last-child) {
            margin-bottom: 20px;
        }

        .color-block {
            display: inline-block;
            min-width: 145px;
            width: 145px;
            min-height: 30px;
            height: 30px;
        }
        .out-container {
            margin: -15px;
            padding: 15px;
        }

        .tooltip-ui-set {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 12px;
            padding: 12px;
        }
        .tooltip-ui-set:not(:last-child) {
            margin-bottom: 20px;
        }
        .tooltip-ui-iconset {
            min-width: 320px;
            border: 1px solid dimgray;
            border-radius: 8px;
        }
        .tooltip-ui-iconset .tooltip .icon {
            min-width: 24px;
            width: 24px;
            min-height: 24px;
            height: 24px;

            /*fill: black;*/
            stroke: black;
        }
        .tooltip-ui-iconset .tooltip:hover .icon {
            /*fill: darkred;*/
            stroke: darkred;
        }
    </style>
</head>
<body class="ui">
    <div class="container-fluid">
        <div class="ui-item">
            <h2 class="ui-item__heading">Variables css</h2>

            <div class="ui-row">
                <h3>Fonts</h3>
                <div style="font-family: var(--font-family-gilroy);">Gilroy &#8212; var(--font-family-gilroy)</div>
            </div>

            <div class="ui-row">
                <h3>Colors</h3>
                <div class="ui-container">
                    <div>
                        <div class="flex-v-center">
                            <span class="color-block" style="background-color: var(--black-color);"></span>&nbsp;&#8212; var(--black-color)
                        </div>
                        <div class="flex-v-center">
                            <span class="color-block" style="background-color: var(--white-color);"></span>&nbsp;&#8212; var(--white-color)
                        </div>
                        <div class="flex-v-center">
                            <span class="color-block" style="background-color: var(--green-color);"></span>&nbsp;&#8212; var(--green-color)
                        </div>
                        <div class="flex-v-center">
                            <span class="color-block" style="background-color: var(--error-color);"></span>&nbsp;&#8212; var(--error-color)
                        </div>
                    </div>
                    <div>
                        <div class="flex-v-center">
                            <span class="color-block" style="background-color: var(--text-secondary-color);"></span>&nbsp;&#8212; var(--text-secondary-color)
                        </div>
                        <div class="flex-v-center">
                            <span class="color-block" style="background-color: var(--surface-darkgreen-color);"></span>&nbsp;&#8212; var(--surface-darkgreen-color)
                        </div>
                        <div class="flex-v-center">
                            <span class="color-block" style="background-color: var(--surface-lightgray-color);"></span>&nbsp;&#8212; var(--surface-lightgray-color)
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui-row">
                <h3>Shadow</h3>
                <div class="ui-container">
                    <div>
                        <div class="flex-v-center out-container">
                            <span class="color-block" style="box-shadow: var(--shadow);"></span>&nbsp;&#8212; var(--shadow)
                        </div>
                    </div>
                    <div>
                        <div class="flex-v-center out-container">
                            <span class="color-block" style="box-shadow: var(--shadow-2);"></span>&nbsp;&#8212; var(--shadow-2)
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui-item">
            <div class="ui-container">
                <div class="ui-col">
                    <h3>Размер заголовков</h3>
                    <pre>
@media (min-width: 992px) {
    h1, .h1 {
        font-size: 36px;
    }
    h2, .h2 {
        font-size: 32px;
    }
    h3, .h3 {
        font-size: 24px;
    }
}
                    </pre>
                </div>

                <div class="ui-col">
                    <h3>Отступы в проекте</h3>
                    <pre>
@media (min-width: 992px) {
    .gap {
        &-xxs {
			margin-bottom: 8px !important;
		}
        &-xs {
            margin-bottom: 12px !important;
        }
        &-sm {
            margin-bottom: 16px !important;
        }
        &-md {
            margin-bottom: 24px !important;
        }
        &-lg {
            margin-bottom: 32px !important;
        }
        &-xl {
            margin-bottom: 48px !important;
        }

        &--mobile-only {
            margin-bottom: unset !important;
        }
    }
}
                    </pre>
                </div>
            </div>
        </div>

        <div class="ui-item">
            <h2 class="ui-item__heading">Icons</h2>
            <div class="ui-container">
                <h4 style="min-width: 100%">
                    .icon-fill - строго запрещает свойство "stroke"
                    <br>
                    .icon-stroke - строго запрещает свойство "fill"
                </h4>

                <div>
                    <h4>sprite.svg#id_из_тултип/filename</h4>
                    <div class="tooltip-ui-set tooltip-ui-iconset">
                        <span class="tooltip" data-tippy-content="#burger">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#burger"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#call">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#call"></use>
                            </svg>
                            <!--end ui content-->
                        </span>

                        <span class="tooltip" data-tippy-content="#call-check">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#call-check"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#cart">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#cart"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#checked">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#checked"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#chevron-down">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#chevron-down"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#chevron-right-border">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#chevron-right-border"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#clock">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#clock"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#cross">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#cross"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#email">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#email"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#email-2">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#email-2"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#eye">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#eye"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#eye-slash">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#eye-slash"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#info">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#info"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#minus">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#minus"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#pin">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#pin"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#plus">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#plus"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#search">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#search"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#user">
                            <!--start ui content-->
                            <svg class="icon">
                                <use href="img/sprite.svg#user"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui-item">
            <h2 class="ui-item__heading">Buttons</h2>

            <div class="ui-container">
                <div class="ui-col" style="max-width: 145px;">
                    <div class="tooltip-ui-set">
                        <div class="tooltip"
                             data-tippy-content="class='btn-reset btn btn-primary'"
                        >
                            <!--start ui content-->
                            <button class="btn-reset btn btn-primary">
                                <svg class="icon btn__icon">
                                    <use href="img/sprite.svg#burger"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon btn__icon">
                                    <use href="img/sprite.svg#burger"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
                <div class="ui-col" style="max-width: 145px;">
                    <div class="tooltip-ui-set">
                        <div class="tooltip"
                             data-tippy-content="class='btn-reset btn btn-secondary'"
                        >
                            <!--start ui content-->
                            <button class="btn-reset btn btn-secondary">
                                <svg class="icon btn__icon">
                                    <use href="img/sprite.svg#burger"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon btn__icon">
                                    <use href="img/sprite.svg#burger"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui-item">
            <h2 class="ui-item__heading">Input</h2>

            <div class="ui-container">
                <div class="ui-col" style="max-width: 290px">
                    <!--start ui content-->
                    <div class="titled-input titled-input-label">
                        <div class="input-title">Label</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Placeholder"
                                    autocomplete="off"
                            >
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>

        <div class="ui-item">
            <h2 class="ui-item__heading">Checkbox / Radio buttons (для примера состояний стоит type=checkbox)</h2>

            <div class="ui-row">
                <div class="ui-container">
                    <div class="ui-col" style="max-width: 145px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="default"
                            >
                                <!--start ui content-->
                                <div class="custom-checkbox">
                                    <input class="custom-checkbox__input" type="checkbox">
                                </div>
                                <!--end ui content-->
                            </div>
                            <div class="tooltip"
                                 data-tippy-content="disabled"
                            >
                                <!--start ui content-->
                                <div class="custom-checkbox">
                                    <input class="custom-checkbox__input disabled" type="checkbox" disabled>
                                </div>
                                <!--end ui content-->
                            </div>
                            <div class="tooltip"
                                 data-tippy-content="checked"
                            >
                                <!--start ui content-->
                                <div class="custom-checkbox">
                                    <input class="custom-checkbox__input" type="checkbox" checked>
                                </div>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="ui-col" style="max-width: 145px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="default"
                            >
                                <!--start ui content-->
                                <div class="custom-radio">
                                    <input class="custom-radio__input" type="checkbox">
                                </div>
                                <!--end ui content-->
                            </div>
                            <div class="tooltip"
                                 data-tippy-content="disabled"
                            >
                                <!--start ui content-->
                                <div class="custom-radio">
                                    <input class="custom-radio__input disabled" type="checkbox" disabled>
                                </div>
                                <!--end ui content-->
                            </div>
                            <div class="tooltip"
                                 data-tippy-content="checked"
                            >
                                <!--start ui content-->
                                <div class="custom-radio">
                                    <input class="custom-radio__input" type="checkbox" checked>
                                </div>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui-row">
                <h3>checkbox label</h3>
                <div class="ui-container">
                    <div class="ui-col" style="max-width: 145px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="default"
                            >
                                <!--start ui content-->
                                <span class="custom-checkbox">
                                <input id="checkbox-ui-1" class="custom-checkbox__input" type="checkbox">
                                <label for="checkbox-ui-1" class="custom-checkbox__label-for">Label</label>
                            </span>
                                <!--end ui content-->
                            </div>
                            <div class="tooltip"
                                 data-tippy-content="disabled"
                            >
                                <!--start ui content-->
                                <span class="custom-checkbox">
                                <input id="checkbox-ui-2" class="custom-checkbox__input disabled" type="checkbox" disabled>
                                <label for="checkbox-ui-2" class="custom-checkbox__label-for">Label</label>
                            </span>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="ui-col" style="max-width: 145px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="default"
                            >
                                <!--start ui content-->
                                <span class="custom-radio">
                                <input id="radio-ui-1" class="custom-radio__input" type="checkbox">
                                <label for="radio-ui-1" class="custom-radio__label-for">Label</label>
                            </span>
                                <!--end ui content-->
                            </div>
                            <div class="tooltip"
                                 data-tippy-content="disabled"
                            >
                                <!--start ui content-->
                                <span class="custom-radio">
                                <input id="radio-ui-2" class="custom-radio__input disabled" type="checkbox" disabled>
                                <label for="radio-ui-2" class="custom-radio__label-for">Label</label>
                            </span>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui-item">
            <h2 class="ui-item__heading">Tooltip</h2>

            <div class="ui-container">
                <div class="ui-col">
                    <div class="ui-row ">
                        <div class="flex-v-center" style="width: 100%;">
                            tooltip -&nbsp;
                            <!--start ui content-->
                            <span class="tooltip"
                                  data-tippy-content="<div class='tooltip-content'>
                                                        <p>Принимает <a href='javascript:;'>HTML</a></p>
                                                        <p>Можно изменить trigger на 'click' в initTooltips() ->
                                                            <a href='javascript:;' style='color: red;'>trigger: 'click'</a>
                                                        </p>
                                                    </div>"
                            >
                                <svg class="icon">
                                    <use href="img/sprite.svg#info"></use>
                                </svg>
                            </span>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>