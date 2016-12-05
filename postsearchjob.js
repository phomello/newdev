 $(document).ready(function() {

    $("#searchers").click(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "searchjob.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#search").html(response); 
            //alert(response);
        }

    });
});
});