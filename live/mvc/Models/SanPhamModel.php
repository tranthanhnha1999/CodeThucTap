<?php
    class SanPhamModel{
        public function GetSp(){
            $a = 'Nguyễn văn sơn';
            $b = '1999';
            return $a . $b;
        }
        public function tich($a,$b){
            return $a*$b;
        }

        public function Thongtin($a,$c){
            $ten = "Tên của bạn là :".$a."<br>";
            $tuoi = "Tuổi của bạn là :".$c."";
            return $ten . $tuoi;
        }
    }
?>