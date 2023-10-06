<?php
require_once APP_ROOT.'/app/services/DoctorService.php';
class DoctorController{
    public function index(){
        // Goi du lieu tu Service 
        $doctorService = new DoctorService();
        $doctors = $doctorService->getAllDoctors();

        // Render du lieu lay duoc ra HomePage
        include APP_ROOT.'/app/views/doctor/index.php';
    }
    

}