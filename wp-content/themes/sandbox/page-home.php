<?php 
/**
 * Template Name: Home page
 */
?>
<?php get_header() ?>

<?php
	$currentID = get_the_ID();
	
	$imgWidth = 800;
	$imgHeight = 560;
?>
<div id="content" class="home">
	
	<?php /*
	<section class="bio">
		<p>Hi!</p>
		<p>I’m a lead developer at XHTMLized.</p>
		<p>Photography is my hobby. Learn more about me or check my social media profiles.</p>
		<p><a href="#">LinkedIn</a></p>
		<p><a href="#">SlideShare</a></p>
		<p><a href="#">Facebook</a></p>
	</section>
	*/ ?>
	<img src="/img/Wojtek5.jpg" alt="Wojtek Zając" class="photo">
	<section class="bio">
		<p>Hi there! I’m glad you visited<br> my website.
		
		<p>I’m a founder/president at polish office<br> of <a href="http://XHTMLized.com">XHTMLized</a>.

		<!--<p>I’m a <a href="http://slideshare.com/wojciechzajac">public speaker</a> with topics ranging web standards, UX, and typography.-->
			
		<p>I study <a href="http://en.wikipedia.org/wiki/Human-computer_interaction">HCI</a> at <a href="http://en.wikipedia.org/wiki/Jagiellonian_University">UJ</a>, listen to <a href="http://last.fm/user/buterux">music</a>, and take photos a lot.
			
		<p>Now check out my <a href="/new-york/">photos section</a>.
			
		<!--<p>I built the first public version of <a href="http://twitter.com">Twitter</a>, and worked on its front-end between 2006—2009.-->
			
		<p class="social"><img src="/img/twitter.png" alt=""><img src="/img/facebook.png" alt=""><img src="/img/lastfm.png" alt=""><img src="/img/flickr.png" alt=""><img src="/img/linkedin.png" alt="">
	</section>


<?php		
	$images =& get_children( 'post_type=attachment&post_mime_type=image&post_parent='.$currentID.'&orderby=menu_order&order=ASC' );
	if (!empty($images)) :
?>

<section class="photos">
<?php
	$i = 0;
	foreach( (array) $images as $attachment_id => $attachment ) : 
	$i++;
	$image_attributes = wp_get_attachment_image_src( $attachment_id, array($imgWidth,$imgHeight) );
?>
<figure>
	<img src="<?php echo $image_attributes[0]?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php the_title(); echo ' photo '.$i ?>" />
<?php
	if(!empty($attachment->post_excerpt)) {
		echo "	<figcaption>".$attachment->post_excerpt."</figcaption>\n";
	}
?>
</figure>
<?php
	endforeach;
	endif;
?>
			<!--<img class="alignnone" title="NYC street" src="http://farm5.static.flickr.com/4132/4840737806_c9c0cff7f2_o.jpg" alt="" width="800" height="600" />-->
			

</div><!-- #content -->

<?php get_footer() ?>