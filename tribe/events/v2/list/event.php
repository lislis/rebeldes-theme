<li id="<?php echo $event->post_name; ?>" class="events-divider p-t-20 p-b-60">
    <div class="layout-inner">
        <?php $this->setup_postdata( $event ); ?>
        <?php
        $start_date = date_parse($event->start_date);
        $end_date = date_parse($event->end_date);
        ?>

        <p class="m-0 events-date"><time datetime="<?php echo $event->start_date ?>">
            <?php echo date('d/m/y', strtotime($event->start_date)); ?>
        </time></p>

        <h2 class="events-item-title"><?php echo $event->post_title; ?></h2>

        <div class="events-content">
            <?php the_excerpt(); ?>
        </div>
        <div class="event-venue">
            <p class="r-s">
                <?php if ($event->start_date): ?>
                    <strong>
                        <?php echo date('H:i', strtotime($event->start_date)); ?>-
                        <?php echo date('H:i', strtotime($event->end_date)); ?>
                    </strong><br>
                <?php endif; ?>
            <?php
            $venue_details = tribe_get_venue_details(); ?>
            <span><?php echo $venue_details['linked_name'] ?></span><br>
            <span><?php echo $venue_details['address'] ?></span>
            </p>
        </div>
        <div>
            <button type="button" class="btn btn-dropdown js-event-accordion"><?php esc_html_e('Read more', 'rebeldes'); ?></button>
            <div class="event-accordion-body is-closed">
                <?php echo $event->post_content; ?>
                <div>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo implode('/', array_slice(explode('/', get_permalink()), 0, -2)); ?>#<?php echo $event->post_name?>" target="_blank" rel="nofollow"><?php echo esc_html_e('Share on Facebook', 'rebeldes'); ?></a>
                    <a href="https://twitter.com/intent/tweet?text=<?php echo implode('/', array_slice(explode('/', get_permalink()), 0, -2)); ?>#<?php echo $event->post_name?>" target="_blank" rel="nofollow"><?php echo esc_html_e('Share on Twitter', 'rebeldes'); ?></a>
                </div>
            </div>
        </div>
    </div>
</li>
