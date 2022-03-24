<!DOCTYPE html>
<html>
    <head>
        <title>Giai Phương trình Bậc 1</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $result = '';
            if(isset($_POST['calculate']))
            {
                $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
                $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';

                if($a == ''){
                    echo 'Bạn chưa nhập số a';
                }
                else if($b ==''){
                    echo 'Bạn chưa nhập số b';
                }
                else if($a == 0){
                    echo 'Số a phải khác 0';
                }
                else{
                    $result = -($b) / $a;
                }
            }
        ?>
        
        <h1>Giai Phương trình bậc 1</h1>
        <form  method="post" action="bt1.php">
        <input type="text" style="width: 20px; padding: 5px;" name="a" value="" >x
        +
        <input type="text" style="width: 20px; padding: 5px;" name="b" value="">
        = 0
        
        </br>
        </br>
        <input type="submit" name="calculate" value="Tính" style="padding: 10px;">
        </form>
        <?php
            echo 'Phương trình bạn vừa nhập có kết quả x =' .$result;
        ?>
    </body>
</html>

