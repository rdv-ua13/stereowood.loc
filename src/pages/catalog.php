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
                                    <div class="catalog-sidebar-filter__options-content-item catalog-sidebar-filter__options-search">
                                        <div class="input-search-wrapper">
                                            <input
                                                    class="input-reset input-search"
                                                    type="search"
                                                    name=""
                                                    placeholder="Я ищу..."
                                                    autocomplete="off"
                                            >
                                            <button class="btn-reset btn btn-link input-search-btn" type="submit">
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
                                                <ul class="list-reset catalog-sidebar-filter__list collapse-content-in" data-filter-option-content>
                                                    <li class="catalog-sidebar-filter__item">
													<span class="custom-checkbox">
														<input id="csf-checkbox-60" class="custom-checkbox__input" type="checkbox">
														<label for="csf-checkbox-60" class="custom-checkbox__label-for">Аллюминий</label>
													</span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
													<span class="custom-checkbox">
														<input id="csf-checkbox-61" class="custom-checkbox__input" type="checkbox">
														<label for="csf-checkbox-61" class="custom-checkbox__label-for">Ампир бежевый</label>
													</span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
													<span class="custom-checkbox">
														<input id="csf-checkbox-62" class="custom-checkbox__input" type="checkbox">
														<label for="csf-checkbox-62" class="custom-checkbox__label-for">Ампир белый</label>
													</span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
													<span class="custom-checkbox">
														<input id="csf-checkbox-63" class="custom-checkbox__input" type="checkbox">
														<label for="csf-checkbox-63" class="custom-checkbox__label-for">Антрацит</label>
													</span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
													<span class="custom-checkbox">
														<input id="csf-checkbox-64" class="custom-checkbox__input" type="checkbox">
														<label for="csf-checkbox-64" class="custom-checkbox__label-for">Бежевый</label>
													</span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
													<span class="custom-checkbox">
														<input id="csf-checkbox-65" class="custom-checkbox__input" type="checkbox">
														<label for="csf-checkbox-65" class="custom-checkbox__label-for">Тест</label>
													</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="catalog-sidebar-filter__options-item" data-filter-option>
                                <div class="catalog-sidebar-filter__options-header collapse-view-in" data-filter-option-view>
                                    <svg class="icon icon-sm">
                                        <use href="img/sprite.svg#chevron-down"></use>
                                    </svg>
                                    <span class="catalog-sidebar-filter__options-title">Срок доставки (демо)</span>
                                </div>
                                <div class="catalog-sidebar-filter__options-content collapse-content-in" data-filter-option-content>
                                    <div class="catalog-sidebar-filter__options-content-item spoiler-wrapper">
                                        <div class="spoiler" data-spoiler>
                                            <div class="spoiler-content">
                                                <ul class="list-reset catalog-sidebar-filter__list collapse-content-in" data-filter-option-content>
                                                    <li class="catalog-sidebar-filter__item">
													<span class="custom-radio">
														<input id="csf-radio-1" class="custom-radio__input checked" type="radio" name="deliveryPeriod" value="0" checked>
														<label for="csf-radio-1" class="custom-radio__label-for">Любой</label>
													</span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
													<span class="custom-radio">
														<input id="csf-radio-2" class="custom-radio__input" type="radio" name="deliveryPeriod" value="1" disabled>
														<label for="csf-radio-2" class="custom-radio__label-for">Сегодня</label>
													</span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
													<span class="custom-radio">
														<input id="csf-radio-3" class="custom-radio__input" type="radio" name="deliveryPeriod" value="2">
														<label for="csf-radio-3" class="custom-radio__label-for">2-4 дня</label>
													</span>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
													<span class="custom-radio">
														<input id="csf-radio-4" class="custom-radio__input" type="radio" name="deliveryPeriod" value="3">
														<label for="csf-radio-4" class="custom-radio__label-for">3-5 дней</label>
													</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="catalog-sidebar-filter__options-item" data-filter-option>
                                <div class="catalog-sidebar-filter__options-header collapse-view-in" data-filter-option-view>
                                    <svg class="icon icon-sm">
                                        <use href="img/sprite.svg#chevron-down"></use>
                                    </svg>
                                    <span class="catalog-sidebar-filter__options-title">Цена (демо)</span>
                                </div>
                                <div class="catalog-sidebar-filter__options-content collapse-content-in" data-filter-option-content>
                                    <div class="catalog-sidebar-filter__options-content-item">
                                        <div class="range-slider-wrapper">
                                            <div id="range-slider"></div>

                                            <div id="steps-slider" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                                <div class="noUi-base">
                                                    <div class="noUi-connects">
                                                        <div class="noUi-connect"></div>
                                                    </div>
                                                    <div class="noUi-origin">
                                                        <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="70.0" aria-valuenow="20.0" aria-valuetext="20.00">
                                                            <div class="noUi-touch-area"></div>
                                                            <div class="noUi-tooltip">20.00</div>
                                                        </div>
                                                    </div>
                                                    <div class="noUi-origin">
                                                        <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="20.0" aria-valuemax="200.0" aria-valuenow="70.0" aria-valuetext="70.00">
                                                            <div class="noUi-touch-area"></div>
                                                            <div class="noUi-tooltip">70.0</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <input id="range-slider-keypress-0" type="text">
                                            <input id="range-slider-keypress-1" type="text">
                                        </div>
                                    </div>
                                </div>

                                <!--<div class="catalog-sidebar-prices ">
                                    <div class="catalog-sidebar-prices__from">

                                        <input id="arrFilter_P3_MIN" class="input__area catalog-sidebar__label" name="arrFilter_P3_MIN" value="" placeholder="6" autocomplete="off">

                                    </div>
                                    <div class="catalog-sidebar-prices__to">
                                        <input id="arrFilter_P3_MAX" class="input__area catalog-sidebar__label" name="arrFilter_P3_MAX" value="" placeholder="628362" autocomplete="off">
                                    </div>
                                </div>-->
                            </li>
                        </ul>
                        <div class="catalog-sidebar-filter__actions">
                            <button class="btn-reset btn btn-primary" data-filter-results>
                                <span class="btn__text">Показать товары</span>
                            </button>
                            <button class="btn-reset btn btn-secondary" data-filter-reset>
                                <span class="btn__text">Сбросить фильтры</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="catalog-content">
                <div class="catalog-content__top">
                    <div class="catalog-content__section">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <a class="swiper-slide catalog-content__section-item" href="javascript:;">
                                            <span class="catalog-content__section-view">
                                                <picture>
                                                    <source srcset="img/catalog-section.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/catalog-section.png"
                                                            class="image"
                                                            width="100"
                                                            height="100"
                                                            alt="Изображение блока"
                                                    >
                                                </picture>
                                            </span>
                                    <span class="catalog-content__section-title">Дверные звонки</span>
                                </a>
                                <a class="swiper-slide catalog-content__section-item" href="javascript:;">
                                            <span class="catalog-content__section-view">
                                                <picture>
                                                    <source srcset="img/catalog-section2.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/catalog-section2.png"
                                                            class="image"
                                                            width="100"
                                                            height="100"
                                                            alt="Изображение блока"
                                                    >
                                                </picture>
                                            </span>
                                    <span class="catalog-content__section-title">Звонковый трансформатор</span>
                                </a>
                                <a class="swiper-slide catalog-content__section-item" href="javascript:;">
                                            <span class="catalog-content__section-view">
                                                <picture>
                                                    <source srcset="img/catalog-section3.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/catalog-section3.png"
                                                            class="image"
                                                            width="100"
                                                            height="100"
                                                            alt="Изображение блока"
                                                    >
                                                </picture>
                                            </span>
                                    <span class="catalog-content__section-title">Зуммеры</span>
                                </a>
                                <a class="swiper-slide catalog-content__section-item" href="javascript:;">
                                            <span class="catalog-content__section-view">
                                                <picture>
                                                    <source srcset="img/catalog-section4.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/catalog-section4.png"
                                                            class="image"
                                                            width="100"
                                                            height="100"
                                                            alt="Изображение блока"
                                                    >
                                                </picture>
                                            </span>
                                    <span class="catalog-content__section-title">Домофоны / видеодомофоны</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-content-settings">
                        <div class="catalog-content-settings__sort">
                            <div class="catalog-content-settings__sort-title">Сортировать:</div>
                            <div class="catalog-content-settings__sort-select">
                                <span class="catalog-content-settings__sort-select-text">Сначала недорогие</span>
                                <svg class="icon">
                                    <use href="img/sprite.svg#chevron-down"></use>
                                </svg>
                            </div>
                            <div class="catalog-content-settings__sort-options">
                                <div class="catalog-content-settings__sort-item">
                                    <input
                                            id="sortByLowPrice"
                                            type="radio"
                                            class="visually-hidden"
                                            name="sortCatalogCategory"
                                            value=""
                                            checked
                                    >
                                    <label for="sortByLowPrice" class="catalog-content-settings__sort-label active">Сначала недорогие</label>
                                </div>
                                <div class="catalog-content-settings__sort-item">
                                    <input
                                            id="sortByHighPrice"
                                            type="radio"
                                            class="visually-hidden"
                                            name="sortCatalogCategory"
                                            value=""
                                    >
                                    <label for="sortByHighPrice" class="catalog-content-settings__sort-label">Сначала дорогие</label>
                                </div>
                                <div class="catalog-content-settings__sort-item">
                                    <input
                                            id="sortByPopular"
                                            type="radio"
                                            class="visually-hidden"
                                            name="sortCatalogCategory"
                                            value=""
                                    >
                                    <label for="sortByPopular" class="catalog-content-settings__sort-label">Сначала популярные</label>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-content-settings__view">
                            <div class="catalog-content-settings__view-item" data-catalog-content-grid="list">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-list"></use>
                                </svg>
                            </div>
                            <div class="catalog-content-settings__view-item active" data-catalog-content-grid="grid">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-grid"></use>
                                </svg>
                            </div>
                            <div class="catalog-content-settings__view-item" data-catalog-content-grid="table">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-table"></use>
                                </svg>
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
                    <div class="catalog-content-filter-selected" data-filter-selected> <?/* class ".empty" hides block */?>
                        <div class="catalog-content-filter-selected__list">
                            <button class="btn-reset btn btn-mini btn-primary catalog-content-filter-selected__item" data-removable>
                                <span class="btn__text">Наличие: Центральный склад</span>
                                <span class="catalog-content-filter-selected__item-delete" data-delete-trigger>
                                            <svg class="icon btn__icon">
                                                <use href="img/sprite.svg#cross"></use>
                                            </svg>
                                        </span>
                            </button>
                            <button class="btn-reset btn btn-mini btn-primary catalog-content-filter-selected__item" data-removable>
                                <span class="btn__text">Тип изделия: USB розетки</span>
                                <span class="catalog-content-filter-selected__item-delete" data-delete-trigger>
                                            <svg class="icon btn__icon">
                                                <use href="img/sprite.svg#cross"></use>
                                            </svg>
                                        </span>
                            </button>
                            <button class="btn-reset btn btn-mini btn-primary catalog-content-filter-selected__item" data-removable>
                                <span class="btn__text">Серия: Atlas Design</span>
                                <span class="catalog-content-filter-selected__item-delete" data-delete-trigger>
                                            <svg class="icon btn__icon">
                                                <use href="img/sprite.svg#cross"></use>
                                            </svg>
                                        </span>
                            </button>
                            <button class="btn-reset btn btn-mini btn-light catalog-content-filter-selected__item" data-filter-reset>
                                <svg class="icon btn__icon">
                                    <use href="img/sprite.svg#trash"></use>
                                </svg>
                                <span class="btn__text">Очистить фильтры</span>
                            </button>
                        </div>
                    </div>
                    <div class="catalog-content__banner">
                        <div class="catalog-content__banner-text">
                            <div class="catalog-content__banner-title h3">Кэшбэк 15% на серию Glossa<br> от System Electric</div>
                            <div class="catalog-content__banner-subtitle">Выгодные условия в декабре 2022 года для всех покупателей</div>
                        </div>
                        <div class="catalog-content__banner-decor">
                            <img
                                    loading="lazy"
                                    src="img/schneider-decor-1.png"
                                    class="image"
                                    width="155"
                                    height="155"
                                    alt="Изображение блока"
                            >
                            <img
                                    loading="lazy"
                                    src="img/schneider-decor-2.png"
                                    class="image"
                                    width="155"
                                    height="155"
                                    alt="Изображение блока"
                            >
                        </div>
                    </div>
                </div>
                <div class="catalog-content__layout">
                    <div class="catalog-content__grid">
                        <div class="card-product card-product-default" data-card-product>
                            <div class="card-product-view">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 1;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-2.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-2.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-3.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-3.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                                <div class="card-product-sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                    <span class="sale-label sale-label-green">Хит</span>
                                </div>
                            </div>
                            <div class="card-product-descr">
                                <div class="card-product-descr__top">
                                    <div class="card-product-descr__info">
                                        <span class="product-code"><span>ZB3327018</span></span>
                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
															<span class="star-rating">
																<span class="star-rating__container">
																	<label>
																		<svg class="icon">
																			<use href="img/sprite.svg#fill-star"></use>
																		</svg>
																	</label>
																</span>
															</span>
															<span class="star-rating-value" data-value="4.5">4.5</span>
														</span>
                                    </div>
                                    <div class="card-product-descr__availability product-availability in-stock">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#checkbox-rec"></use>
                                        </svg>
                                        <span>Товар в наличии</span>
                                    </div>
                                    <div class="card-product-descr__title">
                                        <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                    </div>
                                    <div class="card-product-descr__text">
                                        <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                        <span>
										<a class="btn-reset btn btn-link" href="javascript:;">
											<svg class="icon btn__icon">
												<use href="img/sprite.svg#sliders-horiz"></use>
											</svg>
											<span class="btn__text">Перейти в конфигуратор</span>
										</a>
									</span>
                                    </div>
                                </div>

                                <div class="card-product-descr__bottom">
                                    <div class="card-product-descr__price">
                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                        <div class="card-product-descr__price-display">
                                            <div class="card-product-descr__price-discount">
                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                <div class="card-product-descr__price-discount-label">10%</div>
                                            </div>
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                        </div>
                                        <div class="card-product-descr__price-bonus">
                                            <span>+ 346,99</span>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#fill-bonus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#minus"></use>
                                                </svg>
                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                            </button>
                                            <input
                                                    id=""
                                                    class="input-reset cart-quantity-input"
                                                    type="text"
                                                    placeholder="999"
                                                    value="1"
                                                    max="999"
                                                    data-mult="1"
                                            >
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                            <span class="btn__text">В КОРЗИНУ</span>
                                        </button>
                                        <div class="card-product-act">
                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                </svg>
                                            </button>
                                            <div class="card-product-act__list" data-card-product-act-content>
                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="icon btn__icon icon-default">
                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">В избранное</span>
                                                    <svg class="icon btn__icon icon-selected">
                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                    </svg>
                                                    <span class="btn__text text-selected">В избранном</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#barchart"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">Сравнить</span>
                                                    <span class="btn__text text-selected">В сравнении</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                    </svg>
                                                    <span class="btn__text">В смету</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-product card-product-default" data-card-product>
                            <div class="card-product-view">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-2.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-2.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 1;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-3.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-3.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-4.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-4.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                                <div class="card-product-sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                    <span class="sale-label sale-label-green">Хит</span>
                                </div>
                            </div>
                            <div class="card-product-descr">
                                <div class="card-product-descr__top">
                                    <div class="card-product-descr__info">
                                        <span class="product-code"><span>46- 312792P13</span></span>
                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
															<span class="star-rating">
																<span class="star-rating__container">
																	<label>
																		<svg class="icon">
																			<use href="img/sprite.svg#fill-star"></use>
																		</svg>
																	</label>
																</span>
															</span>
															<span class="star-rating-value" data-value="5.0">5.0</span>
														</span>
                                    </div>
                                    <div class="card-product-descr__availability product-availability on-order">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#timer"></use>
                                        </svg>
                                        <span>Под заказ</span>
                                    </div>
                                    <div class="card-product-descr__title">
                                        <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                    </div>
                                    <div class="card-product-descr__text">
                                        <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                        <span>
										<a class="btn-reset btn btn-link" href="javascript:;">
											<svg class="icon btn__icon">
												<use href="img/sprite.svg#sliders-horiz"></use>
											</svg>
											<span class="btn__text">Перейти в конфигуратор</span>
										</a>
									</span>
                                    </div>
                                </div>

                                <div class="card-product-descr__bottom">
                                    <div class="card-product-descr__price">
                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                        <div class="card-product-descr__price-display">
                                            <div class="card-product-descr__price-discount">
                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                <div class="card-product-descr__price-discount-label">10%</div>
                                            </div>
                                            <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                        </div>
                                        <div class="card-product-descr__price-bonus">
                                            <span>+ 346,99</span>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#fill-bonus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#minus"></use>
                                                </svg>
                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                            </button>
                                            <input
                                                    id=""
                                                    class="input-reset cart-quantity-input"
                                                    type="text"
                                                    placeholder="999"
                                                    value="1"
                                                    max="999"
                                                    data-mult="1"
                                            >
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                            <span class="btn__text">В КОРЗИНУ</span>
                                        </button>
                                        <div class="card-product-act">
                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                </svg>
                                            </button>
                                            <div class="card-product-act__list" data-card-product-act-content>
                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="icon btn__icon icon-default">
                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">В избранное</span>
                                                    <svg class="icon btn__icon icon-selected">
                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                    </svg>
                                                    <span class="btn__text text-selected">В избранном</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#barchart"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">Сравнить</span>
                                                    <span class="btn__text text-selected">В сравнении</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                    </svg>
                                                    <span class="btn__text">В смету</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-product card-product-default" data-card-product>
                            <div class="card-product-view">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-3.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-3.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 1;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-4.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-4.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-5.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-5.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-2.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-2.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                                <div class="card-product-sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                    <span class="sale-label sale-label-green">Хит</span>
                                </div>
                            </div>
                            <div class="card-product-descr">
                                <div class="card-product-descr__top">
                                    <div class="card-product-descr__info">
                                        <span class="product-code"><span>2348958- 87</span></span>
                                    </div>
                                    <div class="card-product-descr__availability product-availability out-stock">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#slash"></use>
                                        </svg>
                                        <span>Нет в наличии</span>
                                    </div>
                                    <div class="card-product-descr__title">
                                        <a href="javascript:;">SE Unica Extend Бел Удлинитель 3 розетки 2К+З, кабель 1,5м</a>
                                    </div>
                                    <div class="card-product-descr__text">
                                        <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                        <span>
										<a class="btn-reset btn btn-link" href="javascript:;">
											<svg class="icon btn__icon">
												<use href="img/sprite.svg#sliders-horiz"></use>
											</svg>
											<span class="btn__text">Перейти в конфигуратор</span>
										</a>
									</span>
                                    </div>
                                </div>

                                <div class="card-product-descr__bottom">
                                    <div class="card-product-descr__price">
                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                        <div class="card-product-descr__price-display">
                                            <div class="card-product-descr__price-discount">
                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                <div class="card-product-descr__price-discount-label">10%</div>
                                            </div>
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                        </div>
                                        <div class="card-product-descr__price-bonus">
                                            <span>+ 346,99</span>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#fill-bonus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#minus"></use>
                                                </svg>
                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                            </button>
                                            <input
                                                    id=""
                                                    class="input-reset cart-quantity-input"
                                                    type="text"
                                                    placeholder="999"
                                                    value="1"
                                                    max="999"
                                                    data-mult="1"
                                            >
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                            <span class="btn__text">В КОРЗИНУ</span>
                                        </button>
                                        <div class="card-product-act">
                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                </svg>
                                            </button>
                                            <div class="card-product-act__list" data-card-product-act-content>
                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="icon btn__icon icon-default">
                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">В избранное</span>
                                                    <svg class="icon btn__icon icon-selected">
                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                    </svg>
                                                    <span class="btn__text text-selected">В избранном</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#barchart"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">Сравнить</span>
                                                    <span class="btn__text text-selected">В сравнении</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                    </svg>
                                                    <span class="btn__text">В смету</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-product card-product-default" data-card-product>
                            <div class="card-product-view">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-4.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-4.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 1;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-5.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-5.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                                <div class="card-product-sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                    <span class="sale-label sale-label-green">Хит</span>
                                </div>
                            </div>
                            <div class="card-product-descr">
                                <div class="card-product-descr__top">
                                    <div class="card-product-descr__info">
                                        <span class="product-code"><span>Z241- 0008</span></span>
                                    </div>
                                    <div class="card-product-descr__availability product-availability in-stock">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#checkbox-rec"></use>
                                        </svg>
                                        <span>Товар в наличии</span>
                                    </div>
                                    <div class="card-product-descr__title">
                                        <a href="javascript:;">SE Unica System+ Антрацит Блок розеточный (2к+з)+usb тип А</a>
                                    </div>
                                    <div class="card-product-descr__text">
                                        <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                        <span>
										<a class="btn-reset btn btn-link" href="javascript:;">
											<svg class="icon btn__icon">
												<use href="img/sprite.svg#sliders-horiz"></use>
											</svg>
											<span class="btn__text">Перейти в конфигуратор</span>
										</a>
									</span>
                                    </div>
                                </div>

                                <div class="card-product-descr__bottom">
                                    <div class="card-product-descr__price">
                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                        <div class="card-product-descr__price-display">
                                            <div class="card-product-descr__price-discount">
                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                <div class="card-product-descr__price-discount-label">10%</div>
                                            </div>
                                            <div class="card-product-descr__price-current">5 827,99 ₽</div>
                                        </div>
                                        <div class="card-product-descr__price-bonus">
                                            <span>+ 346,99</span>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#fill-bonus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#minus"></use>
                                                </svg>
                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                            </button>
                                            <input
                                                    id=""
                                                    class="input-reset cart-quantity-input"
                                                    type="text"
                                                    placeholder="999"
                                                    value="1"
                                                    max="999"
                                                    data-mult="1"
                                            >
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                            <span class="btn__text">В КОРЗИНУ</span>
                                        </button>
                                        <div class="card-product-act">
                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                </svg>
                                            </button>
                                            <div class="card-product-act__list" data-card-product-act-content>
                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="icon btn__icon icon-default">
                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">В избранное</span>
                                                    <svg class="icon btn__icon icon-selected">
                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                    </svg>
                                                    <span class="btn__text text-selected">В избранном</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#barchart"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">Сравнить</span>
                                                    <span class="btn__text text-selected">В сравнении</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                    </svg>
                                                    <span class="btn__text">В смету</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-product card-product-default" data-card-product>
                            <div class="card-product-view">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 1;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-2.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-2.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-3.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-3.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                                <div class="card-product-sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                    <span class="sale-label sale-label-green">Хит</span>
                                </div>
                            </div>
                            <div class="card-product-descr">
                                <div class="card-product-descr__top">
                                    <div class="card-product-descr__info">
                                        <span class="product-code"><span>ZB3327018</span></span>
                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
															<span class="star-rating">
																<span class="star-rating__container">
																	<label>
																		<svg class="icon">
																			<use href="img/sprite.svg#fill-star"></use>
																		</svg>
																	</label>
																</span>
															</span>
															<span class="star-rating-value" data-value="4.5">4.5</span>
														</span>
                                    </div>
                                    <div class="card-product-descr__availability product-availability in-stock">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#checkbox-rec"></use>
                                        </svg>
                                        <span>Товар в наличии</span>
                                    </div>
                                    <div class="card-product-descr__title">
                                        <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                    </div>
                                    <div class="card-product-descr__text">
                                        <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                        <span>
										<a class="btn-reset btn btn-link" href="javascript:;">
											<svg class="icon btn__icon">
												<use href="img/sprite.svg#sliders-horiz"></use>
											</svg>
											<span class="btn__text">Перейти в конфигуратор</span>
										</a>
									</span>
                                    </div>
                                </div>

                                <div class="card-product-descr__bottom">
                                    <div class="card-product-descr__price">
                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                        <div class="card-product-descr__price-display">
                                            <div class="card-product-descr__price-discount">
                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                <div class="card-product-descr__price-discount-label">10%</div>
                                            </div>
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                        </div>
                                        <div class="card-product-descr__price-bonus">
                                            <span>+ 346,99</span>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#fill-bonus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#minus"></use>
                                                </svg>
                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                            </button>
                                            <input
                                                    id=""
                                                    class="input-reset cart-quantity-input"
                                                    type="text"
                                                    placeholder="999"
                                                    value="1"
                                                    max="999"
                                                    data-mult="1"
                                            >
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                            <span class="btn__text">В КОРЗИНУ</span>
                                        </button>
                                        <div class="card-product-act">
                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                </svg>
                                            </button>
                                            <div class="card-product-act__list" data-card-product-act-content>
                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="icon btn__icon icon-default">
                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">В избранное</span>
                                                    <svg class="icon btn__icon icon-selected">
                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                    </svg>
                                                    <span class="btn__text text-selected">В избранном</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#barchart"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">Сравнить</span>
                                                    <span class="btn__text text-selected">В сравнении</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                    </svg>
                                                    <span class="btn__text">В смету</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-product card-product-default" data-card-product>
                            <div class="card-product-view">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 1;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-2.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-2.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-3.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-3.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                                <div class="card-product-sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                    <span class="sale-label sale-label-green">Хит</span>
                                </div>
                            </div>
                            <div class="card-product-descr">
                                <div class="card-product-descr__top">
                                    <div class="card-product-descr__info">
                                        <span class="product-code"><span>ZB3327018</span></span>
                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
															<span class="star-rating">
																<span class="star-rating__container">
																	<label>
																		<svg class="icon">
																			<use href="img/sprite.svg#fill-star"></use>
																		</svg>
																	</label>
																</span>
															</span>
															<span class="star-rating-value" data-value="4.5">4.5</span>
														</span>
                                    </div>
                                    <div class="card-product-descr__availability product-availability in-stock">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#checkbox-rec"></use>
                                        </svg>
                                        <span>Товар в наличии</span>
                                    </div>
                                    <div class="card-product-descr__title">
                                        <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                    </div>
                                    <div class="card-product-descr__text">
                                        <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                        <span>
										<a class="btn-reset btn btn-link" href="javascript:;">
											<svg class="icon btn__icon">
												<use href="img/sprite.svg#sliders-horiz"></use>
											</svg>
											<span class="btn__text">Перейти в конфигуратор</span>
										</a>
									</span>
                                    </div>
                                </div>

                                <div class="card-product-descr__bottom">
                                    <div class="card-product-descr__price">
                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                        <div class="card-product-descr__price-display">
                                            <div class="card-product-descr__price-discount">
                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                <div class="card-product-descr__price-discount-label">10%</div>
                                            </div>
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                        </div>
                                        <div class="card-product-descr__price-bonus">
                                            <span>+ 346,99</span>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#fill-bonus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#minus"></use>
                                                </svg>
                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                            </button>
                                            <input
                                                    id=""
                                                    class="input-reset cart-quantity-input"
                                                    type="text"
                                                    placeholder="999"
                                                    value="1"
                                                    max="999"
                                                    data-mult="1"
                                            >
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                            <span class="btn__text">В КОРЗИНУ</span>
                                        </button>
                                        <div class="card-product-act">
                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                </svg>
                                            </button>
                                            <div class="card-product-act__list" data-card-product-act-content>
                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="icon btn__icon icon-default">
                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">В избранное</span>
                                                    <svg class="icon btn__icon icon-selected">
                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                    </svg>
                                                    <span class="btn__text text-selected">В избранном</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#barchart"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">Сравнить</span>
                                                    <span class="btn__text text-selected">В сравнении</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                    </svg>
                                                    <span class="btn__text">В смету</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-product card-product-default" data-card-product>
                            <div class="card-product-view">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 1;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-2.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-2.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-3.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-3.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                                <div class="card-product-sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                    <span class="sale-label sale-label-green">Хит</span>
                                </div>
                            </div>
                            <div class="card-product-descr">
                                <div class="card-product-descr__top">
                                    <div class="card-product-descr__info">
                                        <span class="product-code"><span>ZB3327018</span></span>
                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
															<span class="star-rating">
																<span class="star-rating__container">
																	<label>
																		<svg class="icon">
																			<use href="img/sprite.svg#fill-star"></use>
																		</svg>
																	</label>
																</span>
															</span>
															<span class="star-rating-value" data-value="4.5">4.5</span>
														</span>
                                    </div>
                                    <div class="card-product-descr__availability product-availability in-stock">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#checkbox-rec"></use>
                                        </svg>
                                        <span>Товар в наличии</span>
                                    </div>
                                    <div class="card-product-descr__title">
                                        <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                    </div>
                                    <div class="card-product-descr__text">
                                        <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                        <span>
										<a class="btn-reset btn btn-link" href="javascript:;">
											<svg class="icon btn__icon">
												<use href="img/sprite.svg#sliders-horiz"></use>
											</svg>
											<span class="btn__text">Перейти в конфигуратор</span>
										</a>
									</span>
                                    </div>
                                </div>

                                <div class="card-product-descr__bottom">
                                    <div class="card-product-descr__price">
                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                        <div class="card-product-descr__price-display">
                                            <div class="card-product-descr__price-discount">
                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                <div class="card-product-descr__price-discount-label">10%</div>
                                            </div>
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                        </div>
                                        <div class="card-product-descr__price-bonus">
                                            <span>+ 346,99</span>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#fill-bonus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#minus"></use>
                                                </svg>
                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                            </button>
                                            <input
                                                    id=""
                                                    class="input-reset cart-quantity-input"
                                                    type="text"
                                                    placeholder="999"
                                                    value="1"
                                                    max="999"
                                                    data-mult="1"
                                            >
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                            <span class="btn__text">В КОРЗИНУ</span>
                                        </button>
                                        <div class="card-product-act">
                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                </svg>
                                            </button>
                                            <div class="card-product-act__list" data-card-product-act-content>
                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="icon btn__icon icon-default">
                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">В избранное</span>
                                                    <svg class="icon btn__icon icon-selected">
                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                    </svg>
                                                    <span class="btn__text text-selected">В избранном</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#barchart"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">Сравнить</span>
                                                    <span class="btn__text text-selected">В сравнении</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                    </svg>
                                                    <span class="btn__text">В смету</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-product card-product-default" data-card-product>
                            <div class="card-product-view">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-2.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-2.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 1;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-3.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-3.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-4.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-4.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                                <div class="card-product-sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                    <span class="sale-label sale-label-green">Хит</span>
                                </div>
                            </div>
                            <div class="card-product-descr">
                                <div class="card-product-descr__top">
                                    <div class="card-product-descr__info">
                                        <span class="product-code"><span>46- 312792P13</span></span>
                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
															<span class="star-rating">
																<span class="star-rating__container">
																	<label>
																		<svg class="icon">
																			<use href="img/sprite.svg#fill-star"></use>
																		</svg>
																	</label>
																</span>
															</span>
															<span class="star-rating-value" data-value="5.0">5.0</span>
														</span>
                                    </div>
                                    <div class="card-product-descr__availability product-availability on-order">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#timer"></use>
                                        </svg>
                                        <span>Под заказ</span>
                                    </div>
                                    <div class="card-product-descr__title">
                                        <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                    </div>
                                    <div class="card-product-descr__text">
                                        <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                        <span>
										<a class="btn-reset btn btn-link" href="javascript:;">
											<svg class="icon btn__icon">
												<use href="img/sprite.svg#sliders-horiz"></use>
											</svg>
											<span class="btn__text">Перейти в конфигуратор</span>
										</a>
									</span>
                                    </div>
                                </div>

                                <div class="card-product-descr__bottom">
                                    <div class="card-product-descr__price">
                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                        <div class="card-product-descr__price-display">
                                            <div class="card-product-descr__price-discount">
                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                <div class="card-product-descr__price-discount-label">10%</div>
                                            </div>
                                            <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                        </div>
                                        <div class="card-product-descr__price-bonus">
                                            <span>+ 346,99</span>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#fill-bonus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#minus"></use>
                                                </svg>
                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                            </button>
                                            <input
                                                    id=""
                                                    class="input-reset cart-quantity-input"
                                                    type="text"
                                                    placeholder="999"
                                                    value="1"
                                                    max="999"
                                                    data-mult="1"
                                            >
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                            <span class="btn__text">В КОРЗИНУ</span>
                                        </button>
                                        <div class="card-product-act">
                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                </svg>
                                            </button>
                                            <div class="card-product-act__list" data-card-product-act-content>
                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="icon btn__icon icon-default">
                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">В избранное</span>
                                                    <svg class="icon btn__icon icon-selected">
                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                    </svg>
                                                    <span class="btn__text text-selected">В избранном</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#barchart"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">Сравнить</span>
                                                    <span class="btn__text text-selected">В сравнении</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                    </svg>
                                                    <span class="btn__text">В смету</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-product card-product-default" data-card-product>
                            <div class="card-product-view">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 1;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-2.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-2.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-3.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-3.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                                <div class="card-product-sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                    <span class="sale-label sale-label-green">Хит</span>
                                </div>
                            </div>
                            <div class="card-product-descr">
                                <div class="card-product-descr__top">
                                    <div class="card-product-descr__info">
                                        <span class="product-code"><span>ZB3327018</span></span>
                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
															<span class="star-rating">
																<span class="star-rating__container">
																	<label>
																		<svg class="icon">
																			<use href="img/sprite.svg#fill-star"></use>
																		</svg>
																	</label>
																</span>
															</span>
															<span class="star-rating-value" data-value="4.5">4.5</span>
														</span>
                                    </div>
                                    <div class="card-product-descr__availability product-availability in-stock">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#checkbox-rec"></use>
                                        </svg>
                                        <span>Товар в наличии</span>
                                    </div>
                                    <div class="card-product-descr__title">
                                        <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                    </div>
                                    <div class="card-product-descr__text">
                                        <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                        <span>
										<a class="btn-reset btn btn-link" href="javascript:;">
											<svg class="icon btn__icon">
												<use href="img/sprite.svg#sliders-horiz"></use>
											</svg>
											<span class="btn__text">Перейти в конфигуратор</span>
										</a>
									</span>
                                    </div>
                                </div>

                                <div class="card-product-descr__bottom">
                                    <div class="card-product-descr__price">
                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                        <div class="card-product-descr__price-display">
                                            <div class="card-product-descr__price-discount">
                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                <div class="card-product-descr__price-discount-label">10%</div>
                                            </div>
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                        </div>
                                        <div class="card-product-descr__price-bonus">
                                            <span>+ 346,99</span>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#fill-bonus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#minus"></use>
                                                </svg>
                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                            </button>
                                            <input
                                                    id=""
                                                    class="input-reset cart-quantity-input"
                                                    type="text"
                                                    placeholder="999"
                                                    value="1"
                                                    max="999"
                                                    data-mult="1"
                                            >
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                            <span class="btn__text">В КОРЗИНУ</span>
                                        </button>
                                        <div class="card-product-act">
                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                </svg>
                                            </button>
                                            <div class="card-product-act__list" data-card-product-act-content>
                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="icon btn__icon icon-default">
                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">В избранное</span>
                                                    <svg class="icon btn__icon icon-selected">
                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                    </svg>
                                                    <span class="btn__text text-selected">В избранном</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#barchart"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">Сравнить</span>
                                                    <span class="btn__text text-selected">В сравнении</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                    </svg>
                                                    <span class="btn__text">В смету</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-product card-product-default" data-card-product>
                            <div class="card-product-view">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-2.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-2.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 1;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-3.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-3.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-4.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-4.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                                <div class="card-product-sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                    <span class="sale-label sale-label-green">Хит</span>
                                </div>
                            </div>
                            <div class="card-product-descr">
                                <div class="card-product-descr__top">
                                    <div class="card-product-descr__info">
                                        <span class="product-code"><span>46- 312792P13</span></span>
                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
										<span class="star-rating">
											<span class="star-rating__container">
												<label>
													<svg class="icon">
														<use href="img/sprite.svg#fill-star"></use>
													</svg>
												</label>
											</span>
										</span>
										<span class="star-rating-value" data-value="5.0">5.0</span>
									</span>
                                    </div>
                                    <div class="card-product-descr__availability product-availability on-order">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#timer"></use>
                                        </svg>
                                        <span>Под заказ</span>
                                    </div>
                                    <div class="card-product-descr__title">
                                        <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                    </div>
                                    <div class="card-product-descr__text">
                                        <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                        <span>
										<a class="btn-reset btn btn-link" href="javascript:;">
											<svg class="icon btn__icon">
												<use href="img/sprite.svg#sliders-horiz"></use>
											</svg>
											<span class="btn__text">Перейти в конфигуратор</span>
										</a>
									</span>
                                    </div>
                                </div>

                                <div class="card-product-descr__bottom">
                                    <div class="card-product-descr__price">
                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                        <div class="card-product-descr__price-display">
                                            <div class="card-product-descr__price-discount">
                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                <div class="card-product-descr__price-discount-label">10%</div>
                                            </div>
                                            <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                        </div>
                                        <div class="card-product-descr__price-bonus">
                                            <span>+ 346,99</span>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#fill-bonus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#minus"></use>
                                                </svg>
                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                            </button>
                                            <input
                                                    id=""
                                                    class="input-reset cart-quantity-input"
                                                    type="text"
                                                    placeholder="999"
                                                    value="1"
                                                    max="999"
                                                    data-mult="1"
                                            >
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                            <span class="btn__text">В КОРЗИНУ</span>
                                        </button>
                                        <div class="card-product-act">
                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                </svg>
                                            </button>
                                            <div class="card-product-act__list" data-card-product-act-content>
                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="icon btn__icon icon-default">
                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">В избранное</span>
                                                    <svg class="icon btn__icon icon-selected">
                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                    </svg>
                                                    <span class="btn__text text-selected">В избранном</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#barchart"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">Сравнить</span>
                                                    <span class="btn__text text-selected">В сравнении</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                    </svg>
                                                    <span class="btn__text">В смету</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-product card-product-default" data-card-product>
                            <div class="card-product-view">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-3.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-3.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 1;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-4.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-4.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-5.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-5.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-2.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-2.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                                <div class="card-product-sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                    <span class="sale-label sale-label-green">Хит</span>
                                </div>
                            </div>
                            <div class="card-product-descr">
                                <div class="card-product-descr__top">
                                    <div class="card-product-descr__info">
                                        <span class="product-code"><span>2348958- 87</span></span>
                                    </div>
                                    <div class="card-product-descr__availability product-availability on-order">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#timer"></use>
                                        </svg>
                                        <span>Под заказ</span>
                                    </div>
                                    <div class="card-product-descr__title">
                                        <a href="javascript:;">SE Unica Extend Бел Удлинитель 3 розетки 2К+З, кабель 1,5м</a>
                                    </div>
                                    <div class="card-product-descr__text">
                                        <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                        <span>
										<a class="btn-reset btn btn-link" href="javascript:;">
											<svg class="icon btn__icon">
												<use href="img/sprite.svg#sliders-horiz"></use>
											</svg>
											<span class="btn__text">Перейти в конфигуратор</span>
										</a>
									</span>
                                    </div>
                                </div>

                                <div class="card-product-descr__bottom">
                                    <div class="card-product-descr__price">
                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                        <div class="card-product-descr__price-display">
                                            <div class="card-product-descr__price-discount">
                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                <div class="card-product-descr__price-discount-label">10%</div>
                                            </div>
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                        </div>
                                        <div class="card-product-descr__price-bonus">
                                            <span>+ 346,99</span>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#fill-bonus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#minus"></use>
                                                </svg>
                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                            </button>
                                            <input
                                                    id=""
                                                    class="input-reset cart-quantity-input"
                                                    type="text"
                                                    placeholder="999"
                                                    value="1"
                                                    max="999"
                                                    data-mult="1"
                                            >
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                            <span class="btn__text">В КОРЗИНУ</span>
                                        </button>
                                        <div class="card-product-act">
                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                </svg>
                                            </button>
                                            <div class="card-product-act__list" data-card-product-act-content>
                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="icon btn__icon icon-default">
                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">В избранное</span>
                                                    <svg class="icon btn__icon icon-selected">
                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                    </svg>
                                                    <span class="btn__text text-selected">В избранном</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#barchart"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">Сравнить</span>
                                                    <span class="btn__text text-selected">В сравнении</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                    </svg>
                                                    <span class="btn__text">В смету</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-product card-product-default" data-card-product>
                            <div class="card-product-view">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-4.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-4.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 1;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-5.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-5.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                                <div class="card-product-sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                    <span class="sale-label sale-label-green">Хит</span>
                                </div>
                            </div>
                            <div class="card-product-descr">
                                <div class="card-product-descr__top">
                                    <div class="card-product-descr__info">
                                        <span class="product-code"><span>Z241- 0008</span></span>
                                    </div>
                                    <div class="card-product-descr__availability product-availability in-stock">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#checkbox-rec"></use>
                                        </svg>
                                        <span>Товар в наличии</span>
                                    </div>
                                    <div class="card-product-descr__title">
                                        <a href="javascript:;">SE Unica System+ Антрацит Блок розеточный (2к+з)+usb тип А</a>
                                    </div>
                                    <div class="card-product-descr__text">
                                        <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                        <span>
										<a class="btn-reset btn btn-link" href="javascript:;">
											<svg class="icon btn__icon">
												<use href="img/sprite.svg#sliders-horiz"></use>
											</svg>
											<span class="btn__text">Перейти в конфигуратор</span>
										</a>
									</span>
                                    </div>
                                </div>

                                <div class="card-product-descr__bottom">
                                    <div class="card-product-descr__price">
                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                        <div class="card-product-descr__price-display">
                                            <div class="card-product-descr__price-discount">
                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                <div class="card-product-descr__price-discount-label">10%</div>
                                            </div>
                                            <div class="card-product-descr__price-current">5 827,99 ₽</div>
                                        </div>
                                        <div class="card-product-descr__price-bonus">
                                            <span>+ 346,99</span>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#fill-bonus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#minus"></use>
                                                </svg>
                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                            </button>
                                            <input
                                                    id=""
                                                    class="input-reset cart-quantity-input"
                                                    type="text"
                                                    placeholder="999"
                                                    value="1"
                                                    max="999"
                                                    data-mult="1"
                                            >
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                            <span class="btn__text">В КОРЗИНУ</span>
                                        </button>
                                        <div class="card-product-act">
                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                </svg>
                                            </button>
                                            <div class="card-product-act__list" data-card-product-act-content>
                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="icon btn__icon icon-default">
                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">В избранное</span>
                                                    <svg class="icon btn__icon icon-selected">
                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                    </svg>
                                                    <span class="btn__text text-selected">В избранном</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#barchart"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">Сравнить</span>
                                                    <span class="btn__text text-selected">В сравнении</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                    </svg>
                                                    <span class="btn__text">В смету</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-product card-product-default" data-card-product>
                            <div class="card-product-view">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 1;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-2.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-2.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-3.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-3.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                                <div class="card-product-sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                    <span class="sale-label sale-label-green">Хит</span>
                                </div>
                            </div>
                            <div class="card-product-descr">
                                <div class="card-product-descr__top">
                                    <div class="card-product-descr__info">
                                        <span class="product-code"><span>ZB3327018</span></span>
                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
															<span class="star-rating">
																<span class="star-rating__container">
																	<label>
																		<svg class="icon">
																			<use href="img/sprite.svg#fill-star"></use>
																		</svg>
																	</label>
																</span>
															</span>
															<span class="star-rating-value" data-value="4.5">4.5</span>
														</span>
                                    </div>
                                    <div class="card-product-descr__availability product-availability in-stock">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#checkbox-rec"></use>
                                        </svg>
                                        <span>Товар в наличии</span>
                                    </div>
                                    <div class="card-product-descr__title">
                                        <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                    </div>
                                    <div class="card-product-descr__text">
                                        <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                        <span>
										<a class="btn-reset btn btn-link" href="javascript:;">
											<svg class="icon btn__icon">
												<use href="img/sprite.svg#sliders-horiz"></use>
											</svg>
											<span class="btn__text">Перейти в конфигуратор</span>
										</a>
									</span>
                                    </div>
                                </div>

                                <div class="card-product-descr__bottom">
                                    <div class="card-product-descr__price">
                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                        <div class="card-product-descr__price-display">
                                            <div class="card-product-descr__price-discount">
                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                <div class="card-product-descr__price-discount-label">10%</div>
                                            </div>
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                        </div>
                                        <div class="card-product-descr__price-bonus">
                                            <span>+ 346,99</span>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#fill-bonus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#minus"></use>
                                                </svg>
                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                            </button>
                                            <input
                                                    id=""
                                                    class="input-reset cart-quantity-input"
                                                    type="text"
                                                    placeholder="999"
                                                    value="1"
                                                    max="999"
                                                    data-mult="1"
                                            >
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                            <span class="btn__text">В КОРЗИНУ</span>
                                        </button>
                                        <div class="card-product-act">
                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                </svg>
                                            </button>
                                            <div class="card-product-act__list" data-card-product-act-content>
                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="icon btn__icon icon-default">
                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">В избранное</span>
                                                    <svg class="icon btn__icon icon-selected">
                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                    </svg>
                                                    <span class="btn__text text-selected">В избранном</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#barchart"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">Сравнить</span>
                                                    <span class="btn__text text-selected">В сравнении</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                    </svg>
                                                    <span class="btn__text">В смету</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-product card-product-default" data-card-product>
                            <div class="card-product-view">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 1;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-2.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-2.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-3.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-3.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                                <div class="card-product-sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                    <span class="sale-label sale-label-green">Хит</span>
                                </div>
                            </div>
                            <div class="card-product-descr">
                                <div class="card-product-descr__top">
                                    <div class="card-product-descr__info">
                                        <span class="product-code"><span>ZB3327018</span></span>
                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
															<span class="star-rating">
																<span class="star-rating__container">
																	<label>
																		<svg class="icon">
																			<use href="img/sprite.svg#fill-star"></use>
																		</svg>
																	</label>
																</span>
															</span>
															<span class="star-rating-value" data-value="4.5">4.5</span>
														</span>
                                    </div>
                                    <div class="card-product-descr__availability product-availability in-stock">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#checkbox-rec"></use>
                                        </svg>
                                        <span>Товар в наличии</span>
                                    </div>
                                    <div class="card-product-descr__title">
                                        <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                    </div>
                                    <div class="card-product-descr__text">
                                        <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                        <span>
										<a class="btn-reset btn btn-link" href="javascript:;">
											<svg class="icon btn__icon">
												<use href="img/sprite.svg#sliders-horiz"></use>
											</svg>
											<span class="btn__text">Перейти в конфигуратор</span>
										</a>
									</span>
                                    </div>
                                </div>

                                <div class="card-product-descr__bottom">
                                    <div class="card-product-descr__price">
                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                        <div class="card-product-descr__price-display">
                                            <div class="card-product-descr__price-discount">
                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                <div class="card-product-descr__price-discount-label">10%</div>
                                            </div>
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                        </div>
                                        <div class="card-product-descr__price-bonus">
                                            <span>+ 346,99</span>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#fill-bonus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#minus"></use>
                                                </svg>
                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                            </button>
                                            <input
                                                    id=""
                                                    class="input-reset cart-quantity-input"
                                                    type="text"
                                                    placeholder="999"
                                                    value="1"
                                                    max="999"
                                                    data-mult="1"
                                            >
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                            <span class="btn__text">В КОРЗИНУ</span>
                                        </button>
                                        <div class="card-product-act">
                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                </svg>
                                            </button>
                                            <div class="card-product-act__list" data-card-product-act-content>
                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="icon btn__icon icon-default">
                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">В избранное</span>
                                                    <svg class="icon btn__icon icon-selected">
                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                    </svg>
                                                    <span class="btn__text text-selected">В избранном</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#barchart"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">Сравнить</span>
                                                    <span class="btn__text text-selected">В сравнении</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                    </svg>
                                                    <span class="btn__text">В смету</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-product card-product-default" data-card-product>
                            <div class="card-product-view">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 1;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-2.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-2.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-3.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-3.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                                <div class="card-product-sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                    <span class="sale-label sale-label-green">Хит</span>
                                </div>
                            </div>
                            <div class="card-product-descr">
                                <div class="card-product-descr__top">
                                    <div class="card-product-descr__info">
                                        <span class="product-code"><span>ZB3327018</span></span>
                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
															<span class="star-rating">
																<span class="star-rating__container">
																	<label>
																		<svg class="icon">
																			<use href="img/sprite.svg#fill-star"></use>
																		</svg>
																	</label>
																</span>
															</span>
															<span class="star-rating-value" data-value="4.5">4.5</span>
														</span>
                                    </div>
                                    <div class="card-product-descr__availability product-availability in-stock">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#checkbox-rec"></use>
                                        </svg>
                                        <span>Товар в наличии</span>
                                    </div>
                                    <div class="card-product-descr__title">
                                        <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                    </div>
                                    <div class="card-product-descr__text">
                                        <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                        <span>
										<a class="btn-reset btn btn-link" href="javascript:;">
											<svg class="icon btn__icon">
												<use href="img/sprite.svg#sliders-horiz"></use>
											</svg>
											<span class="btn__text">Перейти в конфигуратор</span>
										</a>
									</span>
                                    </div>
                                </div>

                                <div class="card-product-descr__bottom">
                                    <div class="card-product-descr__price">
                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                        <div class="card-product-descr__price-display">
                                            <div class="card-product-descr__price-discount">
                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                <div class="card-product-descr__price-discount-label">10%</div>
                                            </div>
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                        </div>
                                        <div class="card-product-descr__price-bonus">
                                            <span>+ 346,99</span>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#fill-bonus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#minus"></use>
                                                </svg>
                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                            </button>
                                            <input
                                                    id=""
                                                    class="input-reset cart-quantity-input"
                                                    type="text"
                                                    placeholder="999"
                                                    value="1"
                                                    max="999"
                                                    data-mult="1"
                                            >
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                            <span class="btn__text">В КОРЗИНУ</span>
                                        </button>
                                        <div class="card-product-act">
                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                </svg>
                                            </button>
                                            <div class="card-product-act__list" data-card-product-act-content>
                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="icon btn__icon icon-default">
                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">В избранное</span>
                                                    <svg class="icon btn__icon icon-selected">
                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                    </svg>
                                                    <span class="btn__text text-selected">В избранном</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#barchart"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">Сравнить</span>
                                                    <span class="btn__text text-selected">В сравнении</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                    </svg>
                                                    <span class="btn__text">В смету</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-product card-product-default" data-card-product>
                            <div class="card-product-view">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-2.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-2.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 1;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-3.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-3.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <div class="mini-slider__slide">
                                        <picture>
                                            <source srcset="img/product-4.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product-4.png"
                                                    class="mini-slider__img"
                                                    width="208"
                                                    height="208"
                                                    style="opacity: 0;"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                                <div class="card-product-sale-label">
                                    <span class="sale-label sale-label-red">20%</span>
                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                    <span class="sale-label sale-label-green">Хит</span>
                                </div>
                            </div>
                            <div class="card-product-descr">
                                <div class="card-product-descr__top">
                                    <div class="card-product-descr__info">
                                        <span class="product-code"><span>46- 312792P13</span></span>
                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
															<span class="star-rating">
																<span class="star-rating__container">
																	<label>
																		<svg class="icon">
																			<use href="img/sprite.svg#fill-star"></use>
																		</svg>
																	</label>
																</span>
															</span>
															<span class="star-rating-value" data-value="5.0">5.0</span>
														</span>
                                    </div>
                                    <div class="card-product-descr__availability product-availability on-order">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#timer"></use>
                                        </svg>
                                        <span>Под заказ</span>
                                    </div>
                                    <div class="card-product-descr__title">
                                        <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                    </div>
                                    <div class="card-product-descr__text">
                                        <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                        <span>
										<a class="btn-reset btn btn-link" href="javascript:;">
											<svg class="icon btn__icon">
												<use href="img/sprite.svg#sliders-horiz"></use>
											</svg>
											<span class="btn__text">Перейти в конфигуратор</span>
										</a>
									</span>
                                    </div>
                                </div>

                                <div class="card-product-descr__bottom">
                                    <div class="card-product-descr__price">
                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                        <div class="card-product-descr__price-display">
                                            <div class="card-product-descr__price-discount">
                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                <div class="card-product-descr__price-discount-label">10%</div>
                                            </div>
                                            <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                        </div>
                                        <div class="card-product-descr__price-bonus">
                                            <span>+ 346,99</span>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#fill-bonus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#minus"></use>
                                                </svg>
                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                            </button>
                                            <input
                                                    id=""
                                                    class="input-reset cart-quantity-input"
                                                    type="text"
                                                    placeholder="999"
                                                    value="1"
                                                    max="999"
                                                    data-mult="1"
                                            >
                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                <svg class="icon icon-sm btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                            <span class="btn__text">В КОРЗИНУ</span>
                                        </button>
                                        <div class="card-product-act">
                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                </svg>
                                            </button>
                                            <div class="card-product-act__list" data-card-product-act-content>
                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="icon btn__icon icon-default">
                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">В избранное</span>
                                                    <svg class="icon btn__icon icon-selected">
                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                    </svg>
                                                    <span class="btn__text text-selected">В избранном</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#barchart"></use>
                                                    </svg>
                                                    <span class="btn__text text-default">Сравнить</span>
                                                    <span class="btn__text text-selected">В сравнении</span>
                                                </button>
                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                    </svg>
                                                    <span class="btn__text">В смету</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrapper">
						<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/pagination.php"); ?>
                        <div class="pagination-more">
                            <button class="btn-reset btn btn-b-light">
                                <span class="btn__text">Показать еще</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="catalog-content__text">
                    <div class="gap-sm mobile-only">
                        <div class="h4">Интернет-магазин электротоваров и электрооборудования Амперкин.ру</div>
                    </div>
                    <div class="spoiler-wrapper">
                        <div
                                class="spoiler"
                                data-spoiler
                                data-collapsed-height="136"
                                data-spoiler-more="Показать полностью"
                        >
                            <div class="spoiler-content">
                                <p>Интернет-магазин электрики Амперкин.ру предлагает широкий ассортимент электрооборудования, расходных материалов и инструментов для монтажа и обслуживания силовых и слаботочных электрических сетей жилых, общественных, производственных зданий и сооружений.</p>
                                <p>В разделах нашего каталога представлены различные категории электротоваров:</p>
                                <ul>
                                    <li>кабельная продукция — силовые, греющие, слаботочные кабели и аксессуары;</li>
                                    <li>электротехническое оборудование — трансформаторы, автоматические выключатели и УЗО;</li>
                                    <li>измерительные инструменты и аппаратура — амперметры, вольтметры, электрические счетчики;</li>
                                    <li>монтажные изделия — шкафы, боксы, лотки, каналы;</li>
                                    <li>светотехнические изделия — светильники, прожекторы и лампы;</li>
                                    <li>электроустановочное оборудование — розетки и выключатели, датчики движения, присутствия и электрические звонки.</li>
                                </ul>
                                <p>В магазине Амперкин.ру вы можно приобрести электрику, создав заказ на сайте или позвонив менеджерам компании по телефону +7 (495) 118-37-70.</p>
                            </div>
                        </div>
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
				<div class="production__certificates-view" style="background-image: url('img/img-5.jpg')"></div>
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
										<div class="card__view">
											<img
												loading="lazy"
												src="img/img-8.jpg"
												class="image"
												width="416"
												height="234"
												alt="Изображение блока"
											>
										</div>
										<div class="card__descr caption-panel">
											<div class="card__title">Новое общественное пространство набережной Автозаводского района</div>
											<div class="card__caption">Екатеринбург. 2023</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card card-info">
										<div class="card__view">
											<img
												loading="lazy"
												src="img/img-8.jpg"
												class="image"
												width="416"
												height="234"
												alt="Изображение блока"
											>
										</div>
										<div class="card__descr caption-panel">
											<div class="card__title">Детская площадка в ЖК Помидор</div>
											<div class="card__caption">Санкт-Петербург. 2023</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card card-info">
										<div class="card__view">
											<img
												loading="lazy"
												src="img/img-8.jpg"
												class="image"
												width="416"
												height="234"
												alt="Изображение блока"
											>
										</div>
										<div class="card__descr caption-panel">
											<div class="card__title">Спортивная площадка в ЖК Новая гавань </div>
											<div class="card__caption">Ростов - на - Дону. 2023</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card card-info">
										<div class="card__view">
											<img
												loading="lazy"
												src="img/img-8.jpg"
												class="image"
												width="416"
												height="234"
												alt="Изображение блока"
											>
										</div>
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