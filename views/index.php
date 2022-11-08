<?php
require_once '../library/config.php';
require_once '../library/functions.php';

checkFDUser();

$view = (isset($_GET['v']) && $_GET['v'] != '') ? $_GET['v'] : '';

switch ($view) {
	case 'LIST' :
		$content 	= 'eventlist.php';		
		$pageTitle 	= 'Ver Detalles del Evento';
		break;

	case 'USERS' :
		$content 	= 'userlist.php';		
		$pageTitle 	= 'Ver Detalles de Usuario';
		break;
		
	case 'CREATE' :
		$content 	= 'userform.php';		
		$pageTitle 	= 'Crear nuevo usuario';
		break;
		
	case 'USER' :
		$content 	= 'user.php';		
		$pageTitle 	= 'Ver detalles del usuario';
		break;
	
	case 'HOLY' :
		$content 	= 'holidays.php';		
		$pageTitle 	= 'Dias Feriados';
		break;	
	
	default :
		$content 	= 'dashboard.php';		
		$pageTitle 	= 'Panel de Calendario';
}

require_once '../include/template.php';
?>
