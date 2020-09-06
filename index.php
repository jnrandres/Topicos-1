<?php 

require_once 'controladores/controladorPlantilla.php';

require_once 'controladores/controladorUsuarios.php';
require_once 'controladores/controladorContacto.php';
require_once 'controladores/controladorDiagnostico.php';
require_once 'controladores/controladorMedicos.php';
require_once 'controladores/controladorCitas.php';
require_once 'controladores/controladorEvaluacion.php';

require_once 'modelos/modeloUsuarios.php';
require_once 'modelos/modeloContacto.php';
require_once 'modelos/modeloDiagnostico.php';
require_once 'modelos/modeloMedicos.php';
require_once 'modelos/modeloCitas.php';
require_once 'modelos/modeloEvaluacion.php';

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();