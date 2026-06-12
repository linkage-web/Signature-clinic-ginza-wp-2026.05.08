$(function() {
    /**
     * メニュー、トップに戻るボタンの表示非表示
     */
    $(window).on('scroll', function(){
        let scrollPosition = $(this).scrollTop();

        if(scrollPosition > 300) {
            $('#mid-under-menu').addClass('is-active'); //途中から表示されるメニュー 表示
        }else {
            $('#mid-under-menu').removeClass('is-active'); //途中から表示されるメニュー 表示
        }
    });
});