<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'carbon_register_fields_bos' );

function carbon_register_fields_bos() {



    Container::make( 'term_meta', 'Category Properties' )
        ->where( 'term_taxonomy', '=', 'helpcenter_category' )
        ->add_fields( array(
            Field::make( 'text', 'term_order' )
                ->set_attribute( 'type', 'number' )
                ->set_attribute( 'min', '1' )
                ->set_default_value( '1' ),
               Field::make( 'rich_text', 'term_content', __( 'Content' ) ),
        ) );

    Container::make( 'term_meta', 'Category Properties' )
        ->where( 'term_taxonomy', '=', 'product_cat' )
        ->add_fields( array(
            Field::make( 'text', 'get_top_cat', __( 'Category popularity' ) ),
            Field::make( 'association', 'cat_get_top_products', __( 'Top products' ) )
                ->set_types( array(
                    array(
                        'type'      => 'post',
                        'post_type' => 'product',
                    )
                ) ),
            Field::make( 'association', 'cat_get_top_cats', __( 'Top categories' ) )
                ->set_types( array(
                    array(
                        'type'      => 'term',
                        'taxonomy'  => 'product_cat',
                    )
                ) )
        ) );

    Container::make('user_meta', 'Log')
        ->add_fields( array(
            Field::make( 'text', 'user_log', __( 'Log' ) ),
        ) );

	Container::make( 'post_meta', 'Tracking' )
			 ->where( 'post_type', '=', 'shop_order' )
			 ->add_fields( array(
				 Field::make( 'text', 'track_id', __( 'Track ID' ) ),
			 ) );

	Container::make( 'theme_options', __( 'API' ) )
			 ->set_page_parent( 'options-general.php' )
			 ->add_fields( array(
				 Field::make( 'text', 'trackingmore_api_key', __( 'Trackingmore API Key' ) ),
			 ) );
}