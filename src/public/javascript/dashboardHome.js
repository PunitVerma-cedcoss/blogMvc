$('.logo').click(function (e) {
    e.preventDefault();
    $(".sidebar").css("margin-left", "-100%")
    $(".main").removeClass("ml-64")
    $('.open').toggleClass('scale-0');
});

$('.open').click(function (e) {
    e.preventDefault();
    $(".sidebar").css("margin-left", "0")
    $(".main").addClass("ml-64")
    $('.open').toggleClass('scale-0');

});