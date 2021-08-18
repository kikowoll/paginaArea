$('.conte-panel').on('click', '.dash', function() {
    var aa = $(this),
        bb = aa.next(),
        cc = bb.parent().siblings().find('.arcodeon')
    bb.slideToggle()
    cc.slideUp()
})

// boton menu

$('#btn-menu').on('click', function() {
    $(this).toggleClass('anima')
    $('.panel-control').toggleClass('anima')
})