<?php
if (!defined('ABSPATH')) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php if (!is_front_page()) : ?>
<header class="bg-white border-b border-[#ECF0F1] px-6 lg:px-32 py-4">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="font-['Univa_Nova',sans-serif] font-bold text-xl text-[#2C3E50]">
            <?php bloginfo('name'); ?>
        </a>
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'hidden lg:flex items-center gap-6 text-sm font-medium text-[#2C3E50]',
            'fallback_cb' => false,
        ]);
        ?>
    </div>
</header>
<?php endif; ?>
