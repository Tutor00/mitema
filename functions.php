<?php 
	if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'name' => 'Sidebar Widgets',
			'id' => 'sidebar-widgets',
			'description' => 'Widgets para el Sidebar',
			'before_widget' => '<aside id="%l$s" class="widget %2$s"',
			'after_widget' => '</aside>',
			'before_title' => '<h2>',
			'after_title' => '</h2>'
                    
		));
	}
?>