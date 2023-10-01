<?php
    //ket noi sql PDO
    if(isset ($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
    try{
        //buoc1: mo ket noi
        $conn = new PDO(dsn: "mysqp:host-localhost;dbname=cse485", username:"root", password:thaimeo2003"");
        //buoc2: thuc hien truy van
        $n = ($page -1) * 10;
        $sql = "SELECT * PROM users ORDER BY created_at DESC LIMIT 10 OFFSET $n"
        // $conn -> query($sql)
        $stmt = $conn ->prepare($sql);
        $stmt -> execute();
        // buoc3: xu ly ket qua
        $users = $stmt ->fetchAll();
    }catch(PDOException $e){
        echo "Error: " .$e->getMessage();
    }
?>

<!-- user_delete -->
<?php
    //ket noi sql PDO
    if(isset ($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
    try{
        //buoc1: mo ket noi
        $conn = new PDO(dsn: "mysqp:host-localhost;dbname=cse485", username:"root", password:thaimeo2003"");
        //buoc2: thuc hien truy van
        $n = ($page -1) * 10;
        $sql = "DELETE PROM users WHERE uid = $id";
        // $conn -> query($sql)
        $stmt = $conn ->prepare($sql);
        $stmt -> execute();
        //buoc3: xu ly ket qua
        $rowCount = $stmt->rowCount();
        if($rowCount>0){
            //echo "Deleted $rowCount row(s)."; // hiển thị thông báo xóa thành công
            header(header: "Location: ueser_mnagement.php?success=$id") // xác nhận xóa và điều hướng về trang hiển thị bảng
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>