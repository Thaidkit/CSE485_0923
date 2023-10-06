<?php
class PatientAddService{
    public function getAllPatients(){
        if(isset($_POST['sbmAdd'])){
            $id = $_POST['id'];
            $namePatient = $_POST['tenBenhNhan'];
            $date = $_POST['ngayKham'];
            $symptom = $_POST['trieuChung'];
            $idDoctor = $_POST['idBacSi'];

            try{
                //Buoc 1: Ket noi DBServer
                $conn = new PDO("mysql:host=localhost;dbname=phongmach", "root", "thaimeo2003");
                //Buoc 2: Thuc hien truy van
                $sql_check = "SELECT * FROM benhnhan WHERE id = '$id'";
                $stmt = $conn->prepare($sql_check);
                $stmt->execute();

                //Buoc 3: Xử lý kết quả
                if($namePatient == '' || $date == '' || $symptom == '' || $idDoctor == ''){
                    echo 'Vui lòng nhập thông tin';
                }else{
                    if($stmt->rowCount()>0){
                        header("Location:".DOMAIN."/app/views/paient/add.php?error=existed");
                    }else{
                        $sql_insert = "INSERT INTO benhnhan (tenBenhNhan, ngayKham, trieuChung, idBacSi) VALUES ('$namePatient', '$date', '$symptom', '$idDoctor')";
                        $stmt = $conn->prepare($sql_insert);
                        $stmt->execute();
                        if($stmt->rowCount() > 0){
                            header("Location:".DOMAIN."/public/index.php?success=added");
                        }
                    }
                }
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
}