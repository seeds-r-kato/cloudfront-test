<?php
// 無限ループで30秒ごとにレスポンス
// 2分経ったら、61秒間の遅延を挟む
$time = 0;
while (true) {
    echo "response at " . $time . " seconds\n";
    ob_flush();
    flush();
    sleep(30);
    $time += 30;
    if ($time === 120) {
        sleep(61);
        echo "Response after 61 seconds";
        break;
    }
}
?>