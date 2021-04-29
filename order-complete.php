<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title id="TitleMain">Checkout completo
  </title>
  <meta name="description" content="Checkout">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body class="blue lighten-5">

  <!-- Main Container -->
  <div id="main" class="main">
    <!-- Page Terminos de uso Contents -->
    <div id="Checkout" class="page blue lighten-5">
      <!-- Product Title -->
      <div class="center-align p-20">
        <h4>TRANSACCION COMPLETADA CORRECTAMENTE</h4>
      </div>
      <br>
      <div class="col s12 m7">
        <h2 class="header">Horizontal Card</h2>
        <div class="card horizontal">
          <div class="card-stacked">
            <div class="card-content">
              <p>Parámetros recibidos en Query String</p>
              <ul class="collection">
                <li class="collection-item">Payment method: <?php echo $_GET['payment_type']; ?></li>
                <li class="collection-item">Referencia: <?php echo $_GET['external_reference']; ?></li>
                <li class="collection-item">Collection id: <?php echo $_GET['collection_id']; ?></li>
              </ul>
            </div>
            <div class="card-action">
              <a href="https://infotronico.com/certifmp/">Volver</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Page Términos de uso Contents -->

  </div>
  <!-- End of Page Contacto Contents -->

  </div>
  <!-- End of Main Container -->
</body>

</html>