<!DOCTYPE html>
<html>
<head>
	<title>GALLERY :: battlecruiser.co</title>
  
<!-- META META META META META -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- made by www.metatags.org -->
<meta name="description" content="The BattleCruiser // HARDCORE4LIFE // Hardcore Rave Music // by - the8woodcutter">
<meta name="keywords" content="battlecruiser, hardcore, teckno, hardrave, spaceman, hardtekno, hardteckno, rave, hardcore4life, electronic, hard electronic, the8woodcutter">
<meta name="author" content="The Woodcutter">
<meta name="robots" content="index, nofollow">
<!-- Hardcore Rave, Hardrave, Battlecruiser, the8woodcutter -->

<meta property="og:title" content=". bΛttLЄkЯu¡zЄЯ ." />
<meta property="og:image" content="mages/crowd2.jpg" />
<meta property="og:url" content="https://battlecruiser.co" />
<meta property="og:image:width" content="900px" />
<meta property="og:description" content="The BattleCruiser // HARDCORE4LIFE // Hardcore Rave Music // by - the8woodcutter">
 <!-- OTHER HEAD STUFF -->
<link rel="icon" type="image/png" href="../images/layout/Color-08.png">
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">

<!-- STYLES -->
<style type="text/css">
body { 
  border: 0.85vw dotted2 #ACBCCB;

/*  Old theme*/
/*  border: 0.85vw solid #FCBC9B;*/
/*  background-repeat:;*/
/*  background-size:100% auto;*/
/*  background-image:url('../images/layout/gallery-bg.jpg');*/

/*  NEW THEME*/
  background-image:url('images/0ce656c1-6f62-4e81-83ab-375f43bb5fac.jpg');
  background-repeat: repeat;
  background-size:25% auto;
}

@font-face {
    font-family: 'PlainCred';
    src: url('/PLAINCRED.ttf');
/*    font-weight: normal;
    font-style: normal;*/
}

#photos {
  /* Prevent vertical gaps */
  line-height: 0;
  -webkit-column-count: 4 ;
  -webkit-column-gap:   0px;
  -moz-column-count:    4;
  -moz-column-gap:      0px;
  column-count:         4;
  column-gap:           0px;  
}

#photos img {
  /* Just in case there are inline attributes */
  width: 93% !important;
  height: auto !important;
  margin: 0.63vw;
  border-radius: 5px;
  border: 2px #343434 solid;
}

@media (max-width: 1900px) {
  #photos {
  -moz-column-count:    4;
  -webkit-column-count: 4;
  column-count:         4;
  }
}

@media (max-width: 1200px) {
  #photos {
  -moz-column-count:    4;
  -webkit-column-count: 4;
  column-count:         4;
  }
}
@media (max-width: 1000px) {
  #photos {
  -moz-column-count:    3;
  -webkit-column-count: 3;
  column-count:         3;
  }
}
@media (max-width: 800px) {
  #photos {
  -moz-column-count:    2;
  -webkit-column-count: 2;
  column-count:         2;
  }
}
@media (max-width: 400px) {
  #photos {
  -moz-column-count:    1;
  -webkit-column-count: 1;
  column-count:         1;
  }
}
#footer {
  color: #FDFDFD;
  font-size: 1.6vw;
  font-family: PLAINCRED;
}
#footer a:hover,a:active {
  color: #FFCDCB;
}
</style>
</head>
<body>
<section id="photos">
  <?php
    $cmd = "python3 files.py";
    $output = [];

    exec($cmd, $output);
    foreach($output as $filename) {
      if($filename) {
        echo "<a href='images/$filename' target='_blank' alt='$filename'><img src='images/$filename' /></a>";
      }
    } 
  ?>
</section>
<div>
  <center>
    <span id="footer">
        <font style="background:#454545;">
          <a href="#" style="">>! battlecruiser.co !<</a>
        </font>
        <font style="background:#2489cf;">
          <a href="https://dock.battlecruiser.co">>! dock.battlecruiser.co !<</a>
        </font>
        <br/>
        <font style="background:#C27724;">
          <a href="https://the8woodcutter.sh/blog/">>! blog.battlecruiser.co !<</a>
        </font>
        <font style="background:#eb4242;">
          <a href="/gallery">>! /gallery !<</a>
        </font>
    </span>
  </center>
</div>
</body>
</html>
