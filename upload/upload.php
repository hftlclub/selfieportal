<?php
$config = json_decode(file_get_contents('./upload.config.json'), TRUE);
//print_r($_FILES);
// check for access secret
if(!in_array($_GET['secret'], $config['secrets'])) {
    header('HTTP/1.1 401 Unauthorized');
    die('Unauthorized');
}

// check for HTTP method (only POST allowed)
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    exit();
}


date_default_timezone_set('Europe/Berlin');

$file = $_FILES['file'];
$mimeType = mime_content_type($file['tmp_name']);
// check for allowed MIME type
if(!in_array($mimeType, $config['allowedMimeTypes'])) {
    header('HTTP/1.1 400 Bad Request');
    die('File type not allowed');
}

$uploadFile = 'selfie-' . date('Y-m-d-His-') . rand(1, 10) . '.jpg';
move_uploaded_file($file['tmp_name'], $config['uploadDir'] . $uploadFile);

exit();
?>

