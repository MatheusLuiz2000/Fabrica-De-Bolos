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

    $('#clientes').DataTable({
        "language" : {
             "sEmptyTable": "Nenhum registro encontrado",
             "sInfo": "Mostrando  _START_ até _END_ de _TOTAL_ Resultados",
             "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
             "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
             "sInfoFiltered": "(Filtrados de MAX registros)",
             "sInfoPostFix": "",
             "sInfoThousands": ".",
             "sLengthMenu": "_MENU_ resultados por página",
             "sLoadingRecords": "Carregando...",
             "sProcessing": "Processando...",
             "sZeroRecords": "Nenhum registro encontrado",
             "sSearch": "Pesquisar",
             "oPaginate": {
                 "sNext": "Próximo",
                 "sPrevious": "Anterior",
                 "sFirst": "Primeiro",
                 "sLast": "Último"
             },
             "oAria": {
                 "sSortAscending": ": Ordenar colunas de forma ascendente",
                 "sSortDescending": ": Ordenar colunas de forma descendente"
             }
         },
         dom: 'Bfrtip',  
         "columnDefs": [
            { type: 'date-uk', targets: 1 }
        ],
        "order": false,
        buttons: ['excel', 'pdf']
     });
});
