$(window).on('scroll', function() {
    var topPos = $(this).scrollTop();
    if(topPos<$('#espace_membre_apropos_2').offset().top-100){
        $('.boule-1').addClass('boule-active');
        $('.boule-2').removeClass('boule-active');
        $('.boule-3').removeClass('boule-active');
        $('.boule-4').removeClass('boule-active');
        $('.boule-5').removeClass('boule-active');

        $('.a-1').addClass('link-active');
        $('.a-2').removeClass('link-active');
        $('.a-3').removeClass('link-active');
        $('.a-4').removeClass('link-active');
        $('.a-5').removeClass('link-active');        
    }

    if(topPos>$('#espace_membre_apropos_2').offset().top-100 && topPos<=$('#espace_membre_apropos_3').offset().top-100){
        $('.boule-2').addClass('boule-active');
        $('.boule-1').removeClass('boule-active');
        $('.boule-3').removeClass('boule-active');
        $('.boule-4').removeClass('boule-active');
        $('.boule-5').removeClass('boule-active');

        $('.a-2').addClass('link-active');
        $('.a-1').removeClass('link-active');
        $('.a-3').removeClass('link-active');
        $('.a-4').removeClass('link-active');
        $('.a-5').removeClass('link-active');
    }

    if(topPos>$('#espace_membre_apropos_3').offset().top - 100 && topPos<=$('#espace_membre_apropos_4').offset().top - 100){
        $('.boule-3').addClass('boule-active');
        $('.boule-1').removeClass('boule-active');
        $('.boule-2').removeClass('boule-active');
        $('.boule-4').removeClass('boule-active');
        $('.boule-5').removeClass('boule-active');

        $('.a-3').addClass('link-active');
        $('.a-1').removeClass('link-active');
        $('.a-2').removeClass('link-active');
        $('.a-4').removeClass('link-active');
        $('.a-5').removeClass('link-active');
    }

    if(topPos>$('#espace_membre_apropos_4').offset().top - 100 && topPos<=$('#espace_membre_apropos_5').offset().top - 100){
        $('.boule-4').addClass('boule-active');
        $('.boule-1').removeClass('boule-active');
        $('.boule-2').removeClass('boule-active');
        $('.boule-3').removeClass('boule-active');
        $('.boule-5').removeClass('boule-active');

        $('.a-4').addClass('link-active');
        $('.a-1').removeClass('link-active');
        $('.a-2').removeClass('link-active');
        $('.a-3').removeClass('link-active');
        $('.a-5').removeClass('link-active');
    }

    if(topPos>$('#espace_membre_apropos_5').offset().top - 100){
        $('.boule-5').addClass('boule-active');
        $('.boule-1').removeClass('boule-active');
        $('.boule-2').removeClass('boule-active');
        $('.boule-3').removeClass('boule-active');
        $('.boule-4').removeClass('boule-active');

        $('.a-5').addClass('link-active');
        $('.a-1').removeClass('link-active');
        $('.a-2').removeClass('link-active');
        $('.a-3').removeClass('link-active');
        $('.a-4').removeClass('link-active');
    }
});

console.log()