<div class="col-md-3">
    <ul class="list-group sidebar-nav" id="sidebar-nav">

        <li class="list-group-item list-toggle">
            <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-technical-ceramic">Техническая керамика</a>
            <ul id="collapse-technical-ceramic" class="collapse">

                <?php $args = array(
                    'category'         => '',
                    'category_name'    => 'Техническая керамика',
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'include'          => '',
                    'exclude'          => '',
                    'meta_key'         => '',
                    'meta_value'       => '',
                    'post_type'        => 'post',
                    'post_mime_type'   => '',
                    'post_parent'      => '',
                    'author'     => '',
                    'post_status'      => 'publish',
                    'suppress_filters' => true 
                );
                $all_posts = wp_get_recent_posts( $args ); 
                foreach ($all_posts as $single_post) {
                ?>
                    <li><a href="<?php echo get_permalink( $single_post["ID"] ); ?>"><?php echo $single_post["post_title"]; ?></a></li>
                <?php } ?>

            </ul>
        </li>

        <li class="list-group-item list-toggle">
            <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-fireresist-ceramic">Огнеупорная керамика</a>
            <ul id="collapse-fireresist-ceramic" class="collapse">

                <?php $args = array(
                    'numberposts'      => 500,
                    'category'         => '',
                    'category_name'    => 'Огнеупорная керамика',
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'include'          => '',
                    'exclude'          => '',
                    'meta_key'         => '',
                    'meta_value'       => '',
                    'post_type'        => 'post',
                    'post_mime_type'   => '',
                    'post_parent'      => '',
                    'author'     => '',
                    'post_status'      => 'publish',
                    'suppress_filters' => true 
                );
                $all_posts = wp_get_recent_posts( $args ); 
                foreach ($all_posts as $single_post) {
                ?>
                    <li><a href="<?php echo get_permalink( $single_post["ID"] ); ?>"><?php echo $single_post["post_title"]; ?></a></li>
                <?php } ?>

            </ul>
        </li>


    </ul>
</div>  