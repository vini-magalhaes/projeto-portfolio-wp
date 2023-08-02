jQuery(function($){
    if($(window).width() < 993){

        $('li.menu-item-has-children > a').on('click', function(e){
            e.preventDefault();
            let parent = $(this).parent();
            let submenu = parent.find('.sub-menu');

            if(submenu.hasClass('show')){

                submenu.removeClass('show');    
            }else{

                submenu.addClass('show');
            }
        })
    }

})