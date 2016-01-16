<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CompoTronics</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="..\css\estilos.css">
    <script src="..\js\jquery-1.11.3.min.js"></script>
    <script src="..\js\funciones.js"></script>
  </head>



  <body>
      <header>
        <div class="container">
          <div class="row">
            <div class="col-md-5" id="logo"><img src="..\img\logo4.png" width="30%" height="30%"><h2> CompTronics</h2></div>
            <div class="col-md-5" id="buscador">
              <div id="buscar">
                  <form id="searchform">
                    <input type="text" placeholder="Buscar aquí..." required>
                    <button type="submit">Buscar</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </header>

      <nav>
        <div class="container">
          <div class="row">
            <div class="col-md-5" id="productos">
              <ul>
                <li>Inicio</li>
                <li id="produc">Productos
                  <ul id="desp" style="display: none;">
                    <li>Arduino</li>
                    <li>BeagleBone</li>
                    <li>Raspberry Pi</li>
                    <li>Sensores</li>
                  </ul>
                </li>
            </ul>
          </div>
          <div class="col-md-5" id="cuenta">
            <ul>
              <li>Registrarme</li>
              <li>Mi cuenta</li>
              <li><img src="..\img\carrito.png" width="30%" height="30%">Cesta</li>
          </ul>
        </div>
          </div>
          </div>
        </div>
      </nav>

        <div id="wrapper">
      <section>
        <div class="container">
          <div class="row" id="section">
            <div class="col-md-6" id="arduino"><img src="..\img\arduino.png" width=100% height=100%></div>
            <div class="col-md-6" id="nanode"><img src="..\img\nanode.png" width=100% height=100%></div>
            <div class="col-md-6" id="beagle"><img src="..\img\beaglebone.png" width=100% height=100%></div>
            <div class="col-md-6" id="rasp"><img src="..\img\raspberry.png" width=100% height=100%></div>
          </div>
        <div>
      </section>


      <footer>
        <div class="container">
          <div class="row" id="footer">
            <div class="col-md-2">Inicio</div>
            <div class="col-md-2">Contacto</div>
            <div class="col-md-2">Aviso legal</div>
            <div class="col-md-2">Condiciones</div>
            <div class="col-md-3">Sobre nosotros</div>
          </div>
        <div>
      </footer>
        </div>
      </body>
</html>