 $(document).ready(function() {

    $("#cofout").click(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "contact.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#cof1").html(response); 
            //alert(response);
        }

    });
});
});