$(function () {
    //СЧЕТЧИК АКЦИИ
    loopcounter('counter-inner');

    //Модальное окно на главной

    $(".add-sale").on("click", function () {
        $(".modal-wrapper").css("display", "block");
    });

    $(".close-btn").on("click", function () {
        $(".modal-wrapper").css("display", "none");
    });

    //slick-slider слайдер с популярными товарами

    $(".popular-inner").slick({
        slidesToShow: 3,
        centerPadding: '60px',
        responsive: [
            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 420,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    dots: true,
                }
            }
        ]
    });

    // добавляем класс сослайдером на адаптиве

    function myFunction(x) {
        if (x.matches) {
            $('.products-siries-inner').addClass("slider");
        } else {
            $('.products-siries-inner').removeClass("slider");
        }
    }

    const slider = window.matchMedia("(max-width: 650px)");
    myFunction(slider);


    $('.products-siries-inner.slider').slick({
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 2,
                }

            }
        ]
    })

    // Слайдер с отзывами

    $(".review-slider").slick({})

    //добавляем классы при наведении на работы

    $('.jobs-item')
        .on('mouseenter', function () {
            $(this).find('.jobs-content').hide();
        })
        .on('mouseleave', function () {
            $(this).find('.jobs-content').show();
        });

    //кнопка наверх

    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 90) {
                $(".scrollUp").fadeIn();
            } else {
                $(".scrollUp").fadeOut();
            }
        });

        $(".scrollUp").click(function () {
            $("html, body").animate({scrollTop: 0}, 700);
            return false;
        });
    });

   //слайдер в карточке товара просмотренные товары, с этим товаром покупают
    $('.recent-wrapper-slider').slick({
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 3,
                }

            },
            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 2,
                }

            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                    centerMode: true
                }

            }
        ]
    });

    //фикс навигации

    $(window).scroll(function () {
        if ($(this).scrollTop() >= 120) {
            $(".header-bottom-wrapper").addClass("fix");
        } else {
            $(".header-bottom-wrapper").removeClass("fix");
        }
    });

});