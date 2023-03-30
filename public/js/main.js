$(function () {
    "use strict";

    const options = {
        containers: ["#swup", "#swupMenu"],
        animateHistoryBrowsing: true,
        linkSelector: "a:not([data-no-swup])",
    };
    const swup = new Swup(options);

    // scrollbar
    Scrollbar.use(OverscrollPlugin);
    Scrollbar.init(document.querySelector("#scrollbar"), {
        damping: 0.05,
        renderByPixel: true,
        continuousScrolling: true,
    });
    Scrollbar.init(document.querySelector("#scrollbar2"), {
        damping: 0.05,
        renderByPixel: true,
        continuousScrolling: true,
    });

    // page loading
    $(document).ready(function () {
        anime({
            targets: ".jerum-preloader .jerum-preloader-content",
            opacity: [0, 1],
            delay: 200,
            duration: 600,
            easing: "linear",
            complete: function (anim) {},
        });
        anime({
            targets: ".jerum-preloader",
            opacity: [1, 0],
            delay: 2200,
            duration: 400,
            easing: "linear",
            complete: function (anim) {
                $(".jerum-preloader").css("display", "none");
            },
        });
    });

    var bar = new ProgressBar.Line(preloader, {
        strokeWidth: 1.7,
        easing: "easeInOut",
        duration: 1400,
        delay: 750,
        trailWidth: 1.7,
        svgStyle: {
            width: "100%",
            height: "100%",
        },
        step: (state, bar) => {
            bar.setText(Math.round(bar.value() * 100) + " %");
        },
    });

    bar.animate(1);

    // counters
    anime({
        targets: ".jerum-counter-frame",
        opacity: [0, 1],
        duration: 800,
        delay: 2300,
        easing: "linear",
    });

    anime({
        targets: ".jerum-counter",
        delay: 1300,
        opacity: [1, 1],
        complete: function (anim) {
            $(".jerum-counter").each(function () {
                $(this)
                    .prop("Counter", 0)
                    .animate(
                        {
                            Counter: $(this).text(),
                        },
                        {
                            duration: 2000,
                            easing: "linear",
                            step: function (now) {
                                $(this).text(Math.ceil(now));
                            },
                        }
                    );
            });
        },
    });

    //progressbars;
    var bar = new ProgressBar.Circle(java, {
        strokeWidth: 7,
        easing: "easeInOut",
        duration: 1400,
        delay: 2500,
        trailWidth: 7,
        step: function (state, circle) {
            var value = Math.round(circle.value() * 100);
            if (value === 0) {
                circle.setText("");
            } else {
                circle.setText(value);
            }
        },
    });

    bar.animate(0.9);

    var bar = new ProgressBar.Circle(php, {
        strokeWidth: 7,
        easing: "easeInOut",
        duration: 1400,
        delay: 2600,
        trailWidth: 7,
        step: function (state, circle) {
            var value = Math.round(circle.value() * 100);
            if (value === 0) {
                circle.setText("");
            } else {
                circle.setText(value);
            }
        },
    });

    bar.animate(0.8);

    var bar = new ProgressBar.Circle(flutter, {
        strokeWidth: 7,
        easing: "easeInOut",
        duration: 1400,
        delay: 2700,
        trailWidth: 7,
        step: function (state, circle) {
            var value = Math.round(circle.value() * 100);
            if (value === 0) {
                circle.setText("");
            } else {
                circle.setText(value);
            }
        },
    });

    bar.animate(0.5);

    var bar = new ProgressBar.Line(reactjs, {
        strokeWidth: 1.72,
        easing: "easeInOut",
        duration: 1400,
        delay: 2800,
        trailWidth: 1.72,
        svgStyle: {
            width: "100%",
            height: "100%",
        },
        step: (state, bar) => {
            bar.setText(Math.round(bar.value() * 100) + " %");
        },
    });

    bar.animate(0.9);

    var bar = new ProgressBar.Line(laravel, {
        strokeWidth: 1.72,
        easing: "easeInOut",
        duration: 1400,
        delay: 2900,
        trailWidth: 1.72,
        svgStyle: {
            width: "100%",
            height: "100%",
        },
        step: (state, bar) => {
            bar.setText(Math.round(bar.value() * 100) + " %");
        },
    });

    bar.animate(0.8);

    var bar = new ProgressBar.Line(springmvc, {
        strokeWidth: 1.72,
        easing: "easeInOut",
        duration: 1400,
        delay: 3000,
        trailWidth: 1.72,
        svgStyle: {
            width: "100%",
            height: "100%",
        },
        step: (state, bar) => {
            bar.setText(Math.round(bar.value() * 100) + " %");
        },
    });

    bar.animate(0.9);

    var bar = new ProgressBar.Line(nodejs, {
        strokeWidth: 1.72,
        easing: "easeInOut",
        duration: 1400,
        delay: 3100,
        trailWidth: 1.72,
        svgStyle: {
            width: "100%",
            height: "100%",
        },
        step: (state, bar) => {
            bar.setText(Math.round(bar.value() * 100) + " %");
        },
    });

    bar.animate(0.85);

    // var bar = new ProgressBar.Line(lineprog5, {
    //     strokeWidth: 1.72,
    //     easing: "easeInOut",
    //     duration: 1400,
    //     delay: 3200,
    //     trailWidth: 1.72,
    //     svgStyle: {
    //         width: "100%",
    //         height: "100%",
    //     },
    //     step: (state, bar) => {
    //         bar.setText(Math.round(bar.value() * 100) + " %");
    //     },
    // });

    // bar.animate(0.85);

    // Contact form
    $(".jerum-input").keyup(function () {
        if ($(this).val()) {
            $(this).addClass("jerum-active");
        } else {
            $(this).removeClass("jerum-active");
        }
    });

    $("#form").submit(function () {
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize(),
        }).done(function () {
            var tl = anime.timeline({
                easing: "easeOutExpo",
            });

            tl.add({
                targets: ".jerum-submit",
                opacity: 0,
                scale: 0.5,
            }).add({
                targets: ".jerum-success",
                scale: 1,
                height: "45px",
            });
        });
        return false;
    });

    // portfolio filter
    $(".jerum-filter a").on("click", function () {
        $(".jerum-filter .jerum-current").removeClass("jerum-current");
        $(this).addClass("jerum-current");

        var selector = $(this).data("filter");
        $(".jerum-grid").isotope({
            filter: selector,
        });
        return false;
    });

    // masonry Grid
    $(".jerum-grid").isotope({
        filter: "*",
        itemSelector: ".jerum-grid-item",
        transitionDuration: ".6s",
    });

    // slider testimonials
    var swiper = new Swiper(".jerum-testimonial-slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        speed: 1400,
        autoplay: true,
        autoplaySpeed: 5000,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".jerum-testi-swiper-next",
            prevEl: ".jerum-testi-swiper-prev",
        },
        breakpoints: {
            1500: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 1,
            },
        },
    });

    // slider works
    var swiper = new Swiper(".jerum-works-slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        speed: 1400,
        autoplay: {
            delay: 4000,
        },
        autoplaySpeed: 5000,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".jerum-works-swiper-next",
            prevEl: ".jerum-works-swiper-prev",
        },
        breakpoints: {
            1500: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 1,
            },
        },
    });

    // slider blog
    var swiper = new Swiper(".jerum-blog-slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        speed: 1400,
        autoplay: {
            delay: 4000,
        },
        autoplaySpeed: 5000,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".jerum-blog-swiper-next",
            prevEl: ".jerum-blog-swiper-prev",
        },
        breakpoints: {
            1500: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 1,
            },
        },
    });

    $('[data-fancybox="gallery"]').fancybox({
        animationEffect: "zoom-in-out",
        animationDuration: 600,
        transitionDuration: 1200,
        buttons: ["zoom", "slideShow", "close"],
    });

    $('[data-fancybox="diplome"]').fancybox({
        animationEffect: "zoom-in-out",
        animationDuration: 600,
        transitionDuration: 1200,
        buttons: ["zoom", "slideShow", "thumbs", "close"],
    });

    $('[data-fancybox="avatar"]').fancybox({
        animationEffect: "zoom-in-out",
        animationDuration: 600,
        transitionDuration: 1200,
        buttons: ["zoom", "close"],
    });

    $('[data-fancybox="recommendation"]').fancybox({
        animationEffect: "zoom-in-out",
        animationDuration: 600,
        transitionDuration: 1200,
        buttons: ["zoom", "slideShow", "thumbs", "close"],
    });

    $.fancybox.defaults.hash = false;

    $(".current-menu-item a").clone().appendTo(".jerum-current-page");

    $(".jerum-map-overlay").on("click", function () {
        $(this).addClass("jerum-active");
    });

    $(".jerum-info-bar-btn").on("click", function () {
        $(".jerum-info-bar").toggleClass("jerum-active");
        $(".jerum-menu-bar-btn").toggleClass("jerum-disabled");
    });

    $(".jerum-menu-bar-btn").on("click", function () {
        $(".jerum-menu-bar-btn , .jerum-menu-bar").toggleClass("jerum-active");
        $(".jerum-info-bar-btn").toggleClass("jerum-disabled");
    });

    $(".jerum-info-bar-btn , .jerum-menu-bar-btn").on("click", function () {
        $(".jerum-content").toggleClass("jerum-active");
    });

    $(".jerum-curtain , .jerum-mobile-top-bar").on("click", function () {
        $(
            ".jerum-menu-bar-btn , .jerum-menu-bar , .jerum-info-bar , .jerum-content , .jerum-menu-bar-btn , .jerum-info-bar-btn"
        ).removeClass("jerum-active , jerum-disabled");
    });

    $(".menu-item").on("click", function () {
        if ($(this).hasClass("menu-item-has-children")) {
            $(this).children(".sub-menu").toggleClass("jerum-active");
        } else {
            $(
                ".jerum-menu-bar-btn , .jerum-menu-bar , .jerum-info-bar , .jerum-content , .jerum-menu-bar-btn , .jerum-info-bar-btn"
            ).removeClass("jerum-active , jerum-disabled");
        }
    });

    // reinit
    document.addEventListener("swup:contentReplaced", function () {
        Scrollbar.use(OverscrollPlugin);
        Scrollbar.init(document.querySelector("#scrollbar"), {
            damping: 0.05,
            renderByPixel: true,
            continuousScrolling: true,
        });
        Scrollbar.init(document.querySelector("#scrollbar2"), {
            damping: 0.05,
            renderByPixel: true,
            continuousScrolling: true,
        });

        $("#form").submit(function () {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: $(this).serialize(),
            }).done(function () {
                var tl = anime.timeline({
                    easing: "easeOutExpo",
                });

                tl.add({
                    targets: ".jerum-submit",
                    opacity: 0,
                    scale: 0.5,
                }).add({
                    targets: ".jerum-success",
                    scale: 1,
                    height: "45px",
                });
            });
            return false;
        });

        // Masonry Grid
        $(".jerum-grid").isotope({
            filter: "*",
            itemSelector: ".jerum-grid-item",
            transitionDuration: ".6s",
        });

        $(".jerum-filter a").on("click", function () {
            $(".jerum-filter .jerum-current").removeClass("jerum-current");
            $(this).addClass("jerum-current");

            var selector = $(this).data("filter");
            $(".jerum-grid").isotope({
                filter: selector,
            });
            return false;
        });

        anime({
            targets: ".jerum-counter-frame",
            opacity: [0, 1],
            duration: 800,
            delay: 300,
            easing: "linear",
        });

        $(".jerum-counter").each(function () {
            $(this)
                .prop("Counter", 0)
                .animate(
                    {
                        Counter: $(this).text(),
                    },
                    {
                        duration: 2000,
                        easing: "linear",
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        },
                    }
                );
        });

        // slider testimonials
        var swiper = new Swiper(".jerum-testimonial-slider", {
            slidesPerView: 3,
            spaceBetween: 30,
            speed: 1400,
            autoplay: true,
            autoplaySpeed: 5000,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".jerum-testi-swiper-next",
                prevEl: ".jerum-testi-swiper-prev",
            },
            breakpoints: {
                1500: {
                    slidesPerView: 2,
                },
                1200: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 1,
                },
            },
        });

        // slider works
        var swiper = new Swiper(".jerum-works-slider", {
            slidesPerView: 3,
            spaceBetween: 30,
            speed: 1400,
            autoplay: {
                delay: 4000,
            },
            autoplaySpeed: 5000,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".jerum-works-swiper-next",
                prevEl: ".jerum-works-swiper-prev",
            },
            breakpoints: {
                1500: {
                    slidesPerView: 2,
                },
                1200: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 1,
                },
            },
        });

        // slider blog
        var swiper = new Swiper(".jerum-blog-slider", {
            slidesPerView: 3,
            spaceBetween: 30,
            speed: 1400,
            autoplay: {
                delay: 4000,
            },
            autoplaySpeed: 5000,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".jerum-blog-swiper-next",
                prevEl: ".jerum-blog-swiper-prev",
            },
            breakpoints: {
                1500: {
                    slidesPerView: 3,
                },
                1200: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 1,
                },
            },
        });

        $('[data-fancybox="gallery"]').fancybox({
            animationEffect: "zoom-in-out",
            animationDuration: 600,
            transitionDuration: 1200,
            buttons: ["zoom", "slideShow", "thumbs", "close"],
        });

        $('[data-fancybox="diplome"]').fancybox({
            animationEffect: "zoom-in-out",
            animationDuration: 600,
            transitionDuration: 1200,
            buttons: ["zoom", "slideShow", "thumbs", "close"],
        });

        $('[data-fancybox="recommendation"]').fancybox({
            animationEffect: "zoom-in-out",
            animationDuration: 600,
            transitionDuration: 1200,
            buttons: ["zoom", "slideShow", "thumbs", "close"],
        });

        $.fancybox.defaults.hash = false;

        $(".current-menu-item a").clone().prependTo(".jerum-current-page");

        $(".menu-item").on("click", function () {
            if ($(this).hasClass("menu-item-has-children")) {
                $(this).children(".sub-menu").toggleClass("jerum-active");
            } else {
                $(
                    ".jerum-menu-bar-btn , .jerum-menu-bar , .jerum-info-bar , .jerum-content , .jerum-menu-bar-btn , .jerum-info-bar-btn"
                ).removeClass("jerum-active , jerum-disabled");
            }
        });
    });
});
