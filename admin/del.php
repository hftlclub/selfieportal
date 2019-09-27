<?php
die("Not available");

$close = false;


$file = urldecode($_GET['file']);

//only allow deletion in /archiv and /selfi
if(substr($file, 0, 7) != '/archiv' AND substr($file, 0, 6) != '/selfi'){
	die('Are you serious?!');
}

$path = $_SERVER['DOCUMENT_ROOT'].$file;


//die if file does not exist
if(!file_exists($path)){
	die('File does not exist');
}

//check MIME type
$mime = finfo_file(finfo_open(FILEINFO_MIME_TYPE), $path);
if($mime != 'image/jpeg'){
	die('You can only delete JPEG');
}



///////////////
//ACTION

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	unlink($path);
	$close = true;
}


?>
<html>
<head>
<title>Delete image</title>
<style type="text/css">
body{
	font-family: Arial, Helvetica;
}

#confirmBox{
	padding: 20px;
	background-color: #FFA6B5;
	margin-bottom: 15px;
}

#confirmBox form input{
	font-size: 32pt;
}
</style>
</head>
<body>
<?php if($close){ ?>
<script type="text/javascript">
window.close();
</script>
<?php } ?>

<div id="confirmBox">
<strong>Soll das Bild wirklich gelöscht werden?</strong><br>
<form action="del.php?file=<?php echo urlencode($file) ?>" method="POST">
<input type="submit" value="Ja">
<input type="button" value="Nein" onClick="window.close()">
</form>
</div>

<img src="<?php echo $file ?>" height="375" width="500">

</body>
</html>
