<!DOCTYPE html>
<html>
    <header>
        <title>
            Giai phương trình bậc 2
        </title>
        <meta charset="UTF-8">
    </header>
    <body >
        <h1>Giải phương trình bậc 2 </h1>
        <?php
            $result = '';
            if(isset($_POST['calculate'])){
                $a = isset($_POST['a']) ? (float) trim($_POST['a']) : '';
                $b = isset($_POST['b']) ? (float) trim($_POST['b']) : '';
                $c = isset($_POST['c']) ? (float) trim($_POST['c']) : '';
                
                if($a==''){
                    echo 'Bạn chưa nhập số a';
                }
                else if($b==''){
                    echo 'Bạn chưa nhật số b';
                }else if($c==0){
                    echo 'Bạn chưa nhập số c';
                }else if($a == 0)
                {
                    echo ' a phải khác 0';
                }
                $delta =($b *$b) -(4*$a*$c);

                if($delta <0 ){
                    $result = 'Phương trình vô nghiệm';
                }else if($delta == 0){
                    $result = 'Phương trình có nghiệm kép x1 = x2 =' .-($b /2*$a);
                }else{
                    $result = 'Phương trình có 2 nghiệm phân biệt ,x1 = '.((-$b+sqrt($delta))/2*$a);
                    $result .=', x2 = '.((-$b-sqrt($delta))/2*$a);
                }
            }
        ?>
        <form action="bt2.php" method ="post">
            <input type="text" name="a" value="" style="width: 20px;">x <sup>2</sup>
            +
            <input type="text" name="b" value="" style="width: 20px;">x +
            <input type="text" name="c" value="" style="width: 20px;"> = 0
            </br>
            </br>
            <input type="submit" name="calculate" value="Tính">
        </form>
        <?php
            echo $result;
        ?>

    </body>
</html>