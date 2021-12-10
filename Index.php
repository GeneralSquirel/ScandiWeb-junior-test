<?php
/*includes*/
include('DataHandler.php');
require("Classes/DvDClass.php");
require("Classes/BookClass.php");
require("Classes/FurnitureClass.php");

$conn = new dataHandler();
$conn->connect();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include('Partials/Header.php');
    include('List.php');
    include('add.php');
    include('Partials/Footer.php');
     ?>
  </body>
</html>
