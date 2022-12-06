$(document).ready(function() {

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
               console.log("alo");
               var index = $(".cpf_nome").getSelectedItemData().codigo_cliente;
               $("#id-hidden").val(index).trigger("change");
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

$("#eac-container-cpf_nome_2 ul").click(function() {
    console.log("click");
});

function buscaCliente() {

    var base_url = $("#base_url").val();

    var id = $("#id-hidden").val();
    window.location.href = base_url + "inicio/dadosCliente?id="+ id +" ";
}