<?php
/*
* Template Name: Портфолио
*/
get_header();
?>
<img class="single-top-img" src="<?= get_template_directory_uri(); ?>/img/single-top-img.png">


<!--.breadcrumb-section-->
<?php if (function_exists('kama_breadcrumbs') && !is_front_page()) { ?>
    <section class="breadcrumb-section breadcrumb-services">
        <div class="container">
            <?php echo kama_breadcrumbs(' >> '); ?>
        </div>
    </section>
<?php } ?><!--End .breadcrumb-section-->


<?php while (have_posts()) : the_post(); ?>

    <!--.contact-section-->
    <section class="contact-section services-page portfolio-page">
        <div class="container">
            <div class="title" style="margin-bottom: 10px;">
                <h2 id="contact"><span><?php the_title(); ?></span></h2>
            </div>

            <div class="img-with-desc">
                <img src="<?= get_template_directory_uri(); ?>/img/big-img.png">
                <div class="desc">
                    <h3 class="desc-title"><a>Стены из<br>натурального камня</a></h3>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id
                        elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum
                        velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat
                        auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia</p>
                </div>
            </div>

            <div class="slider-version-2 our-projects-section">
                <div class="default-shell">
                    <!--.view-box-->
                    <div class="view-box active">
                        <div class="inset-box">
                            <div class="foto"
                                 style="background-image: url(<?= get_template_directory_uri(); ?>/img/services.png)">
                                <a href="#"></a></div>

                            <div class="title-goods"><h3><a href="<?php the_permalink(); ?>">Стены из<br>натурального
                                        камня</a></h3></div>
                            <p class="tile-goods-desc">This is Photoshop's version of Lorem Ipsum. Proin gravida
                                nibh vel
                                velit auctor aliquet. Aenean</p>
                        </div>
                    </div><!--End .view-box-->
                    <!--.view-box-->
                    <div class="view-box active">
                        <div class="inset-box">
                            <div class="foto"
                                 style="background-image: url(<?= get_template_directory_uri(); ?>/img/services.png)">
                                <a href="#"></a></div>

                            <div class="title-goods"><h3><a href="<?php the_permalink(); ?>">Стены из<br>натурального
                                        камня</a></h3></div>
                            <p class="tile-goods-desc">This is Photoshop's version of Lorem Ipsum. Proin gravida
                                nibh vel
                                velit auctor aliquet. Aenean</p>
                        </div>
                    </div><!--End .view-box-->
                    <!--.view-box-->
                    <div class="view-box active">
                        <div class="inset-box">
                            <div class="foto"
                                 style="background-image: url(<?= get_template_directory_uri(); ?>/img/services.png)">
                                <a href="#"></a></div>

                            <div class="title-goods"><h3><a href="<?php the_permalink(); ?>">Стены из<br>натурального
                                        камня</a></h3></div>
                            <p class="tile-goods-desc">This is Photoshop's version of Lorem Ipsum. Proin gravida
                                nibh vel
                                velit auctor aliquet. Aenean</p>
                        </div>
                    </div><!--End .view-box-->
                    <!--.view-box-->
                    <div class="view-box active">
                        <div class="inset-box">
                            <div class="foto"
                                 style="background-image: url(<?= get_template_directory_uri(); ?>/img/services.png)">
                                <a href="#"></a></div>

                            <div class="title-goods"><h3><a href="<?php the_permalink(); ?>">Стены из<br>натурального
                                        камня</a></h3></div>
                            <p class="tile-goods-desc">This is Photoshop's version of Lorem Ipsum. Proin gravida
                                nibh vel
                                velit auctor aliquet. Aenean</p>
                        </div>
                    </div><!--End .view-box-->
                </div>
            </div>

            <div class="slider-version-2 our-projects-section">
                <div class="default-shell">
                    <!--.view-box-->
                    <div class="view-box active">
                        <div class="inset-box">
                            <div class="foto"
                                 style="background-image: url(<?= get_template_directory_uri(); ?>/img/services.png)">
                                <a href="#"></a></div>

                            <div class="title-goods"><h3><a href="<?php the_permalink(); ?>">Стены из<br>натурального
                                        камня</a></h3></div>
                            <p class="tile-goods-desc">This is Photoshop's version of Lorem Ipsum. Proin gravida
                                nibh vel
                                velit auctor aliquet. Aenean</p>
                        </div>
                    </div><!--End .view-box-->
                    <!--.view-box-->
                    <div class="view-box active">
                        <div class="inset-box">
                            <div class="foto"
                                 style="background-image: url(<?= get_template_directory_uri(); ?>/img/services.png)">
                                <a href="#"></a></div>

                            <div class="title-goods"><h3><a href="<?php the_permalink(); ?>">Стены из<br>натурального
                                        камня</a></h3></div>
                            <p class="tile-goods-desc">This is Photoshop's version of Lorem Ipsum. Proin gravida
                                nibh vel
                                velit auctor aliquet. Aenean</p>
                        </div>
                    </div><!--End .view-box-->
                    <!--.view-box-->
                    <div class="view-box active">
                        <div class="inset-box">
                            <div class="foto"
                                 style="background-image: url(<?= get_template_directory_uri(); ?>/img/services.png)">
                                <a href="#"></a></div>

                            <div class="title-goods"><h3><a href="<?php the_permalink(); ?>">Стены из<br>натурального
                                        камня</a></h3></div>
                            <p class="tile-goods-desc">This is Photoshop's version of Lorem Ipsum. Proin gravida
                                nibh vel
                                velit auctor aliquet. Aenean</p>
                        </div>
                    </div><!--End .view-box-->
                    <!--.view-box-->
                    <div class="view-box active">
                        <div class="inset-box">
                            <div class="foto"
                                 style="background-image: url(<?= get_template_directory_uri(); ?>/img/services.png)">
                                <a href="#"></a></div>

                            <div class="title-goods"><h3><a href="<?php the_permalink(); ?>">Стены из<br>натурального
                                        камня</a></h3></div>
                            <p class="tile-goods-desc">This is Photoshop's version of Lorem Ipsum. Proin gravida
                                nibh vel
                                velit auctor aliquet. Aenean</p>
                        </div>
                    </div><!--End .view-box-->
                </div>
            </div>

            <div class="slider-version-2 our-projects-section">
                <div class="default-shell">
                    <!--.view-box-->
                    <div class="view-box active">
                        <div class="inset-box">
                            <div class="foto"
                                 style="background-image: url(<?= get_template_directory_uri(); ?>/img/services.png)">
                                <a href="#"></a></div>

                            <div class="title-goods"><h3><a href="<?php the_permalink(); ?>">Стены из<br>натурального
                                        камня</a></h3></div>
                            <p class="tile-goods-desc">This is Photoshop's version of Lorem Ipsum. Proin gravida
                                nibh vel
                                velit auctor aliquet. Aenean</p>
                        </div>
                    </div><!--End .view-box-->
                    <!--.view-box-->
                    <div class="view-box active">
                        <div class="inset-box">
                            <div class="foto"
                                 style="background-image: url(<?= get_template_directory_uri(); ?>/img/services.png)">
                                <a href="#"></a></div>

                            <div class="title-goods"><h3><a href="<?php the_permalink(); ?>">Стены из<br>натурального
                                        камня</a></h3></div>
                            <p class="tile-goods-desc">This is Photoshop's version of Lorem Ipsum. Proin gravida
                                nibh vel
                                velit auctor aliquet. Aenean</p>
                        </div>
                    </div><!--End .view-box-->
                    <!--.view-box-->
                    <div class="view-box active">
                        <div class="inset-box">
                            <div class="foto"
                                 style="background-image: url(<?= get_template_directory_uri(); ?>/img/services.png)">
                                <a href="#"></a></div>

                            <div class="title-goods"><h3><a href="<?php the_permalink(); ?>">Стены из<br>натурального
                                        камня</a></h3></div>
                            <p class="tile-goods-desc">This is Photoshop's version of Lorem Ipsum. Proin gravida
                                nibh vel
                                velit auctor aliquet. Aenean</p>
                        </div>
                    </div><!--End .view-box-->
                    <!--.view-box-->
                    <div class="view-box active">
                        <div class="inset-box">
                            <div class="foto"
                                 style="background-image: url(<?= get_template_directory_uri(); ?>/img/services.png)">
                                <a href="#"></a></div>

                            <div class="title-goods"><h3><a href="<?php the_permalink(); ?>">Стены из<br>натурального
                                        камня</a></h3></div>
                            <p class="tile-goods-desc">This is Photoshop's version of Lorem Ipsum. Proin gravida
                                nibh vel
                                velit auctor aliquet. Aenean</p>
                        </div>
                    </div><!--End .view-box-->
                </div>
            </div>

        </div>
    </section><!--End .contact-section-->

<?php endwhile; ?>





<?php get_footer(); ?>
