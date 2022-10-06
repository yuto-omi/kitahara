//可視範囲に入った時に画像を表示
$(window).scroll(function () {
    $('.fade-in').each(function () {
        var position = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > position - windowHeight + 50) {
            $(this).addClass('active');
        }
    });
});