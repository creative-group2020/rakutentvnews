<div class="rank rank-reset">
  <table class="rank-table">
    <tbody class="rank-pages">
      {{#context.pages}}
      <tr class="rank-page">
        <td class="rank-image">
          <div class="rank-rank"><span>{{rank}}</span></div>
          {{#image}}
          <a href="{{url}}" class="rank-link">
            <img class="rank-img" src="https://im.akimg.tv.rakuten.co.jp/static/tool/news/spacer.png" style="background:url('{{image}}') center no-repeat; background-size: cover;">
          </a>
          {{/image}}
        </td>
        <td class="rank-meta">
          <div class="rank-title">
            <a href="{{url}}" class="rank-link">
              {{title}}
            </a>
          </div>
        </td>
      </tr>
      {{/context.pages}}
    </tbody>
  </table>
</div>
