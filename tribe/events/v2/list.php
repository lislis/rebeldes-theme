<?php
/**
 * View: List View
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/list.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 5.2.1
 *
 * @var array    $events               The array containing the events.
 * @var string   $rest_url             The REST URL.
 * @var string   $rest_method          The HTTP method, either `POST` or `GET`, the View will use to make requests.
 * @var string   $rest_nonce           The REST nonce.
 * @var int      $should_manage_url    int containing if it should manage the URL.
 * @var bool     $disable_event_search Boolean on whether to disable the event search.
 * @var string[] $container_classes    Classes used for the container of the view.
 * @var array    $container_data       An additional set of container `data` attributes.
 * @var string   $breakpoint_pointer   String we use as pointer to the current view we are setting up with breakpoints.
 */

?>
<main class="site-calendar m-b-240">
    <div class="events-divider events-title p-b-40">
        <div class="layout-inner">
            <h1 class="m-0 events-site-title"><?php esc_html_e('Events', 'rebeldes'); ?></h1>
        </div>
    </div>

    <section class="events-layout">
        <ul class="events-list">
	    <?php foreach ( $events as $event ) : ?>
                <?php $this->template( 'list/event', [ 'event' => $event ] ); ?>
	    <?php endforeach; ?>
        </ul>
    </section>
    <section class="events-past events-layout">
        <?php
        $today = new DateTime();
        $past_events = tribe_get_events(array('start_date' => '2022-02-01 00:00',
                                              'end_date' => $today->format('Y-m-d H:i:s'))); ?>
        <?php if (count($past_events) > 0): ?>

        <div class="events-divider m-t-240">
            <div class="layout-inner">
                <h2 class="events-past-title"><?php esc_html_e('Past events', 'rebeldes'); ?></h2>
            </div>
        </div>

        <ul class="events-list">
	    <?php foreach ( $past_events as $event ) : ?>
                <?php $this->template( 'list/event', [ 'event' => $event ] ); ?>
	    <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </section>

</main>
<?php get_template_part( 'template-parts/real', 'footer' ); ?>
