$(function() {
  var $window = $(window);

  // Header Position Handler
  var $header = $("#globalheader");
  var startPos = 0;
  var headerPositionHandlerThrottle;
  var updateHeaderPosition = function() {
    var scrollPos = $window.scrollTop();
    var headerHeight = $header.outerHeight();
    if (scrollPos > startPos && scrollPos > headerHeight) {
      $header.css("top", "-" + headerHeight + "px");
    } else {
      $header.css("top", "0");
    }
    startPos = scrollPos;
    headerPositionHandlerThrottle = null;
  };

  var headerPositionHandler = function() {
    if (headerPositionHandlerThrottle) {
      return;
    }
    headerPositionHandlerThrottle = setTimeout(updateHeaderPosition, 500);
  };

  updateHeaderPosition();
  $window.on("scroll", headerPositionHandler);

  // Content Padding Handler
  var $content = $("#content");
  var updateContentPadding = function() {
    var $articleTemplates = $(".article_templates");
    var windowWidth = $window.width();
    var paddingTop = 30;
    var headerHeight = $header.outerHeight()

    if (windowWidth >= 768) {
      paddingTop = headerHeight;
    } else if (windowWidth >= 480) {
      paddingTop = headerHeight + 28;
    }

    if($articleTemplates.length) {
      if (windowWidth >= 768) {
        $content.css("padding-top", paddingTop - "20" + "px");
      } else {
        $content.css("padding-top", "4px");
      }
    } else {
      $content.css("padding-top", paddingTop + "px");
    }

  };

  var contentPaddingHandlerDebounce;
  var contentPaddingHandler = function() {
    if (contentPaddingHandlerDebounce) {
      clearTimeout(contentPaddingHandlerDebounce);
    }
    contentPaddingHandlerDebounce = setTimeout(updateContentPadding, 500);
  };

  updateContentPadding();
  $window.on("resize", contentPaddingHandler);

  // Resposive Header Button Handler
  var $globalnavi = $("#globalnavi");
  var $responsiveMenuButtonn = $("#responsive-menu-button");
  $responsiveMenuButtonn.on("click", function() {
    $globalnavi.slideToggle();
    $responsiveMenuButtonn.toggleClass("responsive-btn-active");
  });

  // Search Header Handler
  var MTNetSearchDataLayer = (window.MTNetSearchDataLayer =
    window.MTNetSearchDataLayer || []);
  function MTNetSearch() {
    return MTNetSearchDataLayer.push(arguments);
  }

  var $searchOutput = $("#search-output");
  if ($searchOutput.length) {
    MTNetSearch("registerHandler", function(data) {
      var query = (data && data.query) || "";
      $searchOutput.text(query);
    });
  }

  // Search Form Placeholder
  $window.on("load", function() {
    var $input = $("#mt-site-search-form__query");
    $input.attr("placeholder", "記事を検索する");
  });
});