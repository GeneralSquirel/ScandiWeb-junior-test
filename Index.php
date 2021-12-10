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
  <link rel="stylesheet" href="css/Style.css">
  <!-- bootstrap -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <title></title>
</head>
<body>
  <?php include('Partials/Header.php');?>
  <div class="container"><?php include('Partials/add.php') ?></div>
  <?php include('Partials/Footer.php');?>
</body>
</html>


<script src="JS/Functions.js" charset="utf-8"></script>
