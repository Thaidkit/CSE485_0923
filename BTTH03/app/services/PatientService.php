<?php
require_once APP_ROOT.'/app/models/Patient.php';
class PatientService{
    public function getAllPatients(){
        //buoc1: ket noi DB
        try{
            $conn = new PDO('mysql:host=localhost;dbname=phongmach', 'root', 'thaimeo2003');

            //buoc2: tru van du lieu
            $sql = "SELECT * FROM benhnhan ORDER BY id DESC ";
            $stmt = $conn->query($sql);

            //buoc3: xu ly ket qua tra ve
            $patients = [];
            while($row = $stmt->fetch()){
                $patient = new Patient($row['id'], $row['tenBenhNhan'], $row['ngayKham'], $row['trieuChung'], $row['idBacSi']);
                $patients[] = $patient;
            }
            return $patients;

        }catch(PDOException $e){
            //conn = null;
            return $patients = [];
            //echo $e->getMessage();
        }
    }
}
?>