//  Preloader
jQuery(window).on("load", function () {
    $('#preloader').fadeOut(500);
    $('#main-wrapper').addClass('show');
});


(function ($) {

    "use strict"
    $('.duration-option a')
        .on('click', function () {
            $(".duration-option a.active")
                .removeClass("active");
            $(this)
                .addClass('active');
        });

    // File Upload 
    $(".file-upload-wrapper").on("change", ".file-upload-field", function () {
        $(this).parent(".file-upload-wrapper").attr("data-text", $(this).val().replace(/.*(\/|\\)/, ''));
    });


    //to keep the current page active (Sidebar menu)
    $(function () {
        for (var nk = window.location,
            o = $(".menu a").filter(function () {
                return this.href == nk;
            })
                .addClass("active")
                .parent()
                .addClass("active"); ;) {
            // console.log(o)
            if (!o.is("li")) break;
            o = o.parent()
                .addClass("show")
                .parent()
                .addClass("active");
        }

    });

    $('[data-toggle="tooltip"]').tooltip();

    $('.sidebar-right-trigger').on('click', function () {
        $('.sidebar-right').toggleClass('show');
    });






})(jQuery);

document.querySelector("#main-wrapper:has(.content-body.users-content-body) .sidebar .menu li.dropdown").classList.add("show")



function applyFieldStyles(command) {
    document.execCommand(command, false, null);
}


