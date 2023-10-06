<?php
require_once APP_ROOT.'/app/services/PatientService.php';
class PatientController{
    public function index(){
        // Goi du lieu tru Service 
        $patientService = new PatientService();
        $patients = $patientService->getAllPatients();

        // Render du lieu lay duoc ra HomePage
        include APP_ROOT.'/app/views/home/index.php';
    }
    

}