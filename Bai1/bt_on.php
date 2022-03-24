<!-- <?php
    echo 'Mời bạn nhập vào 1 số '
    
    ?>
    <form action="" method="post">
     <input type="text" name="a">
     <input type="submit" name="chon" value ="nhập">
    </form>
    
<?php
    $a =isset($_POST['chon'])? $_POST['a'] : '';
    switch($a){
        case 1:
            echo 'đây là số 1';
            break;
        case 2:
            echo 'đây là số 2';
            break;
        case 3:
            echo'đây là số 3';
            break;
        default :
            echo 'sô này không có ';
    }

?> -->
<!-- 
<?php
    for($i = 1; $i < 11; $i++){
        echo 'chào bạn lần' .$i;
        echo '<br>';
    }
?> -->

<?php
    $tham_so_goc =5;
    function ham(){
        echo 'Đây là bài bắt đầu hàm';
    }
    // ham();
    function ham_co_tham_so($tham_so){
        $tham_so ++;
        echo $tham_so;
    }
    //ham_co_tham_so($tham_so_goc);

    //Tham trị và tham chiếu
    function ham_tham_tri($tham_tri){
        $tham_tri ++;
        echo $tham_tri;
    }
    // ham_tham_tri($tham_so_goc); //6 
    // echo $tham_so_goc; // 5 Tham số góc không thay đổi
    function ham_tham_chieu(&$tham_chieu){
        $tham_chieu ++;
        echo $tham_chieu;
    }
    // ham_tham_chieu($tham_so_goc); //6
    // echo $tham_so_goc; // 6 tham chiếu (&) tham số góc thay đổi

    $ham_ano = function(){
        echo 'gán hàm cho biến ';
    };
    //$ham_ano();
    $arr_func = [
        'func1' => function(){
            echo 'đây là func 1';
        },
        'func2' => function($tham_so){
            echo 'Đây là function 2' .$tham_so;
        }
    ];
    // $arr_func['func1']();
    // $arr_func['func2']($tham_so_goc );

    // Hướng đối tượng PHP
    function demo($mau_sac,$so_chan){
        echo "Bàn có màu {$mau_sac} và có {$so_chan} chân";
    }
    class Tables{
        public $mau_sac;
        public $so_chan;
        public function _construct( $mau_sac , $so_chan ){
            $this->mau_sac = $mau_sac;
            $this->so_chan = $so_chan;
        }
        public function demo($mau_sac,$so_chan){
            echo "Bàn có màu {$mau_sac} và có {$so_chan} chân";
        }
    }
    $table = new Tables('trang','2');
    echo '<pre>';
    var_dump($table);
    echo '<pre>';
?>


