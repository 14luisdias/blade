$(function() {
    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitSuccess: function($form, event) {
            event.preventDefault(); // Impede o envio padrão do navegador
            
            var name = $("input#name").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
            var message = $("textarea#message").val();

            $("#submitButton").prop("disabled", true); // Trava o botão para evitar cliques duplos

            $.ajax({
                url: "/contato/enviar", // Rota que vamos criar no Laravel
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}", // Segurança do Laravel
                    name: name,
                    email: email,
                    phone: phone,
                    message: message
                },
                cache: false,
                success: function() {
                    $('#submitSuccessMessage').removeClass('d-none');
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    $('#submitErrorMessage').removeClass('d-none');
                },
                complete: function() {
                    setTimeout(function() {
                        $("#submitButton").prop("disabled", false);
                    }, 1000);
                }
            });
        },
    });
});