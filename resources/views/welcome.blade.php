<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Danielle's</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="stylesheet" href="testeLB.css">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="css/danicss.css">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>

  <div id="home"></div>
  <div id="navbar">
    <ul>
      <li><button onclick="smoothHome()" href="#home">Home</button></li>
      <li><button onclick="smooth1()" href="#tag1">About</button></li>
      <li><button onclick="smooth2()" href="#tag2">Art</button></li>
      <li><button onclick="smooth3()" href="#tag3">Contact</button></li>
    </ul>
  </div>
  <div>
    <div class="corpoHome">
      <h1>Danielle's</h1>
    </div>
    <h2 id="tag1">About</h2>
    <hr>
    <div class="corpo">
      <div class="container">
        <div class="row about">
          <div class="col l12 m6 s6">
            <p class="pAbout">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in posuere leo. Nulla pretium facilisis consequat. Maecenas sed sapien dolor. Sed hendrerit magna sit amet suscipit bibendum. Vivamus eu eleifend quam. Suspendisse malesuada purus sit amet magna congue, sit amet lacinia lacus dapibus. Donec ac arcu in mauris rhoncus pharetra et nec felis. Nullam sit amet enim eget libero cursus feugiat id ut dui. Etiam quis urna porttitor, tempus nulla in, vestibulum justo. Aenean sed augue vel nunc maximus facilisis non maximus nibh.

Suspendisse tristique lectus dui, id imperdiet ipsum vestibulum quis. Vestibulum dapibus posuere sem sed posuere. Aenean neque nunc, blandit non dictum et, fermentum ut eros. Proin tincidunt turpis a felis ultrices dapibus. Maecenas vitae sapien ut nunc vestibulum tempus vulputate eu leo. Aenean condimentum dui aliquam, imperdiet massa a, molestie nisl. Curabitur non orci at augue luctus venenatis. Proin ac commodo augue, sed pretium ligula. Donec finibus mauris in orci molestie mollis. Nullam nec lacus ornare, faucibus justo molestie, lacinia erat. Integer massa lorem, commodo quis convallis sit amet, dapibus et leo. Quisque gravida iaculis tincidunt. Duis aliquam et neque a ullamcorper. Vestibulum justo enim, volutpat eu placerat venenatis, molestie ut nunc.</p>
          </div>
        </div>
      </div>
    </div>
    <h2 id="tag2">Art</h2>
    <hr>
    <div class="corpo">
      <div class="container">
        <div class="row contact">
          <div class="col l6 m4 s4">
            <a class="example-image-link" href="/art" data-lightbox="example-1"><img class="example-image" src="img/sketching-startup.jpg" alt="image-1" /><br>Pen & Paper</a>
          </div>
          <div class="col l6 m4 s4">
            <a class="example-image-link" href="/art" data-lightbox="example-1"><img class="example-image" src="img/photo_icon.jpg" alt="image-1" /><br>Photography</a>
          </div>
        </div>
      </div>
    </div>
    </div>
    <h2 id="tag3">Contact</h2>
    <hr>
    <div id="tag4" class="corpo">
      <div class="container">
        <div class="row contact">
          <div class="col l6 m8 s6">
            <p>Você pode me encontrar em várias redes socias: </p>
            <a href=""><img class="iconsContact" src="img/facebook.svg"></img></a><br>
            <a href=""><img class="iconsContact" src="img/instagram.svg"></img></a><br>
            <a href=""><img class="iconsContact" src="img/pinterest.svg"></img></a><br>
            <a href=""><img class="iconsContact" src="img/twitter.svg"></img></a><br>
          </div>
          <div class="col l6 m8 s6">
            <p>Ou você pode falar comigo por aqui mesmo!<br>É só clicar </p><br>
            <a href="contato"> <button>aqui!</button> </a>
          </div>
        </div>
        </div>
    </div>
  </div>

  <script>
    function smoothHome() {
      var elmnt = document.getElementById("home");
      elmnt.scrollIntoView({behavior:'smooth'});
    }
    function smooth1() {
      var elmnt = document.getElementById("tag1");
      elmnt.scrollIntoView({behavior:'smooth'});
    }
    function smooth2() {
      var elmnt = document.getElementById("tag2");
      elmnt.scrollIntoView({behavior:'smooth'});
    }
    function smooth3() {
      var elmnt = document.getElementById("tag3");
      elmnt.scrollIntoView({behavior:'smooth'});
    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
</body>


</html>
