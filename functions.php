<?php
function fluffy_child_enqueue_scripts(){
	wp_enqueue_style( 'parent-css', get_template_directory_uri() .'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'fluffy_child_enqueue_scripts' );

function fluffy_child_widgets_init() {
	register_sidebar( 
		array(
			'name'=>__( 'Sidebar', 'codediva' )
			,'id'=>'the_sidebar',
			'before_widget'=>'<aside id="%1$s" class="widget %2$s">',
			'after_widget'=>'</aside>',
			'before_title'=>'<h1 class="widget-title">',
			'after_title'=>'</h1>',) );
}
add_action( 'widgets_init', 'fluffy_child_widgets_init' );
register_nav_menus( array('secondary' =>__('footer Menu'),));
add_filter('avatar_defaults', 'fluffy_custom_gravatar');
function fluffy_custom_gravatar ($avatar_defaults) {
    $myavatar = 'http://ekladata.com/0IjfCD9PLW4JlqXnZHcJXt9u4eQ.png';
    $avatar_defaults[$myavatar] = __( 'Custom Gravatar', 'hello' );
    return $avatar_defaults;
}

function my_multi_col($content) {

	$columns = explode('<h2>', $content);
	$i = 0;

	foreach ($columns as $column) {
		if (($i % 2) == 0) {
			$return .= '<div class="content_left">'."\n";
			if ($i > 1) {
				$return .= "<h1>";
			} else {
				$return .= '<div class="content_right">'."\n <h2>";
			}
			$return .= $column;
			$return .= '</p></div>';
			$i++;
		}
		if(isset($columns[1])) {
	    		$content = wpautop($return);
		} else {
	    		$content = wpautop($content);
		}
		echo $content;
	}
}
add_filter('the_content', 'my_multi_col');
//function to write my signature on a page
//function created with the help of Word Press support forums 



//function call in footer

