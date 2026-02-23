<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="px-6 lg:px-32 py-16">
    <div class="max-w-4xl mx-auto">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article <?php post_class('bg-white rounded-xl border border-[#ECF0F1] p-8'); ?>>
                <h1 class="font-['Univa_Nova',sans-serif] font-bold text-4xl text-[#2C3E50] mb-6"><?php the_title(); ?></h1>
                <div class="prose max-w-none">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php
get_footer();
