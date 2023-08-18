<?php 
session_start();



//define
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_DATABASE','admin_db');
define('SITE_URL','http://localhost/UserAuthentication/');

//include not beacuse mainay isifiles connection mai databaseconnection ki class banaye hai  otherwise include_once
$db=new DatabaseConnection;



//url
function base_url($slug){
echo SITE_URL .$slug;
}





//function redirect (jiskai ander mai 2 parametrs pass aik message ho or aik page open ka)
function redirect($message,$page){
  $redirectto=SITE_URL .$page;
  $_SESSION['message']= "$message";
  header("Location: $redirectto");
  exit(0);                             //terminate the program

}





//return jo post hai  validateinput fuction builtinhai usae usekiyahai
function validateInput($dbcon,$input){
   return mysqli_real_escape_string($dbcon,$input);
}




//Database Connection CLASS

class DatabaseConnection
{

    public function  __construct()
    
    {                                                                                            // automatic call

      $conn=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
      
      if($conn->connect_error)                                        // in oop with connect _error $conn->connect_error
      {
        
        die("<h2>Connection Failed!</h2>");

      }

       "<script>alert('Database Connection Success')</script> ";
     
      //if connect then return conn or conn ko mainy aik new variale mainstore kerlia $conn
     return $this->conn=$conn;
  

    }

}











?>

