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
    /*jQuery.datetimepicker.setDefaults({
        locale: ""
    });*/
    $('.phone').mask('(00) 0000Z-0000', {
        translation: {
            'Z': {
                pattern: /[0-9]/,
                optional: true
            }
        }
    });
    $('.cpf').mask('000.000.000-00')
    $('.calendario').datetimepicker({
        format: "DD/MM/YYYY"
    });

    $('[data-toggle="tooltip"]').tooltip();

});