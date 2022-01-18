<div class="rank">
  <div class="rank-inr">
    {{#context.pages}}
      <div class="rank-box">
        <div class="rank-no rank-no-{{rank}}"><span>{{rank}}</span></div>
        <div class="rank-img">
          {{#image}}
          <a href="{{url}}" class="rank-link">
            <img src="https://im.akimg.tv.rakuten.co.jp/static/tool/news/spacer.png" style="background:url('{{image}}') center no-repeat; background-size: cover;">
          </a>
          {{/image}}
        </div>
        <div class="rank-meta">
          <div class="rank-title">
            <a href="{{url}}" class="rank-link">
              {{title}}
            </a>
          </div>
        </div>
      </div>
      {{/context.pages}}
  </div>
</div>