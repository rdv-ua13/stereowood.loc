<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-sm">
	<div class="container">
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/breadcrumbs.php"); ?>
	</div>
</div>

<div class="gap-sm">
	<div class="container">
		<div class="h3">Профиль пользователя</div>
	</div>
</div>

<div class="gap-xl">
	<div class="container">
		<div class="slider-out basic-slider-wrap">
			<div class="basic-slider basic-slider-mobile basic-slider-desktop basic-slider--shadow swiper" data-basic-slider>
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<a href="javascript:;" class="btn-reset btn btn-primary active">
							<span class="btn__text">Мои данные</span>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="javascript:;" class="btn-reset btn btn-primary">
							<span class="btn__text">История заказов</span>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="javascript:;" class="btn-reset btn btn-primary">
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

<div class="gap-xl">
	<div class="container">
        <form id="" class="gap-xl personal-account pa" method="" action="javascript:;">
            <div class="pa-section">
                <div class="pa-row">
                    <div class="titled-input pa-item">
                        <div class="input-title">Имя</div>
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
                    <div class="titled-input pa-item">
                        <div class="input-title">Фамилия</div>
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
                    <div class="titled-input pa-item">
                        <div class="input-title">Отчество</div>
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
                <div class="pa-row">
                    <div class="titled-input pa-item">
                        <div class="input-title">Логин</div>
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
                    <div class="titled-input pa-item">
                        <div class="input-title">E-mail</div>
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
                    <div class="titled-input pa-item">
                        <div class="input-title">Телефон</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input isPhone"
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
                <div class="pa-row">
                    <div class="titled-input">
                        <div class="input-title">Адрес</div>
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
            <div class="pa-section">
                <div class="pa-row">
                    <div class="titled-input pa-item">
                        <div class="input-title">Новый пароль</div>
                        <div class="input-wrapper has-icon-r">
                            <input
                                    class="input-reset input"
                                    type="password"
                                    name=""
                                    value=""
                                    placeholder=""
                                    data-password-target
                                    required
                            >
                            <label class="input-icon input-icon-btn">
                                <svg class="icon icon-md icon-default">
                                    <use href="img/sprite.svg#eye"></use>
                                </svg>
                                <svg class="icon icon-md icon-selected">
                                    <use href="img/sprite.svg#eye-slash"></use>
                                </svg>
                                <input
                                        type="checkbox"
                                        class="visually-hidden"
                                        data-password-switcher
                                >
                            </label>
                        </div>
                    </div>
                    <div class="titled-input pa-item">
                        <div class="input-title">Подтверждение пароля</div>
                        <div class="input-wrapper has-icon-r">
                            <input
                                    class="input-reset input"
                                    type="password"
                                    name=""
                                    value=""
                                    placeholder=""
                                    data-password-target
                                    required
                            >
                            <label class="input-icon input-icon-btn">
                                <svg class="icon icon-md icon-default">
                                    <use href="img/sprite.svg#eye"></use>
                                </svg>
                                <svg class="icon icon-md icon-selected">
                                    <use href="img/sprite.svg#eye-slash"></use>
                                </svg>
                                <input
                                        type="checkbox"
                                        class="visually-hidden"
                                        data-password-switcher
                                >
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pa-section">
                <div class="pa-row">
                    <button class="btn-reset btn btn-secondary pa-item" type="submit">
                        <span class="btn__text">Сохранить</span>
                    </button>
                    <button class="btn-reset btn btn-primary pa-item" type="button">
                        <span class="btn__text">Сбросить данные</span>
                    </button>
                    <button class="btn-reset btn btn-primary pa-item" type="button">
                        <span class="btn__text">Выйти</span>
                    </button>
                </div>
            </div>
        </form>
        <div class="">
            <div>Дата обновления: 20.07.2023 11:31:52</div>
            <div>Последняя авторизация: 30.08.2023 11:49:32</div>
        </div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>