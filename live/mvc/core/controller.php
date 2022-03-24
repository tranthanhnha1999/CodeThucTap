<?php
    class Controller{
        public function model($model){
            require_once("./mvc/Models/".$model.".php");
            return new $model;
        }
        public function View($View,$data=[]){
            require_once("./mvc/Views/".$View.".php");           
        }
    }
?>