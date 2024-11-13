<?php
// ファイルアップロード用
// curl -v -X POST -F "file=@/path/to/large-file" https://your-cloudfront-domain.com/upload-test.php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    // アップロードされたファイルを保存
    move_uploaded_file($_FILES['file']['tmp_name'], '/tmp/uploaded_file');
    sleep(65); // アップロード処理に65秒の遅延
    echo "Upload completed";
} else {
    echo "No file uploaded";
}
?>
