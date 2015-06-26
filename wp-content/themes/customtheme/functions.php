<?php

$args = array(
	'name'          => sprintf( __( 'my-first-sidebar' ), $i ),
	'id'            => 123,
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => "</li>\n",
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>\n",
);

register_sidebar( $args );

?>