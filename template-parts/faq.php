<section id="faq" class="faq">
    <h3 class="title element-animation"><span>Des</span> <span>questions ?</span></h3>
    <div class="container-faq container">
        
        
        <div class="liste-faq gauche element-animation">
        <?php 
        $args = array(
            'post_type' => 'faq',
            'posts_per_page' => -1
        );
        $my_query = new WP_Query($args);
        if($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();
                $faq_id = get_the_ID();
                $faq_question = get_field('question');
                $faq_answer = get_field('reponse');
        ?>
                <div class="faq ">
                    <h4><?= $faq_question ?></h4>
                    <p><?= $faq_answer ?></p>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
        </div>
        <div class="liste-faq background element-animation">
        </div>
        
    </div>
</section>