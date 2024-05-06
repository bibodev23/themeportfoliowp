<section id="avis" class="avis">
    <h3 class="title element-animation"><span>Témoignages</span></h3>
    <div class="container-avis container">
        <div class="liste-avis">
            <?php
            $args = array(
                'post_type' => 'avis',
                'posts_per_page' => -1,
                'order' => 'ASC',
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
                    $avis_id = get_the_ID();
                    $avis_content = get_field('commentaire');
                    $avis_autor = get_field('auteur');
            ?>
                    <div class="avis element-animation">

                        <h4><?= $avis_content ?></h4>
                        <p><?= $avis_autor ?></p>
                    </div>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>