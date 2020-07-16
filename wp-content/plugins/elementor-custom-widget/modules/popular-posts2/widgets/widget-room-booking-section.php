<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Room_Booking_Section extends Widget_Base {

	public function get_name() {

		return 'room-booking-section';
	}

	public function get_title() {
		return __( 'Kamer Cubilis Beschikbaarheid', 'elementor-custom-widget' );
	}

	public function get_icon() {
		return 'fa fa-calendar';
	}

	protected function _register_controls() {


		/*
		 * start control section and followup with adding control fields.
		 * end control after all control field and repeat if you need other control section respectively.
		*/

		/*
		$this->start_controls_section(
			'section_layout',
			[
				'label' => esc_html__( 'Layout', 'elementor-custom-widget' ),
			]
		);
		$this->add_control(
			'sample_text',
			[
				'label' => __( 'Primary Text', 'elementor-custom-widget' ),
				'type' => Controls_Manager::TEXT,
				'default' => '',
				'title' => __( 'Enter some text', 'elementor-custom-widget' ),
			]
		);
		$this->end_controls_section();
		*/

		$this->start_controls_section(
			'section_query',
			[
				'label' => esc_html__( 'Basic', 'elementor-custom-widget' ),
			]
		);

		$this->add_control(
			'header',
			[
				'label' => __( 'Header tekst', 'elementor-custom-widget' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => 'Boek deze kamer',
			]
		);

		$this->add_control(
			'cubilis_room_id',
			[
				'label' => __( 'Cubilis kamer id', 'elementor-custom-widget' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => '123456',
			]
		);

		$this->add_control(
			'arrival',
			[
				'label' => __( 'Aankomst', 'elementor-custom-widget' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'Aankomst',
			]
		);

		$this->add_control(
			'departure',
			[
				'label' => __( 'Vertrek', 'elementor-custom-widget' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'Vertrek',
			]
		);

		$this->add_control(
			'submit',
			[
				'label' => __( 'Knop', 'elementor-custom-widget' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'Bekijk Beschikbaarheid',
			]
		);

		$this->add_control(
			'extra_link',
			[
				'label' => __( 'Algemene Beschikbaarheid link tekst', 'elementor-custom-widget' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'https://...',
			]
		);

		$this->end_controls_section();



	}

	protected function render( $instance = [] ) {
		// get our input from the widget settings.
		$settings = $this->get_settings_for_display();
		$header = $settings['header'];
		$cubilis_room_id = $settings['cubilis_room_id'];
		$arrival = $settings['arrival'];
		$departure = $settings['departure'];
		$submit = $settings['submit'];
		$extra_link = $settings['extra_link'];
      	$lang = explode('_', pll_current_language('locale'))[0];
		?>

		<div class="room-booking-section">
			<h4><?php echo esc_html($header); ?></h4>
			<form action="https://reservations.cubilis.eu/b-and-b-de-vossenbarm-snellegem/Rooms/Select" class="homepage-booking-form">
				<div class="field-group">
					<input rel="datepicker" data-alt-field="#arrival_hidden" id="arrival" type="text" placeholder="<?php echo esc_html($arrival); ?>">
					<input rel="datepicker" data-alt-field="#departure_hidden" id="departure" type="text" placeholder="<?php echo esc_html($departure); ?>">
				</div>
				<input type="hidden" value="<?php echo esc_html($lang); ?>" id="language" name="language">
				<input type="hidden" name="room" id="room" value="<?php echo esc_html($cubilis_room_id); ?>">
				<input type="hidden" name="arrival" id="arrival_hidden">
				<input type="hidden" name="departure" id="departure_hidden">
				<input type="submit" name="" value="<?php echo esc_html($submit); ?>">
			</form>

			<a href="https://reservations.cubilis.eu/b-and-b-de-vossenbarm-snellegem/Rooms/Select"><?php echo $extra_link; ?></a>
		</div>

		<?php

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}
\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widget_Room_Booking_Section() );
