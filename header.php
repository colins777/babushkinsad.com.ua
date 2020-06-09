<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <!-- <base href="/"> -->

    <title>Бабушкин сад - загородный комплекс</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <!-- Custom Browsers Color End -->

<?php wp_head();?>

</head>

<body>

<!-- Custom HTML -->
<header class="header">

    <div class="menu-wrap">
        <div class="menu-mobile">
            <div class="menu-mobile__top">
                    <span class="address-item__social">
                        <a href="https://www.facebook.com/Babushkinsad/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/babyshkin_sad/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <!--     <a href="https://www.booking.com/hotel/ua/babushkin-sad/" target="_blank"><i class="fas fa-book"></i></a>-->
                    </span>

                <div class="close-button">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px"
                         viewBox="0 0 100 100" xml:space="preserve"><circle cx="50" cy="50" r="40" stroke="#fff"
                                                                            style="stroke-width: 2px; vector-effect: non-scaling-stroke; fill: none;"></circle>
                        <line x1="35" y1="35" x2="65" y2="65" stroke="#fff"
                              style="stroke-width: 2px; vector-effect: non-scaling-stroke; fill: none;"></line>
                        <line x1="65" y1="35" x2="35" y2="65" stroke="#fff"
                              style="stroke-width: 2px; vector-effect: non-scaling-stroke; fill: none;"></svg>
                </div>

            </div>
            <ul class="menu__list">
                <li class="menu__list-item"><a href="#anchor1" class="menu__list-link">Проживание</a></li>
                <li class="menu__list-item"><a href="#anchor2" class="menu__list-link">Ресторан</a></li>
                <li class="menu__list-item"><a href="#anchor3" class="menu__list-link">Услуги</a></li>
                <li class="menu__list-item"><a href="#anchor4" class="menu__list-link">Галерея</a></li>
                <li class="menu__list-item"><a href="#anchor5" class="menu__list-link">Контакты</a></li>
            </ul>
        </div> <!--menu-mobile-->
        <div class="container">
            <div class="header-top">
                <div class="logo">
                    <?php the_custom_logo();?>
                </div>

                <?php if (!is_page('booking')) :?>
                <div class="menu">
                    <ul class="menu__list">
                        <li class="menu__list-item"><a href="#anchor1" class="menu__list-link">Проживание</a></li>
                        <li class="menu__list-item"><a href="#anchor2" class="menu__list-link">Ресторан</a></li>
                        <li class="menu__list-item"><a href="#anchor3" class="menu__list-link">Услуги</a></li>
                        <li class="menu__list-item"><a href="#anchor4" class="menu__list-link">Галерея</a></li>
                        <li class="menu__list-item"><a href="#anchor5" class="menu__list-link">Контакты</a></li>
                    </ul>
                </div>
                <?php endif;?>
                <a href="<?php echo get_site_url(). '/booking'?>" class="button">Забронировать</a>

                <div class="sandwich">
                    <div class="sandwich__line sandwich__line--top"></div>
                    <div class="sandwich__line sandwich__line--middle"></div>
                    <div class="sandwich__line sandwich__line--bottom"></div>
                </div>
            </div> <!--header-top-->
        </div> <!--container-->
    </div>



    <div class="header__banner" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() . '/img/header_bg.jpg'?>">
        <div class="container">
            <?php if (is_page('booking')) :?>
            <div class="header__banner-descr" style="background: rgba(255, 255, 255, 0.71);">
                <?php echo do_shortcode ('[booking-form]') ?>
            </div>

            <?php else : ?>
            <div class="header__banner-descr">
<!--                --><?php //$headerContent = new WP_Query( array( 'category_name' => 'header_text' ) );
//
//                while ($headerContent->have_posts()) :
//                    $headerContent->the_post();?>
<!---->
<!--                    <h1>--><?php //the_title();?><!--</h1>-->
<!---->
<!--                    --><?php //the_content();?>
<!--                --><?php //endwhile;
//                wp_reset_postdata();
//                ?>
            <h1>КАЖДОМУ РАД «БАБУШКИН САД»</h1>
                <p>Тихий дачный отдых на природе всего в нескольких минутах езды от города не оставит вас равнодушным. Уютный загородный комплекс «Бабушкин Сад» — место, которое для многих гостей стало знакомым и родным. Это идеальный повод для любого вида отдыха, сочетающее в себе как семейную атмосферу, так деловой досуг.</p>
            </div> <!--header__banner-descr-->
        <?php endif; ?>
        </div> <!--container-->
</header>