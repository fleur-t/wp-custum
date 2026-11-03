<?php get_header(); ?>

<main class="container smal">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php
        // Kijk of er een foto van een fee is met dezelfde naam als de slug van de pagina (bijv. bloom.png)
        $slug = get_post_field( 'post_name' );
        $fee_foto = '/images/feeen/' . $slug . '.png';
        ?>
        <article class="pagina">
            <h1><?php the_title(); ?></h1>

            <?php if ( file_exists( get_template_directory() . $fee_foto ) ) : ?>
                <div class="fee-foto">
                    <img src="<?php echo get_template_directory_uri() . $fee_foto; ?>" alt="<?php the_title(); ?>">
                </div>
            <?php elseif ( has_post_thumbnail() ) : ?>
                <div class="uitgelicht"><?php the_post_thumbnail( 'large' ); ?></div>
            <?php endif; ?>

            <div class="inhoud">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
