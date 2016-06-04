function Applicant(ApplicantsID) {
	 $(document).ready(function() {

    //$("#display").click(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "applicant.php?AID="+ApplicantsID,  		
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#Tapplicant").html(response); 
            //alert(response);
        }

    });
//});
});
	/*
	var xmlhttp = new XMLHttpRequest();
var url = "http://localhost/bfquality/applicant.php?AID="+ApplicantsID;

xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        cants(xmlhttp.responseText);
    }
}
xmlhttp.open("GET", url, true);
xmlhttp.send();

function cants(response) {
    var categs = JSON.parse(response);
    var i;
    var ut = "<div>";

    for(i = 0; i < categs.length; i++) {
		ut += "<p>Firstname:<br />" +
			categs[i].name +
			"</p><p>Lastname:<br />" +
			categs[i].surname +
			"</p><p>Company:<br />" +
			categs[i].company +
			"</p><p>Email:<br />" +
			categs[i].email +
			"</p><p>Tel:<br />" +
			categs[i].tel +
			"</p><p>Fax:<br />" +
			categs[i].fax +
			"</p><p>Mobile:<br />" +
			categs[i].cell +
			"</p><p>Physical Address:<br />" +
			categs[i].address +
			"</p><p>Postal Address:<br />" +
			categs[i].paddress +
			"</p><p>Course:<br />" +
			categs[i].program +
			"</p><p>Training For:<br />" +
			categs[i].training +
			"</p><p>Number of delegates:<br />" +
			categs[i].learners +
			"</p><p>Course start date:<br />" +
			categs[i].startdate +
			"</p><p>Person responsible for payment:<br />" +
			categs[i].designation +
			"</p><p>Date of payment:<br />" +
			categs[i].paydate +
			"</p><p>How did you hear about us?:<br />" +
			categs[i].were +
			"</p>";
    }
    ut += "</div>";
    document.getElementById("Tapplicant").innerHTML = ut;
	
}
/*
    if (id == "") {
        document.getElementById("txt").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txt").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","http://bfqualitysolutions.pixub.com/applicant.php?id="+id,true);
        xmlhttp.send();
    }
*/
}