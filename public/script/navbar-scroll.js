$(function(){
    // saat dokumen di scroll makan akan menjalankan fungsi dibawah
    $(document).scroll(function(){
        var $nav = $(".navbar-fixed-top");
        // var nav akan diberikan fungsi toggle yang berupa scroll
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
    })
})