function entrar()  {
    var base_url = $("#base_url").val();
    var login = $("#login").val();
    var senha = $("#senha").val();
    var franquia = $("#franquia").val();

    if(login == "") {
        msgErro("Preencha o login");
    } else if(senha.length < 6 || senha == "") {
        msgErro("Preencha a senha corretamente");
    } else if(franquia == "") {
        msgErro("Preencha o nome da franquia");
    } else {
        $.ajax({
            type: "POST",
            url: base_url+'login/logar',
            data: {login:login,senha:senha,franquia:franquia},
            dataType: "json",
            success: function (data) {
                if(data.retorno == true) {
                  msgOk(data.msg);
                  setTimeout(function(){
                    window.location.href = base_url + "inicio";
                 }, 3000);
                } else {
                    msgErro(data.msg);
                    $("#entrar input").val("");
                }
            }
        });
    }
}