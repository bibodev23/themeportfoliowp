<section id="collaboration" class="collaboration">
    <h3 class="title element-animation">
        <span>4 étapes pour</span> <span>un projet réussi</span>
    </h3>

    <div class="container-collaboration container">
        <div class="liste-collaboration">
            <?php
            $args = array(
                'post_type' => 'etapes_collaboration',
                'posts_per_page' => -1,
                'order' => 'ASC',
            );
            $my_query = new WP_Query($args);

            if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
                    $post_id = get_the_ID();
                    $post_title = get_field('titre');
                    $post_description = get_field('description');
            ?>

                    <div class="etape element-animation">
                        <div class="etape-img">
                            <?php
                            $icon = "";
                            switch ($post_title) {
                                case 'Échange':
                                    $icon = "comments";
                                    break;

                                case "Accord":
                                    $icon = "handshake-simple";
                                    break;

                                case "Développement":
                                    $icon = "terminal";
                                    break;
                                case "Suivi":
                                    $icon = "road";
                                    break;
                            }
                            ?>
                            <i class="fa-solid fa-<?= $icon ?>"></i>
                        </div>
                        <div class="etape-title-description">
                            <div class="etape-title">
                                <h4><?= $post_title ?></h4>
                            </div>
                            <div class="etape-description">
                                <p><?= $post_description ?></p>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>


</section>