<li id="<?php echo $event->post_name; ?>" class="events-divider p-t-20 p-b-60">
    <div class="layout-inner">
        <?php $this->setup_postdata( $event ); ?>
        <?php
        $start_date = date_parse($event->start_date);
        $end_date = date_parse($event->end_date);
        ?>

        <p class="events-date">
            <?php if($event->start_date != ''): ?>
                <time datetime="<?php echo $event->start_date ?>">
                    <?php echo date('d/m/y', strtotime($event->start_date)); ?>
                    <?php
                    $start = date('d/m/y', strtotime($event->start_date));
                    $end = date('d/m/y', strtotime($event->end_date));
                    if ($start != $end) { echo " - " . date('d/m/y', strtotime($event->end_date)); } ?>
                </time>
            <?php else : ?>
                <time datetime="<?php echo $event->event_date ?>">
                    <?php echo date('d/m/y', strtotime($event->event_date)); ?>
                </time>
            <?php endif; ?>
        </p>

        <h2 class="events-item-title"><?php echo $event->post_title; ?></h2>

        <div class="events-content">
            <?php the_excerpt(); ?>
        </div>
        <div class="event-venue">
            <p class="r-s">
                <?php if ($event->start_date !== ''): ?>

                    <?php if ($start != $end) : ?>
                    <strong><?php echo $start . " - " . $end; ?></strong><br>
                    <?php endif; ?>
                    <strong>
                        <?php echo date('H:i', strtotime($event->start_date)); ?>-
                        <?php echo date('H:i', strtotime($event->end_date)); ?>
                    </strong><br>
                <?php endif; ?>
            <?php
            $venue_details = tribe_get_venue_details();
            $venue = tribe_get_venue_id();
            $venue = get_post($venue);
            ?>
            <span><?php echo $venue_details['linked_name'] ?></span><br>
            <span><?php echo $venue_details['address'] ?></span><br>
            <?php if ($venue->post_content != ''): ?><span><?php echo $venue->post_content; ?></span><?php endif; ?>
            </p>
        </div>

        <div class="m-t-60 js-event-content-wrapper is-hidden">
            <button type="button" data-toggle="event-accordion-<?php echo the_ID(); ?>" class="btn btn-dropdown js-event-accordion">
                <span class="js-more"><?php esc_html_e('Read more', 'rebeldes'); ?></span>
                <span class="js-less" aria-hidden="true"><?php esc_html_e('Read less', 'rebeldes'); ?></span>
            </button>
            <div class="event-accordion-body is-closed" id="event-accordion-<?php echo the_ID(); ?>">
                <div class="js-event-content"><?php echo $event->post_content; ?></div>
                <button type="button" data-toggle="event-accordion-<?php echo the_ID(); ?>" class="btn btn-dropdown js-event-accordion">
                    <span class="js-more"><?php esc_html_e('Read more', 'rebeldes'); ?></span>
                    <span class="js-less" aria-hidden="true"><?php esc_html_e('Read less', 'rebeldes'); ?></span></button>
                <div class="m-t-40">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo implode('/', array_slice(explode('/', get_permalink()), 0, -2)); ?>#<?php echo $event->post_name?>" target="_blank" rel="nofollow"><?php echo esc_html_e('Share on Facebook', 'rebeldes'); ?></a>
                    <a href="https://twitter.com/intent/tweet?text=<?php echo implode('/', array_slice(explode('/', get_permalink()), 0, -2)); ?>#<?php echo $event->post_name?>" target="_blank" rel="nofollow"><?php echo esc_html_e('Share on Twitter', 'rebeldes'); ?></a>
                </div>
            </div>
        </div>
    </div>
</li>
