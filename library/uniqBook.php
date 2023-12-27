<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{ 



    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Книга в PDF</title>
</head>
<body>
<?php include('includes/header.php');?>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h1 class="text-center">Приятного чтения!!!</h1>
        <p class="text-center"></p>

        <div class="embed-responsive embed-responsive-4by3">
          <iframe class="embed-responsive-item" src="doc8069473_291780366.pdf" allowfullscreen></iframe>
        </div>

        <div class="mt-4">
          <div class="card">
            <div class="card-body">
            </div>
          </div>
          <!-- Добавьте другие отзывы, если необходимо -->
        </div>

      </div>
    </div>
  </div>

  <!-- Подключение скриптов Bootstrap и jQuery (если необходимо) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
<?php } ?>