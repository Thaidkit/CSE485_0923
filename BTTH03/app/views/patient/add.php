<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
        if(isset($_GET['error'])){
            echo "<p style='background-color:orange'>{$_GET['error']}</p>";
        }else if(isset($_GET['success']))
            echo "<p style='background-color:green'>{$_GET['success']}</p>";
    ?>
    <h3 class="text-center text-uppercase mt-4">Thêm bệnh nhân</h3>
    <form action="/BTTH03/app/controllers/PatientAddController.php" method="post" class="mx-auto mt-5" style="width: 600px;">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label fw-bold">Họ và tên</label>
            <input type="text" class="form-control" name="tenBenhNhan" placeholder="Nhập thông tin . . .">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label fw-bold">Ngày khám</label>
            <input type="text" class="form-control" name="ngayKham" placeholder="Nhập thông tin . . .">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput3" class="form-label fw-bold">Triệu chứng</label>
            <input type="text" class="form-control" name="trieuChung" placeholder="Nhập thông tin . . .">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput4" class="form-label fw-bold">Mã Bác sĩ</label>
            <input type="text" class="form-control" name="idBacSi" placeholder="Nhập thông tin . . .">
        </div>
        <button type="submit" class="btn btn-primary" name="sbmAdd">Thêm thông tin</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>