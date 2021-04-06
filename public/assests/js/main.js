$(document).ready(function(){
    $('.slick_slider .slick_img_container').on('click',function() {
        $('.slick_slider .slick_img_container').css({
            'color':'#000'
        })
        $(this).css({
            "color":"rgb(238, 152, 22)"
        })
    })

    $('.fav_icon i').on('click',function () {
        $(this).toggleClass('far fa-heart')
    })
    $('.fav_icon i').on('click',function () {
        $(this).toggleClass('fas fa-heart')
    })
})







