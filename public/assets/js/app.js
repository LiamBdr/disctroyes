$(document).ready(function() {

    /**********
    GESTION NAV DEROULANTE
    **********/
    $('.header-deroul').on( "click", function() {

        if ($(this).hasClass('open')) {
            $(this).removeClass('open')
            $('.header-deroul svg').removeClass('open');
            $('.header-deroul .deroul-list').removeClass('open');
        } else {
            $(this).addClass('open')
            $('.header-deroul svg').addClass('open');
            $('.header-deroul .deroul-list').addClass('open');
        }
        
    });

    $('main').on( "click", function() {

        if ($('.header-deroul').hasClass('open')) {
            $('.header-deroul').removeClass('open')
            $('.header-deroul svg').removeClass('open');
            $('.header-deroul .deroul-list').removeClass('open');
        }
        
    });

    /**********
    GESTION MENU HAMBURGER
    **********/

    $('.header-hamburger').on( "click", function(e) {

        e.preventDefault();

        if ($('.header-hamburger input').prop( "checked") === true) {
            $('.header-hamburger input').prop( "checked", false);
            $('.nav-responsive').removeClass('open');
        } else {
            $('.header-hamburger input').prop( "checked", true);
            $('.nav-responsive').addClass('open');
        }

    });


     /**********
    GESTION HORAIRES FIXES 
    **********/

    $('.horaires-button').on( "click", function() {

        if ($('.horaires-fixed').hasClass('open')) {
            $('.horaires-fixed').removeClass('open');
        } else {
            $('.horaires-fixed').addClass('open');
        }

    });

});