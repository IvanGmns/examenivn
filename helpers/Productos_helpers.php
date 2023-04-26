<?php

function _array($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
	exit();
}

function _precioMensualidades($precio){
	if(!empty($precio)){
		$meses6=$precio/6;
		$meses12=$precio/12;
		$intereses=($precio/12)*1.10;
	}
	return array('meses6'=>(!empty($meses6) ? $meses6 : FALSE),'meses12'=>(!empty($meses12) ? $meses12 : FALSE),'intereses'=>(!empty($intereses) ? $intereses : FALSE));
}

function _precioCategoria($categoria){
	++$categoria;
	switch ($categoria) {
		case 1:
		$precio[1]=array('minimo'=>10000,'maximo'=>30000);
		break;
		case 2:
		$precio[2]=array('minimo'=>500,'maximo'=>3000);
		break;
		case 3:
		$precio[3]=array('minimo'=>20000,'maximo'=>60000);
		break;
		case 4:
		$precio[4]=array('minimo'=>1000,'maximo'=>4000);
		break;
		case 5:
		$precio[5]=array('minimo'=>200,'maximo'=>500);
		break;
		case 6:
		$precio[6]=array('minimo'=>20000,'maximo'=>60000);
		break;
		case 7:
		$precio[7]=array('minimo'=>18000,'maximo'=>35000);
		break;
		case 8:
		$precio[8]=array('minimo'=>500,'maximo'=>1500);
		break;
		case 9:
		$precio[9]=array('minimo'=>10000,'maximo'=>40000);
		break;
		case 10:
		$precio[10]=array('minimo'=>500,'maximo'=>2000);
		break;
		case 11:
		$precio[11]=array('minimo'=>1000,'maximo'=>8000);
		break;
		case 12:
		$precio[12]=array('minimo'=>1000,'maximo'=>3000);
		break;
		case 13:
		$precio[13]=array('minimo'=>200,'maximo'=>1500);
		break;
		case 14:
		$precio[14]=array('minimo'=>1000,'maximo'=>3000);
		break;
		case 15:
		$precio[15]=array('minimo'=>2000,'maximo'=>5000);
		break;
		case 16:
		$precio[16]=array('minimo'=>2000,'maximo'=>8000);
		break;
		case 17:
		$precio[17]=array('minimo'=>100,'maximo'=>500);
		break;
		case 18:
		$precio[18]=array('minimo'=>2500,'maximo'=>20000);
		break;
		case 19:
		$precio[19]=array('minimo'=>300,'maximo'=>800);
		break;
		case 20:
		$precio[20]=array('minimo'=>4000,'maximo'=>20000);
		break;
		default:
		return FALSE;
	}
	return mt_rand($precio[$categoria]['minimo'],$precio[$categoria]['maximo']);
}

function _abc(){
	return array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
}

function _modeloGenerar(){
	$abc=_abc();
	$modelo='';
	for($j=0;$j<=6;++$j){
		$randomNumber= mt_rand(0,25);
		$modelo.=$abc[$randomNumber];					
	}
	return $modelo.mt_rand(100,500);
}

function _especificaciones($categoria){
	++$categoria;
	$rand1=mt_rand(0,4);
	$rand2=mt_rand(0,4);
	$rand3=mt_rand(0,4);
	$rand4=mt_rand(0,4);
	$rand5=mt_rand(0,10);	
	/*Especificaciones generales*/
	$spec[0]['color']=array('blanco','negro','rojo','azul','gris');
	$spec[0]['garantia']=array('1 mes','2 meses','3 meses','4 meses','6 meses','7 meses','8 meses','9 meses','10 meses','11 meses','1 año');
	switch ($categoria) {
		case 1:
		/*Especificaciones Laptop*/
		$spec[1]['car1']=array('15 pulgadas','16 pulgadas','17 pulgadas','18 pulgadas','19 pulgadas');
		$spec[1]['car2']=array('Intel Celeron','AMD','Intel Core I7','Intel Core I5','Intel Core I3');
		$spec[1]['car3']=array('4GB','8GB','12GB','16GB','32GB');
		break;
		case 2:
		/*Especificaciones Memorias*/
		$spec[2]['car1']=array('15 pulgadas','16 pulgadas','17 pulgadas','18 pulgadas','19 pulgadas');
		$spec[2]['car2']=array('DDR3','DDR4','DDR5','DDR3L','DDR4L');
		$spec[2]['car3']=array('1600 MHZ','1866 MHZ','2666 MHZ','2900 MHZ','2933 MHZ');
		break;
		case 3:
		/*Especificaciones Gaming*/
		$spec[3]['car1']=array('15 pulgadas','16 pulgadas','17 pulgadas','18 pulgadas','19 pulgadas');
		$spec[3]['car2']=array('1TB','256GB','512GB','512GB SSD','256GB SSD');
		$spec[3]['car3']=array('GTX 1050 Ti MAX Q','NVIDIA GEFORCE RTX 3050','NVIDIA GeForce RTX 3050','RTX3050','RZX6050');
		break;
		case 4:
		/*Especificaciones Impresoras*/
		$spec[4]['car1']=array('Color','Inyección de tinta','LED','Laser','Matriz de punto');
		$spec[4]['car2']=array('3000 páginas al mes','500 páginas al mes','2500 páginas al mes','1000 páginas al mes','4000 páginas al mes');
		$spec[4]['car3']=array('203 ppp','300x300 dpi','600 dpi','600x600 dpi','600x600 ppp');
		break;
		case 5:
		/*Especificaciones Cartuchos*/
		$spec[5]['car1']=array('Color','Inyección de tinta','LED','Laser','Matriz de punto');
		$spec[5]['car2']=array('3000 páginas al mes','500 páginas al mes','2500 páginas al mes','1000 páginas al mes','4000 páginas al mes');
		$spec[5]['car3']=array('Tambor','Grapas','Cartucho ','Batería','Caja');
		break;
		case 6:
		/*Especificaciones Servidores*/
		$spec[6]['car1']=array('AMD EPYC 7232P','AMD EPYC 7302','AMD Ryzen','Intel Celeron','Intel Celeron I5');
		$spec[6]['car2']=array('1TB','2TB','3TB','4TB','1TB SSD');
		$spec[6]['car3']=array('4GB','8GB','12GB','16GB','32GB');
		break;
		case 7:
		/*Especificaciones Ipad*/
		$spec[7]['car1']=array('8.3 Pulgadas','10.2 pulgadas','10.9 pulgadas','11 pulgadas','12 pulgadas');
		$spec[7]['car2']=array('2160 x 1620 Pixeles','2360 x 1680 Pixeles','2460 x 1630 Pixeles','2388 x 1668 Pixeles','2190 x 1920 Pixeles');
		$spec[7]['car3']=array('4GB','8GB','12GB','16GB','32GB');
		break;
		case 8:
		/*Especificaciones Audifonos*/
		$spec[8]['car1']=array('3,5 mm','4,0 mm','4,5 mm','5,0 mm','5,5 mm');
		$spec[8]['car2']=array('0,75 m','1 m','1.2 m','1.5 m','2 m');
		$spec[8]['car3']=array('100 dB','90 dB','80 dB','110 dB','120 dB');
		break;
		case 9:
		/*Especificaciones Television*/
		$spec[9]['car1']=array('32 pulgadas','40 pulgadas','43 pulgadas','50 pulgadas','55 pulgadas');
		$spec[9]['car2']=array('4K','Smart Tv','FHD','FHD LED','4K Ultra HD');
		$spec[9]['car3']=array('','','','','');
		break;
		case 10:
		/*Especificaciones Accesorios*/
		$spec[10]['car1']=array('.75 kg','400g','450g','500g','550g');
		$spec[10]['car2']=array('','','','','');
		$spec[10]['car3']=array('','','','','');
		break;
		case 11:
		/*Especificaciones Antivirus*/
		$spec[11]['car1']=array('1 licencia','2 licencias','3 licencias','4 licencias','5 licencias');
		$spec[11]['car2']=array('1 año','2 años','3 años','4 años','5 años');
		$spec[11]['car3']=array('','','','','');
		break;
		case 12:
		/*Especificaciones Discos duros*/
		$spec[12]['car1']=array('1TB','2TB','3TB','4TB','1TB SSD');
		$spec[12]['car2']=array('Laptop','Nas','Servidor','PC','Videovigilancia');
		$spec[12]['car3']=array('6Gb Hot Swap','12Gb Hot Swap','5400 RPM','5900 RPM','7200 RPM');
		break;
		case 13:
		/*Especificaciones Discos duros*/
		$spec[13]['car1']=array('0.6 mts','5 mts','10 mts','20 mts','100 mts');
		$spec[13]['car2']=array('Cctv Rg6','Coaxial CATV-6','Coaxial CATV-59','Coaxial RG-8','Coaxial RG-58');
		$spec[13]['car3']=array('','','','','');
		break;
		case 14:
		/*Especificaciones Energia*/
		$spec[14]['car1']=array('1.5 KVA','6 KVA','10 KVA','2.5 KVA','4.5 KVA');
		$spec[14]['car2']=array('2000 h','2500 h','3000 h','3500 h','4000 h');
		$spec[14]['car3']=array('','','','','');
		break;
		case 15:
		/*Especificaciones Redes*/
		$spec[15]['car1']=array('10/100 Base-T(X)','10/ 100/ 1000 Auto MDI-X','10/100/1000 Base-T(X)','1000 Base-SX','1500 Base-SX');
		$spec[15]['car2']=array('2,64 W','3 W','3,7 W','3,9 W','4,2 W');
		$spec[15]['car3']=array('','','','','');
		break;
		case 16:
		/*Especificaciones Videovigilancia*/
		$spec[16]['car1']=array('4 canales','5 canales','6 canales','7 canales','8 canales');
		$spec[16]['car2']=array('1TB','2TB','3TB','4TB','1TB SSD');
		$spec[16]['car3']=array('','','','','');
		break;
		case 17:
		/*Especificaciones Videovigilancia*/
		$spec[17]['car1']=array('.75 kg','400g','450g','500g','550g');
		$spec[17]['car2']=array('','','','','');
		$spec[17]['car3']=array('','','','','');
		break;
		case 18:
		/*Especificaciones Muebles*/
		$spec[18]['car1']=array('1 mt','1.2 mts','2 mts','1.5 mts','2.2 mts');
		$spec[18]['car2']=array('10kg','15kg','5kg','20kg','8kg');
		$spec[18]['car3']=array('','','','','');
		break;
		case 19:
		/*Especificaciones Salud*/
		$spec[19]['car1']=array('Espuma','Gel','Limpiador','Paños humedos','Spray');
		$spec[19]['car2']=array('.75 kg','400g','450g','500g','550g');
		$spec[19]['car3']=array('','','','','');
		break;
		case 20:
		/*Especificaciones Celulares*/
		$spec[20]['car1']=array('5 pulgadas','6 pulgadas','6.5 pulgadas','7 pulgadas','8 pulgadas');
		$spec[20]['car2']=array('Android 11','Android 11 GO','Android 12','EMUI','Android 9');
		$spec[20]['car3']=array('','','','','');
		break;
		default:
		return FALSE;
	}	
	return $spec[0]['color'][$rand1].' '.$spec[$categoria]['car1'][$rand2].' '.$spec[$categoria]['car2'][$rand3].' '.$spec[$categoria]['car3'][$rand4].' Garantía de '.$spec[0]['garantia'][$rand5];
}

function _loremIpsumExplode(){
	$loremIpsum="Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
	$explodeLoremIpsum=explode(' ', $loremIpsum);
	return $explodeLoremIpsum;
}

function _loremIpsumGenerator($explodeLoremIpsum){
	$limit=count($explodeLoremIpsum);
	$loremIpsum='';
	--$limit;
	for($i=0;$i<30;++$i){
		$random=mt_rand(0,$limit);
		$loremIpsum.=$explodeLoremIpsum[$random].' ';
	}
	return $loremIpsum;
}

function _comentariosGenerator($review){
	$rand1=mt_rand(0,14);
	$rand2=mt_rand(0,14);
	$rand3=mt_rand(0,14);
	$randFrase=mt_rand(1,2);
	$orden=array(1=>array('inicio'=>1,'fin'=>2),2=>array('inicio'=>2,'fin'=>1));
	if($review==1){
		$frase[0]=array('Me gusta mucho','Muy versatil','Estoy impresionado','No hago reviews normalmente pero','Mi amigo me lo recomendo','Voy a recomendar este producto','Estoy feliz con mi compra','Es un gran producto','Me sirvio bastante','No pense que me fuera a gustar pero','El producto es excelente','Estoy impresionado','Deberian sacar mas productos como este','El producto tiene mas pros que contras','Cumple todo lo que ofrece');		
		$frase[1]=array('muy buen precio','buen desempeño','cumple con lo especificado','excelente calidad','buena relación precio y calidad','tengo pensado comprar otro','se ganaron un fan','hasta la fecha no a dado problemas','excelente producto','una de las mejores compras','el precio corresponde con lo que se ofrece','la calidad es muy buena','no conocia la marca pero me impresiono','ya pedi otro','funciona de manera excelente');
		$frase[2]=array('sirve para varias actividades','lo utilizo para uso personal','lo utilizo para el trabajo','lo recomiendo mucho','recomiendo a la gente que le de una oportunidad','lo utilizo bastante','es indispensable','hagan la prueba','les va a encantar el producto','voy a buscar mas productos de la misma marca','lo utilizo en mi casa y trabajo','indispensable para las empresas','se ocupan mas productos de esta calidad','voy a recomendarlo a mis compañeros','no pense que fuera a impresionarme la calidad');		
	}else if($review==2){
		$frase[0]=array('No me gusto','Muy mal producto','Estoy decepcionado','Tenia que dar mi opinion','No lo recomendaria','Te vas a arrepentir si lo compras','Me siento estafado','Es un producto malo','No me sirvio','De las peores compras','Ni a mi peor enemigo','Jamas me habia sentido mal despues de una compra','Si te cae mal alguien recomiendale este producto','No cumplen con la garantía','Pesimo servicio al cliente');
		$frase[1]=array('muy caro','mal desempeño','no cumple con las expectativas','muy mala calidad','muy caro para tan poca calidad','no tengo pensado volver a comprar','perdieron un cliente','no me ha convencido','muy mal producto','una de las peores compras que he realizado','no se que estaban pensando','deberian de devolver el dinero','me llego defectuoso','me gustaría no haberlo comprado','espero que me den reembolso');		
		$frase[2]=array('no me sirvio para lo que necesitaba','lo utilice para uso personal y me descepciono','lo utilize para el trabajo y me fallo','no lo recomendaría','recomiendo a la gente que busque otra opción','lo utilice poco','no lo compren','si no me creen hagan la prueba','les va a decepcionar','no voy a comprar mas de esta marca','no me hicieron valida la garantía','trate de devolverlo pero no aceptaron','me llego roto','no cumple nada de las especificaciones','quiero regresarlo');		
	}else if($review==3){
		$frase[0]=array('Es buen producto','Yo lo calificaria como regular','No me encanto pero tampoco me decepciono','El producto cumple pero nada mas','Solo lo recomendaria si de verdad lo necesitas','Este producto es de gama media','Siento de que debería haber esperado un poco mas antes de comprar','No me convencio pero no es tan malo','Creo que es un producto decente','El producto es regular','No es la gran cosa pero cumple','Solo si no te alcanza para algo de mejor marca','No me puedo quejar considerando el precio','Es regular en todo','Por las especificaciones creo que esta bien');		
		$frase[1]=array('el precio cumple con lo que ofrece el producto','funciona bien','cumple por muy poco con las expectativas','calidad media de materiales','esta a sobreprecio para la calidad','voy a comprar otro con mejor calidad','no se si voy a comprar otro','no me ha convencido','a pesar de todo me convencio','por el costo no se puede pedir más','esperaba más, pero me funciona bastante bien','no diria que es malo pero tampoco es excelente','deberian de mejorar un poco la calidad','no se por que pero esperaba menos','me dejo satisfecha la compra');
		$frase[2]=array('ha funcionado correctamente','lo utilice para uso personal y cumple','lo utilize para el trabajo y ocupo algo mejor','no lo recomendaría para el trabajo','recomiendo a la gente que busque otra opción','lo utilice bastante','no lo compren si hay mejores opciones','ocupas probarlo para darte una idea','les va a encantar o decepcionar','no se si compraria otra vez el mismo producto','me dejo satisfecho la compra','tal vez podria ser mas barato','el precio me parece justo','deberian esforzarse un poco mas','no puedo decir que es excelente la compra pero tampoco es la peor');
	}	
	$orden1=$orden[$randFrase]['inicio'];
	$orden2=$orden[$randFrase]['fin'];
	return $frase[0][$rand1].', '.$frase[$orden1][$rand2].', '.$frase[$orden2][$rand3].'.';
}

function _slug($text){
	$palabra=_quitarAcentos($text);
	return str_replace(' ', '-', $palabra);
}

function _quitarAcentos($text) {
	$text = htmlentities($text, ENT_QUOTES, 'UTF-8');
	$patron = array (
		'/\+/' => '',
		'/&agrave;/' => 'a',
		'/&egrave;/' => 'e',
		'/&igrave;/' => 'i',
		'/&ograve;/' => 'o',
		'/&ugrave;/' => 'u',

		'/&Agrave;/' => 'A',
		'/&Egrave;/' => 'E',
		'/&Igrave;/' => 'I',
		'/&Ograve;/' => 'O',
		'/&Ugrave;/' => 'U',

		'/&aacute;/' => 'a',
		'/&eacute;/' => 'e',
		'/&iacute;/' => 'i',
		'/&oacute;/' => 'o',
		'/&uacute;/' => 'u',

		'/&Aacute;/' => 'A',
		'/&Eacute;/' => 'E',
		'/&Iacute;/' => 'I',
		'/&Oacute;/' => 'O',
		'/&Uacute;/' => 'U',

		'/&acirc;/' => 'a',
		'/&ecirc;/' => 'e',
		'/&icirc;/' => 'i',
		'/&ocirc;/' => 'o',
		'/&ucirc;/' => 'u',

		'/&Acirc;/' => 'A',
		'/&Ecirc;/' => 'E',
		'/&Icirc;/' => 'I',
		'/&Ocirc;/' => 'O',
		'/&Ucirc;/' => 'U',

		'/&atilde;/' => 'a',
		'/&etilde;/' => 'e',
		'/&itilde;/' => 'i',
		'/&otilde;/' => 'o',
		'/&utilde;/' => 'u',

		'/&Atilde;/' => 'A',
		'/&Etilde;/' => 'E',
		'/&Itilde;/' => 'I',
		'/&Otilde;/' => 'O',
		'/&Utilde;/' => 'U',

		'/&auml;/' => 'a',
		'/&euml;/' => 'e',
		'/&iuml;/' => 'i',
		'/&ouml;/' => 'o',
		'/&uuml;/' => 'u',

		'/&Auml;/' => 'A',
		'/&Euml;/' => 'E',
		'/&Iuml;/' => 'I',
		'/&Ouml;/' => 'O',
		'/&Uuml;/' => 'U',

		'/&auml;/' => 'a',
		'/&euml;/' => 'e',
		'/&iuml;/' => 'i',
		'/&ouml;/' => 'o',
		'/&uuml;/' => 'u',

		'/&Auml;/' => 'A',
		'/&Euml;/' => 'E',
		'/&Iuml;/' => 'I',
		'/&Ouml;/' => 'O',
		'/&Uuml;/' => 'U',

            // Otras letras y caracteres especiales
		'/&aring;/' => 'a',
		'/&ntilde;/' => 'n',
		'/&Aring;/' => 'A',
		'/&Ntilde;/' => 'N',
	);
	$text = preg_replace(array_keys($patron),array_values($patron),$text);
	return $text;
}

function _paginas($cantidad) {
	$paginas = ceil($cantidad / 12);
	if ($paginas < 1) {
		return 1;
	}
	return $paginas;
}

function _pagination($pagina, $paginas) {
	$puntos = false;
	$inicio = $pagina;
	if (($inicio - 2) > 0) {
		$inicio -= 2;
		$puntos = true;
	}
	if ($inicio == 1) {
		$inicio = 2;
	}

	$mostrar = $inicio + 5;
	if ($mostrar > $paginas) {
		$mostrar = $paginas;
		if (($inicio - 2) > 0) {
			$inicio -= 2;
		}
	}
	return array('inicio' => $inicio, 'mostrar' => $mostrar, 'puntos' => $puntos);
}

function _paginaQuery($pagina){
	if ($pagina) {
		$pagina = ($pagina > 1 ? (($pagina * 12) - 12) : 0);
	}
	return $pagina;
}
?>

