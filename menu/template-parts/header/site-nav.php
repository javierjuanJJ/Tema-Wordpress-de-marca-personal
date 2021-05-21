<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php

wp_nav_menu(
	array(
		'menu'            => 'menu1',
		'depth'           => 5,
		'menu_class'      => 'main-nav',
		'container_class' => 'menu',
		'items_wrap'      => '<ul id="primary-menu-list" class="main-nav">%3$s</ul>',
		'fallback_cb'     => false,

	)
);
?>
