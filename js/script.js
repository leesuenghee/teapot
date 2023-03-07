let categorys = $(".categorys");
let dashMenu = $(".m-dash > li");

$(".category a").click(function (e) {
  e.preventDefault();
  $(this).toggleClass("active");
  categorys.slideToggle();
});

dashMenu.click(function (e) {
  e.preventDefault();
  dashMenu.removeClass("clicks");
  $(this).toggleClass("clicks");
});
