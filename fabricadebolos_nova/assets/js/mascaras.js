$(document).ready(function() {
    $("#telefone"). mask("(99) 9999-99999");
    $("#cpf_nome").mask("999.999.999-99");
    $("#senha_cadastro").mask("999999");
    $("#senha_cadastro2").mask("999999");
    $("#datanascimento_cadastro").mask("99/99/9999");
    $(".data-format").mask("99/99/9999");
    $("#senha2-cadastro").mask("999999");
    $("#cep_cadastro").mask("99999-999");
    $("#rg").mask("99.999.999-A");
    $("#data_cartao_fidelidade").mask("99/99/9999");
    $('.moedaReal').mask('#.##0,00', {reverse: true});
});