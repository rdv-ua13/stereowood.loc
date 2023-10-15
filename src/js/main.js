document.addEventListener('DOMContentLoaded', () => {
    const app = new application();
    app.init();
});

function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initTouch();
    this.initBurger();
    this.initOverlay();
    this.initFancyBehavior();
    this.initDropdownMenu();
    this.initDropdownMenuOffset();
    this.initHeaderContactsAs();
    this.initHeaderSearch();
    this.initMaskedInput();
    this.initBasicSlider();
    this.initSliders();
    this.initSwitchContent();
    this.initReadmore();
    this.initInputSearchBehavior();
    this.initCatalogSidebarFilter();
    this.initCatalogSidebarFilterViewSwitcher();
    this.initCatalogSidebarSortOptionsContent();
    this.initCatalogSidebarCurrencySymbol();
    this.initCatalogContentSort();
    this.initCatalogContentViewSwitcher();
    this.initTooltips();
    this.initDeleteTrigger();
    this.initCheckedRadioInsurances();
    this.initContactsMap();
    this.initAccordion();
    this.initCartQuantity();
    this.initSelect2();
    this.initPasswordSwitcher();
};

// Initialize device check
application.prototype.initTouch = function () {
    if ('ontouchstart' in document.documentElement) {
        $('html').addClass('touch');
    }
};

// Initialize disable scroll
application.prototype.disableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    const paddingOffset = `${(window.innerWidth - body.offsetWidth)}px`;

    document.documentElement.style.scrollBehavior = 'none';
    fixBlocks.forEach(el => { el.style.paddingRight = paddingOffset; });
    body.style.paddingRight = paddingOffset;
    body.classList.add('dis-scroll');
};

// Initialize enable scroll
application.prototype.enableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    fixBlocks.forEach(el => { el.style.paddingRight = '0px'; });
    body.style.paddingRight = '0px';
    body.classList.remove('dis-scroll');
};

// Initialize burger-menu
application.prototype.initBurger = function () {
    const body = document?.querySelector('body');
    const burger = document?.querySelector('[data-menu-spoiler]');
    const menu = document?.querySelector('[data-menu]');

    burger?.addEventListener('click', (e) => {
        burger?.classList.toggle('active');
        menu?.classList.toggle('active');

        if (menu?.classList.contains('active')) {
            burger?.setAttribute('aria-expanded', 'true');
            burger?.setAttribute('aria-label', 'Закрыть меню');
            this.disableScroll();
        } else {
            burger?.setAttribute('aria-expanded', 'false');
            burger?.setAttribute('aria-label', 'Открыть меню');
            this.enableScroll();
        }
    });

    $(window).on('resize', function () {
        setMenuClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setMenuClose();
        }
    });

    $(document).on('click', function (e) {
        if ($('.overlay').is(e.target)) {
            setMenuClose();
        }
    });

    function setMenuClose() {
        burger?.setAttribute('aria-expanded', 'false');
        burger?.setAttribute('aria-label', 'Открыть меню');
        burger?.classList.remove('active');
        menu?.classList.remove('active');
        body?.classList.remove('overflow-hidden');
        $('.overlay').remove();
        return application.prototype.enableScroll();
    }
};

// Initialize overlay element
application.prototype.initOverlay = function () {
    if($('[data-overlay]').length) {
        const body = $('body');
        const triggerEl = $('[data-overlay]');

        $(triggerEl).on('click', function () {
            body.addClass('overflow-hidden');
            $('<div class="overlay"></div>').insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay').is(e.target)) {
                setTargetAction()
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setTargetAction()
            }
        });
        
        function setTargetAction() {
            body.removeClass('overflow-hidden');
            $('.overlay').remove();
            return application.prototype.enableScroll();
        }
    }
};

// Initialize custom fancy behavior
application.prototype.initFancyBehavior = function () {
    const body = $('body');
    const fancybox = $('[data-fancybox]');
    const burger = $('[data-menu-spoiler]');
    const menu = $('[data-menu]');

    fancybox.on('click', function () {
        let currentSrc = $(this).data('src');

        menu.removeClass('active');
        burger.attr('aria-expanded', 'false');
        burger.attr('aria-label', 'Открыть меню');
        $('.overlay').remove();
        $('.overlay-transparent').remove();

        $('.modal').not(currentSrc).closest('.fancybox__container.is-animated').click();
    });

    $(document).on('click', function (e) {
        if ($('.fancybox__slide.is-selected.has-inline').is(e.target) || $('.fancybox__slide .carousel__button.is-close').is(e.target)) {
            body.removeClass('overflow-hidden');
            return application.prototype.enableScroll();
        }
    });
};

// Initialize dropdown menu
application.prototype.initDropdownMenu = function () {
    if ($('.dropdown-container').length) {
        let spoiler = $('.dropdown-spoiler');
        let dropdown = $('.dropdown-menu');

        spoiler.on('mouseover', function () {
            $(this).addClass('active');
            $(this).next('.dropdown-menu').addClass('active');
        });
        dropdown.on('mouseover', function () {
            $(this).prev('.dropdown-spoiler').addClass('active');
            $(this).addClass('active');
        });
        spoiler.on('mouseout', function () {
            spoiler.removeClass('active');
            dropdown.removeClass('active');
        });
        dropdown.on('mouseout', function () {
            spoiler.removeClass('active');
            dropdown.removeClass('active');
        });
    }
};

// Initialize dropdown menu offset correction
application.prototype.initDropdownMenuOffset = function () {
    if ($('.dropdown-menu').length) {
        let dropdown = $('.dropdown-menu');
        let container = $('.header-container');

        coordCalc();
        $(window).on('resize', coordCalc);

        function coordCalc () {
            if (window.matchMedia('(min-width: 992px)').matches) {
                dropdown.each(function () {
                    let coordX = $(this).offset().left;
                    let elemW = $(this).outerWidth();
                    let overflow = container.width() - (coordX + elemW);

                    if (overflow < 0 ) {
                        $(this).addClass('align-right');
                    } else {
                        $(this).removeClass('align-right');
                    }
                });
            }
        }
    }
};

// Initialize contacts header
application.prototype.initHeaderContactsAs = function () {
    if ($('.header-contacts__list-spoiler').length) {
        let spoiler = $('.header-contacts__list-spoiler');

        spoiler.on('click', function () {
            if (!spoiler.next('.header-contacts__list').hasClass('active')) {
                spoiler.next('.header-contacts__list').addClass('active');
            } else if (spoiler.next('.header-contacts__list').hasClass('active')) {
                spoiler.next('.header-contacts__list').removeClass('active');
            }
        });

        $(document).on('click', function (e) {
            if (!$('.header-contacts__list-spoiler').is(e.target) &&
                !$('.header-contacts__list').is(e.target) &&
                $('.header-contacts__list').has(e.target).length === 0)
            {
                spoiler.siblings('.header-contacts__list').removeClass('active');
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                spoiler.siblings('.header-contacts__list').removeClass('active');
            }
        });
    }
};

// Initialize header search
application.prototype.initHeaderSearch = function () {
    if ($('.header-search').length) {
        let spoiler = $('.header-search-spoiler');
        let form = $('.header-search-form');

        spoiler.on('click', function () {
            if (!spoiler.next('.header-search-form').hasClass('active')) {
                spoiler.addClass('active');
                spoiler.next('.header-search-form').addClass('active');
                spoiler.closest('.header-actions__list').addClass('searching');
            } else if (spoiler.next('.header-search-form').hasClass('active')) {
                spoiler.removeClass('active');
                spoiler.next('.header-search-form').removeClass('active');
                spoiler.closest('.header-actions__list').removeClass('searching');
            }
        });

        $(document).on('click', function (e) {
            if (!spoiler.is(e.target) &&
                !form.is(e.target) &&
                form.has(e.target).length === 0)
            {
                spoiler.removeClass('active');
                spoiler.siblings('.header-search-form').removeClass('active');
                spoiler.siblings('.header-search-form .input-search').val();
                spoiler.closest('.header-actions__list').removeClass('searching');
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                spoiler.removeClass('active');
                spoiler.siblings('.header-search-form').removeClass('active');
                spoiler.siblings('.header-search-form .input-search').val();
                spoiler.closest('.header-actions__list').removeClass('searching');
            }
        });
    }
};

// Mobile number mask
application.prototype.initMaskedInput = function () {
    $('.isPhone').mask("+7-999-999-99-99", { autoclear: false });
};

// Initialize basic slider
application.prototype.initBasicSlider = function () {
    if ($('.basic-slider-wrap').length) {
        const slider = $('[data-basic-slider]');

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            const basicSliderSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: 12,
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-slider-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-slider-wrap-' + i + ' .swiper-button-prev',
                },
                pagination: {
                    el: '.basic-slider-wrap-' + i + ' .swiper-pagination',
                    type: 'bullets',
                },
                breakpoints: {
                    992: {
                        spaceBetween: 16
                    },
                }
            };

            reinitSlider();
            $(window).on('resize', reinitSlider);

            function reinitSlider() {
                if (window.matchMedia('(min-width: 992px)').matches) {
                    basicSlider = null;
                    basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider.basic-slider-desktop', basicSliderSetting);
                } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                    basicSlider = null;
                    basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider.basic-slider-mobile', basicSliderSetting);
                }
            }
        });
    }
};

// Initialize sliders
application.prototype.initSliders = function () {
    if ($('.index-slider-wrapper').length) {
        let indexSlider = new Swiper('.index-slider', {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 0,
            direction: 'horizontal',
            pagination: {
                el: '.index-slider-wrapper .swiper-pagination',
                type: 'bullets'
            }
        });
    }

    if ($('.nav-breadcrumbs').length) {
        let sliderNavBreadcrumbs = new Swiper('.nav-breadcrumbs', {
            spaceBetween: 0,
            slidesPerView: 'auto'
        });
    }

    if ($('.details-slider').length) {
        let detailsSlider = new Swiper('.details-slider', {
            slidesPerView: 'auto',
            spaceBetween: 12,
            navigation: {
                nextEl: '.details-slider .swiper-button-next',
                prevEl: '.details-slider .swiper-button-prev',
            }
        });
    }

    if ($('.details-thumb-slider').length) {
        let detailsThumbSliderPointer = new Swiper('.details-thumb-slider-pointer', {
            slidesPerView: 'auto',
            spaceBetween: 16,
            freeMode: true,
            watchSlidesProgress: true
        });
        let detailsThumbSlider = new Swiper('.details-thumb-slider', {
            slidesPerView: 'auto',
            spaceBetween: 12,
            navigation: {
                nextEl: '.details-thumb-slider .swiper-button-next',
                prevEl: '.details-thumb-slider .swiper-button-prev',
            },
            thumbs: {
                swiper: detailsThumbSliderPointer,
            }
        });
    }
};

// Initialize switch content
application.prototype.initSwitchContent = function () {
    const switchContent = $('.switch-content');

    switchContent.on('click', function () {
        if($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            $(this).addClass('selected');
        }
    });
};

// Initialize readmore plugin
application.prototype.initReadmore = function () {
    if ($('[data-spoiler]').length) {
        const spoiler = $('[data-spoiler]');

        spoiler.each(function (i) {
            let currentMoreText = spoiler.eq(i).data('spoiler-more');
            let currentLessText = spoiler.eq(i).data('spoiler-less');
            let defaultHeight = 340;
            let defaultMoreText = 'Показать все';
            let defaultLessText = 'Свернуть';
            let currentElemHeight = spoiler.eq(i).data('collapsed-height');

            if (currentMoreText === '' || currentMoreText === null || currentMoreText === undefined &&
                currentLessText === '' || currentLessText === null || currentLessText === undefined)
            {
                currentMoreText = defaultMoreText;
                currentLessText = defaultLessText;
            } else if (currentMoreText === '' || currentMoreText === null || currentMoreText === undefined) {
                currentMoreText = defaultMoreText;
            } else if (currentLessText === '' || currentLessText === null || currentLessText === undefined) {
                currentLessText = defaultLessText;
            }

            if (currentElemHeight === '' || currentElemHeight === null || currentElemHeight === undefined) {
                currentElemHeight = defaultHeight;
            }

            if ($(this).find('.spoiler-content').height() > defaultHeight) {
                $(this).addClass('spoiler-scrolled');
            }

            spoiler.eq(i).addClass('spoiler-' + i);
            $('.spoiler-' + i).readmore({
                collapsedHeight: currentElemHeight,
                moreLink: '<a href="javascript:;" class="link-dashed link-red spoiler-trigger">\n' +
                    '                                        <span class="btn__text">' + currentMoreText + '</span>\n' +
                    '                                    </a>',
                lessLink: '<a href="javascript:;" class="link-dashed link-red spoiler-trigger">\n' +
                    '                                        <span class="btn__text">' + currentLessText + '</span>\n' +
                    '                                    </a>'
            });
        });
    }
};

// Initialize input-search behavior
application.prototype.initInputSearchBehavior = function () {
    if ($('.input-search').length) {
        $('.input-search').on('input', function () {
            if ($(this).val() === '' || $(this).val() === null) {
                $(this).removeClass('has-data');
                $(this).closest('.input-search-wrapper').removeClass('has-data');
            } else if ($(this).val() !== '' && $(this).val() !== null) {
                $(this).addClass('has-data');
                $(this).closest('.input-search-wrapper').addClass('has-data');
            }
        });

        $('.input-delete-btn').on('click', function () {
            $(this).closest('.input-search-wrapper').removeClass('has-data');
            $(this).closest('.input-search-wrapper').find('.input-search').val('').removeClass('has-data');
        });
    }
};

// Initialize catalog sidebar filter
application.prototype.initCatalogSidebarFilter = function () {
    if ($('[data-filter]').length && $('[data-filter-spoiler]').length) {
        const filter = $('[data-filter]');
        const filterSpoiler = $('[data-filter-spoiler]');
        const filterClose = $('[data-filter-close]');

        setResponsiveFilter();
        setCheckChangeFilter();
        $(window).on('resize', setResponsiveFilter, setCloseFilter, setCheckChangeFilter);

        filterClose.on('click', function () {
            setCloseFilter();
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setCloseFilter();
            }
        });

        function setResponsiveFilter() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                setCloseFilter();
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                filterSpoiler.on('click', function () {
                    $(this).addClass('active');
                    filter.addClass('active');
                    $('body').addClass('overflow-hidden');
                });
            }
        }

        function setCloseFilter() {
            filter.removeClass('active');
            filterSpoiler.removeClass('active');
            $('body').removeClass('overflow-hidden');
        }

        function setCheckChangeFilter() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                filter.removeClass('has-filter');
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                filter.on('change', function () {
                    filter.addClass('has-filter');
                    filterSpoiler.addClass('has-filter');
                });
            }
        }
    }
};

// Initialize catalog sidebar filter view switcher
application.prototype.initCatalogSidebarFilterViewSwitcher = function () {
    if ($('[data-filter-option-view]').length && $('[data-filter-option-content]').length) {
        const viewSwitcherContainer = $('[data-filter-option]');
        const viewSwitcher = $('[data-filter-option-view]');
        const viewSwitcherContent = $('[data-filter-option-content]');

        viewSwitcher.on('click', function () {
            if (!$(this).hasClass('collapse-view-in')) {
                $(this).addClass('collapse-view-in');
                $(this).closest(viewSwitcherContainer).find(viewSwitcherContent).addClass('collapse-content-in');
            } else if ($(this).hasClass('collapse-view-in')) {
                $(this).removeClass('collapse-view-in');
                $(this).closest(viewSwitcherContainer).find(viewSwitcherContent).removeClass('collapse-content-in');
            }
        });
    }
};

// Initialize catalog sidebar sort options content
application.prototype.initCatalogSidebarSortOptionsContent = function () {
    $('.catalog-sidebar-filter__options-item').each(function(i, e) {
        $(e).find('.catalog-sidebar-filter__options-search .input-search').on('input', function() {
            let text = $(this).val().toLowerCase();
            $(this).parents('.catalog-sidebar-filter__options-item').find('.catalog-sidebar-filter__item .custom-checkbox__label-for').each(function() {
                if ($(this).text().toLowerCase().indexOf(text) === -1) {
                    $(this).closest('.catalog-sidebar-filter__item').fadeOut(200);
                    $(this).closest('.spoiler').addClass('height-auto');
                    $(this).closest('.catalog-sidebar-filter__options-content-item').find('.spoiler-trigger').addClass('visually-hidden');
                } else {
                    $(this).closest('.catalog-sidebar-filter__item').fadeIn(200);
                    $(this).closest('.spoiler').removeClass('height-auto');
                    $(this).closest('.catalog-sidebar-filter__options-content-item').find('.spoiler-trigger').removeClass('visually-hidden');
                }
            });
        });

        $(e).find('.catalog-sidebar-filter__options-search .input-search').siblings('.input-delete-btn').on('click', function(e) {
            e.preventDefault();

            $(this).closest('.catalog-sidebar-filter__options-content').find('.catalog-sidebar-filter__item').fadeIn(200);
            $(this).closest('.catalog-sidebar-filter__options-content').find('.spoiler').removeClass('height-auto');
            $(this).closest('.catalog-sidebar-filter__options-content').find('.spoiler-trigger').removeClass('visually-hidden');
        });
    });
};

// Initialize catalog sidebar prices adding currency symbol
application.prototype.initCatalogSidebarCurrencySymbol = function () {
    $('.catalog-sidebar-prices__input').on('change keyup', function() {
        $(this).val($(this).val().replace(/[^0-9]/gi, '') + ' ₽');
    });

    $('.catalog-sidebar-prices__input').on('click keyup', function(e) {
        let input = this;
        let end = input.value.length - 2;

        input.setSelectionRange(end, end);
        input.focus();
    });
};

// Initialize catalog content sort
application.prototype.initCatalogContentSort = function () {
    if ($('.catalog-content-settings__sort-options').length) {
        initCatalogContentSortSwitch();

        catalogSettingsSortSelect();
        $(window).on('resize', catalogSettingsSortSelect);

        $(document).on('click', function (e) {
            if (!$('.catalog-content-settings__sort-select').is(e.target) &&
                !$('.catalog-content-settings__sort-options').is(e.target) &&
                $('.catalog-content-settings__sort-options').has(e.target).length === 0)
            {
                closeCatalogContentSettingsSort();
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                closeCatalogContentSettingsSort();
            }
        });

        function initCatalogContentSortSwitch() {
            $('.catalog-content-settings__sort-options input[type="radio"]').on('click', function () {
                if($(this).prop('checked')) {
                    $(this).closest('.catalog-content-settings__sort-options').find('.catalog-content-settings__sort-label').removeClass('active');
                    $(this).siblings('.catalog-content-settings__sort-label').addClass('active');
                } else {
                    $(this).siblings('.catalog-content-settings__sort-label').removeClass('active');
                }

                let selectPlaceholder = $('.catalog-content-settings__sort-label.active').text();

                $('.catalog-content-settings__sort').find('.catalog-content-settings__sort-select-text').text(selectPlaceholder);
                closeCatalogContentSettingsSort();
            });
        }

        function catalogSettingsSortSelect() {
            $('.catalog-content-settings__sort-select').on('click', function () {
                if (!$(this).hasClass('active')) {
                    $(this).addClass('active');
                    $(this).siblings('.catalog-content-settings__sort-options').addClass('active');
                } else if ($(this).hasClass('active')) {
                    $(this).removeClass('active');
                    $(this).siblings('.catalog-content-settings__sort-options').removeClass('active');
                }
            });
        }

        function closeCatalogContentSettingsSort () {
            $('.catalog-content-settings__sort-select').removeClass('active');
            $('.catalog-content-settings__sort-options').removeClass('active');
        }
    }
};

// Initialize catalog content view switcher
application.prototype.initCatalogContentViewSwitcher = function () {
    if ($('[data-catalog-content-grid]').length) {
        const viewSwitcherContainer = $('[data-catalog-content-view]');
        const viewSwitcher = $('[data-catalog-content-grid]');

        $(window).on('resize', responsiveDefaultGrid);

        viewSwitcher.on('click', function () {
            let defaultValue = $('[data-catalog-content-grid="sm"]');
            let currentValue = $(this).data('catalog-content-grid');

            switch (currentValue) {
                case 'sm':
                    viewSwitcherContainer.removeClass('catalog-content__grid--md catalog-content__grid--lg');
                    viewSwitcherContainer.addClass('catalog-content__grid--sm');
                    viewSwitcher.removeClass('active');
                    $(this).addClass('active');
                    break;
                case 'md':
                    viewSwitcherContainer.removeClass('catalog-content__grid--sm catalog-content__grid--lg');
                    viewSwitcherContainer.addClass('catalog-content__grid--md');
                    viewSwitcher.removeClass('active');
                    $(this).addClass('active');
                    break;
                case 'lg':
                    viewSwitcherContainer.removeClass('catalog-content__grid--sm catalog-content__grid--md');
                    viewSwitcherContainer.addClass('catalog-content__grid--lg');
                    viewSwitcher.removeClass('active');
                    $(this).addClass('active');
                    break;
                default:
                    viewSwitcherContainer.addClass('catalog-content__grid--sm');
                    viewSwitcher.removeClass('active');
                    defaultValue.addClass('active');
            }
        });

        function responsiveDefaultGrid() {
            viewSwitcherContainer.removeClass('catalog-content__grid--md catalog-content__grid--lg');
            viewSwitcherContainer.addClass('catalog-content__grid--sm');
            viewSwitcher.removeClass('active');
            $('[data-catalog-content-grid="sm"]').addClass('active');
        }
    }
};



// Initialize tooltips
application.prototype.initTooltips = function () {
    if ($('.tooltip').length) {
        tippy('.tooltip', {
            allowHTML: true,
            trigger: 'mouseenter click',
        });
    }
};

// Initialize delete trigger
application.prototype.initDeleteTrigger = function () {
    $('[data-delete-trigger]').on('click', function () {
        $(this).closest('[data-removable]').remove();
    });
};

// Initialize checked radio insurances
application.prototype.initCheckedRadioInsurances = function () {
    if ($('.custom-radio').length) {
        $('.custom-radio__input').on('click',function () {
            let name = $(this).attr('name');

            $('.custom-radio__input[name="' + name + '"]').removeClass('checked');
            $('.custom-radio__input[name="' + name + '"]').not(this).prop('checked', false);
            $(this).addClass('checked');
        });
    }
};

// Initialize contacts map
application.prototype.initContactsMap = function () {
    if ($('.contacts__map').length) {
        ymaps.ready(init);

        let map,
            placemark,
            iconContentLayout,
            mapItem = $('.contacts__map-content');

        function init () {
            mapItem.each(function (i) {
                mapItem.eq(i).attr('id', 'contactsMap' + i);

                let coordX = $(this).data('x'),
                    coordY = $(this).data('y'),
                    hint = $(this).data('hint'),
                    zoomControl = new ymaps.control.ZoomControl({
                        options: {
                            size: 'large',
                            float: 'none',
                            position: {
                                top: 50,
                                right: 10,
                                left: 'auto',
                            },
                        }
                    });

                // Параметры карты можно задать в конструкторе.
                map = new ymaps.Map(
                    // ID DOM-элемента, в который будет добавлена карта.
                    'contactsMap' + i,
                    // Параметры карты.
                    {
                        // Географические координаты центра отображаемой карты.
                        center: [
                            coordX,
                            coordY
                        ],
                        // Масштаб.
                        zoom: 15,
                        controls: ['fullscreenControl'],
                    }, {
                        // Поиск по организациям.
                        searchControlProvider: 'yandex#search'
                    }
                );

                // Создаём макет содержимого.
                iconContentLayout = ymaps.templateLayoutFactory.createClass(
                    '<div class="placemark">' +
                    '                <div class="placemark-icon">' +
                    '                    <svg class="icon">' +
                    '                        <use href="img/sprite.svg#advantage-buildings-white"></use>' +
                    '                    </svg>' +
                    '                    <div class="placemark-icon-arrow"></div>' +
                    '                </div>' +
                    '                <div class="placemark-point"></div>' +
                    '            </div>'
                );

                placemark = new ymaps.Placemark([coordX, coordY], {
                    hintContent: hint
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '',
                    // Размеры метки.
                    iconImageSize: [48, 48],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-24, -24],
                    // Смещение слоя с содержимым относительно слоя с картинкой.
                    iconContentOffset: [15, 15],
                    // Макет содержимого.
                    iconContentLayout: iconContentLayout
                });

                map.geoObjects.add(placemark);
                map.controls.add(zoomControl);
            });
        }
    }
};

// Initialize accordion
application.prototype.initAccordion = function () {
    if ($('.accordion').length) {
        initAccordionResponsive();
        $(window).on('resize', initAccordionResponsive, reloadAccordionResponsive);

        function reloadAccordionResponsive() {
            setTimeout(function () {
                location.reload();
            }, 300);
        }
        function initAccordionResponsive() {
            $('.accordion__collapse').hide();

            $('.js-accordion-btn').on('click', function () {
                if (!$(this).hasClass('open')) {
                    $(this).addClass('open');
                    $(this).closest('.accordion__item').addClass('active');
                    $(this).closest('.accordion__item').find('.accordion__collapse').removeClass('collapsed');
                    $(this).closest('.accordion__item').find('.accordion__collapse').slideDown(160);
                } else if ($(this).hasClass('open')) {
                    $(this).removeClass('open');
                    $(this).closest('.accordion__item').removeClass('active');
                    $(this).closest('.accordion__item').find('.accordion__collapse').slideUp(160);
                    setTimeout(function () {
                        $(this).closest('.accordion__item').find('.accordion__collapse').addClass('collapsed');
                    }, 160);
                }
            });
        }
    }
};

// Initialize cart quantity
application.prototype.initCartQuantity = function () {
    if ($('.cart-quantity').length) {
        $(document).on('click','.cart-quantity-btn--remove', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            }
        });

        $(document).on('click', '.cart-quantity-btn', function(e) {
            let button = $(this);
            let oldValue = button.closest('.cart-quantity').find('input.cart-quantity-input').val();
            let mult = parseInt(button.closest('.cart-quantity').find('input.cart-quantity-input').data('mult'));
            let newVal = null;

            if(mult <= 0 || isNaN(mult)) {
                mult = 1;
            }

            if(button.data('value') === 'qty-add') {
                newVal = parseInt(oldValue) + mult;

                if(newVal > 1) {
                    $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').removeClass('selected');
                } else {
                    $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').addClass('selected');
                }
            } else {
                if (oldValue > 0) {
                    newVal = parseInt(oldValue) - mult;
                    $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').removeClass('selected');

                    if(oldValue > 1 && oldValue < 3) {
                        $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').addClass('selected');
                    }
                } else {
                    newVal = 0;
                }
            }

            if(newVal == 0) {
                newVal = mult;
            }

            button.closest('.cart-quantity').find('input.cart-quantity-input').val(newVal).trigger('change');
        });
    }
};

// Initialize select2
application.prototype.initSelect2 = function () {
    if ($('.js-select2').length) {
        $('.js-select2').select2(
            {
                width: "100%",
                minimumResultsForSearch: -1,
                escapeMarkup: function(m) { return m; }
            }
        );
    }
};

// Initialization password-switcher
application.prototype.initPasswordSwitcher = function () {
    if ($('input[type=password]').length) {
        $(document).on('click', 'input[data-password-switcher]', function(){
            if ($(this).is(':checked')) {
                $(this).closest('.input-icon-btn').find('input[data-password-target]').attr('type', 'text');
            } else {
                $(this).closest('.input-icon-btn').find('input[data-password-target]').attr('type', 'password');
            }
        });
    }
};