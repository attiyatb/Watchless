<?php 
/*
Template Name: Hometest
*/ 
?>


<?php 
get_header(); ?>

<div id="content">
<div id="main">
	<?php 
		//query_posts allows to search through each post matching the specific category
		//EXTRA FUNCTIONALITY: CATEGORY IS NOT SPECIFIC, CATEGORY DEPENDS ON TITLE
		query_posts('category_name='.get_the_title()); 
		//counter for the number of posts per page
		$post_counter=0;
	?>
	<?php if(have_posts()) :
		$counter = 0; $num_cols = 4; // set number of columns
		while(have_posts()) : the_post(); ?>
			<div class="post<?php if($counter%$num_cols == 0) echo 'clear'; ?>">
<!-- all the html and other stuff to show post -->
			</div>
		<?php &counter++;
		endwhile;
	else : /*no post*/ endif; ?>
</div>
</div>

<?php get_footer(); ?>