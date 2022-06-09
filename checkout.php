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

  <div class="mainscreen">
      <div class="card">
        <div class="leftside">
          <?php
            $id_coleccion = intval($_GET['coleccion']);
            $id_nft = intval($_GET['nft']);
            $precio = intval($_GET['precio']);

            $querySelect = "SELECT * FROM nft WHERE id_nft=$id_nft AND id_coleccion=$id_coleccion";
            $resultado = mysqli_query($mysqlConnection, $querySelect);
            if (!$resultado) {
              echo("No se pudo ejecutar la consulta: " . mysqli_error($mysqlConnection));
              exit;
            }
            $fila = mysqli_fetch_array($resultado);
            
            echo('
              <img src="./assets/images/NFT/' . $fila["ruta"] . '" class="product" alt="Shoes"/>
            ');
          ?>

        </div>
        <div class="rightside">
          <form action="compra.php" method="post">
            <input type="text" name="id_nft" class="disable" value="<?php echo($id_nft); ?>">
            <input type="text" name="id_coleccion" class="disable" value="<?php echo($id_coleccion); ?>">
            <input type="text" name="precio" class="disable" value="<?php echo($precio); ?>">
            <h1>Finalice su compra</h1>
            <h2>Información de pago</h2>
            <p>Nombre del titular</p>
            <input type="text" class="inputbox" name="nombre" required />
            <p>Número de la tarjeta</p>
            <input type="number" class="inputbox" name="numeroTarjeta" id="card_number" required />
            <p>Precio <?php echo($precio); ?> </p>
            <p>Tipo de tarjeta</p>
            <select class="inputbox" name="tipoTarjeta" id="card_type" required>
              <option value="MasterCard">MasterCard</option>
              <option value="Visa">Visa</option>
              <option value="RuPay">American Expressy</option>
            </select>
<div class="expcvv">

            <p class="expcvv_text">Fecha de expiración</p>
            <input type="date" class="inputbox" name="exp_date" id="exp_date" required />

            <p class="expcvv_text2">CVV</p>
            <input type="password" class="inputbox" name="cvv" id="cvv" required />
        </div>
            <p></p>
            <button type="submit" class="button">Pagar</button>
          </form>
        </div>
      </div>
    </div>

  <?php include 'footer.php';?>
</body>
</html>