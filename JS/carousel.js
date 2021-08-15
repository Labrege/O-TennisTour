var scrolled=15;

$(document).ready(function(){
  $(".btnNext").on("click" ,function(){
    cardwidth = $(".sous-card").width();
    contwidth = $(".sous-card-container").width();

    scrolled=scrolled+cardwidth+30;
      $(".sous-card-container").animate({
        scrollLeft:  scrolled
    });
    console.log(scrolled);
  });
  $(".btnBack").on("click" ,function(){
    cardwidth = $(".sous-card").width();
    contwidth = $(".sous-card-container").width();

    scrolled=scrolled-cardwidth-30;
      $(".sous-card-container").animate({
        scrollLeft:  scrolled
    });
  });
});

/*
scrolled=scrolled+290;
      $(".sous-card-container").animate({
        scrollLeft:  scrolled
    });
    console.log(scrolled);

    if (scrolled>870) {
      $(".sous-card-container").animate({
        scrollLeft:  0
    });
    scrolled = 0;
    }
*/