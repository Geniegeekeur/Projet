<?php 
    require_once './php/config.php'; 

    $check = $bdd->prepare('SELECT * FROM avis');
    $check->execute();
    $max_avis = $check->rowCount();

    $query = 'SELECT * FROM avis ORDER BY id DESC';
    $data_avis = $bdd->query($query);
   
?>

<!doctype html>
<html lang="fr">

<head>
  <title>Action War VR</title>
  <meta charset="utf-8">
</head>

<body>
<div class="wrapper">
  <header class="page-header">
    <nav class="navbar">
      <h2 class="logo">Action War VR</h2>
      <ul class="">
        <li class="">
          <a href="./html/apropos.html">En Savoir Plus</a>
        </li>
        <li class="">
          <a href="./html/abonnement.html">Abonnement</a>
        </li>
        <li class="">
          <a href="">Contact</a>
        </li>
      </ul> 
      <button class="cta-contact" onclick="openForm()">S'inscrire</button>
    </nav>
  </header>

  <main class="page-main">

    <div class="plus">
      <a href="apropos.html"> <img src="./media/en savoir plus.jpg" width="700" class="img_plus"> </a>
      <div class="content_plus">
        Action War VR est un jeu immersif qui se joue à l'aide d'un casque VR
      </div>
    </div>

    <div class="abo">
      <a href=""> <img src="./media/abonnement.jpg" width="700" class="img_abo"> </a>
      <div class="content_abo">
        Nos différentes gamme de prix
      </div>
    </div>

    <h2>Les derniers avis</h2>
          <?php 
          foreach($data_avis as $row) {
                if (($max_avis - $row['id']) <= 2) {
                    echo '
                    <div class="caré_blanc">
                      <h2>'.$row['pseudo'].'</h2>
                      <h3>'.$row['note'].' / 10</h3>
                      <p>'.$row['commentaire'].'</p>
                    </div>';
                }
          }
           ?>

</main>

<div class="login-popup">
<div class="form-popup" id="popup-Form">
  <form class="form-container">
    <h2>Inscription à la phase béta !</h2>
    <label for="email">
      <strong>E-mail</strong>
    </label>
    <input type="text" placeholder="Votre Email" name="email" required/>
    <button type="submit" class="btn">S'inscrire</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Annuler</button>
  </form>
</div>
</div>
</body>

<link href="./css/style.css" rel="stylesheet">
<script src="./js/indexjs.js">
</script>

</html>