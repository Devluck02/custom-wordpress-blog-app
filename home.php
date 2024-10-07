<?php get_header(); ?>

<div id="main-content">
<?php if (is_home()) {
    echo "<div class='home-slider mb-4'>" .
        do_shortcode(
            '[recent_post_slider limit="3" design="design-1" show_author="false" show_date="false"]'
        ) .
        "</div>";
} ?>
    <div class="container pb-4">
        <h2 class="mb-4">All Post</h2>
        <div class="d-md-flex align-items-md-start">
           
        <div class="all-post d-md-flex flex-md-wrap align-items-md-start">
            <?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
                
                <div class="card mb-4">
                    <div class="featured-image">
                        <?php the_post_thumbnail(); ?></div>
                    <div class="post-desc p-3">
                        <h2 class="post-title mb-3"><?php the_title(); ?></h2>
                        <?php
        $categories = get_the_category();
        if (!empty($categories)) {
            foreach ($categories as $category) {
                echo '<span class="d-inline-flex bg-success text-white px-3 py-1 text-white rounded-pill mb-3">' . esc_html($category->name) . "</span> ";
            }
        }
?>
                        <p class="mb-2"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more btn bg-dark text-white my-2">Read More</a>
                    </div>
                </div>
                <?php
    endwhile;
endif; ?>
                </div>

                <div class="post-tags border border-secondary-subtle rounded p-2">
                <?php 
// Get all tags
$tags = get_tags(); 

if ( $tags ) : ?>
    <div class="tag-list">
        <h3>All Tags</h3>
        <ul class="list-unstyled d-flex gap-3 flex-wrap">
            <?php foreach ( $tags as $tag ) : ?>
                <li>
                    <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>">
                        <?php echo esc_html( $tag->name ); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
                </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
