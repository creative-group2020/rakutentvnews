<$mt:Include module="共通変数" strip_linefeeds="1"$>
<!DOCTYPE html>
<html lang="ja" itemscope itemtype="http://schema.org/WebPage">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><$mt:BlogName encode_html="1"$></title>
  <meta name="generator" content="<$mt:ProductName version="1"$>">
  <meta name="description" content="<$mt:BlogDescription remove_html="1" encode_html="1"$>">
  <meta name="keywords" content="<$mt:GetVar name="meta_keywords"$>">
  <$mt:Include module="Google アナリティクス"$>
  <link rel="shortcut icon" type="image/x-icon" href="https://im.akimg.tv.rakuten.co.jp/img/favicon.ico">
  <link rel="start" href="<$mt:BlogURL encode_html="1"$>">
  <link rel="alternate" type="application/atom+xml" title="Recent Entries" href="<$mt:Link template="feed_recent"$>">
  <$mt:CanonicalLink$>
  <meta property="og:type" content="website">
  <meta property="og:locale" content="<$mt:BlogLanguage setvar="blog_lang"$><mt:If name="blog_lang" eq="ja">ja_JP<mt:Else><$mt:Var name="blog_lang"$></mt:If>">
  <meta property="og:title" content="<$mt:BlogName encode_html="1"$>">
  <meta property="og:url" content="<$mt:BlogURL encode_html="1"$>">
  <meta property="og:description" content="<$mt:BlogDescription remove_html="1" encode_html="1"$>">
  <meta property="og:site_name" content="<$mt:BlogName encode_html="1"$>">
  <meta property="og:image" content="<$mt:BlogURL encode_html="1"$>common/images/noimage_ogp.png">
  <meta property="fb:app_id" content="<$mt:Var name='fb_app_id'$>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@<$mt:Var name='twitter_via'$>">
  <meta name="twitter:title" content="<$mt:BlogName encode_html="1"$>">
  <meta name="twitter:description" content="<$mt:BlogDescription remove_html="1" encode_html="1"$>">
  <meta name="twitter:image" content="<$mt:BlogURL encode_html="1"$>common/images/noimage_ogp.png">
  <!-- Microdata -->
  <meta itemprop="description" content="<$mt:BlogDescription remove_html="1" encode_html="1"$>">
　　<meta name="google-site-verification" content="RoQDjSDQ4JUWbYmhlkDHcWSj2XE-if7Vss9m4Y8h-7Q" />
  <link itemprop="url" href="<$mt:BlogURL encode_html="1"$>">
  <link itemprop="image" href="<$mt:BlogURL encode_html="1"$>common/images/noimage_ogp.png">
  <$mt:Include module="ヘッダースクリプト"$>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css" integrity="sha256-DBYdrj7BxKM3slMeqBVWX2otx7x4eqoHRJCsSDJ0Nxw=" crossorigin="anonymous" />
  </head>
<body>
　<$mt:Include module="GAbody"$>
  <$mt:Include module="メイン用ヘッダー"$>
  <!-- content: start -->
  <div id="content" class="clearfix">    
    <div id="main-wrapper">      
      <main role="main">
        <$mt:Include module="イメージスライダー"$>
        <section id="top-entries" class="entrylist">
        <h2 class="entrylist__title">新着記事</h2>
          <ul class="clearfix" id="block-entries">
            <mt:Entries paginate_by="$entries_per_page">
              <$mt:Include module="記事一覧"$>
            </mt:Entries>
          </ul>
        </section>
      
      	<section id="ranking-entries" class="entrylist">
          <h2 class="entrylist__title">アクセスランキング</h2>
          <$mt:Include module="アクセスランキング"$>
        </section>
      
      </main>
    </div>

    <aside>
      <$mt:Include module="サイドバー"$>
    </aside>
  </div>
  <!-- content: end -->
  <$mt:Include module="フッター"$>
    
  <!-- swiper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js" integrity="sha256-4sETKhh3aSyi6NRiA+qunPaTawqSMDQca/xLWu27Hg4=" crossorigin="anonymous"></script>
  <script>
  var mySwiper = new Swiper ('.swiper-container', {
      loop: <$mt:Var name='swipper_loop'$>, 
      speed: 600,
      slidesPerView: 1,
      spaceBetween: 0,
      direction: '<$mt:Var name='swipper_direction'$>',
      effect: '<$mt:Var name='swipper_effect'$>',
      autoplay: <$mt:Var name='swipper_autoplay'$>,
      // autoplay: {
      //   delay: 10000, // スライドが切り替わるまでの表示時間(ミリ秒)
      //   stopOnLast: false, // 最後のスライドまで表示されたら自動再生を中止するか
      //   disableOnInteraction: true // ユーザーのスワイプ操作を検出したら自動再生を中止するか
      // },
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });
  </script>
</body>
</html>
