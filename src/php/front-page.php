<?php /* Template Name: Страница Главная */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=get_template_directory_uri() . '/style.css'?>">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <title>Avantis Pump</title>
</head>

<body>
    <header class="header"> </header>
    <main class="main">
        <div class="circle-container-greeting"></div>
        <div class="main--greeting">
            <div class="base-container">
                <div class="greeting-parent">
                    <div class="greeting-parent__container">
                        <div class="greeting-parent__header">Начни инвестировать в стратегию Pump & Dump</div>
                        <div class="greeting-parent__subheader">Avantis Pump – самая удобная площадка для участия в pump
                            сессиях. Переходите в Telegram бота и начните зарабатывать прямо сейчас </div>
                        <div class="greeting-parent__button">Инвестировать сейчас </div>
                        <div class="greeting-parent__companies"> <img class="greeting-parent__image"
                                src="<?=get_template_directory_uri() . '/assets/images/content/binanceLogo.svg'?>"
                                alt=""><img class="greeting-parent__image"
                                src="<?=get_template_directory_uri() . '/assets/images/content/coinMarketLogo.svg'?>"
                                alt=""><img class="greeting-parent__image"
                                src="<?=get_template_directory_uri() . '/assets/images/content/blockchain.svg'?>"
                                alt=""><img class="greeting-parent__image"
                                src="<?=get_template_directory_uri() . '/assets/images/content/bitfinex.svg'?>"
                                alt=""><img class="greeting-parent__image"
                                src="<?=get_template_directory_uri() . '/assets/images/content/principal.svg'?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main--about">
            <div class="base-container">
                <div class="about-parent"><img class="about-parent__image"
                        src="<?=get_template_directory_uri() . '/assets/images/content/globeGif.png'?>" alt="">
                    <div class="about-parent__container" data-aos="fade-up">
                        <div class="about-parent__header">Что такое Pump & Dump?</div>
                        <div class="about-parent__content">Pump & Dump – манипулятивная схема повышения курса
                            криптовалюты с последующим ценовым обвалом. Крупные владельцы активов искусственно повышают
                            («накачивают», pump) их стоимость, чтобы впоследствии продать («сбросить», dump) максимально
                            дорого мелким трейдерам. В результате стоимость актива снижается, а инвесторы теряют
                            средства.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="circle-container-about"></div>
        <div class="main--stock">
            <div class="stock-parent__animation-container"> <img class="stock-parent__stock-images"
                    src="<?=get_template_directory_uri() . '/assets/images/content/stock.svg'?>" alt=""></div>
            <div class="base-container">
                <div class="stock-parent">
                    <div class="stock-parent__container" data-aos="fade-up">
                        <div class="stock-parent__header">Как работает pump&dump</div>
                        <div class="stock-parent__content">
                            <div class="stock-parent__par">Выбрав биржу и монету, трейдеры Avantis скупают токены
                                небольшими порциями, чтобы не спровоцировать преждевременный рост курса. Как правило,
                                это малоизвестные криптовалюты с низкой капитализацией. Иногда для pump & dump
                                используются и относительно крупные криптовалюты.</div>
                            <div class="stock-parent__par">После скупки токена начинается pump – его «накачка». В
                                мессенджерах, новостных лентах, социальных сетях и биржевых чатах анонсируется скорый
                                рост курса и сообщается название биржевой площадки. Котировки поднимаются. Это первая
                                волна пампа.</div>
                            <div class="stock-parent__par">В случае успешной рекламной кампании начинается вторая волна
                                пампа — приходят сторонние инвесторы, которые самостоятельно влияют на рост курса. На
                                фоне ажиотажа цена растет, организаторы продают токены по завышенной стоимости, после
                                чего курс криптовалюты возвращается к исходным показателям.</div>
                        </div>
                        <div class="stock-parent__stock-screener"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main--process">
            <div class="base-container">
                <div class="process-parent">
                    <div class="process-parent__container">
                        <div class="process-parent__header">Как проходит работа? </div>
                        <div class="process-parent__slider-container">
                            <div class="process-parent__num" id="sliderNum">1</div>
                            <div class="process-parent__content" id="sliderContent">Регистрируетесь в нашем Telegram
                                боте</div>
                        </div>
                        <div class="process-parent__navigation"></div>
                        <div class="js-content js--hidden">
                            <div class="js-value">Регистрируетесь в нашем Telegram боте</div>
                            <div class="js-value">Пополняете личный кабинет </div>
                            <div class="js-value">Регистрируетесь в нашем Telegram боте</div>
                            <div class="js-value">Пополняете личный кабинет </div>
                            <div class="js-value">Регистрируетесь в нашем Telegram боте</div>
                            <div class="js-value">Пополняете личный кабинет </div>
                        </div>
                    </div>
                    <div class="process-parent__swiper">
                        <div class="swiper" id="processSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"> <img class="process-parent__image"
                                        src="<?=get_template_directory_uri() . '/assets/images/content/slide1.png'?>">
                                </div>
                                <div class="swiper-slide"> <img class="process-parent__image"
                                        src="<?=get_template_directory_uri() . '/assets/images/content/slide1.png'?>">
                                </div>
                                <div class="swiper-slide"> <img class="process-parent__image"
                                        src="<?=get_template_directory_uri() . '/assets/images/content/slide1.png'?>">
                                </div>
                                <div class="swiper-slide"> <img class="process-parent__image"
                                        src="<?=get_template_directory_uri() . '/assets/images/content/slide1.png'?>">
                                </div>
                                <div class="swiper-slide"> <img class="process-parent__image"
                                        src="<?=get_template_directory_uri() . '/assets/images/content/slide1.png'?>">
                                </div>
                                <div class="swiper-slide"> <img class="process-parent__image"
                                        src="<?=get_template_directory_uri() . '/assets/images/content/slide1.png'?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main--tarifs">
            <div class="base-container">
                <div class="tarif-parent">
                    <div class="tarif-parent__row">
                        <div class="tarif-parent__label">
                            <div class="tarif-parent__label-container">
                                <div class="tarif-parent__subheader-label">Средняя доходность</div>
                                <div class="tarif-parent__header-label">30-50%</div>
                                <div class="tarif-parent__caption">за одну pump-сессию</div>
                            </div>
                        </div>
                        <div class="tarif-parent__container">
                            <div class="tarif-parent__header-main">Тарифы</div>
                            <div class="tarif-parent__content">В зависимости от суммы депозита, компания забирает
                                следующие %</div>
                        </div>
                    </div>
                    <div class="tarif-parent__tabel">
                        <div class="tarif-parent__row">
                            <div class="tarif-parent__header">Сумма инвестиций</div>
                            <div class="tarif-parent__header">Инвестор</div>
                            <div class="tarif-parent__header">Компания</div>
                            <div class="tarif-parent__header">Доходность инвестора </div>
                            <div class="tarif-parent__header"> </div>
                        </div>
                        <div class="tarif-parent__row">
                            <div class="tarif-parent__cell">500-2000</div>
                            <div class="tarif-parent__cell">30%</div>
                            <div class="tarif-parent__cell">70%</div>
                            <div class="tarif-parent__cell">9-15%</div>
                            <div class="tarif-parent__cell"></div>
                        </div>
                        <div class="tarif-parent__row">
                            <div class="tarif-parent__cell">2001-5000</div>
                            <div class="tarif-parent__cell">50%</div>
                            <div class="tarif-parent__cell">50%</div>
                            <div class="tarif-parent__cell">15-25%</div>
                            <div class="tarif-parent__cell"></div>
                        </div>
                        <div class="tarif-parent__row">
                            <div class="tarif-parent__cell">5001-25000</div>
                            <div class="tarif-parent__cell">70%</div>
                            <div class="tarif-parent__cell">30%</div>
                            <div class="tarif-parent__cell">21-35%</div>
                            <div class="tarif-parent__cell"></div>
                        </div>
                        <div class="tarif-parent__row">
                            <div class="tarif-parent__cell">25000 </div>
                            <div class="tarif-parent__cell">90%</div>
                            <div class="tarif-parent__cell">10%</div>
                            <div class="tarif-parent__cell">27-45%</div>
                            <div class="tarif-parent__cell"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main--results">
            <div class="base-container">
                <div class="results-parent">
                    <div class="results-parent__container">
                        <div class="results-parent__header">Отчетность</div>
                        <div class="results-parent__content">Все отчеты Pump сессий в одном месте</div>
                    </div>
                    <div class="results-parent__swiper">
                        <div class="swiper" id="resultSeiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="results-parent__date">22.05.2022 г.</div>
                                    <div class="results-parent__row">
                                        <div class="results-parent__parameter">
                                            <div class="results-parent__res_header">Количество монет</div>
                                            <div class="results-parent__res_value">7%</div>
                                        </div>
                                        <div class="results-parent__parameter">
                                            <div class="results-parent__res_header">Средняя прибыль</div>
                                            <div class="results-parent__res_value">18%</div>
                                        </div>
                                        <div class="results-parent__parameter">
                                            <div class="results-parent__res_header">Общая прибыль</div>
                                            <div class="results-parent__res_value">17%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="results-parent__date">23.05.2022 г.</div>
                                    <div class="results-parent__row">
                                        <div class="results-parent__parameter">
                                            <div class="results-parent__res_header">Количество монет</div>
                                            <div class="results-parent__res_value">7%</div>
                                        </div>
                                        <div class="results-parent__parameter">
                                            <div class="results-parent__res_header">Средняя прибыль</div>
                                            <div class="results-parent__res_value">18%</div>
                                        </div>
                                        <div class="results-parent__parameter">
                                            <div class="results-parent__res_header">Общая прибыль</div>
                                            <div class="results-parent__res_value">17%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main--bonus">
            <div class="base-container">
                <div class="bonus-parent">
                    <div class="bonus-parent__phone"> <img
                            src="<?=get_template_directory_uri() . '/assets/images/content/bonusPhone.png'?>" alt="">
                        <div class="bonus-parent__dialog"><a class="bonus-parent__link" href="#">Узнать подробнее
                            </a></div>
                    </div>
                    <div class="bonus-parent__container">
                        <div class="bonus-parent__header">Pump Bonus</div>
                        <div class="bonus-parent__content">Получай дополнительный доход благодаря Pump
                            bonus.Моментальное начисление в личном кабинете </div>
                        <div class="bonus-parent__label">
                            <div class="bonus-parent__label-container">
                                <div class="bonus-parent__value">15%</div>
                                <div class="bonus-parent__caption">от суммы депозита вашего реферала</div>
                            </div>
                        </div>
                        <div class="bonus-parent__small-caption">*Предупреждение. Пользователь, пригласивший по
                            своей реферальной ссылке нового участника pump-сессии, может получить 15% только 1 раз,
                            после первого внесения депозита новым участником. Количество приглашаемых участников –
                            неограниченно. </div>
                        <div class="bonus-parent__payments"> <img
                                src="<?=get_template_directory_uri() . '/assets/images/content/payments.png'?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="circle-container-faq"></div>
        <div class="main--faq">
            <div class="base-container">
                <div class="faq-parent">
                    <div class="faq-parent__image"> <img
                            src="<?=get_template_directory_uri() . '/assets/images/content/questionMark.png'?>" alt="">
                    </div>
                    <div class="faq-parent__container">
                        <div class="faq-parent__header">FAQ</div>
                        <div class="faq-parent__subheader">Ответы на популярные вопросы</div>
                        <div class="faq-parent__block">
                            <div class="faq-parent__line"> </div>
                            <div class="faq-parent__question">
                                <div class="faq-parent__content">Какая доходность у компании?</div>
                                <div class="faq-parent__indicator"> <span
                                        class="faq-parent__cross faq-parent__cross-to-remove"> </span><span
                                        class="faq-parent__cross"> </span></div>
                            </div>
                            <div class="faq-parent__answer">Да, конечно, отрицательные pump-сессии бывают и, к
                                сожалению, избежать их невозможно. Но мы всегда оцениваем и хеджируем риски, перед
                                тем как начинать любую торговую сессию</div>
                        </div>
                        <div class="faq-parent__block">
                            <div class="faq-parent__line"> </div>
                            <div class="faq-parent__question">
                                <div class="faq-parent__content">Какая доходность у компании?</div>
                                <div class="faq-parent__indicator"> <span
                                        class="faq-parent__cross faq-parent__cross-to-remove"> </span><span
                                        class="faq-parent__cross"> </span></div>
                            </div>
                            <div class="faq-parent__answer">
                                <div class="faq-parent__answer-content">Да, конечно, отрицательные pump-сессии
                                    бывают и, к сожалению, избежать их невозможно. Но мы всегда оцениваем и
                                    хеджируем риски, перед тем как начинать любую торговую сессию</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer"></footer>
    <script src="<?=get_template_directory_uri() . '/assets/js/jquery.min.js'?>"> </script>
    <script src="<?=get_template_directory_uri() . '/assets/js/plugins.min.js'?>"> </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js'?>"></script>
    <script src="<?=get_template_directory_uri() . '/assets/js/main.min.js'?>"> </script>
</body>

</html>