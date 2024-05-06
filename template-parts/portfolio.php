<section id="portfolio" class="portfolio">
    <h3 class="title element-animation"> <span>Mes derniers</span> <span>projets</span></h3>
    <div class="container-projets container">
        <div class="liste-projets">
                <?php
                $args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
                        $post_id = get_the_ID();
                        $post_name = get_field('nom_projet');
                        $post_image = get_field('image_projet');
                        $post_description = get_field('description_projet');
                        $post_link = get_field('lien_projet');
                ?>
                        <div class="projet element-animation">
                            <div class="projet-img">
                                <img class="" src="<?= $post_image['url'] ?>" alt="">
                            </div>
                            <div class="projet-description">
                                <h4><?= $post_name ?></h4>
                                <p><?= $post_description ?></p>
                                <a href="<?= $post_link ?>" target="_blank">Voir le projet</a>
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