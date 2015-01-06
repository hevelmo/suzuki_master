/*$(document).ready(function() {

	$('.form_contact_gdl').submit(function(e) {
		e.preventDefault();
		var data = $(this).serializeArray();
		$.ajax({
			url: 'contacto.php',
			type: 'post',
			data: data,
			beforeSend: function () {
				setTimeout(function() {
					$("#reply_contacto").hide("");
				}, 3000);
				$("#respuesta").html("<img src='images/template/ajax-loader.gif' style='width: 20px; height: 20px; position: relative; top: 527px; left: -118px;'>");
			},
			success: function () {
				setTimeout(function() {
					$('#reply_contacto').html("<aside class='replyOk'><div class='ico_Ok'></div><p class='msndialog'>Tus se han enviado</p></aside>");
					setTimeout(function() {
						window.location.href = '/';
					}, 3000);
				}, 2000);
			},
			error: function () {
				setTimeout(function() {
					$('#reply_contacto').html("<aside class='replyError'><div class='ico_Error'></div><p class='msndialog'>No se ha podido enviar el registro</p></aside>");
				}, 3000);
			}
		})
		.always(function() {
			setTimeout(function() {
				$("#respuesta").hide("");
			}, 3000);
		});
	});

});*/

(function(){
    $(".form_contact_gdl").click(function() {

        var nombre = $("#contact_name").val();
			apellidos = $("#contact_lastname").val();
			email = $("#contact_email").val();
            validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
			departamento = $("#contact_department").val();
			modelo = $("#contact_car_key").val();
			mensaje = $("#contact_message").val();

        if (nombre == "" || apellidos == "") {
            $("#contact_name").focus();
            $("#contact_lastname").focus();
            return false;
        }else if(email == "" || !validacion_email.test(email)){
            $("#contact_email").focus();
            return false;
        }else if(departamento == "" || modelo == ""){
        	$("#contact_department").focus();
        	$("#contact_car_key").focus();
        	return false;
        }else if(mensaje == ""){
            $(".mensaje").focus();
            return false;
        }else{
            // Si todo paso, aqui ira la llamada AJAX
            $('.ajaxgif').removeClass('hide');
            var datos = 'nombre='+ nombre + '&email=' + email + '&mensaje=' + mensaje;
            $.ajax({
                type: "POST",
                url: "contacto.php",
                data: datos,
                success: function() {
                    setTimeout(function() {
                        $('.ajaxgif').hide();
                    }, 2000);
                    setTimeout(function() {
                        $('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '680px' }, 300);
                        setTimeout(function() {
                            $('.msg').text('').removeClass('msg_ok').animate({ 'right' : '650px' }, 300);
                            $(".nombre").val("");
                            $(".email").val("");
                            $(".mensaje").val("");
                        }, 2500);
                    }, 3000);
                },
                error: function() {
                    setTimeout(function() {
                        $('.ajaxgif').hide();
                    }, 2000);
                    setTimeout(function() {
                        $('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '680px' }, 300);
                        setTimeout(function() {
                            $('.msg').text('').removeClass('msg_error').animate({ 'right' : '650px' }, 300);
                        }, 2500);
                    }, 3000);
                }
            });
            return false;
        }

    });
})();

