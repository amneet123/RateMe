<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg = array(
	'page_builder' => array(
		'title' => esc_html__('Reviews', 'docdirect'),
		'description' => esc_html__('Display Reviews for Different Directory types.', 'docdirect'),
		'tab' => esc_html__('DocDirect', 'docdirect'),
		'popup_size' => 'small' // can be large, medium or small
	)
);