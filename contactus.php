<?php
  session_start();
     if(isset($_SESSION['id'])) {
	 include('../php/header_log.php');
  }
  else {
	 include('../php/header.php');
  }
 
?>
<!DOCTYPE html>
<html lang="it">

<head>

  <head>
    <meta charset="UTF-8">
	﻿<meta http-equiv="refresh" content="900;url=logout.php" />
    <title>AcquAction-contact us</title>
    <!---i had linked my css file----->
    <link rel="stylesheet" href="../css/contactus.css">
    <!---font awesome----->
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>
    <!---google fonts----->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    ﻿
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

<body>

  <section>
    <div class="container">
      <img src="https://images.unsplash.com/photo-1538300342682-cf57afb97285?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=634&q=80" alt="image" height="400" width="400" align="right" ;>
      <h2> Contact us:</h2>
      <div class="info">
        <div class="input-icone">
          <i class="fas fa-envelope-square"></i></i> Email:&nbsp <a class="link" href="mailto:acquaction@gmail.com?">acquaction@gmail.com</a><br><br>
          <i class="fas fa-phone-square"></i>
          Phone number:<p>+39 0123456789;<br>
            </br>
            <i class="fab fa-facebook"></i>You can also visit our facebook page:
          <p><a href='../img/Web-under-construction.jpeg' class="link">acquaction@help.fr;</a></p>
        </div>
      </div>
      </img>
    </div>
</body>
</section>
<div class="clear"></div>
<footer>
  <div class="input-icone">
    <i class="fab fa-facebook"></i>
    <i class="fab fa-youtube"></i>
  </div>
  <p>
    Copyright &copy 2021 by Danny k. for AcquAction Data. All Rights Reserved.
  </p>
</footer>

</html>

<?php
  if(isset($error)) {
	 echo '<font color="red">'.$error."</font>";
  }

?>