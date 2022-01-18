<$mt:Include module="共通変数" strip_linefeeds="1"$>
<!DOCTYPE html>
<html lang="ja" itemscope itemtype="http://schema.org/WebPage">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><$mt:ArchiveTitle encode="html"$></title>
  <meta name="generator" content="<$mt:ProductName version="1"$>">
  <meta name="description" content="<$mt:BlogDescription remove_html="1" encode_html="1"$>">
  <meta name="keywords" content="<$mt:GetVar name="meta_keywords"$>">
　<$mt:Include module="Google アナリティクス"$>
  <link rel="shortcut icon" type="image/x-icon" href="<$mt:BlogURL encode_html="1"$>common/images/favicon.ico">
  <link rel="start" href="<$mt:BlogURL encode_html="1"$>">
  <link rel="alternate" type="application/atom+xml" title="Recent Entries" href="<$mt:Link template="feed_recent"$>">
  <$mt:CanonicalLink$>
  <meta property="og:type" content="article">
  <meta property="og:locale" content="<$mt:BlogLanguage setvar="blog_lang"$><mt:If name="blog_lang" eq="ja">ja_JP<mt:Else><$mt:Var name="blog_lang"$></mt:If>">
  <meta property="og:title" content="<$mt:ArchiveTitle encode_html="1"$> - <$mt:BlogName encode_html="1"$>">
  <meta property="og:url" content="<$mt:ArchiveLink encode_html="1"$>">
  <meta property="og:description" content="<$mt:BlogDescription remove_html="1" encode_html="1"$>">
  <meta property="og:site_name" content="<$mt:BlogName encode_html="1"$>">
  <meta property="og:image" content="<$mt:BlogURL encode_html="1"$>common/images/noimage_ogp.png">
  <meta property="fb:app_id" content="<$mt:Var name='fb_app_id'$>">
    <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@<$mt:Var name='twitter_via'$>">
  <meta name="twitter:title" content="<$mt:ArchiveTitle encode_html="1"$> - <$mt:BlogName encode_html="1"$>">
  <meta name="twitter:description" content="<$mt:BlogDescription remove_html="1" encode_html="1"$>">
  <meta name="twitter:image" content="<$mt:BlogURL encode_html="1"$>common/images/noimage_ogp.png">
  <!-- Microdata -->
  <meta itemprop="description" content="<$mt:BlogDescription remove_html="1" encode_html="1"$>">
  <link itemprop="url" href="<$mt:ArchiveLink encode_html="1"$>">
  <link itemprop="image" href="<$mt:BlogURL encode_html="1"$>common/images/noimage_ogp.png">
  <$mt:Include module="ヘッダースクリプト"$>
</head>
<body>
　<$mt:Include module="GAbody"$>
  <$mt:Include module="ヘッダー"$>
　<!-- content: start -->
  <div id="content" class="clearfix">
  <$mt:Include module="パンくず"$>
    <div id="main-wrapper">
      <main role="main">
        <h1 class="page-title">&ldquo;<$mt:ArchiveTitle encode="html"$>&rdquo;の記事一覧</h1>

        <section id="top-entries" class="entrylist">
          <ul class="clearfix" id="block-entries">
            <mt:Entries paginate_by="$entries_per_page">
              <$mt:Include module="記事一覧"$>
            </mt:Entries>
          </ul>
        </section>
      </main>
    </div>
    <aside>
      <$mt:Include module="サイドバー"$>
    </aside>
  </div>
  <!-- content: end -->
  <$mt:Include module="フッター"$>
</body>
</html>
