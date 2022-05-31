<footer class="footer" id="footer">
            <div class="footer-container container">
                <div class="footer__title">
                    <h2>Оставить<br>
                        заявку</h2>
                </div>
                <form class="footer__application-form">
                    <div class="input-container">
                        <span>Имя</span>
                        <input maxlength="25" name="name"  autocomplete="new-text" type="text" required >
                    </div>
                    <div class="input-container">
                        <span>Телефон</span>
                        <input type="tel" autocomplete="new-text"  maxlength="15" name="phone" required >
                    </div>
                    <div class="input-container">
                        <span>Email</span>
                        <input type="email"  maxlength="25" name="mail" >
                    </div>
                    <div class="input-container">
                        <span>Комментарий</span>
                        <input type="text"  maxlength="50" name="coment">
                    </div>
                    <div class="footer__button-orange">
                        <div class="footer__button-green">
                            <div class="footer__button-blur">
                              <input class="form__input btn" type="submit" value="Go">
                            </div>
                        </div>
                </div>
                </form>
                <div class="footer__info">
                    <div class="footer__right-block">
                        <span>«WEBMEDIA» <br>
                            2315999100</span>
                        <span>Батуми, <br>
                            Горгиладзе, 98</span>
                        <span>support@webmedia.ge <br>
                            <a href="tel:+995 599 65 23 59">+995 599 65 23 59</a></span>
                    </div>
                    <div class="footer__left-block">
                        <h3>Copyright © 2017-2022 <br>
                            Все права защищены
                        </h3>
                        <a href="#wrapper"><img src="<?php bloginfo('template_url'); ?>/assets/img/footer/footer__info-logo.svg" alt="logo Digital Agency"></a>
                    </div>
                </div>
        </footer>
    </main>




  <?php wp_footer(); ?>
</body>
</html>