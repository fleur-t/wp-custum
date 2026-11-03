<?php
/*
 * author.php - wordt gebruikt voor /author/naam/
 * Laat alle berichten van één schrijver zien.
 */
get_header();
?>

<main class="container">
    <p class="label">Schrijver</p>
    <h1 class="pagina-titel"><?php the_author(); ?></h1>

    <?php if ( have_posts() ) : ?>
        <div class="kaarten">
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="kaart">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
                    <?php endif; ?>
                    <div class="kaart-inhoud">
                        <p class="meta"><?php echo get_the_date(); ?></p>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>Deze schrijver heeft nog niks geplaatst.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
