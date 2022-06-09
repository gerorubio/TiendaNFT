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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css"> 
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet"> 
</head>
<body>
  <?php include './scripts/mysql.php';?>
  <?php include 'header.php';?>

  <div class="container ventas">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">COMPRADOR</th>
        <th scope="col">ID NFT</th>
        <th scope="col">NOMBRE COLECCION</th>
        <th scope="col">PRECIO</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // $readVentas = "SELECT * FROM VENTAS JOIN NFTS ON VENTAS.nft_id=NFTS.id_nft";
        $readVentas = "SELECT C.nombre_coleccion, N.precio, N.id_nft, V.precio, V.nombre FROM NFT N
                  JOIN coleccion C
                  ON C.id_coleccion=N.id_coleccion JOIN ventas V  ON V.id_nft=N.id_nft";
        $resultado = mysqli_query($mysqlConnection, $readVentas);
        if (!$resultado) {
            echo("No se pudo ejecutar la consulta: " . mysqli_error($mysqlConnection));
            exit;
        }
        while ($fila = mysqli_fetch_array($resultado)) {
            echo('
            <tr>
            <td>'. $fila["nombre"] .'</td>
            <td>'. $fila["id_nft"] .'</td>
            <td>'. $fila["nombre_coleccion"] .'</td>
            <td>'. $fila["precio"] .'</td>
            </tr>
            ');
        }
        ?>
        </tbody>
        </table>
  </div>

  
  

  <?php include 'footer.php';?>

</body>
</html>