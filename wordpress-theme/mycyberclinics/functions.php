<?php
/**
 * Theme functions for MyCyberClinics.
 */

if (!defined('ABSPATH')) {
    exit;
}

function mycyberclinics_theme_support(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('editor-styles');
    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'mycyberclinics'),
    ]);
}
add_action('after_setup_theme', 'mycyberclinics_theme_support');

function mycyberclinics_get_asset_file(string $pattern): string
{
    $matches = glob(get_template_directory() . '/assets/' . $pattern);

    if (!$matches || !isset($matches[0])) {
        return '';
    }

    return basename($matches[0]);
}

function mycyberclinics_enqueue_assets(): void
{
    $css_file = mycyberclinics_get_asset_file('index-*.css');

    if ($css_file !== '') {
        wp_enqueue_style(
            'mycyberclinics-app-style',
            get_template_directory_uri() . '/assets/' . $css_file,
            [],
            null
        );
    }

    wp_enqueue_style(
        'mycyberclinics-theme-style',
        get_stylesheet_uri(),
        ['mycyberclinics-app-style'],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'mycyberclinics-theme-interactions',
        get_template_directory_uri() . '/theme.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'mycyberclinics_enqueue_assets');

/**
 * Return first matching asset URL inside /assets.
 */
function mycyberclinics_asset_url(string $pattern): string
{
    $file = mycyberclinics_get_asset_file($pattern);
    if ($file === '') {
        return '';
    }

    return trailingslashit(get_template_directory_uri()) . 'assets/' . $file;
}

/**
 * Safe ACF field getter with defaults.
 */
function mycyberclinics_field(string $key, $default = '')
{
    if (!function_exists('get_field')) {
        return $default;
    }

    $value = get_field($key);
    if ($value === null || $value === '' || $value === []) {
        return $default;
    }

    return $value;
}

/**
 * Register ACF fields for homepage editing (if ACF is active).
 */
function mycyberclinics_register_acf_fields(): void
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key' => 'group_mycyberclinics_homepage',
        'title' => 'Homepage Settings',
        'fields' => [
            [
                'key' => 'field_home_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
                'default_value' => 'Skip the Queue. See a Doctor from Home.',
            ],
            [
                'key' => 'field_home_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'default_value' => 'Get 24/7 access to verified Nigerian doctors, instant prescriptions, and transparent pricing.',
            ],
            [
                'key' => 'field_home_activation_note',
                'label' => 'Activation Note',
                'name' => 'activation_note',
                'type' => 'textarea',
                'default_value' => 'The ₦2,000 one-time activation unlocks secure access and is credited toward your first consultation within 30 days. Waived for Gold and Platinum.',
            ],
            [
                'key' => 'field_home_pricing_summary',
                'label' => 'Pricing Summary',
                'name' => 'pricing_summary',
                'type' => 'textarea',
                'default_value' => 'MyCyberClinics offers transparent healthcare pricing. Pay per visit or choose concierge care for unlimited, priority access.',
            ],
            [
                'key' => 'field_home_faq_items',
                'label' => 'Pricing FAQs',
                'name' => 'faq_items',
                'type' => 'repeater',
                'layout' => 'row',
                'button_label' => 'Add FAQ',
                'sub_fields' => [
                    [
                        'key' => 'field_home_faq_question',
                        'label' => 'Question',
                        'name' => 'question',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_home_faq_answer',
                        'label' => 'Answer',
                        'name' => 'answer',
                        'type' => 'textarea',
                    ],
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ],
            ],
        ],
    ]);
}
add_action('acf/init', 'mycyberclinics_register_acf_fields');
