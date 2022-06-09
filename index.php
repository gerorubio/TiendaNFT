<!DOCTYPE html>
<html lang="es">
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
  <link rel="stylesheet" href="assets/css/carrusel.css">
  <link rel="stylesheet" href="assets/css/hero.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet"> 
</head>

<body>
  <?php include 'header.php';?>

  <div class='hero'>
    <div class="hero-one"></div>
    <div class="hero-two"></div>
    <h1 class="header-title"><span class="header-primary">Nebula Art</span><span class="header-sub">La nueva historia digital</span></h1>
  </div>

  <div class="container">
    <h1>¿Qué es un NFT?</h1>
    <p class="info-text">Las <a class="bold orange" >NFT (Non-Fungible Token)</a> son artículos digitales únicos con propiedad gestionada por la cadena de bloques (blockchain). La idea de <a class="bold orange">fungibilidad</a>; se trata simplemente de la capacidad de un bien o artículo para ser intercambiado con otros bienes o artículos individuales del mismo tipo. Si algo no es fungible, significa que no puede ser sustituido. Representa algo de valor único - ¡y eso es lo que es un <a class="bold orange">NFT!</a></p>

    <p class="info-text">La parte de token del Token No Fungible se refiere a un certificado digital almacenado en una base de datos distribuida verificable públicamente, también conocida como blockchain.</p>

    <p class="info-text">La información de este certificado digital, también conocido como contrato inteligente, hace que cada NFT sea único. No se pueden intercambiar dos NFT, lo que hace que no sean fungibles. Entre los ejemplos de NFT se encuentran el arte digital, los objetos de colección, los artículos de realidad virtual, los nombres de dominio criptográficos, los registros de propiedad de artículos físicos, ¡y mucho más!</p>
  </div>

  <div class="container">
    <h1>Explora</h1>
    <p class="info-text">Descubre los mejores proyectos NFT en el mercado en <a class="orange">N</a>ebula <a class="orange">A</a>rt <a class="orange">FT</a></p>
    <div id="wrapper">
        <div id="carousel">
          <div id="content">
            <img
              class="item"
              src="./assets/images/NFT/boredape7698.png"
            />
            <img
              src="./assets/images/NFT/galaxyeggs01.jpg"
              class="item"
            />
            <img
              src="./assets/images/NFT/galaxyeggs04.jpg"
              class="item"
            />
            <img
              src="./assets/images/NFT/cryptopunk7804.png"
              class="item"
            />
            <img
              src="./assets/images/NFT/magicgirl01.gif"
              class="item"
            />
            <img
              src="./assets/images/NFT/galaxyeggs02.jpg"
              class="item"
            />
            <img
              src="./assets/images/NFT/boredape4580.png"
              class="item"
            />
            <img
              src="./assets/images/NFT/wickedcranium6005.png"
              class="item"
            />
            <img
              src="./assets/images/NFT/ringers109.png"
              class="item"
            />
            <img
              src="./assets/images/NFT/wickedcraniums6171.png"
              class="item"
            />
          </div>
        </div>
        <button id="prev">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="32"
            height="32"
            viewBox="0 0 24 24"
          >
            <path fill="none" d="M0 0h24v24H0V0z" />
            <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
          </svg>
        </button>
        <button id="next">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="32"
            height="32"
            viewBox="0 0 24 24"
          >
            <path fill="none" d="M0 0h24v24H0V0z" />
            <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
          </svg>
        </button>
      </div>
  </div>
  

  

  <?php include 'footer.php';?>
  <script src="./scripts/carousel.js"></script>
</body>

</html>