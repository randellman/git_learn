<?php if($args['menus']){ ?>
    <aside class="sidebar">
        <div class="acordeon-menu menu">
            <ul class="menu__list left_ajax_menu">
                <?php foreach ($args['menus'] as $ms){
                    $term_content = carbon_get_term_meta( $ms->term_id, 'term_content', $type = null );
                ?>
                    <li class="has-sub">
                        <a data-type="taxonomy" class="<?php echo $term_content?'link':'hc_ajax_load_content' ?>" data-id="<?php echo $ms->term_id ?>" href="<?php echo home_url('/help-center/?term_id='.$ms->term_id); ?>">
                            <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/arrow-bottom-black.svg">
                            <?php echo $ms->name ?>
                        </a>
                        <?php if(isset($ms->children) && $ms->children ){ ?>
                            <ul class="sub-menu" style="">
                                <?php foreach ($ms->children as $ch){ ?>
                                <li>
                                    <label class="module__check">
                                        <a  href="<?php echo home_url('/help-center/?term_id='.$ch->term_id); ?>" data-type="taxonomy" class="hc_ajax_load_content" data-id="<?php echo $ch->term_id ?>" >
                                            <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/arrow-bottom-black.svg">
                                            <?php echo $ch->name ?>
                                        </a>
                                    </label>
                                </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </aside>
<?php } ?>







<?php if($args['menus'] && false){ ?>
    <ul class="left_ajax_menu">
        <?php foreach ($args['menus'] as $ms){
            $term_content = carbon_get_term_meta( $ms->term_id, 'term_content', $type = null );
            ?>
            <li>
                <a data-type="taxonomy"  href="<?php echo home_url('/help-center/?term_id='.$ms->term_id); ?>" class="<?php echo $term_content?'':'hc_ajax_load_content' ?>" data-id="<?php echo $ms->term_id ?>" ><?php echo $ms->name ?></a>
                <?php if(isset($ms->children) && $ms->children ){ ?>
                    <ul>
                        <?php foreach ($ms->children as $ch){ ?>
                            <a  href="<?php echo home_url('/help-center/?term_id='.$ch->term_id); ?>" data-type="taxonomy" class="hc_ajax_load_content" data-id="<?php echo $ch->term_id ?>" href="#"><?php echo $ch->name ?></a>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
        <?php } ?>
    </ul>
<?php } ?>
