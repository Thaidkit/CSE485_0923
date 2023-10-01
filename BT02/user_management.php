<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./user_management.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous"></head>
<body>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-3 ">
                <img src="./images/W3.png" alt="" style="height:40px; margin-left:30px">
                <img src="./images/cms.png" alt="" style="height:40px;">
                <ul class="nav flex-column">
                    <li class="nav-item dropdown">
                        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-person icon-left-part"></i>User 
                        <span class="badge light badge-sm badge-primary ms-2 mb-0">Modules</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#"><i class="bi bi-box-seam icon-left-part"></i>CMS
                            <span class="badge light badge-sm badge-primary ms-2 mb-0">Modules</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#"><i class="bi bi-gear icon-left-part"></i>Config
                            <span class="badge light badge-sm badge-primary ms-2 mb-0">Modules</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-grid icon-left-part"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-book icon-left-part"></i>Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-people-fill icon-left-part"></i>Instructor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-info-circle icon-left-part"></i>Apps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-pie-chart icon-left-part"></i>Charts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-star icon-left-part"></i>Bootstrap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-heart icon-left-part"></i>Plugins</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-gear-wide icon-left-part"></i>Widget</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-file-earmark-check icon-left-part"></i>Forms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-file-earmark-spreadsheet icon-left-part"></i>Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-file-earmark-spreadsheet icon-left-part"></i>Pages</a>
                    </li>

                </ul>
            </div>

            <div class="col-md-8 d-flex">
                <div class="main" > 
                    <div class="row-top row align-items-start">
                        <div class="col">
                            <a class="btn" style="font-size: 30px" href="#" role="button"><i class="bi bi-list" style=""></i></a>
                            <span style="font-weight: bold; font-size: 30px;">User</span>
                        </div>
                        <div class="col">
                            <div class="input-group mt-1 me-6">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-search" style="color: tomato;"></i></span>
                                <input type="text" class="form-control" placeholder="Search here...">
                            </div>
                        </div>
                    </div>

                    <div class="row-center row align-items-start">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h4 class="accordion-header-text ms-4">Filter</h4>
                                    <i class="bi bi-chevron-down" style="margin-left: 800px"></i>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row ms-3">
                                        <div class="col">
                                            <input type="text" name="" placeholder="Email" class="form-control">
                                        </div>
                                        <div class="col">
                                            <input type="text" name="" placeholder="Mobile" class="form-control">
                                        </div>
                                        <div class="col">
                                            <select name="" class="form-control">
                                                <option value="0">Select Group</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-success filter-form"><i class="bi bi-search"></i>Filter</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-success clear-form">Clear</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-">
                            <div class="card m-3">
                                <div class="card-header">
                                    <h4 style="color: orangered;" class="card-title">Users</h4>
                                    <div class="">
                                        <button type="button" class="btn light btn-outline-primary " style="color:tomato; font-weight:bold; border: 1px solid tomato">DELETE</button>
                                            <a href="#" class="btn btn-primary" style="background-color: tomato; color:white; font-weight:bold; border: 1px solid tomato">
                                                ADD USER
                                                <span class="btn-icon-end"><i class="fa-solid fa-plus"></i></span>
                                            </a>
                                    </div>
                                </div>    
                            </div>
                            <table class="table me-5 mt-4" >
                                <thead>
                                    <tr>
                                        <th>
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                        </th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Groups</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Date Of Birth</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        for($i=0 ; $i<10; $i++){
                                            ?>
                                            <tr>
                                                <th>
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                                </th>
                                                <td>Mark</td>
                                                <td>ABCDEF@gmail.com</d>
                                                <td>Male</d>
                                                <td>Manage</td>
                                                <td>0323322443</td>
                                                <td>21/3/1998</td>
                                                <td>
                                                    <div class="circle">
                                                        <i class="bi bi-circle-fill" style="color: green;"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="sweetalert">
                                                        <div class="d-flex">
                                                            <a href="" class="btn btn-secondary shadow btn-xs sharp me-1"><i class="bi bi-shield-shaded"></i></a>
                                                            <a href="" class="btn btn-primary shadow btn-xs sharp me-1"><i class="bi bi-pencil"></i></a>
                                                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger shadow btn-xs sharp sweet-success-cancel"><i class="bi bi-trash"></i></a>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            ...
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php }
                                    ?>     
                                </tbody>
                            </table>
                        </div>  
                        <div class="row">
                            <nav aria-label="Page navigation example ">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>  
                    </div>
                </div>            
            </div>

            <div class="col-md-1">
                xin chaiof
            </div>


        </div>
    </div>








            <!-- <div class="col-md-1">
            <div><i class="bi bi-gear-fill icon-right"></i></div>
                <div><i class="bi bi-envelope-fill icon-right"></i></div>
                <div><i class="bi bi-bell-fill icon-right"></i></div>
                <div class="nation"><img src="./images/eng.png" style="height: 30px;" class="eng"><br><span class="eng">eng</span></div>
            </div>                            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
</body>
</html>