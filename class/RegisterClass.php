<?php 


class RegisterClass{

//connection construct  function becasue automatic call function 7 no need to again agin object make
    public function __construct(){

        $db=new DatabaseConnection;
        $this->conn=$db->conn;

    }

    //query function with parameters
   public function registration($fname,$lname,$username,$useremail,$password,$gender,$birthday) {

    $register_query="insert into users (first_name,last_name,username,email,password,gender,dob,created_at,updated_at) values ('$fname','$lname','$username','$useremail','$password','$gender','$birthday',now(),now())";
    $result=$this->conn->query($register_query);
    return $result;
   }


//user exist function exist mean yai user  hai kai nahi uskailia function
public function isuserExist($useremail){

    $checkuser="select email from users where email='$useremail' limit 1 ";
    $result=$this->conn->query($checkuser);
    if($result->num_rows>0){
      return true;

    }
    else
    {
        return false;
    }



}


//Confirm password function check password equal confirm password 
   public function confirmationPassword($password,$confirm_password){
   if($password==$confirm_password)
   {
    return true;
   }

   else
   {
return false;
   }


   }




}
















?>