<?php
    // class Car{
    //     public $cua;
    //     public $banh;
    //     public $mau_sac;
    //     public function __construct($b,$c,$m){
    //         $this->banh = $b;
    //         $this->cua = $c;
    //         $this->mau_sac = $m;
    //     }
        
    // }
    // $car = new Car('4','4','Trang');
    // // $car->cua = '4';
    // // var_dump($car->banh);   
    
    // echo "xe có {$car->banh} bánh,{$car->cua} cửa và có màu {$car ->mau_sac}";    

    trait Trait_1{
        function say_hello(){
            echo 'Chao bạn';
        }
    }
    trait Trait_2{
        function say_hi(){
            echo 'chào bạn 2';
        }
    }
    class use_trait{
        use Trait_1;
        use Trait_2;
    }

    // $ex = new use_trait();
    // $ex->say_hello();
    // $ex->say_hi();  

    $str = '123456';
    $a = str_split($str);
    var_dump($a);

    // $stri = ' Cầu dừa đủ sài';
    // $b = str_replace('dừa','mận',$stri);
    // echo $b;
    $stri = ' Cầu dừa đủ sài';
    $b = str_repeat($stri,6);
    echo $b;

    


?>