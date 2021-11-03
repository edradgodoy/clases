$(function(){
	$('#btnAddPuesto').on('click',function(){
		$('#formPuesto')[0].reset();
		$('#titulomodalpuesto').html('Agregar puesto');
		$('#editPuesto').hide();
		$('#regPuesto').show();
		$('#registra-categoria').modal({
			show:true,
		});
	});
});