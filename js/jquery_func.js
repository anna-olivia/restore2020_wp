//ajax vogelbilder gallery
//jquery
$(document).ready(function(){
    $(".loadlater").each(function(index, element){
        $(element).attr("src", $(element).attr("data-src"));
    });
/*$("#karte").mouseenter(function(){
    $("#frage").hide("slow", function(){$("#text").show("slow");
  });
}); 

*$("#karte").mouseleave(function(){
    $("#text").hide("slow", function(){$("#frage").show("slow");
  });
}); 
  */ 

  });
  