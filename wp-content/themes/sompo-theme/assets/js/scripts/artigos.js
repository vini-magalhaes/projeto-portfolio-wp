jQuery(function($){

    $('#continuar a').on('click', function(e){
        e.preventDefault();

        $('#conteudo').css('max-height', 'initial');

        $('#continuar').hide();

    })

});