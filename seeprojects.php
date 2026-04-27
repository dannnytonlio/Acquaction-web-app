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
  <meta http-equiv="refresh" content="900;url=logout.php" />
  <title>AcquAction-home</title>
  <link rel="stylesheet" href="../css/seeprojects.css">
  <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

</head>

<body>

  <br></br>
  <div class="container-1">
    <img class="head" src="../img/funding-catalog.jpg" alt="">
    <div class="text_center">
      <h1 style="font-size:36px;padding-top:10px;margin-bottom:0px;">Scegli una comunità da aiutare</h1>
      <br>
      <p style="font-size:18px;">Scegli un villaggio o una scuola specifica con cui collaborare.
        Fai una donazione di qualsiasi importo e poi segui mentre scorre acqua pulita!</p>
    </div>

  </div>
  <div class="clear"></div>

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
          <p style="font-size:20px;">Khunyiri Community, Edward Spring</p>
          <p style="color:#696e6d;text-align:left;">Camerun</p>
          <p class="more">
            Fornire una sorgente protetta per aiutare almeno 500 persone ad accedere ad acqua sicura e affidabile.
            <a href="#">Per saperne di più »</a><br><br>
            Previsto per settembre 2021
          </p>
          <a href="#" class="btn">Aiuta questa comunità</a>
        </div>
      </div>
    </div>

  </div>
  <div class="clear"></div>

  <div class="container-2">
    <div class="row">
      <div class="card">
        <div class="card-header">
          <a href="https://thewaterproject.org/community/projects/kenya/new-borehole-wash-project-21361">
            <img class="img-responsive" src="../img/indangalasia.jpg" width="100%"></a>
        
        </div>
        <div class="card-body">
          <p style="font-size:20px;">Indangalasia AC Primary School</p>
          <p style="color:#696e6d;text-align:left;">Kenya</p>
          <p class="more">
            Fornire un pozzo trivellato e una pompa a mano per aiutare almeno 1165 persone a trovare accesso ad acqua sicura e affidabile
            <a href="#" class="more">Per saperne di più »</a><br><br>
            Previsto per luglio 2021
          </p>
          <a href="#" class="btn">Aiuta questa comunità</a>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <a href="https://thewaterproject.org/community/projects/kenya/spring-protection-wash-project-21325">
            <img class="img-responsive" src="../img/Elwasambi.jpg" width="100%"></a>
        </div>
        <div class="card-body">
          <p style="font-size:20px;">Elwasambi Community, Kadi Spring</p>
          <p style="color:#696e6d;text-align:left;">Ghana</p>
          <p class="more">
            Fornire un pozzo trivellato e una pompa manuale per aiutare almeno 280 persone ad accedere ad acqua sicura e affidabile.
            <a href="#">Per saperne di più »</a><br><br>
            Previsto per Agosto 2021
          </p>
          <a href="#" class="btn">Aiuta questa comunità</a>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <a href="https://thewaterproject.org/community/projects/kenya/new-borehole-wash-project-21360">
            <img class="img-responsive" src="../img/St.jpg" width="100%"></a>
        </div>
        <div class="card-body">
          <p style="font-size:20px;">St. Peter's Khabakaya Primary School</p>
          <p style="color:#696e6d;text-align:left;">kenya</p>
          <p class="more">
            Fornire un pozzo trivellato e una pompa manuale per aiutare almeno 1138 persone ad accedere ad acqua sicura e affidabile.
            <a href="#">Per saperne di più »</a><br><br>
            Previsto per Agosto 2021
          </p>
          <a href="#" class="btn">Aiuta questa comunità</a>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <a href="https://thewaterproject.org/community/projects/sierra-leone/well-rehabilitation-wash-project-21563">
            <img class="img-responsive" src="../img/Masoila.jpg" width="100%"></a>
        </div>
        <div class="card-body">
          <p style="font-size:20px;">Masoila, #1023 Airport Ferry Road, Lion</p>
          <p style="color:#696e6d;text-align:left;">Sierra Leone</p>
          <p style="font-size:14.5px;" class="more">
            Fornire un pozzo trivellato e una pompa a mano per aiutare almeno 687 persone a trovare accesso ad acqua sicura e affidabile.
            <a href="#">Per saperne di più »</a><br><br>
            Previsto per settembre 2021
          </p>
          <a href="#" class="btn">Aiuta questa comunità</a>
        </div>
      </div>
    </div>

  </div>
  <div class="clear"></div>

  <div class="container-2">
    <div class="row">
      <div class="card">
        <div class="card-header">
          <a href="https://thewaterproject.org/community/projects/kenya/hand-dug-well-wash-project-21433">
            <img class="img-responsive" src="../img/Mbiuni.jpg" width="100%"></a>
        
        </div>
        <div class="card-body">
          <p style="font-size:20px;">Mbiuni Community C</p>
          <p style="color:#696e6d;text-align:left;">Togo</p>
          <p class="more">
            Fornire un bacino di raccolta dell'acqua piovana per aiutare almeno 350 persone ad accedere ad acqua sicura e affidabile
            <a href="#" class="more">Per saperne di più »</a><br><br>
            Previsto per Novembre 2021
          </p>
          <a href="#" class="btn">Aiuta questa comunità</a>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <a href="https://thewaterproject.org/community/projects/kenya/spring-protection-wash-project-21321">
            <img class="img-responsive" src="../img/Mwituwa.jpg" width="100%"></a>
        </div>
        <div class="card-body">
          <p style="font-size:20px;">Mwituwa Community, Onyango Spring</p>
          <p style="color:#696e6d;text-align:left;">Nigeria</p>
          <p class="more">
            Fornire una sorgente protetta per aiutare almeno 210 persone a trovare accesso ad acqua sicura e affidabile.
            <a href="#">Per saperne di più »</a><br><br>
            Previsto per Dicembre 2021
          </p>
          <a href="#" class="btn">Aiuta questa comunità</a>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <a href="https://thewaterproject.org/community/projects/kenya/spring-protection-wash-project-21028">
            <img class="img-responsive" src="../img/Makhwabuyu.jpg" width="100%"></a>
        </div>
        <div class="card-body">
          <p style="font-size:20px;">Makhwabuyu Community, Shirandula Spring</p>
          <p style="color:#696e6d;text-align:left;">Zimbabwe</p>
          <p class="more">
            Fornire una sorgente protetta per aiutare almeno 210 persone a trovare accesso ad acqua sicura e affidabile.
            <a href="#">Per saperne di più »</a><br></br>
            Previsto per Diecmbre 2021
          </p>
          <a href="#" class="btn">Aiuta questa comunità</a>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <a href="https://thewaterproject.org/community/projects/kenya/hand-dug-well-wash-project-21419">
            <img class="img-responsive" src="../img/Nduumoni.jpg" width="100%"></a>
        </div>
        <div class="card-body">
          <p style="font-size:20px;">Nduumoni Community C</p>
          <p style="color:#696e6d;text-align:left;">Chad</p>
          <p class="more">
            Fornire un pozzo scavato e una pompa manuale per aiutare almeno 350 persone a trovare accesso ad acqua sicura e affidabile.
            <a href="#">Per saperne di più »</a><br><br>
            Previsto per Novembre 2021
          </p>
          <a href="#" class="btn">Aiuta questa comunità</a>
        </div>
      </div>
    </div>

  </div>

</body>
<footer>
  <p>
    Copyright &copy 2021 by Danny k. for AcquAction Data. All Rights Reserved.
  </p>
</footer>

</html>