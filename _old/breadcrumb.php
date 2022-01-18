<div class="breadcrumb">
	<ul>
    <li><a href="<$mt:BlogURL$>">TOP</a></li>

    <mt:if name="category_archive"><mt:Ignore><!-- カテゴリアーカイブだったら --></mt:Ignore>

      <$mt:CategoryID setvar="cat_id"$>
      <mt:ParentCategories>
        <$mt:CategoryID setvar="current_cat_id"$>
        <li><mt:if name="current_cat_id" eq="$cat_id"><$mt:CategoryLabel$><mt:else><a href="<$mt:CategoryArchiveLink$>"><$mt:CategoryLabel$></a></mt:if></li>
      </mt:ParentCategories>

    <mt:ElseIf name="entry_template"><mt:Ignore><!-- 記事だったら --></mt:Ignore>
      
      <mt:ParentCategories>
        <li><a href="<$mt:CategoryArchiveLink$>"><$mt:CategoryLabel$></a></li>
      </mt:ParentCategories>
      <mt:if tag="EntryCategory">
      </mt:if>
        <li><$mt:EntryTitle$></li>

    </mt:if><mt:Ignore><!-- 終わり --></mt:Ignore>

	</ul>
</div>