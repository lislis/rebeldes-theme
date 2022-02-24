<li id="<?php echo $event->post_name; ?>" class="events-divider p-t-20 p-b-60">
    <?php $this->setup_postdata( $event ); ?>
    <?php
    $start_date = date_parse($event->start_date);
    $end_date = date_parse($event->end_date);
    ?>

    <p class="h-3xl m-0 events-date"><time datetime="<?php echo $event->start_date ?>">
        <?php echo date('d/m/y', strtotime($event->start_date)); ?>
    </time></p>

    <h2 class="h-l"><?php echo $event->post_title; ?></h2>

    <div class="events-content"><?php echo $event->post_content; ?></div>
    <div class="event-venue">
      <p class="r-s"><strong>
            <?php echo date('H:i', strtotime($event->start_date)); ?>-
            <?php echo date('H:i', strtotime($event->end_date)); ?>
        </strong><br>
        <?php
        $venue_details = tribe_get_venue_details(); ?>
        <span><?php echo $venue_details['linked_name'] ?></span><br>
        <span><?php echo $venue_details['address'] ?></span>
        </p>
    </div>
    <div>
        <button type="button" class="btn btn-dropdown js-event-accordion"><?php esc_html_e('Read more', 'rebeldes'); ?></button>
        <div class="event-accordion-body is-hidden">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo implode('/', array_slice(explode('/', get_permalink()), 0, -2)); ?>#<?php echo $event->post_name?>" target="_blank" rel="nofollow"><?php echo esc_html_e('Share on Facebook', 'rebeldes'); ?></a>
            <a href="https://twitter.com/intent/tweet?text=<?php echo implode('/', array_slice(explode('/', get_permalink()), 0, -2)); ?>#<?php echo $event->post_name?>" target="_blank" rel="nofollow"><?php echo esc_html_e('Share on Twitter', 'rebeldes'); ?></a>
        </div>
    </div>
</li>
