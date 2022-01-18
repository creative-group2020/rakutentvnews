<?php $top = "on"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rakuten TV NEWS</title>
  <link rel="dns-prefetch" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://im.akimg.tv.rakuten.co.jp/static/common/css/plugin/swiper.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="https://im.akimg.tv.rakuten.co.jp/js/jquery-3.3.1.min.js"></script>
  <script src="https://im.akimg.tv.rakuten.co.jp/static/common/js/plugin/jquery.inview.min.js"></script>
</head>
<body class="rakutentv-news">
  <div class="rakutentv-news-wrap">
    <header>
      <?php include('./header.php') ?>
    </header>
    <?php include('./breadcrumb.php') ?>
    <main>
      <?php include('./article/type1.php') ?>
    </main>
    <footer>
      <?php include('./footer.php') ?>
    </footer>
  </div>

  <script src="https://im.akimg.tv.rakuten.co.jp/static/common/js/plugin/swiper.min.js"></script>
  <script src="./js/script.js"></script>

</body>
</html>