<?php
    
    namespace App\Services;
    
    class Connect
    {
        private $protocol;
        private $adr;
        private $port;
        private $conn_id;
        
        public function __construct(string $protocol, string $adr, int $port)
        {
            $this->protocol = $protocol;
            $this->adr = $adr;
            $this->port = $port;
            
        }
        
        public function connectToFtp(){
            $this->conn_id = ftp_connect($this->adr,$this->port);
        }
    }