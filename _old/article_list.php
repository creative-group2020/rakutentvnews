<li>
  <article>
    <a href="<$mt:EntryPermalink$>">
    <figure class="entry-image">
      <div class="inner" style="background:url(<mt:If tag="CustomFieldValue" identifier="blog_entry_ogp_image"><mt:CustomFieldAsset identifier="blog_entry_ogp_image"><$mt:AssetThumbnailURL$></mt:CustomFieldAsset><mt:Else><mt:EntryAssets type="image" sort_order="ascend" limit="1"><$mt:AssetThumbnailURL$><mt:Else><$mt:BlogRelativeURL$>common/images/noimage_ogp.png</mt:EntryAssets></mt:If>) center no-repeat; background-size:contain;">
        <img src="https://im.akimg.tv.rakuten.co.jp/img/news/img.png" alt="">
      </div>
    </figure>
    <div class="entry-detail">
      <div class="entry-meta">
        <div class="entry-dateWrap">
          <!---<div class="entry-author">
            <figure>
              <img src="<mt:If tag="CustomFieldValue" identifier="writer_profilephoto"><mt:CustomFieldAsset identifier="writer_profilephoto"><$mt:AssetURL$></mt:CustomFieldAsset><mt:elseIf tag='AuthorUserpicURL' square="1"><$mt:AuthorUserpicURL$><mt:Else><$mt:BlogRelativeURL$>common/images/noimage-90.png</mt:If>" width="40" height="auto">
            </figure>
            <p><mt:If tag="CustomFieldValue" identifier="writer_name"><$mt:CustomFieldValue identifier="writer_name"$><mt:Else><$mt:EntryAuthorDisplayName escape='html'$></mt:If></p>
          </div>-->
        <mt:If tag="EntryCategories"><p class="label category"><mt:EntryCategories type="primary"><$mt:CategoryLabel escape="html"$></mt:EntryCategories></p></mt:if>
          <p class="entry-date">
            <time datetime="<$mt:EntryDate format_name='iso8601'$>"><$mt:EntryDate format="%x"$></time>
          </p>
        </div>
      </div>
      <h3 class="entry-title"><$mt:EntryTitle escape="html"$></h3>
    </div>
    </a>
  </article>
</li>
  <mt:EntriesFooter>
  <nav class="page-navigation">
      <ul class="page-navigation-list">
      <mt:PaginationHasPrevious>
      <li class="page-navigation-list-item page-navigation-prev"><a href="<$mt:PaginationPreviousURL$>" rel="prev">前の<$mt:GetVar name="entries_per_page"$>件</a></li>
      </mt:PaginationHasPrevious>
      <mt:PaginationHasNext>
      <li class="page-navigation-list-item page-navigation-next"><a href="<$mt:PaginationNextURL$>" rel="next">次の<$mt:GetVar name="entries_per_page"$>件</a></li>
      </mt:PaginationHasNext>
    </ul>
  </nav>
  </mt:EntriesFooter>