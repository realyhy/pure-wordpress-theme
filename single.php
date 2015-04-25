<?php get_header(); ?>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <!-- A wrapper for all the blog posts -->
            <div class="posts">
                <h1 class="content-subhead">on <?php echo the_time('l, F jS, Y');?></h1>

                <!-- A single blog post -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <section class="post">
                    <header class="post-header">
                        <span class="post-avatar"><?php echo get_avatar( $post->post_author, 48 ); ?></span>


                        <h2 class="post-title"><?php the_title(); ?></h2>

                        <p class="post-meta">
                            By <a href="#" class="post-author"><?php the_author(); ?> </a> under <?php the_category( ', ' ); ?>
                        </p>
                    </header>

                    <div class="post-description">

                            <?php the_content(); ?>

                    </div>
                </section>
                <hr>
                <?php comments_template(); ?>

                <?php endwhile; endif; ?>
            </div>

                
            </div>
<?php get_footer(); ?>
