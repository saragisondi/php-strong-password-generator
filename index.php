<?php
  
  
  if (isset($_GET['password'])) {
    var_dump($_GET['password']);
  }
  $password = $_GET['password'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title> PHP Strong Password Generator</title>
</head>
<body>
  
  <div class="container">

  <Header>
    <h2>PASSWORD GENERATOR</h2>
  </Header>

    <div class="row">

      <div class="col-3">
        <form action="index.php" method="GET"> 
          <label for="InputPassword" class="form-label">Password</label>
          <input type="text" name="password" class="form-control" id="InputPassword">
          <p>Lunghezza <?php echo strlen($password) ?> Caratteri</p>
          <div class="col my-3">
            <button type="submit" class="btn btn-success">Invia</button>
          </div>

        </form>
      </div>

    </div>

  </div>

</body>
</html>