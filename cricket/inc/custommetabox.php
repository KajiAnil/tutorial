<?php 
add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
function cmb_sample_metaboxes( array $meta_boxes ) {


// Check Box Test
	$check_option	= array( 
		array( 
		'id'      => 'type-radio-button', 
		'type'    => 'radio', 
		'options' => array( 
			'option-1' => 'Custom Post Type 1', 
			'option-2' => 'Custom Post Type 2'
		),
	),
	);
	$meta_boxes[] = array(
		'title' => 'Choose the Appropriate Custom Field', 
		'pages'    => array('post','page','latestUpdate_slider','demo'),
		'hide_on'  => array( 'id' => array( 259, 123 ) ),
		'context'=> 'normal',
		'fields' => $check_option 
	);



// Custom Meta Field
$result= 
	array(
		array(
			'id'=>'cp_1',
			'type'=>'group', 
			'repeatable'=>true,

			'fields'=> array(
				array(
            'id'   => 'field-title',
            'name' => 'Title',
            'type' => 'text',
        ),

        /**
         * Location Field.
         */
        array(
            'id'   => 'read_more',
            'name' => 'Button ',
            'type' => 'text',
        ),

        /**
         * File Image Upload Field.
         */
        array(
            'id'         => 'field-image',
            'name'       => 'Image upload field',
            'type'       => 'image',
            'repeatable' => true,
            'size'       => 'thumbnail', // Optional. Registered media size to display.
            'show_size'  => true,        // Optional. Whether to show the image dimensions underneath image itself.
        ),
			),	
		),

	);
    $meta_boxes[] = array(
        'title'  => 'Custom Post Type 1',
        'pages'    => array('post','page','latestUpdate_slider','demo'),
        'fields' => $result,
    );

	

// About Us Details
	$slider_option= 
	array(
		array(
			'id'=>'cp_2',
			'type'=>'group', 
			'repeatable'=>true,

			'fields'=> array(
				array( 
					'id' => 'name',
					'name' => 'Name',
					'type' => 'text'
				),
				array( 
					'id' => 'position',
					'name' => 'Position',
					'type' => 'text'
				),
				array( 
					'id'   => 'desc', 
					'name' => 'Content', 
					'type' => 'textarea',
				),
				array( 
					'id' => 'email',
					'name' => 'E-mail',
					'type' => 'text'
				),	
			array(
            'id'         => 'image',
            'name'       => 'Image upload field',
            'type'       => 'image',
            'repeatable' => true,
            'size'       => 'thumbnail', // Optional. Registered media size to display.
            'show_size'  => true,        // Optional. Whether to show the image dimensions underneath image itself.
        ),
			),	
		),

	);
	$meta_boxes[] = array(
		//'id'=>'',
		'title' => 'Custom Post Type 2', 
		'pages'    => array('post','page','latestUpdate_slider','demo'),
		'context'=> 'normal',
		'fields' => $slider_option 
	);


// Custom Meta Field
$player_info= 
	array(
		array(
			'id'=>'player_info',
			'type'=>'group', 
			'repeatable'=>true,

			'fields'=> array(
				array(
            'id'   => 'player-name',
            'name' => 'Name of Player',
            'type' => 'text',
        ),

        /**
         * Country Field.
         */
        array(
            'id'   => 'player_nation',
            'name' => 'Country ',
            'type' => 'text',
        ),

        /**
         * Players Description.
         */
        array( 
					'id'   => 'player_desc', 
					'name' => 'Description of the player', 
					'type' => 'textarea',
				),

        /**
         * File Image Upload Field.
         */
        array(
            'id'         => 'player_image',
            'name'       => ' Upload the Player Image ',
            'type'       => 'image',
        ),
			),	
		),

	);
    $meta_boxes[] = array(
        'title'  => "Player's Information",
        'pages'    => 'page',
		'show_on'  => array( 'id' => array( 259 ) ),
        'fields' => $player_info,
    );


	// Meta field for National Player Page
	$national_player= array(
		array(
			'id'=>'national_player',
			'type'=>'group', 
			'repeatable'=>true,
			'fields'=>
				array(

					/**
			         * Name of player .
			         */
					array(
		            'id'   => 'name',
		            'name' => 'Name of Player',
		            'type' => 'text',
		            'cols' => 6,
			        ),

					/**
			         * General Information Field.
			         */
					array(
		            'id'   => 'table_1',
		            'name' => 'General Information',
		            'type' => 'text',
		            'cols' => 6,
			        ),

			        /**
			         * About the player .
			         */
					array(
		            'id'   => 'table_4',
		            'name' => "Player's Descriptions",
		            'type' => 'text',
		            'cols' => 12,
			        ),

			        
					/**
			         * Batting Statistics
			         */
					array(
		            'id'   => 'table_2',
		            'name' => 'Batting Statistics',
		            'type' => 'text',
		            'cols' => 6,
			        ),

			        /**
			         * File Image Upload Field.
			         */
					array(
		            'id'   => 'table_3',
		            'name' => 'Bowling Statistics',
		            'type' => 'text',
		            'cols' => 6,
			        ),

			        /**
			         * File Image Upload Field.
			         */
			        array(
			            'id'         => 'image',
			            'name'       => ' Upload the National Image ',
			            'type'       => 'image',
			            'cols' => 12,
			        ),

				),
		),
	);
    $meta_boxes[] = array(
        'title'  => "National Player's Information",
        'pages'    => 'page',
		'show_on'  => array( 'id' => array(27) ),
        'fields' => $national_player,
    );
	return $meta_boxes;

}
