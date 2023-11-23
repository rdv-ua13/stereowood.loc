<?/* Позвоните мне */?>
<div id="modal_test" class="modal">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h3">Позвоните мне</div>
            </div>

            <form class="form" action="#" method="">
                <div class="success-msg">
                    <div class="success-msg__view">
                        <svg
                                class="success-checkmark"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 52 52"
                        >
                            <circle class="success-checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="success-checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>

                    </div>
                    <div class="success-msg__descr">
                        <div class="success-msg__title h3">Ваша заявка отправлена</div>
                        <div>Мы свяжемся с вами в ближайшее время</div>
                    </div>
                </div>

                <div class="gap-md field-wrapper">
                    <div class="titled-input">
                        <div class="input-title">Ваше имя</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Ваше имя"
                                    autocomplete="off"
                                    required
                            >
                        </div>
                    </div>
                </div>
                <div class="gap-md field-wrapper">
                    <div class="titled-input">
                        <div class="input-title">Номер телефона</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input isPhone"
                                    type="tel"
                                    name=""
                                    value=""
                                    placeholder="Номер телефона"
                                    autocomplete="off"
                                    required
                            >
                        </div>
                    </div>
                </div>
                <div class="gap-md field-wrapper">
                    <div class="titled-input">
                        <div class="input-title">Электронная почта</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input"
                                    type="email"
                                    name=""
                                    value=""
                                    placeholder="Email"
                                    autocomplete="off"
                                    required
                            >
                        </div>
                    </div>
                </div>
                <div class="gap-md field-wrapper">
                    <span class="custom-checkbox">
                        <input id="contactFormAgree" class="custom-checkbox__input" type="checkbox" checked>
                        <label for="contactFormAgree" class="custom-checkbox__label-for">Отправляя заявку, я соглашаюсь с условиями <a class="link link-tdu" href="javascript:;">политики обработки персональных данных</a></label>
                    </span>
                </div>

                <div class="field-wrapper">
					<?/* change type to "submit" */?>
                    <button class="btn-reset btn btn-secondary w-100" type="button" data-contact-form-success>
                        <span class="btn__text">Отправить</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?/* Добавление товара в корзину - успешно */?>
<div id="modal_add_product_success" class="modal modal-success">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h3">Позвоните мне</div>
            </div>

            <form class="form" action="#" method="">
                <div class="success-msg">
                    <div class="success-msg__view">
                        <svg
                                class="success-checkmark"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 52 52"
                        >
                            <circle class="success-checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="success-checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>

                    </div>
                    <div class="success-msg__descr">
                        <div class="success-msg__title h3">Ваша заявка отправлена</div>
                        <div>Мы свяжемся с вами в ближайшее время</div>
                    </div>
                </div>

                <div class="gap-md field-wrapper">
                    <div class="titled-input">
                        <div class="input-title">Ваше имя</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input login"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Ваше имя"
                                    autocomplete="off"
								    <?/* required */?>
                            >
                        </div>
                    </div>
                </div>
                <div class="gap-md field-wrapper">
                    <div class="titled-input">
                        <div class="input-title">Номер телефона</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input isPhone"
                                    type="tel"
                                    name=""
                                    value=""
                                    placeholder="Номер телефона"
                                    autocomplete="off"
                                    <?/* required */?>
                            >
                        </div>
                    </div>
                </div>
                <div class="gap-md field-wrapper">
                    <div class="titled-input">
                        <div class="input-title">Электронная почта</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input email"
                                    type="email"
                                    name=""
                                    value=""
                                    placeholder="Email"
                                    autocomplete="off"
								    <?/* required */?>
                            >
                        </div>
                    </div>
                </div>
                <div class="gap-md field-wrapper">
                    <span class="custom-checkbox">
                        <input id="contactFormAgree" class="custom-checkbox__input" type="checkbox" checked>
                        <label for="contactFormAgree" class="custom-checkbox__label-for">Отправляя заявку, я соглашаюсь с условиями <a class="link link-tdu" href="javascript:;">политики обработки персональных данных</a></label>
                    </span>
                </div>

                <div class="field-wrapper">
					<?/* change type to "submit" */?>
                    <button class="btn-reset btn btn-secondary w-100" type="button" data-form-success>
                        <span class="btn__text">Отправить</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>