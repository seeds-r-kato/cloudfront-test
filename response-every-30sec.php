<?php
// 無限ループで30秒ごとにレスポンス
// 2分半経ったらタイムアウト
$time = 0;
while (true) {
    echo "response at " . $time . " seconds\n";
    ob_flush();
    flush();
    sleep(30);
    $time += 30;
    if ($time > 150) {
        break;
    }
}
?>
