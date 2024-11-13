<?php
// スクリプトが60秒以上の遅延
// curl https://d1zg773tvuk57c.cloudfront.net/cloudfront-test/no-response.php
sleep(65); // 65秒間スリープ
echo "Response after 65 seconds";
?>
