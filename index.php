<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <title>O psima</title>
    <style>
        .carousel-item {
  height: 65vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
            .container-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px; 
            width: 80%;
            margin: 20px auto; 
 
        }
        .container1 {
            border: 6px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 300px;
            margin: 0 auto;
            text-align: center;
            box-shadow: goldenrod
        }
        .data {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
        }
        .slika{
            max-width:200px;
        }
.pastel-green-bg, .pastel-green-footer {
    background-color: #77dd77; 
    color: white;
}

body {
    font-family: Arial, sans-serif;
}


footer {
    color: white;
}
h1 {
    font-weight: bold;
    text-align: center;
    margin: 20px;}
    nav{
        font-weight: bold;
    }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top pastel-green-bg">
  <div class="container">
    <a class="navbar-brand text-light" href="#">Pseći forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link text-light" href="pocetna.html">Početna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php">O psima</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="onama.html">O nama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="kontakt.html">Kontakt</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
<header>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url('https://www.pbs.org/wgbh/nova/media/images/Dog_Nose_hero.width-1500.jpg')">
      <div class="carousel-caption">
        <h3>Jeste li znali?</h5>
        <h4>Pseći nosići su mokri kako bi lakše apsorbirali mirisne kemikalije.</p>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('https://as2.ftcdn.net/v2/jpg/05/51/01/01/1000_F_551010178_2STORK4yL4rQmBA1ZsTeZqsM2jMgdfXe.jpg')">
      <div class="carousel-caption">
        <h3>Kakvo je krzno kod naših ljubimaca pasa?</h5>
        <h4>Većina pasa koji se linjanju imaju dvostruko krzno koje se sastoji od pokrovne dlake i poddlake.</p>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('https://cdn.britannica.com/49/233849-050-2ECC4F03/Yorkshire-terrier-dog-running.jpg')">
      <div class="carousel-caption">
        <h3>Koje su pasmine pasa idealne za stan?</h5>
        <h4>Neke od simpatičnih, malih pasmina koje se ne linjaju su bišon, maltezer, havanezer, patuljasti šnaucer, jorkširski terijer, mali ili toy pudl, zapadnoškotski bijeli terijer i shih-tzu.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</header>

<h1>PODACI O PSIMA</h1>

<div>
    <div class="container-grid">
    <div class="container1">
    <img class="slika" src="border collie.jpeg" alt="Border Collie">
        <?php

        $xml = simplexml_load_file('psi.xml')?>
       <?php
        foreach ($xml->pas as $pas) {
            if ($pas->pasmina == "Border Collie") {
               
                $pasmina = $pas->pasmina;
                $tezina = $pas->tezina;
                $visina = $pas->visina;
                $zivotni_vijek = $pas->zivotni_vijek;
                
                echo '<div class="data">';
                echo '<span class="label">Pasmina:</span> ' . $pasmina . '<br>';
                echo '<span class="label">Težina:</span> ' . $tezina . '<br>';
                echo '<span class="label">Visina:</span> ' . $visina . '<br>';
                echo '<span class="label">Životni vijek:</span> ' . $zivotni_vijek . '<br>';
                echo '</div>';
            }
        }
        ?>
    </div>
    <div class="container1">
    <img class="slika" src="doberman.jpg" alt="Doberman">
        <?php

        $xml = simplexml_load_file('psi.xml')?>
       <?php
        foreach ($xml->pas as $pas) {
            if ($pas->pasmina == "Doberman") {
                // Izdvajanje podataka
                $pasmina = $pas->pasmina;
                $tezina = $pas->tezina;
                $visina = $pas->visina;
                $zivotni_vijek = $pas->zivotni_vijek;
                
                echo '<div class="data">';
                echo '<span class="label">Pasmina:</span> ' . $pasmina . '<br>';
                echo '<span class="label">Težina:</span> ' . $tezina . '<br>';
                echo '<span class="label">Visina:</span> ' . $visina . '<br>';
                echo '<span class="label">Životni vijek:</span> ' . $zivotni_vijek . '<br>';
                echo '</div>';
            }
        }
        ?>
    </div>
    <div class="container1">
    <img class="slika" src="jack russell.jpg" alt="Jack Russell">
        <?php

        $xml = simplexml_load_file('psi.xml')?>
       <?php
        foreach ($xml->pas as $pas) {
            if ($pas->pasmina == "Jack Russell terijer") {
                // Izdvajanje podataka
                $pasmina = $pas->pasmina;
                $tezina = $pas->tezina;
                $visina = $pas->visina;
                $zivotni_vijek = $pas->zivotni_vijek;
                
                echo '<div class="data">';
                echo '<span class="label">Pasmina:</span> ' . $pasmina . '<br>';
                echo '<span class="label">Težina:</span> ' . $tezina . '<br>';
                echo '<span class="label">Visina:</span> ' . $visina . '<br>';
                echo '<span class="label">Životni vijek:</span> ' . $zivotni_vijek . '<br>';
                echo '</div>';
            }
        }
        ?>
    </div>
    <div class="container1">
    <img class="slika" src="jazavčar.jpg" alt="Jazavčar">
        <?php

        $xml = simplexml_load_file('psi.xml')?>
       <?php
        foreach ($xml->pas as $pas) {
            if ($pas->pasmina == "Jazavčar") {
                // Izdvajanje podataka
                $pasmina = $pas->pasmina;
                $tezina = $pas->tezina;
                $visina = $pas->visina;
                $zivotni_vijek = $pas->zivotni_vijek;
                
                echo '<div class="data">';
                echo '<span class="label">Pasmina:</span> ' . $pasmina . '<br>';
                echo '<span class="label">Težina:</span> ' . $tezina . '<br>';
                echo '<span class="label">Visina:</span> ' . $visina . '<br>';
                echo '<span class="label">Životni vijek:</span> ' . $zivotni_vijek . '<br>';
                echo '</div>';
            }
        }
        ?>
    </div>
    <div class="container1">
    <img class="slika" src="labrador retriver.jpg" alt="Labrador">
        <?php

        $xml = simplexml_load_file('psi.xml')?>
       <?php
        foreach ($xml->pas as $pas) {
            if ($pas->pasmina == "Labrador retriver") {
                // Izdvajanje podataka
                $pasmina = $pas->pasmina;
                $tezina = $pas->tezina;
                $visina = $pas->visina;
                $zivotni_vijek = $pas->zivotni_vijek;
                
                echo '<div class="data">';
                echo '<span class="label">Pasmina:</span> ' . $pasmina . '<br>';
                echo '<span class="label">Težina:</span> ' . $tezina . '<br>';
                echo '<span class="label">Visina:</span> ' . $visina . '<br>';
                echo '<span class="label">Životni vijek:</span> ' . $zivotni_vijek . '<br>';
                echo '</div>';
            }
        }
        ?>
    </div>
    <div class="container1">
    <img class="slika" src="mađarska vižla.jpg" alt="Mađarska vižla">
        <?php

        $xml = simplexml_load_file('psi.xml')?>
       <?php
        foreach ($xml->pas as $pas) {
            if ($pas->pasmina == "Mađarska vižla") {
                // Izdvajanje podataka
                $pasmina = $pas->pasmina;
                $tezina = $pas->tezina;
                $visina = $pas->visina;
                $zivotni_vijek = $pas->zivotni_vijek;
                
                echo '<div class="data">';
                echo '<span class="label">Pasmina:</span> ' . $pasmina . '<br>';
                echo '<span class="label">Težina:</span> ' . $tezina . '<br>';
                echo '<span class="label">Visina:</span> ' . $visina . '<br>';
                echo '<span class="label">Životni vijek:</span> ' . $zivotni_vijek . '<br>';
                echo '</div>';
            }
        }
        ?>
    </div>
    <div class="container1">
    <img class="slika" src="mops.jpg" alt="Mops">
        <?php

        $xml = simplexml_load_file('psi.xml')?>
       <?php
        foreach ($xml->pas as $pas) {
            if ($pas->pasmina == "Mops") {
                // Izdvajanje podataka
                $pasmina = $pas->pasmina;
                $tezina = $pas->tezina;
                $visina = $pas->visina;
                $zivotni_vijek = $pas->zivotni_vijek;
                
                echo '<div class="data">';
                echo '<span class="label">Pasmina:</span> ' . $pasmina . '<br>';
                echo '<span class="label">Težina:</span> ' . $tezina . '<br>';
                echo '<span class="label">Visina:</span> ' . $visina . '<br>';
                echo '<span class="label">Životni vijek:</span> ' . $zivotni_vijek . '<br>';
                echo '</div>';
            }
        }
        ?>
    </div>
    <div class="container1">
    <img class="slika" src="njemački ovčar.jpg" alt="Njemački ovčar">
        <?php

        $xml = simplexml_load_file('psi.xml')?>
       <?php
        foreach ($xml->pas as $pas) {
            if ($pas->pasmina == "Njemački ovčar") {
                // Izdvajanje podataka
                $pasmina = $pas->pasmina;
                $tezina = $pas->tezina;
                $visina = $pas->visina;
                $zivotni_vijek = $pas->zivotni_vijek;
                
                echo '<div class="data">';
                echo '<span class="label">Pasmina:</span> ' . $pasmina . '<br>';
                echo '<span class="label">Težina:</span> ' . $tezina . '<br>';
                echo '<span class="label">Visina:</span> ' . $visina . '<br>';
                echo '<span class="label">Životni vijek:</span> ' . $zivotni_vijek . '<br>';
                echo '</div>';
            }
        }
        ?>
    </div>
    <div class="container1">
    <img class="slika" src="pekinezer.jpg" alt="Pekinezer">
        <?php

        $xml = simplexml_load_file('psi.xml')?>
       <?php
        foreach ($xml->pas as $pas) {
            if ($pas->pasmina == "Pekinezer") {
                // Izdvajanje podataka
                $pasmina = $pas->pasmina;
                $tezina = $pas->tezina;
                $visina = $pas->visina;
                $zivotni_vijek = $pas->zivotni_vijek;

                
                echo '<div class="data">';
                echo '<span class="label">Pasmina:</span> ' . $pasmina . '<br>';
                echo '<span class="label">Težina:</span> ' . $tezina . '<br>';
                echo '<span class="label">Visina:</span> ' . $visina . '<br>';
                echo '<span class="label">Životni vijek:</span> ' . $zivotni_vijek . '<br>';
                echo '</div>';
            }
        }
        ?>
    </div>
    <div class="container1">
    <img class="slika" src="pinč.jpeg" alt="Pinč">
        <?php

        $xml = simplexml_load_file('psi.xml')?>
       <?php
        foreach ($xml->pas as $pas) {
            if ($pas->pasmina == "Pinč") {
                // Izdvajanje podataka
                $pasmina = $pas->pasmina;
                $tezina = $pas->tezina;
                $visina = $pas->visina;
                $zivotni_vijek = $pas->zivotni_vijek;
                
                echo '<div class="data">';
                echo '<span class="label">Pasmina:</span> ' . $pasmina . '<br>';
                echo '<span class="label">Težina:</span> ' . $tezina . '<br>';
                echo '<span class="label">Visina:</span> ' . $visina . '<br>';
                echo '<span class="label">Životni vijek:</span> ' . $zivotni_vijek . '<br>';
                echo '</div>';
            }
        }
        ?>
    </div>
    <div class="container1">
    <img class="slika" src="samojed.jpg" alt="Samojed">
        <?php

        $xml = simplexml_load_file('psi.xml')?>
       <?php
        foreach ($xml->pas as $pas) {
            if ($pas->pasmina == "Samojed") {
                // Izdvajanje podataka
                $pasmina = $pas->pasmina;
                $tezina = $pas->tezina;
                $visina = $pas->visina;
                $zivotni_vijek = $pas->zivotni_vijek;
                
                echo '<div class="data">';
                echo '<span class="label">Pasmina:</span> ' . $pasmina . '<br>';
                echo '<span class="label">Težina:</span> ' . $tezina . '<br>';
                echo '<span class="label">Visina:</span> ' . $visina . '<br>';
                echo '<span class="label">Životni vijek:</span> ' . $zivotni_vijek . '<br>';
                echo '</div>';
            }
        }
        ?>
    </div>
    <div class="container1">
    <img class="slika" src="zlatni retriver.jpeg" alt="Zlatni retriver">
        <?php

        $xml = simplexml_load_file('psi.xml')?>
       <?php
        foreach ($xml->pas as $pas) {
            if ($pas->pasmina == "Zlatni retriver") {
                // Izdvajanje podataka
                $pasmina = $pas->pasmina;
                $tezina = $pas->tezina;
                $visina = $pas->visina;
                $zivotni_vijek = $pas->zivotni_vijek;
                
                echo '<div class="data">';
                echo '<span class="label">Pasmina:</span> ' . $pasmina . '<br>';
                echo '<span class="label">Težina:</span> ' . $tezina . '<br>';
                echo '<span class="label">Visina:</span> ' . $visina . '<br>';
                echo '<span class="label">Životni vijek:</span> ' . $zivotni_vijek . '<br>';
                echo '</div>';
            }
        }
        ?>
    </div>
    </div>

    <footer class="pastel-green-footer text-center py-3 mt-5">
  <div class="container">
    <p class="m-0">&copy; 2024 Marija Matković</p>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
