// (function ($) {
//
// })


$(document).ready(function () {

    $('body').on('click', '[href*="#anchor"]', function(e){
        let fixed_offset = 100;
        $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
        e.preventDefault();
    });

    let fixedMenu = function () {

        let menuWrap = $('.menu-wrap');

        let menuWrapHeight = $('.menu-wrap').height();

        let headerHeiaght = $('.header').height();

        window.onscroll = function() {


            if (window.pageYOffset > menuWrapHeight + 500) {
                menuWrap.css({
                    'position' : 'fixed',
                    'padding' : '0'
                });

                $('.logo img').css({
                    'height' : '80px',
                    'width' : '130px'
                });

                //$('.header').prepend('<div class="test"></div>');

                $('.header').css({
                        'height' : headerHeiaght
                    });

            } else {

                menuWrap.css({
                    'position' : 'inherit'
                });

                $('.logo img').css({
                    'height' : '100px',
                    'width' : '160px'
                });

            }

        }
    };

    function initMap() {
        map = new google.maps.Map(
            document.getElementById('map'),
            {center: new google.maps.LatLng(50.43902809999999, 30.149361), zoom: 15,
                styles: [
                    {elementType: 'geometry', stylers: [{color: '#edecec'}]}, //main bg
                    {elementType: 'labels.text.stroke', stylers: [{color: '#DFE7FF'}]}, //name of cities
                    {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                    {
                        featureType: 'administrative.locality',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#746855'}]
                    },
                    {
                        featureType: 'poi',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#000000'}]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'geometry',
                        stylers: [{color: '#f5f5f5'}]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#6b9a76'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry',
                        stylers: [{color: '#f5f5f5'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#e7e7e7'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#9ca5b3'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry',
                        stylers: [{color: '#dfc7a4'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#e7e7e7'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#f3d19c'}]
                    },
                    {
                        featureType: 'transit',
                        elementType: 'geometry',
                        stylers: [{color: '#e7e7e7'}]
                    },
                    {
                        featureType: 'transit.station',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#f5f5f5'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'geometry',
                        stylers: [{color: '#ffffff'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#f5f5f5'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.stroke',
                        stylers: [{color: '#f5f5f5'}]
                    }
                ]});

        var iconBase =
            'https://developers.google.com/maps/documentation/javascript/examples/full/images/';

        var icons = {
            parking: {
                icon: iconBase + 'parking_lot_maps.png'
            },
            library: {
                icon: 'wp-content/themes/reda_lending/img/icons/map-marker.png'
            }

        };

        var features = [
            {
                position: new google.maps.LatLng(50.43902809999999, 30.149361),
                type: 'library'
            }
        ];

        // Create markers.
        for (var i = 0; i < features.length; i++) {
            var marker = new google.maps.Marker({
                position: features[i].position,
               icon: icons[features[i].type].icon,
                map: map
            });
        };

//open map after click on marker
        google.maps.event.addListener(marker, 'click', function() {
            window.location.href = 'https://maps.google.com/maps?ll=50.439028,30.149361&z=15&t=m&hl=uk-UA&gl=US&mapclient=apiv3&cid=3007503388140011142';
        });
    }

    let scrollTop = function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#scroll-up').fadeIn();
            } else {
                $('#scroll-up').fadeOut();
            }
        });

        $('#scroll-up').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 100);
            return false;
        });
    };


    let menuMobile = function () {
        $('.close-button').click(function () {
            $('.menu-mobile').slideToggle('slow');
        });


        $(document).on('click', '.sandwich', function () {
            //$(this).toggleClass('sandwich--active');
            $('.menu-mobile').toggle("slow");
        });

    }

    fixedMenu();
    initMap();
    scrollTop();
    menuMobile();

});