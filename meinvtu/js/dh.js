$(function() { (function() {
var curr = 0;
    $("#pro_nav_list li").each(function(i) {
      $(this).click(function() {
        curr = i;
        $("#pic li").eq(i).fadeIn("slow").siblings("li").hide();
		$(this).siblings(".pro_nav_list li").removeClass("this").end().addClass("this");
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
      $("#pro_nav_list li").eq(todo).click();
    };
    //前翻
    $("#left_arrow").click(function() {
      pg(true);
      return false;
    });
    //后翻
    $("#right_arrow").click(function() {
      pg(false);
      return false;
    });
    //自动翻
    var timer = setInterval(function() {
      todo = (curr + 1) % 5;
      $("#pro_nav_list li").eq(todo).click();
    },
    3000);
    //鼠标悬停在触发器上时停止自动翻
    $("#pic").hover(function() {
      clearInterval(timer);
    },
    function() {
      timer = setInterval(function() {
        todo = (curr + 1) % 5;
        $(".pro_nav_list li").eq(todo).click();
      },
      3000);
    });
	    $("#pro_nav_list ul").hover(function() {
      clearInterval(timer);
    },
    function() {
      timer = setInterval(function() {
        todo = (curr + 1) % 5;
        $(".pro_nav_list li").eq(todo).click();
      },
      3000);
    });
  })();
});