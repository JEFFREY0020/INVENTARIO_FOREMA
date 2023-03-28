alertify.defaults.transition = "slide";
alertify.defaults.theme.ok = "btn btn-primary";
alertify.defaults.theme.cancel = "btn btn-danger";
alertify.defaults.theme.input = "form-control";

//VALIDAR CAMPOS NUMERICOS
  function validar(evt) {
    
    // code is the decimal ASCII representation of the pressed key.
    var code = (evt.which) ? evt.which : evt.keyCode;
    
    if(code==8) { // backspace.
      return true;
    } else if (code>=48 && code<=57) { // is a number.
      return true;
    } else { // other keys.
      return false;
    }
  }
 
//SALTAR ENTRE INPUTS PRESIONANDO ENTER
function saltar(e,id) {

	// Obtenemos la tecla pulsada
	(e.keyCode)?k=e.keyCode:k=e.which;

	// Si la tecla pulsada es enter (codigo ascii 13)
	if(k==13) {

		// Si la variable id contiene "submit" enviamos el formulario
		if(id=="submit") {

			document.forms[0].submit();

		} else {

			// nos posicionamos en el siguiente input
			document.getElementById(id).focus();

		}

	}

}

/*============================
FUNCIONES DE MADERA EN ROLLO
=============================*/

function traeDatosMadera(idMadera) {

	$.ajax({
		type: "POST",
		data: "id=" + idMadera,
		url:"datos/madera.datos.php",

		success:function(r) {

			datos=jQuery.parseJSON(r);
			$('#idMadera').val(datos['id']);
			$('#Ecantidad').val(datos['cantidad']);
			$('#Ediametro').val(datos['diametro']);
			$('#Elargo').val(datos['largo']);

		}

	});
};

function agregaDatosMadera() {

	if ($("#cantidad").val()=='') {
			alertify.alert("Debe llenar todos los compos!");
			return false;

	} else if($("#diametro").val()=='') {
			alertify.confirm("Debe llenar todos los compos!");
			return false;

	} else if($("#largo").val()=='') {
			alertify.error("Debe llenar todos los compos!");
			return false;
	}

	$.ajax({

		type: "POST",
		data: $('#formAgregaMadera').serialize(),
		url:"datos/madera.agrega.datos.php",
		
		success:function(data) {

			$("#modalAgregaMadera").modal("hide");
			$('#formAgregaMadera')[0].reset();
			$('#tabla_maderaRollo').load('tablas/rollo.tabla.php');
		  	$('#simadera').fadeIn(1000);
			$('#simadera').fadeOut(3000);
			$('#simadera').html(data);
		}
	});

	return false;
};

function editaDatosMadera() {

	if ($("#Ecantidad").val()=='') {
			alertify.alert("Debe llenar todos los compos!");
			return false;

	} else if($("#Ediametro").val()=='') {
			alertify.alert("Debe llenar todos los compos!");
			return false;

	} else if($("#Elargo").val()=='') {
			alertify.alert("Debe llenar todos los compos!");
			return false;
	}

	$.ajax({
		type: "POST",
		data: $('#formEditaMadera').serialize(),
		url:"datos/madera.edita.datos.php",

		success:function(r) {

		if (r==1) {
		$("#modalEditaMadera").modal("hide");
		$('#tabla_maderaRollo').load('tablas/rollo.tabla.php');
		alertify.alert("Datos actualizados correctamente!");

			} else {

				alertify.alert("Fallo al actualizar!");
				// Swal.fire("Error!!", "Fallo al actualizar", "error");

			}

		}

	});

	return false;
};

function eliminaDatosMadera(idMadera) {

  		$.ajax({
			type: "POST",
			data: "id=" + idMadera,
			url:"datos/madera.elimina.datos.php",

			success:function(r) {
				if (r==1) {
					$('#tabla_maderaRollo').load('tablas/rollo.tabla.php');

					alertify.error("Borrado");

			} else {

				alertify.alert("Fallo al eliminar!");

			}

		}

	});

}

function hola() {
	alertify.alert("Hola mundo");
}


/*============================
FUNCIONES DE CATEGORIA
=============================*/

function traeDatosCate(idCate) {

	$.ajax({
		type: "POST",
		data: "id=" + idCate,
		url:"datos/cate.datos.php",

		success:function(r) {

			datos=jQuery.parseJSON(r);
			$('#idCate').val(datos['id']);
			$('#Enombre').val(datos['nombre']);
			$('#Edescripcion').val(datos['descripcion']);

		}

	});
};

function agregaDatosCate() {

	if ($("#nombre").val()=='') {
			alertify.alert("Debe ingresar un nombre!");
			return false;
		}

	$.ajax({

		type: "POST",
		data: $('#formAgregaCate').serialize(),
		url:"datos/cate.agrega.datos.php",
		
		success:function(data) {

			$("#modalAgregaCate").modal("hide");
			$('#formAgregaCate')[0].reset();
			$('#tabla_categoria').load('tablas/cate.tabla.php');
	  	$('#sicate').fadeIn(1000);
			$('#sicate').fadeOut(3000);
			$('#sicate').html(data);
		}
	});

	return false;
};

function editaDatosCate() {

	if ($("#Enombre").val()=='') {
			alertify.alert("Debe agregar un nombre!");
			return false;
	}

	$.ajax({
		type: "POST",
		data: $('#formEditaCate').serialize(),
		url:"datos/cate.edita.datos.php",

		success:function(r) {

		if (r==1) {
		$("#modalEditaCate").modal("hide");
		$('#tabla_categoria').load('tablas/cate.tabla.php');
		alertify.success("Actualizado correctamente!");

			} else {

				alertify.alert("Fallo al actualizar!");

			}

		}

	});

	return false;
};

function eliminaDatosCate (idCate) {

  		$.ajax({
			type: "POST",
			data: "id=" + idCate,
			url:"datos/cate.elimina.datos.php",

			success:function(r) {
				if (r==1) {
					$('#tabla_categoria').load('tablas/cate.tabla.php');

					alertify.error("Borrado");

			} else {

				alertify.alert("Fallo al eliminar!");

			}

		}

	});

}


