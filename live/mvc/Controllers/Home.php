<?php

    class Home extends controller{
        function SayHi(){
            $name = $this -> model("ModelSinhvien");    
            //echo $name -> GetSV();
            $sv = $name ->DSSV();
            $this-> View("Tintuc",["sinhvien"=>$sv,
                                   "page"=>"ThongtinSP"               
                                    ]);
        }
        function Show(){
            $Thongtin = $this -> model("SanPhamModel");
            $sp = $Thongtin -> GetSP();
            $this -> View("Sanpham" , ["number" => $sp]);
        }
        function Tinhtich($a,$b)
        {      
            $kn = $this -> model("SanPhamModel");
            $sp = $kn -> tich($a,$b);     
            $this->View("Sanpham",["tich"=> $sp]);

        }
        function ThongtinSV($ten,$tuoi){
            $con = $this -> model("SanPhamModel");
            $sp = $con ->Thongtin($ten,$tuoi);
            $this ->View("Sanpham",[
                                    "page" => "ThongtinSP",
                                    "thongtin"=>$sp,
                                     "mau" =>"Blue",
                                    ]);
        } 
    }   

?>