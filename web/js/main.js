$(document).ready(function () {
    toogleMenu();
    preview();
    starRating();
    deleteComment();
});

function toogleMenu() {
    $("#menu_icon").click(function () {
        clickGamburger();
    });
    $('.message a').click(function(){
        $(".user").animate({height: "toggle", opacity: "toggle"}, "slow");
    });
    $("#resize").focus(function()  {
        var elem = document.getElementById('resize');
        if (elem.clientHeight < elem.scrollHeight){
            $(this).height(elem.scrollHeight);
        }
    });
}

function clickGamburger() {
    $(".sidebar nav ul").toggleClass("show_menu");
    $("#menu_icon").toggleClass("close_menu");
    $(".sidebar").height($(".show_menu").height() + $("header").height());
}

function preview() {
    $.uploadPreview({
        input_field: ".image-upload",   // По умолчанию: .image-upload
        preview_box: ".image-preview",  // По умолчанию: .image-preview
        label_field: ".image-label",    // По умолчанию: .image-label
        label_default: null,   // По умолчанию: Choose File
        label_selected: "Сменить картинку",  // По умолчанию: Change File
        no_label: false,                // По умолчанию: false
        success_callback: null          // По умолчанию: null
    });

    $('.image-preview').css('background-image', 'url("' + $('.img-change').attr("src") + '")');
    $('.image-preview').css('background-position', 'center');
}

function starRating() {
    $('.star').barrating({
        theme: 'fontawesome-stars',
        readonly: true
    });

    $('.star-edit').barrating({
        theme: 'fontawesome-stars'
    });
}

function deleteComment() {
    $('.btn-del').on('click', function(){
        var commentId = $(this).parent().children(".comment_id").val();
        var url = $('.url').val();
        var data = {"id": commentId};
        $.post(url, data, function (data) {
        }, "json");
        $(this).parent().animate({height: "toggle", opacity: "toggle"}, "slow");
    });
}


