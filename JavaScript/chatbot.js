$(document).ready(function(){
    let state = true;
    $(".chat_icon").click(function(event){
        
        if(state == true){
            $('.chat_box').css('display','block');
            state = false;
        }else{
            $('.chat_box').css('display','none');
            state = true;
        }
    })

    $('.conv-form-wrapper').convform({selectInputStyle: 'disable'});
})