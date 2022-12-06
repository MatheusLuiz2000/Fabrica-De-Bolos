$(document).ready(function() {

    $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            var min = parseInt( $('#min').val(), 10 );
            var max = parseInt( $('#max').val(), 10 );
            var age = parseFloat( data[3] ) || 0; // use data for the age column
     
            if ( ( isNaN( min ) && isNaN( max ) ) ||
                 ( isNaN( min ) && age <= max ) ||
                 ( min <= age   && isNaN( max ) ) ||
                 ( min <= age   && age <= max ) )
            {
                return true;
            }
            return false;
        }
    );

    var base_url = $("#base_url").val();
    
    setTimeout(function(){
        $(".easy-autocomplete").css("width","100%");
        $(".cpf_nome").css("color","#99abb4");
    }, 0);
    
    var options = {

        url: function(phrase) {
          return base_url + 'inicio/getCliente';
        },
      
        getValue: function(element) {
            console.log(element);
            return element.cpf_cliente + " - " +  element.nome_cliente;
        },

        placeholder: "Pesquise o cliente ...",

        list: {
            match: {
                enabled: true
            },
            onSelectItemEvent: function() {
                var cpf = $("#cpf_nome_2").getSelectedItemData().codigo_cliente;
                $("#codigo_hidden").val(cpf);
            }
        },

        ajaxSettings: {
          method: "POST",
          dataType: "json",
          data: {dataType: "banco" },
        },
      
        preparePostData: function(data) {
          data.phrase = $(".cpf_nome").val();
          return data;
        },
      
        requestDelay: 100
    };

    $(".cpf_nome").easyAutocomplete(options);
});

function buscaCliente() {

    var cliente = $(".cpf_nome").val();
    var cpf = $("#codigo_hidden").val();
    var base_url = $("#base_url").val();

    if(cliente == "") {
        msgErro("Procure um cliente");
        $(".cpf_nome").focus();
    } else if(cpf == "") {
        msgErro("Procure um cliente");
    }  else {
        $.ajax({
            type: "POST",
            url: base_url+'inicio/buscaCliente',
            data: {cpf:cpf},
            dataType: "json",
            success: function (data) {
                if(data.retorno == true) {
                    $(".container").append(data.data);

                    setTimeout(function(){
                        $(".search-wrap").attr("class","wrap listar search-wrap animated bounceOutRight");
                    }, 310);

                    setTimeout(function(){
                        $(".wrap.listar.search-wrap").addClass("off");
                    }, 310);

                    setTimeout(function(){
                        $(".wrap.listar.search-wrap").addClass("off");
                        $(".cliente-dados").attr("class","wrap listar cliente-dados animated bounceInLeft");
                    }, 310);

                    setTimeout(function(){
                        $("#cpf_nome").val("");
                        $("#cpf_hidden").val("");
                    }, 500);
                    console.log("aq");
                    var table = "";
                    $('.dados').DataTable({
                        initComplete: function () {
                            this.api().columns().every( function () {
                                var column = this;
                                var select = $('<select><option value=""></option></select>')
                                    .appendTo( $(column.footer()).empty() )
                                    .on('change', function () {
                                        var val = $.fn.dataTable.util.escapeRegex(
                                            $(this).val()
                                        );
                                        column
                                            .search( val ? '^'+val+'$' : '', true, false )
                                            .draw();
                                    });
                 
                                column.data().unique().sort().each( function ( d, j ) {
                                    select.append( '<option value="'+d+'">'+d+'</option>' )
                                });
                            } );
                        }
                    });
                } else {
                    msgErro(data.msg);
                    $("#cpf_nome").val("");
                    $("#cpf_hidden").val("");
                }
            }
        });
    }
}

function voltarBusca() {

    setTimeout(function(){
        $(".cliente-dados").attr("class","wrap listar cliente-dados animated bounceOutRight");
    }, 310);

    setTimeout(function(){
        $(".wrap.listar.cliente-dados").addClass("off");
    }, 310);

    setTimeout(function(){
        $(".wrap.listar.search-wrap").attr("class","wrap listar search-wrap animated bounceInLeft");
    }, 310);

    $(".cliente-dados").remove();
}

function cadastrarFidelidade(cod) {
    var nome = $(cod).data("nome");
    var cpf = $(cod).data("cpf");
    var codigo = $(cod).data("codigo");
    var d = new Date(); 
    $(".content-dados-cliente").append("<div class='cadastrarFidelidade'><div class='input-group'><span class='label'>Cliente</span><input type='text' value="+ cpf +" class='input' disabled name='cpf' id='cpf'></div><input type='hidden' value="+ codigo +" id='codigo_cliente'><div class='input-group'><span class='label'>Tipo Cartão</span><select class='input' name='tipo' id='tipo'><option value=''>Selecione uma opção</option><option value='1'>Bolo de Pote</option><option value='2'>Bolo</option></select></div><div class='input-group'><span class='label'>Data(USAR PADRAO DD/MM/YYYY)</span><input type='text' class='input' name='data_cartao_fidelidade' id='data_cartao_fidelidade' value="+ dataAtualFormatada() +"></div><div class='buttons-fidelidade'><button class='button-style-1' onclick='cadastrarFidelidadeAction()'>Cadastrar</button><button class='button-style-1' onclick='CancelarFidelidade();'>Cancelar</button></div></div>");
    $("#data_cartao_fidelidade").mask("99/99/9999");
}
function cadastrarFidelidadeAction() {

    var base_url = $("#base_url").val();
    var tipo = $("#tipo").val();
    var cod = $("#codigo_cliente").val();
    var bolo = $(".numero_bolo strong").text();
    var bolo_pote = $(".numero_bolo_pote strong").text();
    var data = $("#data_cartao_fidelidade").val();
    var premio_bolo_pote = false;
    var premio_bolo = false;

    if(tipo == 1 && Number(bolo_pote) == "9") {
        premio_bolo_pote = true;
    } else if(tipo == 2 &&  Number(bolo) == "9") {
        premio_bolo = true;
    }


    if(tipo == "") {
        msgErro("Preencha o tipo");
    } else {
        $.ajax({
            type: "POST",
            url: base_url+'inicio/cadastraFidelidade',
            data: {cod:cod,tipo:tipo,premio_bolo_pote:premio_bolo_pote,premio_bolo:premio_bolo,data:data},
            dataType: "json",
            success: function (data) {
                if(data.retorno == true) {
                    msgOk(data.msg);
                    if(data.msg2 != null || data.msg2 != "") {
                        alert(data.msg2);
                    } 
                    buscaNewInfoCliente(cod);
                } else {
                    msgErro(data.msg);
                    $("#cpf_nome").val("");
                    $("#cpf_hidden").val("");
                }
            }
        });
    }
}

function CancelarFidelidade() {
    $(".cadastrarFidelidade").remove();
}

function buscaNewInfoCliente(codigo) {

    var base_url = $("#base_url").val();

    $.ajax({
        type: "POST",
        url: base_url+'inicio/buscaCliente',
        data: {cpf:codigo},
        dataType: "json",
        success: function (data) {
            if(data.retorno == true) {

                setTimeout(function(){
                    $(".cliente-dados").attr("class","wrap listar cliente-dados animated bounceOutRight");
                }, 310);

                $(".cliente-dados").remove();

                setTimeout(function(){
                    console.log("aa");
                    $(".container").append(data.data);
                }, 1000);

                setTimeout(function(){
                    $(".cliente-dados").attr("class","wrap listar cliente-dados animated bounceInLeft");
                }, 1000);

                console.log("aqui2");
                setTimeout(function(){
                    $('.dados').DataTable({
                        initComplete: function () {
                            this.api().columns().every( function () {
                                var column = this;
                                var select = $('<select><option value=""></option></select>')
                                    .appendTo( $(column.footer()).empty() )
                                    .on('change', function () {
                                        var val = $.fn.dataTable.util.escapeRegex(
                                            $(this).val()
                                        );
                                        column
                                            .search( val ? '^'+val+'$' : '', true, false )
                                            .draw();
                                    });
                 
                                column.data().unique().sort().each( function ( d, j ) {
                                    select.append( '<option value="'+d+'">'+d+'</option>' )
                                });
                            } );
                        }
                    });
                }, 1000);
                

            } else {
                msgErro(data.msg);
                $("#cpf_nome").val("");
                $("#cpf_hidden").val("");
            }
        }
    });
}

function dataAtualFormatada(){
    var data = new Date(),
        dia  = data.getDate().toString().padStart(2, '0'),
        mes  = (data.getMonth()+1).toString().padStart(2, '0'), //+1 pois no getMonth Janeiro começa com zero.
        ano  = data.getFullYear();
    return dia+"/"+mes+"/"+ano;
}

function removerFidelidade(cod) {
    var base_url = $("#base_url").val();

    $.ajax({
        type: "post",
        url: base_url+'inicio/removeFidelidade',
        data: {cod:cod},
        dataType: "json",
        success: function (data) {
            if(data.retorno == true) {
                msgOk(data.msg);
                $("[data-cod="+ cod + "]").fadeOut();
            } else {
                msgErro(data.msg);
                $("#cpf_nome").val("");
                $("#cpf_hidden").val("");
            }
        }
    });
}