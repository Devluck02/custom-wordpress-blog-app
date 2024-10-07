<?php get_header(); ?>
    <div class="container py-3">
       <div class="d-md-flex justify-content-md-between align-items-md-start">
       <div class="single-post w-75">
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                            
                        <div class="single-featured-image mb-4"><?php the_post_thumbnail(); ?></div>
                        <h2 class=""><?php the_title(); ?></h2>
                        <p class=""><?php the_content(); ?></p>
                            
                        <?php
                endwhile;
            else:
                echo "<p>There are no posts!</p>";
            endif; ?>
      </div>
      <div class="sidebar-container ms-md-4 w-25">
            <?php if (is_active_sidebar("custom-sidebar-id")): ?>
                <div id="custom-sidebar" class="custom-sidebar-widget-area">
                    <h2>Latest Post</h2>
                    <?php dynamic_sidebar("custom-sidebar-id"); ?>
                </div>
            <?php endif; ?>
        </div>
       </div>
    </div>
<?php get_footer(); ?>
