<?php

function add_test_theme_page() {
  add_theme_page("Rebeldes Options",
                 "Rebeldes Options",
                 "manage_options",
                 "theme-options",
                 "theme_option_page", null, 99);

}
add_action( 'admin_menu', 'add_test_theme_page' );

function theme_option_page() {
  ?>
  <div class="wrap">
    <h1>Custom Rebeldes Theme Options Page</h1>
    <form method="post" action="options.php">
    <?php
    // display settings field on theme-option page
    settings_fields("theme-options-grp");

  // display all sections for theme-options page
  do_settings_sections("theme-options");
  submit_button();
  ?>
    </form>
        </div>
        <?php
        }

function frontpage_section_description(){
  echo '<p>Everything for the front page</p>';
}



function exhibition_date_display(){
  ?>
  <input type="text" name="front_exhibition_date" id="front_exhibition_date" value="<?php echo get_option('front_exhibition_date'); ?>" />
    <?php
    }

function exhibition_place_display(){
  ?>
  <input type="text" name="front_exhibition_place" id="front_exhibition_place" value="<?php echo get_option('front_exhibition_place'); ?>" />
    <?php
    }

function front_catalogue_display() {
  ?>
  <input type="text" name="front_catalogue" id="front_catalogue" value="<?php echo get_option('front_catalogue'); ?>" />
    <?php
    }

function front_flyer_display() {
  ?>
  <input type="text" name="front_flyer" id="front_flyer" value="<?php echo get_option('front_flyer'); ?>" />
    <?php
    }

function test_theme_settings(){
  add_option('first_field_option',1);// add theme option to database
  add_settings_section( 'front_page', 'Frontpage Settings',
                        'frontpage_section_description','theme-options');
  
  
  add_settings_field("front_exhibition_date", "Exhibition Date", "exhibition_date_display", "theme-options", "front_page");
  register_setting( 'theme-options-grp', 'front_exhibition_date');

  add_settings_field("front_exhibition_place", "Exhibition Place", "exhibition_place_display", "theme-options", "front_page");
  register_setting( 'theme-options-grp', 'front_exhibition_place');
  
  add_settings_field("front_catalogue", "Catalogue Link", "front_catalogue_display", "theme-options", "front_page");
  register_setting( 'theme-options-grp', 'front_catalogue');

add_settings_field("front_flyer", "Flyer Link", "front_flyer_display", "theme-options", "front_page");
  register_setting( 'theme-options-grp', 'front_flyer');
}
add_action('admin_init','test_theme_settings');
