jQuery(function($){

    if($('select#categoria').length > 0){
        console.log('foi');
        let value = $('#texto-busca').val();

        if(value != ''){
            $('#enviar').attr('disabled', false);
        }else{
            if($('select#categoria').val() != 0){
                $('#enviar').attr('disabled', false);
            }else{
                $('#enviar').attr('disabled', true);
            }
        }

        $('select#categoria').on('change', function(){

            let value = $(this).val();
            let buscaValue = $('#texto-busca').val();

            if(value != 0){
                $('#filtro-artigos').submit();
            }else{
                if(buscaValue != ''){
                    $('#filtro-artigos').submit();  
                }else{
                    window.location.href = 'https://'+ window.location.hostname + '/artigos';
                }
            }

        });
    
        $('#texto-busca').on('keyup', function(){
            let value = $(this).val();

            if(value != ''){
                $('#enviar').attr('disabled', false);

                value = retira_acentos(value);

                $(this).val(value);
            }else{
                if($('select#categoria').val() != 0){
                    $('#enviar').attr('disabled', false);
                }else{
                    $('#enviar').attr('disabled', true);
                }
            }
        })
    }

});


function retira_acentos(str) 
{

    com_acento = "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝŔÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿŕ";

    sem_acento = "AAAAAAACEEEEIIIIDNOOOOOOUUUUYRsBaaaaaaaceeeeiiiionoooooouuuuybyr";
    novastr="";
    for(i=0; i<str.length; i++) {
        troca=false;
        for (a=0; a<com_acento.length; a++) {
            if (str.substr(i,1)==com_acento.substr(a,1)) {
                novastr+=sem_acento.substr(a,1);
                troca=true;
                break;
            }
        }
        if (troca==false) {
            novastr+=str.substr(i,1);
        }
    }
    console.log(novastr);
    return novastr;
}  