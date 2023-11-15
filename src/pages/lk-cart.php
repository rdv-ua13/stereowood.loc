<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-sm">
	<div class="container">
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/breadcrumbs.php"); ?>
	</div>
</div>

<div class="gap-sm">
	<div class="container">
        <div class="h3">Моя корзина</div>
	</div>
</div>

<div class="gap-xl">
	<div class="container">
        <div class="slider-out basic-slider-wrap">
            <div class="basic-slider basic-slider-mobile basic-slider-desktop basic-slider--shadow swiper" data-basic-slider>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="javascript:;" class="btn-reset btn btn-primary">
                            <span class="btn__text">Мои данные</span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:;" class="btn-reset btn btn-primary">
                            <span class="btn__text">История заказов</span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:;" class="btn-reset btn btn-primary active">
                            <span class="btn__text">Корзина</span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:;" class="btn-reset btn btn-primary">
                            <span class="btn__text">Коммерческие предложения</span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:;" class="btn-reset btn btn-primary">
                            <span class="btn__text">Архив КП</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<div class="gap-sm">
	<div class="container">
        <div class="flex-end-center">
            <button class="btn-reset btn btn-sm btn-primary">
                <span class="btn__text">Очистить корзину</span>
            </button>
        </div>
	</div>
</div>

<div class="gap-md">
	<div class="container">
		<div class="block-border-top">
			<div class="cart-content">
				<div class="cart-content__item cart-card" data-removable>
				<span class="cart-card__view">
					<img
						loading="lazy"
						src="img/card-img-1.jpg"
						class="image"
						width="90"
						height="90"
						alt="Изображение блока"
					>
				</span>
					<span class="cart-card__descr">
					<span class="cart-card__descr-title">Игровой комплекс ARTWOOD «Корабль Венеция» с двумя горками и мачтой мечты</span>
					<span class="cart-card__descr-caption">
						<span>Версия:</span> <span class="value">12100х2900х3800 мм</span>
					</span>
				</span>
					<span class="cart-card__price">
					<span class="h3">3 175 400 ₽</span>
				</span>
					<span class="cart-card__quantity">
					<span class="cart-quantity">
						<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" type="button" data-value="qty-remove">
							<svg class="icon icon-md btn__icon">
								<use href="img/sprite.svg#minus"></use>
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
						<button class="btn-reset cart-quantity-btn cart-quantity-btn--add" type="button" data-value="qty-add">
							<svg class="icon icon-md btn__icon">
								<use href="img/sprite.svg#plus"></use>
							</svg>
						</button>
					</span>
				</span>
					<span class="cart-card__total">
					<span class="h3">9 526 200 ₽</span>
				</span>
					<span class="cart-card__delete" title="Удалить товар" data-delete-trigger>
					<svg class="icon icon-md">
						<use href="img/sprite.svg#cross"></use>
					</svg>
				</span>
				</div>
				<div class="cart-content__item cart-card" data-removable>
				<span class="cart-card__view">
					<img
						loading="lazy"
						src="img/card-img-2.jpg"
						class="image"
						width="90"
						height="90"
						alt="Изображение блока"
					>
				</span>
                <span class="cart-card__descr">
					<span class="cart-card__descr-title">Комплект садовой мебели «Краун»</span>
					<span class="cart-card__descr-caption">
						<span>Версия:</span> <span class="value">12100х2900х3800 мм</span>
					</span>
				</span>
                <span class="cart-card__price">
					<span class="h3">175 400 ₽</span>
				</span>
                <span class="cart-card__quantity">
					<span class="cart-quantity">
						<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" type="button" data-value="qty-remove">
							<svg class="icon icon-md btn__icon">
								<use href="img/sprite.svg#minus"></use>
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
						<button class="btn-reset cart-quantity-btn cart-quantity-btn--add" type="button" data-value="qty-add">
							<svg class="icon icon-md btn__icon">
								<use href="img/sprite.svg#plus"></use>
							</svg>
						</button>
					</span>
				</span>
                <span class="cart-card__total">
					<span class="h3">526 200 ₽</span>
				</span>
                <span class="cart-card__delete" title="Удалить товар" data-delete-trigger>
					<svg class="icon icon-md">
						<use href="img/sprite.svg#cross"></use>
					</svg>
				</span>
				</div>
				<div class="cart-content__item cart-card" data-removable>
				<span class="cart-card__view">
					<img
						loading="lazy"
						src="img/card-img-3.jpg"
						class="image"
						width="90"
						height="90"
						alt="Изображение блока"
					>
				</span>
					<span class="cart-card__descr">
					<span class="cart-card__descr-title">Скамейка стальная «Радиус»</span>
					<span class="cart-card__descr-caption">
						<span>Версия:</span> <span class="value">12100х2900х3800 мм</span>
					</span>
				</span>
					<span class="cart-card__price">
					<span class="h3">3 175 400 ₽</span>
				</span>
					<span class="cart-card__quantity">
					<span class="cart-quantity">
						<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" type="button" data-value="qty-remove">
							<svg class="icon icon-md btn__icon">
								<use href="img/sprite.svg#minus"></use>
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
						<button class="btn-reset cart-quantity-btn cart-quantity-btn--add" type="button" data-value="qty-add">
							<svg class="icon icon-md btn__icon">
								<use href="img/sprite.svg#plus"></use>
							</svg>
						</button>
					</span>
				</span>
					<span class="cart-card__total">
					<span class="h3">9 526 200 ₽</span>
				</span>
					<span class="cart-card__delete" title="Удалить товар" data-delete-trigger>
					<svg class="icon icon-md">
						<use href="img/sprite.svg#cross"></use>
					</svg>
				</span>
				</div>
				<div class="cart-content__total">
					<span>Итого:</span>
					<span class="value">18 577 000 ₽</span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="gap-xl">
	<div class="container">
		<div class="gap-sm">
			<div class="h3">Оформление заказа</div>
		</div>
		<div class="block block-sm block-top block-border-top">
			<div class="gap-md">
				<span>Заполните, пожалуйста, контактную информацию необходимую для отправки заказа.</span>
			</div>

			<div class="cart-order">
                <div class="cart-order__row">
                    <div class="cart-order__row-item field-wrapper">
                        <div class="titled-input">
                            <div class="input-title">Ф.И.О.</div>
                            <div class="input-wrapper">
                                <input
                                        class="input-reset input"
                                        type="text"
                                        name=""
                                        value=""
                                        placeholder="Иванов Иван Иванович"
                                        autocomplete="off"
                                        required
                                >
                            </div>
                        </div>
                    </div>
                    <div class="cart-order__row-item field-wrapper">
                        <div class="titled-input">
                            <div class="input-title">Телефон</div>
                            <div class="input-wrapper">
                                <input
                                        class="input-reset input isPhone"
                                        type="tel"
                                        name=""
                                        value=""
                                        placeholder="+7"
                                        required
                                >
                            </div>
                        </div>
                    </div>
                    <div class="cart-order__row-item field-wrapper">
                        <div class="titled-input">
                            <div class="input-title">E-mail</div>
                            <div class="input-wrapper">
                                <input
                                        class="input-reset input"
                                        type="email"
                                        name=""
                                        value=""
                                        placeholder="Mail.ru@mail.com"
                                        autocomplete="off"
                                        required
                                >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-order__row cart-order__row--x2-last">
                    <div class="cart-order__row-item field-wrapper">
                        <div class="titled-input">
                            <div class="input-title">Способ доставки</div>
                            <div class="input-wrapper">
                                <select
                                        id=""
                                        class="input-reset input input-select2 js-select2"
                                        name=""
                                        required
                                >
                                    <option value="0">Самовывоз</option>
                                    <option value="1">Доставка</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="cart-order__row-item cart-order__row-item--x2 field-wrapper">
                        <div class="titled-input">
                            <div class="input-title">Адрес доставки</div>
                            <div class="input-wrapper">
                                <input
                                        class="input-reset input"
                                        type="text"
                                        name=""
                                        value=""
                                        placeholder=""
                                        autocomplete="off"
                                        required
                                >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-order__row">
                    <div class="field-wrapper">
						<span class="custom-checkbox custom-checkbox--agree">
							<input id="calcProjectFormAgree" class="custom-checkbox__input" type="checkbox" checked>
							<label for="calcProjectFormAgree" class="custom-checkbox__label-for">Даю согласие на обработку моих персональных данных. Соглашаюсь с <a class="link link-tdu" href="javascript:;">Политикой конфиденциальности</a> и ознакомлен с <a class="link link-tdu" href="javascript:;">Политикой в отношении обработки персональных данных</a>.</label>
						</span>
                    </div>
                </div>

                <div class="cart-order__row">
                    <div class="cart-order__row-item field-wrapper">
                        <button class="btn-reset btn btn-secondary w-100" type="submit">
                            <span class="btn__text">Оформить заказ</span>
                        </button>
                    </div>
                    <div class="cart-order__row-item cart-order__row-item--x2 field-wrapper">
                        <button class="btn-reset btn btn-primary w-100" type="button">
                            <span class="btn__text d-none d-sm-inline-block">Запросить коммерческое предложение для юридических лиц</span>
                            <span class="btn__text d-sm-none">Коммерческое предложение для юр. лиц</span>
                        </button>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>