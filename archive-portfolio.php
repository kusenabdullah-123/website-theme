<?php
/**
 * The template for displaying Portfolio Archive pages
 *
 * @package Website_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>

<main class="main-page-padding">
    <section class="container reveal active">
        <div class="mb-40">
            <span class="section-badge">Portofolio</span>
            <h1 class="section-title text-left mb-20">Portofolio & Proyek</h1>
            <p class="font-md text-secondary max-w-800">
                Kumpulan hasil karya, proyek pengembangan website, aplikasi, serta infrastruktur server yang telah saya kerjakan.
            </p>
        </div>

        <div class="portfolio-grid">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="portfolio-card">
                        <div class="portfolio-image">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('medium_large'); ?>
                            <?php else : ?>
                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80" alt="Placeholder Portofolio">
                            <?php endif; ?>
                        </div>
                        <div class="portfolio-content">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p class="grid-col-full text-center text-secondary py-40">Belum ada portofolio yang dipublikasikan.</p>
            <?php endif; ?>
        </div>
        
        <div class="mt-50">
            <?php 
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '<i class="ri-arrow-left-s-line icon-sm"></i> Sebelumnya',
                    'next_text' => 'Selanjutnya <i class="ri-arrow-right-s-line icon-sm"></i>',
                ) );
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
