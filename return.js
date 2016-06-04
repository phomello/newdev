$("input#nameted").on("click", function(){
  var tname = $("input#name").val();
  if($.trim(name) != ''){
	  $.post("names.php", {tname: name}, function(data){
		  $("#namedata").text(data);
		  
	  });
  }
});