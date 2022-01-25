<?php if(isset($args['terms']) && $args['terms']){ ?>
<div class = "right-side-head">
    <div class = "acordeon-menu menu">
        <ul class = "menu__list">
            <?php foreach ($args['terms'] as $t){ ?>
                <li class = "has-sub">
                    <a data-type="taxonomy" data-id="<?php echo $t->term_id ?>" href="#"  class="hc_ajax_load_content" >
                        <div class = "point-header-menu"></div>
                        <?php echo $t->name ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
<?php }  ?>



<?php  if(isset($args['post_arg']) && $args['post_arg'] && !(isset($args['terms']) && $args['terms'])){ ?>
    <div class = "right-side-head">
        <div class = "acordeon-menu menu">
        <?php $loop = new WP_Query( $args['post_arg'] ); ?>
        <?php if ( $loop->have_posts() ) { ?>
            <ul class = "menu__list">
                <?php while ($loop->have_posts()){ $loop->the_post(); ?>
                    <li class = "has-sub"> <?php // hc_ajax_load_content ?>
                        <a data-type="post" data-id="<?php echo $post->ID ?>" href="#"  class="" >
                            <div class = "point-header-menu"></div>
                            <?php echo $post->post_title ?>
                        </a>
                        <div class = "sub-menu">
                            <div class="sub-menu-item">
                            <?php echo $post->post_content ?>
                            </div>
                        </div>
                    </li>
                <?php }  ?>
            </ul>
        <?php } ?>
        <?php
            $big = 999999999; // need an unlikely integer
            $current_page = $args['post_arg']['paged']??1;

            $add_args = [] ;
            if(isset($args['post']) && $args['post'] ){ $add_args ['post_id'] = $args['post']->post_ID ; }
            if(isset($args['term_id']) && $args['term_id'] ){ $add_args ['term_id'] = $args['term_id'] ; }
        ?>
        <div class="pagination_help_center">
            <?php
            echo paginate_links( array(

                //'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                'base' => str_replace( $big, '%#%', home_url('/help-center/?paged='.$big) ),
                'format' => '?paged=%#%',
                'prev_text'          => __( '<' ),
                'next_text'          => __( '>' ),
                'current' => max( 1, $current_page ),
                'total' => $loop->max_num_pages ,
                'add_args'           => $add_args,
            ) );
            ?>
        </div>
    <?php wp_reset_postdata();  ?>
<?php }  ?>


<?php if(isset($args['post']) && $args['post']){  ?>
    <div class = "right-side-head">
        <span><?php echo  $args['post']->post_title ?></span>
    </div>
    <div class = "right-side-body">
        <?php echo $args['post']->post_content ?>
    </div>
<?php } ?>

<?php if(isset($args['term_content']) && $args['term_content']){  ?>
    <div class = "flexe-blocks">
        <div class = "form f-b">
            <form action class = "contact-form">
                <span class = "contact-form-heading">
                    Contact Us: 24/7 Fast Email Support
                </span>
                <input type = "text" class = "input" placeholder = "Full Name*">
                <input type = "email" class = "input" placeholder = "Email Address*">
                <input type = "text" class = "input" placeholder = "Order Number">
                <input type = "text" class = "input" placeholder = "Subject">
                <textarea class = "textarea" placeholder = "Message*"></textarea>

                <div class = "upload-file">
                    <strong class = "upload-file-heading">Attach File</strong>
                    <span class = "upload-file-slog">Upload up to 5 files. Max total attachment size: 20MB</span>
                    <div class = "upload-file-dropzone">
                        <div class = "fallback dropzone dz-clickable" id = "my-awesome-dropzone">
                            <div class = "dz-default dz-message">
                                <div class = "info-content">
                                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/file.svg">
                                    <span>
                                        <span class = "green-span">Add file</span>
                                        or drag file here
                                    </span>
                                </div>
                            </div>
                            <input name = "file" type = "file" multiple>
                        </div>
                    </div>
                    <div class = "action-form">
                        <a class = "btn-white" href = "#">Cancel</a>
                        <button type = "submit" class = "btn-white">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
        <div class = "info-blocks f-b">
            <div class = "double-blocks">
                <div class = "block b1">
                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/mail-icon.svg" alt = "mail" class = "icon-block">
                    <span>Email Us</span>
                    <p>Reply within 24 hours except public holidays.
                    </p>
                    <div class = "action">
                        <a href = "#" class = "btn-white">Email Us</a>
                    </div>
                </div>
                <div class = "block b2">
                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/headphones-icon.svg" alt = "headphones" class = "icon-block">
                    <span>Live Chat</span>
                    <p>R24/7 online customer service.</p>
                    <div class = "action">
                        <a href = "#" class = "btn-white">Start Live Chat</a>
                    </div>
                </div>
                <div class = "recomended-block">
                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/recomended.svg">
                </div>
            </div>
            <div class = "double-blocks">
                <div class = "block b3">
                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/messanger-icon.svg" alt = "messanger" class = "icon-block">
                    <span>Facebook Messanger</span>
                    <p>Get a fast reply to your questions!</p>
                    <div class = "action">
                        <a href = "#" class = "btn-white">Messenger Us</a>
                    </div>
                </div>
                <div class = "block b4">
                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/cellphone-icon.svg" alt = "cellphone" class = "icon-block">
                    <span>Call Us</span>
                    <p>001 3235700368</p>
                    <div class = "action">
                        <a href = "#" class = "action-info">
                            Office time: Mon. - Sat.
                            <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/info-circle.svg" alt = "info">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

