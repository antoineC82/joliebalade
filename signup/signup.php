<?php

include("../config.php") 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste d'attente</title>
   <!---------------------------------- JS AJAX ---------------------------------->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!---------------------------------- icone fontawesome ---------------------------------->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

<!---------------------------------- bootstrap ---------------------------------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("select").change(function(){
            $(this).find("option:selected").each(function(){
                var val = $(this).attr("value");
                if(val){
                    $(".box").not("." + val).hide();
                    $("." + val).show();
                    $("." + val).css("display", "flex");
                } else{
                    $(".box").hide();
                }
            });
        }).change();
    });
    </script>

    
<link rel="stylesheet" href="../app.css">
    <link rel="stylesheet" href="signup.css">
</head>
<body class="fond">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand logo" href="#"
          ><img src="../logo.png" alt="logo"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#"><?php echo $lang['lien1'] ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo $lang['lien2'] ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo $lang['lien3'] ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo $lang['lien4'] ?></a>
            </li>
          </ul>
          <div class="waitlist">
            <a class="nav-link" href="#"><?php echo $lang['btnnav'] ?></a>
          </div>
          <div>
          <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
  <button class="lang">
              <img class="drap" src="../<?php echo $lang['drap'] ?>" alt="langue" />
            </button>
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="index.php?lang=fr">Français</a></li>
    <li><a class="dropdown-item" href="index.php?lang=en">anglais</a></li>
  </ul>
</div>
          </div>
        </div>
      </div>
    </nav>
    
<h1 style="margin-top: 39px;width: 100%; text-align: center;font-weight: 700;color:black;">S'incrire à la Liste d'attente</h1>



  <div class="seven_block">
  <div class="log">
    <div class="btn_con" id="main">
        <!------------------------Partie inscription--------------------------------->
        <div id="1" class="sign-up">
        
        <form action="" method="POST">
            <input type="text" name="nom" placeholder="nom" required>
            <input type="text" name="prenom" placeholder="prenom" required>
            <input type="text" name="Num_licence" placeholder="N° licence" required>
            <select name="Club" id="listederoulante2">
            <option value="" disabled selected hidden>Club</option>
            </select>
            <select name="sexe" id="listederoulante">
            <option value="" disabled selected hidden>Sexe</option>
                <option value="Masculin">Masculin</option>
                <option value="Féminin">Féminin</option>
            </select>
                <div class="box Féminin">

                <div id="carouselExampleControls" class="carousel slide" data-interval="false">
                <div class="carousel-inner">
                <div class="carousel-item active">
                <input value="IMGUSER/F/4.png" type="radio" id="cb1" name="groupe1"/>
                <label for="cb1"><img src="IMGUSER/F/4.png" /></label>
                </div>
                <div class="carousel-item">
                <input value="IMGUSER/F/5.png" type="radio" id="cb2" name="groupe1"/>
                <label for="cb2"><img src="IMGUSER/F/5.png" /></label>
                </div>
                <div class="carousel-item">
                <input value="IMGUSER/F/6.png" type="radio" id="cb3" name="groupe1"/>
                <label for="cb3"><img src="IMGUSER/F/6.png" /></label>
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon next" aria-hidden="true"></span>
                </a>
                </div>
                </div>
                <div class="box Masculin">
                <div id="carouselExampleControls2" class="carousel slide" data-interval="false">
                <div class="carousel-inner">
                <div class="carousel-item active">
                <input value="IMGUSER/M/1.png" type="radio" id="cb4" name="groupe1"/>
                <label for="cb4"><img src="IMGUSER/M/1.png" /></label>
                </div>
                <div class="carousel-item">
                <input value="IMGUSER/M/2.png" type="radio" id="cb5" name="groupe1"/>
                <label for="cb5"><img src="IMGUSER/M/2.png" /></label>
                </div>
                <div class="carousel-item">
                <input value="IMGUSER/M/3.png" type="radio" id="cb6" name="groupe1"/>
                <label for="cb6"><img src="IMGUSER/M/3.png" /></label>
                </div>
                <div class="carousel-item">
                <input value="IMGUSER/M/4.png" type="radio" id="cb7" name="groupe1"/>
                <label for="cb7"><img src="IMGUSER/M/4.png" /></label>
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                <span class="carousel-control-next-icon next" aria-hidden="true"></span>
                </a>
                </div>
                </div>
            <input type="date" name="date" id="date">
            <input type="text" name="Adresse" placeholder="Adresse" required>
            <input type="password" name="pswd" placeholder="mot de passe" required>
            <input type="password" name="pswd2" placeholder="Confirmez votre mot de passe" required>
            <button type="submit" name="inscription">S'inscrire</button>
        </form>

        </div>
    </div>
  </div>

      <footer class="footer-area footer--light">
        <div class="footer-big">
          <div class="container">
            <div class="row">
                <div class="col-md-4 rere">
                  <div class="block_reseau">
                    <img id="res1" class="reseau" src="../Assets/reseau/avion_black2.png" alt="jolie balade" />
                    <img id="res2" class="reseau" src="../Assets/reseau/tw_rose2.png" alt="jolie balade" />
                    <img id="res3" class="reseau" src="../Assets/reseau/ytb_black2.png" alt="jolie balade" />
                    <img id="res4" class="reseau" src="../Assets/reseau/insta_black2.png" alt="jolie balade" />
                  </div>
                  <p>Copyright 2020 Joliebalade. All rights reserved.Privacy Policy</p>
                </div>
                <div class="col-md-4 logo-foo">
                  <img class="logo_footer" src="../Assets/reseau/jolie_white.png" alt="jolie balade" />
                </div>
                <div class="col-md-4 logo-foo2">
                  <img id="dow1" class="download" src="../Assets/download/apple.png" alt="jolie balade" />
                  <img id="dow2" class="download" src="../Assets/download/google.png" alt="jolie balade" />
                  <p class="Soon">Soon Avaible</p>
                </div>
            </div>
        </div>
        </div>
    
      </footer>
    </div>
</body>
<script src="signup.js"></script>
</html>