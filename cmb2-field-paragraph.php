<?php
function cmb2_render_callback_for_paragraph( $field, $escaped_value, $object_id, $object_type, $field_type_object ) {
	if ( isset( $field->args['title'] ) OR  isset( $field->args['desc'] ) ) {
		print( '<div' );

		if ( isset( $field->args['classes'] ) ) {
			$classes = ( is_array( $field->args['classes'] ) ? implode( ' ', $field->args['classes'] ) : $field->args['classes'] );
			print( " class='$classes'" );
		}
		$style = '';
		if ( isset( $field->args['style'] ) )
			$style .= ( is_array( $field->args['style'] ) ? implode( ' ', $field->args['style'] ) : $field->args['style'] );
		if ( isset( $field->args['float'] ) )
			$style .= 'float:' . $field->args['float'] . ';';
		if ( isset( $field->args['width'] ) )
			$style .= 'width:' . $field->args['width'] . 'px;';
		if ( $style ) print( " style='$style'" );

		print( '>' );
		if ( isset( $field->args['title'] ) ) {
			print( '<h4>' . $field->args['title'] . '</h4>');
		}
		if ( isset( $field->args['desc'] ) ) {
			print( '<p>' . $field->args['desc'] . '</p>' );
		}
		print( '</div>' );
	}
}
add_action( 'cmb2_render_paragraph', 'cmb2_render_callback_for_paragraph', 10, 5 );

function cb2_paragraph_enqueue_scripts() {
	wp_enqueue_style(  'cmb2-paragraph', plugins_url( 'assets/css/style.css', __FILE__ ) );
}
add_action( 'init', 'cb2_paragraph_enqueue_scripts' );
