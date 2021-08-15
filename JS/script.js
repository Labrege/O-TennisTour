$(document).ready(function(){
  $(".hamburger-menu").on("click" ,function(){
    $(".header-logo").toggleClass("change-cross");
    $(".navbar").toggleClass("change");
    $(".rest").toggleClass("no-scroll");
  });
});
