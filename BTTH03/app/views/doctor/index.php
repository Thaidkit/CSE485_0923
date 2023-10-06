<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Bác Sĩ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary mt-0">
            <div class="container-fluid" style="background-color:aliceblue;">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active fw-bold" style="color: blue; font-size: 30px" aria-current="page" href="">Bệnh nhân</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fw-bold " style="font-size: 30px" href="#">Bác sĩ</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
        <h3 class="text-center text-uppercase text-success my-3">Danh sách bác sĩ</h3>
        <a href="" class='btn btn-success'> Thêm bệnh nhân</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã bệnh nhân</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Ngày khám</th>
                    <th scope="col">Triệu chứng</th>
                    <th scope="col">Mã Bác sĩ</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($patients as $patient) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $patient->getId(); ?>
                        </th>
                        <td>
                            <?php echo $patient->getNamePatient(); ?>
                        </td>
                        <td>
                            <?php echo $patient->getDate(); ?>
                        </td>
                        <td>
                            <?php echo $patient->getSymptom(); ?>
                        </td>
                        <td>
                            <?php echo $patient->getIdDoctor(); ?>
                        </td>
                        <td>
                            <a href="<?= DOMAIN . '/app/views/patient/edit.php?id=' . $patient->getId() ?>"><i
                                    class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#delete<?= $patient->getId() ?>">
                                <i class="bi bi-trash3"></i>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="delete<?= $patient->getId(); ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE User</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn muốn xóa sinh viên có id:
                                            <?= $patient->getId(); ?>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <a href="<?= DOMAIN . '/app/controllers/PatientRemoveController.php?id=' . $patient->getId(); ?>"
                                                class="btn btn-success">YES</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>