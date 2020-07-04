<?php

    class DBconnect
    {
        private $conn;
        function __construct()
        {
            $this->conn = new PDO("mysql:host=localhost;dbname=webproj","root","");
            
            if(!$this->conn)
            {
                echo"<script>alert('Fatal error please try again later')</script>";
            }            
        }

        public function addPatronDB($var)
        {
       
        $result = $this->conn->prepare("INSERT INTO user (fullName,userName,email,password,cpassword) VALUES (?,?,?,?,?)");            
        $result->execute($var);           	

        if($result->rowCount())
        {            
            return 1;            
        }
        else
        {            
            return 0;        
        }
        }

        public function addSellerDB($var)
        {
       
        $result = $this->conn->prepare("INSERT INTO sellers (fullName,userName,email,password,cpassword,shopName,webAddress,businessAddress) VALUES (?,?,?,?,?,?,?,?)");            
        $result->execute($var);           	

        if($result->rowCount())
        {            
            return 1;            
        }
        else
        {            
            return 0;        
        }
        }
    }

?>