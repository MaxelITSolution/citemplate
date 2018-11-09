// JavaScript Document
   $(document).ready(function(e) {
	   var viewportHeight;
   	   var viewportWidth;
	   $("#menu_mini").click(function(e) {
           $("#list_menu_mini").toggle();
       });
	   $(".menu").mouseover(function(e) {
		   
		   var name = $(this).attr("id");
		   if(name == "menu_forsale")
		   {
				$("#submenu_forsale").css({"display":"block"});
				$("#submenu_forsale").mouseover(function(){$("#submenu_forsale").show();});
				$("#submenu_forsale").mouseout(function(){$("#submenu_forsale").hide();
				    $("#menu_forsale").children("span").css({"visibility":"hidden"}); 
					$("#menu_forsale").css({"color":"#033066"});  
				});
		   }
		   else
		   {
			   $("#menu_forsale").children("span").css({"visibility":"hidden"}); 
			   $("#menu_forsale").css({"color":"#033066"});  
			   $("#submenu_forsale").hide();	
		   }
	       $(this).children("span").css({"visibility":"visible"}); 
      });
	  
      $(".menu").mouseout(function(e) {
		   var name = $(this).attr("id");
           if(name == "menu_forsale")
		   {
			   $(this).css({"color":"#29AAE2"});  
		   }
		   else
		   {  
		       $("#menu_forsale").children("span").css({"visibility":"hidden"}); 
			   $("#menu_forsale").css({"color":"#033066"});  
			   $("#submenu_forsale").hide();	
		       $(this).children("span").css({"visibility":"hidden"}); 
		   }
      });
	   
		function checkSize()
		{   viewportHeight = $(window).height();
			viewportWidth = $(window).width();
			var tinggi = viewportHeight- $("#footer").offset().top;
			
			if (viewportHeight > 2024)
			{ 
			   $("#footer").css({"height":tinggi+"px"});  
			}
			else
			{  
			   $("#footer").css({"height":"auto"});  
			}
		}
		 checkSize();
		 $(window).resize(checkSize);
	});
   
    checkSize();
	$(window).resize(checkSize);
  