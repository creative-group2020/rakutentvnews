<mt:SetVarBlock name="recommend"><mt:Entries><$mt:CustomFieldValue identifier="entry_recommend"$></mt:Entries></mt:SetVarBlock>
<mt:If name="recommend" ne="0">
  <h2 class="swiper__title"><strong>イチオシ</strong>記事</h2>
  <div class="swiperWrap">
  <mt:Entries sort_order="descend" field:entry_recommend="1" limit="3">
    <mt:EntriesHeader>
    <div class="swiper-container">
      <div class="swiper-wrapper">
    </mt:EntriesHeader>
          <div class="swiper-slide">
            <a href="<$mt:EntryPermalink$>">
              <div class="swiper-slide__imgWrap" style="background:url(<mt:If tag="CustomFieldValue" identifier="blog_entry_ogp_image"><mt:CustomFieldAsset identifier="blog_entry_ogp_image"><$mt:AssetThumbnailURL$></mt:CustomFieldAsset><mt:Else><mt:EntryAssets type="image" sort_order="ascend" limit="1"><$mt:AssetThumbnailURL$><mt:Else><$mt:BlogRelativeURL$>common/images/noimage_ogp.png</mt:EntryAssets></mt:If>) center no-repeat; background-size:contain;">
                <img src="https://im.akimg.tv.rakuten.co.jp/img/news/img.png" alt="" class="swiper__img">
              </div>
              <div class="swiper__entry">
                <div class="swiper__entryWrap">
                  <p class="swiper__entryDate">
                    <time datetime="<$mt:EntryDate format_name='iso8601'$>"><$mt:EntryDate format="%x" class="swiper__entryDate"$></time>
                  </p>
                    <h3 class="swiper__entryTitle"><$mt:EntryTitle escape="html" class="swiper__entryTitle"$></h3>
                </div>
              </div>
            </a>
          </div>
          <!-- background -->
    <mt:EntriesFooter>
      </div>
        <!-- ページネーション -->
        <div class="swiper-pagination"></div>
        <!-- 前後スライドへのナビゲーションボタン -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    </mt:EntriesFooter>
</mt:Entries>
</div>
</mt:If>
