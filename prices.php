<?php
	get_header();

       /**
* Template Name: prices
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>


<div id="hero" class="hero overlay subpage-hero prices-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Цени</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Начало</a></li>
                  <li class="breadcrumb-item active">Цени</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <section class="c-page__hero c-page__hero--bg curve-pattern">
<div class="m-hero__container space">
<div class="wrapper">
<article class="m-hero__content" style="text-align: center;">

<div class="content">
<h1 class="alpha">Цени за превод</h1>
<h2 class="beta" style="font-size: 1.3em;">Открийте нашите цени за превод и редакция и сравнете различните преводачески тарифи</h2>

</div>
</article>
</div>
</div>
<img srcset="https://www.bigtranslation.com/wp-content/themes/big-translation/assets/images/rates/bg-hero-rates.jpg 1x, https://www.bigtranslation.com/wp-content/themes/big-translation/assets/images/rates/bg-hero-rates@2x.jpg 2x" src="https://www.bigtranslation.com/wp-content/themes/big-translation/assets/images/rates/bg-hero-rates.jpg" alt="За нас" class="m-hero__bg-img"
style="">
</section>
<section class="c-rates space">
<div class="wrapper grid grid--3">
<article class="m-rate m-rate--business">
<header>
<h3 class="beta">Бизнес</h3>
</header>
<div class="content">
<p class="price"><?php the_field('price_b') ?><span>/ дума</span></p>
<ul>

<li><img src="<?php bloginfo('template_directory'); ?>/assets/img/correct.svg" width="15" height="15"> Роден преводач
</li>
<li><img src="<?php bloginfo('template_directory'); ?>/assets/img/correct.svg" width="15" height="15"> Опитен преводач
</li>
<li><img src="<?php bloginfo('template_directory'); ?>/assets/img/correct.svg" width="15" height="15"> Контрол на качеството
</li>
<li><img src="<?php bloginfo('template_directory'); ?>/assets/img/correct.svg" width="15" height="15"> Oпециализиран превод
</li>
</ul>
</div>
<a href="http://localhost/translationSite/contacts/" class="c-button c-button--large c-button--primary"><span>свържете се с нас и направете поръчка</span></a>
</article>
<article class="m-rate m-rate--professional" data-stamp="Most Popular">
<header>
<h3 class="beta">Професионален</h3>
</header>
<div class="content">
<p class="price"><?php the_field('price_p') ?><span>/ дума</span></p>
<ul>
<li><img src="<?php bloginfo('template_directory'); ?>/assets/img/correct.svg" width="15" height="15"> Роден преводач
</li>
<li><img src="<?php bloginfo('template_directory'); ?>/assets/img/correct.svg" width="15" height="15"> Опитен преводач
</li>
<li><img src="<?php bloginfo('template_directory'); ?>/assets/img/correct.svg" width="15" height="15"> Контрол на качеството
</li>
</ul>
</div>
<a href="http://localhost/translationSite/contacts/" class="c-button c-button--large c-button--dark-accent"><span>свържете се с нас и направете поръчка</span></a>
</article>
<article class="m-rate m-rate--basic">
<header>
<h3 class="beta">Стандартен</h3>
</header>
<div class="content">
<p class="price"><?php the_field('price_s') ?><span>/ дума</span></p>
<ul>
<li><img src="<?php bloginfo('template_directory'); ?>/assets/img/correct.svg" width="15" height="15">Роден преводач
</li>
</ul>
</div>
<a href="http://localhost/translationSite/contacts/" class="c-button c-button--large c-button--primary"><span>свържете се с нас и направете поръчка</span></a>
</article>
</div>
</section>
<section class="c-rates--additional-options component space">
<header>
<h2 class="beta">Цени за допълнителни екстри
</h2>
</header>
<div class="wrapper grid grid--3">
<article class="m-rate m-rate--quality">
<img src="https://www.bigtranslation.com/wp-content/themes/big-translation/assets/images/rates/ico-d-ratings.svg" class="ico" alt="Контрол на качеството
" width="70" height="70">
<h3 class="gamma">Контрол на качеството
</h3>
<p class="specialty" style="font-size: 1.2em; color: orange;font-weight: bold;">Коригиране</p>
<p class="price"><?php the_field('price_c') ?><span>/ дума</span></p>
</article>
<article class="m-rate m-rate--speed">
<img src="https://www.bigtranslation.com/wp-content/themes/big-translation/assets/images/rates/ico-d-speed.svg" class="ico" alt="Бърз превод
" width="70" height="70">
<h3 class="gamma">Бърз превод
</h3>
<p class="specialty" style="font-size: 1.2em; color: orange;font-weight: bold;">Спешна Поръчка
</p>
<p class="price"><?php the_field('price_f') ?><span>/ дума</span></p>
</article>
<article class="m-rate m-rate--seo">
<img src="https://www.bigtranslation.com/wp-content/themes/big-translation/assets/images/rates/ico-d-seo.svg" class="ico" alt="Search engine optimization" width="70" height="70">
<h3 class="gamma">Search engine optimization</h3>
<p class="specialty" style="font-size: 1.2em; color: orange;font-weight: bold;">SEO Позициониране
</p>
<p class="price"><?php the_field('price_seo') ?><span>/ дума</span></p>
</article>
</div>
</section>
<section class="c-cta c-cta--white curve-pattern space">
<div class="wrapper" style="text-align: center;">
<h2 class="beta">Ниска тарифа
</h2>
<p>Благодарение на нашата най-съвременна технология <strong>можем да предложим на нашите клиенти силно конкуренти цени</strong>. TranslateNM е онлайн професионална <a href="https://www.bigtranslation.com/bg">преводаческа агенция</a>, чиято изцяло автоматизирана платформа позволява драстично намаление на административните разходи. </p>
<p>Единствената част от процеса, която не е автоматизирана, разбира се е самият превод! <strong>Всички преводи се извършват лично от обучени професионалисти</strong> с набито око за детайлите и работещи на родния си език.</p>
</div>
</section>
<section class="site-section section-newsletter text-center">
            <div class="container">
                <h2>Абонирайте се за нашия newsletters</h2>
                <form class="form-group newsletter-group">
                    <input type="email" class="form-control" placeholder="Your e-mail" required>
                    <button class="btn btn-green" type="button">Subscribe</button>
                </form><!-- /.newsletter-group -->
            </div>
        </section><!-- /.section-newsletter -->
<

    <?php
	get_footer();
?>