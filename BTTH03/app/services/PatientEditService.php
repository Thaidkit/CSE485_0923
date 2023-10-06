<?php
class PatientEditService{
    public function getAllPatients(){
        if(isset($_POST['sbmSave'])){
            $id = $_POST['id'];
            $namePatient = $_POST['tenBenhNhan'];
            $date = $_POST['ngayKham'];
            $symptom = $_POST['trieuChung'];
            $idDoctor = $_POST['idBacSi'];
        }
        
            try{
                //Buoc 1: Ket noi DBServer
                $conn = new PDO("mysql:host=localhost;dbname=phongmach", "root", "thaimeo2003");
                //Buoc 2: Thuc hien truy van
                $sql_check = "SELECT * FROM benhnhan WHERE tenBenhNhan='$namePatient' AND id != '$id'";
                $stmt = $conn->prepare($sql_check);
                $stmt->execute();
        
                //Buoc 3: Xử lý kết quả
                if($stmt->rowCount()>0){
                    header("Location:user_edit.php?error=existed");
                }else{
                    $sql_update = "UPDATE benhnhan set tenBenhNhan = '$namePatient', ngayKham = '$date', trieuChung = '$symptom', idBacSi = '$idDoctor' WHERE id='$id'";
                    $stmt = $conn->prepare($sql_update);
                    $stmt->execute();
                    if($stmt->rowCount() > 0){
                        header("Location:user_management.php?success=updated");
                    }
                }
        
            }catch(PDOException $e){
                echo $e->getMessage();
            }

    }
}
?>