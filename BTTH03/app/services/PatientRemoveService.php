<?php
class PatientRemoveService{
    public function getAllPatients(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }

        try{
            //Buoc 1: Ket noi DBServer
            $conn = new PDO("mysql:host=localhost;dbname=phongmach", "root", "thaimeo2003");
            //Buoc 2: Thuc hien truy van
            $sql = "DELETE FROM benhnhan WHERE id = '$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            //Buoc 3: Xử lý kết quả
            $rowCount = $stmt->rowCount();
            if($rowCount>0){
                //echo "Deleted $rowCount row(s).";
                header("Location:".DOMAIN."/public/index.php?successdelete=$id");
            }

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

}
?>