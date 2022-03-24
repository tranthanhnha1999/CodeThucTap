<?php
    class App{

        protected $controller='Home';
        protected $action ='SayHi';
        protected $para =[];
        
        

        function __construct(){
            //Array ( [0] => Home [1] => SayHi [2] => 12 )
            $a = $this->UrlProcess();
            if(file_exists("./mvc/Controllers/".$a[0].".php")){
                $this->controller =$a[0];
                unset($a[0]);
            }
            require_once("./mvc/Controllers/".$this->controller.".php");

            if(isset($a[1])){
                if(method_exists($this->controller , $a[1])){
                    $this->action =$a[1];
                }
                 unset($a[1]);
                 
            }
            $this->para = $a ? array_values($a) : [];
            call_user_func_array([new $this->controller,$this->action],$this->para);
        }
        function UrlProcess(){
            if(isset($_GET['url'])){
                return explode('/',filter_var(trim($_GET['url'],"/")));   
            }
            else{
                return array ('a');
            }
        }
    }
?>