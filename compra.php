<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NFT Markeplace</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon\favicon.ico" type="image/x-icon">
  <!-- Estilos -->
  <link rel="stylesheet" href="assets/css/style.css"> 
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/form.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet"> 
</head>
<body>
  <?php include './scripts/mysql.php';?>
  <?php include 'header.php';?>


<?php

    $insert = "INSERT INTO ventas(id_nft, id_coleccion, precio, nombre) VALUES(". $_POST['id_nft'] .", ". $_POST['id_coleccion'].", ". $_POST['precio'] .", '". $_POST['nombre'] ."')";
    $resultado = mysqli_query($mysqlConnection, $insert);
      if (!$resultado) {
        echo("No se pudo ejecutar la consulta: " . mysqli_error($mysqlConnection));
        exit;
      } else {
          echo('
            <div class="container">
              <h1 class="center">Compra realizada con éxito</h1>
            </div>
          ');
      }

      
?>



<?php include 'footer.php';?>
</body>
</html>