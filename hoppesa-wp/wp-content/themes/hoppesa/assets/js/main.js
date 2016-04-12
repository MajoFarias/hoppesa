
// animateMenu***********
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 5) {
        $(".clearHeader").addClass("shadowHeader");
    } else {
        $(".clearHeader").removeClass("shadowHeader");
    }
});
// animateMenu***********
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 5) {
        $(".clearMargin").addClass("addMargin");
    } else {
        $(".clearMargin").removeClass("addMargin");
    }
});



//galería****

$(document).ready(function(){

    /* default settings */
    $('.venobox').venobox(); 


    /* custom settings */
    $('.venobox_custom').venobox({
        framewidth: '400px',        // default: ''
        frameheight: '300px',       // default: ''
        border: '10px',             // default: '0'
        bgcolor: '#5dff5e',         // default: '#fff'
        titleattr: 'data-title',    // default: 'title'
        numeratio: true,            // default: false
        infinigall: true            // default: false
    });

    /* auto-open #firstlink on page load */
    $("#firstlink").venobox().trigger('click');
});