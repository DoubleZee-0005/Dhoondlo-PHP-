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

        public function addUserDB($var)
        {
       
        $result = $this->conn->prepare("INSERT INTO users (full_name,user_name,user_email,user_password,c_user_password) VALUES (?,?,?,?,?)");            
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

        public function duplicateCheck($email)
        {   
            $query = "SELECT * FROM users WHERE user_email='alialvi13054@gmail.com'";
            $query_run = $this->conn->query($query);
            $exec = $query_run->rowCount();
            echo $exec;            
        }
    }

?>