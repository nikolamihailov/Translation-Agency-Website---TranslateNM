<?php
  get_header();

   /**
* Template Name: blog
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
 <div id="hero" class="hero overlay subpage-hero blog-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Блог</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Начало</a></li>
                  <li class="breadcrumb-item active">Блог</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

<main id="main" class="site-main">

        <section class="site-section subpage-site-section section-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8" >
                    <?php query_posts('showposts=8'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <article class="blog-post">
                            
                            <div style="width: 100%; height: 100%;">
                            <?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail();
         						 } 
      							  ?>
                          </div>
                            <div class="post-content">
                                <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 100, '...');?></p>
                                
                                <div class="text-right">
                                    <a class="read-more" href="<?php the_permalink(); ?>">Read more</a>
                                </div>
                                <div class="post-meta">
                                    <span class="post-author">
                                        <a href="#"><img class="img-res" src="<?php bloginfo('template_directory'); ?>/assets/img/author.jpg" alt=""><?php the_author(); ?></a>
                                    </span>
                                    <span class="post-date">
                                        <a href=""><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date('m dS, Y'); ?></a>
                                        </span>
                                    
                                </div><!-- /.post-meta -->
                            </div><!-- /.post-content -->


                        </article><!-- /.blog-post -->

                        <?php 
						endwhile;
						endif;
					?>
                        
                    
                </div>
            </div>
        </section><!-- /.section-portfolio -->
        <section class="site-section section-newsletter text-center">
            <div class="container">
                <h2>Абонирайте се за нашия newsletters</h2>
                <form class="form-group newsletter-group">
                    <input type="email" class="form-control" placeholder="Your e-mail" required>
                    <button class="btn btn-green" type="button">Subscribe</button>
                </form><!-- /.newsletter-group -->
            </div>
        </section><!-- /.section-newsletter -->

    </main><!-- /#main -->
<?php
  get_footer();
?>