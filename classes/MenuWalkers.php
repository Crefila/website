<?php

class Walker_Social_Menu extends Walker_Nav_menu
{
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $output = '<ul class="social-icons flex">';
    }

    public function start_el(&$output, $item, $depth = 0, $args = array(), $current_object_id = 0)
    {
        $output .= '<li class="" ><a target="_blank"  class="' . $item->title . '" href="' . $item->url . '" ><i class="' . $item->title . '"></i></a>';
    }
}

class Walker_Main_Menu extends Walker_Nav_menu
{
    public function start_lvl(&$output, $depth = 0, $args = null) 
    {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );
		$classes = array( 'sub-menu rounded-sm flex w-70% h-full items-center px-6' );

		/**
		 * Filters the CSS class(es) applied to a menu list element.
		 *
		 * @since 4.8.0
		 *
		 * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
		 * @param stdClass $args    An object of `wp_nav_menu()` arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = implode( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
		$output .= "{$n}{$indent} <div class=\"sub-menu-container w-full \"> <div class=\"spacers w-30% \"></div><ul$class_names>{$n}";
    }

	function end_lvl(&$output, $depth = 0, $args = null){ 
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent  = str_repeat( $t, $depth );
		$output .= "$indent</ul>{$n}</div>";
	}
    
}
