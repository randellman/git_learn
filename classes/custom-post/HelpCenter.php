<?php

class HelpCenter
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new HelpCenter();
        }
        return self::$instance;
    }


    public function __construct()
    {
        $this->helpcenter_taxanomy = 'helpcenter_category';
        $this->helpcenter_post_type = 'helpcenter';
        add_action ('init' , [$this , 'theme_init_create_helpcenter']);
        add_filter( 'terms_clauses', [$this , 'filter_terms_clauses'], 10, 3 );

        add_filter( "manage_edit-{$this->helpcenter_taxanomy}_columns", [$this , 'custom_column_header'], 10);
        add_action( "manage_{$this->helpcenter_taxanomy}_custom_column",  [$this , 'custom_column_content'], 10, 3);

        add_action('wp_ajax_ajax_help_center_load_content' , [$this, 'ajaxHelpCenterLoadContent']);
        add_action('wp_ajax_nopriv_ajax_help_center_load_content' , [$this, 'ajaxHelpCenterLoadContent']);

    }

    /**
     * @return string
     */
    public function custom_column_content( $value, $column_name, $tax_id )
    {
        switch( $column_name ) {
            case 'order':
                // your code here
                $value = get_term_meta( $tax_id, '_term_order', true );
                $value = $value?$value:'' ;
                break;
            default:
                break;
        }

        return $value; // this is the display value
    }

    public function custom_column_header( $columns ){
        $columns['order'] = __('Order', 'best-of-shop');
        return $columns;
    }

    public function theme_init_create_helpcenter()
    {

        register_taxonomy( $this->helpcenter_taxanomy, $this->helpcenter_post_type, [
            'label'                 => '', // определяется параметром $labels->name
            'labels'                => [
                'name'              => __('Categories', 'best-of-shop'),
                'singular_name'     => __('Category', 'best-of-shop'),
                'search_items'      => __('Search Categories', 'best-of-shop'),
                'all_items'         => __('All Categories', 'best-of-shop'),
                'view_item '        => __('View Category', 'best-of-shop'),
                'parent_item'       => __('Parent Category', 'best-of-shop'),
                'parent_item_colon' => __('Parent Category:', 'best-of-shop'),
                'edit_item'         => __('Edit Category', 'best-of-shop'),
                'update_item'       => __('Update Category', 'best-of-shop'),
                'add_new_item'      => __('Add New Category', 'best-of-shop'),
                'new_item_name'     => __('New Category Name', 'best-of-shop'),
                'menu_name'         => __('Categories', 'best-of-shop'),
            ],
            'description'           => '', // описание таксономии
            'public'                => true,
            // 'publicly_queryable'    => null, // равен аргументу public
            // 'show_in_nav_menus'     => true, // равен аргументу public
            // 'show_ui'               => true, // равен аргументу public
            // 'show_in_menu'          => true, // равен аргументу show_ui
            // 'show_tagcloud'         => true, // равен аргументу show_ui
            // 'show_in_quick_edit'    => null, // равен аргументу show_ui
            'hierarchical'          => true,
            'rewrite'               => true,
            //'query_var'             => $taxonomy, // название параметра запроса
            'capabilities'          => array(),
            'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
            'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
            'show_in_rest'          => null, // добавить в REST API
            'rest_base'             => null, // $taxonomy
            // '_builtin'              => false,
            //'update_count_callback' => '_update_post_term_count',
        ]);

        register_post_type( $this->helpcenter_post_type, [
            'label'  => null,
            'labels' => [
                'name'               => __('Help Center', 'best-of-shop'), // основное название для типа записи
                'singular_name'      => __('Help Center', 'best-of-shop'), // название для одной записи этого типа
                'add_new'            => __('Add new', 'best-of-shop'), // для добавления новой записи
                'add_new_item'       => __('Add new', 'best-of-shop'), // заголовка у вновь создаваемой записи в админ-панели.
                'edit_item'          => __('Edit', 'best-of-shop'), // для редактирования типа записи
                'new_item'           => __('New', 'best-of-shop'), // текст новой записи
                'view_item'          => __('View', 'best-of-shop'), // для просмотра записи этого типа.
                'search_items'       => __('Search', 'best-of-shop'), // для поиска по этим типам записи
                'not_found'          => __('Not found', 'best-of-shop'), // если в результате поиска ничего не было найдено
                'not_found_in_trash' => __('Not found', 'best-of-shop'), // если не было найдено в корзине
                'parent_item_colon'  => '', // для родителей (у древовидных типов)
                'menu_name'          => __('Help Center', 'best-of-shop'), // название меню
            ],
            'description'         => '',
            'public'              => false,
            'publicly_queryable'  => true, // зависит от public
            'exclude_from_search' => false, // зависит от public
            'show_ui'             => true, // зависит от public
            'show_in_nav_menus'   => true, // зависит от public
            'show_in_menu'        => true, // показывать ли в меню адмнки
            // 'show_in_admin_bar'   => null, // зависит от show_in_menu
            'show_in_rest'        => null, // добавить в REST API. C WP 4.7
            'rest_base'           => null, // $post_type. C WP 4.7
            'menu_position'       => null,
            'menu_icon'           => 'dashicons-editor-help',
            //'capability_type'   => 'post',
            //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
            //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
            'hierarchical'        => false,
            'supports'            => [ 'title', 'editor'], // , 'thumbnail'  'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies'          => [],
            'has_archive'         =>  'help-center', // false
            'rewrite'             => true,
            'query_var'           => true,
        ] );

    }

    public function filter_terms_clauses( $pieces, $taxonomies, $args )
    {

        global $pagenow, $wpdb;

        // Require ordering
        $orderby = ( isset( $_GET['orderby'] ) ) ? trim( sanitize_text_field( $_GET['orderby'] ) ) : '';
       // if ( empty( $orderby ) ) { return $pieces; }

        // set taxonomy
        $taxonomy = $taxonomies[0];

        // only if current taxonomy or edit page in admin
        if ( !is_admin() || $pagenow !== 'edit-tags.php' || !in_array( $taxonomy, [ $this->helpcenter_taxanomy ] ) ) { return $pieces; }

        // and ordering matches
        //// if ( $orderby === 'sort-order' ) {
        if ( empty( $orderby ) ) {
            $pieces['join']  .= ' INNER JOIN ' . $wpdb->termmeta . ' AS tm ON t.term_id = tm.term_id ';
            $pieces['where'] .= ' AND tm.meta_key = "_term_order"';
            $pieces['orderby']  = ' ORDER BY tm.meta_value ';
        }

        return $pieces;

    }

    public function ajaxHelpCenterLoadContent()
    {
        $data = $_POST;
        $type = $data['type'];
        $paged = (int)$data['paged']??0;
        $id = 0 ;
        if(isset($data['id'])){ $id = (int)$data['id']; }

        $content = '';
        if($type == 'taxonomy'){
            $post_arg = array(
                'post_type' => 'helpcenter',
                'post_status' => 'publish',
                'posts_per_page' => 15,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'helpcenter_category',
                        'field' => 'term_id',
                        'terms' => $id,
                        'include_children' => true
                    )
                )
            );

            if($paged){
                $post_arg['paged'] = $paged;
            }

            $posts = get_posts($post_arg);
            //// $children_terms = get_term_children( $id , 'helpcenter_category' );

            $term_children = get_terms(
                'helpcenter_category',
                array(
                    'parent' => $id,
                )
            );

            $term_content = carbon_get_term_meta( $id, 'term_content', $type = null );


            ob_start();
            get_template_part( 'template-parts/help-center', 'content', ['terms'=>$term_children, 'term_content'=>$term_content ,'post_arg'=>$post_arg , 'term_id'=> $id  , 'posts'=>$posts] );
            $content =  ob_get_clean();

        }else if ($type == 'post'){
            $post = get_post($id);

            ob_start();
            get_template_part( 'template-parts/help-center', 'content', ['post'=>$post] );
            $content =  ob_get_clean();

        }

        wp_send_json(['success'=>true , 'content'=> $content]);

    }

}
new HelpCenter();
