<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới customer</title>
</head>
<body>
    <h2>Nhập thông tin người dùng cần thêm vào</h2>
    <form action="" method="post">
        <label for="fname">Name :</label><br>
        <input type="text"  name="name"><br>
        <label for="lname">Phone:</label><br>
        <input type="text"  name="phone" ><br>
        <label for="lname">Addres:</label><br>
        <input type="text"  name="address">
        <br><br>
        <input type="submit" value="Thêm" name="add_customer">
    </form> 
    
    
</body>
</html>
<?php
        if(!empty($_POST['add_customer'])){
            $name = isset($_POST['name'])? $_POST['name'] :'';
            $phone = isset($_POST['phone'])? $_POST['phone'] :'';
            $address = isset($_POST['address'])? $_POST['address'] :'';
            $conn = mysqli_connect('localhost', 'thanhnha', 'nha12345678','thanhnha') or die ('Không thể kết nối tới database');
        //mysql_set_charset($conn,"utf8");
            if($conn->connect_error){
                var_dump($conn->connect_error);
                die();
            }
            $sql ="INSERT INTO customer(name,phone,address) value('".$name."','".$phone."','".$address."')";

            mysqli_query($conn,$sql);

            mysqli_close($conn);
            header("Location: /bai1/bt5_connect_Mysql.php");
            exit;   
        }

        

?>