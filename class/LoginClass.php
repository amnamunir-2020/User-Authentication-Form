<?php

class LoginClass{
    //db connection
    public function __construct(){
     
        $db=new DatabaseConnection;    //object for db use construct function automatic call
        $this->conn=$db->conn;            //aik new variable kai ander mainay isconnection kai object ko assign kerdia
    }

    //user login function
    public function userLogin($emaillogin,$passwordlogin)
    {

        $login_query="select * from users where email='$emaillogin' and password='$passwordlogin' LIMIT 1";
        $result=$this->conn->query($login_query);                    //jesay mysqli_query hai wesay query bus in oop
          if($result->num_rows>0){                                 //1 row ka bi data hoga tou return true
             
            $data=$result->fetch_assoc();                           //data variable kai ander fetch kerayga associative mean keyidvalue ok!
            $this->userAuthentication($data);                         //passing data
            return true;

          }

          else{
            return false;

          }

    }


    private function userAuthentication($data){                      //get data so private!
         
        $_SESSION['authenticated']=true;
        $_SESSION['user_login_data']=[
        'user_id'=>$data['id'],
        'user_name'=>$data['username'],
        'user_gender'=>$data['gender'],
        'user_dob'=>$data['dob']
        ];
    }

    
    
    //Function userLog Out in 

    // public function userLogout(){
    //   unset ($_SESSION['authenticated']);
    //   destroy ( $_SESSION['user_login_data']);

    // }




}












?>