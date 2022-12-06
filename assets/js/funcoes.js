function SomenteNumero(string) {
    return string.replace(/[^\d]+/g, '');
}
//Função que valida o CPF;
function ValidarCPF(cpf) {
    cpf = SomenteNumero(cpf);

    if (cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999")
        return false;

    add = 0;

    for (i=0; i < 9; i ++)
        add += parseInt(cpf.charAt(i)) * (10 - i);

    rev = 11 - (add % 11);

    if (rev == 10 || rev == 11)
        rev = 0;

    if (rev != parseInt(cpf.charAt(9)))
        return false;

    add = 0;

    for (i = 0; i < 10; i ++)
        add += parseInt(cpf.charAt(i)) * (11 - i);

    rev = 11 - (add % 11);

    if (rev == 10 || rev == 11)
        rev = 0;

    if (rev != parseInt(cpf.charAt(10)))
        return false;
    
    return true;
}

function msgErro(msg){
    toastr.error(msg, 'Erro', {
        timeOut: 6000,
        progressBar: true,
        closeButton: true,
        positionClass: "toast-bottom-right"
    });
}

function msgOk(msg){
    toastr.success(msg, 'Sucesso', {
        timeOut: 6000,
        progressBar: true,
        closeButton: true,
        positionClass: "toast-bottom-right",
    });
}

function submit(formulario) {
    $(formulario +" span").css("display","none");
    $(formulario +" button img").css("display","block");
    $(formulario +" button").prop("disabled",true);
}
function limpa_load(formulario) {
    $(formulario +" span").css("display","block");
    $(formulario +" button img").css("display","none");
    $(formulario +" button").prop("disabled",false);
}

function loaderOn() {
    $(".loader").css("display","block");
    $("#processo").css("opacity","0.6");
    $("#processo").css("pointer-events","none");
    $("#mapeamento").css("opacity","0.6");
    $("#mapeamento").css("pointer-events","none");
    
}
function loaderOff() {

    setTimeout(function(){
        $(".loader").css("display","none");
       
    }, 800);

    setTimeout(function(){
        $("#processo").css("opacity","1.0");
        $("#processo").css("pointer-events","auto");
        $("#mapeamento").css("opacity","1.0");
        $("#mapeamento").css("pointer-events","auto");
    }, 600);
}