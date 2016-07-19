$(function() {
  
  $("#slides").superslides({
    hashchange: true
  });

  $("#icon-mobile").click(function(){
  	$("body").addClass("expanded");
  	return false;
  });

  $(".close").click(function(){
  	$("body").removeClass("expanded");
  	return false;
  });  

});