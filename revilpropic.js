 $(document).ready(function() {

    //$("#revelpropics").click(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "prorevil.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#tebogo").html(response); 
            //alert(response);
        }

    });
//});
});