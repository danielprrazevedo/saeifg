<script type="text/javascript">
    function tipoCadastro(tipo) {
        var administrador = 1;
        var aluno = 2;
        var professor = 3;

        if (tipo == aluno){
            $('.aluno').css('display', 'block');
            $('.professor').css('display', 'none');
            $('.administrador').css('display', 'none');
        } else if (tipo == professor){
            $('.aluno').css('display', 'none');
            $('.professor').css('display', 'block');
            $('.administrador').css('display', 'none');
        } else if (tipo == administrador){
            $('.aluno').css('display', 'none');
            $('.professor').css('display', 'none');
            $('.administrador').css('display', 'block');
        } else {
            $('.aluno').css('display', 'none');
            $('.professor').css('display', 'none');
            $('.administrador').css('display', 'none');
        }
    }
    $(function(){
        userType = $('[name=user_type]');
        userType.change(function () {
            tipoCadastro($(this).val());
        });

        tipoCadastro(userType.val());
        $('#form').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 10,
                    maxlength: 150
                },
                registry: {
                    required: true,
                    minlength: 5,
                    maxlength: 20,
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    //phone: true
                },
                user_type_id: {
                    required: true
                },
                cpf: {
                    required: true,
                    //cpf: true
                },
                rg: {
                    required: true
                },
                dt_nasc: {
                    required: true,
                    //data: true
                },
                course_id: {
                    required: true
                },
                address: {
                    required: true
                },
                area_id: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "Campo de Preenchimento obrigatório.",
                    minlength: "Insira o nome completo do usuário",
                    maxlength: "Nome muito grande, tente abreviar para continuar"
                },
                registry: {
                    required: "Campo de Preenchimento obrigatório.",
                    minlength: "Matricula muito pequena",
                    maxlength: "Matricula muito grande",
                },
                email: {
                    required: "Campo de Preenchimento obrigatório.",
                    email: "Insira um email válido."
                },
                phone: {
                    required: "Campo de Preenchimento obrigatório.",
                    //phone: "Telefone fora do padrão"
                },
                user_type: {
                    required: "Campo de Preenchimento obrigatório."
                },
                cpf: {
                    required: "Campo de Preenchimento obrigatório.",
                    //cpf: "CPF fora do padrão"
                },
                rg: {
                    required: "Campo de Preenchimento obrigatório."
                },
                dt_nasc: {
                    required: "Campo de Preenchimento obrigatório.",
                    //data: "Data fora do padrão"
                },
                course_id: {
                    required: "Campo de Preenchimento obrigatório."
                },
                address: {
                    required: "Campo de Preenchimento obrigatório."
                },
                area_id: {
                    required: "Campo de Preenchimento obrigatório."
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        })
    });
</script>