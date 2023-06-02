<?php
    namespace app\Controllers;
    namespace app\Services;
    
   // include_once '..\Services\DBConn.php';

   use app\Services;

   class DB
    {
        private $db;
        public function __construct()
        {
            $this->db = new DBCDBConn();
            $this->db->connectDB();
        }
    }