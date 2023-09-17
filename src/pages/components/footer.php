    </main>

    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-logo">
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
            <div class="footer-popular">
                <ul class="list-reset footer-popular__list">
                    <li>
                        <a href="javascript:;" class="link">
                            <span>Детское игровое оборудование</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="link">
                            <span>Спортивное оборудование</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="link">
                            <span>МАФ</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                <ul class="list-reset footer-menu__list">
                    <li>
                        <a href="javascript:;" class="link">Доставка</a>
                    </li>
                    <li>
                        <a href="javascript:;" class="link">Оплата</a>
                    </li>
                    <li>
                        <a href="javascript:;" class="link">Компания</a>
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
            <div class="footer-contacts">
                <div class="footer-contacts__item">
                    <ul class="list-reset footer-contacts__list">
                        <li>Ростов-на-Дону, ул. Вавилова, 59В/101</li>
                        <li><a href="javascript:;" class="link">+7 (863) 275-07-31</a></li>
                        <li><a href="javascript:;" class="link">+7 (863) 275-07-32</a></li>
                        <li><a href="javascript:;" class="link link-tdu">info@stereowood.com</a></li>
                    </ul>
                </div>
                <div class="footer-contacts__item">
                    <div class="social">
                        <ul class="list-reset social__list">
                            <li>
                                <a href="javascript:;" target="_blank" aria-label="Наша страничка в Вконтакте">
                                    <img
                                        loading="lazy"
                                        class="image"
                                        src="img/vk.svg"
                                        width="24"
                                        height="24"
                                        alt="Наша страничка в Вконтакте"
                                    >
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" target="_blank" aria-label="Наша страничка в Whatsapp">
                                    <img
                                        loading="lazy"
                                        class="image"
                                        src="img/whatsapp.svg"
                                        width="24"
                                        height="24"
                                        alt="Наша страничка в Whatsapp"
                                    >
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">ООО «Крафтвуд» <?= date('Y'); ?></div>
        </div>
    </footer>

	<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/modals.php"); ?>
</body>
</html>