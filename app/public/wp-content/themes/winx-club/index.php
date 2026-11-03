<?php get_header(); ?>

<main class="container">
    <h1 class="pagina-titel">Alle berichten</h1>

    <?php if ( have_posts() ) : ?>
        <div class="kaarten">
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="kaart">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
                    <?php endif; ?>
                    <div class="kaart-inhoud">
                        <p class="meta"><?php echo get_the_date(); ?></p>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'winx-club' ); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
