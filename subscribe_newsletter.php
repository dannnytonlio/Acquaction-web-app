<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="900;url=logout.php" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscription Form</title>
  <link rel="stylesheet" href="../css/subscribe_newsletter.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <input type="checkbox" id="toggle">

  <div class="wrapper">
    <label for="toggle">
      <i class="cancel-icon fas fa-times"></i>
    </label>
    <div class="icon"><i class="far fa-envelope"></i></div>
    <div class="content">

      <p>Iscriviti alla nostra newsletter e ricevi gli ultimi aggiornamenti direttamente nella tua casella di posta.</p>
    </div>
    <form action="subscribe_newsletter.php" method="POST">
      <?php 
    include('../php/connexionDB.php'); 
    $userEmail = ""; //prima lasciamo la mail vuota
    if(isset($_POST['subscribe'])){ //se subscribe vien cliccato
      $userEmail = $_POST['email']; //recuperiamo la mail dell'utente
      if(preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $userEmail)){ //controllo email utente
               $req_email = $DB->query("SELECT email FROM users WHERE email = ?", array($userEmail));
               $req_email = $req_email ->fetch();
            
                if ($req_email != 0){
                ?>
      <div class="alert error-alert">
        <?php echo "email già esistente " ?>
      </div>
      <?php
              } else {
				  $idate = date('Y-m-d H:i:s');
 	
            //inseriamo le informazioni nel database
                $DB->insert("INSERT INTO users ( email,idate) VALUES (?, ?)",
				array($userEmail,$idate));
            //stampa un messaggio di successo
				?>
      <div class="alert success-alert">
        <?php echo "Grazie per aver sottoscritto!" ?>
      </div>
      <?php
          $userEmail = "";  }
  
      }  else{
        ?>
      <!-- messagio di errore se la mail non è valida -->
      <div class="alert error-alert">
        <?php echo "$userEmail non è un indirizzo mail valido!" ?>
      </div>
      <?php
         }
       } 
	    
	
    ?>
       <div class="field">
        <input type="text" class="email" name="email" placeholder="Indirizzo mail" required>
      </div>
      <div class="field btn">
        <div class="layer"></div>
        <button type="submit" name="subscribe">sottoscrivi</button>
      </div>
    </form>
    <div class="text">Non condivideremo le tue informazioni.</div>
  </div>

</body>

</html>