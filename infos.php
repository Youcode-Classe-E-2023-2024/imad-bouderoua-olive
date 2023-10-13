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
  <div class="navbar">
    <a class="nicons" href="home.php"><svg onmouseover="iconover(this)" onmouseout="iconout(this)"  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#166a24}</style><path d="M480 0c-17.7 0-32 14.3-32 32V192 512h64V192H624c8.8 0 16-7.2 16-16V48c0-8.8-7.2-16-16-16H512c0-17.7-14.3-32-32-32zM416 159L276.8 39.7c-12-10.3-29.7-10.3-41.7 0l-224 192C1 240.4-2.7 254.5 2 267.1S18.6 288 32 288H64V480c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32V384c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v96c0 17.7 14.3 32 32 32h64.7l.2 0h-1V159z"/></svg></a>
    <a class="nicons" href="index.php"><svg onmouseover="iconover(this)" onmouseout="iconout(this)" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M160 96a96 96 0 1 1 192 0A96 96 0 1 1 160 96zm80 152V512l-48.4-24.2c-20.9-10.4-43.5-17-66.8-19.3l-96-9.6C12.5 457.2 0 443.5 0 427V224c0-17.7 14.3-32 32-32H62.3c63.6 0 125.6 19.6 177.7 56zm32 264V248c52.1-36.4 114.1-56 177.7-56H480c17.7 0 32 14.3 32 32V427c0 16.4-12.5 30.2-28.8 31.8l-96 9.6c-23.2 2.3-45.9 8.9-66.8 19.3L272 512z"/></svg></a>
    <a class="nicons" href=""><svg onmouseover="iconover(this)" onmouseout="iconout(this)" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg></a>
    <a class="nicons" href="outils.php"><svg onmouseover="iconover(this)" onmouseout="iconout(this)" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg></a>
  </div>

  <div class="textholder"><h2>L’OLIVE fruit de l olivier</h2><div class="entry-content single-content">
    On dénombre plus d’une centaine de variétés d’olives , mais en France on n’en cultive guère qu’une quinzaine (rationalisation, coûts).<br><br>
    Le choix de la variété dépendra de la destination finale du fruit, olives de table ou huile d’olive ou les deux.<br><br>
    Récoltées avec un soin tout particulier, les olives destinées à la table sont contrairement à celles destinées à l’huile pratiquement récoltées une à une.<br>
    L’appellation olive de table (AOC olives de Nice) implique une certaine grosseur du fruit. Outre le calibre qui se mesure au nombre d’olive aux 100 grammes il y a le contenu en sucre, en huile et la consistance de la pulpe.<br><br>
    Les olives de table :<br>
    L’Aglandaou (Verdale de Carpentras)<br>
    L’Aglandau<br><br>
    Elle est cultivée dans les Alpes-de-Hautes-Provence (04), les Bouches-du-Rhône (13) , dans le Vaucluse (84) et dans le Var. Très bonne résistance au froid. Pollinisateur, Cayon et Picholine.<br><br>
    La Picholine<br>
    Picholine du Gard<br><br>
    C’est la variété la plus répandue en France, on la trouve dans tout le sud. On la récolte en vert aussi bien en olive de table que pour en faire de l’huile. Résistance au froid moyen. Rendement huile moyen.<br><br>
    La Lucques<br>
    La Lucques<br><br>
    Elle est originaire de France et se cultive dans l’Hérault. Elle est récoltée en vert et surtout utilisée pour la conserve.<br><br>
    La Grossanne<br>
    La Grossanne<br><br>
    Elle est localisée dans la vallée des Baux-de-Provence, elle est rustique et résiste au froid. Elle bénéficie de l’A.O.C.<br><br>
    La Tanche<br>
    Elle est très recherchée, elle est très généreuse en huile et utilisée en confiserie. Elle a bénéficié de la première A.O.C. en 1995. On la trouve surtout dans le sud de la Drôme (26) dans les vallées de l’Ouvèze autour de Buis-les-Baronnies et de l’Eygues autour de Nyons, ainsi que dans quelques oliveraies dans le Nord du Vaucluse (Olive noire de Nyons).<br><br>
    Le Caillette (cailletier)<br>
    Elle est typique des Alpes-Maritimes (06). On la récolte en noire, c’est  » l’olive noire de Nice « . A.O.C. 2001 Décret du 20 avril 2001 relatif à l’appellation d’origine contrôlée « Olive de Nice » J.O. du 27/04/2001.<br><br>
    La Salonenque<br>
    La salonnenque<br><br>
    Elle est originaire de Salon-de-Provence, on ne la trouve que dans les Bouches-du-Rhône (13). Elle est principalement destinée à la préparation des olives cassées mais aussi pour produire de l’huile.<br><br>
    Les olives à huile :<br>
    La bouteillan<br>
    La Bouteillan est surtout cultivée dans le Var, elle a une bonne résistance au froid, un bon rendement en huile, ses pollinisateurs sont : Cayon, Grossanne et Verdale de l’Herault.<br>
    La Négrette et le Vermillon sont cultivées dans le Var (83).<br>
    L’Olivière est cultivée dans l’Aude (11), l’Hérault (34), elle a une forte résistance au froid.<br>
    L’Amillau, La Corniale, La Redonale et La Verdale sont cultivées dans l’Hérault (34).<br>
    Le Poumal ou la Ouanne sont cultivées dans les Pyrénées-Orientales (66).<br>
    Tableau détaillé de certaines des variétés ici<br><br>
    Les Olives vertes sont moins grasses !<br>
    Un article paru dans « La Provence » au mois de septembre (03) affirme que les olives vertes sont deux fois moins grasses que les olives noires. En effet, les olives vertes sont cueillies avant maturité elles sont donc deux fois moins caloriques que les noires. 118 kcal / 100 g pour les vertes contre 293 Kcal / 100 g pour les noires.
</div>
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