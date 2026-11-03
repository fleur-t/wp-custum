<?php get_header(); ?>

<main class="container smal">
    <?php while ( have_posts() ) : the_post(); ?>
        <article class="bericht">
            <h1><?php the_title(); ?></h1>

            <p class="meta">
                Geplaatst op <?php echo get_the_date(); ?>
                door <?php the_author_posts_link(); ?>
                in <?php the_category( ', ' ); ?>
            </p>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="uitgelicht"><?php the_post_thumbnail( 'large' ); ?></div>
            <?php endif; ?>

            <div class="inhoud">
                <?php the_content(); ?>
            </div>

            <div class="tags">
                <?php the_tags( '<span>Tags:</span> ', ' ' ); ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
