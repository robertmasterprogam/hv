<?php

$ciudad = $_GET['ciudad'];
$fecha = $_GET['fecha'];
$empleo = $_GET['empleo'];
$codigo = $_GET['codigo'];
$primerapellido = $_GET['primer'];
$segundoapellido = $_GET['segundo'];
$nombres = $_GET['nombres'];
$profesion = $_GET['profesion'];
$experiencia = $_GET['anios'];
$salario = $_GET['salario'];
$nacimiento = $_GET['lugar'];
$fechanacimiento = $_GET['fechanac'];
$estado = $_GET['estado'];
$dirrecion = $_GET['dirreciondomi'];
$barrio = $_GET['barrio'];
$telefono = $_GET['telefono1'];
$cedula = $_GET['cedula'];
$expedicion = $_GET['expedicion'];
$libreta = $_GET['libreta'];
$distrito = $_GET['distrito'];
$clase = $_GET['clase'];
$foto = $_GET['foto'];
$licencia = $_GET['licencia'];
$vivienda = $_GET['vivienda'];
$arrendador = $_GET['arrendador'];
$telefono2 = $_GET['telefono2'];
$valorarriendo = $_GET['valor_arr'];
$trabajando = $_GET['si_tra'];
$empresa = $_GET['empresa'];
$empleado = $_GET['empleado'];
$independiente = $_GET['independiente'];
$contrato = $_GET['contrato'];
$primaria = $_GET['primaria'];
$Establecimiento = $_GET['Establecimiento'];
$ciudad = $_GET['ciudad2'];
$grado = $_GET['grado_pri'];
$fechaprimaria = $_GET['fechaprimaria'];
$bachillerato = $_GET['bachillerato'];
$Establecimiento1 = $_GET['Establecimiento1'];
$ciudad = $_GET['ciudad_bac'];
$grado_bac = $_GET['grado_bac'];
$fechabachillerato = $_GET['fechabachillerato'];
$Establecimiento2 = $_GET['Establecimiento2'];
$superior = $_GET['superior'];
$ciudad = $_GET['ciudad_sup'];
$añoscursados = $_GET['anioscursados']
$grado3 = $_GET['gardo3'];
$fechasuperior = $_GET['fechasuperior'];
$tecnico = $_GET['tecnico'];
$titulobt = ['Titulobt']
$op1 = $_GET['op1'];
$op2 = $_GET['op2'];
$op3 = $_GET['op3'];
$est_realiza = $_GET['est_realiza'];
$horario = $_GET['horario'];
$nombreempresa = $_GET['actual'];
$direcempresa = $_GET['direcempresa'];
$tel_empresa = $_GET['tel_empresa'];
$nombrejefe = $_GET['jefe'];
$cargo = $_GET['cargo'];
$funciones = $_GET['funciones'];
$ingreso = $_GET['ingreso'];
$retiro = $_GET['retiro'];
$inical = $_GET['inical'];
$final = $_GET['final'];
$motivoretiro = $_GET['motivo'];
$nombreempresa = $_GET['nombreempre'];
$direcempresa = $_GET['direcempre'];
$tel = $_GET['cell'];
$nombrejefe = $_GET['nomjefe'];
$cargo = $_GET['cargo1'];
$funciones = $_GET['funciones2'];
$ingreso1 = $_GET['ingreso1'];
$retiro1 = $_GET['retiro1'];
$inical1 = $_GET['inical1'];
$final1 = $_GET['final1"'];
$motivoretiro = $_GET['motivo1'];

$nombreempresa1 = $_GET['nombreempre1'];
$direcempresa1 = $_GET['direcempre1'];
$telempre = $_GET['telempre'];
$nomjefe = $_GET['nomjefe1'];
$cargo2 = $_GET['cargo2'];
$funciones3 = $_GET['funciones3'];
$ingreso2 = $_GET['ingreso2'];
$retiro2 = $_GET['retiro2'];
$inical2 = $_GET['inical2'];
$final2 = $_GET['final2"'];
$motivoretiro2 = $_GET['motivo2'];

$opc1 = $_GET['opc1'];
$pareja = $_GET['pareja'];
$profesion = $_GET['profesion'];
$empresatrabaja = $_GET['empresatrabaja'];
$cargoactual = $_GET['cargoactual'];
$direcempresapareja = $_GET['direcempresapareja'];
$tel = $_GET['tel'];

$esposo_a = $_GET['esposo_a'];
$oficio1 = $_GET['oficio1'];
$trabaja1 = $_GET['trabaja1'];
$cargo_act = $_GET['cargo_act'];
$direcfam = $_GET['direcfam'];
$telefam = $_GET['telefam'];
$ciudadpareja = $_GET['ciudadpareja'];
$personas = $_GET['personas'];
$Parentesco = $_GET['Parentesco'];
$edades_fam = $_GET['edades_fam'];
$padre = $_GET['padre'];
$madre = $_GET['madre'];
$ocupa_fam = $_GET['ocupa_fam'];
$nombreref = $_GET['nombreref'];
$ocupacion01 = $_GET['ocupacion01'];
$direccion01 = $_GET['direccion01'];
$telefono01 = $_GET['telefono01'];
$nombre02 = $_GET['nombre02'];
$ocupacion02 = $_GET['ocupacion02'];
$direccion02 = $_GET['direccion02'];
$telefono02 = $_GET['telefono02'];

$anuncio = $_GET['anuncio'];
$amigo = $_GET['amigo'];
$agencia = $_GET['agencia'];
$otro_i = $_GET['otro_i'];
$si_re = $_GET['si_re'];
$no_re = $_GET['no_re'];
$recomienda = $_GET['recomienda'];
$division = $_GET['division'];
$parientes1 = $_GET['parientes1'];
$solicitante = $_GET['solicitante'];
$Vo = $_GET['Vo'];
$Fecha001 = $_GET['Fecha0_1'];
$Vo1 = $_GET['Vo1'];
$conclusiones = $_GET['conclusiones'];
$fecha0001 = $_GET['fecha0001'];
$si_a = $_GET['si_a'];
$no_a = $_GET['no_a'];
$Contratese = $_GET['Contratese'];
$sueldo_a = $_GET['sueldo_a'];
$si_e = $_GET['si_e'];
$no_e = $_GET['no_e'];
$Cargo002 = $_GET['Cargo002'];
$Tipo01 = $_GET['Tipo01'];
$fechacontra = $_GET['fechacontra'];
$primerentrev = $_GET['primerentrev'];
$segundoentrev = $_GET['segundoentrev'];
$firmaentrev = $_GET['firmaentrev'];


function validaTexto($valor){
	if (!empty($valor) && ctype_alpha($valor)) {
		echo $valor;
	} elseif (empty($valor)) {
		header("Location: HojaVida.html");
	}

}

function validaEdad($variable){
	if (is_numeric($variable) && !empty($variable)) {
		if ($variable >= 0) {
			echo "todo bien";
		}else{
			echo "esta mal";
		}
	}else{
		echo "esta mal";
	}
}
function validaAlpha($variable){
	if (ctype_alpha($variable) && !empty($variable)) {
		echo "nombre correcto";	
	}else{
		echo "nombre incorrecto";
	}
}
function validaRadios($var, $const1, $const2){
	if ($var == $const1 || $var == $const2) {
		return $var;
	}else{
		return "No dice";
	}
}

validaTexto($nombres);
validaTexto($apellido1);
validaTexto($apellido2);
validaTexto($ciudad1);
validaTexto($empleo1);
validaTexto($oficio);
validaTexto($barrio);
validaTexto($arrendador);
validaTexto($empresa);
validaTexto($ciudad2);
validaTexto($ciudad3);
validaTexto($ciudad4);
validaTexto($estudios);
validaTexto($nombreempresa);
validaTexto($nombrejefe);
validaTexto($cargo);
validaTexto($funciones);
validaTexto($motivoretiro);
validaTexto($nombreempre);
validaTexto($nomjefe);
validaTexto($cargo1);
validaTexto($motivoretiro2);
validaTexto($);
validaTexto($);
validaTexto($);
validaTexto($);

	
 ?>














