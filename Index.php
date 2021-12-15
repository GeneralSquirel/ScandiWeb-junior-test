<?php
/*includes*/
include('DataHandler.php');
require("Classes/DvDClass.php");
require("Classes/BookClass.php");
require("Classes/FurnitureClass.php");

$conn = new dataHandler();
$conn->connect();
session_start();
$session['contentVar'] = "Partials/add.php";


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">

  <!-- bootstrap -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/Style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <title></title>
</head>
<body>
  <?php include('Partials/Header.php');?>
  <div class="container content">
    <?php

    switch ($request) {
        case '/' :
            require __DIR__ . '/views/list.php';
            break;
        case '/add' :
            require __DIR__ . '/views/add.php';
            break;
        case '/list' :
            require __DIR__ . '/views/list.php';
            break;
        default:
            http_response_code(404);
            require __DIR__ . '/views/404.php';
            break;
    }
 ?>
  </div>
  <?php include('Partials/Footer.php');?>
</body>
</html>
