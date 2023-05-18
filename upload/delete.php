#!/usr/bin/php-cgi
<?php

$json = file_get_contents('php://input');
$data = json_decode($json, true);

// 필요한 정보가 전달되었는지 확인
// if (!isset($_DELETE['filename'])) {
//     header('Content-Type: text/plain');
//     echo 'Invalid request';
//     exit;
// }

if ($data !== null) {
    // JSON 데이터가 성공적으로 파싱되었을 때의 처리
    $filename = $data['filename'];
    // 추가적인 작업 수행
} else {
    header('Content-Type: text/plain');
    echo 'Invalid request';
    exit;
}

// 파일 이름 추출

// $filename = $_DELETE['filename'];
// echo 'filename';
// echo $filename;

// 파일 삭제 작업 수행
if (file_exists($filename)) {
    unlink($filename);
    header('Content-Type: text/plain');
    echo 'File deleted successfully';
} else {
    header('Content-Type: text/plain');
    echo 'File not found';
}

?>