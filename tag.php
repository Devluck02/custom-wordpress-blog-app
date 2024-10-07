<?php get_header(); ?>

<div class="tag-archive container">
<div class="all-post d-md-flex flex-md-wrap align-items-md-start py-4">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                <div class="card gap-3 mb-4">
                    <div class="featured-image">
                        <?php the_post_thumbnail(); ?></div>
                    <div class="post-desc p-3">
                        <h2 class="post-title mb-3"><?php the_title(); ?></h2>
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            foreach ($categories as $category) {
                                echo '<span class="d-inline-flex bg-success text-white px-3 py-1 text-white rounded-pill mb-3">' . esc_html($category->name) . '</span> ';
                            }
                        }
                        ?>
                        <p class="mb-2"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more btn bg-dark text-white my-2">Read More</a>
                    </div>
                </div>
                <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>
