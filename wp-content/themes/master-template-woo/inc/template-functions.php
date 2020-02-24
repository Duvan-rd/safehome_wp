<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Master_Template_Woo
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function master_template_woo_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'master_template_woo_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function master_template_woo_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'master_template_woo_pingback_header' );


//CLASSES BUTTONS
function add_class_button($thebutton){

	global $geniorama;

	//Color Button

	switch ($geniorama['style-color-'.$thebutton.'']) {
		case 1:
			$class_button_color = 'principal-button';
			break;
		case 2:
			$class_button_color = 'secondary-button';
			break;
		case 3:
			$class_button_color = 'aux-button';
			break;
	}

	//Size Button

	switch ($geniorama['size-'.$thebutton.'']) {
		case 1:
			$class_button_size = 'normal-button';
			break;
		case 2:
			$class_button_size = 'large-button';
			break;
		case 3:
			$class_button_size = 'small-button';
			break;
	}


	//Type Button
	switch ($geniorama['select-button-type']) {
		case 1:
			$class_button = "link-rounded";
			break;
		case 2:
			$class_button = "link-half-rounded";
			break;
		case 3:
			$class_button = "link-squared";
			break;
	}

	$classes_button = $class_button_color . " " . $class_button_size . " " . $class_button;

	echo $classes_button;
}


function get_class_button($thebutton){

	global $geniorama;

	//Color Button

	switch ($geniorama['style-color-'.$thebutton.'']) {
		case 1:
			$class_button_color = 'principal-button';
			break;
		case 2:
			$class_button_color = 'secondary-button';
			break;
		case 3:
			$class_button_color = 'aux-button';
			break;
	}

	//Size Button

	switch ($geniorama['size-'.$thebutton.'']) {
		case 1:
			$class_button_size = 'normal-button';
			break;
		case 2:
			$class_button_size = 'large-button';
			break;
		case 3:
			$class_button_size = 'small-button';
			break;
	}


	//Type Button
	switch ($geniorama['select-button-type']) {
		case 1:
			$class_button = "link-rounded";
			break;
		case 2:
			$class_button = "link-half-rounded";
			break;
		case 3:
			$class_button = "link-squared";
			break;
	}

	$classes_button = $class_button_color . " " . $class_button_size . " " . $class_button;

	return $classes_button;
}


function get_alignment_classes($element){
	global $geniorama;

	switch ($geniorama['style-alignment-'.$element.'']) {
		case 1:
			$class_aligment = "alignment-center";
			break;
		case 2:
			$class_aligment = "alignment-right";
			break;
		case 3:
			$class_aligment = "alignment-left";
			break;
		
	}

	return $class_aligment;
}

function alignment_classes($element){
	global $geniorama;

	switch ($geniorama['style-alignment-'.$element.'']) {
		case 1:
			$class_aligment = "alignment-center";
			break;
		case 2:
			$class_aligment = "alignment-right";
			break;
		case 3:
			$class_aligment = "alignment-left";
			break;
		
	}
	echo $class_aligment;
}


/*========================= COUNTER =========================*/
function counter_master_func( $atts ) {
	$counter = '';
	// Attributes
	$atts = shortcode_atts(
		array(
			'icon' => '',
			'counter' => '',
			'name' => '',
			'id-counter' => '',
		),
		$atts,
		'counter_master'
	);

	$counter .= '<div id='.$atts['id-counter'].' class="container-counter text-center">
					<div class="m-auto circle d-flex flex-column alig-items-center justify-content-center text-center"> 
						<i class="fas '.$atts['icon'].'"></i>
					</div>    
						<h3 class="counter">'.$atts['counter'].'</h3>
						<h2 class="name-counter">'.$atts['name'].'</h2>';

	$counter .='</div>';
	return $counter;
}

add_shortcode( 'counter_master', 'counter_master_func' );


/*========================= SUB HEADER PAGES =========================*/

function add_banner_subheader(){
	global $geniorama;

        if (get_post_type() == 'page') {
            if (get_field('field_5e019b2ef3c6a')) {
                //Banner páginas
                $urlImagen = get_field('field_5e019b2ef3c6a');
            } else {
                $urlImagen = $geniorama['opt-content-image-subheaders']['url'];
            }
         } elseif (get_post_type() == 'product') {
			if ($geniorama['woo-select-product-subheader'] == '1') {
                //Banner productos
                $urlImagen = $geniorama['woo-img-product']['url'];
            } else {
                $thumbID = get_post_thumbnail_id( $post->ID );
                $urlImagen = wp_get_attachment_url( $thumbID );
            }
		 } else {
			if (get_post_thumbnail_id( $post->ID )) {
				$thumbID = get_post_thumbnail_id( $post->ID );
				$urlImagen = wp_get_attachment_url( $thumbID );
			} else {
				$urlImagen = $geniorama['opt-content-image-subheaders']['url'];
			}

		 }
		 
	return $urlImagen;
}

function add_class_subheader($tipo){
	global $geniorama;
	if ($tipo == 'alignment') {
		if ($geniorama['opt-content-ha-subheaders'] == '1') {
			$alHorizontal = "text-left";
		} elseif ($geniorama['opt-content-ha-subheaders'] == '2'){
			$alHorizontal = "text-right";
		} elseif ($geniorama['opt-content-ha-subheaders'] == '3'){
			$alHorizontal = "text-center";
		}

		return $alHorizontal;

	} elseif ($tipo == 'banner') {
		if ($geniorama['opt-bg-subheaders'] === '1') {
			$classBanner = 'opacity-layer';
		} else{
			$classBanner = 'banner-solid';
		}

		return $classBanner;
	}
}

function sanitizePhone($phone_number){
	$tel = str_replace(array('/' , '(' , ')' , '-' , ' '), '', $phone_number);
	return $tel;
}


//ACF

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5e0f670865158',
		'title' => 'Opciones Blog',
		'fields' => array(
			array(
				'key' => 'field_5e0f670f0f320',
				'label' => 'Sibedar',
				'name' => 'sibedar',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 1,
				'ui' => 0,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => 'field_5e0f69707844b',
				'label' => 'Comentarios',
				'name' => 'comentarios',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 1,
				'ui' => 0,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => 'field_5e0f7f166bbf1',
				'label' => 'Enlaces para compartir',
				'name' => 'enlaces_para_compartir',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 0,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	acf_add_local_field_group(array(
		'key' => 'group_5e019839a627d',
		'title' => 'Opciones de página',
		'fields' => array(
			array(
				'key' => 'field_5e019842fdcc6',
				'label' => 'Subheader',
				'name' => 'subheader',
				'type' => 'true_false',
				'instructions' => 'Para cambiar el aspecto del Subheader dirígete a "Opciones del tema > Body > Subheaders"',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 0,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => 'field_5e019b2ef3c6a',
				'label' => 'Imagen de Fondo',
				'name' => 'imagen_de_fondo',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_5e019842fdcc6',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	acf_add_local_field_group(array(
		'key' => 'group_5e123249778a4',
		'title' => 'Opciones Equipo',
		'fields' => array(
			array(
				'key' => 'field_5e12325565125',
				'label' => 'Cargo',
				'name' => 'cargo',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5e12329465126',
				'label' => 'Url Facebook',
				'name' => 'url_facebook',
				'type' => 'url',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'team_members',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	endif;