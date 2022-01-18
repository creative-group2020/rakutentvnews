<script type="application/ld+json">
  {
		
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement":
      [

        {
          "@type": "ListItem",
          "position": 1,
          "name": "TOP",
          "item": "<$mt:BlogURL$>"
        },

        <mt:if name="category_archive"><mt:Ignore><!-- カテゴリアーカイブだったら --></mt:Ignore>

        <$mt:CategoryID setvar="cat_id"$>
        <mt:ParentCategories>
          <$mt:CategoryID setvar="current_cat_id"$>
          {
            "@type": "ListItem",
            "position": 1,
            "name": "<mt:if name="current_cat_id" eq="$cat_id"><$mt:CategoryLabel$><mt:else><$mt:CategoryLabel$></mt:if>",
            "item": "<mt:if name="current_cat_id" eq="$cat_id"><$mt:CategoryArchiveLink$><mt:else><$mt:CategoryArchiveLink$></mt:if>"
          },
        </mt:ParentCategories>
    
        <mt:ElseIf name="entry_template"><mt:Ignore><!-- 記事だったら --></mt:Ignore>
          
          <mt:ParentCategories>
            {
              "@type": "ListItem",
              "position": 1,
              "name": "<$mt:CategoryLabel$>",
              "item": "<$mt:CategoryArchiveLink$>"
            },
          </mt:ParentCategories>
          <mt:if tag="EntryCategory">
          </mt:if>
            {
              "@type": "ListItem",
              "position": 1,
              "name": "<$mt:EntryTitle$>",
              "item": "<$mt:EntryLink$>"
            }
    
        </mt:if><mt:Ignore><!-- 終わり --></mt:Ignore>

      ]
    }
		
  }
</script>