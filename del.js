function msgDel(ID) {
	 $(document).ready(function() {

    //$("#display").click(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "deletemsg.php?id="+ID,  		
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            //$("#Tapplicant").html(response); 
			window.location = "index.html#messages";
            //alert(response);
        }

    });
//});
});
