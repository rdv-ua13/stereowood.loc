<?/* Позвоните мне */?>
<div id="modal_test" class="modal">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h3">Позвоните мне</div>
            </div>

            <form class="contact-form form" action="#" method="">
                <div class="contact-form-success">
                    <div class="contact-form-success__view">
                        <svg class="icon">
                            <use href="/build/img/sprite.svg#check"></use>
                        </svg>
                    </div>
                    <div class="contact-form-success__descr">
                        <div class="contact-form-success__title h3">Ваша заявка отправлена</div>
                        <div class="contact-form-success__subtitle">Мы свяжемся с вами в ближайшее время</div>
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