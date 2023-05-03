$(document).ready(function () {
    // "use strict"
    toastr.warning("warning o")

    $('#resend-otp-button').click(function () {
        toastr.success("OTP sent successfully", "Check your email!", {
            timeOut: 500,
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !0,
            positionClass: "toast-top-right",
            preventDuplicates: !0,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
            tapToDismiss: !1,
            closeHtml: '<div class="circle_progress"></div><span class="progress_count"></span> <i class="la la-close"></i> <a href="#">Suggest</a>'
        });
    });

})(jQuery);