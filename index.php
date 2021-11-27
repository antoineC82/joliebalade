<?php 
include("config.php") 
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $lang['title'] ?></title>
    
    <!---------------------------------- bootstrap ---------------------------------->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="app.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand logo" href="#"
          ><img src="couleur_noir.png" alt="logo"
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
              <img class="drap" src="<?php echo $lang['drap'] ?>" alt="langue" />
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

    <div class="first_block">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <div class="div1">
                <h2 class="mane_line"><?php echo $lang['titre1'] ?></h2>
                <p class="para1">
                <?php echo $lang['texte1'] ?>
                </p>
                <button class="btn_waitlist"><?php echo $lang['textbtn'] ?></button>
              </div>
            </div>
            <div class="col-md-6 video">
              <div  id="blocmain">
                <img style="width: 100%;" src="Assets/video.png" alt="jolie balade"/>
                <p class="titremain"><?php echo $lang['textvideo'] ?></p>
              </div>
            </div>
        </div>
    </div>
      <div class="background">
        <img
          id="img_3"
          class="superpose"
          src="Assets/back_heart.png"
          alt="jolie balade"
        />
      </div>
    </div>
    <div class="second_block">
      <div class="container">
        <div class="row">
          <div class="col-md-6 blocimg">
            <img
            id="imgcouple"
            class="superpose"
            src="Assets/testok.png"
            alt="jolie balade"
          />
          </div>
          <div class="col-md-6 text_block2">
            <h2 class="line_heart"><?php echo $lang['story'] ?></h2>
            <p class="para2">
            <?php echo $lang['textstory'] ?> 
            </p>
            <div style="width: 78%;">
              <h4 class="signature">Dylan <br/><span><?php echo $lang['signature'] ?>.</span></h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="thirst_block">
      <div class="center_line">
        <img
          id="img_logo"
          class="superpose"
          src="Assets/logo.png"
          alt="jolie balade"
        />
        <h4 class="text_logo"><?php echo $lang['titrecarte'] ?></h4>
      </div>
      <div class="background_carte">
        <img
          id="img_carte"
          class="superpose"
          src="Assets/carteok.png"
          alt="jolie balade"
        />
      </div>
    </div>

    <div class="foor_block">
      <div class="center_line">
        <h4 class="title_pink"><?php echo $lang['services'] ?></h4>
        <p class="para_pink">
        <?php echo $lang['textservice'] ?>
        </p>
      </div>

      <div class="container test">
        <div class="row">
          <div class="col-xs-6 col-md-3 block_white">
            <img id="block1" class="block" src="Assets/white_block/block1.png" alt="jolie balade" />
            <h5><?php echo $lang['bloc1'] ?></h5>
          </div>
          <div class="col-xs-6 col-md-3 block_white">
            <img id="block2" class="block" src="Assets/white_block/block2.png" alt="jolie balade" />
            <h5><?php echo $lang['bloc2'] ?></h5>
          </div>
          <div class="col-xs-6 col-md-3 block_white">
            <img id="block3" class="block" src="Assets/white_block/block3.png" alt="jolie balade" />
            <h5><?php echo $lang['bloc3'] ?></h5>
          </div>
          <div class="col-xs-6 col-md-3 block_white">
            <img id="block4" class="block" src="Assets/white_block/block4.png" alt="jolie balade" />
            <h5><?php echo $lang['bloc4'] ?></h5>
          </div>
          <div class="col-xs-6 col-md-3 block_white">
            <img id="block5" class="block" src="Assets/white_block/block5.png" alt="jolie balade" />
            <h5><?php echo $lang['bloc5'] ?></h5>
          </div>
          <div class="col-xs-6 col-md-3 block_white">
            <img id="block6" class="block" src="Assets/white_block/block6.png" alt="jolie balade" />
            <h5><?php echo $lang['bloc6'] ?></h5>
          </div>
          <div class="col-xs-6 col-md-3 block_white">
            <img id="block7" class="block" src="Assets/white_block/block7.png" alt="jolie balade" />
            <h5><?php echo $lang['bloc7'] ?></h5>
          </div>
          <div class="col-xs-6 col-md-3 block_white">
            <img id="block8" class="block" src="Assets/white_block/block8.png" alt="jolie balade" />
            <h5><?php echo $lang['bloc8'] ?></h5>
          </div>
        </div>
      </div>
      <div class="container mt-5 par">
        <div class="row">
          <div class="partner_block">
            <h4 class="title_partners"><?php echo $lang['partners'] ?></h4>
            <div class="container-fluid mb-3">
              <div class="row">
                  <div class="bloc col-6 col-6 col-md-offset-1 col-md-2">
                    <img id="partner1" class="partner" src="Assets/partners/partner1.png" alt="jolie balade" />
                  </div>
                  <div class="bloc col-6 col-6 col-md-2">
                    <img id="partner2" class="partner" src="Assets/partners/partner2.png" alt="jolie balade" />
                  </div>
                  <div class="bloc col-6 col-6 col-md-2">
                    <img id="partner3" class="partner" src="Assets/partners/partner3.png" alt="jolie balade" />
                  </div>
                  <div class="bloc col-6 col-6 col-md-2">
                    <img id="partner4" class="partner" src="Assets/partners/partner4.png" alt="jolie balade" />
                  </div>
                  <div class="bloc col-6 col-6 col-md-2">
                    <img id="partner5" class="partner" src="Assets/partners/partner5.png" alt="jolie balade" />
                  </div>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>




    <div class="five_block">
      <div class="center_line">
        <h4 class="title_five"><?php echo $lang['titreapp'] ?></h4>
        <h5 class="para_five"><?php echo $lang['Manetextapp'] ?></h5>
      </div>


      <div class="container-fluid block-heart">
    <div class="row">
        <div class="col-md-4 textphone">
          <div class="row">
            <div class="col-sm-6 col-md-12 mbok text-app">
              <img id="heart-app1" class="heart-app" src="Assets/heart-app.png" alt="jolie balade" />
            <p class="para-heart"><?php echo $lang['text1app'] ?></p>
            </div>
            <div class="col-sm-6 col-md-12 text-app">
              <img id="heart-app1" class="heart-app" src="Assets/heart-app.png" alt="jolie balade" />
              <p class="para-heart"><?php echo $lang['text2app'] ?></p>
            </div>
        </div>
        </div>
        <div class="col-md-4 middle">
          <img id="phone" class="phone" src="Assets/blockphone.png" alt="jolie balade" />
        </div>
        <div class="col-md-4 textphone">
          <div class="row">
            <div class="col-sm-6 col-md-12 mbok text-app">
              <img id="heart-app1" class="heart-app" src="Assets/heart-app.png" alt="jolie balade" />
              <p class="para-heart"><?php echo $lang['text3app'] ?></p>
            </div>
            <div class="col-sm-6 col-md-12 text-app">
              <img id="heart-app1" class="heart-app" src="Assets/heart-app.png" alt="jolie balade" />
              <p class="para-heart"><?php echo $lang['text4app'] ?></p>
            </div>
        </div>
        </div>
    </div>
</div>
    </div>




    <div class="six_block">
      <div class="center_line">
        <h4 class="title_six"><?php echo $lang['titrecom'] ?></h4>
      </div>


      <div class="container be">
        <div class="row">
            <div class="col-sm-4 block_text_six">
              <h6 class="title_bloc_six">Sophie Barker</h6>
              <hr color="#F47F6E">
              <p class="para_bloc_six"><?php echo $lang['com1'] ?></p>
            </div>
            <div class="col-sm-4 block_text_six">
              <h6 class="title_bloc_six">Ryder Chapman</h6>
              <hr color="#F47F6E">
              <p class="para_bloc_six"><?php echo $lang['com2'] ?></p>
            </div>
            <div class="col-sm-4 block_text_six">
              <h6 class="title_bloc_six">Frankie Marshall</h6>
              <hr color="#F47F6E">
              <p class="para_bloc_six"><?php echo $lang['com3'] ?></p>
            </div>
        </div>
    </div>
    <div class="arrow-block">
      <button class="btn_waitlist"><?php echo $lang['textbtn'] ?></button></div>
</div>
  
  

    


    <div class="seven_block">

      <div class="container mt-5 par">
        <div class="row">
          <div class="news_block">
            <h4 class="title_partners"><?php echo $lang['titrenews'] ?></h4>
            <div class="container-fluid mb-3">
              <div class="row">
                <form method="POST" class="form_new">
                  <input type="email" name="new" placeholder="Email" required class="email">
                  <input name="newsletter" type="submit" VALUE="<?php echo $lang['btnnews'] ?>" class="envoi" />
                </form>
              </div>
          </div>
          </div>
        </div>
      </div>

      <footer class="footer-area footer--light">
        <div class="footer-big">
          <div class="container">
            <div class="row">
                <div class="col-md-4 rere">
                  <div class="block_reseau">
                    <img id="res1" class="reseau" src="Assets/reseau/avion_black2.png" alt="jolie balade" />
                    <img id="res2" class="reseau" src="Assets/reseau/tw_rose2.png" alt="jolie balade" />
                    <img id="res3" class="reseau" src="Assets/reseau/ytb_black2.png" alt="jolie balade" />
                    <img id="res4" class="reseau" src="Assets/reseau/insta_black2.png" alt="jolie balade" />
                  </div>
                  <p>Copyright 2020 Joliebalade. All rights reserved.Privacy Policy</p>
                </div>
                <div class="col-md-4 logo-foo">
                  <img class="logo_footer" src="Assets/reseau/jolie_white.png" alt="jolie balade" />
                </div>
                <div class="col-md-4 logo-foo2">
                  <img id="dow1" class="download" src="Assets/download/apple.png" alt="jolie balade" />
                  <img id="dow2" class="download" src="Assets/download/google.png" alt="jolie balade" />
                  <p class="Soon">Soon Avaible</p>
                </div>
            </div>
        </div>
        </div>
    
      </footer>
    </div>
  
  
  
  </body>
</html>
