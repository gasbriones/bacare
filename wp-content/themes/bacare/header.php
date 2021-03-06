<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Bacare
 * @since Bacare 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <meta name="description" content="<?php bloginfo('description'); ?>"/>

    <!-- Facebook -->
    <meta name="og:type" content="website"/>
    <meta name="og:title" content="<?php bloginfo('name'); ?>"/>
    <meta name="og:description" content="<?php bloginfo('description'); ?>"/>
    <meta name="og:url" content="<?php echo get_site_url() ?>"/>
    <meta name="og:site_name" content="<?php bloginfo('name'); ?>"/>
    <meta name="og:region" content="Buenos Aires"/>
    <meta name="og:country-name" content="Argentina"/>

    <!-- twitter -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:url" content="<?php echo get_site_url() ?>"/>
    <meta name="twitter:title" content="<?php bloginfo('name'); ?> "/>
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>"/>
    <meta name="twitter:site" content="@bacare"/>
    <meta name="twitter:creator" content="@gasbriones"/>
    <!-- Links -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/hover-min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/mediaqueries.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <title><?php bloginfo('name'); ?> </title>
    <?php wp_head(); ?>
</head>

