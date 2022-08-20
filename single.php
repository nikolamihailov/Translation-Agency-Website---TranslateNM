<?php
  get_header();
?>
<div>
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
	?>
<h2 style="text-align: center; margin: 100px;"><?php the_title(); ?></h2>
<div style="margin: auto;width:80%;">
 <?php 
                     if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                       the_post_thumbnail();
                     } 
                      ?>
 </div>
 <hr>
<div id="content" style="margin: 30px; padding: 5px; text-align: center;color: black; font-size:1.1em;">
	<p style="
	 width: 50%; "><?php the_content(); ?></p>
</div>

</div>





	<?php
	} 
} 
?>

<?php
  get_footer();
?>