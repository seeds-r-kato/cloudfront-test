<?php
// ファイルアップロード用
// ec2 curl -X POST -F "file=@/path/to/large-file" http://ec2-52-199-123-36.ap-northeast-1.compute.amazonaws.com/cloudfront-test/upload-file-over-time.php
// cloudfront curl -X POST -F "file=@/path/to/large-file" https://d1zg773tvuk57c.cloudfront.net/cloudfront-test/upload-file-over-time.php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    // アップロードされたファイルを保存
    if ($_FILES['file']['error'] !== UPLOAD_ERR_OK) {
        echo "Failed to upload file with error code: " . $_FILES['file']['error'];
        exit;
    }
    $uploadDir = '/var/www/html/uploads/';
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        echo "Upload completed";
    } else {
        echo "Failed to move uploaded file";
    }
} else {
    echo ("Request method is not POST: " . $_SERVER['REQUEST_METHOD']);
    echo ("Uploaded file: " . $_FILES['file']);
    echo "No file uploaded";
}
?>
