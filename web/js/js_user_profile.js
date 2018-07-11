$(document).ready(function () {
    changeAvatar();
    deleteUser();
});

function changeAvatar() {
    $('.avatar-user').on('change', function(){

        files = this.files;
        var data = new FormData();
        var url = $('.url').val();

        $.each( files, function( key, value ){
            data.append( key, value );
        });

        data.append( 'avatarUser', 1 );

        $.ajax({
            url         : url,
            type        : 'POST',
            data        : data,
            cache       : false,
            dataType    : 'json',
            processData : false,
            contentType : false,
            success     : function( respond, status, jqXHR ){

                if( typeof respond.error === 'undefined' ){
                    var files_path = respond.files;
                    var html = '';
                    $.each( files_path, function( key, val ){
                        html += val +'<br>';
                    });
                    $('.ajax-reply').html( html );
                }
                else {
                    console.log('ОШИБКА: ' + respond.error );
                }
            },

            error: function( jqXHR, status, errorThrown ){
                console.log( 'ОШИБКА AJAX запроса: ' + status, jqXHR );
            }
        });
        console.log(data);
    });
}


function deleteUser() {
    $('.btn-del-user').on('click', function(){
        var userId = $(this).parent().children(".user_id").val();
        var url = $(this).parent().children(".url").val();
        var data = {"userId": userId};
        $.post(url, data, function (data) {
        }, "json");
        $(this).parent().animate({height: "toggle", opacity: "toggle"}, "slow");
    });
}

