 $(document).ready(function() {

    $("#gallering").click(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "galleries.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#gall").html(response); 
            //alert(response);
        }

    });
});
});