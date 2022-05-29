<?php 
    get_header();
?>

<section class="aboutHero">
    <figure>
        <img class="textoverlay" src="<?php echo get_bloginfo('template_url') ?>/images/abouttext.png" alt="">
        <svg viewBox="0 0 944 658" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_1351_1488)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M943.76 657.74H0V23.37L0.87 22.94L10.08 18.85L19.47 15.15L29.03 11.84L38.76 8.94L48.63 6.45L58.63 4.36L68.75 2.68L78.97 1.41L89.28 0.54L99.65 0.07L110.07 0L120.54 0.31L131.02 1L141.5 2.07L151.98 3.49L162.43 5.26L172.84 7.36L183.2 9.79L193.49 12.52L203.7 15.54L213.81 18.84L223.83 22.39L233.73 26.19L243.51 30.21L253.17 34.45L262.68 38.88L272.06 43.5L281.28 48.28L290.36 53.22L299.28 58.3L308.03 63.52L316.63 68.85L325.06 74.29L333.32 79.83L341.42 85.44L349.35 91.12L357.11 96.84L364.7 102.58L372.13 108.33L379.4 114.07L386.51 119.78L393.46 125.44L400.27 131.05L406.93 136.58L413.46 142.03L419.86 147.38L426.13 152.63L432.29 157.77L438.35 162.79L444.3 167.67L450.17 172.42L455.96 177.03L461.67 181.48L467.33 185.79L472.93 189.94L478.48 193.94L484 197.77L489.5 201.46L494.97 204.99L500.44 208.37L505.9 211.6L511.36 214.7L516.83 217.66L522.32 220.5L527.82 223.23L533.35 225.86L538.9 228.41L544.47 230.87L550.07 233.28L555.69 235.63L561.33 237.96L566.99 240.27L572.67 242.57L578.35 244.89L584.04 247.24L589.73 249.63L595.41 252.08L601.06 254.6L606.69 257.21L612.29 259.91L617.84 262.71L623.34 265.63L628.77 268.68L634.13 271.85L639.42 275.16L644.61 278.6L649.71 282.19L654.7 285.92L659.59 289.79L664.36 293.8L669.01 297.94L673.55 302.22L677.96 306.63L682.24 311.15L686.41 315.79L690.44 320.54L694.36 325.38L698.15 330.32L701.83 335.35L705.39 340.45L708.83 345.62L712.17 350.86L715.41 356.15L718.56 361.48L721.63 366.84L724.62 372.23L727.56 377.63L730.46 383.04L733.33 388.44L736.19 393.83L739.05 399.2L741.93 404.54L744.84 409.85L747.8 415.12L750.84 420.35L753.95 425.54L757.17 430.69L760.51 435.79L763.98 440.85L767.6 445.86L771.39 450.84L775.35 455.78L779.5 460.69L783.84 465.59L788.38 470.47L793.12 475.35L798.06 480.25L803.2 485.16L808.54 490.11L814.06 495.11L819.75 500.17L825.6 505.3L831.6 510.52L837.72 515.84L843.95 521.26L850.25 526.81L856.61 532.49L863 538.31L869.38 544.28L875.74 550.4L882.02 556.68L888.21 563.13L894.27 569.74L900.16 576.51L905.85 583.45L911.3 590.55L916.48 597.81L921.36 605.21L925.9 612.75L930.07 620.41L933.83 628.19L937.17 636.07L940.05 644.04L942.44 652.07L943.76 657.74Z" fill="#3D5BCD"/>
            </g>
            <defs>
            <clipPath id="clip0_1351_1488">
            <rect width="943.76" height="657.74" fill="white"/>
            </clipPath>
            </defs>
        </svg>
    </figure>
    <img src="<?php echo get_bloginfo('template_url') ?>/images/about.png" alt="">
</section>

<main class="info">
    <section class="wrapper container" style="margin-bottom: 77px">
        <article class="col6 verticalCenter">
            <?php the_field("hvem_er_ghada") ?>
        </article>
        <figure class="col6">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/OL0aglMf0fE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </figure>
    </section>
</main>
<section class="kompetencer">
    <div class="wrapper">
        <h3>
            Ghadas kompetencer
        </h3>
        <section class="container box">
            <div class="col6">
                <div class="container">
                    <p class="number">
                        1.
                    </p>
                    <p class="text">
                        <?php the_field("nr1") ?>
                    </p>
                </div>
                <div class="container">
                    <p class="number">
                        2.
                    </p>
                    <p class="text">
                        <?php the_field("nr2") ?>
                    </p>
                </div>
                <div class="container">
                    <p class="number">
                        3.
                    </p>
                    <p class="text">
                        <?php the_field("nr3") ?>
                    </p>
                </div>
                <div class="container">
                    <p class="number">
                        4.
                    </p>
                    <p class="text">
                        <?php the_field("nr4") ?>
                    </p>
                </div>
            </div>
            <div class="col6">
                <div class="container">
                    <p class="number">
                        5.
                    </p>
                    <p class="text">
                        <?php the_field("nr5") ?>
                    </p>
                </div>
                <div class="container">
                    <p class="number">
                        6.
                    </p>
                    <p class="text">
                        <?php the_field("nr6") ?>
                    </p>
                </div>
                <div class="container">
                    <p class="number">
                        7.
                    </p>
                    <p class="text">
                        <?php the_field("nr7") ?>
                    </p>
                </div>
            </div>
        </section>
    </div>
</section>

<?php 
    get_footer();
?>