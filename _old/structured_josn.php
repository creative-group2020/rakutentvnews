<mt:if name="entry_template"><mt:Ignore><!-- 記事だったら --></mt:Ignore>

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "NewsArticle",
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "<$mt:EntryPermalink encode_html="1"$>"
    },
    "headline": "<$mt:EntryTitle encode_html="1"$> - <$mt:BlogName encode_html="1"$>",
    "image": [
      "<mt:If tag="CustomFieldValue" identifier="blog_entry_ogp_image"><mt:CustomFieldAsset identifier="blog_entry_ogp_image"><$mt:AssetThumbnailURL width="1200"$></mt:CustomFieldAsset><mt:Else><mt:EntryAssets type="image" sort_order="ascend" limit="1"><$mt:AssetThumbnailURL width="1200"$><mt:Else><$mt:BlogURL encode_html="1"$>common/images/noimage_ogp.png</mt:EntryAssets></mt:If>"
    ],
		"datePublished": "<$mt:EntryDate format_name="iso8601"$>",
    "dateModified": "<$mt:EntryDate format_name="iso8601"$>",
    "author": {
      "@type": "Person",
			"name": "Rakuten TV NEWS"
    },
     "publisher": {
      "@type": "Organization",
      "name": "Rakuten TV",
      "logo": {
        "@type": "ImageObject",
				"url": "https://im.akimg.tv.rakuten.co.jp/img/news/pub_logo.jpg",
        "width": 1198,
        "height": 630
      }
    },
    "description": "<$mt:EntryExcerpt$>"
  }
</script>

</mt:if><mt:Ignore><!-- 終わり --></mt:Ignore>