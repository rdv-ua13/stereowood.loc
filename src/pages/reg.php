<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-sm">
	<div class="container">
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/breadcrumbs.php"); ?>
	</div>
</div>

<div class="gap-sm">
	<div class="container">
		<div class="h3">Регистрация нового пользователя</div>
	</div>
</div>

<div class="gap-xl">
	<div class="container">
		<form id="" class="authreg" method="" action="javascript:;">
			<div class="gap-md">
				<div class="gap-sm">
					<div class="titled-input">
						<div class="input-title">Придумайте логин</div>
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
				<div class="gap-sm">
					<div class="titled-input">
						<div class="input-title">E-mail</div>
						<div class="input-wrapper">
							<input
								class="input-reset input"
								type="email"
								name=""
								value=""
								placeholder=""
								autocomplete="off"
								required
							>
						</div>
					</div>
				</div>
				<div class="gap-sm">
					<div class="titled-input">
						<div class="input-title">Пароль</div>
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
				<div class="gap-sm">
					<div class="titled-input">
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
				<div class="gap-sm">
                    <div class="input-wrapper">
                        <span class="custom-checkbox custom-checkbox--agree">
                            <input
                                    id="regFormAgree"
                                    class="custom-checkbox__input"
                                    type="checkbox"
                                    checked
                            >
                            <label for="regFormAgree" class="custom-checkbox__label-for">Нажимая на кнопку, вы даете согласие на обработку ваших персональных данных</label>
                        </span>
                    </div>
				</div>
				<div class="">
                    <div class="input-wrapper">
                        reCAPTCHA
                    </div>
				</div>
			</div>

            <div class="">
                <div class="input-wrapper">
                    <button class="btn-reset btn btn-secondary w-100" type="submit">
                        <span class="btn__text">Зарегестрироваться</span>
                    </button>
                </div>
            </div>
		</form>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>