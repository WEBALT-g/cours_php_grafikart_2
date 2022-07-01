<?php
require_once 'functions.php'; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">

    <title>
      <?php if (isset($title)) : ?>
        <?= $title; ?>
      <?php else : ?>
        Mon site
      <?php endif ?>
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <div class="container">
        <a class="navbar-brand" href="index.php">Mon site</a>
        
        <div id="navbarsExampleDefault" class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <?= nav_menu('nav-link') ?>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container">