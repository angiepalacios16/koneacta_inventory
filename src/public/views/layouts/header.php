<?php
  require_once("config/constants.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konecta</title>
  <link rel="stylesheet" href="<?php echo PATH_LOCAL . 'src/public/assets/bootstrap/css/bootstrap.min.css'?>">
  <script src="<?php echo PATH_LOCAL . 'src/public/assets/bootstrap/js/bootstrap.min.js'?>"></script>
</head>
<body>
<div class="container-sm">
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</div>