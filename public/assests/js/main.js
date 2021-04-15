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


/*  

edit_prod_btn 

new_product_container 

edit-prod-form

edit_btn
*/

$('.new_product_container .edit_prod_btn').on('click',function(){
    $('.new_product_container').fadeOut(200);
    $('.edit-prod-form').fadeIn(250)
})

$('.edit-prod-form .edit_btn').on('click',function(){
    $('.edit-prod-form').fadeOut(200)
    $('.new_product_container').fadeIn(250);
})







