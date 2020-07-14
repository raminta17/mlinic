<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sports and physiotherapy clinic">
        <meta name="keywords" content="physio, Meadowbank Clinic, Sports Clinic, physiotherapy, physiotherapy clinic, lymphatic drainage, remedial massage, sports massage">
        <meta name="author" content="Raminta Alisauskaite">
        <title><?php wp_title(''); echo ' | '; bloginfo('name'); ?></title>
        <link rel="shortcut icon" href="<?php echo get_bloginfo('template_url') . '/main/images/logo2.png'; ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <?php  get_template_part('elements/site-header'); ?>

