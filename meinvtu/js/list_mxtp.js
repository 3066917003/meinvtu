$(function() { (function() {
var curr = 0;
    $("#pro_nav_list li").each(function(i) {
      $(this).click(function() {
        curr = i;
        $("#pic li").eq(i).fadeIn("slow").siblings("li").hide();
		$(this).siblings(".pro_nav_list li").removeClass("this").end().addClass("this");
		var tit = $("#pic li").eq(i).find("img").attr("alt");
		var info = $("#pic li").eq(i).find("img").attr("info");
		$("#InfoBox").html('<span>'+tit+'</span><p>'+info+'</p>');
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
function List_MxtpRand()
{
	$(".SpecBox .Spec1").hide();
	var i = Math.floor(0+Math.random()*3);
	if (i==0)
	{
		var i=3;
	}
	$(".SpecBox .rand"+i).show();
}

function SpecRand(id)
{
	var List_MxtpRand = $("#"+id).find("a");
	List_MxtpRand.each(function(i)
	{
		var ArrayNum = new Array();
		for (var i=0; i< 5; i++)
		{
			ArrayNum[i] = Math.floor(0+Math.random()*4);
		}
		List_MxtpRand.hide();
		List_MxtpRand.eq(ArrayNum[0]).show();
		if (ArrayNum[0] == ArrayNum[1])
		{
			if (ArrayNum[0] == ArrayNum[2])
			{
				List_MxtpRand.eq(ArrayNum[3]).show();
			}else
			{
				List_MxtpRand.eq(ArrayNum[2]).show();
			}
			}else
			{
				List_MxtpRand.eq(ArrayNum[1]).show();
			}
		})
}
SpecRand("ShowSpec_1");
SpecRand("ShowSpec_2"); 