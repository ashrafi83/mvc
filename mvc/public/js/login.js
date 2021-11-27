$(document).ready(function(){
    function btnDefault(){
        $('#login-form button').attr('disabled',false);
        $('#login-form button').html('ورود');
    }
    function btnSending(){
        $('#login-form button').attr('disabled',true);
        $('#login-form button').html('ارسال ...');
    }
    function messageBox(massage,timeClose=null){
        $('.massage-form').show();
        $('.massage-form').html(massage);
        if (timeClose != null){
            setTimeout(function(){
                $('.massage-form').hide();
            } , timeClose);
        }
    }

    $('#login-form').submit(function(event){
        event.preventDefault();
        $.ajax({
            url: "users/opr_login",
            type: "post",
            data: $(this).serialize(),
            beforeSend: function(){
                btnSending()
            },
            error: function(){
                btnDefault();
            },
            success: function(data){
                btnDefault();

                if (data == 'Ok'){
                    window.location="profile";
                } else if(data == 'No'){
                    messageBox('نام کاربری یا پسورد اشتباه می باشد!')
                } else if(data == 'Empty_username'){
                    messageBox('نام کاربری خود را وارد نمایید!')
                } else if(data == 'Empty_password'){
                    messageBox('رمز عبور را وارد نمایید!')
                } else if(data == 'Empty_All'){
                    messageBox('نام کاربری و رمز عبور را وارد نمایید!')
                }
            }
        });

    }); 
});