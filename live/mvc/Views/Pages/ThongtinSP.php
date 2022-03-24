<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin</title>
    <style>
        table{
            margin-left:auto;
            margin-right:auto;
        }
        td{
            text-align: center;
            
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Thông tin cá nhân</h1>
    <div>
                <table border = '1' cellpadding='35' class='center'>
                    <tr>
                        <th>ID</th>
                        <th>HỌ TÊN</th>
                        <th>NĂM SINH</th>
                        <th>ĐỊA CHỈ</th>
                    </tr>
                    <?php
                        while($rows = mysqli_fetch_array($data['sinhvien'])){                
                    ?>
                    <tr>
                    <td><?php echo $rows["id"];?></td>
                    <td><?php echo $rows["hoten"];?></td>
                    <td><?php echo $rows["nam_sinh"];?></td>
                    <td><?php echo $rows["dia_chi"];?></th>
                    </tr>
                    <?php
                        }
                     ?>
                </table>
                <br>     
    </div>
</body>
</html>