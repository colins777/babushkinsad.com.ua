<?php get_header();

$currentUrl = get_template_directory_uri() . '/img/';
?>


<section class="accommodation">

    <div class="section-title-wrap">
        <div class="container">
            <h2 class="section-title">Проживание</h2>
        </div>
    </div>

    <div class="accommodation__item" id="anchor1">
        <div class="accommodation__descr">
            <div class="accommodation__descr-content left-side">

                <div class="accommodation__img-mobile">
                    <img src="<?php echo $currentUrl?>cottege_bg.jpg" alt=""/>
                </div>

                <div class="item-title">
                    <span class="pre-title">Проживание</span>
                    <h3>Коттедж</h3>
                </div>

                <div class="accommodation__descr-descr">
                    <p>Загородный комплекс «Бабушкин Сад» располагает комфортабельными 16 коттеджами, рассчитанные на 4 гостей. Современный дизайн и гармоничный интерьер стали в них основой уюта и комфорта. В коттедже две отдельные спальни, просторная гостиная-столовая с большим плазменным телевизором, мини-холодильником и оборудованная всем необходимым ванная комната. Дом открывает незабываемый вид на пруд, лесную рощу через просторные веранды с ротанговой мебелью.</p>
                </div>

                <span class="accommodation__descr-price">
                        <span class="price-title">Цена:</span><span class="price-amount"> 600 грн/сутка</span>
                    </span>

                <div class="accommodation__descr-button">
                    <a href="<?php echo get_site_url(). '/booking'?>" class="button">Забронировать</a>
                </div>


            </div>
        </div>

        <div class="accommodation__img" data-parallax="scroll"
             data-image-src="<?php echo $currentUrl?>cottege_bg.jpg">
        </div>
    </div> <!--accommodation__content-->


    <div class="accommodation__item">
        <div class="accommodation__img" data-parallax="scroll" data-image-src="<?php echo $currentUrl?>domik_bg.jpg"> </div>

        <div class="accommodation__descr">
            <div class="accommodation__descr-content right-side">

                <div class="accommodation__img-mobile">
                    <img src="<?php echo $currentUrl?>domik_bg.jpg" alt=""/>
                </div>
                <div class="item-title">
                    <span class="pre-title">Проживание</span>
                    <h3>Летний дом</h3>
                </div>

                <div class="accommodation__descr-descr">
                    <p>Уютные домики на территории парковой зоны «Бабушкин Сад» (16 шт) представлены в формате современных летних домов. За исключением простоты и удобства дизайнерских решений в оформлении, просторный дом отличается от других четырехместных коттеджей комплекса: две отдельных спальни, просторная гостиная-столовая с большим плазменным телевизором, оборудованная всем необходимым ванная комната с душевыми кабинами, отдельными санузлами и мебельной гарнитурой.</p>
                </div>

                <span class="accommodation__descr-price">
                        <span class="price-title">Цена:</span><span class="price-amount"> 600 грн/сутка</span>
                    </span>

                <div class="accommodation__descr-button">
                    <a href="<?php echo get_site_url(). '/booking'?>" class="button">Забронировать</a>
                </div>
            </div>
        </div> <!--descr-->

    </div> <!--accommodation__item-->

</section> <!--accommodation-->

<section class="restaurant">
    <div class="section-title-wrap">

        <div class="container">
            <h2 class="section-title">Ресторан</h2>
        </div>
    </div>

    <div class="accommodation__item" id="anchor2">
        <div class="accommodation__descr">
            <div class="accommodation__descr-content left-side">

                <div class="accommodation__img-mobile">
                    <img src="<?php echo $currentUrl?>restaurant_bg.jpg" alt=""/>
                </div>

                <div class="item-title">
                    <span class="pre-title">Ресторан</span>
                    <h3>Летний ресторан</h3>
                </div>

                <div class="accommodation__descr-descr">
                    <p>В меню ресторана «Бабушкин Сад» представлены кулинарные хиты разных стран, но, прежде всего — близкой каждому из нас домашней кухни. Правда, даже самые, казалось бы, простые блюда выполнены здесь с истинным мастерством. Cовременное и совершенное внутреннее оформление ресторана позволяет превратиться из тихого зала в просторную площадку для проведения шумных как семейных, так и корпоративных праздников. Зал визуально разделен на три зоны.
                    </p>
                </div>

                <span class="accommodation__descr-phone">
                        <a href="tel:(067) 445-60-90" class="section-phone"><img src="<?php echo $currentUrl?>icons/phone-square-solid.svg" alt="телефон" />(067) 445-60-90</a>
                    </span>

                <div class="accommodation__descr-button">
                    <a href="<?php echo get_site_url(). '/booking'?>" class="button">Забронировать</a>
                </div>
            </div>
        </div>

        <div class="accommodation__img" data-parallax="scroll" data-image-src="<?php echo $currentUrl?>restaurant_bg.jpg">
        </div>
    </div> <!--accommodation__item-->

    <div class="accommodation__item">


        <div class="accommodation__img" data-parallax="scroll" data-image-src="<?php echo $currentUrl?>besedki_bg.jpg"> </div>

        <div class="accommodation__descr">
            <div class="accommodation__descr-content right-side">

                <div class="accommodation__img-mobile">
                    <img src="<?php echo $currentUrl?>besedki_bg.jpg" alt=""/>
                </div>
                <div class="item-title">
                    <span class="pre-title">Развлечения</span>
                    <h3>Беседки</h3>
                </div>

                <div class="accommodation__descr-descr">
                    <p>Комплекс предлагает разнообразные летние площадки для отдыха на свежем воздухе. Вы всегда сможете выбрать место по душе, которое лучше всего подойдет под праздничное мероприятие или семеный отдых! Беседки с садовой мебелью, для небольших банкетов, юбилеев и фуршетов; альтанки у пруда с барбекю зонами – уютное место для романтических свиданий или рыбалки с друзьями;

                    </p>
                </div>


                <div class="accommodation__descr-button">
                    <a href="<?php echo get_site_url(). '/booking'?>" class="button">Забронировать</a>
                </div>
            </div>
        </div> <!--descr-->

    </div> <!--accommodation__item-->


    <div class="accommodation__item" id="anchor2">
        <div class="accommodation__descr">
            <div class="accommodation__descr-content left-side">
                <div class="accommodation__img-mobile">
                    <img src="<?php echo $currentUrl?>besedki_bg.jpg" alt=""/>
                </div>

                <div class="item-title">
                    <span class="pre-title">Ресторан</span>
                    <h3>Банкетный дом</h3>
                </div>
                <div class="accommodation__descr-descr">
                    <span class="features-list">Великолепный банкетный дом в прованском стиле предусматривает:</span>
                    <ul>
                        <li class="features-list__item">проведение живописных церемоний</li>
                        <li class="features-list__item">организацию банкетов любого формата – от семейного праздника для самых близких до громкого торжества до 120 человек</li>
                        <li class="features-list__item">непередаваемое место для проведения разнообраных тематических мероприятий, кино- и фото- съемок, корпоративных праздников, семинаров и тренингов;</li>
                    </ul>
                </div>

                <span class="accommodation__descr-phone">
                        <a href="tel:(067) 445-60-90" class="section-phone"><img src="<?php echo $currentUrl?>icons/phone-square-solid.svg" alt="телефон" />(067) 445-60-90</a>
                    </span>

                <div class="accommodation__descr-button">
                    <a href="<?php echo get_site_url(). '/booking'?>" class="button">Забронировать</a>
                </div>
            </div>
        </div>

        <div class="accommodation__img" data-parallax="scroll" data-image-src="<?php echo $currentUrl?>restaurant_bg.jpg">
        </div>
    </div> <!--accommodation__item-->

</section>

<section class="service">
    <div class="container">
        <h2 class="section-title" id="anchor3">Услуги</h2>
        <div class="service-items">
            <div class="service-items__img">
                <img src="<?php echo $currentUrl?>banya_bg.jpg" alt=""/>
            </div> <!--service-items__img-->

            <div class="service-items__descr">
                <span class="pre-title">Услуги</span>
                <h3 class="item-title">Баня на дровах</h3>
                <div class="service-items__text">
                    <p>Получи заряд бодрости, сними напряжение, убери стресс. Посещение возможно для всех желающих.
                        Баня на дровах с двумя купелями в загородном комплексе «Бабушкин Сад» является одной из
                        главных изюминок. Это настоящий праздник ДУШИ и ТЕЛА. Баня делиться на две зоны: зона отдыха
                        и зона оздоровления.
                    </p>
                </div>
                <a href="<?php echo get_site_url(). '/booking'?>" class="button">Забронировать</a>
            </div> <!--service-items__descr-->
        </div> <!--service-items-->


        <div class="service-items">
            <div class="service-items__descr">
                <span class="pre-title">БИЗНЕС И МЕРОПРИЯТИЯ</span>
                <h3 class="item-title">Конференц-залы</h3>
                <div class="service-items__text">
                    <p>Если Вы планируете провести переговоры, конференции, семинары, тренинги — комплекс «Бабушкин Сад» с радостью предоставит Вам такую возможность. Мы обеспечим Вам полный комплекс профессиональных услуг по организации и проведению подобных мероприятий.
                    </p>
                </div>
                <a href="<?php echo get_site_url(). '/booking'?>" class="button">Забронировать</a>
            </div> <!--service-items__descr-->

            <div class="service-items__img">
                <img src="<?php echo $currentUrl?>conferenz-service_bg.jpg" alt=""/>
            </div> <!--service-items__img-->
        </div> <!--service-items-->
    </div>
</section>

<section class="events">
    <div class="section-title-wrap">
        <div class="container">
            <h2 class="section-title">Мероприятия</h2>
        </div>
    </div>

    <div class="accommodation__item">
        <div class="accommodation__descr">
            <div class="accommodation__descr-content left-side">

                <div class="accommodation__img-mobile">
                    <img src="<?php echo $currentUrl?>restaurant_bg.jpg" alt=""/>
                </div>
                <div class="item-title">
                    <span class="pre-title">Мероприятия</span>
                    <h3 class="item-title">Корпоративы и бизнес ивенты</h3>
                </div>

                <div class="accommodation__descr-descr">
                    <p>«Бабушкин Сад» представляет Вам свои банкетные залы и террасы под проведение мероприятий
                        любого формата: свадеб, дней рождений, юбилеев, тематических вечеринок, фуршетов,
                        корпоративных мероприятий. Разнообразие залов и их интерьеров обеспечит успех события любой
                        тематики и масштаба!

                    </p>
                </div>
            </div>
        </div>

        <div class="accommodation__img" data-parallax="scroll" data-image-src="<?php echo $currentUrl?>restaurant_bg.jpg">
        </div>
    </div> <!--accommodation__item-->

    <div class="accommodation__item">
        <div class="accommodation__img" data-parallax="scroll" data-image-src="<?php echo $currentUrl?>conferenz-service_bg.jpg">
        </div>
        <div class="accommodation__descr">
            <div class="accommodation__descr-content right-side">

                <div class="accommodation__img-mobile">
                    <img src="<?php echo $currentUrl?>conferenz-service_bg.jpg" alt=""/>
                </div>
                <div class="item-title">
                    <span class="pre-title">Мероприятия</span>
                    <h3 class="item-title">Праздники и торжества</h3>
                </div>

                <div class="accommodation__descr-descr">
                    <p>Доверьте организацию вашего праздничного мероприятия нашим специалистам. Персональный менеджер поможет определиться с максимально комфортным размещением гостей и проконтролирует работу всех служб в течение праздника.</p>
                </div>
            </div>
        </div>
    </div> <!--accommodation__item-->

    <div class="accommodation__item">
        <div class="accommodation__descr">
            <div class="accommodation__descr-content left-side">
                <div class="accommodation__img-mobile">
                    <img src="<?php echo $currentUrl?>children-relax.jpg" alt=""/>
                </div>
                <div class="item-title">
                    <span class="pre-title">Мероприятия</span>
                    <h3 class="item-title">Детский отдых</h3>
                </div>

                <div class="accommodation__descr-descr">
                    <p>Только незабываемые каникулы вместе с новыми друзьями могут быть лучшим воспоминанием детства! Заряд красками ярких приключений, вечеринок, увлекательных конкурсов, познавательных квестов, интересных мастер-классов и спортивных секций станут ярким впечатлением каждого ребенка.
                    </p>
                </div>
            </div>
        </div>

        <div class="accommodation__img" data-parallax="scroll" data-image-src="<?php echo $currentUrl?>children-relax.jpg">
        </div>
    </div> <!--accommodation__item-->
</section>

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

<!--<section class="advantages">-->
<!--    <div class="container">-->
<!--        <h2 class="section-title">Преимущества</h2>-->
<!--    </div>-->
<!--</section>-->

<section class="address" id="anchor5">
    <div class="address-content">
        <span class="address-item"><i class="fas fa-map-marker-alt"></i>ул. Садовая 2, с. Мрия, Киевская обл.</span>
        <span class="address-item"><i class="fas fa-phone"></i>
             <a href="tel:(067) 445-60-90" class="section-phone">(067) 445-60-90</a>
        </span>

        <span class="address-item"><i class="fas fa-envelope"></i>
            <a href="mailto:test@gmail.com" class="section-phone">test@gmail.com</a>
        </span>


        <span class="address-item">
            <span class="address-item__social">
                <a href="https://www.facebook.com/Babushkinsad/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/babyshkin_sad/" target="_blank"><i class="fab fa-instagram"></i></a>
                 <a href="https://www.booking.com/hotel/ua/babushkin-sad/" target="_blank"><i class="fas fa-book"></i></a>

            </span>
        </span>

    </div>

    <div id="map" class="address-map"></div>

</section>


<?php get_footer() ?>


