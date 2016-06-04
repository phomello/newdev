 $(document).ready(function() {

    //$("#reveling").click(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "displayabout.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#letsoalo").html(response); 
            //alert(response);
        }

    });
//});
});