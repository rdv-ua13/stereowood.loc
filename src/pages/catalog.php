<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-xs">
    <div class="container">
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/breadcrumbs.php"); ?>
    </div>
</div>

<div class="gap-xs">
    <div class="container">
        <div class="h3">Детское игровое оборудование</div>
    </div>
</div>

<div class="gap-sm">
    <div class="container">
        <div class="basic-banner" style="background-image: url('img/img-12.jpg')"></div>
    </div>
</div>

<div class="gap-xl">
    <div class="container">

        <div class="catalog">
            <div class="catalog-sidebar">
                <div class="catalog-sidebar-filter" data-filter>
                    <div class="catalog-sidebar-filter__header">
                        <div class="catalog-sidebar-filter__title h4">Фильтр</div>
                        <div class="catalog-sidebar-filter__close" data-filter-close>
                            <svg class="icon icon-md">
                                <use href="img/sprite.svg#cross"></use>
                            </svg>
                        </div>
                    </div>
                    <form class="catalog-sidebar-filter__selection" action="">
                        <ul class="list-reset catalog-sidebar-filter__options">
                            <li class="catalog-sidebar-filter__options-item" data-filter-option>
                                <div class="catalog-sidebar-filter__options-header collapse-view-in" data-filter-option-view>
                                    <span class="catalog-sidebar-filter__options-title">Категории товаров</span>
                                    <svg class="icon icon-md icon-default">
                                        <use href="img/sprite.svg#plus"></use>
                                    </svg>
                                    <svg class="icon icon-md icon-open">
                                        <use href="img/sprite.svg#minus"></use>
                                    </svg>
                                </div>
                                <div class="catalog-sidebar-filter__options-content collapse-content-in" data-filter-option-content>
                                    <div class="catalog-sidebar-filter__options-content-item catalog-sidebar-filter__options-content-scrolled spoiler-wrapper">
                                        <div class="spoiler" data-spoiler>
                                            <div class="spoiler-content">
                                                <ul class="list-reset catalog-sidebar-filter__list">
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <label for="csf-checkbox-01" class="custom-checkbox__label-for">Игровые комплексы</label>
                                                            <input id="csf-checkbox-01" class="custom-checkbox__input" type="checkbox">
                                                        </span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <label for="csf-checkbox-02" class="custom-checkbox__label-for">Пространственные сетки</label>
                                                            <input id="csf-checkbox-02" class="custom-checkbox__input" type="checkbox">
                                                        </span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <label for="csf-checkbox-03" class="custom-checkbox__label-for">Детские домики</label>
                                                            <input id="csf-checkbox-03" class="custom-checkbox__input" type="checkbox">
                                                        </span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <label for="csf-checkbox-04" class="custom-checkbox__label-for">Качели</label>
                                                            <input id="csf-checkbox-04" class="custom-checkbox__input" type="checkbox">
                                                        </span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <label for="csf-checkbox-05" class="custom-checkbox__label-for">Горки</label>
                                                            <input id="csf-checkbox-05" class="custom-checkbox__input" type="checkbox">
                                                        </span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <label for="csf-checkbox-06" class="custom-checkbox__label-for">Встраиваемые батуты</label>
                                                            <input id="csf-checkbox-06" class="custom-checkbox__input" type="checkbox">
                                                        </span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <label for="csf-checkbox-07" class="custom-checkbox__label-for">Игровые элементы</label>
                                                            <input id="csf-checkbox-07" class="custom-checkbox__input" type="checkbox">
                                                        </span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <label for="csf-checkbox-08" class="custom-checkbox__label-for">Песочницы</label>
                                                            <input id="csf-checkbox-08" class="custom-checkbox__input" type="checkbox">
                                                        </span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <label for="csf-checkbox-09" class="custom-checkbox__label-for">Канатные конструкции</label>
                                                            <input id="csf-checkbox-09" class="custom-checkbox__input" type="checkbox">
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="catalog-sidebar-filter__options-item" data-filter-option>
                                <div class="catalog-sidebar-filter__options-header" data-filter-option-view>
                                    <span class="catalog-sidebar-filter__options-title">Серии продуктов</span>
                                    <svg class="icon icon-md icon-default">
                                        <use href="img/sprite.svg#plus"></use>
                                    </svg>
                                    <svg class="icon icon-md icon-open">
                                        <use href="img/sprite.svg#minus"></use>
                                    </svg>
                                </div>
                                <div class="catalog-sidebar-filter__options-content" data-filter-option-content>
                                    <div class="catalog-sidebar-filter__options-content-item catalog-sidebar-filter__options-search">
                                        <div class="input-wrapper input-search-wrapper">
                                            <input
                                                    class="input-reset input input-search"
                                                    type="search"
                                                    name=""
                                                    placeholder="Я ищу..."
                                                    autocomplete="off"
                                            >
                                            <button class="btn-reset btn btn-link input-search-btn" type="button">
                                                <svg class="icon btn__icon icon-xs">
                                                    <use href="img/sprite.svg#search"></use>
                                                </svg>
                                            </button>
                                            <button class="btn-reset btn btn-link input-delete-btn" type="button">
                                                <svg class="icon btn__icon icon-xs">
                                                    <use href="img/sprite.svg#cross"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="catalog-sidebar-filter__options-content-item catalog-sidebar-filter__options-content-scrolled spoiler-wrapper">
                                        <div class="spoiler" data-spoiler>
                                            <div class="spoiler-content">
                                                <ul class="list-reset catalog-sidebar-filter__list">
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <label for="csf-checkbox-100" class="custom-checkbox__label-for">Тест1</label>
                                                            <input id="csf-checkbox-100" class="custom-checkbox__input" type="checkbox">
                                                        </span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <label for="csf-checkbox-101" class="custom-checkbox__label-for">Тест2</label>
                                                            <input id="csf-checkbox-101" class="custom-checkbox__input" type="checkbox">
                                                        </span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <label for="csf-checkbox-102" class="custom-checkbox__label-for">Тест3</label>
                                                            <input id="csf-checkbox-102" class="custom-checkbox__input" type="checkbox">
                                                        </span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <label for="csf-checkbox-103" class="custom-checkbox__label-for">Тест4</label>
                                                            <input id="csf-checkbox-103" class="custom-checkbox__input" type="checkbox">
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="catalog-sidebar-filter__options-item" data-filter-option>
                                <div class="catalog-sidebar-filter__options-header" data-filter-option-view>
                                    <span class="catalog-sidebar-filter__options-title">Возраст</span>
                                    <svg class="icon icon-md icon-default">
                                        <use href="img/sprite.svg#plus"></use>
                                    </svg>
                                    <svg class="icon icon-md icon-open">
                                        <use href="img/sprite.svg#minus"></use>
                                    </svg>
                                </div>
                                <div class="catalog-sidebar-filter__options-content" data-filter-option-content>
                                    <div class="catalog-sidebar-filter__options-content-item catalog-sidebar-filter__options-content-scrolled spoiler-wrapper">
                                        <div class="spoiler" data-spoiler>
                                            <div class="spoiler-content">
                                                <ul class="list-reset catalog-sidebar-filter__list">
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-radio">
                                                            <label for="csf-radio-01" class="custom-radio__label-for">Любой</label>
                                                            <input id="csf-radio-01" class="custom-radio__input checked" type="radio" name="csfAge" value="0" checked>
                                                        </span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-radio">
                                                            <label for="csf-radio-02" class="custom-radio__label-for">3-5</label>
                                                            <input id="csf-radio-02" class="custom-radio__input disabled" type="radio" name="csfAge" value="1" disabled>
                                                        </span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-radio">
                                                            <label for="csf-radio-03" class="custom-radio__label-for">5-10</label>
                                                            <input id="csf-radio-03" class="custom-radio__input" type="radio" name="csfAge" value="2">
                                                        </span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-radio">
                                                            <label for="csf-radio-04" class="custom-radio__label-for">10+</label>
                                                            <input id="csf-radio-04" class="custom-radio__input" type="radio" name="csfAge" value="3">
                                                        </span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-radio">
                                                            <label for="csf-radio-05" class="custom-radio__label-for">12+</label>
                                                            <input id="csf-radio-05" class="custom-radio__input" type="radio" name="csfAge" value="4">
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="catalog-sidebar-filter__options-item catalog-sidebar-filter__options-item--noborder" data-filter-option>
                                <div class="catalog-sidebar-filter__options-header collapse-view-in" data-filter-option-view>
                                    <span class="catalog-sidebar-filter__options-title">Розничная цена</span>
                                    <svg class="icon icon-md icon-default">
                                        <use href="img/sprite.svg#plus"></use>
                                    </svg>
                                    <svg class="icon icon-md icon-open">
                                        <use href="img/sprite.svg#minus"></use>
                                    </svg>
                                </div>
                                <div class="catalog-sidebar-filter__options-content catalog-sidebar-filter__options-content--px-0 collapse-content-in" data-filter-option-content>
                                    <div class="catalog-sidebar-filter__options-content-item">
                                        <div class="catalog-sidebar-prices">
                                            <div class="input-wrapper catalog-sidebar-prices__item">
                                                <input
                                                        class="input-reset input catalog-sidebar-prices__input"
                                                        type="numeric"
                                                        name="input-min"
                                                        value=""
                                                        placeholder="0 &#8381;"
                                                        pattern="[0-9 ]*[.]?[0-9]{0,2}"
                                                        autocomplete="off"
                                                >
                                            </div>
                                            <div class="input-wrapper catalog-sidebar-prices__item">
                                                <input
                                                        class="input-reset input catalog-sidebar-prices__input"
                                                        type="numeric"
                                                        name="input-max"
                                                        value=""
                                                        placeholder="8 900 300 &#8381;"
                                                        pattern="[0-9 ]*[.]?[0-9]{0,2}"
                                                        autocomplete="off"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="catalog-sidebar-filter__options-item catalog-sidebar-filter__options-item--noborder catalog-sidebar-filter__actions">
                                <button class="btn-reset btn btn-primary" data-filter-results>
                                    <span class="btn__text">Показать товары</span>
                                </button>
                                <button class="btn-reset btn btn-secondary" data-filter-reset>
                                    <span class="btn__text">Сбросить фильтры</span>
                                </button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>

            <div class="catalog-content">
                <div class="catalog-content__top">
                    <div class="catalog-content__section">
                        <div class="catalog-content__section-slider-pagination basic-slider-wrap">
                            <div class="basic-slider basic-slider-out-container basic-slider-desktop swiper popular-product-slider" data-basic-slider>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card card-product">
                                            <a href="javascript:;" class="card__view">
                                                <img
                                                        loading="lazy"
                                                        src="img/card-img-1.jpg"
                                                        class="image"
                                                        width="308"
                                                        height="308"
                                                        alt="Изображение блока"
                                                >
                                                <div class="card__sale-label">
                                                    <span class="sale-label sale-label-red">20%</span>
                                                    <span class="sale-label sale-label-green">Новинка</span>
                                                </div>
                                            </a>
                                            <div class="card__descr">
                                                <div class="card__caption">Детские игровые комплексы</div>
                                                <a href="javascript:;" class="card__title">Игровой комплекс ARTWOOD «Корабль Венеция» с горкой и комплекс с горкой</a>
                                                <div class="card__properties">
                                                    <div class="card__properties-row">
                                                        <span>Производственный артикул:</span>
                                                        <span class="value">CWPg169.151</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Материал:</span>
                                                        <span class="value">лиственница, нержавейка</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Размеры:</span>
                                                        <span class="value">5230х5940х2480 мм</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Зона безопасности:</span>
                                                        <span class="value">8,23х9,44 м</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Возраст:</span>
                                                        <span class="value">3-12 лет</span>
                                                    </div>
                                                </div>
                                                <div class="card__price">3 175 400 ₽</div>
                                                <div class="card__to-cart">
                                                    <button class="btn-reset btn btn-secondary">
                                                        <span class="btn__text">Добавить в корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card card-product">
                                            <a href="javascript:;" class="card__view">
                                                <img
                                                        loading="lazy"
                                                        src="img/card-img-2.jpg"
                                                        class="image"
                                                        width="308"
                                                        height="308"
                                                        alt="Изображение блока"
                                                >
                                                <div class="card__sale-label">
                                                    <span class="sale-label sale-label-green">Новинка</span>
                                                </div>
                                            </a>
                                            <div class="card__descr">
                                                <div class="card__caption">Теннисные столы</div>
                                                <a href="javascript:;" class="card__title">Стол теннисный для парка «Паркер»</a>
                                                <div class="card__properties">
                                                    <div class="card__properties-row">
                                                        <span>Производственный артикул:</span>
                                                        <span class="value">CWPg169.151</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Материал:</span>
                                                        <span class="value">лиственница, нержавейка</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Размеры:</span>
                                                        <span class="value">5230х5940х2480 мм</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Зона безопасности:</span>
                                                        <span class="value">8,23х9,44 м</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Возраст:</span>
                                                        <span class="value">3-12 лет</span>
                                                    </div>
                                                </div>
                                                <div class="card__price">3 175 400 ₽</div>
                                                <div class="card__to-cart">
                                                    <button class="btn-reset btn btn-secondary">
                                                        <span class="btn__text">Добавить в корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card card-product">
                                            <a href="javascript:;" class="card__view">
                                                <img
                                                        loading="lazy"
                                                        src="img/card-img-3.jpg"
                                                        class="image"
                                                        width="308"
                                                        height="308"
                                                        alt="Изображение блока"
                                                >
                                                <div class="card__sale-label">
                                                    <span class="sale-label sale-label-green">Новинка</span>
                                                </div>
                                            </a>
                                            <div class="card__descr">
                                                <div class="card__caption">Оборудование для воркаута</div>
                                                <a href="javascript:;" class="card__title">Спортивный комплекс для занятий воркаутом «Фристайл-15»</a>
                                                <div class="card__properties">
                                                    <div class="card__properties-row">
                                                        <span>Производственный артикул:</span>
                                                        <span class="value">CWPg169.151</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Материал:</span>
                                                        <span class="value">лиственница, нержавейка</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Размеры:</span>
                                                        <span class="value">5230х5940х2480 мм</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Зона безопасности:</span>
                                                        <span class="value">8,23х9,44 м</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Возраст:</span>
                                                        <span class="value">3-12 лет</span>
                                                    </div>
                                                </div>
                                                <div class="card__price">3 175 400 ₽</div>
                                                <div class="card__to-cart">
                                                    <button class="btn-reset btn btn-secondary">
                                                        <span class="btn__text">Добавить в корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card card-product">
                                            <a href="javascript:;" class="card__view">
                                                <img
                                                        loading="lazy"
                                                        src="img/card-img-4.jpg"
                                                        class="image"
                                                        width="308"
                                                        height="308"
                                                        alt="Изображение блока"
                                                >
                                                <div class="card__sale-label">
                                                    <span class="sale-label sale-label-green">Новинка</span>
                                                </div>
                                            </a>
                                            <div class="card__descr">
                                                <div class="card__caption">Скамейки</div>
                                                <a href="javascript:;" class="card__title">Скамейка стальная «Модерн»</a>
                                                <div class="card__properties">
                                                    <div class="card__properties-row">
                                                        <span>Производственный артикул:</span>
                                                        <span class="value">CWPg169.151</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Материал:</span>
                                                        <span class="value">лиственница, нержавейка</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Размеры:</span>
                                                        <span class="value">5230х5940х2480 мм</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Зона безопасности:</span>
                                                        <span class="value">8,23х9,44 м</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Возраст:</span>
                                                        <span class="value">3-12 лет</span>
                                                    </div>
                                                </div>
                                                <div class="card__price">3 175 400 ₽</div>
                                                <div class="card__to-cart">
                                                    <button class="btn-reset btn btn-secondary">
                                                        <span class="btn__text">Добавить в корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card card-product">
                                            <a href="javascript:;" class="card__view">
                                                <img
                                                        loading="lazy"
                                                        src="img/card-img-1.jpg"
                                                        class="image"
                                                        width="308"
                                                        height="308"
                                                        alt="Изображение блока"
                                                >
                                                <div class="card__sale-label">
                                                    <span class="sale-label sale-label-green">Новинка</span>
                                                </div>
                                            </a>
                                            <div class="card__descr">
                                                <div class="card__caption">Детские игровые комплексы</div>
                                                <a href="javascript:;" class="card__title">Игровой комплекс ARTWOOD «Корабль Венеция» с горкой и ...</a>
                                                <div class="card__properties">
                                                    <div class="card__properties-row">
                                                        <span>Производственный артикул:</span>
                                                        <span class="value">CWPg169.151</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Материал:</span>
                                                        <span class="value">лиственница, нержавейка</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Размеры:</span>
                                                        <span class="value">5230х5940х2480 мм</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Зона безопасности:</span>
                                                        <span class="value">8,23х9,44 м</span>
                                                    </div>
                                                    <div class="card__properties-row">
                                                        <span>Возраст:</span>
                                                        <span class="value">3-12 лет</span>
                                                    </div>
                                                </div>
                                                <div class="card__price">3 175 400 ₽</div>
                                                <div class="card__to-cart">
                                                    <button class="btn-reset btn btn-secondary">
                                                        <span class="btn__text">Добавить в корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="catalog-content-tag">
                        <button class="btn-reset btn btn-primary">
                            <span class="btn__text">Комплексы с горкой</span>
                        </button>
                        <button class="btn-reset btn btn-primary">
                            <span class="btn__text">Уличные игровые комплексы</span>
                        </button>
                        <button class="btn-reset btn btn-primary">
                            <span class="btn__text">Антивандальные комплексы</span>
                        </button>
                        <button class="btn-reset btn btn-primary">
                            <span class="btn__text">Горки детские</span>
                        </button>
                        <button class="btn-reset btn btn-primary">
                            <span class="btn__text">Канатные дороги</span>
                        </button>
                    </div>
                    <div class="catalog-content-settings">
                        <div class="catalog-content-settings__view">
                            <div class="catalog-content-settings__view-title">Показывать по:</div>
                            <div class="catalog-content-settings__view-item active" data-catalog-content-grid="sm">12</div>
                            <div class="catalog-content-settings__view-item" data-catalog-content-grid="md">24</div>
                            <div class="catalog-content-settings__view-item" data-catalog-content-grid="lg">48</div>
                        </div>
                        <div class="catalog-content-settings__sort">
                            <div class="catalog-content-settings__sort-title">Сортировать по:</div>
                            <div class="catalog-content-settings__sort-select">
                                <span class="catalog-content-settings__sort-select-text">умолчанию</span>
                            </div>
                            <div class="catalog-content-settings__sort-options">
                                <div class="catalog-content-settings__sort-item">
                                    <input
                                            id="sortByDefault"
                                            type="radio"
                                            class="visually-hidden"
                                            name="sortCatalog"
                                            value=""
                                            checked
                                    >
                                    <label for="sortByDefault" class="catalog-content-settings__sort-label active">умолчанию</label>
                                </div>
                                <div class="catalog-content-settings__sort-item">
                                    <input
                                            id="sortByPrice"
                                            type="radio"
                                            class="visually-hidden"
                                            name="sortCatalog"
                                            value=""
                                    >
                                    <label for="sortByPrice" class="catalog-content-settings__sort-label">цене</label>
                                </div>
                                <div class="catalog-content-settings__sort-item">
                                    <input
                                            id="sortByPopular"
                                            type="radio"
                                            class="visually-hidden"
                                            name="sortCatalog"
                                            value=""
                                    >
                                    <label for="sortByPopular" class="catalog-content-settings__sort-label">популярности</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-content-filter-spoiler" data-filter-spoiler>
                        <div class="catalog-content-filter-spoiler__view">
                            <svg class="icon">
                                <use href="img/sprite.svg#filter"></use>
                            </svg>
                        </div>
                        <span>Фильтры</span>
                    </div>
                </div>
                <div class="catalog-content__layout">
                    <div class="catalog-content__grid catalog-content__grid--sm" data-catalog-content-view>
                        <div class="card card-product">
                            <a href="javascript:;" class="card__view">
                                <img
                                        loading="lazy"
                                        src="img/card-img-1.jpg"
                                        class="image"
                                        width="308"
                                        height="308"
                                        alt="Изображение блока"
                                >
                                <div class="card__sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-green">Новинка</span>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__caption">Детские игровые комплексы</div>
                                <a href="javascript:;" class="card__title">Игровой комплекс ARTWOOD «Корабль Венеция» с горкой и комплекс с горкой</a>
                                <div class="card__properties">
                                    <div class="card__properties-row">
                                        <span>Производственный артикул:</span>
                                        <span class="value">CWPg169.151</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Материал:</span>
                                        <span class="value">лиственница, нержавейка</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Размеры:</span>
                                        <span class="value">5230х5940х2480 мм</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Зона безопасности:</span>
                                        <span class="value">8,23х9,44 м</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Возраст:</span>
                                        <span class="value">3-12 лет</span>
                                    </div>
                                </div>
                                <div class="card__price">3 175 400 ₽</div>
                                <div class="card__to-cart">
                                    <button class="btn-reset btn btn-secondary">
                                        <span class="btn__text">Добавить в корзину</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card card-product">
                            <a href="javascript:;" class="card__view">
                                <img
                                        loading="lazy"
                                        src="img/card-img-2.jpg"
                                        class="image"
                                        width="308"
                                        height="308"
                                        alt="Изображение блока"
                                >
                                <div class="card__sale-label">
                                    <span class="sale-label sale-label-green">Новинка</span>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__caption">Теннисные столы</div>
                                <a href="javascript:;" class="card__title">Стол теннисный для парка «Паркер»</a>
                                <div class="card__properties">
                                    <div class="card__properties-row">
                                        <span>Производственный артикул:</span>
                                        <span class="value">CWPg169.151</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Материал:</span>
                                        <span class="value">лиственница, нержавейка</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Размеры:</span>
                                        <span class="value">5230х5940х2480 мм</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Зона безопасности:</span>
                                        <span class="value">8,23х9,44 м</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Возраст:</span>
                                        <span class="value">3-12 лет</span>
                                    </div>
                                </div>
                                <div class="card__price">3 175 400 ₽</div>
                                <div class="card__to-cart">
                                    <button class="btn-reset btn btn-secondary">
                                        <span class="btn__text">Добавить в корзину</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card card-product">
                            <a href="javascript:;" class="card__view">
                                <img
                                        loading="lazy"
                                        src="img/card-img-3.jpg"
                                        class="image"
                                        width="308"
                                        height="308"
                                        alt="Изображение блока"
                                >
                                <div class="card__sale-label">
                                    <span class="sale-label sale-label-green">Новинка</span>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__caption">Оборудование для воркаута</div>
                                <a href="javascript:;" class="card__title">Спортивный комплекс для занятий воркаутом «Фристайл-15»</a>
                                <div class="card__properties">
                                    <div class="card__properties-row">
                                        <span>Производственный артикул:</span>
                                        <span class="value">CWPg169.151</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Материал:</span>
                                        <span class="value">лиственница, нержавейка</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Размеры:</span>
                                        <span class="value">5230х5940х2480 мм</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Зона безопасности:</span>
                                        <span class="value">8,23х9,44 м</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Возраст:</span>
                                        <span class="value">3-12 лет</span>
                                    </div>
                                </div>
                                <div class="card__price">3 175 400 ₽</div>
                                <div class="card__to-cart">
                                    <button class="btn-reset btn btn-secondary">
                                        <span class="btn__text">Добавить в корзину</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card card-product">
                            <a href="javascript:;" class="card__view">
                                <img
                                        loading="lazy"
                                        src="img/card-img-4.jpg"
                                        class="image"
                                        width="308"
                                        height="308"
                                        alt="Изображение блока"
                                >
                                <div class="card__sale-label">
                                    <span class="sale-label sale-label-green">Новинка</span>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__caption">Скамейки</div>
                                <a href="javascript:;" class="card__title">Скамейка стальная «Модерн»</a>
                                <div class="card__properties">
                                    <div class="card__properties-row">
                                        <span>Производственный артикул:</span>
                                        <span class="value">CWPg169.151</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Материал:</span>
                                        <span class="value">лиственница, нержавейка</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Размеры:</span>
                                        <span class="value">5230х5940х2480 мм</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Зона безопасности:</span>
                                        <span class="value">8,23х9,44 м</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Возраст:</span>
                                        <span class="value">3-12 лет</span>
                                    </div>
                                </div>
                                <div class="card__price">3 175 400 ₽</div>
                                <div class="card__to-cart">
                                    <button class="btn-reset btn btn-secondary">
                                        <span class="btn__text">Добавить в корзину</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card card-product">
                            <a href="javascript:;" class="card__view">
                                <img
                                        loading="lazy"
                                        src="img/card-img-1.jpg"
                                        class="image"
                                        width="308"
                                        height="308"
                                        alt="Изображение блока"
                                >
                                <div class="card__sale-label">
                                    <span class="sale-label sale-label-green">Новинка</span>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__caption">Детские игровые комплексы</div>
                                <a href="javascript:;" class="card__title">Игровой комплекс ARTWOOD «Корабль Венеция» с горкой и ...</a>
                                <div class="card__properties">
                                    <div class="card__properties-row">
                                        <span>Производственный артикул:</span>
                                        <span class="value">CWPg169.151</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Материал:</span>
                                        <span class="value">лиственница, нержавейка</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Размеры:</span>
                                        <span class="value">5230х5940х2480 мм</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Зона безопасности:</span>
                                        <span class="value">8,23х9,44 м</span>
                                    </div>
                                    <div class="card__properties-row">
                                        <span>Возраст:</span>
                                        <span class="value">3-12 лет</span>
                                    </div>
                                </div>
                                <div class="card__price">3 175 400 ₽</div>
                                <div class="card__to-cart">
                                    <button class="btn-reset btn btn-secondary">
                                        <span class="btn__text">Добавить в корзину</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrapper">
						<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/pagination.php"); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="gap-xl">
	<div class="container">
		<div class="block block-sm block-top block-border-top production">
			<div class="production__heading">
				<div class="gap-sm production__heading-item">
					<div class="h3">Производство StereoWood</div>
				</div>
				<div class="production__heading-item production__descr">
					<p>Создаем качественное оборудование из робинии и лиственницы, а также из стали и нержавеющей стали.</p>
					<p>Благодаря обширному парку современных станков мы производим детские игровые комплексы, малые архитектурные формы и спортивное оборудование. Изготавливаем продукцию как серийно, так и по индивидуальному заказу.</p>
					<p class="production__descr-accent">Площадь производства: 1242 м2</p>
				</div>
			</div>
			<div class="production__certificates">
                <div class="production__certificates-view">
                    <div class="basic-banner" style="background-image: url('img/img-5.jpg')"></div>
                </div>
				<div class="production__certificates-caption caption-panel">
					<div class="caption-panel-descr">Вся продукция сертифицирована в соответствии с ТР ЕАЭС 042/2017 «О безопасности оборудования для детских игровых площадок».</div>
					<div class="caption-panel-link">
						<a href="javascript:;">
							<svg class="icon">
								<use href="img/sprite.svg#chevron-right-border"></use>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="gap-xl">
	<div class="block gray-bg">
		<div class="container">
			<div class="calc-project">
				<div class="gap-md">
					<div class="h3">Рассчитать стоимость проекта</div>
				</div>
				<form action="" class="form calc-project__form">
					<div class="gap-md calc-project__fields">
						<div class="field-wrapper">
							<div class="input-wrapper">
								<input
									class="input-reset input"
									type="text"
									name=""
									value=""
									placeholder="Имя"
									autocomplete="off"
									required
								>
							</div>
						</div>
						<div class="field-wrapper">
							<div class="input-wrapper">
								<input
									class="input-reset input isPhone"
									type="tel"
									name=""
									value=""
									placeholder="Телефон"
									required
								>
							</div>
						</div>
						<div class="field-wrapper">
							<div class="input-wrapper">
								<input
									class="input-reset input"
									type="email"
									name=""
									value=""
									placeholder="e-mail"
									autocomplete="off"
									required
								>
							</div>
						</div>
						<div class="field-wrapper">
							<button class="btn-reset btn btn-secondary w-100" type="submit">
								<span class="btn__text">Заказать расчет</span>
							</button>
						</div>
					</div>
					<div class="">
						<div class="field-wrapper">
						<span class="custom-checkbox">
							<input id="contactFormAgree" class="custom-checkbox__input" type="checkbox" checked>
							<label for="contactFormAgree" class="custom-checkbox__label-for">Я ознакомлен(а) с <a class="link" href="javascript:;">Политикой конфиденциальности</a> и даю согласие на обработку моих персональных данных.</label>
						</span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="gap-xl">
	<div class="container">
		<div class="block block-sm block-top block-border-top">
			<div class="gap-xl">
				<div class="gap-sm">
					<div class="h3">Портфолио</div>
				</div>

				<div class="catalog-extra-slider out-container-x">
					<div class="basic-slider-wrap">
						<div class="basic-slider basic-slider-mobile swiper" data-basic-slider>
							<div class="swiper-wrapper card-list card-list--desktop">
								<div class="swiper-slide">
									<div class="card card-info">
										<a href="javascript:;" class="card__view">
											<img
												loading="lazy"
												src="img/img-8.jpg"
												class="image"
												width="416"
												height="234"
												alt="Изображение блока"
											>
										</a>
										<div class="card__descr caption-panel">
											<div class="card__title">Новое общественное пространство набережной Автозаводского района</div>
											<div class="card__caption">Екатеринбург. 2023</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card card-info">
										<a href="javascript:;" class="card__view">
											<img
												loading="lazy"
												src="img/img-8.jpg"
												class="image"
												width="416"
												height="234"
												alt="Изображение блока"
											>
										</a>
										<div class="card__descr caption-panel">
											<div class="card__title">Детская площадка в ЖК Помидор</div>
											<div class="card__caption">Санкт-Петербург. 2023</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card card-info">
										<a href="javascript:;" class="card__view">
											<img
												loading="lazy"
												src="img/img-8.jpg"
												class="image"
												width="416"
												height="234"
												alt="Изображение блока"
											>
										</a>
										<div class="card__descr caption-panel">
											<div class="card__title">Спортивная площадка в ЖК Новая гавань </div>
											<div class="card__caption">Ростов - на - Дону. 2023</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card card-info">
										<a href="javascript:;" class="card__view">
											<img
												loading="lazy"
												src="img/img-8.jpg"
												class="image"
												width="416"
												height="234"
												alt="Изображение блока"
											>
										</a>
										<div class="card__descr caption-panel">
											<div class="card__title">Новое общественное пространство набережной Автозаводского района</div>
											<div class="card__caption">Екатеринбург. 2023</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="more-link w-100">
				<button class="btn-reset btn btn-primary">
					<span class="btn__text">Посмотреть все проекты</span>
				</button>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>