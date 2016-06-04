 $(document).ready(function() {

    //$("#file_name").click(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "force_download.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#teforce").html(response); 
            //alert(response);
        }

    });
//});
});