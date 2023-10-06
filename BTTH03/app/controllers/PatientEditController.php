<?php
require_once ('../config/config.php');
require_once APP_ROOT.'/app/services/PatientEditService.php';
class PatientEditController{
    public function index(){
        // Goi du lieu tru RemoveService 
        $patientEditService = new PatientEditService();
        $patientsEdit = $patientEditService->getAllPatients();
    }
}

$patientEditController = new PatientEditController();
$patientEditController->index();