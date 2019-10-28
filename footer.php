<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mislavskiy
 */

?>

	</div><!-- #content -->
<footer>
	<div class="bg bg_footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-left">
                            <div class="footer-logo">
                                <h3>Мастерская<br> психопластики
                                    <br>
                                    <b>Владимира&nbsp;Миславского</b>
                                </h3>
                            </div>
                            <p>По любым интересующим вас вопросам <br> вы можете связаться со мной:</p>

                            <p>
                                <span class="contacts-format">По телефону:</span> <b><a href = "tel: +380 97 946 91 77">+380 97 946 91 77</a></b>,<br>
                                <span class="contacts-format">По почте:</span> <b><a href = "mailto: vmislavskij@gmail.com">vmislavskij@gmail.com</a></b><br>
                                <!-- <span class="contacts-format">телеграм</span> <b><a href="#">https://t.me/mychannel</a></b> -->
                            </p>
                            <div class="socialIcons">
                                <a class="social" target="_blank" href="https://www.facebook.com/Мастерская-психопластики-Владимира-Миславского-1086575
73887184"><i class="fab fa-facebook-f"></i></a>
                                <a class="social" target="_blank" href="https://www.instagram.com/vladimirmislavskii/?igshid=1ferbynvch2rk
"><i class="fab fa-instagram"></i></a>
                                <a class="social" href="viber://chat?number=+380979469177"><i class="fab fa-viber"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="footer-right">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- #colophon -->
</div><!-- #page -->
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        window.sr = ScrollReveal();
        sr.reveal('.navbar', {
            duration: 2000,
            origin: 'bottom'
        });
        sr.reveal('.showcase-left', {
            duration: 2000,
            origin: 'top',
            distance: '300px'
        });
        sr.reveal('.showcase-right', {
            duration: 2000,
            origin: 'right',
            distance: '300px'
        });
        sr.reveal('.showcase-btn', {
            duration: 2000,
            delay: 2000,
            origin: 'bottom'
        });
        sr.reveal('.about-left', {
            duration: 2000,
            origin: 'left',
            distance: '300px'
        });
        sr.reveal('.about-right', {
            duration: 2000,
            origin: 'right',
            distance: '300px'
        });
        sr.reveal('.arrow-txt', {
            duration: 2000,
            delay: 1400,
            origin: 'bottom'
        });
        sr.reveal('.arrow-black-txt', {
            duration: 2000,
            delay: 1400,
            origin: 'bottom'
        });
        sr.reveal('.testimonial-right', {
            duration: 2000,
            origin: 'right',
            distance: '300px'
        });
        sr.reveal('.book-left', {
            duration: 2000,
            origin: 'left',
            distance: '300px',
            viewFactor: 0.2
        });
        sr.reveal('.book-right', {
            duration: 2000,
            origin: 'right',
            distance: '300px',
            viewFactor: 0.2
        });
        sr.reveal('.book-bottom', {
            duration: 2000,
            origin: 'bottom',
            distance: '300px'
        });
        sr.reveal('.footer-left', {
            duration: 2000,
            origin: 'left',
            distance: '300px'
        });
    </script>

    <script>
        $(function() {
            // Smooth Scrolling
            $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>

    <script src="/wp-content/themes/mislavskiy/js/customizer.js"></script>

    

</body>

<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<script>TEXT="any text or url";</script>

</html>
