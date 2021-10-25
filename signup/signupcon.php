<?php
    class Database{  
        private $con;  
        public function __construct()  
        {  
            $this->con = mysqli_connect("localhost", "root", "", "php"); 
		    if(!$this->con) 
            {
                error_log("Connection error:".mysqli_connect_error());
            } 
            
		}
        public function getConnection(){ 
            return $this->con; 
        }

}

