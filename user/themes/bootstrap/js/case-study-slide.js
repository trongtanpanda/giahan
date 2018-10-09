
$( document ).ready(function() {
    withOfImg();
})
function withOfImg() {
    var withItem = $('.item .content-img').width();
    $('.item.container img').css("width", withItem*0.9 + 'px');
};
$( window ).resize(function() {
    withOfImg();
})

