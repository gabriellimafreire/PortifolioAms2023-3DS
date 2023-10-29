export function rolagem(listagem, tamanhoCard, direcao) {
    var tamanhoRolagem = listagem.scrollLeft()
    var tamanhoLista = listagem.width()
    var tamanhoCard = tamanhoCard.width() + 16
    var valor = (tamanhoCard * parseInt(tamanhoLista / tamanhoCard)) / 2
    if(direcao == 0){
        listagem.animate({scrollLeft: tamanhoRolagem - valor}, 500)
    }else{
        listagem.animate({scrollLeft: tamanhoRolagem + valor}, 500)
    }
}





