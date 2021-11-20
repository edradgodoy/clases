$(function(){
	$('#btnAddPuesto').on('click',function(){
		$('#formPuesto')[0].reset();
		$('#titulomodalpuesto').html('Agregar puesto');
		$('#editPuesto').hide();
		$('#regPuesto').show();
		$('#ModalPuesto').modal({
			show:true,
		});
	});
});

function editPuesto(dato) {
	$('#formPuesto')[0].reset();
	var url = 'methods/Puestos/datos.php';
	$.ajax({
		type:'POST',
		url:url,
		data:'dato='+dato,
		success: function(valores){
				var datos = eval(valores);
				$('#regPuesto').hide();
				$('#editPuesto').show();
				$('#titulomodalpuesto').html('Editar puesto');
				$('#idPuesto').val(dato);
				$('#nombrePuesto').val(datos[0]);
				$('#ModalPuesto').modal({
					show:true,
				});
			return false;
		}
	});
	return false;
}

function deletePuesto(id){
	var url = 'methods/Puestos/Delete.php';
	var pregunta = confirm('¿Esta seguro de querer eliminar este puesto?');
	if(pregunta==true){
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(registro){
			window.location.href="puestos";
		}
	});
	return false;
	}else{
		return false;
	}
}


// Usuarios 
$(function(){
	$('#btnAddUsuarios').on('click',function(){
		$('#formUsuario')[0].reset();
		$('#titulomodalusuairo').html('Agregar usuario');
		$('#editUsuario').hide();
		$('#regUsuario').show();
		$('#ModalUsuarios').modal({
			show:true,
		});
	});
});

function editUsuarios(dato) {
	$('#formUsuario')[0].reset();
	var url = 'methods/Usuarios/datos.php';
	$.ajax({
		type:'POST',
		url:url,
		data:'dato='+dato,
		success: function(valores){
				var datos = eval(valores);
				$('#regUsuario').hide();
				$('#editUsuario').show();
				$('#titulomodalusuairo').html('Editar usuario');
				$('#idUsuario').val(dato);
				$('#pnombre').val(datos[0]);
				$('#snombre').val(datos[1]);
				$('#papellido').val(datos[2]);
				$('#sapellido').val(datos[3]);
				$('#idpuesto').val(datos[4]);
				$('#email').val(datos[5]);
				$('#username').val(datos[6]);
				$('#estcuenta').val(datos[7]);
				$('#ModalUsuarios').modal({
					show:true,
				});
			return false;
		}
	});
	return false;
}