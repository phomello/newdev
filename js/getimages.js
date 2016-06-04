/*var xmlhttp = new XMLHttpRequest();
var url = "http://localhost/bfquality/applicants.php";

xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        aplli(xmlhttp.responseText);
    }
}
xmlhttp.open("GET", url, true);
xmlhttp.send();

	function aplli(response) {
    var tings = JSON.parse(response);
    var i;
    var o = "<div>";

    for(i = 0; i < tings.length; i++) {
		o += "<a href='#applicant' onClick="+Applicant(tings[i].aid)+"><p>" +
			tings[i].name +
			"&nbsp;&nbsp;-&nbsp;&nbsp;" +
			tings[i].surname +
			"&nbsp;&nbsp;-&nbsp;&nbsp;" +
			tings[i].company +
		"</p></a>";
    }
    o += "</div>";
    document.getElementById("applicantsT").innerHTML = o;
    }
*/
 $(document).ready(function() {

    //$("#display").click(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "uplodimg.php",             
        dataType: "html",   //expect html to be returned                
        success: function(data){                    
            $("#egoboost").html(data); 
            //alert(response);
        }

    });
//});
});