<?php
require_once('../app/config/config.php');      
require_once APP_ROOT.'/app/controllers/PatientController.php';
require_once APP_ROOT.'/app/controllers/DoctorController.php';


$patientController = new PatientController();
$patientController->index();

$doctorController = new DoctorController();
$doctorController->index();
