<?php
/*
* Template Name: Услуги
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
    <section class="contact-section services-page">
        <div class="container">
            <div class="title" style="margin-bottom: 10px;">
                <h2 id="contact"><span><?php the_title(); ?></span></h2>
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


    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 8,
        'meta_key' => 'post_views_count',
        'orderby' => 'meta_value_num',
    );

    $prod = new WP_Query($args);

    if ($prod->have_posts()) {
        ?>
        <section class="our-projects-section slider-version-2" style="padding-bottom: 0;">
            <div class="container">
                <div class="title">
                    <h2><span>Наши работы</span></h2>
                    <?php if (get_field('page_catalog', 'option')) {
                        echo '<a href="' . get_field('page_catalog', 'option') . '" class="btn-new btn-new--2">В портфолио</a>';
                    } ?>
                </div>

                <div class="default-shell to-price" id="slider-main-page-4" style="padding-bottom: 80px;">

                    <?php
                    while ($prod->have_posts()) : $prod->the_post();
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url = wp_get_attachment_image_src($thumb_id, 'full', true);
                        ?>
                        <!--.view-box-->
                        <div class="view-box active">
                            <div class="inset-box">
                                <!--<div class="foto" style="background-image: url(<?php echo $thumb_url[0]; ?>)"><a href="<?php the_permalink(); ?>"></a></div>-->
                                <div class="foto"
                                     style="background-image: url(<?= get_template_directory_uri(); ?>/img/services.png)">
                                    <a href="#"></a></div>

                                <div class="title-goods"><h3><a href="<?php the_permalink(); ?>">Стены из<br>натурального
                                            камня</a></h3></div>
                                <p class="tile-goods-desc">This is Photoshop's version of Lorem Ipsum. Proin gravida
                                    nibh vel
                                    velit auctor aliquet. Aenean</p>
                                <?php
                                if (get_field('sale_price') || get_field('sale_price_euro')) {
                                    if (get_field('sale_price_euro')) {
                                        $price = get_conversion('number=' . str_replace(" ", "", get_field('sale_price_euro')));
                                        $price = str_replace(",", " ", $price);
                                    } else {
                                        $price = get_field('sale_price');
                                    }
                                } else {
                                    if (get_field('price_euro')) {
                                        $price = get_conversion('number=' . str_replace(" ", "", get_field('price_euro')));
                                        $price = str_replace(",", " ", $price);
                                    } else {
                                        $price = get_field('price');
                                    }
                                }

                                if ($price) { /*echo '<div class="price-goods">'.$price.' руб.</div>';*/
                                }
                                ?>
                            </div>
                            <div class="more-inform-product"><a href="<?php the_permalink(); ?>"
                                                                class="btn">подробнее</a></div>
                        </div><!--End .view-box-->

                        <?php
                    endwhile;
                    wp_reset_query();
                    ?>

                </div>

            </div>
        </section>
    <?php } ?>
<?php endwhile; ?>





<?php get_footer(); ?>
