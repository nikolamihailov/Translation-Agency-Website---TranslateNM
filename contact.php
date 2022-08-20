<?php
  get_header();

   /**
* Template Name: contact
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
<div id="hero" class="hero overlay subpage-hero contact-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Контакти</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Начало</a></li>
                  <li class="breadcrumb-item active">Контакти</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->
    <main id="main" class="site-main">

<section class="site-section subpage-site-section section-contact-us">

    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <h2>Изпратете съобщение:</h2>
                <!--
                <form>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label for="name">Име:</label>
                              <input type="text" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label for="email">Имейл:</label>
                              <input type="email" class="form-control" id="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="message">Тема:</label>
                      <input class="form-control" id="subject"></input>
                    </div>
                    <div class="form-group">
                      <label for="message">Съобщение:</label>
                      <textarea class="form-control form-control-comment" id="message"></textarea>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-green">Свържете се с нас</button>
                    </div>

                </form>
-->

                <?php echo do_shortcode('[contact-form-7 id="94" title="Форма за контакти 1"]') ?>

            </div>
            <div class="col-sm-5">
                <div class="contact-info">
                    <h2>Информация за контакта:</h2>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Адрес</h3>
                            <ul class="list-unstyled">
                                <li>Пловдив, България</li>
                                <li>Център Пловидв, ул."Райко Даскалов" 72</li>
                            </ul>
                            <h3>Имейл</h3>
                            <a href="ivanP@gmail.com" target="_blank">ivanP@gmail.com</a>
                            <h3>Телефон</h3>
                            <a href="tel:2083339296" target="_blank">(208) 333 9296</a>
                            <h3>Факс</h3>
                            <p>(208) 333 9296</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>


<section id="map" class="section-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2957.8962571662655!2d24.743705615449763!3d42.15250677920141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14acd19624bc1291%3A0xc226628f55fbbe40!2z0J_RgNC10LLQvtC00Lgg0J_Qu9C-0LLQtNC40LI!5e0!3m2!1sbg!2sbg!4v1645972596987!5m2!1sbg!2sbg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section><!-- /.section-map -->

</main><!-- /#main -->
<?php
	get_footer();
?>