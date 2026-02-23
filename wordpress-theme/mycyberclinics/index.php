<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="px-6 lg:px-32 py-16">
    <div class="max-w-4xl mx-auto space-y-10">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('bg-white rounded-xl border border-[#ECF0F1] p-8'); ?>>
                    <h2 class="font-['Univa_Nova',sans-serif] font-bold text-3xl text-[#2C3E50] mb-3">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="text-sm text-gray-500 mb-4">
                        <?php echo esc_html(get_the_date()); ?>
                    </div>
                    <div class="text-gray-700 leading-relaxed">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            <div class="pt-4">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <p class="text-gray-700"><?php esc_html_e('No content found.', 'mycyberclinics'); ?></p>
        <?php endif; ?>
    </div>
</main>
<?php
get_footer();
