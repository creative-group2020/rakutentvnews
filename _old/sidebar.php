<mt:Entries limit="5" field:entry_recommend="1">
<mt:EntriesHeader>
<section id="side-recentpost" class="side-entrylist">
    <h2>イチオシ記事</h2>
    <ul>
</mt:EntriesHeader>
      <li>
        <a href="<$mt:EntryPermalink$>">
          <figure style="background:url(<mt:If tag="CustomFieldValue" identifier="blog_entry_ogp_image"><mt:CustomFieldAsset identifier="blog_entry_ogp_image"><$mt:AssetThumbnailURL$></mt:CustomFieldAsset><mt:Else><mt:EntryAssets type="image" sort_order="ascend" limit="1"><$mt:AssetThumbnailURL$><mt:Else><$mt:BlogRelativeURL$>common/images/noimage-90.png</mt:EntryAssets></mt:If>) center no-repeat; background-size:contain;">
            <img src="https://im.akimg.tv.rakuten.co.jp/img/news/img.png" alt="<$mt:EntryTitle escape='html'$>" class="entry-thumbnail">
          </figure>
          <h3><$mt:EntryTitle escape="html"$></h3>
        </a>
      </li>
<mt:EntriesFooter>
      </ul>
</section>
 </mt:EntriesFooter>
</mt:Entries>

  <section id="side-categories" class="categorylist">
  <nav>
  <h2>カテゴリ</h2>
  <ul>
      <mt:TopLevelCategories>
      <mt:If tag="CategoryCount">
      <li><a href="<$mt:CategoryArchiveLink$>"><$mt:CategoryLabel encode_html="1"$></a><span>（<$mt:ArchiveCount$>）</span>
      <mt:Else>
      <!--<li><p class="nolink"><$mt:CategoryLabel encode_html="1"$></p>-->
      </mt:If>
      <mt:SubCategories>
      <mt:SubCatIsFirst><ul class="submenu"></mt:SubCatIsFirst>
      <mt:If tag="CategoryCount">
      <li class="catdepth-<$mt:CategoryDepth$>"><a href="<$mt:CategoryArchiveLink$>"><$mt:CategoryLabel encode_html="1"$></a><span>（<$mt:ArchiveCount$>）</span>
      <mt:Else>
      <!--<li class="catdepth-<$mt:CategoryDepth$>"><p class="nolink"><$mt:CategoryLabel encode_html="1"$></p>-->
      </mt:If>
      <$mt:SubCatsRecurse$></li>
      <mt:SubCatIsLast></ul></mt:SubCatIsLast>
      </mt:SubCategories>
      </li>
      </mt:TopLevelCategories>
  </ul>
  
</nav>
</section>

<mt:ArchiveList archive_type="Monthly">
  <mt:ArchiveListHeader>
  <section id="side-recentpost" class="categorylist">
  <nav>
    <h2>月別アーカイブ</h2>
    <ul>
  </mt:ArchiveListHeader>
      <li><a href="<$mt:ArchiveLink$>"><$mt:ArchiveTitle escape="html"$></a><span>（<$mt:ArchiveCount$>）</span></li>
  <mt:ArchiveListFooter> 
    </ul>   
  </nav>
  </section>
  </mt:ArchiveListFooter>
</mt:ArchiveList>
