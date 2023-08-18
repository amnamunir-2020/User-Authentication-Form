<?php include('connection.php') ;
include('authentication_code.php') ;

?>

<!DOCTYPE html>
<html>
   <head>
      <!--css-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
      <title>Registration Form</title>
      <style>
         .section-ui{
         background:black;
         padding:10px;
         border:1px solid white;
         border-radius:10px;
         }
         .form-ui{
         background-image: black;
         padding:5px;
         }
         .text-design{
         color:white;
         line-height:40px;
         padding:20px;
         }
         input {
         line-height: 40px;
         margin: 8px;
         width: 280px;
         padding: 8px;
         border: 1px solid black;
         border-radius: 3px;
         }
         select {
         line-height: 40px;
         margin: 8px;
         width: 280px;
         height: 56px;
         padding: 8px;
         border: 1px solid black;
         border-radius: 3px;
         }
         .btn-submit{
         text-align:center;
         margin-top:10px;
         }
         .btn-submit button {
         cursor: pointer;
         width: 40%;
         padding: 14px;
         border: 1px solid #07355d;
         border-radius: 27px;
         background: #0fa19e;
         color:white;
         }
         .btn-submit button:hover {
         background: white;
         color: black;
         }
         img {
         max-width: 100%;
         }
         .nav {
         background: black;
         padding: 10px;
         border: 1px solid;
         border-radius: 4px;
         }
         .nav a{
         color:white;
         }
      </style>
   </head>
   <body>
      <!--<header>
         <div class="container">
         <ul class="nav justify-content-end ">
           <li class="nav-item">
             <a class="nav-link active" href="<?= base_url('index.php') ?>">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="<?= base_url('login.php') ?>">Login</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="<?= base_url('registration.php') ?>"> Register</a>
           </li>
           
         </ul>
         </div>
         </header>-->
      <?php  include('message.php');     ?> 
      <section class="mt-5" >
         <div class="container section-ui "  >
            <div class="row">
               <div class="col-lg-5">
                  <div class=" text-center text-design">
                     <h2>User Registration Form:</h2>
                     <p>Fill The Form & Login Now!</p>
                     <img src="laptop.png">
                  </div>
               </div>
               <div class="col-lg-7 mt-3">
                  <form class="form-ui text-center" action="" method="post">
                     <div class="row">
                        <div class="col-lg-6 "> <input type="text"   name="fname"   placeholder="First Name" required > </div>
                        <div class="col-lg-6"> <input type="text"    name="lname"    placeholder="Last Name" ></div>
                        <div class="col-lg-6"> <input type="text"      name="username"   placeholder="User Name" required></div>
                        <div class="col-lg-6"> <input type="text"      name="useremail"   placeholder="User Email" required></div>
                        <div class="col-lg-6"> <input type="password"  name="password"   placeholder="Password" required></div>
                        <div class="col-lg-6"> <input type="password" name="cpassword"   placeholder="Confirm Password" required></div>
                        <div class="col-lg-6">
                           <select   name="gender" placeholder ="gender" >
                              <option value="female">Female</option>
                              <option value="male">Male</option>
                           </select>
                        </div>
                        <div class="col-lg-6" >
                           <input type="date"  name="birthday" placeholder="Date of Birth" >
                        </div>
                        <div class="col-lg-12 btn-submit">
                           <button type="submit" name= "submit" > Submit</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>