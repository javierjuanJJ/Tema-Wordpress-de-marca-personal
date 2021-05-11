<?php
$menu_name = 'menuPrincipal';
$locations = get_nav_menu_locations();
$menu      = wp_get_nav_menu_object( $locations[ $menu_name ] );
$menuitems = wp_get_nav_menu_items( $menu_name ); ?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="/wp-content/themes/version1/style2.css">
<?php wp_head(); ?>
<body class="fondo">


<div>

    <div class="icon-bar">
        <a id="facebook" href="#">
            <i class="fa fa-facebook"></i>
        </a>
        <a id="twitter" href="#">
            <i class="fa fa-twitter"></i>
        </a>
        <a id="instagram" href="#">
            <i class="fa fa-instagram"></i>
        </a>
        <a id="pinterest" href="#">
            <i class="fa fa-pinterest"></i>
        </a>
        <a id="linkedin" href="#">
            <i class="fa fa-linkedin"></i>
        </a>

        <a id="youtube" href="#">
            <i class="fa fa-youtube"></i>
        </a>
        <a id="github" href="#">
            <i class="fa fa-github"></i>
        </a>
        <a id="gitlab" href="#">
            <i class="fa fa-gitlab"></i>
        </a>
        <a id="dockerHub" href="#">
            <i class="fa fa-lightbulb"></i>
        </a>
    </div>

</div>

<div>

    <div class="icon-bar2">
        <a id="facebook" href="#">
            <i class="fa fa-facebook"></i>
        </a>
        <a id="twitter" href="#">
            <i class="fa fa-twitter"></i>
        </a>
        <a id="instagram" href="#">
            <i class="fa fa-instagram"></i>
        </a>
        <a id="pinterest" href="#">
            <i class="fa fa-pinterest"></i>
        </a>
        <a id="linkedin" href="#">
            <i class="fa fa-linkedin"></i>
        </a>
        <a id="youtube" href="#">
            <i class="fa fa-youtube"></i>
        </a>
        <a id="github" href="#">
            <i class="fa fa-github"></i>
        </a>
        <a id="gitlab" href="#">
            <i class="fa fa-gitlab"></i>
        </a>
    </div>

</div>

<div class="menu">
    <ul>
        <!--starting ul tag to create unordered lists.-->
        <div class='menu'>
            <ul class="main-nav">
                <li class="dropdown">
                    <!--The HTML li element is used to represent an item in a list. ... In menus and unordered lists-->
                    <!--the a tag defines a hyperlink, which is used to link from one page to another-->
                    <a href="#">
                        <div class='icon'>
							<?php the_custom_logo(); ?>
                            <!--					<img alt="Imágen de marca personal" class="logoIndex" src="m.png" width="50" height="50">-->
                            <!-- this is home icon link get form fornt-awesome icon for home button -->
                        </div>

                        <!-- we are create first menu item name home -->
                    </a>
                </li>
				<?php
				$count     = 0;
				$submenu   = false;

				foreach ( $menuitems as $item ):

					$link = $item->url;
					$title = $item->title;
					// item does not have a parent so menu_item_parent equals 0 (false)
					if ( ! $item->menu_item_parent ):

						// save this id for later comparison with sub-menu items
						$parent_id = $item->ID;
						?>

                        <li class="dropdown">
                        <a href="<?php echo $link; ?>">
                            <!-- this anchor text for link your About page to another page -->
                            <div class="name"><span data-text=<?php echo $title; ?>><?php echo $title; ?></span>
                            </div>

                            <!-- we are create second menu item name About -->
                        </a>


					<?php endif; ?>

					<?php if ( $parent_id == $item->menu_item_parent ): ?>

					<?php if ( ! $submenu ): $submenu = true; ?>
                        <ul class="dropdown-content">
					<?php endif; ?>

                    <li>
                        <a href="<?php echo $link; ?>">
							<?php echo $title; ?>
                        </a>
                    </li>

					<?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                        </ul>
						<?php $submenu = false; endif; ?>

				<?php endif; ?>

					<?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
                    </li>
					<?php $submenu = false; endif; ?>

					<?php $count ++; endforeach; ?>

            </ul>
        </div>

    </ul>
</div>

