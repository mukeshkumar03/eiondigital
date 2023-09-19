(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Initiate the wowjs
  new WOW().init();

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 45) {
      $(".navbar").addClass("sticky-top shadow-sm");
    } else {
      $(".navbar").removeClass("sticky-top shadow-sm");
    }
  });

  // Dropdown on mouse hover
  const $dropdown = $(".dropdown");
  const $dropdownToggle = $(".dropdown-toggle");
  const $dropdownMenu = $(".dropdown-menu");
  const showClass = "show";

  $(window).on("load resize", function () {
    if (this.matchMedia("(min-width: 992px)").matches) {
      $dropdown.hover(
        function () {
          const $this = $(this);
          $this.addClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "true");
          $this.find($dropdownMenu).addClass(showClass);
        },
        function () {
          const $this = $(this);
          $this.removeClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "false");
          $this.find($dropdownMenu).removeClass(showClass);
        }
      );
    } else {
      $dropdown.off("mouseenter mouseleave");
    }
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1500,
    dots: true,
    loop: true,
    center: true,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });

  // Vendor carousel
  $(".vendor-carousel").owlCarousel({
    loop: true,
    margin: 45,
    dots: false,
    loop: true,
    autoplay: true,
    smartSpeed: 1000,
    responsive: {
      0: {
        items: 2,
      },
      576: {
        items: 4,
      },
      768: {
        items: 6,
      },
      992: {
        items: 8,
      },
    },
  });

  $("#quote-form").validate({
    errorClass: "text-danger",
    rules: {
      name: "required",
      message: "required",
      email: {
        required: true,
        email: true,
      },
    },
    messages: {
      name: "Please specify your name",
      email: {
        required: "We need your email address to contact you",
        email: "Your email address must be in the format of name@example.com",
      },
    },
    submitHandler: function (form, event) {
      event.preventDefault();
      $.ajax({
        type: "POST",
        url: "./service/quote_service.php",
        data: $(form).serialize(),
      }).done(function (data) {
        if (data === "1") {
          form.reset();
          $("#quote-success").fadeIn().delay(5000).fadeOut();
        } else {
          $("#quote-error").fadeIn().delay(5000).fadeOut();
        }
      });
    },
  });

  $("#contact-form").validate({
    errorClass: "text-danger",
    rules: {
      name: "required",
      subject: { required: true },
      message: "required",
      email: {
        required: true,
        email: true,
      },
    },
    messages: {
      name: "Please specify your name",
      email: {
        required: "We need your email address to contact you",
        email: "Your email address must be in the format of name@example.com",
      },
    },
    submitHandler: function (form, event) {
      event.preventDefault();
      $.ajax({
        type: "POST",
        url: "./service/contact_service.php",
        data: $(form).serialize(),
      }).done(function (data) {
        if (data === "1") {
          form.reset();
          $("#contact-success").fadeIn().delay(5000).fadeOut();
        } else {
          $("#contact-error").fadeIn().delay(5000).fadeOut();
        }
      });
    },
  });
})(jQuery);
