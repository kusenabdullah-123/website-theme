<?php get_header(); ?>
<main class="main-page-padding">
    <section class="container reveal active">
        <h1 class="section-title" style="text-align: left; margin-bottom: 20px;">Catatan & Eksplorasi</h1>
        <p style="font-size: 1.1rem; color: var(--text-secondary); margin-bottom: 40px; max-width: 800px; line-height: 1.8;">
            Dokumentasi seputar teknologi, penyelesaian masalah bug, dan proses belajar saya dalam dunia software engineering.
        </p>

        <!-- Kategori Filter -->
        <div class="filter-container">
            <button class="filter-btn active" data-filter="all">Semua Tulisan</button>
            <?php
            $categories = get_categories( array(
                'orderby' => 'name',
                'order'   => 'ASC',
                'hide_empty' => true,
            ) );
            foreach( $categories as $category ) {
                echo '<button class="filter-btn" data-filter="' . esc_attr( $category->slug ) . '">' . esc_html( $category->name ) . '</button>';
            }
            ?>
        </div>

        <div class="blog-grid" id="blog-grid">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php 
                        $post_categories = get_the_category();
                        $cat_slug = !empty($post_categories) ? $post_categories[0]->slug : '';
                    ?>
                    <article class="blog-card" data-category="<?php echo esc_attr($cat_slug); ?>">
                        <div class="blog-img-wrapper">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                </a>
                            <?php else: ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?auto=format&fit=crop&w=600&q=80" alt="Placeholder">
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="blog-category">
                                    <?php 
                                        $categories = get_the_category();
                                        if ( ! empty( $categories ) ) {
                                            echo esc_html( $categories[0]->name );
                                        }
                                    ?>
                                </span>
                                <span style="display: flex; align-items: center; gap: 5px;"><i data-lucide="calendar" width="14"></i> <?php echo get_the_date(); ?></span>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more">Baca Selengkapnya <i data-lucide="arrow-right" width="16"></i></a>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p>Belum ada artikel.</p>
            <?php endif; ?>
        </div>
        
        <div style="margin-top: 50px;">
            <?php 
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '<i data-lucide="chevron-left" width="16"></i> Sebelumnya',
                    'next_text' => 'Selanjutnya <i data-lucide="chevron-right" width="16"></i>',
                ) );
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
