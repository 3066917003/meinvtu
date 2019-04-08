$(function() { (function() {
var curr = 0;
    $(".FlashPoint a").each(function(i) {
      $(this).click(function() {
        curr = i;
        $(".FlashList").eq(i).fadeIn("slow").siblings(".FlashList").hide();
		$(this).siblings(".FlashPoint a").removeClass("on").end().addClass("on");
		var alt1 = $(".FlashList").eq(i).find("img").attr("alt");
		$(".FlashTit").html(alt1);
        return false;
      });
    });
    var pg = function(flag) {
      //flag:true表示前翻， false表示后翻
      if (flag) {
        if (curr == 0) {
          todo = 1;
        } else {
          todo = (curr - 1) % 5;
        }
      } else {
        todo = (curr + 1) % 5;
      }
      $(".FlashPoint a").eq(todo).click();
    };
    //自动翻
    var timer = setInterval(function() {
      todo = (curr + 1) % 5;
      $(".FlashPoint a").eq(todo).click();
    },
    3000);
    //鼠标悬停在触发器上时停止自动翻
    $(".FlashList").hover(function() {
      clearInterval(timer);
    },
    function() {
      timer = setInterval(function() {
        todo = (curr + 1) % 5;
        $(".FlashPoint a").eq(todo).click();
      },
      3000);
    });
	    $(".FlashPoint a").hover(function() {
      clearInterval(timer);
    },
    function() {
      timer = setInterval(function() {
        todo = (curr + 1) % 5;
        $(".FlashPoint a").eq(todo).click();
      },
      3000);
    });
  })();
});
