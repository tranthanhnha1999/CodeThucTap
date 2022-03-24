<?php
    class Register extends controller{
        public function Register(){
            $name = $this->model("ModelSinhvien");
            $this->View("register",[]);
        }

        public function RegisterSuccess(){
            
            if(isset($_POST['registerbtn'])){
                $Hoten = $_POST['hoten'];
                $Namsinh =$_POST['nam_sinh'];
                $Diachi =$_POST['dia_chi'];

                $insert = $this->model("ModelSinhvien");
                $insertsv = $insert->InsertSinhvien($Hoten,$Namsinh,$Diachi);
                $this->View("register",["register"=> $insertsv]);
            }
        }
    }
?>