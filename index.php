<html lang="pr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tv ao vivo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-four-fifths">
          <h1 class="title">
           Câmera
          </h1>
          <video autoplay id="video"></video>
          <button class="button is-hidden" id="btnPlay">
            <span class="icon is-small">
              <i class="fas fa-play"></i>
            </span>
          </button>
          <button class="button" id="btnPause">
            <span class="icon is-small">
              <i class="fas fa-pause"></i>
            </span>
          </button>
          <button class="button is-success" id="btnScreenshot">
            <span class="icon is-small">
              <i class="fas fa-camera"></i>
            </span>
          </button>
          <button class="button" id="btnChangeCamera">
            <span class="icon">
              <i class="fas fa-sync-alt"></i>
            </span>
            <span>Troca de câmera</span>
          </button>
        </div>
        <div class="column">
          <h2 class="title">Captura de tela</h2>
          <div id="screenshots"></div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        welson Matheus de Macedo
      </p>
    </div>
  </footer>

  <canvas class="is-hidden" id="canvas"></canvas>
  <script src="https://doug2k1.github.io/javascript-camera/script.js"></script>
</body>

</html>