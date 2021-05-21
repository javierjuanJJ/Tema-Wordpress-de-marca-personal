<?php
$menu_name = 'menu2';
$locations = get_nav_menu_locations();
$menu      = wp_get_nav_menu_object( $locations[ $menu_name ] );
$menuitems = wp_get_nav_menu_items( $menu_name ); ?>

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
