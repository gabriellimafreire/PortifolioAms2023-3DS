$(function(){
    var atual_fs, next_fs, prev_fs, fieldset;//atribuindo variaveis

    $('.next').click(function(){ //funcao para passar de nivel
        atual_fs = $(this).parent();
        next_fs = $(this).parent().next();
        fieldset = $('fieldset')
        $('#progress li').eq($(fieldset).index(next_fs)).addClass('ativo');
        atual_fs.hide(800);
        next_fs.show(800);
    });

    $('#formulario input[type=submit]').click(function(){
        return false;
    });//funcao para nao retornar o get do submit

    $('.prev').click(function(){//funcao para voltar de nivel
        atual_fs = $(this).parent();
        prev_fs = $(this).parent().prev();

        $('#progress li').eq($(fieldset).index(atual_fs)).removeClass('ativo');
        atual_fs.hide(800);
        prev_fs.show(800);
    });


});