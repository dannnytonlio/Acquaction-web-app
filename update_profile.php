<?php
	 include('header_log.php');
	 $db = mysqli_connect('localhost', 'S4691028', 'dannyjoel98') or
			die ('Impossibile connettersi. dai un occhiata ai tuoi parametri.'); // retorna un messaggio di errore se la connessione falisce
			mysqli_select_db($db, 'S4691028') or die(mysqli_error($db)); // seleziona il db
			
	  session_start();
		$id=$_SESSION['id'];
		$query=mysqli_query($db,"SELECT * FROM users where id='$id'")or die(mysqli_error());
		$row=mysqli_fetch_array($query);

		if(isset($_POST['submit'])){
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$email = $_POST['email'];
				$country = $_POST['country'];
				$address = $_POST['address'];
				$tel = $_POST['tel'];
			
		
				 $query = "UPDATE users SET firstname = '$firstname',lastname= '$lastname', email = '$email', country = '$country', address = '$address', tel= '$tel' WHERE id = '$id'";
							$result = mysqli_query($db, $query) or die(mysqli_error($db));
							?>
<script type="text/javascript">
  alert("Modificato con successo !");
  window.location = "show_profile.php";
</script>
<?php
           
		
         
	 } 
  ?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  ﻿<meta http-equiv="refresh" content="900;url=logout.php" />
  <title>profilo</title>
  <link rel="stylesheet" href="../css/profilo.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">

  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
</head>

<body>

  <br><br></br></br>
  <div class="container-fluid1">
    <h1>il mio account</h1>
    <nav class="navbar1">
      <ul>
        <i class="fa fa-user-circle" style="margin:10px;font-size:5em;color:skyblue;float:right;"></i>
        <li><a href="https://webdev19.dibris.unige.it/~S4691028/php/show_profile.php" style="color: white;">Guarda profilo</a></li>
      </ul>
    </nav>
  </div>

  <section>
    <h2 style="text-align:center;">Le mie informazioni:</h2>
    <p class="camp" style="float:right;">*=Campo obligatorio</p>
    <div class="row">
      <div class="container-fluid2">
        <form action="update_profile.php" method="POST" class="form" id="form">

          <div class="form-control">
            <label class="name">Cognome*</label>
            <input type="text" id="firstname" name="firstname" placeholder="Firstname" value="<?php echo $row['firstname']; ?>" required>
         
          </div>

          <div class="form-control">
            <label class="name">Nome*</label>
            <input type="text" id="lastname" name="lastname" placeholder="Lastname" value="<?php echo $row['lastname']; ?>" required>
        
          </div>

          <div class="form-control">
            <label class="email">E-mail*</label>
            <input type="email" id="email" name="email" placeholder="E-mail" value="<?php echo $row['email']; ?>" required>
        
          </div>

          <div class="form-control">
            <label class="country">Paese</label>
            <input type="text" id="country" name="country" placeholder="paese" value="<?php echo $row['country']; ?>">

          </div>

          <div class="form-control">
            <label class="address">Indirizzo</label>
            <input type="text" id="address" name="address" placeholder="indirizzo" value="<?php echo $row['address']; ?>">

          </div>
          <div class="form-control">
            <label class="telephone">Telefono</label>
            <input type="tel" id="phone" name="tel" placeholder="telefono" value="<?php echo $row['tel']; ?>">

          </div>

      </div>
      <input type="submit" name="submit" id="submit" value="update">
    </div>
    </div>

    </form>
  </section>

</body>
<div class="clear"></div>
<br><br><br>

<footer>
  <p>
    Copyright &copy 2020-2021 by AcquAction Data. All Rights Reserved.
  </p>
</footer>

</html>