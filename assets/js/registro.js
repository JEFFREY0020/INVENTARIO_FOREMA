$(document).ready(function () {
	// alert('Funciono');
	// $('#usuario').click(function () {
	// $('#usuario').mouseover(function () {
	// $('#usuario').keypress(function () {
	// $('#usuario').blur(function () {
	// $('#usuario').keyup(function () {	
	// 	alert('Funciona');
	// });
 

	$('#ingresar').click(function () {

		var input_usuario=$('input[name=usuario]');
		var input_contrasena=$('input[name=contrasena]');

		if (input_usuario.val()=='') {
			$("#usuario").attr('required',true);
			document.getElementById("usuario").style.border="2px solid red";
			document.getElementById("usuario").focus();

			return false;
		} else {
			$("#usuario").attr('required',false);
			document.getElementById("usuario").style.border="";
		}

		if (input_contrasena.val()=='') {
			$("#contrasena").attr('required',true);
			document.getElementById("contrasena").style.border="2px solid red";
			document.getElementById("contrasena").focus();

			return false;
		} else {
			$("#contrasena").attr('required',false);
			document.getElementById("contrasena").style.border="";
		}

		var data = 'usuario=' + input_usuario.val() + '&contrasena=' + input_contrasena.val();

		$.ajax({

			type: "POST",

			url: "validar.php",

			data: data,

			// con esta linea me permite entrar a validar.php y
			// mostrar el mensaje
			dataType: "html",

			cache: false,
			
			success: function (data){
				$('#resultado').fadeIn(1000);
				$('#resultado').fadeOut( 3000 );
				$('#resultado').html(data);
			}
		});
		
		return false;

	});
});