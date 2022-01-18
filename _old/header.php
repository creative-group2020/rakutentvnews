<header id="globalheader">
	<div class="inner">
		<div class="naviwrap">
			<div class="logo"><a href="<$mt:BlogURL encode_html="1"$>">Rakuten TV News</a></div>
		</div>
    <span id="responsive-menu-button"></span>
    <nav role="navigation" id="globalnavi">
      <div id="navi-content">
        <ul id="left-to-right" class="dropmenu">
          <mt:TopLevelCategories>
          <mt:If tag="CategoryCount">
          <li class="catdepth-base"><a href="<$mt:CategoryArchiveLink$>"><$mt:CategoryLabel encode_html="1"$></a>
          <mt:Else>
          <li class="catdepth-base"><span class="nolink"><$mt:CategoryLabel encode_html="1"$></span>
          </mt:If>
          <mt:SubCategories>
          <mt:SubCatIsFirst><ul></mt:SubCatIsFirst>
          <mt:If tag="CategoryCount">
          <li class="catdepth-<$mt:CategoryDepth$>"><a href="<$mt:CategoryArchiveLink$>"><$mt:CategoryLabel encode_html="1"$></a>
          <mt:Else>
          <li class="catdepth-<$mt:CategoryDepth$>"><span class="nolink"><$mt:CategoryLabel encode_html="1"$></span>
          </mt:If>
          <$mt:SubCatsRecurse$></li>
          <mt:SubCatIsLast></ul></mt:SubCatIsLast>
          </mt:SubCategories>
          </li>
          </mt:TopLevelCategories>
          <mt:TopLevelFolders>
              <li>
                <a class="folder-label" data-dropdown="menu-<$mt:FolderBasename$>" aria-controls="menu-<$mt:FolderBasename$>" aria-expanded="false"><$mt:FolderLabel encode_html="1"$></a>
                <ul data-dropdown-content aria-hidden="true" tabindex="-1">
                <mt:Pages sort_order="ascend">
                  <li><a href="<$mt:PagePermalink$>"><$mt:PageTitle encode_html="1"$></a></li>
                </mt:Pages>
                <mt:SubFolders>
                <li><span class="folder-label"><$mt:FolderLabel encode_html="1"$></span></li>
                <mt:Pages sort_order="ascend">
                  <li class="depth-<$mt:FolderDepth$>"><a href="<$mt:PagePermalink$>" class="page-link"><$mt:PageTitle encode_html="1"$></a></li>
                </mt:Pages>
                <$mt:SubFolderRecurse$>
                </mt:SubFolders>
                </ul>
              </li>
          </mt:TopLevelFolders>
          <mt:Pages no_folder="1" sort_order="ascend">
          <li><a href="<$mt:PagePermalink$>"><$mt:PageTitle encode_html="1"$></a></li>
          </mt:Pages>
          <li class="blank-link"><a href="https://tv.rakuten.co.jp/" target="_blank">Rakuten TVトップ</a></li>
        </ul>
      </div>
    </nav>
	</div>
</header>
