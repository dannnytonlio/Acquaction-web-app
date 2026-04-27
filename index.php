<?php
  session_start();
     if(isset($_SESSION['id'])) {
	 include('header_log.php');
  }
  else {
	 include('header.php');
  }
 
?>
<!DOCTYPE html>
<html lang="it">

<head>
 
  <meta charset="UTF-8">
   ﻿<meta http-equiv="refresh" content="900;url=logout.php" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AcquAction-home</title>
  <!---i had linked my css file----->
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/subscribe_newsletter.css">
  <!---font awesome----->
  <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <!---google fonts----->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

</head>

<body>

  <section>
    <div class="container-fluid">
      <h2 style="font-size:40px;text-align:center;">CHI SIAMO ?</h2>
      <div class="logo">
        <h3 class="logo-text"><span>Acqu</span>Action</h3>
      </div>
      <p style="font-size:20px;line-height:1.5em; text-align:center; color:white;"> è un'organizzazione senza scopo di lucro 501 (c) (3) che sblocca il potenziale umano fornendo progetti idrici affidabili alle comunità dell'Africa subsahariana che soffrono inutilmente della mancanza di accesso all'acqua pulita e ai servizi igienici adeguati.<br>

        Da dieci anni aiutiamo le comunità ad accedere ad acqua pulita e sicura fornendo formazione, esperienza e supporto finanziario per la costruzione di progetti idrici attraverso il nostro personale e i partner di implementazione.</p>
      </br>
    </div>

    <div class="esplain">
      <h4 style="font-size:40px;text-align:center;color:#7a7373;margin:15px;">PERCHE L'ACQUA ?</h4>

      <p style="font-size:18px;line-height:1.5em;text-align:center;color:#423f3f;">Ogni giorno nelle comunità rurali dell'Africa subsahariana milioni di persone soffrono di mancanza di accesso ad acqua pulita e sicura. Per i bambini in età scolare è un peso che li intrappola nella povertà.</p>
      <img src="../img/kenya_school_bk_2018.jpg" width="100%">
      <p style="font-size:18px;line-height:1.5em;text-align:center;">A livello globale, 1 persona su 9 non ha ancora accesso all'acqua pulita. Ma nelle comunità che serviamo, sono 5 su 10. L'acqua è una sfida quotidiana e paralizzante. Senza acqua non puoi coltivare cibo, non puoi costruire alloggi, non puoi stare in salute, non puoi restare a scuola e non puoi continuare a lavorare.<br>

        Oggi, la speranza è sospesa in oltre la metà delle scuole primarie del mondo in via di sviluppo senza accesso all'acqua e ai servizi igienici.<br><br><b>Ma la crisi idrica può essere risolta.</b></br></br></br></p>
    </div>
    <div class="child">
      <div class="container">
        <img class="alignLeft" src="https://thewaterproject.org/images/gathering_dirty_water_kenya_2018.jpg" alt="" />
        <p>I bambini spesso sopportano il peso di percorrere miglia e miglia ogni giorno per trovare l'acqua nei ruscelli e negli stagni,<br> pieni di malattie trasmesse dall'acqua che stanno facendo ammalare loro e le loro famiglie.<br> La malattia e il tempo perso a prenderla priva intere comunità del loro futuro.<br> L'accesso all'acqua potabile è fondamentale per lo sviluppo di qualsiasi comunità. Un'acqua sicura e affidabile ripristina la speranza e sblocca il potenziale.</p>

        </br></br></br>

      </div>

      <div class="clear"></div>
      <div class="florence">
        <h5 style="text-align:center;font-size:40px;text-decoration:none;">INCONTRA FLORENCE<br><span style="color:blue;font-size:17px;">Scopri cosa significa l'accesso all'acqua per la sua scuola.</span></h5>
        </br>
        <iframe class="embed-responsive-item" src=""></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/1aW7fpd4GdY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
    </div>
    <h6 style="text-align:center;font-size:35px;">Scegli Chi Aiutare</h6>

  </section>
  <div class="container-2">
    <div class="row">
      <div class="card">
        <div class="card-header">
          <a href="https://thewaterproject.org/community/projects/kenya/rainwater-catchment-wash-project-21252">
            <img class="img-responsive" src="../img/salvation.jpg" width="100%"></a>
          
        </div>
        <div class="card-body">
          <p style="font-size:20px;">Salvation Army Matioli Secondary School</p>
          <p style="color:#696e6d;text-align:left;">Kenya</p>
          <p class="more">
            Fornire un bacino di raccolta dell'acqua piovana per aiutare almeno 373 persone ad accedere ad acqua sicura e affidabile
            <a href="#" class="more">Per saperne di più »</a><br><br>
            Previsto per luglio 2021
          </p>
          <a href="#" class="btn">Aiuta questa comunità</a>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <a href="https://thewaterproject.org/community/projects/sierra-leone/well-rehabilitation-wash-project-21526">
            <img class="img-responsive" src="../img/lungi.jpg" width="100%"></a>
        </div>
       
        <div class="card-body">
          <p style="font-size:20px;">Lungi, Rosint, COG Prophecy Primary School</p>
          <p style="color:#696e6d;text-align:left;">Sierra Leone</p>
          <p class="more">
            Fornire un pozzo trivellato e una pompa manuale per aiutare almeno 384 persone ad accedere ad acqua sicura e affidabile.
            <a href="#">Per saperne di più »</a><br><br>
            Previsto per luglio 2021
          </p>
          <a href="#" class="btn">Aiuta questa comunità</a>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <a href="https://thewaterproject.org/community/projects/kenya/rainwater-catchment-wash-project-21471">
            <img class="img-responsive" src="../img/kako.jpg" width="100%"></a>
        </div>
        
        <div class="card-body">
          <p style="font-size:20px;">Kako Special School for the Mentally</p><br>
          <p style="color:#696e6d;text-align:left;">Sierra Leone</p>
          <p class="more">
            Fornire un pozzo trivellato e una pompa manuale per aiutare almeno 384 persone ad accedere ad acqua sicura e affidabile.
            <a href="#">Per saperne di più »</a><br><br>
            Previsto per luglio 2021
          </p>
          <a href="#" class="btn">Aiuta questa comunità</a>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <a href="https://thewaterproject.org/community/projects/kenya/spring-protection-wash-project-21313">
            <img class="img-responsive" src="../img/khunyiri.jpg" width="100%"></a>
        </div>
       
        <div class="card-body">
          <p style="font-size:20px;">Khunyiri Community,Edward Spring</p>
          <p style="color:#696e6d;text-align:left;">Kenya</p>
          <p class="more">
            Fornire una sorgente protetta per aiutare almeno 500 persone ad accedere ad acqua sicura e affidabile.
            <a href="#">Per saperne di più »</a><br><br>
            Previsto per settembre 2021
          </p>
          <a href="#" class="btn">Aiuta questa comunità</a>
        </div>
      </div>
    </div>
    <p style="text-align:center;font-size:18px;text-decoration:none;" class="more"><a href="https://webdev19.dibris.unige.it/~S4691028/php/seeprojects.php">Vedi altri progetti »</a></p>
  </div>

  <label for="toggle" class="show-btn" onclick="window.open('subscribe_newsletter.php','popup','width=700.height=200, scrollbars=1')">inscriviti alla newsletter</label>

</body>
<br><br><br>
<footer>
  <p>
    Copyright &copy 2021 by Danny k. for AcquAction Data. All Rights Reserved.
  </p>
</footer>

</html>