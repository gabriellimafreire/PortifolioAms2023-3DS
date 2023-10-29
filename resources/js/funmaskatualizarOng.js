$(function(){       //funcao para dados da ONG

    //$('#datafundacao').mask('00/00/0000'); //maskparadatafundacao

    $('#cpnjOng').mask('00.000.000/0000-00', {reverse: true}); //maslparacnpj

    $('#funcionamentojOng').mask('00:00-00:00', {reverse: true}); //mascarafuncionamento

    $('#nomeong').on('input', function () { // func para impedir números no campo de texto

        var limite = 50; // Define o limite de caracteres desejado
        var texto = $(this).val();
                                                                                                                                  
        if (texto.length > limite) {
            // Se o texto exceder o limite, corte o excesso
            $(this).val(texto.substring(0, limite));
        }

        $(this).val($(this).val().replace(/[^A-Za-zÀ-ÖØ-öø-ÿ\s]/g, '')); 
    }); //fimfunc

    $('#descOng').on('input', function() {
        var limite = 100; // Defina o limite desejado
        var valor = $(this).val();

        if (valor.length > limite) {
            $(this).val(valor.slice(0, limite)); // Trunca o valor
        }

        var caracteresRestantes = limite - $(this).val().length;
    });

    $('#enderecojOng').on('input', function() {
        var limite = 100; // Defina o limite desejado
        var valor = $(this).val();

        if (valor.length > limite) {
            $(this).val(valor.slice(0, limite)); // Trunca o valor
        }

        var caracteresRestantes = limite - $(this).val().length;
    });

}); //fim da funcao para dados da ONG

$(function(){

    //$('#datanascrepresentante').mask('00/00/0000');
    $('#cpfrepresentante').mask('000.000.000-00');
    $('#rgrepresentante').mask('00.000.000-0')
    $('#telrepresentante').mask('+00 (00) 00000-0000')


    $('#nomerepresentante').on('input', function () { // func para impedir números no campo de texto e limitar caracteres

        var limite = 50; // Define o limite de caracteres desejado
        var texto = $(this).val();
                                                                                                                                  
        if (texto.length > limite) {
            // Se o texto exceder o limite, corte o excesso
            $(this).val(texto.substring(0, limite));
        }

        $(this).val($(this).val().replace(/[^A-Za-zÀ-ÖØ-öø-ÿ\s]/g, '')); 
    }); //fimfunc

    $('#comprovrepresentante').on('input', function() {
        var limite = 100; // Defina o limite desejado
        var valor = $(this).val();

        if (valor.length > limite) {
            $(this).val(valor.slice(0, limite)); // Trunca o valor
        }

        var caracteresRestantes = limite - $(this).val().length;
    });

});