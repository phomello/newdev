function images(UserID) {
	 $(document).ready(function() {

                  

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "uplodimg.php?UID="+UserID,  		
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#Timages").html(response); 
            
        }

    });

});

}

/*	
	   <button id="userpropic" value="send" onClick="viewpic()" data-theme="d">My pro_pic</button>
       <!------------------------------------->
	   <script type="text/javascript">
function viewpic(){

  window.location.href="http://localhost/profile/profilepic.php";
}
</script>
	   
      <!---------------------------------------->*/