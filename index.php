<?php
function is_dir_empty($dir) {
  if (!is_readable($dir)) return NULL; 
  $handle = opendir($dir);
  while (false !== ($entry = readdir($handle))) {
    if ($entry != "." && $entry != "..") {
      return FALSE;
    }
  }
  return TRUE;
}

$currentSelfiesDir = './aktuell/';

?>
<html>
<head>
<title>Selfies Studentenclub Stecker</title>
<style type="text/css">

@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
	background-color: black;
	font-family: "Open Sans", Arial, Helvetica;
	text-align: center;
	margin-top: 30px;
	color: white;
}

h1{
	font-weight: 400;
	font-size: 32pt;
}

div#btnContainer{
	margin-top: 60px;
}

div#btnContainer a{
	display: block;
	margin: 15px auto;
	width: 300px;
	padding: 20px 35px;
	background-color: #FF4500;
	text-decoration: none;
	color: white;
	font-size: 20pt;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
	
}

div#btnContainer a img{
	margin-right: 10px;
}


div#btnContainer a.recent{
	background-image: linear-gradient(to top, #3f710f, #72c91c);
}

div#btnContainer a.recent:hover{
        background-image: linear-gradient(to top, #549516, #72c91c);
}

div#btnContainer a.archive{
	background-image: linear-gradient(to top, #8f3600, #ff6000);
}

div#btnContainer a.archive:hover{
        background-image: linear-gradient(to top, #ad4302, #ff6000);
}
</style>
</head>

<body>

<img src="media/Stecker_white.png" alt="" width="400">
<h1>Stecker-Selfieautomat</h1>

<div id="btnContainer">
<?php if(!is_dir_empty($currentSelfiesDir)) { ?>
<a href="<?php echo $currentSelfiesDir ?>" class="recent">
	<img src="media/iconmonstr-picture-multi-5-icon-32.png" alt="" width="32">	
	Aktuelle Fotos
</a>
<?php } ?>
<a href="./archiv/2023-09-02-Stecker-Abschlussfest" class="recent">
	<img src="media/iconmonstr-picture-multi-5-icon-32.png" alt="" width="32">	
	Abschlussfest<br>02.09.2023
</a>
<a href="./archiv" class="archive">
	<img src="media/iconmonstr-archive-6-icon-32.png" alt="" width="32">
	Archiv
</a>
</div>
</body>
</html>
