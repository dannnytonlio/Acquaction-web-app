<?php
    session_start();  
	include('header.php');
    include('connexionDB.php'); // connessione al db
  
    //non si torna qua se c'è una sessione
    if (isset($_SESSION['id'])){
        header('Location: index.php'); 
        exit; 
    }
 
    // Se la variabile "$_Post" contiene delle informazioni le trattiamo
    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
 
        if (isset($_POST['submit'])){
            $firstname  = htmlentities(trim($firstname)); // si recuperano i dati in ingresso
            $lastname = htmlentities(trim($lastname)); // 
            $email= htmlentities(strtolower(trim($email))); 
            $pass= trim($pass); 
            $confirm = trim($confirm); 
 
            //  verifica del nome
            if(empty($firstname)){
                $valid= false;
                $err_firstname= ("firstname non può essere vuoto!");
            }       
 
            //  Vérification du prénom
            if(empty($lastname)){
                $valid = false;
                $err_lastname = ("lastname non può essere vuoto!");
            }       
 
          
            if(empty($email)){
                $valid = false;
                $err_email = "email non può essere vuoto!";
 
                // si verifica la validita del formato della mail
            }elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $email)){
                $valid = false;
                $err_email = "indirizzo mail non valido!";
 
            }else{
                //si verifica la validita della mail
                $req_email = $DB->query("SELECT email FROM users WHERE email = ?",
                    array($email));
             $req_email = $req_email->fetch();
 
                if ($req_email != 0){
                
                    $err_email = "mail già esistente!";
                }
            }

            // si verifica la password
            if(empty($pass)) {
                $valid = false;
                $err_pass = "password non può essere vuoto";
 
            }elseif($pass != $confirm){
                $valid = false;
                $err_confirm = " le password non corrispondono!";
            }
 
            // se tutto ok!
            if($valid){
 
                $pass = password_hash($pass, PASSWORD_DEFAULT);
                $idate = date('Y-m-d H:i:s');
 	
                // si inseriscono le informazioni nel db
                $DB->insert("INSERT INTO users (firstname, lastname, email, pass, idate) VALUES 
                    (?, ?, ?, ?, ?)", 
                    array($firstname, $lastname, $email, $pass, $idate));
                echo "<script>alert('registrazione riuscita!')</script>";
                header("Refresh:0, url= login.php");
                exit;
            } 
			
        }
    }
?>

<!DOCTYPE html>
<html lang="it">
<meta charset="UTF-8">
<title>AcquAction-Registration</title>
<link rel="stylesheet" href="../css/registration.css">
<link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>
<link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

<body>
  <br><br></br></br>

  <section>
    <h2>Registration</h2>

    <form novalidate action="registration.php" method="POST" class="form" id="form">

      <div class="form-control">
        <input type="text" id="firstname" name="firstname" placeholder="Firstname" value="<?php if(isset($firstname)) { echo $firstname; } ?>" required>
        <?php
	  if(isset($err_firstname)){
		  ?>
        <div style="font-size:14px;color:#e74c3c;"><?= $err_firstname ?></div>
        <?php
	  }
	?>
      </div>

      <div class="form-control">
        <input type="text" id="lastname" name="lastname" placeholder="Lastname" value="<?php if(isset($lastname)) { echo $lastname; } ?>" required>
        <?php
  if(isset($err_lastname)) {
	  ?>
        <div style="font-size:14px;color:#e74c3c;"><?= $err_lastname ?></div>
        <?php
  }
?>
      </div>

      <div class="form-control">
        <input type="email" id="email" name="email" placeholder="E-mail" value="<?php if(isset($email)) { echo $email; } ?>">

        <?php
  if(isset($err_email)) {
	  ?>
        <div style="font-size:14px;color:#e74c3c;"><?= $err_email ?></div>
        <?php
  }
?>
      </div>

      <div class="form-control">
        <input type="password" id="pass" name="pass" placeholder="Password">
        <?php
  if(isset($err_pass)) {
	  ?>
        <div style="font-size:14px;color:#e74c3c;"><?= $err_pass ?></div>
        <?php
  }
?>
      </div>

      <div class="form-control">
        <input type="password" id="confirm" name="confirm" placeholder="Confirm password">
        <?php
  if(isset($err_confirm)) {
	  ?>
        <div style="font-size:14px;color:#e74c3c;"><?= $err_confirm ?></div>
        <?php
  }
?>
      </div>

      <input type="submit" name="submit" id="submit" value="submit">
      <p class="message"><b>hai già un account ?</b><a href='https://webdev19.dibris.unige.it/~S4691028/php/login.php' class="access"> Accedi </a></p>
    </form>

  </section>


</body>

<br><br><br>
<footer>
  <p>
    Copyright &copy 2021 by Danny k. for AcquAction Data. All Rights Reserved.
  </p>
</footer>

</html>