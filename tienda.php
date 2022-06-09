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
  <link rel="stylesheet" href="assets/css/nftDisplay.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet"> 
</head>
<body>
  <?php include './scripts/mysql.php';?>
  <?php include 'header.php';?>

  <div class="container">
    <?php
      $readNFT = "SELECT * FROM NFT N
                  JOIN coleccion C
                  ON C.id_coleccion=N.id_coleccion
                  WHERE N.cantidad>0";
      $resultado = mysqli_query($mysqlConnection, $readNFT);
      if (!$resultado) {
        echo("No se pudo ejecutar la consulta: " . mysqli_error($mysqlConnection));
        exit;
      }
      $col = 1;
      while ($fila = mysqli_fetch_array($resultado)) {
        if ($col == 1) {
          echo('<div class="row pb">');
        }
        echo('
          <div class="column3">
            <div class="card">
              <div class="card-head">
                <div class="card-product-img">
                  <img src="./assets/images/NFT/' . $fila["ruta"] . '" alt="" href="checkout.php?coleccion='. $fila["id_coleccion"] .'&nft='. $fila["id_nft"] .'&precio='. $fila["precio"] .'">
                </div>
              </div>
              <div class="card-body">
                <a href="checkout.php?coleccion='. $fila["id_coleccion"] .'&nft='. $fila["id_nft"] .'&precio='. $fila["precio"] .'">
                  <h3 class="card-title">'. $fila["nombre_coleccion"] .' #'. $fila["id_nft"] .'</h3>
                </a>
                <div class="wrapper">
                  <div class="card-price">
                    <img src="./assets/images/nftcardDisplay/icon-ethereum.svg" alt="" class="card-icon">
                    <span>'. $fila["precio"] .'</span>
                  </div>
                  <div class="card-author">
                    <p class="card-author-name">Creado por <a href="'. $fila["url"] .'">'. $fila["autor"] .'</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        ');
        if($col == 3) {
          echo("</div>");
          $col = 0;
        }
        $col = $col + 1;
      }
    ?>
  </div>


  <?php include 'footer.php';?>

</body>
</html>