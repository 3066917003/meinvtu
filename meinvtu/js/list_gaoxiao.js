$(function() { (function() {
var curr = 0;
    $("#pro_nav_list li").each(function(i) {
      $(this).click(function() {
        curr = i;
        $("#pic li").eq(i).fadeIn("slow").siblings("li").hide();
		$(this).siblings(".pro_nav_list li").removeClass("this").end().addClass("this");
		var tit = $("#pic li").eq(i).find("img").attr("alt");
		$("#InfoBox").html('<span>'+tit+'</span>');
        return false;
      });
    });
    var pg = function(flag) {
      //flag:true��ʾǰ���� false��ʾ��
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
    //ǰ��
    $("#left_arrow").click(function() {
      pg(true);
      return false;
    });
    //��
    $("#right_arrow").click(function() {
      pg(false);
      return false;
    });
    //�Զ���
    var timer = setInterval(function() {
      todo = (curr + 1) % 5;
      $("#pro_nav_list li").eq(todo).click();
    },
    3000);
    //�����ͣ�ڴ�������ʱֹͣ�Զ���
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
function Gx_show()
{
	var RandShow = $("#Gx_center ul");
	
	RandShow.each(function(i)
	{
		var randRun = Math.floor(0+Math.random()*3);
		$(this).find("li").hide();
		$(this).find("li").eq(randRun).show();
	});
}
$(document).ready(function() {
$(".showTit a").hover(function(){
	$(this).find("span").animate({bottom:"0"},200)
	},function(){
	$(this).find("span").animate({bottom:"-80px"},200)
		})	
});

function GaoXiaoTagsRush()
	{
		 $("#GaoXiaoTags a:odd").addClass("bj");
		 var GaoXiaoTags = $("#GaoXiaoTags a");
		 for (var i=0;i<=GaoXiaoTags.length;i++ )
		 {
			 var TagText = GaoXiaoTags.eq(i).html();
			 GaoXiaoTags.eq(i).html('<span>'+TagText+'</span>');
		 }
		 for (var j=0;j<=GaoXiaoTags.length;j++ )
		 {
			if (GaoXiaoTags.eq(j).find("span").height()==20)
			{
				GaoXiaoTags.eq(j).find("span").addClass("S20");
			}else if (GaoXiaoTags.eq(j).find("span").height()==40)
			{
				GaoXiaoTags.eq(j).find("span").addClass("S40");
			}
		 }
		 
	}