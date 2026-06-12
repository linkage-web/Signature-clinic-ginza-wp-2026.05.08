$(function(){
    // iosの下のバー対応
    $(document).ready(function(){
        var hSize = $(window).height();

        if (window.matchMedia( '(max-width: 900px)' ).matches) {
            $('#mainvisual').height(hSize);
            $('#loading').height(hSize);
        }
    });

    $(window).resize(function () {
        var hSize = $(window).height();

        if (window.matchMedia( '(max-width: 900px)' ).matches) {
            $('#mainvisual').height(hSize);
            $('#loading').height(hSize);
        }
    });
});