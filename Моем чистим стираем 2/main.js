let menu = document.querySelector(".icon");
menu.addEventListener("click", function() {
    let x = document.querySelector(".menu-list");
    x.classList.toggle("responsive");
    // if (menu.className === "top-nav"){
    //     menu.className += "responsive";
    // }else{
    //     menu.className = "top-nav";
    // }
});

jQuery(document).ready(function () {
     
     $("#phone_1").mask("+7 (999) 999-99-99"); 
    
   
    jQuery('.send-form').click( function() {
        var form = jQuery(this).closest('form');
        
        if ( form.valid() ) {
            form.css('opacity','.5');
            var actUrl = form.attr('action');

            jQuery.ajax({
                url: actUrl,
                type: 'post',
                dataType: 'html',
                data: form.serialize(),
                success: function(data) {
                    form.html(data);
                    form.css('opacity','1');
                    //form.find('.status').html('форма отправлена успешно');
                    //$('#myModal').modal('show') // для бутстрапа
                },
                error:   function() {
                     form.find('.status').html('серверная ошибка');
                }
            });
        }
    });


});

// s