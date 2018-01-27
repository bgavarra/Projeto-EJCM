<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Danielle's Art</title>

    <link rel="stylesheet" href="css/testeLB.css">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/danicss.css">

    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  </head>
  <body>
    <div id="home"></div>
    <div id="navbar">
      <ul>
        <li><a href="/"><button href="/">Home</button></a></li>
        <li><button  onclick="smooth1()" href="#tag1"><span class"PeP">Pen & Paper</span></button></li>
        <li><button onclick="smooth2()" href="#tag2">Photography</button></li>
        <li><a href="/contato"><button>Contact</button></a></li>
      </ul>
    </div>

    <h2 id="tag1">Pen & Paper</h2>
    <hr>
      <div class="galeria">
        <a class="example-image-link" href="img/bailarina3.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="img/bailarina3.jpg" alt=""/></a>
        <a class="example-image-link" href="img/alien.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="img/alien.jpg" alt=""/></a>
        <a class="example-image-link" href="img/gato2.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="img/gato2.jpg" alt=""/></a>
        <a class="example-image-link" href="img/meninaDesenho.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="img/meninaDesenho.jpg" alt=""/></a>
        <a class="example-image-link" href="img/pastel.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="img/pastel.jpg" alt=""/></a>
        <a class="example-image-link" href="img/Red-Hulk.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="img/Red-Hulk.jpg" alt=""/></a>
        <a class="example-image-link" href="img/meninaDeitada.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="img/meninaDeitada.jpg" alt=""/></a>
        <a class="example-image-link" href="img/valk.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="img/valk.jpg" alt=""/></a>
        <a class="example-image-link" href="img/StarWars.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="img/StarWars.jpg" alt=""/></a>
      </div>
    <h2 id="tag2">Photography</h2>
    <hr>
      <div class="galeria">
        <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-3.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-3.jpg" alt=""/></a>
        <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-4.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-4.jpg" alt="" /></a>
        <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-5.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-5.jpg" alt="" /></a>
        <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-6.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-6.jpg" alt="" /></a>
      </div>

    <script>
      function smooth1() {
        var elmnt = document.getElementById("tag1");
        elmnt.scrollIntoView({behavior:'smooth'});
      }
      function smooth2() {
        var elmnt = document.getElementById("tag2");
        elmnt.scrollIntoView({behavior:'smooth'});
      }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>

  </body>
</html>
