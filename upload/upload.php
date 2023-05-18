<!-- <?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$uploads_dir = './uploads/';
	$filename = basename($_FILES['file']['name']);
	$upload_path = $uploads_dir . $filename;
	if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_path)) {
		echo 'success';
		http_response_code(200);
	} else {
		echo 'fail';
		http_response_code(500);
	}
}

?> -->



<?php
echo 'pass test==========================';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $targetDir = "uploads/";  // 파일을 저장할 디렉토리
  $targetFile = $targetDir . basename($_FILES["file"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

  // 파일 유효성 검사
  if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  } else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
      echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}
?>