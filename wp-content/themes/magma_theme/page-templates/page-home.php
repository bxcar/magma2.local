<?php
/*
* Template Name: Главная
*/
get_header();
?>


    <!--.slider-main-->
<?php
$args = array(
    'post_type' => 'slider',
    'posts_per_page' => -1
);

$slider = new WP_Query($args);

if ($slider->have_posts()) {
    ?>
    <section class="slider-main-page" id="slider-main-page">


        <?php while ($slider->have_posts()) : $slider->the_post(); ?>

            <div class="item">
                <div class="slide" style="background-image: url(<?php echo get_field('bg_slider'); ?>)">
                    <div class="slide-description">
                        <h1><?php the_title(); ?></h1>
                        <div class="pre-title" style="display: none;">
                            <?php the_content(); ?>
                        </div>
                        <?php if (get_field('link_slider')) {
                            echo '<a href="' . get_field('link_slider') . '" class="btn-new">В каталог</a>';
                        } ?>
                    </div>
                </div>
            </div>

            <?php
        endwhile;
        wp_reset_query();
        ?>

    </section>
<?php } ?><!--End.slider-main-->



<?php while (have_posts()) : the_post(); ?>
    <!--.info-goods-section-->
    <section class="info-goods-section">
        <div class="container">
            <div class="title" style="display: none;">
                <?php if (get_field('title_prod')) {
                    echo '<h2><span>' . get_field('title_prod') . '</span></h2>';
                } ?>
                <?php if (get_field('page_about', 'option')) {
                    echo '<a href="' . get_field('page_about', 'option') . '" class="link-next">подробнее о нас</a>';
                } ?>
            </div>
            <?php if (get_field('desc_prod')) {
                echo get_field('desc_prod');
            } ?>
        </div>
    </section><!--End .info-goods-section-->


    <!--.popular-goods-section-->
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
        <section class="popular-goods-section slider-version-2">
            <div class="container">
                <div class="title">
                    <h2><span>Популярные товары</span></h2>
                    <?php if (get_field('page_catalog', 'option')) {
                        echo '<a href="' . get_field('page_catalog', 'option') . '" class="btn-new btn-new--2">В каталог</a>';
                    } ?>
                </div>

                <div class="default-shell to-price" id="slider-main-page-2">

                    <?php
                    while ($prod->have_posts()) : $prod->the_post();
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url = wp_get_attachment_image_src($thumb_id, 'full', true);
                        ?>
                        <!--.view-box-->
                        <div class="view-box active">
                            <div class="inset-box">
                                <div class="foto" style="background-image: url(<?php echo $thumb_url[0]; ?>)"><a
                                            href="<?php the_permalink(); ?>"></a></div>

                                <?php

                                echo '<div class="name-goods">';
                                $terms = get_the_term_list(get_the_ID(), 'category', '', ', ', '');
                                echo strip_tags($terms);
                                echo '</div>';


                                ?>

                                <div class="title-goods"><h3><a
                                                href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
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
    <?php } ?><!--End .popular-goods-section-->

    <section class="banner container">
        <a href="#" target="_blank">
            <img src="<?= get_template_directory_uri(); ?>/img/banner.png">
        </a>
    </section>


    <!--.our-projects-section-->
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
        <section class="our-projects-section slider-version-2">
            <div class="container">
                <div class="title">
                    <h2><span>Наши услуги</span></h2>
                    <?php if (get_field('page_catalog', 'option')) {
                        echo '<a href="' . get_field('page_catalog', 'option') . '" class="btn-new btn-new--2">В каталог</a>';
                    } ?>
                </div>

                <div class="default-shell to-price" id="slider-main-page-3">

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

    <!--.advantages-section-->
    <section class="our-projects-section">
        <div class="container">
            <div class="title">
                <h2><span>Наши преимущества</span></h2>
                <?php if (get_field('page_catalog', 'option')) {
                    echo '<a href="' . get_field('page_catalog', 'option') . '" class="btn-new btn-new--2">В каталог</a>';
                } ?>
            </div>
            <div class="advantages-new">
                <div class="advantages-new-item">
                    <div class="advantages-new-img-wrap">
                        <img class="advantages-new-img"
                             src="<?= get_template_directory_uri(); ?>/img/advantages-new-1.png">
                    </div>
                    <span class="advantages-new-title">Материалы<br>высокого качества</span>
                    <p class="advantages-new-desc">Высококлассное сырье и оборудование – вот в чем секрет качества нашей
                        продукции, ее прекрасного вешнего вида и эксплуатационных характеристик.</p>
                </div>
                <div class="advantages-new-item">
                    <div class="advantages-new-img-wrap">
                        <img class="advantages-new-img"
                             src="<?= get_template_directory_uri(); ?>/img/advantages-new-2.png">
                    </div>
                    <span class="advantages-new-title">Богатый выбор</span>
                    <p class="advantages-new-desc">Мы воплощаем в жизнь самые дерзкие проекты. Наши дизайнеры создают
                        шедевры, а искусные мастера с легкостью выполняют заказы любой сложности.</p>
                </div>
                <div class="advantages-new-item">
                    <div class="advantages-new-img-wrap">
                        <img class="advantages-new-img"
                             src="<?= get_template_directory_uri(); ?>/img/advantages-new-3.png">
                    </div>
                    <span class="advantages-new-title">Гарантии</span>
                    <p class="advantages-new-desc">С каждым клиентом мы заключаем договор и работаем строго в его
                        рамках. Ваш проект будет выполнен точно по утвержденному эскизу и готов в срок.</p>
                </div>
                <div class="advantages-new-item">
                    <div class="advantages-new-img-wrap">
                        <img class="advantages-new-img"
                             src="<?= get_template_directory_uri(); ?>/img/advantages-new-4.png">
                    </div>
                    <span class="advantages-new-title">Желание клиента - закон</span>
                    <p class="advantages-new-desc">Мы всегда ориентируемся на пожелания заказчика и находим удачные
                        решения для воплощения всех его задумок. </p>
                </div>
            </div>
        </div>
    </section><!--End .advantages-section-->


    <!--.our-projects-section-->
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

    <!--.advantages-section-->
    <section class="our-projects-section about-company">
        <div class="container">
            <div class="title">
                <h2><span>О компании</span></h2>
            </div>
            <div class="about-company-desc">
                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                    sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis
                    sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                    odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent
                    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.
                    Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.
                    Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam,
                    ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                    sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis
                    sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                    odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent
                    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.
                    Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.
                    Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam,
                    ut aliquam massa nisl quis neque. Suspendisse in orci enim.This is Photoshop's version of Lorem Ipsum.
                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                    consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet
                    mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris
                    vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia
                    nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit
                    amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam
                    pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.
                    Suspendisse in orci enim.</p>
            </div>
        </div>
    </section><!--End .advantages-section-->

<?php endwhile; ?>


<?php get_footer(); ?>