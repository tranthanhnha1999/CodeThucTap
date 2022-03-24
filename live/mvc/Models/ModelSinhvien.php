<?php

    class ModelSinhvien extends DB{
        public function GetSV(){
            return 'Nguyễn văn tèo';
        }
        public function DSSV(){
            $qr ='SELECT * FROM sinhvien';
            return mysqli_query($this->con,$qr);

        }
        public function InsertSinhvien($Hoten,$Namsinh,$Diachi){
            $qr = "INSERT INTO sinhvien VALUES(NULL,'$Hoten','$Namsinh','$Diachi')";
            $resualt = false;
            if(mysqli_query($this->con,$qr)){
                $resualt = true;
            }
            return json_encode($resualt);
        }
    }

?>