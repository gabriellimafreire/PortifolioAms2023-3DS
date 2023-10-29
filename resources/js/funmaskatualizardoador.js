$(function(){

    $('#datanascdoador').mask('00/00/0000') //maskparadatadenascimento

    $('#cpfdoador').mask('000.000.000-00') //maslparacpf

    $('#fonedoador').mask('+55 (00) 00000-0000') //maskparatelefone


    
    $('#nomedoador').on('input', function () { // func para impedir números no campo de texto

        var limite = 30; // Define o limite de caracteres desejado
        var texto = $(this).val();
                                                                                                                                  
        if (texto.length > limite) {
            // Se o texto exceder o limite, corte o excesso
            $(this).val(texto.substring(0, limite));
        }

        $(this).val($(this).val().replace(/[^A-Za-zÀ-ÖØ-öø-ÿ\s]/g, '')); 
    }); //fimfunc


    $('#sobrenomedoador').on('input', function () { // func para impedir números no campo de texto
        var limite = 20; // Define o limite de caracteres desejado
        var texto = $(this).val();
                                                                       
        if (texto.length > limite) {
            // Se o texto exceder o limite, corte o excesso
            $(this).val(texto.substring(0, limite));
        }

        $(this).val($(this).val().replace(/[^A-Za-zÀ-ÖØ-öø-ÿ\s]/g, '')); 
    }); //fimfunc  
    
});//encerrandofuncao