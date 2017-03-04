<?php
/**
 * Customises the stock Storefront homepage template to include the sidebar and the boutique_before_homepage_content hook.
 *
 * Template name: Dump
 *
 * @package birch
 */

get_header(); ?>
<h1>Show Dump</h1>

<?php
var_dump($wp_styles);
echo gettype($wp_styles);

foreach ($wp_styles as $key => $value) {
    echo "$key => $value\n";
}
?>

<?php get_footer(); ?>
