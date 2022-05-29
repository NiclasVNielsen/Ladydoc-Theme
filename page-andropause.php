<?php 
    get_header();
?>
<!-- Andropause -->
<section class="alt_omHero" id="andropause">
    <h1>
        <span>Alt om:</span><br>
        <?php the_field("side_title")?>
    </h1>
    <img src="<?php echo get_bloginfo('template_url') ?>/images/andropause.png" alt="">
</section>
<section class="alt_om_info">
    <section>
        <div class="wrapper container">
            <article class="col6">
                <h2 style="margin-bottom: 57px">
                    <?php the_field("hvad_er_det_title")?>
                </h2>
                <p>
                    <?php the_field("hvad_er_det_paragraph")?>
                </p>
            </article>
            <figure class="col5 push1">
                <img src="<?php echo get_bloginfo('template_url') ?>/images/running.png" alt="">
            </figure>
        </div>
    </section>
    <section class="altColor">
        <div class="wrapper container">
            <figure class="col5">
                <img src="<?php echo get_bloginfo('template_url') ?>/images/angry.png" alt="">
            </figure>
            <article class="col6 push1 box">
                <h2 style="margin-bottom: 41px">
                    <?php the_field("symptom_title")?>
                </h2>
                <div class="container">
                    <p class="number">
                        1.
                    </p>
                    <p class="text">
                        <?php the_field("symptom_1")?>
                    </p>
                </div>
                <div class="container">
                    <p class="number">
                        2.
                    </p>
                    <p class="text">
                        <?php the_field("symptom_2")?>
                    </p>
                </div>
                <div class="container">
                    <p class="number">
                        3.
                    </p>
                    <p class="text">
                        <?php the_field("symptom_3")?>
                    </p>
                </div>
                <div class="container">
                    <p class="number">
                        4.
                    </p>
                    <p class="text">
                        <?php the_field("symptom_4")?>
                    </p>
                </div>
                <div class="container">
                    <p class="number">
                        5.
                    </p>
                    <p class="text">
                        <?php the_field("symptom_5")?>
                    </p>
                </div>
                <div class="container">
                    <p class="number">
                        6.
                    </p>
                    <p class="text">
                        <?php the_field("symptom_6")?>
                    </p>
                </div>
                <div class="container">
                    <p class="number">
                        7.
                    </p>
                    <p class="text">
                        <?php the_field("symptom_7")?>
                    </p>
                </div>
            </article>
        </div>
    </section>
    <section>
        <div class="wrapper container">
            <article class="col6 box">
                <h2 style="margin-bottom: 50px">
                    <?php the_field("hvad_kan_hjaelpe_title")?>
                </h2>
                <div class="container">
                    <p class="number">
                        1.
                    </p>
                    <p class="text">
                        <?php the_field("hjaelp_1")?>
                    </p>
                </div>
                <div class="container">
                    <p class="number">
                        2.
                    </p>
                    <p class="text">
                        <?php the_field("hjaelp_2")?>
                    </p>
                </div>
                <div class="container">
                    <p class="number">
                        3.
                    </p>
                    <p class="text">
                        <?php the_field("hjaelp_3")?>
                    </p>
                </div>
                <div class="container">
                    <p class="number">
                        4.
                    </p>
                    <p class="text">
                        <?php the_field("hjaelp_4")?>
                    </p>
                </div>
                <div class="container">
                    <p class="number">
                        5.
                    </p>
                    <p class="text">
                        <?php the_field("hjaelp_5")?>
                    </p>
                </div>
            </article>
            <figure class="col5 push1">
                <img src="<?php echo get_bloginfo('template_url') ?>/images/quick_fix.png" alt="">
            </figure>
        </div>
    </section>
</section>
<!-- Andropause -->

<?php 
    get_footer();
?>