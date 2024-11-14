<?php
header("Content-Type: text/plain");
header('Cache-Control: no-cache');

// ストリーミング開始メッセージ
ob_start();
echo "Starting stream...\n";
ob_flush();
flush();

// 2分間、10秒ごとにメッセージを送信
$total_time = 120; // 合計実行時間（秒）
$interval = 10;    // メッセージ送信間隔（秒）

for ($elapsed = 0; $elapsed < $total_time; $elapsed += $interval) {
    // 現在の経過時間を送信
    echo "Elapsed time: {$elapsed} seconds\n";
    ob_flush();
    flush();

    // 次の送信まで待機
    sleep($interval);
}

// 完了メッセージ
echo "Streaming complete.\n";
ob_flush();
flush();
?>