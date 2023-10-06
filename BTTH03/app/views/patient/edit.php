<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=phongmach", "root", "thaimeo2003");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM benhnhan WHERE id='$id'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            $patient = $stmt->fetch();
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="main-content vh-100 p-3">
        <?php
            if(isset($_GET['error'])){
                echo "<p style='background-color:orange'>{$_GET['error']}</p>";
            }
        ?>
        <h3 class="text-center text-uppercase mt-4">Chỉnh sửa thông tin bệnh nhân</h3>
        <form action="/QuanLySinhVien/app/controllers/StudentEditController.php" method="post" class="mx-auto mt-5" style="width: 600px;">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label fw-bold">ID</label>
                <input type="text" class="form-control bg-warning" name="id" value="" readonly>
            </div>            
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label fw-bold">Họ và tên</label>
                <input type="text" class="form-control" name="tenBenhNhan" value="">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput3" class="form-label fw-bold">Ngày khám</label>
                <input type="text" class="form-control" name="ngayKham" value="">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput4" class="form-label fw-bold">Triệu chứng</label>
                <input type="text" class="form-control" name="trieuChung" value="">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput5" class="form-label fw-bold">Mã Bác sĩ</label>
                <input type="text" class="form-control" name="idBacSi" value="">
            </div>
            <button type="submit" class="btn btn-primary fw-bold" name="sbmSave">Lưu</button>
        </form>
    </div>
</body>
</html>