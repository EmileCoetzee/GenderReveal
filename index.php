<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Baby Coetzee Gender Reveal</title>
    <meta name="title" content="Baby Coetzee Gender Reveal" />
    <meta
      name="description"
      content="Tap on the envelope to reveal the gender"
    />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="https://emileandcourtney.co.za/images/favicon.ico"
    />
    <link
      rel="icon"
      href="https://emileandcourtney.co.za/images/32.png"
      sizes="32x32"
    />
    <link
      rel="icon"
      href="https://emileandcourtney.co.za/images/48.png"
      sizes="48x48"
    />
    <link
      rel="icon"
      href="https://emileandcourtney.co.za/images/96.png"
      sizes="96x96"
    />
    <link
      rel="icon"
      href="https://emileandcourtney.co.za/images/144.png"
      sizes="144x144"
    />

    <meta property="og:title" content="Baby Coetzee Gender Reveal" />
    <meta
      property="og:description"
      content="Tap on the envelope to reveal the gender"
    />
    <meta
      property="og:image"
      content="https://emileandcourtney.co.za/images/144.png"
    />
    <meta property="og:url" content="http://emileandcourtney.co.za/" />

    <link rel="stylesheet" href="bootstrap-5.0.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="background-gradient vh-100 position-relative">
      <div id="overlay" class="overlay">
        <div class="button-container">
          <div class="white">Tap on the envelope to reveal the gender</div>
          <img
            class="envelope"
            src="images/envelope.png"
            alt="envelope"
            onclick="reveal()"
          />
        </div>
      </div>
      <div class="container h-100">
        <div class="row align-items-end h-100">
          <div class="col text-center">
            <div class="background-image position-relative">
              <h1 id="gender" class="white">it's a girl!!!</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>
    <script src="bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="index.js"></script>
  </body>
</html>
