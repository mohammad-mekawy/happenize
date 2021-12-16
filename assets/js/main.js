$(document).ready(function(){
    // Contact Page
    $('li').click(function(){
        $('#'+$(this).data('addr')).siblings('span').hide();
        $('#'+$(this).data('addr')).show();
        $(this).siblings('li').removeClass('active');
        $(this).addClass('active');
    })
    $('.industries-boxes .industry-box').click(function(){
        $('#'+$(this).data('id')).siblings('.industries-box-info').hide();
        $('#'+$(this).data('id')).show();
        $('.industry-box').removeClass('active');
        $(this).addClass('active');
    })
    $('.owl-one').owlCarousel({
        loop:true,
        dots:true,
        items:1,
        autoplay:true,
        autoplayTimeout:4000,
    })
    $(".owl-dots").addClass("container")
    $('.owl-two').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        items:1,
        // autoplay:true,
        autoplayTimeout:4000,
    })

    $(".menu-btn").click(function(){
        $('.menu-hover-fill li').addClass("transition-in")
    })
    $(".btn-close").click(function(){
        $('.menu-hover-fill li').removeClass('transition-in')
    })

  });