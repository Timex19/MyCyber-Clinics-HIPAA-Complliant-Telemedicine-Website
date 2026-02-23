<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<footer class="bg-[#48C9B0] text-white py-12 px-6 lg:px-32" role="contentinfo">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
        <p class="text-sm text-white/90">© <?php echo esc_html(date('Y')); ?> MyCyber Clinics. All Rights Reserved.</p>
        <div class="flex items-center gap-5 text-sm">
            <a class="hover:underline" href="<?php echo esc_url(home_url('/#plans')); ?>">Pricing</a>
            <a class="hover:underline" href="<?php echo esc_url(home_url('/#faq')); ?>">FAQ</a>
            <a class="hover:underline" href="<?php echo esc_url(home_url('/#about')); ?>">About</a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
