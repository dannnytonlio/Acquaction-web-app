<?php
	 session_start();  
	include('header.php');
    include('connexionDB.php');
  
    //non si torna qua se c'è una sessione
    if (isset($_SESSION['id'])){
        header('Location: show_profile.php');     
		include('header_log.php');
        exit;
    }
	
   if(!empty($_POST)){
        extract($_POST);
        $valid = true;
      // Se la variabile "$_Post" contiene delle informazioni le trattiamo
 
    if (isset($_POST['email']) AND isset($_POST['pass'])){
      if (!empty($_POST['email']) AND !empty($_POST['pass']))
                {
            // facciamo la richiesta per sapere se l'indirizzo mail / la password esiste !
           
                    $email = $_POST['email'];
                    $req = $DB->query("SELECT id, pass FROM users WHERE email = '$email'");
                    $req-> execute(array('email' => $email));
 
                    $resultat = $req->fetch();
  
 					if (!$resultat){
					   $erreur= 'Email o password errata!';
					}else{
						// si paragonano le due password e si vede se sono identiche
						$isPasswordCorrect = password_verify($pass, $resultat['pass']);
						if ($isPasswordCorrect){
							$_SESSION['id'] = $resultat['id'];
			          echo "<script>alert('connessione riuscita!')</script>";
					  //va alla homepage dell'utente collegato
						header("Refresh:0, url= index.php");  
						}else{
						 $erreur= 'Email o password errata!';
						}
	        }
			}  else
                {
                     $erreur= 'Compliare tutti i campi!';
                } 
			}       
  } 
?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <title>AcquAction-login </title>
  <!---i had linked my css file----->
  <link rel="stylesheet" href="../css/login.css" type="text/css">
  <!---font awesome----->
  <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>
  <!---google fonts----->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

</head>

<body>

  <section>
    <div class="input-icone">
      <h2>Login</h2>
    </div>

    <form novalidate action="login.php" method="POST" class="form" id="form">
      <?php		
		 if(isset($erreur)) {
	  ?>
      <div style="font-size:14px;color:#e74c3c;"><?= $erreur?></div>
      <?php
  }
?>
      <div class="form-control">
        <input type="email" id="email" name="email" placeholder="E-mail" value="<?php if(isset($email)){ echo $email; }?>" required></br>

      </div>

      <div class="form-control">
        <input type="password" id="pass" name="pass" placeholder="password"></br>

      </div>

      <input type="submit" name="submit" id="submit" value="submit">
      <p class="message"><b>Non hai ancora un account ?</b><a class="access" href='https://webdev19.dibris.unige.it/~S4691028/php/registration.php'> Registrati</a></p>
    </form>
  </section>

</body>

<br><br><br><br>
<footer>
  <p>
    Copyright &copy 2021 by Danny k. for AcquAction Data. All Rights Reserved.
  </p>
</footer>

</html>