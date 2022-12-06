function cadastrarFidelidadeAction() {

    var base_url = $("#base_url").val();
    var tipo_bolo = Number($("#tipo").val());
    var codigo_cliente = $("#codigo_cliente").val();

    var bolo_pote = Number($(".bolo_pote").text());
    var bolo_festa = Number($(".bolo_festa").text());
    var bolo_pequeno = Number($(".bolo_pequeno").text());
    var bolo_grande = Number($(".bolo_grande").text());
    var bolo_recheado = Number($(".bolo_recheado").text());

    var data = $("#data_cartao_fidelidade").val();
    var premio = 0;

    switch (tipo_bolo) {
        case 1:
            if(bolo_pote == 9) {
                premio = 1;
            }
            break;
        case 2:
            if(bolo_festa == 9) {
                premio = 2;
            }
            break;
        case 3:
            if(bolo_pequeno == 9) {
                premio = 3;
            }
            break;
        case 4:
            if(bolo_grande == 9) {
                premio = 4;
            }
            break;
        case 5:
            if(bolo_recheado == 9) {
                premio = 5;
            }
            break;
        default:
            break;
    }

    if(tipo_bolo == "") {
        msgErro("Preencha o tipo");
    } else {
        $.ajax({
            type: "POST",
            url: base_url+'inicio/cadastraFidelidade',
            data: {tipo_bolo:tipo_bolo,codigo_cliente:codigo_cliente,data:data,premio:premio},
            dataType: "json",
            success: function (data) {
                if(data.retorno == true) {
                    msgOk(data.msg);
                    if(data.premio == true) {
                       $("#codigo_resgate").val(data.codigo_resgate);
                       $(".premio-modal").modal("show");
                       $(".tipo-bolo").text($("#tipo option:selected").text());
                    } else {
                        // setTimeout(function(){ 
                        //     location.reload(true);
                        // }, 2000);
                    }
                } else {
                    msgErro(data.msg);
                }
            }
        });
    }
}

function finalizaPromocao() {

    var base_url = $("#base_url").val();

    var opcao = $("[name='opcao']:checked").val();
    var cod = $("#codigo_resgate").val();

    if(opcao == null || opcao == undefined) {
        msgErro("Escolha uma opção");
    } else if(opcao == "2" || Number(opcao) == 2) {
        msgOk("Opção salva com sucesso");
        setTimeout(function(){ 
            location.reload(true);
        }, 2000);
    } else {
        $.ajax({
            type: "POST",
            url: base_url+'inicio/finalizaPromocao',
            data: {opcao:opcao,cod:cod},
            dataType: "json",
            success: function (data) {
                if(data.retorno == true) {
                    msgOk(data.msg);
                    setTimeout(function(){ 
                        location.reload(true);
                    }, 2000);
                } else {
                    msgErro(data.msg);
                }
            }
        });
    }
}

function resgatarPromo(id) {

    var base_url = $("#base_url").val();

    $.ajax({
        type: "POST",
        url: base_url+'inicio/resgatarPromo',
        data: {id:id},
        dataType: "json",
        success: function (data) {
            if(data.retorno == true) {
                msgOk(data.msg);
                setTimeout(function(){ 
                    location.reload(true);
                }, 2000);
            } else {
                msgErro(data.msg);
            }
        }
    });
}