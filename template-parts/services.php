<section id="services" class="mes-services">
<h3 class="title element-animation">
    <span>Mes </span> <span>services</span>
</h3>
<div class="container-services container">
    <div class="liste-services">
    <?php
		$args = array(
			'post_type' => 'services',
			'posts_per_page' => -1,
            'order' => 'ASC',
		);
		$my_query = new WP_Query($args);

		if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
		$post_id = get_the_ID();
        $post_title = get_field('titre');
        $post_description = get_field('description'); 		
		?>

        <div class="element-animation service ">
            <div class="service-img">
                <?php
                $icon = "";
                switch ($post_title) {
                    case 'Création de site':
                        $icon = "screwdriver-wrench";
                        break;
                    
                    case "Maintenance":
                        $icon = "gear";
                        break;
                    
                    case "SEO":
                        $icon = "chart-line";
                        break;
                }
                ?>
                <i class="fa-solid fa-<?= $icon ?>"></i>
            </div>
            <div class="service-title">
                <h4><?= $post_title ?></h4>
            </div>
            <div class="service-description">
                <p><?= $post_description ?></p>
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
