<?php

//connexion BDD
try
{
$tria = new PDO("mysql:host=127.0.30.1;dbname=triathlete;charset=utf8", 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


//si formulaire inscription
if (isset($_POST['inscription'])) {
  $nom = htmlspecialchars($_POST['nom']);
  $prenom = htmlspecialchars($_POST['prenom']);
  $Num_licence = htmlspecialchars($_POST['Num_licence']);
  $sexe = htmlspecialchars(@$_POST['sexe']);
  $club = htmlspecialchars($_POST['Club']);
  $date = date('Y-m-d', strtotime($_POST['date']));
  $Adresse = htmlspecialchars($_POST['Adresse']);
  $mdp = sha1($_POST['pswd']);
  $mdp2 = sha1($_POST['pswd2']);
  $avatar = htmlspecialchars($_POST['groupe1']);

  //var_dump($nom, $prenom, $avatar);
  //si tout les champs existe
  if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['Num_licence']) and !empty($_POST['sexe']) and !empty($_POST['Club']) and !empty($_POST['date']) and !empty($_POST['Adresse']) and !empty($_POST['pswd']) and !empty($_POST['pswd2']) and !empty($_POST['groupe1'])) {

    $aujourdhui = date("Y-m-d");
    $diff = date_diff(date_create($date), date_create($aujourdhui));
    $age = $diff->format('%y');

    if( 12 <= $age && 19 >= $age){

    $cat = $tria->query('SELECT code_cat FROM categorie WHERE age_debut <= ' . $age . ' AND age_fin >= ' . $age);
    $code_ca = $cat->fetch();


      $reqlicence = $tria->prepare("SELECT * FROM athlete WHERE Num_licence = ?");
      $reqlicence->execute(array($Num_licence));
      $liencexist = $reqlicence->rowCount();
      if ($liencexist == 0) {

        // si mdp1 = mdp2
        if ($mdp == $mdp2) {

          // var_dump($Num_licence, $code_ca['code_cat'] ,$nom, $prenom, $sexe, $Adresse, $date, $don['Num_club']);
          $insertmbr = $tria->prepare("INSERT INTO athlete(Num_licence, code_cat, nom, prenom, sexe, Adresse, date_naissance, club, pass, type_c, avatar) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
          $insertmbr->execute(array($Num_licence, $code_ca['code_cat'] ,$nom, $prenom, $sexe, $Adresse, $date, $club, $mdp, '1', $avatar));
          ?>
           <!---------------------------------- alerte success ---------------------------------->
           <div class="alert alert-success alert-dismissible fade show">
             <strong>YES ! Vous pouvez vous connectez !</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php
        } else {
        ?>

      <!---------------------------------- alerte danger ---------------------------------->
           <div class="alert alert-danger alert-dismissible fade show">
            <strong>ERREUR : mots de passe ne correspondent pas</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php
         }
      } else {
         ?>

     <!---------------------------------- alerte danger ---------------------------------->
     <div class="alert alert-danger alert-dismissible fade show">
       <strong>ERREUR : Le numéro de licence existe déjà</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
</div>
     <?php
       }
 }else {
   ?>

 <!---------------------------------- alerte danger ---------------------------------->
 <div class="alert alert-danger alert-dismissible fade show">
 <strong>ERREUR : Votre âge ne convient pas !</strong>
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <?php
 }
}else {
?>

<!---------------------------------- alerte danger ---------------------------------->
<div class="alert alert-danger alert-dismissible fade show">
<strong>ERREUR : Veuillez remplir tout les champs</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
 </button>
</div>
<?php
 }
}






// si formulaire connexion 
if (isset($_POST['connexion'])) {

  $Num_licence = htmlspecialchars($_POST['Num_licence']);
  $mdpconnect = sha1($_POST['pswdconnect']);

  if (!empty($Num_licence) and !empty($mdpconnect)) {


    $requser = $tria->prepare("SELECT * FROM athlete WHERE Num_licence = ? AND pass = ?");
    $requser->execute(array($Num_licence, $mdpconnect));
    $userexist = $requser->rowCount();

    //si user exist = session de tout les infos
    if ($userexist == 1) {
      $userinfo = $requser->fetch();
      $_SESSION['Num_licence'] = $userinfo['NUM_LICENCE'];
      $_SESSION['Code_cat'] = $userinfo['CODE_CAT'];
      $_SESSION['Nom'] = $userinfo['NOM'];
      $_SESSION['prenom'] = $userinfo['PRENOM'];
      $_SESSION['sexe'] = $userinfo['SEXE'];
      $_SESSION['adresse'] = $userinfo['ADRESSE'];
      $_SESSION['date_naissance'] = $userinfo['DATE_NAISSANCE'];
      $_SESSION['club'] = $userinfo['CLUB'];
      $_SESSION['type'] = $userinfo['type_c'];
      $_SESSION['avatar'] = $userinfo['avatar'];


      $aujourdhui = date("Y-m-d");
      $diff = date_diff(date_create($userinfo['DATE_NAISSANCE']), date_create($aujourdhui));
      $age = $diff->format('%y');

      if( 12 <= $age && 19 >= $age || $userinfo['type_c'] == 2){


      if($userinfo['type_c'] == 1){
        header("Location: ATHLETE/ATHLETE.php?Li=" . $_SESSION['Num_licence']);
      }else{
        header("Location: ADMIN/ADMIN.php?Li=" . $_SESSION['Num_licence']);
      }
    }else {
      ?>
  
      <!---------------------------------- alerte danger ---------------------------------->
        <div class="alert alert-danger alert-dismissible fade show">
          <strong>ERREUR : Votre age ne convient plus pour vous inscrire</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php
      }
    }else {
    ?>

    <!---------------------------------- alerte danger ---------------------------------->
      <div class="alert alert-danger alert-dismissible fade show">
        <strong>ERREUR : Mauvais mail ou mauvais mot de passe</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php
    }
  } else {
    ?>

    <!---------------------------------- alerte danger ---------------------------------->
    <div class="alert alert-danger alert-dismissible fade show">
      <strong>ERREUR : Tout les champs doivent être complétés</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php
//   }
// }
?>

