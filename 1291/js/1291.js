$(document).ready(function(){
    //check star
    $('.table-inbox tr td .fa-star').click(function(){
        $(this).css('color','#f78a09');
        
    });

    //check all
    $('.chk-all input[type="checkbox"]').click(function(){
        if($('input[type="checkbox"]').prop("checked") == true){
                var checkboxes = document.getElementsByName('check');
 
                for (var i = 0; i < checkboxes.length; i++){
                    checkboxes[i].checked = true;
                }
        }
        else if($('input[type="checkbox"]').prop("checked") == false){
                var checkboxes = document.getElementsByName('check');
 
                for (var i = 0; i < checkboxes.length; i++){
                    checkboxes[i].checked = false;
                }
        }
    });


});