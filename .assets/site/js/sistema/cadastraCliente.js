function cadastraCliente() {
    var base_url = $("#base_url").val();
    var nome = $("#nome").val();
    var cpf = $("#cpf_nome").val();
    var franquia = $("#franquia").val();
	var telefone = $("#telefone").val();
	var email = $("#email").val();
    var data = $("#data_nas").val();

    if(nome == "" || cpf == "" || franquia == "") {
        msgErro("Preencha todos os dados");
    } else if(validarCPF(cpf) == false) {
        msgErro("CPF Inválido");
    } else {
        $.ajax({
            type: "POST",
            url: base_url+'inicio/cadastrarClienteAction',
            data: {nome:nome,cpf:cpf,franquia:franquia,telefone:telefone,data:data,email:email},
            dataType: "json",
            success: function (data) {
                if(data.retorno == true) {
                    msgOk(data.msg);
                    setTimeout(function(){
                        window.location.href = base_url + "inicio";
                    },1000);
                } else {
                    msgErro(data.msg);
                }
            }
        });
    }
}

function validarCPF(cpf) {	
	cpf = cpf.replace(/[^\d]+/g,'');	
	if(cpf == '') return false;	
	// Elimina CPFs invalidos conhecidos	
	if (cpf.length != 11 || 
		cpf == "00000000000" || 
		cpf == "11111111111" || 
		cpf == "22222222222" || 
		cpf == "33333333333" || 
		cpf == "44444444444" || 
		cpf == "55555555555" || 
		cpf == "66666666666" || 
		cpf == "77777777777" || 
		cpf == "88888888888" || 
		cpf == "99999999999")
			return false;		
	// Valida 1o digito	
	add = 0;	
	for (i=0; i < 9; i ++)		
		add += parseInt(cpf.charAt(i)) * (10 - i);	
		rev = 11 - (add % 11);	
		if (rev == 10 || rev == 11)		
			rev = 0;	
		if (rev != parseInt(cpf.charAt(9)))		
			return false;		
	// Valida 2o digito	
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