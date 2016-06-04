$('input#name-submit').on('click', function(){
  var name = $('input#name').val();
  if($.trim(name) != ''){
	  $.post('names.php', {name: name}, function(data){
		  $('#name-data').text(data);
		  
	  });
  }
});