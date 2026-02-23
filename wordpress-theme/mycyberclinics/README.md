# MyCyberClinics WordPress Theme (Native)

This is a native WordPress theme conversion.

## What Is Native Now

- Homepage is server-rendered via `front-page.php` (no React mount).
- Standard WordPress templates are enabled: `index.php`, `page.php`, `single.php`, `404.php`.
- Editable homepage fields are registered with ACF (if ACF is installed):
  - Hero title/subtitle
  - Activation note
  - Pricing summary
  - FAQ repeater
- Gutenberg content is supported via normal page content (`the_content()`).

## Install

1. Copy `wordpress-theme/mycyberclinics` to `wp-content/themes/mycyberclinics`.
2. Activate the theme in **Appearance > Themes**.
3. Set a static homepage in **Settings > Reading**.
4. Install and activate **Advanced Custom Fields (ACF)** for editable homepage field controls.

## Optional Asset Refresh

If you update frontend styles and need new compiled CSS assets:
1. Run `npm run build -- --base=./`
2. Copy files from `dist/assets/` into `wordpress-theme/mycyberclinics/assets/`
