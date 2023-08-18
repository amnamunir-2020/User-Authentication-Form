<?php include ('connection.php');


?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Home</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
      <style>
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
      <div class="container mt-5">
         <div class="text-center">
            <h2>User Data</h2>
            <?php  include('message.php');     ?>
         </div>
         <table class="table table-dark">
            <thead>
               <tr>
                  <th scope="col">User ID</th>
                  <th scope="col">User Name</th>
                  <th scope="col">Date Of Birth</th>
                  <th scope="col">Gender</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td><?= $_SESSION['user_login_data']['user_id']  ?> </td>
                  <td> <?= $_SESSION['user_login_data']['user_name'] ?> </td>
                  <td> <?= $_SESSION['user_login_data']['user_gender'] ?> </td>
                  <td> <?= $_SESSION['user_login_data']['user_dob'] ?> </td>
               </tr>
            </tbody>
         </table>
      </div>
   </body>
</html>