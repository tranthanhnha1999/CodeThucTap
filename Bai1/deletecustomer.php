<?php
    if(isset($_POST['delete'])){
        $id = $_POST['customer_id'];

        $conn = mysqli_connect('localhost', 'thanhnha', 'nha12345678','thanhnha') or die ('Không thể kết nối tới database');
        //mysql_set_charset($conn,"utf8");
            if($conn->connect_error){
                var_dump($conn->connect_error);
                die();
            }
        $sql = 'DELETE FROM customer WHERE id = '.$id;
        mysqli_query($conn,$sql);
        mysqli_close($conn);
        header("Location: /bai1/bt5_connect_Mysql.php");
         exit;  
    }
?>