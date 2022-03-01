<div class="site-header-mobile-wrapper">
    <div class="site-header-mobile"><!-- mobile-menu -->
        <div class="site-branding-mobile">
	    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php get_template_part( 'design/svg', 'logo-white' ); ?>
            </a></p>
        </div>

        <nav class="mobile-main-navigation">
	    <?php
	    wp_nav_menu(
	        array(
		    'theme_location' => 'menu-1',
		    'menu_id'        => 'primary-menu-2',
	        )
	    );
	    ?>
        </nav>

        <nav class="mobile-secondary-navigation">
	    <?php
	    wp_nav_menu(
	        array(
		    'theme_location' => 'menu-3',
		    'menu_id'        => 'secondary-menu',
	        )
	    );
	    ?>
            <?php
	    wp_nav_menu(
	        array(
		    'theme_location' => 'menu-2',
		    'menu_id'        => 'language-menu-2'
	        )
	    );
	    ?>

        </nav>
    </div>

    <div class="mobile-navbar">
        <?php
        $title = 'nomatch';
        if (is_archive()) {
            $title =  __(explode(' ', get_the_archive_title())[1], 'rebeldes');
        } else {
            $title = single_post_title('', false);

            if ($title && $title !== '') {
                $type = get_post_type($post->ID);
                if ($type == 'rebeldes_artists') {
                    $title = __('Artists', 'rebeldes');
                }
            }
        }
        ?>

        <div class="mobile-navbar-title"><?php echo $title; ?></div>
        <button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <span class="menu-toggle--open">
                <svg width="61" height="41" viewBox="0 0 61 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.16667 40.25H56.8333C58.6438 40.25 60.125 38.7687 60.125 36.9583C60.125 35.1479 58.6438 33.6667 56.8333 33.6667H4.16667C2.35625 33.6667 0.875 35.1479 0.875 36.9583C0.875 38.7687 2.35625 40.25 4.16667 40.25ZM4.16667 23.7917H56.8333C58.6438 23.7917 60.125 22.3104 60.125 20.5C60.125 18.6896 58.6438 17.2083 56.8333 17.2083H4.16667C2.35625 17.2083 0.875 18.6896 0.875 20.5C0.875 22.3104 2.35625 23.7917 4.16667 23.7917ZM0.875 4.04167C0.875 5.85208 2.35625 7.33333 4.16667 7.33333H56.8333C58.6438 7.33333 60.125 5.85208 60.125 4.04167C60.125 2.23125 58.6438 0.75 56.8333 0.75H4.16667C2.35625 0.75 0.875 2.23125 0.875 4.04167Z" fill="white"/>
                </svg>
            </span>
            <span class="menu-toggle--close is-hidden">
                <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M43.2375 1.79542C42.933 1.49027 42.5713 1.24818 42.1731 1.083C41.7749 0.917816 41.348 0.832792 40.9169 0.832792C40.4858 0.832792 40.0589 0.917816 39.6607 1.083C39.2625 1.24818 38.9008 1.49027 38.5963 1.79542L22.5 17.8588L6.40375 1.7625C6.09901 1.45775 5.73722 1.21601 5.33904 1.05109C4.94087 0.886156 4.51411 0.80127 4.08313 0.80127C3.65215 0.80127 3.22539 0.886156 2.82722 1.05109C2.42904 1.21601 2.06725 1.45775 1.7625 1.7625C1.45775 2.06725 1.21601 2.42904 1.05109 2.82722C0.886156 3.22539 0.80127 3.65215 0.80127 4.08313C0.80127 4.51411 0.886156 4.94087 1.05109 5.33904C1.21601 5.73722 1.45775 6.09901 1.7625 6.40375L17.8588 22.5L1.7625 38.5963C1.45775 38.901 1.21601 39.2628 1.05109 39.661C0.886156 40.0591 0.80127 40.4859 0.80127 40.9169C0.80127 41.3479 0.886156 41.7746 1.05109 42.1728C1.21601 42.571 1.45775 42.9328 1.7625 43.2375C2.06725 43.5423 2.42904 43.784 2.82722 43.9489C3.22539 44.1139 3.65215 44.1987 4.08313 44.1987C4.51411 44.1987 4.94087 44.1139 5.33904 43.9489C5.73722 43.784 6.09901 43.5423 6.40375 43.2375L22.5 27.1413L38.5963 43.2375C38.901 43.5423 39.2628 43.784 39.661 43.9489C40.0591 44.1139 40.4859 44.1987 40.9169 44.1987C41.3479 44.1987 41.7746 44.1139 42.1728 43.9489C42.571 43.784 42.9328 43.5423 43.2375 43.2375C43.5423 42.9328 43.784 42.571 43.9489 42.1728C44.1139 41.7746 44.1987 41.3479 44.1987 40.9169C44.1987 40.4859 44.1139 40.0591 43.9489 39.661C43.784 39.2628 43.5423 38.901 43.2375 38.5963L27.1413 22.5L43.2375 6.40375C44.4883 5.15292 44.4883 3.04625 43.2375 1.79542Z" fill="white"/>
                </svg>
            </span>

            <span class="a11y-hidden"><?php esc_html_e( 'Mobile Menu', 'rebeldes' ); ?></span>
        </button>
    </div>
</div>
