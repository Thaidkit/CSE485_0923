<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row g-0">
            <div class="header">
                <?php 
                    include 'header_index.php';
                ?>
            </div>

            <div class="main">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/BTTH01_CSE485_ex02/img/slide2.jpg" class="d-block w-100" style="height: 680px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/BTTH01_CSE485_ex02/img/slide3.jpg" class="d-block w-100" style="height: 680px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/BTTH01_CSE485_ex02/img/slide1.PNG" class="d-block w-100" style="height: 680px;" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="title" style="text-align: center; font-size: 30px; color:blue; margin: 10px;">TOP BÀI HÁT YÊU THÍCH</div>
                
                <div class="text-center" style="border-bottom: 1px solid black;">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="card" style="width: 21rem; text-align:center; margin:5px 0px;">
                                <img src="/BTTH01_CSE485_ex02/img/chuyentinhcaylagio.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="#" style="text-decoration: none">Cây, lá và gió</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 21rem; text-align:center; margin:5px 0px;">
                                <img src="/BTTH01_CSE485_ex02/img/oicuocsongmenthuong.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="#" style="text-decoration: none">Cuộc sống mến thương</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 21rem; text-align:center; margin:5px 0px;">
                                <img src="/BTTH01_CSE485_ex02/img/longme.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="#" style="text-decoration: none">Lòng mẹ</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 21rem; text-align:center; margin:5px 0px;">
                                <img src="/BTTH01_CSE485_ex02/img/phoipha.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="#" style="text-decoration: none">Phôi pha</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 21rem; text-align:center; margin:5px 0px;">
                                <img src="/BTTH01_CSE485_ex02/img/noitinhyeubatdau.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="#" style="text-decoration: none">Nơi tình yêu bắt đầu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                include 'footer.php';
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>