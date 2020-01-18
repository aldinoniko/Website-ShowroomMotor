<?php
error_reporting(0);
session_start();
if (isset($_SESSION['level']))
{
 
   if ($_SESSION['level'] == "admin")
   {
      include 'konten-admin.php';
   }
   else if ($_SESSION['level'] == "user")
   {
       include 'konten-user.php';
   }
}
?>
<!DOCTYPE html>
 <html>
 <head>
   <title></title>
 </head>
 <body>
 <h1>Selamat datang di Halaman user</h1>
 <a href="logout.php">Log out</a>
 </body>
 </html>