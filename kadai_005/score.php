<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    $score_ttl = 80 + 60 + 55 + 40 + 100 + 25 + 80 + 95 + 30 + 60;
    echo '<br>';
    $score_averae = $score_ttl / 10;
    echo "平均点は{$score_averae}です。";
    ?>
  </p>
</body>
</html>