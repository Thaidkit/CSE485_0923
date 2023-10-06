<?php
require_once APP_ROOT.'/app/models/Doctor.php';
class DoctorService{
    public function getAllDoctors(){
        //buoc1: ket noi DB
        try{
            $conn = new PDO('mysql:host=localhost;dbname=phongmach', 'root', 'thaimeo2003');

            //buoc2: tru van du lieu
            $sql = "SELECT * FROM bacsi ORDER BY id DESC ";
            $stmt = $conn->query($sql);

            //buoc3: xu ly ket qua tra ve
            $doctors = [];
            while($row = $stmt->fetch()){
                $doctor = new Doctor($row['id'], $row['tenBacSi'], $row['chuyenKhoa']);
                $doctors[] = $doctor;
            }
            return $doctors;

        }catch(PDOException $e){
            //conn = null;
            return $doctors = [];
            //echo $e->getMessage();
        }
    }
}
?>