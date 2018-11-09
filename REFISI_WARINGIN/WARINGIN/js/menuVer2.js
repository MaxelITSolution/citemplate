// JavaScript Document
   $(document).ready(function(e) {
	   var viewportHeight;
   	   var viewportWidth;
	   
	   
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
		
	   $("#menu_mini").click(function(e) {
           $("#list_menu_mini").toggle();
       });
	   
	   
	  
	   $(".menu").mouseover(function(e) {
		   
		   var name = $(this).attr("id");
		   var target_ = $(this);
		   
		   $(this).children("span").css({"visibility":"visible"});
		   
		   
		   if(name == "menu_forsale" || name == "menu_forlease")
		   {
			   //tampilkan menunya
				target_.css({"color":"#29AAE2"});    
				$("#"+name+"_submenu" ).css({"display":"inline-block"});
				
				//buat listener untuk hover
				$("#"+name+"_submenu").children("div").mouseover(function(){
							 target_.css({"color":"#29AAE2"});  
							 $("#"+name+"_submenu" ).css({"display":"inline-block"});
 							 target_.children("span").css({"visibility":"visible"});

				});
				
				$("#"+name+"_submenu").children("div").mouseout(function(){
						   //alert("out");
						   $("#"+name+"_submenu" ).css({"display":"none"});
						   $("#"+name).css({"color":"#033066"}); 
						   target_.children("span").css({"visibility":"hidden"});
						   
						   if(target_.hasClass("menuSelected")==true)
						   {
			   			     target_.css({"color":"#29AAE2"});  
							 target_.children("span").css({"visibility":"visible"});
						   }
						  
						   
				         
				});
		   }
		   else
		   {
		        // alert($(this).hasClass("menuSelected"));
			   
			     $(this).css({"color":"#29AAE2"});  
			     $(".submenu_").hide();	
			     //$(this).children("span").css({"visibility":"hidden"});
			   
		   }
		   
      });
	  
	  
	  
      $(".menu").mouseout(function(e) {
		  
			   var name = $(this).attr("id");
			   //$(".menu").css({"color":"#033066"}); 
			   //$(".menu").children("span").css({"visibility":"hidden"});
			   if(name == "menu_forsale" || name=="menu_forlease" )
			   {
				   //jangan merubah warna label menu
				   $(this).css({"color":"#29AAE2"});  
			   }
			   else if( $(this).hasClass("menuSelected")==true )
			   {
			       $(this).css({"color":"#29AAE2"});  
			   }
			   else
			   {  
				   $(this).css({"color":"#033066"});  
				   $(this).children("span").css({"visibility":"hidden"});
			   }
      });
	  
	  
	  
	  /* tambahan */
	  $("#more_info").click(function(e) {
	   if($("#more_info_phone").css("left")=="0px")
		{	$("#more_info_phone").animate({"left":"-125px"},function(){$(this).fadeOut();});	}
		else
		{   $("#more_info_phone").fadeIn().animate({"left":"0px"}); 	}
		
    });
	   
	  
		
		 checkSize();
		 $(window).resize(checkSize);
	});
   
    checkSize();
	$(window).resize(checkSize);
  