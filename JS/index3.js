var i = 0;
var btnPrev = $('.btn--prev');
var btnNext = $('.btn--next');
var img1 = $('.img1');
var img2 = $('.img2');
var img3 = $('.img3');
var vc1 = $('.valeurs-container-1');
var vc2 = $('.valeurs-container-2');
var vc3 = $('.valeurs-container-3');
var paginationWrapper = $('.pagination-wrapper');

btnPrev.click(function(){
    i--;
    if(i<0){
        i=2;
    }
    var page = i+1;
    $('.carrousel-number').text('0'+page+ ' / 03');
    paginationWrapper.addClass('transition-prev');
    if(i==0){
        img1.addClass('display');
        img1.removeClass('no-display');
        img2.addClass('no-display');
        img2.removeClass('display');
        img3.addClass('no-display');
        img3.removeClass('display');

        vc1.addClass('display');
        vc1.removeClass('no-display');
        vc2.addClass('no-display');
        vc2.removeClass('display');
        vc3.addClass('no-display');
        vc3.removeClass('display');
    }

    if(i==1){
        img2.addClass('display');
        img2.removeClass('no-display');
        img1.addClass('no-display');
        img1.removeClass('display');
        img3.addClass('no-display');
        img3.removeClass('display');

        vc2.addClass('display');
        vc2.removeClass('no-display');
        vc1.addClass('no-display');
        vc1.removeClass('display');
        vc3.addClass('no-display');
        vc3.removeClass('display');
    }

    if(i==2){
        img3.addClass('display');
        img3.removeClass('no-display');
        img1.addClass('no-display');
        img1.removeClass('display');
        img2.addClass('no-display');
        img2.removeClass('display');

        vc3.addClass('display');
        vc3.removeClass('no-display');
        vc2.addClass('no-display');
        vc2.removeClass('display');
        vc1.addClass('no-display');
        vc1.removeClass('display');
    }
    var timeout = setTimeout(cleanClasses, 500);

});

btnNext.click(function(){
    i++;
    if(i>2){
        i=0;
    }
    var page = i+1;
    $('.carrousel-number').text('0'+page+ ' / 03');
    paginationWrapper.addClass('transition-next');

    if(i==0){
        img1.addClass('display');
        img1.removeClass('no-display');
        img2.addClass('no-display');
        img2.removeClass('display');
        img3.addClass('no-display');
        img3.removeClass('display');

        vc1.addClass('display');
        vc1.removeClass('no-display');
        vc2.addClass('no-display');
        vc2.removeClass('display');
        vc3.addClass('no-display');
        vc3.removeClass('display');
    }

    if(i==1){
        img2.addClass('display');
        img2.removeClass('no-display');
        img1.addClass('no-display');
        img1.removeClass('display');
        img3.addClass('no-display');
        img3.removeClass('display');

        vc2.addClass('display');
        vc2.removeClass('no-display');
        vc1.addClass('no-display');
        vc1.removeClass('display');
        vc3.addClass('no-display');
        vc3.removeClass('display');
    }

    if(i==2){
        img3.addClass('display');
        img3.removeClass('no-display');
        img1.addClass('no-display');
        img1.removeClass('display');
        img2.addClass('no-display');
        img2.removeClass('display');

        vc3.addClass('display');
        vc3.removeClass('no-display');
        vc2.addClass('no-display');
        vc2.removeClass('display');
        vc1.addClass('no-display');
        vc1.removeClass('display');
    }

    var timeout = setTimeout(cleanClasses, 500);

});

function cleanClasses() {
    if(paginationWrapper.hasClass('transition-next')) {
      paginationWrapper.removeClass('transition-next')
    } else if(paginationWrapper.hasClass('transition-prev')) {
      paginationWrapper.removeClass('transition-prev')
    }
  }





