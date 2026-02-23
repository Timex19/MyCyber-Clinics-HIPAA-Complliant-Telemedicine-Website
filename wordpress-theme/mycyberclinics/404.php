<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="px-6 lg:px-32 py-20">
    <div class="max-w-2xl mx-auto text-center bg-white rounded-xl border border-[#ECF0F1] p-10">
        <h1 class="font-['Univa_Nova',sans-serif] font-bold text-5xl text-[#2C3E50] mb-4">404</h1>
        <p class="text-lg text-gray-700 mb-6"><?php esc_html_e('The page you are looking for could not be found.', 'mycyberclinics'); ?></p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex rounded-lg bg-[#7E5BA1] hover:bg-[#48C9B0] text-white px-6 py-3 font-semibold transition-colors">
            <?php esc_html_e('Back to Home', 'mycyberclinics'); ?>
        </a>
    </div>
</main>
<?php
get_footer();
