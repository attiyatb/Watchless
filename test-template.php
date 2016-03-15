<?php 
/*
Template Name: CategoryPages
*/ 
?>


<?php 
//BADR AL-ATTIYAT 1000143757 badr.al.attiyat@mail.utoronto.ca LAB 2
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
	<?php 
		//Add the counter as a condition in the while loop to stop retreiving posts after a certain number
		if ( have_posts() ) : while ( have_posts() and $post_counter<=2 ): 
			the_post();
			$post_counter=$post_counter+1; 
	?>
	<h1>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h1>
	<?php
		//Display featured image of the post 
		  
	?>
	<p> 
		<?php 
			//display the content of the post
			the_content(); 
		?>
	</p>

	<?php endwhile; else: endif; ?> 
	<br>
	<br>
	<?php
		//function to get a link for the previous post (RETREIVED FROM WORDPRESS SUPPORT). 
		previous_post_link('%link', 'Previous Post', TRUE); 
	?>
</div>
</div>

<?php get_footer(); ?>