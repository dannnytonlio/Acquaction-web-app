<?php
  session_start();
  include ('header_log.php');
  include('connexionDB.php'); 
  
   $id=$_SESSION['id'];
  //recupera le informazioni dell'utente usando il suo codice ID
  $afficher_profil = $DB->query("SELECT * FROM users WHERE id = ?", array($id));
  $afficher_profil = $afficher_profil->fetch();

?>

<!DOCTYPE html>
<html lang="it">
﻿

<head>
  ﻿
  <meta charset="utf-8">
  ﻿<meta http-equiv="refresh" content="900;url=logout.php" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/show_profile.css">
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
  ﻿ <title>profilo</title>
</head>

<body>
  <br><br><br><br><br>
    <form action="show_profile.php" method="POST" class="form" id="form">
  <div class="view" style="margin-left:15px;">
    ﻿<h2>Salve <em><?= $afficher_profil['firstname'] . " " .  $afficher_profil['lastname']; ?>&nbsp!</em></h2>
    <div>Qualche informazione su di te : </div> ﻿
    <ul> ﻿﻿
	  <li>
	   <div class="form-control">
			<label class="name">Il tuo cognome:</label>
			<input type="text" id="firstname" name="firstname" value="<?= $afficher_profil['firstname'] ?>">
	   </div>
	  </li><br>
	  <li>
	   <div class="form-control">
			<label class="name">Il tuo nome:</label>
			<input type="text" id="lastname" name="lastname" value="<?= $afficher_profil['lastname'] ?>">
	   </div>
	  </li><br>
      <li>
	  <div class="form-control">
            <label class="email">Il tuo indirizzo mail :</label>
            <input type="email" id="email" name="email" value="<?= $afficher_profil['email'] ?>">
       </div>
	  </li>
	  ﻿<li>
	   <div class="form-control">
            <label class="id_name">Il tuo codice ID :</label>
            <input type="text" id="id" name="id" value="<?= $afficher_profil['id'] ?>">
       </div>
      </li><br>
      <li>
	   <div class="form-control">
            <label class="idate">Il tuo conto è stato creato il : </label>
            <input type="text" id="idate" name="idate" value="<?= $afficher_profil['idate'] ?>">
       </div>
	  </li>
      ﻿<li><b></b>
	   <div class="form-control">
            <label class="country">Il tuo paese : </label>
            <input type="text" id="country" name="country" value="<?= $afficher_profil['country'] ?>">
       </div>
	  </li> ﻿
      <li>
	   <div class="form-control">
            <label class="address">Il tuo indirizzo : </label>
            <input type="text" id="address" name="address" value="<?= $afficher_profil['address'] ?>">
       </div>
	  </li> ﻿
      <li>
	    <div class="form-control">
            <label class="telephone">Il tuo numero di telefono : </label>
            <input type="tel" id="tel" name="text" value="<?= $afficher_profil['tel'] ?>">
        </div>
	  </li>
      <p style="text-align:center;font-size:18px;text-decoration:none;" class="more"><a href="https://webdev19.dibris.unige.it/~S4691028/php/update_profile.php">modifica il tuo profilo »</a></p>
    </ul>
  </div> 
  </form>﻿
  </body>
<footer>
  <p>
    Copyright &copy 2020-2021 by AcquAction Data. All Rights Reserved.
  </p>
</footer>
</html>