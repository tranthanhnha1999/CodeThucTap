<!-- <?php

$conn = mysqli_connect('localhost', 'thanhnha', 'nha12345678','thanhnha') or die ('Không thể kết nối tới database');


    //$sql = 'SELECT * FROM customer where';

    // $result = mysqli_query($conn,$sql);

    // if(!$result){
    //     die ('Câu truy vấn bị sai !');
    // }
    // $arr_kq = [];
    // while($row = mysqli_fetch_assoc($result)){
    //     array_push($arr_kq,$row);
    // }
    
    // mysqli_free_result($result);    

    // mysqli_close($conn);
    // echo '<pre>';
    // var_dump($arr_kq);
    // echo '</pre>';
    //$sql ="UPDATE customer SET name ='nha' WHERE customer.id = 2";
    // $sql ="DELETE FROM customer WHERE customer.id = 4";
    // mysqli_query($conn,$sql);
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Người Dùng</title>
</head>
<body>
    <center><h1>Thông tin người dùng</h1></center>
    <div class='container-fluid'>
    <style> 
        table,td,th{
            border: 1px solid black;
            text-align :center;
        }
    </style>
    <a href="bt7_Mysql.php">Thêm mới</a>
    
    <table style="width: 100%;">
        <tr>
            <th>STT</th>
            <th>ID</th>
            <th>NAME</th>
            <TH>PHONE</TH>
            <th>ADDRESS</th>
            <th>ACTION</th>
            <th></th>
            
            
        </tr>
        <?php
            $conn = mysqli_connect('localhost', 'thanhnha', 'nha12345678','thanhnha') or die ('Không thể kết nối tới database');
            $sql = "SELECT * FROM customer ";
            $result = mysqli_query($conn,$sql);
            $arr =array();
            while($row = mysqli_fetch_assoc($result)){
                $arr[] = $row;
            }
            for($i = 0;$i<count($arr);$i++)
            {
                echo '<tr>
                        <td>'.($i+1).'</td>
                        <td>'.$arr[$i]['id'].'</td>
                        <td>'.$arr[$i]['name'].'</td>
                        <td>'.$arr[$i]['phone'].'</td>
                        <td>'.$arr[$i]['address'].'</td>
                        <td>
                            <form action="deletecustomer.php" method ="post">
                                <input type="hidden" value="'.$arr[$i]['id'].'" name="customer_id"/>
                                <input  type="submit"  value="Delete" name="delete"/>
                            </form>
                            
                        </td>
                    </tr>';
            }
            mysqli_close($conn);
            
        ?>
        
        


    </table>
        
    </div>
</body>
</html>