<?php require_once __DIR__ . '/partials/functions.php' ?>
<?php
  
  $passwordLenght = 0;

  
  if(isset($_GET['passwordLenght']) ){
    $passwordLenght = $_GET['passwordLenght'];
    $password = generator_psw($passwordLenght);
  }else if(isset($_GET['passwordLenght'])){
    var_dump('errore');
  }

?>


<!-- head -->
<?php require_once __DIR__ . '/partials/head.php' ?>

<body>
  
  <div class="container">

    <!-- header -->
    <?php require_once __DIR__ . '/partials/header.php'?>

    <div class="row">

      <div class="col-3">
        <form action="index.php" method="GET"> 
          <label for="InputPassword" class="form-label">Password</label>
          <input type="number" name="passwordLenght" class="form-control" id="InputPassword">
          <p>La password generata è <?php echo $password ?> </p>
          <div class="col my-3">
            <button type="submit" class="btn btn-success">Invia</button>
          </div>

        </form>
      </div>

    </div>

    <!-- footer -->
    <?php require_once __DIR__ . '/partials/footer.php' ?>
  </div>


</body>
</html>