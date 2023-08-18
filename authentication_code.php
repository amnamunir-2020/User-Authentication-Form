<?php 
include_once('class/RegisterClass.php');
include_once('class/LoginClass.php');




//Login Code if else condition checkisset post and 2 variables with builtinfunction validateinput (usikai sath dbconnect diahai islia uper include nahi kiya 
//ab mai aik  varaibale kai ander dono variable kologi object kai zariyae uthaogi function ko or function mera userlogin logincontroller ki class maihai
//usmai mainay function banaya ha two arguments pass kerkai jo mainay variable banayehai yani mai userlogin mainay data fect ka code kiyahai

//Object
//$loginauth=new LoginController;

//LogOut Form
//if(isset($_POST['logout'])){
//$checkedlogout=$loginauth->userLogout();
//if($checkedlogout){
 // redirect("Log Out Success","login.php");

//}
//}




//Object
$loginauth=new LoginClass;           //object for my class logincontroller

//Login Form
if(isset($_POST['login'])){
//in oop variable store values withfunction validateinput  2 arguments 1is connectiondb and 2is post field name

$emaillogin=validateInput($db->conn,$_POST['useremail']);
$passwordlogin=validateInput($db->conn,$_POST['password']);


//object

$checklogin=$loginauth->userLogin($emaillogin,$passwordlogin);

if($checklogin)
{
 redirect("Log in Success","index.php");

}
else
{
  redirect("Invalid password & Email","login.php");
}



}





//Registration Form


if(isset($_POST['submit'])){
  
  
  $first_name=validateInput($db->conn,$_POST['fname']);
  $last_name=validateInput($db->conn,$_POST['lname']);
  $user_name=validateInput($db->conn,$_POST['username']);
  $user_email=validateInput($db->conn,$_POST['useremail']);
  $password=validateInput($db->conn,$_POST['password']);
  $confirm_password=validateInput($db->conn,$_POST['cpassword']);
  $gender_is=validateInput($db->conn,$_POST['gender']);
  $date_birth=validateInput($db->conn,$_POST['birthday']);

  //object
  $register=new RegisterClass;
  $result_password=$register->confirmationPassword($password,$confirm_password);
  if($result_password){
   
    $result_user=$register->isuserExist($user_email);       
    if($result_user){
      redirect ("Already Email Exist", "registration.php");
    }

    else{
     $register_query=$register->registration($first_name,$last_name,$user_name,$user_email, $password,$gender_is,$date_birth);
     if( $register_query){
      redirect ("Registered Succesfully", "login.php");
     }

     else
     {
      redirect ("Something Went Wrong", "registration.php");
     }
    
    
    }




  }

  else{
    redirect ("Confirm Password & Password Does not Match", "registration.php");
  }




}




?>
