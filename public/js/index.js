$(function(){
    new Swiper('#scroll-class',{
    effect : 'horizontal',
    slidesPerView: 'auto',
    centeredSlides: true,
    observer:true,
    loop:true,
    observeParents:true,
    spaceBetween: 60,
    initialSlide :2,
    prevButton:'.swiper-button-prev',
    nextButton:'.swiper-button-next'
});
new Swiper('#scroll-card',{
    prevButton:'.icon-prev',
    nextButton:'.icon-next'
});
 $(".scroll_ul li").each(function(index, el) {
    var index = $(this).index();
       $(this).find('.reflection').css({
         'background':'url('+$(this).find('img').prop('src')+') bottom center no-repeat'
       });
 });

})
