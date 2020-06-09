<?php get_header();

$currentUrl = get_template_directory_uri() . '/img/';
?>


<section class="accommodation">

    <div class="section-title-wrap">
        <div class="container">
            <h2 class="section-title">Проживание</h2>
        </div>
    </div>

    <?php $livingContent = new WP_Query(array('category_name' => 'living', 'order' => 'ASC'));
    $idx = 1;
    while ($livingContent->have_posts()) :

        if ($idx % 2 == 1) :
            $livingContent->the_post();?>
            <div class="accommodation__item" id="anchor1">
                <div class="accommodation__descr">
                    <div class="accommodation__descr-content left-side">

                        <div class="accommodation__img-mobile">
                            <img src="<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>" alt=""/>
                        </div>

                        <div class="item-title">
                            <span class="pre-title">Проживание</span>
                            <h3><?php the_title(); ?></h3>
                        </div>

                        <div class="accommodation__descr-text">
                            <?php the_content(); ?>
                        </div>

                        <span class="accommodation__descr-price">
                            <span class="price-title">Цена:</span><span class="price-amount"><?php the_field('price');?></span>
                        </span>
                        <div class="accommodation__descr-button">
                            <a href="<?php echo get_site_url() . '/booking' ?>" class="button">Забронировать</a>
                        </div>

                    </div> <!--accommodation__descr-content-->
                </div> <!--accommodation__descr-->

                <div class="accommodation__img" data-parallax="scroll"
                     data-image-src="<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>">
                </div>

            </div> <!--accommodation__item-->

        <?php else : $livingContent->the_post();?>

            <div class="accommodation__item" id="anchor1">
                <div class="accommodation__img" data-parallax="scroll"
                     data-image-src="<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>"></div>

                <div class="accommodation__descr">
                    <div class="accommodation__descr-content right-side">

                        <div class="accommodation__img-mobile">
                            <img src="<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>" alt=""/>
                        </div>
                        <div class="item-title">
                            <span class="pre-title">Проживание</span>
                            <h3><?php the_title(); ?></h3>
                        </div>

                        <div class="accommodation__descr-text">
                            <?php the_content(); ?>
                        </div>

                        <span class="accommodation__descr-price">
                            <span class="price-title">Цена:</span>
                                <span class="price-amount"><?php the_field('price');?></span>
                        </span>

                        <div class="accommodation__descr-button">
                            <a href="<?php echo get_site_url() . '/booking' ?>" class="button">Забронировать</a>
                        </div>
                    </div>
                </div> <!--descr-->

            </div> <!--accommodation__item-->

        <?php endif;
        $idx++;
        endwhile;
        wp_reset_postdata();
        ?>
</section> <!--accommodation-->

<section class="restaurant">
    <div class="section-title-wrap">

        <div class="container">
            <h2 class="section-title">Ресторан</h2>
        </div>
    </div>

    <?php $restaurantContent = new WP_Query(array('category_name' => 'restaurant', 'order' => 'ASC'));
    $idx = 1;
    while ($restaurantContent->have_posts()) :

        if ($idx % 2 == 1) :
            $restaurantContent->the_post();?>
            <div class="accommodation__item" id="anchor2">
                <div class="accommodation__descr">
                    <div class="accommodation__descr-content left-side">

                        <div class="accommodation__img-mobile">
                            <img src="<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>" alt=""/>
                        </div>

                        <div class="item-title">
                            <span class="pre-title">Ресторан</span>
                            <h3><?php the_title(); ?></h3>
                        </div>

                        <div class="accommodation__descr-text">
                            <?php the_content(); ?>
                        </div>

                        <span class="accommodation__descr-phone">
                        <a href="tel:<?php the_field('phone_number');?>" class="section-phone"><img src="<?php echo $currentUrl?>icons/phone-square-solid.svg" alt="телефон" /><?php the_field('phone_number');?></a>
                    </span>
                        <div class="accommodation__descr-button">
                            <a href="<?php echo get_site_url() . '/booking' ?>" class="button">Забронировать</a>
                        </div>

                    </div> <!--accommodation__descr-content-->
                </div> <!--accommodation__descr-->

                <div class="accommodation__img" data-parallax="scroll"
                     data-image-src="<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>">
                </div>

            </div> <!--accommodation__item-->

        <?php else : $restaurantContent->the_post();?>

            <div class="accommodation__item" id="anchor1">
                <div class="accommodation__img" data-parallax="scroll"
                     data-image-src="<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>"></div>

                <div class="accommodation__descr">
                    <div class="accommodation__descr-content right-side">

                        <div class="accommodation__img-mobile">
                            <img src="<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>" alt=""/>
                        </div>
                        <div class="item-title">
                            <span class="pre-title">Ресторан</span>
                            <h3><?php the_title(); ?></h3>
                        </div>

                        <div class="accommodation__descr-text">
                            <?php the_content(); ?>
                        </div>

                        <span class="accommodation__descr-phone">
                        <a href="tel:<?php the_field('phone_number');?>" class="section-phone"><img src="<?php echo $currentUrl?>icons/phone-square-solid.svg" alt="телефон" /><?php the_field('phone_number');?></a>
                    </span>

                        <div class="accommodation__descr-button">
                            <a href="<?php echo get_site_url() . '/booking' ?>" class="button">Забронировать</a>
                        </div>
                    </div>
                </div> <!--descr-->

            </div> <!--accommodation__item-->

        <?php endif;
        $idx++;
    endwhile;
    wp_reset_postdata();
    ?>

</section>

<section class="service">
    <div class="container">
        <h2 class="section-title" id="anchor3">Услуги</h2>

        <?php $services = new WP_Query(array('category_name' => 'services', 'order' => 'ASC'));
        $idx = 1;
        while ($services->have_posts()) :

        if ($idx % 2 == 1) :
        $services->the_post();?>

        <div class="service-items">
            <div class="service-items__img">
                <img src="<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>" alt=""/>
            </div> <!--service-items__img-->
            <div class="service-items__descr">
                <span class="pre-title">Услуги</span>
                <h3 class="item-title"><?php the_title(); ?></h3>
                <div class="service-items__text">
                    <?php the_content(); ?>
                </div>
                <a href="<?php echo get_site_url(). '/booking'?>" class="button">Забронировать</a>
            </div> <!--service-items__descr-->
        </div> <!--service-items-->

        <?php else : $services->the_post();?>

        <div class="service-items">
            <div class="service-items__descr">
                <span class="pre-title">БИЗНЕС И МЕРОПРИЯТИЯ</span>
                <h3 class="item-title"><?php the_title(); ?></h3>
                <div class="service-items__text">
                    <?php the_content(); ?>
                </div>
                <a href="<?php echo get_site_url(). '/booking'?>" class="button">Забронировать</a>
            </div> <!--service-items__descr-->

            <div class="service-items__img">
                <img src="<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>" alt=""/>
            </div> <!--service-items__img-->
        </div> <!--service-items-->
        <?php endif;
            $idx++;
        endwhile;
        wp_reset_postdata();
        ?>
    </div> <!--container-->
</section>

    <section class="events">
        <div class="section-title-wrap">
            <div class="container">
                <h2 class="section-title">Мероприятия</h2>
            </div>
        </div>

        <?php $events_list = new WP_Query(array('category_name' => 'events_list', 'order' => 'ASC'));
        $idx = 1;
        while ($events_list->have_posts()) :

            if ($idx % 2 == 1) :
                $events_list->the_post(); ?>
                <div class="accommodation__item">
                    <div class="accommodation__descr">
                        <div class="accommodation__descr-content left-side">

                            <div class="accommodation__img-mobile">
                                <img src="<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>" alt=""/>
                            </div>

                            <div class="item-title">
                                <span class="pre-title">Мероприятия</span>
                                <h3><?php the_title(); ?></h3>
                            </div>

                            <div class="accommodation__descr-text">
                                <?php the_content(); ?>
                            </div>
                        </div> <!--accommodation__descr-content-->
                    </div> <!--accommodation__descr-->

                    <div class="accommodation__img" data-parallax="scroll"
                         data-image-src="<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>">
                    </div>

                </div> <!--accommodation__item-->
            <?php else : $events_list->the_post(); ?>

                <div class="accommodation__item">
                    <div class="accommodation__img" data-parallax="scroll"
                         data-image-src="<?php echo get_the_post_thumbnail_url($id, 'full'); ?>">
                    </div>
                    <div class="accommodation__descr">
                        <div class="accommodation__descr-content right-side">
                            <div class="accommodation__img-mobile">
                                <img src="<?php echo get_the_post_thumbnail_url($id, 'full'); ?>" alt=""/>
                            </div>
                            <div class="item-title">
                                <span class="pre-title">Мероприятия</span>
                                <h3 class="item-title"><?php the_title(); ?></h3>
                            </div>

                            <div class="accommodation__descr-text">
                                <?php the_content(); ?>
                            </div>
                        </div> <!--accommodation__descr-content-->
                    </div> <!--accommodation__descr-->
                </div> <!--accommodation__item-->

            <?php endif;
            $idx++;
        endwhile;
        wp_reset_postdata();
        ?>
    </section> <!--events-->

<section class="gallery" id="anchor4">
    <div class="container">
        <h2 class="section-title">Галерея комплекса</h2>
    </div>

    <div class="gallery-wrap">
        <?php $galleryPost = new WP_Query(array('category_name' => 'gallery_landing'));

        while ($galleryPost->have_posts()) :
            $galleryPost->the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;
        wp_reset_postdata();
        ?>
    </div>
</section>

<section class="address" id="anchor5">
    <div class="address-content">
        <span class="address-item"><i class="fas fa-map-marker-alt"></i>ул. Садовая 2, с. Мрия, Киевская обл.</span>
        <span class="address-item"><i class="fas fa-phone"></i>
             <a href="tel:<?php the_field('phone_contacts', 2858);?>" class="section-phone"><?php the_field('phone_contacts', 2858);?></a>
        </span>

        <span class="address-item"><i class="fas fa-envelope"></i>
            <a href="mailto:<?php the_field('mail_contacts', 2858);?>" class="section-phone"><?php the_field('mail_contacts', 2858);?></a>
        </span>


        <span class="address-item">
            <span class="address-item__social">
                <a href="<?php the_field('facebook_contacts', 2858);?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="<?php the_field('Instagram_contacts', 2858);?>" target="_blank"><i class="fab fa-instagram"></i></a>
            </span>
        </span>
        <div class="complex-map">
            <a href="http://www.babushkinsad.com.ua/wp-content/uploads/2020/06/map-2020.jpg" class="button" target="_blank">Карта комплекса</a>
        </div>

    </div>

    <div id="map" class="address-map"></div>

</section>


<?php get_footer() ?>


