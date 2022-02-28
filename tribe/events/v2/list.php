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

<footer class="site-footer">
    <div class="layout-inner">
        <div class="site-totop">
            <a href="#primary" title="Jump to top">
                <svg width="45" height="66" viewBox="0 0 45 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.79564 24.9291C3.07939 26.2128 5.15314 26.2128 6.43689 24.9291L19.2086 12.1903V62.1249C19.2086 63.9353 20.6898 65.4166 22.5002 65.4166C24.3106 65.4166 25.7919 63.9353 25.7919 62.1249V12.1903L38.5635 24.962C38.8683 25.2668 39.2301 25.5085 39.6283 25.6734C40.0264 25.8384 40.4532 25.9233 40.8842 25.9233C41.3152 25.9233 41.7419 25.8384 42.1401 25.6734C42.5383 25.5085 42.9001 25.2668 43.2048 24.962C43.5095 24.6573 43.7513 24.2955 43.9162 23.8973C44.0811 23.4991 44.166 23.0724 44.166 22.6414C44.166 22.2104 44.0811 21.7837 43.9162 21.3855C43.7513 20.9873 43.5095 20.6255 43.2048 20.3208L24.8044 1.88743C24.4999 1.58228 24.1381 1.34019 23.7399 1.17501C23.3417 1.00983 22.9149 0.924805 22.4838 0.924805C22.0527 0.924805 21.6258 1.00983 21.2276 1.17501C20.8294 1.34019 20.4677 1.58228 20.1631 1.88743L1.79564 20.2878C1.49049 20.5924 1.24839 20.9541 1.08321 21.3523C0.918032 21.7505 0.833008 22.1774 0.833008 22.6085C0.833008 23.0396 0.918032 23.4664 1.08321 23.8647C1.24839 24.2629 1.49049 24.6246 1.79564 24.9291Z" fill="white"/>
                </svg>
            </a>
        </div>
        <?php
        get_sidebar();
        get_footer(); ?>
    </div>
</footer>
