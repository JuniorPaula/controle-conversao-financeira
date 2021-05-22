
var valor_original;

function convert() {

    // taxa de 10%
    var taxa = 0.1;
    
    // Variáveis dos valores do Dollar Americano para Real
    var americanDollarToReais = 5.24;

    // Variáveis dos valores do Dollar Canadense para Real
    var canidianDolarToReal = 4.33;

    // Variáveis dos valores do EURO para Real
    var euroToReal = 6.43;

    // Variáveis dos valores do Libra para Real
    var libraToReal = 7.46;

    // Variáveis dos valores do Ienes para Real
    var ieneToReal = 0.05;

    var valor_original = parseFloat(document.getElementById("valor_original").value);
    

     // condição para verificar se o 'id' selecionado é igual a USD e BRL
     if(document.getElementById("optionFrom").value == "USD" && document.getElementById("optionTo").value == "BRL") {
        var resultado = document.getElementById("valor_convertido").value = valor_original * americanDollarToReais.toFixed(2);

        var valorFinal = resultado * taxa;

        document.getElementById("taxa_cobrada").value = valorFinal.toFixed(2) + " %";

    } else if(document.getElementById("optionFrom").value == "BRL" && document.getElementById("optionTo").value == "USD") {
        var resultado = valor_original / americanDollarToReais;

        document.getElementById("valor_convertido").value = resultado.toFixed(2);

        var valorFinal = resultado * taxa;

        document.getElementById("taxa_cobrada").value = valorFinal.toFixed(2) + " %";
    }


    // condição para verificar se o 'id' selecionado é igual a CAD e BRL
    if(document.getElementById("optionFrom").value == "CAD" && document.getElementById("optionTo").value == "BRL") {
        var resultado = document.getElementById("valor_convertido").value = valor_original * canidianDolarToReal.toFixed(2);
    
        var valorFinal = resultado * taxa;
    
        document.getElementById("taxa_cobrada").value = valorFinal.toFixed(2) + " %";
    
    } else if(document.getElementById("optionFrom").value == "BRL" && document.getElementById("optionTo").value == "CAD") {
        var resultado = valor_original / canidianDolarToReal;

        document.getElementById("valor_convertido").value = resultado.toFixed(2);

        var valorFinal = resultado * taxa;

        document.getElementById("taxa_cobrada").value = valorFinal.toFixed(2) + " %";
    }


    // condição para verificar se o 'id' selecionado é igual a EUR e BRL
    if(document.getElementById("optionFrom").value == "EUR" && document.getElementById("optionTo").value == "BRL") {
        var resultado = document.getElementById("valor_convertido").value = valor_original * euroToReal.toFixed(2);
    
        var valorFinal = resultado * taxa;
    
        document.getElementById("taxa_cobrada").value = valorFinal.toFixed(2) + " %";
    
    } else if(document.getElementById("optionFrom").value == "BRL" && document.getElementById("optionTo").value == "EUR") {
        var resultado = valor_original / euroToReal;

        document.getElementById("valor_convertido").value = resultado.toFixed(2);

        var valorFinal = resultado * taxa;

        document.getElementById("taxa_cobrada").value = valorFinal.toFixed(2) + " %";
    }



    // condição para verificar se o 'id' selecionado é igual a GPB e BRL
    if(document.getElementById("optionFrom").value == "GPB" && document.getElementById("optionTo").value == "BRL") {
        var resultado = document.getElementById("valor_convertido").value = valor_original * libraToReal.toFixed(2);
    
        var valorFinal = resultado * taxa;
    
        document.getElementById("taxa_cobrada").value = valorFinal.toFixed(2) + " %";
    
    } else if(document.getElementById("optionFrom").value == "BRL" && document.getElementById("optionTo").value == "GPB") {
        var resultado = valor_original / libraToReal;

        document.getElementById("valor_convertido").value = resultado.toFixed(2);

        var valorFinal = resultado * taxa;

        document.getElementById("taxa_cobrada").value = valorFinal.toFixed(2) + " %";
    }

    // condição para verificar se o 'id' selecionado é igual a JPY e BRL
    if(document.getElementById("optionFrom").value == "JPY" && document.getElementById("optionTo").value == "BRL") {
        var resultado = document.getElementById("valor_convertido").value = valor_original * ieneToReal.toFixed(2);
    
        var valorFinal = resultado * taxa;
    
        document.getElementById("taxa_cobrada").value = valorFinal.toFixed(2) + " %";
    
    } else if(document.getElementById("optionFrom").value == "BRL" && document.getElementById("optionTo").value == "JPY") {
        var resultado = valor_original / ieneToReal;

        document.getElementById("valor_convertido").value = resultado.toFixed(2);

        var valorFinal = resultado * taxa;

        document.getElementById("taxa_cobrada").value = valorFinal.toFixed(2) + " %";
    }


   




}

    // Função para limpar os capos do formulario para fazer nova pesquisa
    // Recuperar o ID do botão para executar a função
document.getElementById("limpar").addEventListener("click", function() {
 
    var valor_original = parseFloat(document.getElementById("valor_original").value);
    var valor_convertido = document.getElementById("valor_convertido").value;
    var taxa_cobrada = document.getElementById("taxa_cobrada").value;
    var name = document.getElementById("name").value;

    

    if(valor_original || valor_convertido || taxa_cobrada || name) {
        document.getElementById("valor_original").value = '';
        document.getElementById("valor_convertido").value = '';
        document.getElementById("taxa_cobrada").value = '';
        document.getElementById("name").value = '';
    }

});