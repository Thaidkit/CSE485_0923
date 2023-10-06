<?php
require_once ('../config/config.php');
require_once APP_ROOT.'/app/services/PatientAddService.php';
class PatientAddController{
    public function index(){
        // Goi du lieu tru AddService 
        $patientAddService = new PatientAddService();
        $patientsAdd = $patientAddService->getAllPatients();
    }
}

$patientAddController = new PatientAddController();
$patientAddController->index();

