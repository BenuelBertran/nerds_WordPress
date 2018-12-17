<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Nёrd's</title>
         
        <?php wp_head(); ?>
         
	</head>
	<body>
        <header class="page-header">
            <div class="page-header__wrapper container">
                <nav class="main-navigation">
                    <a class="main-navigation__logo" href="#">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/navigation-logo.svg" alt="Логотип web-студии Nёrd's" width="160" height="65">
                    </a>
                    <ul class="list menu">
                        <li>
                            <a class="main-navigation__link" href="#">Студия</a>
                        </li>
                        <li>
                            <a class="main-navigation__link" href="#">Клиенты</a>
                        </li>
                        <li>
                            <a class="main-navigation__link" href="catalog.html">Магазин</a>
                        </li>
                        <li>
                            <a class="main-navigation__link" href="#">Контакты</a>
                        </li>
                    </ul>
                    <ul class="list basket">
                       <li>
                            <a class="main-navigation__link basket__link" href="#">Корзина</a>
                       </li>
                    </ul>
                </nav>
                <h1 class="visually-hidden">Дизайн-студия Nёrd's</h1>
                <section class="slider">
                    <h2 class="visually-hidden">Наши преимущества</h2>
                    <ul class="list">
                        <li class="slider__item js-slider__first">
                            <div class="slider__info-wrapper">
                                <p class="paragraph slider__info-title">
                                    Долго, дорого,<br>
                                    скрупулезно.
                                </p>
                                <p class="paragraph slider__info-description">
                                    Математически выверенный дизайн<br>
                                    для вашего сайта или мобильного приложения.
                                </p>
                                <a class="button slider__info-button" href="#">Узнать больше</a>
                            </div>
                            <img class="slider__first-image" src="<?php echo bloginfo('template_url'); ?>/assets/img/slider-image1.png" width="698" height="413" alt="Мобильные телефоны">
                        </li>
                        <li class="slider__item js-slider__second js-slider-hidden">
                            <div class="slider__info-wrapper">
                                <p class="paragraph slider__info-title">
                                    Любим математику<br>
                                    как никто другой
                                </p>
                                <p class="paragraph slider__info-description">
                                    Никакого креатива, только математические формулы<br>
                                    для расчета идеальных пропорций.
                                </p>
                                <a class="button slider__info-button" href="#">Узнать больше</a>
                            </div>
                            <img class="slider__second-image" src="<?php echo bloginfo('template_url'); ?>/assets/img/slider-image2.png" width="663" height="430" alt="Компьютерные мониторы">
                        </li>
                        <li class="slider__item js-slider__third js-slider-hidden">
                            <div class="slider__info-wrapper">
                                <p class="paragraph slider__info-title">
                                    Только ночь,<br>
                                    только хардкор
                                </p>
                                <p class="paragraph slider__info-description">
                                    Работать днем, как все? Мы против этого.<br>
                                    Ближе к полуночи работа только начинается.
                                </p>
                                <a class="button slider__info-button" href="#">Узнать больше</a>
                            </div>
                            <img class="slider__third-image" src="<?php echo bloginfo('template_url'); ?>/assets/img/slider-image3.png" width="759" height="411" alt="Цифровые планшеты">
                        </li>
                    </ul>
                    <ul class="list controls">
                        <li>
                            <button class="controls__item controls__item--current js-controls__first" type="button" aria-label="Первый слайд"></button>
                        </li>
                        <li>
                            <button class="controls__item js-controls__second" type="button" aria-label="Второй слайд"></button>
                        </li>
                        <li>
                            <button class="controls__item js-controls__third" type="button" aria-label="Третий слайд"></button>
                        </li>
                    </ul>
                </section>
            </div>
        </header>
        <main class="index-page container">
            <section class="services">
                <h2 class="visually-hidden">Наши услуги</h2>
                <ul class="list services__list">
                    <li class="services__item">
                        <img class="services__image" src="<?php echo bloginfo('template_url'); ?>/assets/img/advantages-image-web.png" width="300" height="146" alt="Компьютер">
                        <h3 class="title services__item-title">Веб-сайты</h3>
                        <p class="paragraph services__item-description">
                            Мир никогда не будет прежиним<br>
                            после того как увидит ваш сайт!
                        </p>
                        <a class="button services__item-button" href="#">Заказать</a>
                    </li>
                    <li class="services__item">
                        <img class="services__image" src="<?php echo bloginfo('template_url'); ?>/assets/img/advantages-image-app.png" width="300" height="146" alt="Мобильные телефоны">
                        <h3 class="title services__item-title">Приложения</h3>
                        <p class="paragraph services__item-description">
                            Покорите топ-10 приложений в<br>
                            AppStore и Google Play
                        </p>
                        <a class="button services__item-button services__item-button--green" href="#">Заказать</a>
                    </li>
                    <li class="services__item">
                        <img class="services__image" src="<?php echo bloginfo('template_url'); ?>/assets/img/advantages-image-presentation.png" width="300" height="146" alt="Доска с графиками">
                        <h3 class="title services__item-title">Презентации</h3>
                        <p class="paragraph services__item-description">
                            Вы даже не подозреваете,<br>
                            насколько вы изумительны!
                        </p>
                        <a class="button services__item-button services__item-button--yellow" href="#">Заказать</a>
                    </li>
                </ul>
            </section>
            <section class="studio">
                <h2 class="visually-hidden">Информация о нас</h2>
                <div class="studio__info-wrapper">
                    <p class="paragraph studio__info-slogan">
                        Мы — маленькая, но гордая<br>
                        дизайн-студия из Краснодара.
                    </p>
                    <p class="paragraph studio__info-description">
                        Исповедуем принципы минимализма и чистоты. Ставим математический расчет превыше креатива. Работаем не покладая рук, как роботы.
                    </p>
                    <p class="paragraph studio__info-title">Выполняем заказы на разработку:</p>
                    <ul class="list">
                        <li class="studio__info-item">
                            Веб-сайтов любой сложности
                        </li>
                        <li class="studio__info-item">
                            Мобильных приложений для iOS и Android
                        </li>
                        <li class="studio__info-item">
                            Слайдшоу и видео для корпоративных презентаций
                        </li>
                    </ul>
                </div>
                <div class="studio__digits-wrapper">
                    <img class="studio__digits-image" src="<?php echo bloginfo('template_url'); ?>/assets/img/digits-logo.jpg" width="360" height="208" alt="Яркий логотип студии Nёrd's">
                    <table class="studio__digits-table statistic">
                        <caption class="statistic__caption">
                            С 2004 года любим точность во всем:
                        </caption>
                        <tr>
                            <th class="statistic__header">146<sup class="statistic__superscript">%</sup></th>
                            <th class="statistic__header">100<sup class="statistic__superscript">%</sup></th>
                            <th class="statistic__header">50<sup class="statistic__superscript">%</sup></th>
                        </tr>
                        <tr>
                            <td class="statistic__data">Уровень<br>самоотдачи</td>
                            <td class="statistic__data">Соблюдение<br>сроков</td>
                            <td class="statistic__data">Минимальная<br>предоплата</td>
                        </tr>
                    </table>
                </div>
            </section>
            <section class="partners">
                <h2 class="visually-hidden">Наши партнёры</h2>
                <ul class="list partners__list">
                    <li class="partners__item">
                        <a href="#">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/partners-logo-htmlacademy.png" width="260" height="180" alt="HTML Academy">
                        </a>
                    </li>
                    <li class="partners__item">
                        <a href="#">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/partners-logo-borodinski.png" width="260" height="180" alt="Barbershop Borodinski">
                        </a>
                    </li>
                    <li class="partners__item">
                        <a href="#">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/partners-logo-pink.png" width="260" height="180" alt="Web Studio Pink">
                        </a>
                    </li>
                    <li class="partners__item">
                        <a href="">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/partners-logo-mishka.png" width="260" height="180" alt="Web Studio Mishka">
                        </a>
                    </li>
                </ul>
            </section>
        </main>
        <footer class="page-footer container">
            <section class="contacts">
                <h2 class="visually-hidden">Наши контакты</h2>
                <img class="contacts__map" src="<?php echo bloginfo('template_url'); ?>/assets/img/contacts-map-with-marker.jpg" width="1440" height="416" alt="Санкт-Петербург, ул. Б. Конюшенная, д. 19/8">
                <div class="contacts__info-wrapper">
                    <p class="paragraph contacts__info-title">
                        Nёrds design studio
                    </p>
                    <p class="paragraph contacts__info-address">
                        191186, Санкт-Петербург,<br>
                        ул. Б. Конюшенная, д. 19/8<br>
                        <br>
                        тел. +7 (812) 275-75-75
                        </p>
                    <a class="button contacts__info-button js-contacts__info-button" href="#">Напишите нам</a>
                </div>
            </section>
            <section class="social">
               <h2 class="visually-hidden">Мы в соцсетях</h2>
                <ul class="list links">
                    <li>
                        <a class="links__item" href="#">
                            <img class="links__image" src="<?php echo bloginfo('template_url'); ?>/assets/img/social-vk.svg" width="26" height="15" alt="Вконтакте">
                        </a>
                    </li>
                    <li>
                        <a class="links__item" href="#">
                            <img class="links__image" src="<?php echo bloginfo('template_url'); ?>/assets/img/social-fb.svg" width="12" height="22" alt="Фейсбук">
                        </a>
                    </li>
                    <li>
                        <a class="links__item" href="#">
                            <img class="links__image" src="<?php echo bloginfo('template_url'); ?>/assets/img/social-instagram.svg" width="21" height="21" alt="Инстаграм">
                        </a>
                    </li>
                </ul>
                <div class="social__friends-wrapper">
                    <p class="paragraph social__friends-slogan">
                        Давайте дружить, это выгодно!
                    </p>
                    <p class="paragraph social__friends-discount">
                        Скидка 10% для друзей из социальных сетей.
                    </p>
                </div>
            </section>
            <div class="container">
              <section class="modal modal-feedback js-modal-feedback">
                  <h2 class="visually-hidden">Обратная связь</h2>
                  <p class="paragraph modal-feedback__title">Напишите нам</p>
                  <form  class="js-modal-feedback__form" action="#" method="post">
                      <div class="modal-feedback__wrapper user">
                          <label class="modal-feedback__field-title">Ваше имя:<br>
                              <input class="modal-feedback__field modal-feedback__field--user js-modal-feedback__name-field" type="text" name="name" placeholder="Представьтесь, пожалуйста">
                          </label>
                          <label class="modal-feedback__field-title">Ваш e-mail:<br>
                              <input class="modal-feedback__field modal-feedback__field--user js-modal-feedback__email-field" type="email" name="email" placeholder="Для отправки ответа">
                          </label>
                      </div>
                      <label class="modal-feedback__field-title" for="letter-field">Текст письма:<br>
                          <textarea class="modal-feedback__field modal-feedback__field--text js-modal-feedback__text-field" name="letter-text" placeholder="В свободной форме" id="letter-field"></textarea>
                      </label>
                      <button class="button modal-feedback__button" type="submit">Отправить</button>
                  </form>
                  <button class="modal-close" type="button">
                      <img src="<?php echo bloginfo('template_url'); ?>/assets/img/modal-close-cross.svg" width="21" height="21" alt="Закрыть окно">
                  </button>
              </section>
          </div>
          
          <?php wp_footer(); ?>
            
        </footer>
	</body>
</html>