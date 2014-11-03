<?php
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'roots'),
  ));
?>

<?php add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
       $slug = sanitize_title($item->title);
       $classes = preg_replace('/(current(-menu-|[-_]page[-_])(item|parent|ancestor))/', 'active', $classes);
       $classes = preg_replace('/^((menu|page)[-_\w+]+)+/', '', $classes);

        $classes[] = 'menu-' . $slug;

        $classes = array_unique($classes);

        return $classes;
}

?>
