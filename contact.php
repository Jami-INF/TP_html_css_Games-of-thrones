<!DOCTYPE html>
<html>


<head>
  <link rel="icon" type="image/jpg" href="pics/logo.jpg" />
  <link type="text/css" rel="stylesheet" href="CSS/homeCSS.css" >
  <meta     ;/>
  <title>Fans of throne</title>
</head>
  <body>

    <h1><a href="home.html"style="color:#2C0202;">Fans of throne</a> <br/> <br/>

      <imge>
          <img src="pics/background.jpg">
          </imge>
           
    </h1>

  <nav>
  <ul class="menu">
      <li class="categorie">
        <a href="home.html">Home</a>
      </li>
      
      <li class="categorie">
        <a href="articles/famillesintro.html">Biographies</a>

      </li>
      <li class="categorie">
        <a href="articles/article.html">Actualités</a>

      </li>
      <li class="categorie">
        <h5>médias</h5>
        <ul>
          <li><a class="menu" href="galerie/galerie.html">photos</a></li>
          <li><a class="menu" href="galerie/galerievideos.html">videos</a></li>
        </ul>
      
      </li>
  </ul>

  </nav>


  <div id="main">

  
  <pub>
    <a href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @GOTactudev</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button_count&size=small&width=113&height=20&appId" width="113" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">
    </iframe>
    </pub>

  <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
            <p>
              <fieldset><legend>Nous contacter</legend></br>
                <label for="nom">Nom ou pseudo</label>
                <input type="text" name="nom" id="nom" placeholder="ex : Jean" required/>
            </p>
            <p>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="ex : Martin@jean.fr" required/>
            </p>
            <p>
                <label for="phone">Téléphone</label>
                <input type="tel" name="phone" id="phone" placeholder="ex : 0473000000">
            </p>
            <p>
                <label for="cat">Catégorie</label>        
                <select id="cat" name="cat">
                    <option value=" le signalement d'un bug ">Signaler un bug</option>            
                    <option value=" la proposition d'une amélioration ">Proposer une amélioration</option>
                    <option value=" une demande personnel ">demande personnel</option>
                </select>
            </p>
            <p>
                Venez vous régulierement sur Fans Of Thrones ? <br/>

                <label for="btn_1">Première visite</label>
                <input type="radio" name="btn" id="btn_1" value="bienvenue ">
                <label for="btn_2">Visite régulière</label>
                <input type="radio" name="btn" id="btn_2" value="je vous reconnais, vous etes : ">
            </p>
            <p>
                <label for="message">Votres message</label>
                <textarea name="message" id="message" rows="10" cols="30" required=""></textarea>
            </p>
            <p>
                <input type="submit" name="Soumettre">
            </p>
        </fieldset></br>
    </form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      if (empty($_POST["nom"])) {
        echo "⚠Nom obligatoire⚠<br/>";
      }
      else {
        echo ''  . $_POST['btn'] . $_POST['nom'],"<br/>";
      }

      if (empty($_POST["email"])) {
        echo"⚠Email obligatoire⚠<br/>";
      }
       else {
        echo 'Votre adresse mail est : ' . $_POST['email'],"<br/>";
      }

      if (empty($_POST["message"])) {
        echo "⚠Texte obligatoire⚠<br/>";
      }
       else {
        echo 'votre requete concernant ' . $_POST['cat']  . $_POST['message']," a bien etais prise en compte";
      }
    }
  ?>
  </content>
  </div>
    <footer>
          © 2020 Jami Infante 1ère année info GPE 2
      </footer>
    </body>


</html> 