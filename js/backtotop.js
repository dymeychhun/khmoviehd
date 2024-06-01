$(function () {
  $(".back-to-the-top").hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".back-to-the-top").fadeIn();
    } else {
      $(".back-to-the-top").fadeOut();
    }
  });
  $(".back-to-the-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 500);
  });
});
