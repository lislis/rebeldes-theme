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

$header_classes = [ 'tribe-events-header' ];
if ( empty( $disable_event_search ) ) {
    $header_classes[] = 'tribe-events-header--has-event-search';
}

?>
<div
    <?php tribe_classes( $container_classes ); ?>
    data-js="tribe-events-view"
	     data-view-rest-nonce="<?php echo esc_attr( $rest_nonce ); ?>"
	     data-view-rest-url="<?php echo esc_url( $rest_url ); ?>"
	     data-view-rest-method="<?php echo esc_attr( $rest_method ); ?>"
	     data-view-manage-url="<?php echo esc_attr( $should_manage_url ); ?>"
	     <?php foreach ( $container_data as $key => $value ) : ?>
	data-view-<?php echo esc_attr( $key ) ?>="<?php echo esc_attr( $value ) ?>"
	     <?php endforeach; ?>
    <?php if ( ! empty( $breakpoint_pointer ) ) : ?>
	data-view-breakpoint-pointer="<?php echo esc_attr( $breakpoint_pointer ); ?>"
    <?php endif; ?>
>
    <div class="">
        <h1><?php esc_html_e('Calendar', 'rebeldes'); ?></h1>

	<?php $this->template( 'components/loader', [ 'text' => __( 'Loading...', 'the-events-calendar' ) ] ); ?>

	<div class="">
            <ul>
	    <?php foreach ( $events as $event ) : ?>
		<?php $this->setup_postdata( $event ); ?>

		<?php $this->template( 'list/event', [ 'event' => $event ] ); ?>

	    <?php endforeach; ?>
            </ul>
	</div>
        <div>
            <h2><?php esc_html_e('Past events', 'rebeldes'); ?></h2>

            <?php
            //$today = new date();
            $past_events = tribe_get_events(array('start_date' => '2022-02-01 00:00',
                                                  'end_date' => '2022-03-01 00:00')); ?>

            <?php //print_r($past_events) ?>
            <ul>
	    <?php foreach ( $past_events as $event ) : ?>
		<?php $this->setup_postdata( $event ); ?>
                <li>
                    <?php //print_r($event) ?>
                    <h3><?php echo $event->post_title; ?></h3>
                    <p><?php echo $event->event_date; ?></p>
		    <?php //$this->template( 'list/event', [ 'event' => $event ] ); ?>
                </li>
	    <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
