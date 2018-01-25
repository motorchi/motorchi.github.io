<?php
 get_header();
if (have_posts()):
	while(have_posts()): the_post(); ?>
	
	
</article>
<h2><?php the_title(); ?></h2>

<p class="post-info"><?php the_time('F jS, Y g:i a');?>| <?php the_author(); ?></p>

<?php
$catergories = get_the_category (); 
$separator =", ";
$output = '';
if($catergories){
	foreach($catergories as $catergory){
		$output .= $catergory->cat_name .$separator;
	}
	echo trim($output, $separator);
}
?>
<?php the_post_thumbnail(); ?>
<?php
endwhile;
else: 
	echo '<p> The context found </p>';
endif;
get_footer();
?>