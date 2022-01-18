$(function() {

  /* -------------------------------------------------------
    記事の見出しから目次作成
  --------------------------------------------------------*/
  function makeMenu() {
    
    var idcount = 1;  // IDのカウント
    var menu = '';  // 目次のHTML格納場所
    var currentlevel = 0  // 見出しのレベル初期値
    
    // 見出しを回してリストに格納
    $('.rakutentv-news-article-main-wysiwyg h2, .rakutentv-news-article-main-wysiwyg h3').each(function(i){
      
      // 見出しごとにIDを保存
      this.id = 'chapter-' + idcount;
      idcount ++;
      
      // 見出しのレベル設定
      var level = 0;
      if(this.nodeName.toLowerCase() == 'h2') {
        level = 1;
      } else if(this.nodeName.toLowerCase() == 'h3') {
        level = 2;
      }
      
      // 見出しのレベルが現在のレベルよりも数値が大きければ
      // <ol>を追加して入れ子にする
      while(currentlevel < level) {
        menu += '<ol>';
        currentlevel ++;
      }
      
      // そうでなければ</ol>で閉じて入れ子を終了する
      while(currentlevel > level) {
        menu += '</ol>';
        currentlevel --;
      }
      
      // リストを生成
      menu += '<li><a href="#' + this.id + '">' + $(this).text() + '</a></li>\n';
    });
  
    while(currentlevel > 0) {
      menu += '</ol>';
      currentlevel --;
    }	
        
    // HTML出力
    strMenu = menu;
          
    $('.rakutentv-news-article-main-menu-list').html(strMenu);

		//smoothScroll
		var smoothScroll = {
			target     : $('.scroll-top-btn a[href^="#"], .rakutentv-news-article-main-menu-list ol li a[href^="#"]'),
			target2    : $("html, body"),
			speed      : 500,
			ankerGap   : 80,
			transition : 'swing',
			init       : function() {
				this.target.on('click',function() {
					href       = $(this).attr('href');
					$target    = $(href == "#" || href == "" ? 'html' : href);
					targetPosition = $target.offset().top - smoothScroll.ankerGap;

					smoothScroll.target2.animate({scrollTop:targetPosition}, smoothScroll.speed, smoothScroll.transition);
					return false;
				});
			}
		}
		smoothScroll.init();
    
  }
  makeMenu();
});


/*---------------------*/
$(function () {//削除禁止
/*---------------------*/

	"use strict";

	/*-----------------------------------------
	//外部サイトへのリンクのみターゲット”blank”設定
	blankLink
	-----------------------------------------*/
	var blankLink = {
		init: function () {
			$('a[href^=https]').not('[href*="'+location.hostname+'"]').attr('target', '_blank');
		}
	}
	blankLink.init();


	/*-----------------------------------------
	//SCID自動付与
	addScid
	-----------------------------------------*/
	var addScid = {
		init: function () {
			$(".rakutentv-news-article-main-wysiwyg a[href^=https], .rakutentv-news-ad a[href^=https]").each(function() {　//1行目
				var obj = $(this);　
				var link = obj.attr("href"); //3行目
				var pathname = location.pathname.split("/"); //4行目
				var filename = pathname[pathname.length-1];  //5行目
				var filename2 = filename.split('.')[0];       //6行目
			
				if(filename){ //7行目
					if ( link.match("/?scid")) { //8行目
						//obj.attr("href",link + "&scid=wi_tvn_" + filename2) //9行目
					} else {
						obj.attr("href",link + "?scid=wi_tvn_" + filename2) //11行目
					}
				}
			});
		}
	}
	addScid.init();
	

	/*-----------------------------------------
	clickActive
	-----------------------------------------*/
	var clickActive = {
		keyElm: $('.key_elm'),
		hdnElm: $('.hdn_elm'),
		init: function () {
			this.keyElm.on('click', function () {
				if ($(this).hasClass("active")) {
					clickActive.keyElm.removeClass("active");
					clickActive.hdnElm.removeClass("active");
					$('body').css('overflow', 'visible');
				} else {
					clickActive.keyElm.addClass("active");
					clickActive.hdnElm.addClass("active");
					$('body').css('overflow', 'hidden');
				}
			});
		}
	}
	clickActive.init();


	/*-----------------------------------------
	menuToggle
	-----------------------------------------*/
	var menuToggle = {
		target: $('.menu_toggle_btn'),
		target2: $('.menu_toggle'),
		init: function () {
			this.target.on('click', function () {
				if ($(this).hasClass("close")) {
					$(this).removeClass("close");
					menuToggle.target2.removeClass("close");
				} else {
					$(this).addClass("close");
					menuToggle.target2.addClass("close");
				}
			});
		}
	}
	menuToggle.init();


	/*-----------------------------------------
	changeImg
	-----------------------------------------*/
	var changeImg = {
		targetUrl    : $('.block-img-url'),
		targetRtvid  : $('.block-img-rtvid'),
		init         : function () {
			this.preparaUrl();
			this.targetUrl.css('display', 'block');
			this.preparaRtvid();
			this.targetRtvid.css('display', 'block');
		},
		preparaUrl   : function () {
			this.targetUrl.each(function() {
				var value = $(this).text();
				var imgUrl = '<img src="'+value+'">';
				$(this).html(imgUrl);
			});
		},
		preparaRtvid : function () {
			this.targetRtvid.each(function() {
				var value = $(this).text();
				var imgUrl = '<img src="https://im.akimg.tv.rakuten.co.jp/content/'+value.substr(-3,1) +value.substr(-4,1)+'/'+value.substr(-1,1) +value.substr(-2,1)+'/'+value+'/main.jpg">';
				$(this).html(imgUrl);
			});
		}
	}
	changeImg.init();


	// $(window).on("load", function() {
	// 	let message = $('.rakutentv-news-jk3-main p').text();
	// 	let stringArray = message.split(',');
		
	// 	let messageHtml = '';
	// 	$.each(stringArray, function(index, val) {
	// 		messageHtml += '<div class="rakutentv-news-jk3-main-box"><div class="rakutentv-news-jk3-main-box-img"><a href="https://tv.rakuten.co.jp/content/'+val+'/?scid=wi_tvn_s1" target="_blank" rel="noopener"><img src="https://im.akimg.tv.rakuten.co.jp/content/'+val.substr(-3,1) +val.substr(-4,1)+'/'+val.substr(-1,1) +val.substr(-2,1)+'/'+val+'/jacket_h_l.jpg" width="150" border="0"></a></div><div class="rakutentv-news-jk3-main-box-btn"><a href="https://tv.rakuten.co.jp/content/'+val+'/?scid=wi_tvn_210413oomameda" target="_blank" rel="noopener"><span>詳細を見る</span></a></div></div>';
	// 	});
		
	// 	$('.rakutentv-news-jk3-main p').remove();
	// 	$('.rakutentv-news-jk3-main').append(messageHtml);
	// });
	
	
	// $(window).on("load", function() {
	// 	if ( $('#ranklet-11692').is(":contains('無料で人気ランキング表示')") ) {
	// 		var rankletcols= $("[class^='ranklet-']");
	// 		rankletcols.css('display', 'none');
	// 	}
	// });


	//addFixed
	var addFixed = {
		class        : 'fixed',
		target      : $('.scroll-top, .fix'),
		fllowTop     : 1000,
		offset       : 0,
		headerHight  : 0,
		scrollPos    : 0,
		init         : function() {
			$(window).on('scroll load', function() {
					addFixed.scrollEvent();
			});
			$('body').on('touchmove', function() {
					addFixed.scrollEvent();
			});
		},
		scrollEvent  : function() {
			this.scrollPos = $(window).scrollTop();

			if(this.scrollPos > this.offset) {
				this.target.addClass(this.class);
		  } else {
				this.target.removeClass(this.class);
		  }
		}
	}
	addFixed.init();


	//smoothScrollMain
	var smoothScrollMain = {
		target     : $('.scroll-top-btn a[href^="#"]'),
		target2    : $("html, body"),
		speed      : 500,
		ankerGap   : 0,
		transition : 'swing',
		init       : function() {
			this.target.on('click',function() {
				href       = $(this).attr('href');
				$target    = $(href == "#" || href == "" ? 'html' : href);
				targetPosition = $target.offset().top - smoothScrollMain.ankerGap;

				smoothScrollMain.target2.animate({scrollTop:targetPosition}, smoothScrollMain.speed, smoothScrollMain.transition);
				return false;
			});
		}
	}
	//smoothScrollMain.init();


  /*-----------------------------------------
	swiper
	-----------------------------------------*/
	var relationSwiper = new Swiper(".relation_swiper", {
    slidesPerView: 2.2,
    spaceBetween: 32,
		breakpoints: {
			1024: {
				slidesPerView: 2.4,
				spaceBetween: 16,
			},
			767: {
				slidesPerView: 1.2,
				spaceBetween: 16,
			}
		}
  });
	
  
/*---------------------*/
});//削除禁止
/*----------------------*/


/*---------------------*/
$(window).on("load", function() {//削除禁止
/*---------------------*/

	/*-----------------------------------------
	jk3Unit
	-----------------------------------------*/
	var jk3Unit = {
		init: function () {
			let jk3UnitTarget = $('.rakutentv-news-jk3-main p').text();
			let stringArray = jk3UnitTarget.split(',');
			let jk3UnitHtml = '';
			$.each(stringArray, function(index, val) {
				jk3UnitHtml += '<div class="rakutentv-news-jk3-main-box"><div class="rakutentv-news-jk3-main-box-img"><a href="https://tv.rakuten.co.jp/content/'+val+'/?scid=wi_tvn_'+val+'_jk3_img" target="_blank" rel="noopener"><img src="https://im.akimg.tv.rakuten.co.jp/content/'+val.substr(-3,1) +val.substr(-4,1)+'/'+val.substr(-1,1) +val.substr(-2,1)+'/'+val+'/jacket_h_l.jpg" width="150" border="0"></a></div><div class="rakutentv-news-jk3-main-box-btn"><a href="https://tv.rakuten.co.jp/content/'+val+'/?scid=wi_tvn_'+val+'_jk3_link" target="_blank" rel="noopener"><span>詳細を見る</span></a></div></div>';
			});
			$('.rakutentv-news-jk3-main p').remove();
			$('.rakutentv-news-jk3-main').append(jk3UnitHtml);
		}
	}
	jk3Unit.init();


	/*-----------------------------------------
	rankletcolsNone
	-----------------------------------------*/
	var rankletcolsNone = {
		init: function () {
			if ( $('#ranklet-11692').is(":contains('無料で人気ランキング表示')") ) {
				var rankletcols= $("[class^='ranklet-']");
				rankletcols.css('display', 'none');
			}
		}
	}
	rankletcolsNone.init();

/*---------------------*/
});//削除禁止
/*----------------------*/


$(function() {
	if($('.rakutentv-news-article-img-slider').length){
		var images = $('.rakutentv-news-article-img-slider img');
		var result = [];
		var i;
		var src;
		$('.rakutentv-news-article-img-slider p').remove();
		$('.rakutentv-news-article-img-slider').append('<div class="swiper-container article_img_swiper"><div class="swiper-wrapper">');
		$('.rakutentv-news-article-img-slider').append('<div class="rakutentv-news-article-img-slider-thumb"><ul>');
		for (i = 0; i < images.length; i++) {
			src = images[i].getAttribute('src');
			ii = i+1;
			if (result.indexOf(src) < 0) {
				$('.article_img_swiper .swiper-wrapper').append('<div class="swiper-slide"><div class="rakutentv-news-article-img-slider-box" style="background-image:url(' + src + ');"></div></div>');
				$('.rakutentv-news-article-img-slider-thumb ul').append('<li style="background-image:url(' + src + ');"><a class="thumb-link" href="javascript:void(0);" onclick="slideThumb(' + ii + ')"></a></li>');
			}
		}

		/*-----------------------------------------
			articleImgSwiper
		-----------------------------------------*/
		var articleImgSwiper = new Swiper('.article_img_swiper', {
			speed: 600,
			loop: true,
		});

		function slideThumb(index) {
			articleImgSwiper.slideTo(index);
		}
	}
});


$(function() {
	$('.rakutentv-news-rank').css('display', 'none');
	var ua = navigator.userAgent;
	var agent = window.navigator.userAgent.toLowerCase();
	var ipad = agent.indexOf('ipad') > -1 || agent.indexOf('macintosh') > -1 && 'ontouchend' in document;
	$(window).on("scroll load", function() {
		$('.rakutentv-news-rank').css('display', 'block');
		if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {	
			var swiper = new Swiper(".rank_swiper", {
				slidesPerView: 1.2
			});
		} else {
			// if($('.rakutentv-news-rank').length){
			// 	$('.rakutentv-news-rank').appendTo('.rakutentv-news-main');
			// }
			if(ipad === true){
				var swiper = new Swiper(".rank_swiper", {
					slidesPerView: 1.0,
					breakpoints: {
						768: {
							slidesPerView: 2.4
						}
					}
				});
			}
		}
	});
});


$(function() {
	//type1の記事内のみ
	if($('.rakutentv-news-article').hasClass('type1')){

		//H3直下のimgにH3と同じリンクを自動で付与する
		function imgAutoLink() {
			var array = [];
			var extractTarget = $(".rakutentv-news-article-main-wysiwyg h3 a");
			var nextAddTarget = $(".rakutentv-news-article-main-wysiwyg h3");

			extractTarget.each(function(i){
					text = '<a href="' + $(this).attr('href') + '_imglink_' + (i + 1) + '" alt="' +　$(this).text() + (i + 1) +　'" target="_blank"></a>';
					array.push(text);
			});

			for (var i=0; i<nextAddTarget.length; i++) {
				nextAddTarget.eq(i).next().wrapInner(array[i]);
			}
			
		}
		imgAutoLink();
		
	}
});


$(function() {
	const buttons = document.querySelectorAll('.ripple')

	buttons.forEach(button => {
			button.addEventListener('click', function (e) {
					const x = e.clientX
					const y = e.clientY
	
					const buttonTop = e.target.offsetTop
					const buttonLeft = e.target.offsetLeft
	
					const xInside = x - buttonLeft
					const yInside = y - buttonTop
	
					const circle = document.createElement('span')
					circle.classList.add('circle')
					circle.style.top = yInside + 'px'
					circle.style.left = xInside + 'px'
	
					this.appendChild(circle)
	
					setTimeout(() => circle.remove(), 500)
			})
	})
});