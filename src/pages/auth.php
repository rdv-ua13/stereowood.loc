<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-sm">
	<div class="container">
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/breadcrumbs.php"); ?>
	</div>
</div>

<div class="gap-sm">
	<div class="container">
        <div class="h3">Авторизация</div>
	</div>
</div>

<div class="gap-xl">
	<div class="container">

        <div class="authreg">
            <div class="gap-xl">
                <form id="" class="form authreg-form" method="" action="javascript:;">
                    <div class="titled-input">
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
                    <div class="titled-input has-icon has-icon-r">
                        <div class="input-title">Пароль</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input"
                                    type="password"
                                    name=""
                                    value=""
                                    placeholder=""
                                    autocomplete="off"
                                    required
                            >
                            <div class="input-icon input-icon-btn">
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
                            </div>
                        </div>
                    </div>

                    <div class="form__field">
                        <label for="authFormPassword" class="form__label-for">
                            <span>Пароль <span class="required-star">*</span></span>
                        </label>
                        <input
                                id="authFormPassword"
                                class="input-reset form__input"
                                type="password"
                                name="authFormPassword"
                                placeholder=""
                                data-password-target
                                required
                        >
                        <div class="form__btn">
                            <label class="flex-all-center">
                                <svg class="icon">
                                    <use href="img/sprite.svg#eye-on"></use>
                                </svg>
                                <input
                                        type="checkbox"
                                        class="visually-hidden"
                                        data-password-switcher
                                >
                            </label>
                        </div>
                    </div>
                    <div class="form__field form__field-btn">
                        <button class="btn-reset btn btn--fill">
                            <span class="btn__text">Войти</span>
                        </button>
                        <a href="javascript:;" class="link link--green">Восстановить пароль</a>
                    </div>
                </form>
            </div>
            <div class="">
                <a href="javascript:;" class="link link-tdu">Забыли свой пароль?</a>
            </div>
        </div>

	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>