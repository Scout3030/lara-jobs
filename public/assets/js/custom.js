(function ($) {
    "use strict";
    jQuery(".mean-menu").meanmenu({ meanScreenWidth: "991" });
    $("select").niceSelect();
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 150) {
            $(".navbar-area").addClass("is-sticky");
        } else {
            $(".navbar-area").removeClass("is-sticky");
        }
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $(".go-top").addClass("active");
        if (scrolled < 300) $(".go-top").removeClass("active");
    });
    $(".testimonials-slider").owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        nav: true,
        dots: true,
        autoplay: true,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-right-arrow'></i>"],
    });
    $(".partner-slider").owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        autoplay: true,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-right-arrow'></i>"],
        responsive: { 0: { items: 1 }, 414: { items: 1 }, 576: { items: 3 }, 768: { items: 3 }, 992: { items: 4 }, 1200: { items: 5 } },
    });
    $(".hiring-list-slider").owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: true,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-right-arrow'></i>"],
    });
    $(".testimonials-slider-three").owlCarousel({
        loop: true,
        nav: true,
        autoplay: true,
        autoplayHoverPause: true,
        mouseDrag: true,
        margin: 30,
        center: true,
        dots: true,
        smartSpeed: 1000,
        navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-right-arrow'></i>"],
        responsive: { 0: { items: 1 }, 576: { items: 1 }, 768: { items: 1 }, 992: { items: 3 }, 1200: { items: 3 } },
    });
    $(".go-top").on("click", function () {
        $("html, body").animate({ scrollTop: "0" }, 1800);
    });
    $(".accordion")
        .find(".accordion-title")
        .on("click", function () {
            $(this).toggleClass("active");
            $(this).next().slideToggle("fast");
            $(".accordion-content").not($(this).next()).slideUp("fast");
            $(".accordion-title").not($(this)).removeClass("active");
        });
    $(".accordion-widget")
        .find(".accordion-widget-title")
        .on("click", function () {
            $(this).toggleClass("active");
            $(".accordion-widget-content").toggleClass("open");
            $(this).next().slideToggle("800");
        });
    function makeTimer() {
        var endTime = new Date("november  30, 2021 17:00:00 PDT");
        var endTime = Date.parse(endTime) / 1000;
        var now = new Date();
        var now = Date.parse(now) / 1000;
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - days * 86400) / 3600);
        var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
        var seconds = Math.floor(timeLeft - days * 86400 - hours * 3600 - minutes * 60);
        if (hours < "10") {
            hours = "0" + hours;
        }
        if (minutes < "10") {
            minutes = "0" + minutes;
        }
        if (seconds < "10") {
            seconds = "0" + seconds;
        }
        $("#days").html(days + "<span>Days</span>");
        $("#hours").html(hours + "<span>Hours</span>");
        $("#minutes").html(minutes + "<span>Minutes</span>");
        $("#seconds").html(seconds + "<span>Seconds</span>");
    }
    setInterval(function () {
        makeTimer();
    }, 300);
    jQuery(window).on("load", function () {
        $(".preloader").addClass("preloader-deactivate");
    });
    // $(".newsletter-form")
    //     .validator()
    //     .on("submit", function (event) {
    //         if (event.isDefaultPrevented()) {
    //             formErrorSub();
    //             submitMSGSub(false, "Please enter your email correctly.");
    //         } else {
    //             event.preventDefault();
    //         }
    //     });
    function callbackFunction(resp) {
        if (resp.result === "success") {
            formSuccessSub();
        } else {
            formErrorSub();
        }
    }
    // function formSuccessSub() {
    //     $(".newsletter-form")[0].reset();
    //     submitMSGSub(true, "Thank you for subscribing!");
    //     setTimeout(function () {
    //         $("#validator-newsletter").addClass("hide");
    //     }, 4000);
    // }
    // function formErrorSub() {
    //     $(".newsletter-form").addClass("animated shake");
    //     setTimeout(function () {
    //         $(".newsletter-form").removeClass("animated shake");
    //     }, 1000);
    // }
    function submitMSGSub(valid, msg) {
        if (valid) {
            var msgClasses = "validation-success";
        } else {
            var msgClasses = "validation-danger";
        }
        $("#validator-newsletter, #validator-newsletter-2").removeClass().addClass(msgClasses).text(msg);
    }
    // $(".newsletter-form").ajaxChimp({ url: "/subscription", callback: callbackFunction });
    $(".odometer").appear(function (e) {
        var odo = $(".odometer");
        odo.each(function () {
            var countNumber = $(this).attr("data-count");
            $(this).html(countNumber);
        });
    });
    $(".others-option-for-responsive .dot-menu").on("click", function () {
        $(".others-option-for-responsive .container .container").toggleClass("active");
    });
    if ($(".wow").length) {
        var wow = new WOW({ mobile: false });
        wow.init();
    }
    $(".popup-youtube, .popup-vimeo").magnificPopup({ disableOn: 300, type: "iframe", mainClass: "mfp-fade", removalDelay: 160, preloader: false, fixedContentPos: false });
    jQuery(".skill-bar").each(function () {
        jQuery(this)
            .find(".progress-content")
            .animate({ width: jQuery(this).attr("data-percentage") }, 2000);
        jQuery(this)
            .find(".progress-number-mark")
            .animate(
                { left: jQuery(this).attr("data-percentage") },
                {
                    duration: 2000,
                    step: function (now, fx) {
                        var data = Math.round(now);
                        jQuery(this)
                            .find(".percent")
                            .html(data + "%");
                    },
                }
            );
    });
    $(".shorting").mixItUp();
    $("#datetimepicker").datepicker({ weekStart: 0, todayBtn: "linked", language: "es", orientation: "bottom auto", keyboardNavigation: false, autoclose: true });
    $("#range-slider").slider({
        range: true,
        min: 500,
        max: 10000,
        values: [500, 10000],
        slide: function (event, ui) {
            $("#price-amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        },
    });
    $("#price-amount").val("$" + $("#range-slider").slider("values", 0) + " - $" + $("#range-slider").slider("values", 1));
})(jQuery);
