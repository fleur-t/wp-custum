<?php get_header(); ?>

<section class="hero">
    <div class="container">
        <p class="hero-klein">Welkom in de magische dimensie</p>
        <h1><?php bloginfo( 'name' ); ?></h1>
        <p class="hero-tekst"><?php bloginfo( 'description' ); ?></p>
        <a class="knop" href="#nieuwste">Ontdek de verhalen &#10024;</a>
    </div>
</section>

<?php
// De feeën staan in een array, zo hoef ik de HTML maar één keer te schrijven
$feeen = array(
    'bloom' => 'Fee van de Drakenvlam',
    'stella' => 'Fee van de Zon en Maan',
    'flora' => 'Fee van de Natuur',
    'musa' => 'Fee van de Muziek',
    'tecna' => 'Fee van de Technologie',
    'aisha' => 'Fee van de Golven',
);
?>

<section class="feeen">
    <div class="container">
        <h2>De feeën van Alfea</h2>
        <div class="feeen-grid">
            <?php foreach ( $feeen as $naam => $kracht ) : ?>
                <?php
                // Zoek de pagina van deze fee, bijvoorbeeld /feeen/bloom/
                $pagina = get_page_by_path( 'feeen/' . $naam );
                $link = $pagina ? get_permalink( $pagina ) : '#';
                ?>
                <a class="fee fee-<?php echo $naam; ?>" href="<?php echo $link; ?>">
                    <?php if ( file_exists( get_template_directory() . '/images/feeen/' . $naam . '.png' ) ) : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/feeen/<?php echo $naam; ?>.png" alt="<?php echo ucfirst( $naam ); ?>">
                    <?php endif; ?>
                    <h3><?php echo ucfirst( $naam ); ?></h3>
                    <p><?php echo $kracht; ?></p>
                    <span class="lees-meer">Meer over <?php echo ucfirst( $naam ); ?> &rarr;</span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<main class="container" id="nieuwste">
    <h2>Nieuwste berichten</h2>

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
                        <a class="lees-meer" href="<?php the_permalink(); ?>">Lees verder &rarr;</a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>Er zijn nog geen berichten. Tijd om wat magie te schrijven!</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
