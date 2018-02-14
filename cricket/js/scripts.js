
$( document ).ready(function() {
    

var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    nav:false,
    margin:15,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },            
        960:{
            items:1
        },
        1200:{
            items:3
        }
    }
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});

// Dropdown navbar menu on hover
$('.dropdown-menu', this).css('margin-top', 0);
$('.dropdown').hover(function () {
    $('.dropdown-toggle', this).trigger('click').toggleClass("disabled");
});
    
});




