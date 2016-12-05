 $(document).ready(function() {

    //$("#file_names").click(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "forcing_download.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#forces").html(response); 
            //alert(response);
        }

    });
//});
});