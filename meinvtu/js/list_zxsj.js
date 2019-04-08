function ZxTagHoverRand()
{
	var NewTagListBox = $("#TagsLeft a");
	for (var i=0; i<NewTagListBox.length; i++)
	{
			var rand = "tag"+Math.floor(0+Math.random()*20);
			NewTagListBox.eq(i).addClass(rand);
	}
}
$(function() { (function() {
var curr = 0;
    $("#zx_point li").each(function(i) {
      $(this).click(function() {
        curr = i;
        $("#zx_box li").eq(i).fadeIn("slow").siblings("#zx_box li").hide();
		$(this).siblings("#zx_point li").removeClass("on").end().addClass("on");
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
      $("#zx_point li").eq(todo).click();
    };
    //自动翻
    var timer = setInterval(function() {
      todo = (curr + 1) % 5;
      $("#zx_point li").eq(todo).click();
    },
    3000);
    //鼠标悬停在触发器上时停止自动翻
    $("#zx_box li").hover(function() {
      clearInterval(timer);
    },
    function() {
      timer = setInterval(function() {
        todo = (curr + 1) % 5;
        $("#zx_point li").eq(todo).click();
      },
      3000);
    });
	    $("#zx_point li").hover(function() {
      clearInterval(timer);
    },
    function() {
      timer = setInterval(function() {
        todo = (curr + 1) % 5;
        $("#zx_point li").eq(todo).click();
      },
      3000);
    });
  })();
});
