<?php
    
    
    namespace app\Services;
    namespace Controllers\Configs;
    
    require_once "..\..\Controllers\Configs\configBD.php";

    
    class DBConn
    {
        public $connnect;
    
        public function connectDB(): bool{
            $this->connnect = mysqli_connect(DB_HOST, DB_USER,
                                         DB_PASS, DB_NAME);
            if(!$this->connnect){
                return false;
                die();
            }
            else
            {
                mysqli_select_db(DB_NAME, $this->connnect);
                $sqlQueru = require "..\..\Controllers\Configs\sqlQueru.php";
                
                foreach ($sqlQueru['encoding'] as $sql){
                    if(!$this->connnect->query($sql)) {
                        return false;
                        die();
                    }
                }
                
                return true;
            }
        }
    }