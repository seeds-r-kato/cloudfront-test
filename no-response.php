<?php
// スクリプトが60秒以上の遅延
// curl -v https://your-cloudfront-domain.com/timeout-test.php
sleep(65); // 65秒間スリープ
echo "Response after 65 seconds";
?>
