<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Ejemplo de Tour</title>
		<link rel="stylesheet" type="text/css" href=" bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" type="text/css" href="res/hopscotch/hopscotch-0.1.2.min.css" />
    <script src="res/hopscotch/hopscotch-0.1.2.min.js"></script>

	</head>
<body>
<div class='container'>
<br>  <div class='row'>
    <div class='span6'>
      <h2 id='wellcome'>Tour de Redes Sociales</h2>
      <br><p>Tour de redes sociales usando el plugin Hopscotch.</p>
<br>      <a href='http://neowelder.com' class='btn  btn-inverse pull-right' id='neowelder'>Ir a NeoWelder</a>
    </div>
    <div class='span6'>
    <div class='hero-unit' style='background:#333;'>      
    <center>
    <img src='logos/github.png' style='width:200px;'><br>
    <a href='https://github.com/evilnapsis/tour-example/archive/master.zip' class='btn btn-primary btn-large' id='download'>Descargar Ejemplo</a>
    </center>
    </div>
    </div>
  </div>
  <div class='row'>
  <div class='hero-unit'>
    <div class='row'>
      <div class='span8'>
        <h2>Google+</h2>
      </div>
      <div class='span3'><img src='logos/google+.png'  id='google'> </div>
    </div>
  </div>
  </div>
  <div class='row'>
  <div class='hero-unit'>
    <div class='row'>
      <div class='span3'><img src='logos/facebook.png'  id='facebook'> </div>
      <div class='span8'>
        <h2>Facebook</h2>
      </div>
    </div>
  </div>
  </div>
  <div class='row'>
  <div class='hero-unit'>
    <div class='row'>
      <div class='span8'>
        <h2>Twitter</h2>
      </div>
      <div class='span3'><img src='logos/twitter.png'  id='twitter'> </div>
    </div>
  </div>
  </div>
  <div class='row'>
  <div class='hero-unit'>
    <div class='row'>
      <div class='span3'><img src='logos/youtube.png'  id='youtube'> </div>
      <div class='span8'>
        <h2>Youtube</h2>
      </div>
    </div>
  </div>
  </div>

  <div class='row'>
  <div class='hero-unit'>
    <div class='row'>
      <div class='span8'>
        <h2>Instagram</h2>
      </div>
      <div class='span3'><img src='logos/instagram.png'  id='instagram'> </div>
    </div>
  </div>
  </div>
  <div class='row'>
  <div class='hero-unit'>
    <div class='row'>
      <div class='span3'><img src='logos/foursquare.png'  id='foursquare'> </div>
      <div class='span8'>
        <h2>Foursquare</h2>
      </div>
    </div>
  </div>
  </div>

</div>
<script>
   // Define the tour!
  var tour = {
    id: "hello-hopscotch",
    steps: [
      {
        title: "Bienvenido al Tour",
        content: "Este Tour preparado por <b>NeoWelder Lab</b> con propositos educacionales.",
        target: "wellcome",
        placement: "bottom",
        showPrevButton: true
      },
      {
        title: "Google+",
        content: "Red social de Google",
        target: "google",
        placement: "left",
        showPrevButton: true
      },
      {
        title: "Facebook",
        content: "La supuesta red social mas grande",
        target: "facebook",
        placement: "right",
        showPrevButton: true
      },
      {
        title: "Twitter",
        content: "Red social de 150 caracteres",
        target: "twitter",
        placement: "left",
        showPrevButton: true
      },
      {
        title: "Youtube",
        content: "Red social de videos",
        target: "youtube",
        placement: "right",
        showPrevButton: true
      },
      {
        title: "Instagram",
        content: "Red social de imagenes",
        target: "instagram",
        placement: "bottom",
        showPrevButton: true
      },
      {
        title: "Foursquare",
        content: "Red social de lugares",
        target: "foursquare",
        placement: "top",
        showPrevButton: true
      },
      {
        title: "Descarga",
        content: "Click en el boton para descargar este ejemplo.",
        target: "download",
        placement: "bottom",
        showPrevButton: true
      },
      {
        title: "Visitanos",
        content: "Visita nuestra pagina y aprende mucho mas ...",
        target: "neowelder",
        placement: "right",
        showPrevButton: true
      }

    ]
  };

  // Start the tour!
  hopscotch.startTour(tour);
</script>

</div>

<br><br><br><br>


    <script src="jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
<script>
  $('.tip').tooltip();
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43381724-1', 'evilnapsis.tk');
  ga('send', 'pageview');

</script>
</body>
</html>