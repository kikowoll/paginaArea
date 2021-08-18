var altura,
    tope = false,
    mensaje = false

$(function() {
    altura = $(window).scrollTop()
    if(!tope) {
        if(altura > 115) {
           animaMenos()
        } 
    }
})

$(document).on('ready',function() {
    var tap = $(window).scrollTop()
    console.log(tap);
    if(tap > 115) {
        animaMenos()
    } else{
        animaMas()
    }
})

$(window).on('scroll', function() {
    altura = $(window).scrollTop()
    //console.log(altura);
    if(!tope) {
        if(altura > 115) {
           animaMenos()
        } 
    } else {
        if(altura < 115) {
            animaMas()
        }
    }
})

function animaMenos() {
    tope = true
    $('.logo').css({
        width: 70+'px',
        height: 70+'px',
        marginTop: -2+'px'
    })
    $('header').css('background-color','#333333')
    $('.texto-banner').css('opacity', 0)
}

function animaMas() {
    tope = false
            $('.logo').css({
                width: 250+'px',
                height: 250+'px',
                marginTop: 120+'px'
            })
            $('header').css('background-color','transparent')
            $('.texto-banner').css('opacity', 1)
}

// acordeon reuniones
$('.conte-ciudad').on('click', '.cabeza', function() {
    var aa = $(this),
        bb = aa.next(),
        cc = bb.parent().siblings().find('.conte-info')

    bb.slideToggle()
    cc.slideUp()
})

$('.conte-info').on('click', '.cabeza-muni', function() {
    var aa = $(this),
        bb = aa.next(),
        cc = bb.parent().siblings().find('.conte-info-muni')

    bb.slideToggle()
    aa.toggleClass('rodar')
    cc.slideUp().prev().removeClass('rodar')
})

// boton contacto robot
$('#btn-verificar').on('click', function() {
    if(!mensaje) {
        mensaje = true
        $('.fondo-dos').css({
            transition: 'all 1s',
            width: 0
        })
        $('.fondo-uno').css({
            transition: 'all 1s',
            width: 20+'px'
        })
        setTimeout(() => {
            $('.base').css('background-color', '#28a745')
            $('#btn-submit').attr('disabled', false)
        }, 1000);
    } else {
        mensaje = false
        $('.fondo-dos').css({
            transition: 'all 1s',
            width: 20+'px'
        })
        $('.fondo-uno').css({
            transition: 'all 1s',
            width: 0+'px'
        })
        setTimeout(() => {
            $('.base').css('background-color', '#6c757d')
            $('#btn-submit').attr('disabled', true)
        }, 1000);
    }
})

// animacion formulario
$('.cajas').on('keyup', 'input', probar)

function probar() {
    var valor = $(this).val()
    //console.log(valor);
    if(valor != "") {
        $(this).siblings('label').addClass('anima')
    } else {
        $(this).siblings('label').removeClass('anima')
    }
}

$('.cajon').on('keyup', 'textarea', kedar)

function kedar() {
    var valor = $(this).val()
    //console.log(valor);
    if(valor != "") {
        $(this).addClass('anima')
    } else {
        $(this).removeClass('anima')
    }
}

// resetea

function borrar() {
    $('label').removeClass('anima')
    $('textarea').removeClass('anima')
}

// animacion nombre de los grupos
$('.marquee').each(cambiando)
var ancho = $(window).width()

function cambiando() {
    var tam = this.textContent.length
    if(ancho < 1200) {
        if(tam > 20) {
            $(this).addClass('paso') 
         }
    }
    
}