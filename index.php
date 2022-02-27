<?php
//Controladores
require_once "controllers/PlantillaControlador.php";
require_once "controllers/AgendaControlador.php";

require_once "models/AgendaModelo.php";
// Llamado a los objetos
$plantilla = new PlantillaControlador();
$plantilla->ctrPlantilla();
