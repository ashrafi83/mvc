$(document).ready(function(){
    function btnDefault(){
        $('#register-form button').attr('disabled',false);
        $('#register-form button').html('عضویت');
    }
    function btnSending(){
        $('#register-form button').attr('disabled',true);
        $('#register-form button').html('ارسال ...');
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

    $('#register-form').submit(function(event){
        event.preventDefault();
        $.ajax({
            url: "users/opr_register",
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
                    window.location='users/login';
                } else{
                    messageBox(data);
                }
            }
        });
    })
});