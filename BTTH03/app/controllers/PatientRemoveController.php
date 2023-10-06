<?php
require_once ('../config/config.php');
require_once APP_ROOT.'/app/services/PatientRemoveService.php';
class PatientRemoveController{
    public function index(){
        // Goi du lieu tru RemoveService 
        $patientRemoveService = new PatientRemoveService();
        $patientsRemove = $patientRemoveService->getAllPatients();
    }
}

$patientRemoveController = new PatientRemoveController();
$patientRemoveController->index();
