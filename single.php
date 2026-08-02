<?php get_header(); ?>

<main class="main-page-padding">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <article class="container single-article reveal active">
            <!-- Article Header -->
            <header class="article-header">
                <div class="article-meta-large">
                    <span class="category-badge">
                        <?php 
                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) {
                                echo esc_html( $categories[0]->name );
                            }
                        ?>
                    </span>
                    <span class="date"><i data-lucide="calendar" width="16" style="display:inline; margin-bottom:-2px;"></i> <?php echo get_the_date(); ?></span>
                    <span class="read-time"><i data-lucide="clock" width="16" style="display:inline; margin-bottom:-2px;"></i> 5 min read</span>
                </div>
                
                <h1 class="article-title"><?php the_title(); ?></h1>
                
                <div class="article-author-meta">
                    <img src="https://ui-avatars.com/api/?name=<?php echo urlencode(get_the_author()); ?>&background=random" alt="<?php echo esc_attr(get_the_author()); ?>">
                    <div>
                        <strong><?php the_author(); ?></strong>
                        <span><?php echo esc_html( get_the_author_meta( 'description' ) ); ?></span>
                    </div>
                </div>
            </header>

            <!-- Featured Image -->
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="article-featured-image">
                    <?php the_post_thumbnail('full'); ?>
                </div>
            <?php else: ?>
                <div class="article-featured-image">
                    <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=1200&q=80" alt="Cover Default">
                </div>
            <?php endif; ?>

            <!-- Article Body -->
            <div class="article-body">
                <?php the_content(); ?>
            </div>

            <!-- Author Box -->
            <div class="author-box reveal active">
                <img src="https://ui-avatars.com/api/?name=<?php echo urlencode(get_the_author()); ?>&background=random" alt="Author">
                <div>
                    <h4><?php the_author(); ?></h4>
                    <p><?php echo esc_html( get_the_author_meta( 'description' ) ); ?></p>
                </div>
            </div>

            <!-- Article Navigation -->
            <div class="article-navigation reveal active">
                <?php 
                $prev_post = get_previous_post();
                if (!empty($prev_post)): 
                ?>
                    <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev">
                        <span><i data-lucide="arrow-left" width="14" style="display:inline;"></i> Artikel Sebelumnya</span>
                        <strong><?php echo esc_html($prev_post->post_title); ?></strong>
                    </a>
                <?php else: ?>
                    <div></div>
                <?php endif; ?>

                <?php 
                $next_post = get_next_post();
                if (!empty($next_post)): 
                ?>
                    <a href="<?php echo get_permalink($next_post->ID); ?>" class="next">
                        <span>Artikel Selanjutnya <i data-lucide="arrow-right" width="14" style="display:inline;"></i></span>
                        <strong><?php echo esc_html($next_post->post_title); ?></strong>
                    </a>
                <?php else: ?>
                    <div></div>
                <?php endif; ?>
            </div>

        </article>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
