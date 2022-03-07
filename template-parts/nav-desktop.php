<div class="site-header">
    <div class="site-branding">
        <?php
        the_custom_logo();
        if ( is_front_page() ) :
        // frontpage is differet :P
        else :
        ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php get_template_part( 'design/svg', 'logo' ); ?>
            </a></p>
        <?php
        endif;
        ?>

    </div><!-- .site-branding -->

    <div class="site-claim">
        <div class="site-description-wrapper">
            <?php $rebeldes_description = get_bloginfo( 'description', 'display' );
            if ( $rebeldes_description || is_customize_preview() ) :
            ?>
                <p class="site-description"><?php echo $rebeldes_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
            <?php endif; ?>
        </div>

        <nav id="site-language" class="language-navigation">
            <?php
            if ( has_nav_menu( 'menu-2' ) ) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-2',
                        'menu_id'        => 'language-menu',
                    )
                );
            }
            ?>
        </nav>
    </div>

    <nav id="site-navigation" class="main-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            )
        );
        ?>
    </nav><!-- #site-navigation -->
</div><!-- #masthead -->
