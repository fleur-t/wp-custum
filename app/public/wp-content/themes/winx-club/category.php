<?php
/*
 * category.php - wordt gebruikt voor /category/.../
 * Zelfde als archive.php maar met de beschrijving van de categorie erbij.
 */
get_header();
?>

<main class="container">
    <p class="label">Categorie</p>
    <h1 class="pagina-titel"><?php single_cat_title(); ?></h1>
    <div class="omschrijving"><?php echo category_description(); ?></div>

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
        <p>Er staan nog geen berichten in deze categorie.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
