<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();

$logo = mycyberclinics_asset_url('c8397ab71eb936effba7144da57bfed566604694-*.png');
$hero_image = mycyberclinics_asset_url('618cefd477229e137057ef5ef785eb848fb5df12-*.png');

$hero_title = mycyberclinics_field('hero_title', 'Skip the Queue. See a Doctor from Home.');
$hero_subtitle = mycyberclinics_field('hero_subtitle', 'Get 24/7 access to verified Nigerian doctors, instant prescriptions, and transparent pricing.');
$activation_note = mycyberclinics_field('activation_note', 'The ₦2,000 one-time activation unlocks secure access and is credited toward your first consultation within 30 days. Waived for Gold and Platinum.');
$pricing_summary = mycyberclinics_field('pricing_summary', 'MyCyberClinics offers transparent healthcare pricing. Pay per visit or choose concierge care for unlimited, priority access.');

$plans = [
    [
        'name' => 'Pay As You Go',
        'price' => 'From ₦6,000',
        'period' => 'per consultation + ₦2,000 one-time activation',
        'features' => [
            'GP: ₦6,000 | Consultant: ₦8,000 | Specialist: ₦10,000',
            '72-hour structured follow-up window',
            'Up to 3 patient messages per consultation',
            'CHIOMA: 10 messages/month after activation; up to 30/month with active use',
        ],
    ],
    [
        'name' => 'Gold Concierge',
        'price' => '₦40,000',
        'period' => 'per month',
        'features' => [
            'Activation fee waived',
            'Unlimited telehealth visits',
            '7-day structured follow-up',
            'Up to 10 patient messages per consultation',
            'CHIOMA: unlimited (fair use)',
        ],
    ],
    [
        'name' => 'Platinum Concierge',
        'price' => '₦60,000',
        'period' => 'per month',
        'features' => [
            'Activation fee waived',
            'Everything in Gold',
            'Priority response handling',
            '14-day structured follow-up',
            'Up to 20 patient messages per consultation',
            'CHIOMA: unlimited + priority routing (fair use)',
        ],
    ],
];

$default_faqs = [
    [
        'question' => 'Why do I pay a ₦2,000 activation fee?',
        'answer' => 'It activates secure access to doctors and is credited toward your first consultation within 30 days. It is waived for Concierge members.',
    ],
    [
        'question' => 'Can I use the platform without paying monthly?',
        'answer' => 'Yes. Pay-As-You-Go lets you pay only when you book a consultation. Monthly concierge plans are optional.',
    ],
    [
        'question' => 'Is CHIOMA included?',
        'answer' => 'Yes. Activated users get 10 messages/month, active pay-as-you-go users get up to 30/month, Gold is unlimited, and Platinum is unlimited with priority routing.',
    ],
    [
        'question' => 'Are there hidden charges?',
        'answer' => 'No. MyCyberClinics uses transparent pricing. What you see upfront is what you pay.',
    ],
];

$acf_faqs = mycyberclinics_field('faq_items', []);
$faqs = is_array($acf_faqs) && !empty($acf_faqs) ? $acf_faqs : $default_faqs;
?>

<div class="min-h-screen bg-white font-['Karla']" lang="en">
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-[#ECF0F1] px-6 lg:px-32 py-4" role="banner">
        <nav class="flex items-center justify-between" aria-label="Main navigation">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
                <?php if ($logo !== '') : ?>
                    <img src="<?php echo esc_url($logo); ?>" alt="MyCyber Clinics logo" class="h-16 lg:h-20 w-auto" />
                <?php else : ?>
                    <span class="font-semibold text-[#2C3E50]">MyCyber Clinics</span>
                <?php endif; ?>
            </a>
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'hidden lg:flex items-center gap-6 text-sm font-medium text-[#2C3E50]',
                'fallback_cb' => false,
            ]);
            ?>
        </nav>
    </header>

    <main>
        <section class="relative px-6 lg:px-32 py-24 lg:py-32 overflow-hidden" id="home">
            <?php if ($hero_image !== '') : ?>
                <div class="absolute inset-0 z-0">
                    <img src="<?php echo esc_url($hero_image); ?>" alt="" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-r from-[#48C9B0]/88 via-[#7E5BA1]/78 to-[#2C3E50]/62"></div>
                </div>
            <?php endif; ?>
            <div class="relative z-10 max-w-3xl">
                <h1 class="font-['Univa_Nova',sans-serif] font-bold text-4xl md:text-5xl lg:text-6xl text-white mb-6 leading-tight">
                    <?php echo esc_html($hero_title); ?>
                </h1>
                <p class="text-lg lg:text-xl text-white/90 mb-8 leading-relaxed">
                    <?php echo esc_html($hero_subtitle); ?>
                </p>
                <a href="#plans" class="inline-flex items-center rounded-lg bg-[#7E5BA1] hover:bg-[#48C9B0] text-white px-8 py-4 font-semibold transition-colors">
                    Book a Consultation
                </a>
            </div>
        </section>

        <section id="about" class="py-16 px-6 lg:px-32 bg-white">
            <div class="max-w-5xl mx-auto text-center">
                <h2 class="font-['Univa_Nova',sans-serif] font-bold text-4xl lg:text-5xl text-[#2C3E50] mb-4">About MyCyber Clinics</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    We make healthcare transparent, accessible, and patient-first. Choose flexible pay-as-you-go care or premium concierge care with no surprise bills.
                </p>
            </div>
        </section>

        <section id="plans" class="py-20 px-6 lg:px-32 bg-[#ECF0F1]">
            <div class="text-center mb-14">
                <h2 class="font-['Univa_Nova',sans-serif] font-bold text-4xl lg:text-5xl text-[#2C3E50] mb-4">Transparent Pricing</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed"><?php echo esc_html($pricing_summary); ?></p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <?php foreach ($plans as $index => $plan) : ?>
                    <article class="bg-white rounded-2xl p-8 <?php echo $index === 1 ? 'border-4 border-[#7E5BA1] shadow-2xl' : 'border border-[#ECF0F1] shadow-sm'; ?>">
                        <h3 class="font-['Univa_Nova',sans-serif] font-bold text-2xl text-[#2C3E50] mb-2"><?php echo esc_html($plan['name']); ?></h3>
                        <div class="mb-4">
                            <span class="font-['Univa_Nova',sans-serif] font-bold text-4xl text-[#2C3E50]"><?php echo esc_html($plan['price']); ?></span>
                            <p class="text-sm text-gray-600 mt-1"><?php echo esc_html($plan['period']); ?></p>
                        </div>
                        <ul class="space-y-3 text-sm text-gray-700">
                            <?php foreach ($plan['features'] as $feature) : ?>
                                <li class="flex items-start gap-2"><span class="text-[#7E5BA1]">•</span><span><?php echo esc_html($feature); ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="mt-10 bg-white rounded-xl p-8 max-w-4xl mx-auto border border-[#ECF0F1]">
                <h3 class="font-semibold text-xl text-[#2C3E50] mb-3">One-Time Account Activation (₦2,000)</h3>
                <p class="text-gray-700"><?php echo esc_html($activation_note); ?></p>
            </div>
        </section>

        <section id="faq" class="py-20 px-6 lg:px-32 bg-white">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-10">
                    <h2 class="font-['Univa_Nova',sans-serif] font-bold text-4xl lg:text-5xl text-[#2C3E50] mb-4">Frequently Asked Questions</h2>
                    <p class="text-lg text-gray-600">Pricing and care information at a glance.</p>
                </div>
                <div class="space-y-4">
                    <?php foreach ($faqs as $idx => $faq) : ?>
                        <article class="bg-[#ECF0F1] rounded-xl border border-[#ECF0F1]">
                            <button class="faq-toggle w-full px-6 py-5 flex items-center justify-between text-left" type="button" aria-expanded="false">
                                <span class="font-semibold text-[#2C3E50] pr-6"><?php echo esc_html($faq['question']); ?></span>
                                <span class="text-[#7E5BA1]">+</span>
                            </button>
                            <div class="faq-content px-6 pb-5 hidden">
                                <p class="text-gray-700 leading-relaxed"><?php echo esc_html($faq['answer']); ?></p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="px-6 lg:px-32 py-8">
                <?php the_content(); ?>
            </section>
        <?php endwhile; endif; ?>
    </main>
</div>

<?php
get_footer();
