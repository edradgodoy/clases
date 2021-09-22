
function optionsub() {
	var um = $('#UnidadMedida').val();
	if (um == 'Longitud') {
		var val = '<option value="mm">milímetros</option><option value="cm">Centímetros</option><option value="m">Metros</option> <option value="km">kilómetros</option><option value="in">Pulgadas</option><option value="ft">Pies</option> <option value="yr">Yardas</option><option value="milla">Millas</option><option value="min">millas náuticas </option> <option value="miles">Miles</option>';
		$('#deUnidadMedida').html(val);
		$('#AUnidadMedida').html(val);
	}  
	else if (um == 'Temperatura') {
		var val = '<option value="cl">Celsius </option><option value="fh">Fahrenheit</option><option value="kl">Kelvin</option>';
		$('#deUnidadMedida').html(val);
		$('#AUnidadMedida').html(val);
	} 
	else if (um == 'Volumen') {
		var val = '<option value="glru">Galones (RU)</option><option value="gleu">Galones (EU)</option><option value="lts">Litros</option><option value="mlts">Mililitros</option><option value="cmcb">Centímetros cúbicos</option> <option value="mtscb">Metros cúbicos </option><option value="incb">Pulgadas cubicas</option> <option value="ftcb">Pies cúbicos </option>';
		$('#deUnidadMedida').html(val);
		$('#AUnidadMedida').html(val);
	} else if (um == 'Masa') {
		var val = '<option value="ton">Toneladas</option><option value="tonru">Toneladas (RU)</option><option value="toneu">Toneladas (EU)</option><option value="lb">Libras</option><option value="onz">Onzas </option> <option value="kg">Kilogramos </option><option value="gr">Gramos</option>';
		$('#deUnidadMedida').html(val);
		$('#AUnidadMedida').html(val);
	} else if (um == 'Velocidad') {
		var val = '<option value="mxs">Metros por segundo </option><option value="mxh">Metros por hora </option><option value="kmxs">Kilómetros por segundo </option> <option value="kmxh">Kilómetros por hora </option><option value="inxs">Pulgadas por segundo </option><option value="inxh">Pulgadas por hora </option><option value="ftxs">Pies por segundo </option><option value="mixs">Millas por segundo </option> <option value="mixh">Millas por hora </option><option value="nudos">Nudos </option>';
		$('#deUnidadMedida').html(val);
		$('#AUnidadMedida').html(val);
	} else {
		var val = '<option value="acres">Acres</option><option value="ht">Hectáreas</option><option value="cmc">Centímetros cuadrados</option> <option value="kftc">Pies cuadrados</option><option value="inc">Pulgadas cuadradas</option><option value="mtc">Metros cuadrados</option>';
		$('#deUnidadMedida').html(val);
		$('#AUnidadMedida').html(val);
	}
}

function calcular() {
	var um = $('#UnidadMedida').val();
	var origen = $('#deUnidadMedida').val();
	var cantidad = $('#cantidad').val();
	var para = $('#AUnidadMedida').val();
	var url = 'controller/procesar.php';
	$.ajax({
		type: 'POST',
		url: url,
		data: 'um='+um+'&origen='+origen+'&cantidad='+cantidad+'&para='+para,
		success: function (resultado){
			$('#mostrarResultado').html(resultado);
		}
	});
	return false;
}

$(function() {
	$('#UnidadMedida').on('change', function(){
		// optionsub();
		calcular();
	});
	$('#deUnidadMedida').on('change', function(){
		// optionsub();
		calcular();
	});
	$('#cantidad').on('keyup', function(){
		// optionsub();
		calcular();
	});
	$('#AUnidadMedida').on('change', function(){
		// optionsub();
		calcular();
	});
});