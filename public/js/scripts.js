jQuery(function(){
    //defaults
    jQuery.validator.setDefaults({
        debug: true,
        errorClass: 'error-validate',
        validClass: 'success',
        errorElement: 'div',
        highlight: function(element, errorClass, validClass) {
            $(element).addClass(errorClass);
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass(errorClass)
        }
    });



    jQuery('.phone').mask('(00) 0000Z-0000', {
        translation: {
            'Z': {
                pattern: /[0-9]/,
                optional: true
            }
        }
    });
    jQuery('.cpf').mask('000.000.000-00')

    jQuery('.calendario').datetimepicker({
        locale: 'pt-br',
        format: 'DD/MM/YYYY'
    });
    jQuery('[data-toggle="tooltip"]').tooltip();

    jQuery.extend($.fn.dataTable.defaults, {
        responsive: true,
        "language": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
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
        }
    });

    jQuery('.select2').select2({
        theme: "bootstrap",
        language: 'pt-BR',
        width: '100%'
    });
});