<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  ﻿<meta http-equiv="refresh" content="900;url=logout.php" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../css/search.css">
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
  <title>Search</title>

</head>

<body>
  <a href='https://webdev19.dibris.unige.it/~S4691028/php/index.php' class="home" style="float:right;margin:15px;">Torna alla homepage»</a>

  <form method="post">
    <div class="searchBox">
      <input class="searchInput" type="text" name="search" placeholder="Search">
      <button class="searchButton" name="submit">
        <i class="material-icons">search</i>
      </button>
    </div>

  </form>

</body>

</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=S4691028",'S4691028','dannyjoel98');
 
 if (isset($_POST['submit']) AND !empty($_POST['search'])) {
    $str = htmlspecialchars($_POST['search']);
    $sth = $con->prepare("SELECT * FROM projects WHERE name LIKE '$str%' ORDER BY name ASC LIMIT 0,5");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth ->execute();
	if($sth ->rowCount() >0 ){ 
?>
<br><br><br><br><br><br>
<?php 
	while($row = $sth->fetch()){
		?>
<ul>
  <li><b>project:</b>
    <?php echo  $row->name;?></li>
</ul>
<?php 
	}
	?>
<?php  } else{  ?>
<br><br><br><br><br><br>
<span class="echo" style="left:50%;">Nessun risultato trovato</span>
<?php  
		}
}

?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
  <p class="piede">
    Copyright &copy 2021 by Danny k. for AcquAction Data. All Rights Reserved.
  </p>
</footer>