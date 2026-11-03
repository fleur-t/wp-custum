<footer class="site-footer">
    <div class="container">

        <?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
            <div class="footer-widgets">
                <?php dynamic_sidebar( 'footer-widgets' ); ?>
            </div>
        <?php endif; ?>

        <nav class="footermenu">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footermenu',
                'container'      => false,
                'fallback_cb'    => false, // geen menu ingesteld = niks tonen
                'depth'          => 1,
            ) );
            ?>
        </nav>

        <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?> - een fansite over Winx Club</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
