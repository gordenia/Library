$(document).ready(function () {
    scroll();
});

function scroll() {
    $(window).scroll(function()
    {
        if($(window).scrollTop() + $(window).height() >= $(document).height()){
            var bookId = $("#bookId").val();
            var url = $(".url").val();
            var data = {"bookId": bookId};

            $.post(url, data, function (data) {
            }, "json");
            console.log('ssss');
            console.log(url);
            console.log(bookId);
        }
    });
}