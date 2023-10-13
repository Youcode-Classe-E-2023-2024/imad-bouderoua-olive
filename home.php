<?php 
 session_start();

if (isset($_SESSION['email']) && $_SESSION['email'] !== null) {
    echo "dkhl";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="index.css" />
    </head>
    <body>
    <div style="display:none;" class="infosu">
        <div class="userin">
        <h1>WELCOME : <br> <?=$_SESSION['email']?></h1>
        <form method="post">
                <button type="submit" name="disconnect">Disconnect</button>
        </form></div>
  </div>
    </body>
    </html>
    <?php
} else {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="index.css" />
    </head>
    <body>
    <div style="display:none;  flex-wrap:wrap; align-items:center;justify-content:center;" class="infosu">
            <div class="infocont">
            <h1>WELKOME sir you can register here</h1>
            <button id="register" onclick="window.location.href='register.php';">Register</button>
  </div>    </div>
    </body>
    </html>
    <?php
}
if(isset($_POST['disconnect'])){
  unset($_SESSION['email']);
  header('Location: home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="index.css" />
</head>
<body>
<ion-icon class="buy" name="card-outline"></ion-icon>

    <img class="logo" src="images/Capture_d_écran_2023-10-10_110832-removebg-preview.png" alt="">
  
  <div onmouseover="hidetitle(this)" onmouseout="showtitle(this)" class="navbar">
  <a class="nicons" href=""><svg onmouseover="iconover(this)" onmouseout="iconout(this)"  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#166a24}</style><path d="M480 0c-17.7 0-32 14.3-32 32V192 512h64V192H624c8.8 0 16-7.2 16-16V48c0-8.8-7.2-16-16-16H512c0-17.7-14.3-32-32-32zM416 159L276.8 39.7c-12-10.3-29.7-10.3-41.7 0l-224 192C1 240.4-2.7 254.5 2 267.1S18.6 288 32 288H64V480c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32V384c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v96c0 17.7 14.3 32 32 32h64.7l.2 0h-1V159z"/></svg></a>
    <a class="nicons" href="index.php"><svg onmouseover="iconover(this)" onmouseout="iconout(this)" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M160 96a96 96 0 1 1 192 0A96 96 0 1 1 160 96zm80 152V512l-48.4-24.2c-20.9-10.4-43.5-17-66.8-19.3l-96-9.6C12.5 457.2 0 443.5 0 427V224c0-17.7 14.3-32 32-32H62.3c63.6 0 125.6 19.6 177.7 56zm32 264V248c52.1-36.4 114.1-56 177.7-56H480c17.7 0 32 14.3 32 32V427c0 16.4-12.5 30.2-28.8 31.8l-96 9.6c-23.2 2.3-45.9 8.9-66.8 19.3L272 512z"/></svg></a>
    <a class="nicons" href="infos.php"><svg onmouseover="iconover(this)" onmouseout="iconout(this)" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg></a>
    <a class="nicons" href="outils.php"><svg onmouseover="iconover(this)" onmouseout="iconout(this)" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg></a>
  </div>

  <h1 class="hometitle color-changing">WELCOME</h1>
  <div class="treediv"></div>
    <img class="treeimg" src="images/pngtree-olive-tree-image-png-image_3418171-removebg-preview.png" alt="">
  <img class="shape1" src="images/Shape.png" alt="">
  <img class="shape2" src="images/Shape.png" alt="">

  <img style="position: absolute; left: 9%; top: 18%; width: 35%;" src="images/Title.png" alt="">
  
 <div class="animationcont"> <h2 class="animationmcont zitzitoun">Ziiit Zitoon wad sous</h2>
 </div>
    <footer class="footer">
    <ion-icon name="call-outline"></ion-icon>
    <ion-icon name="logo-facebook"></ion-icon>
    <ion-icon name="logo-twitter"></ion-icon>
    <ion-icon name="logo-instagram"></ion-icon>
    <ion-icon name="logo-linkedin"></ion-icon>
  </footer>
</body>
</html>

<script src="index.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
    document.querySelector('.buy').addEventListener("click", function () {
  console.log('dkhel');
  var infosu = document.querySelector('.infosu');
  
  if (infosu.style.display === "none") {
    infosu.style.display = "block";
  } else {
    infosu.style.display = "none";
  }
});
</script>