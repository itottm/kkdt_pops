$(function(){
  
	smoothscroll();
	checkBrowser();
  fileUpload();
  closeMsg();
});

function fileUpload(){
  if($(".js-fileupload")[0]){
    $(".js-fileupload").on("click", function(event){
      event.preventDefault();
      $("input[name=img]").trigger("click");
    });
  }
  
}
function closeMsg(){
  $(document).on('click', '.btn--closeMsg', function(event) {
    event.preventDefault();
    $(this).closest('.msg').fadeOut('400', function() {
      $(this).closest('.msg').remove();
    });
  });
}


//ページトップへスクロールする
function smoothscroll(){
  $('a[href^=#]').click(function() {
    var speed = 400; // ミリ秒
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top; //targetの位置を取得
    //$($.browser.safari ? 'body' : 'html').animate({scrollTop:position}, speed, 'swing');
    var body = 'body';
    var userAgent = window.navigator.userAgent.toLowerCase();
    if (userAgent.indexOf('msie') > -1 || userAgent.indexOf('trident') > -1 || userAgent.indexOf("firefox") > -1  || userAgent.indexOf("chrome") > -1) { /*IE6.7.8.9.10.11*/
      body = 'html';
    }
    $(body).animate({
      scrollTop: position
    }, speed, 'swing');
    return false;
  });
}


//高さをそろえる
//要素の高さを揃える
var alignHeight = (function() {

    return {
        option: {
            parent : "-aligns",
            children : "-alignItem"
        },
        init: function() {
          var e = this.option;
          var elmP = $('[class*='+ e.parent+']');
          if(elmP.length > 0){
            alignHeight.changesize(e);
            $(window).on("resize.change", function(){
              $(window).trigger("changesize");
            });
            $(window).on("changesize",function(){
              alignHeight.changesize();
            });
          }
        },
        reset: function(){
          var e = this.option;
          var elmP = $('[class*='+ e.parent+']');
          var elmC = '[class$='+ e.children+']';
          elmP.find(elmC).css("height","");
        },
        changesize: function(){
          var e = this.option;
          var elmP = $('[class*='+ e.parent+']');
          var elmC = '[class$='+ e.children+']';
          elmP.find(e.children).css("height","");
          elmP.each(function(){
            var maxHeight = 0;
            $(elmC,this).each(function(){
              if($(this).outerHeight()>maxHeight){
                maxHeight = $(this).outerHeight();
              }
            });
            $(elmC,this).css("height",maxHeight);
          });
        },
        destroy: function(){
          $(window).off("resize.change changesize");
          alignHeight.reset();
        }

    };
}());

/*----------------------------
     meta viewport設定
----------------------------*/
function metaViewportSetting() {
    var getDevice = (function(){
        var ua = navigator.userAgent;
        if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0){
            return 'sp';
        }else if(ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0){
            return 'tab';
        }else{
            return 'other';
        }
    })();
    //タブレット横向きの時はPC表示
    if(getDevice == "tab"){
        var metalist = document.getElementsByTagName('meta');
        for(var i = 0; i < metalist.length; i++) {
            var name = metalist[i].getAttribute('name');
            if(name && name.toLowerCase() === 'viewport') {
                if (window.innerHeight < window.innerWidth) {
                    metalist[i].setAttribute('content', '');
                    $('body').addClass("tabLandscape");
                }else {
                    metalist[i].setAttribute('content', 'width=device-width, initial-scale=1.0');
                    $('body').removeClass("tabLandscape");
                }
                
                break;
            }
        }
        
    }
}

/*----------------------------
	 ブラウザ判定
----------------------------*/
function checkBrowser() {

	var _ua = navigator.userAgent;
	var ret = "";
	var isTab = (_ua.indexOf('iPhone') > 0 || _ua.indexOf('iPad') > 0 || _ua.indexOf('iPod') > 0 || _ua.indexOf('Android') > 0);
	if(_ua.match(/Chrome/)) {
		$('body').addClass("chrome");
		ret = "chrome";
	} else if(_ua.match(/MSIE/)) {
		$('body').addClass("ie");
		var appVersion = window.navigator.appVersion;
		if (appVersion.indexOf("MSIE 6.") != -1) {
			$('body').addClass("ie6");
			ret = "ie6";
		} else if (appVersion.indexOf("MSIE 7.") != -1) {
			$('body').addClass("ie7");
			ret = "ie7";
		} else if (appVersion.indexOf("MSIE 8.") != -1) {
			$('body').addClass("ie8");
			ret = "ie8";
		} else if (appVersion.indexOf("MSIE 9.") != -1) {
			$('body').addClass("ie9");
			ret = "ie9";
		} else if (appVersion.indexOf("MSIE 10.") != -1) {
			$('body').addClass("ie10");
			ret = "ie10";
		}
	} else if (_ua.match(/Trident/)) {
		$('body').addClass("ie11");
		ret = "ie11";
	} else if(_ua.match(/Firefox/)) {
		$('body').addClass("firefox");
		ret = "firefox";
	} else if(_ua.match(/Safari/)) {
		$('body').addClass("safari");
		ret = "safari";
	} else if(_ua.match(/Opera/)) {
		$('body').addClass("opera");
		ret = "opera";
	}
	return ret;
}

/* !isUA -------------------------------------------------------------------- */

var isUA = (function(){
  var ua = navigator.userAgent.toLowerCase();
  indexOfKey = function(key){ return (ua.indexOf(key) != -1)? true: false;}
  var o = {};
  o.ie      = indexOfKey("msie");
  o.fx      = indexOfKey("firefox");
  o.chrome  = indexOfKey("chrome");
  o.opera   = indexOfKey("opera");
  o.android = indexOfKey("android");
  o.ipad    = indexOfKey("ipad");
  o.ipod    = indexOfKey("ipod");
  o.iphone  = indexOfKey("iphone");
  if(o.android || o.ipad || o.ipod || o.iphone) clck = "touchstart";
  return o;
})();