<?php include_once 'db_connect.php'; 

session_start();
if (!isset($_SESSION['user'])) {
header('Location: index.html');

}

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>profile</title>
	<link rel="stylesheet" href="themes/sihlethemes.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="js/jquery.mobile-1.4.5/jquery.mobile.structure-1.4.5.min.css" />
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
	
	 <script src="js/html5gallery/jquery.js"></script>
    <script src="js/html5gallery/html5gallery.js"></script>
	
	<!---<script src="gtimages.js"></script>-->
	<!---<script src="images.js"></script>---->
	<script src="js/return.js"></script>
	<script src="js/showusers.js"></script>
	<script src="js/pina.js"></script>
	<script src="js/showresult.js"></script>
	
	
	 <script type="text/javascript">

 $(document).ready(function() {

    $("#submited").click(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "uploadedimg.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#tbg").html(response); 
            //alert(response);
        }

    });
});
});

</script>
	
	
</head>
<body>


<!--------------------------------------------------------------------------------------------------->
	<div data-role="page" id="home" data-theme="d">
		<div data-role="header" data-position="fixed" data-theme="d">
			<center><p><img src="themes/images/icon1.jpg" width="35px" height="35px" align="left" onmouseover="this.src='themes/images/tebza.jpg'" width="20px" height="20px" align="left" onmouseout="this.src='themes/images/icon1.jpg'" />PROFILE</p></center>
		</div>
		<div data-role="navbar">		
		<h3 align="center">Media</h3>
		<ul data-theme="a">
		
		<li><a href="#myimages">Media</a></li>
		<li><a href="#pfbc">Pro-Tv</a></li>
		<li><a href="#setpropic">Pro-Pic</a></li>
		
		<li><a href="#about">About Me</a></li>
			
		</ul>
		</div>
		<div data-role="content" data-theme="d">
		<center><p>Logged in as #<b style="color:black"><?php echo $_SESSION['user']; ?></b></p></center>
		
		<div data-role="collapsible" data-collapsed="false">
		<h4>Upload Files</h4>
		<ul data-role="listview" data-theme="a">
		<li><a href="#inputimage">Upload Images</a></li>
	    <li><a href="#inputvideo">Upload Videos</a></li>
		<li><a href="#inputmusic">Upload Music</a></li>
		<li><a href="#inputpdf">Upload Files</a></li>
		<li><a href="#coderequest">Request code</a></li>
		<li><a href="#viewrequest">view Request</a></li>
		
		</ul>
		</div>
		
		<div data-role="collapsible" data-collapsed="false"> <!---onLoad="alert('Search for users with public accounts!. Press OK to proceed!');"--->
		<h4>Search</h4>
		<ul data-role="listview" data-theme="a">
		<li><a href="#search">Search people</a></li>
		<li><a href="#community">community</a></li>
	   
		</ul>
		</div>
		
	
		
			
		</div>
		<div data-role="footer" data-position="fixed" data-theme="d">
	<h1>Pro-file @2016</h1>
	</div>
	</div>
	<!---------------------------------------------------------------------------------------------------->
	
	<div data-role="page" id="about" data-theme="d">
	<div data-role="header" data-position="fixed">
	
	<center><p><img src="themes/images/icon1.jpg" width="35px" height="35px" align="left" onmouseover="this.src='themes/images/tebza.jpg'" width="200px" height="200px" align="left" onmouseout="this.src='themes/images/icon1.jpg'" />Update profile</p></center>
	
	        <a role="button" data-role="button" class="ui-link ui-btn-right ui-btn ui-icon-back ui-btn-icon-notext ui-shadow ui-corner-all" href="#" onclick="window.location.reload()" data-icon="back" data-iconpos="notext">Refresh</a>
	
	</div>
	<button id="profiles" value="send" onClick="showabout()" data-theme="d">My profile</button>
	<script type="text/javascript">
function showabout(){

  window.location.href="http://localhost/profile/thefive.php";
}
</script>
	
	<div data-role="content" data-theme="d">
	
	<input type="hidden" id="revelpropics" value="revelpropics" data-theme="d"/>
	
	<center><div id="tebogo" data-position="fixed"></div></center>
	
	<form action="http://localhost/profile/sandabout.php" method="post">
	
	<label for="textarea">About you:</label>
			<textarea cols="40" placeholder="Tell your visitors about you!"  rows="8" name="about" id="about"></textarea></br />
	
			First Name: <input type="text" placeholder="Enter Name" name="name" id="name" /></br />
			Last Name: <input type="text" placeholder="Enter Surname" name="surname" id="surname" /></br />
			Email: <input type="text" placeholder="Enter e-mail" name="email" id="email" /></br />
			Tel: <input type="text" placeholder="Enter tel NO:" name="tel" id="tel" /></br />
			Physical Address: <input type="text" placeholder="Mamelodi Pritoria." name="address" id="address" /></br />
			
			
			Gender: <select name="gender" id="gender">
			<option value="Male">Male</option>
			<option value="Female" >Female</option>
			</select><br />
			
			<input type="submit" name="submit" value="upload" />

		</form>	

	
	
	</div>
	
	<div data-role="footer" data-position="fixed" data-theme="d">
	<h1>Pro-file @2016</h1>
	</div>
	</div>
	<!---------------------------------------------------------------------------------------------------->
	<!---------------------------------------code request----------------------------------->

		<div data-role="page" id="coderequest" data-theme="a">
	<div data-role="header" data-position="fixed" data-theme="d">
	<a href="sihle.html" data-role="button" class = "ui-btn-right" data-transsition="flip">Home</a>
	<center><p><img src="themes/images/icon1.jpg" width="35px" height="35px" align="left" onmouseover="this.src='themes/images/tebza.jpg'" width="200px" height="200px" align="left" onmouseout="this.src='themes/images/icon1.jpg'" />MAKE REQUESTS</p></center>
	
	</div>

  
	
	<div data-role="content" data-theme="d">
	
	
	<form action="http://localhost/profile/kkk.php" data-theme="d" method="POST">
	         <p>Set profile pic.</p>
	<input type="file" name="photos"></br />
	
    Type friend username<input type="text" name="typeuser" id="typeuser" placeholder="Enter username..."/>
	
	Type your username<input type="text" name="fromuser" id="fromuser" placeholder="Enter your username..."/>
    <button type="submit" value="go">Send request</button>
	
    </form>
	
	<center><div id="responsible" align="center">

</div></center>

<!-----------form2------------->


 
 <!--------------------->
	</div>
	<div data-role="footer" data-position="fixed">
	<h1>Pro-file @2016</h1>
	</div>
	
	</div>
	<!-----------------------------------------view requests------------------------------------------>
	
	
			<div data-role="page" id="viewrequest" data-theme="a">
	<div data-role="header" data-position="fixed" data-theme="d">
	<a href="sihle.html" data-role="button" class = "ui-btn-right" data-transsition="flip">Home</a>
	<center><p><img src="themes/images/icon1.jpg" width="35px" height="35px" align="left" onmouseover="this.src='themes/images/tebza.jpg'" width="200px" height="200px" align="left" onmouseout="this.src='themes/images/icon1.jpg'" />VIEW REQUEST</p></center>
	
	</div>

 
	<div data-role="content" data-theme="d">
	
	
	<button id="codes" name="requesting" value="send" onClick="viewrequests()" data-theme="d">Requests</button>
	
	<!------------------------>
	<script type="text/javascript">
function viewrequests(){

  window.location.href="http://localhost/profile/viewitrequest.php";
}
</script>
 <!--------------------------->
	</div>
	<div data-role="footer" data-position="fixed">
	<h1>Pro-file @2016</h1>
	</div>
	
	</div>
	
	<!---------------------------------------------------------------------------------------------------->
	<div data-role="page" id="inputimage" data-theme="d">
	<div data-role="header" data-position="fixed">
	<a href="index.html" data-role="button" class = "ui-btn-right" data-transsition="flip">Home</a>
	<center><p><img src="themes/images/icon1.jpg" width="35px" height="35px" align="left" onmouseover="this.src='themes/images/tebza.jpg'" width="200px" height="200px" align="left" onmouseout="this.src='themes/images/icon1.jpg'" />upload image</p></center>
	
	</div>
	<div data-role="content" data-theme="d">
	
    
	
	<form  action="http://localhost/profile/uploadedimg.php" method="POST" enctype="multipart/form-data">
	         <p>Upload your images.</p>
	         <input type="file" name="imageToUpload" id="imageToUpload"/>
		
    <label for="textarea">Message:</label>
			<textarea cols="40" placeholder="Type your message here"  rows="8" name="message" id="message"></textarea></br />
	        
			<input type="submit" name="submit" value="upload"/><br />
	</form>

	
 	
	</div>
	      
	<div data-role="footer" data-position="fixed">
	<h1>Pro-file @2016</h1>
	</div>
	</div>
	<!---------------------------------------------------------------------------------------------------->
	<div data-role="page" id="inputvideo" data-theme="d">
	<div data-role="header" data-position="fixed">
	<a href="index.html" data-role="button" class = "ui-btn-right" data-transsition="flip">Home</a>
	<center><p><img src="themes/images/icon1.jpg" width="35px" height="35px" align="left" onmouseover="this.src='themes/images/tebza.jpg'" width="200px" height="200px" align="left" onmouseout="this.src='themes/images/icon1.jpg'" />upload Videos</p></center>
	
	</div>
	<div data-role="content" data-theme="d">
	
	<form action="http://localhost/profile/uploadvid.php" method="post" enctype="multipart/form-data">
	<input type="file" name="vids"/>
	
	 <label for="textarea">Message:</label>
			<textarea cols="40" placeholder="Type your message here"  rows="8" name="mp4message" id="mp4message"></textarea></br />
	
	<div id="button"><input type="submit" name="submit" value="upload video"/></div><br />
	
		
	</form>
	
	
	</div>
	
	<div data-role="footer" data-position="fixed">
	<h1>Pro-file @2016</h1>
	</div>
	</div>
	<!------------------------------------------------set pro pic---------------------------------------------------->
	
	<div data-role="page" id="setpropic" data-theme="d">
	<div data-role="header" data-position="fixed">
	<a href="index.html" data-role="button" class = "ui-btn-right" data-transsition="flip">Home</a>
	<center><p><img src="themes/images/icon1.jpg" width="35px" height="35px" align="left" onmouseover="this.src='themes/images/tebza.jpg'" width="200px" height="200px" align="left" onmouseout="this.src='themes/images/icon1.jpg'" />update fro-pic</p></center>
	
	</div>
	<div data-role="content" data-theme="a">
	
	<form action="http://localhost/profile/profilepic.php" method="post" enctype="multipart/form-data">
	         <p>Upload your images.</p>
	<input type="file" name="filing"></br />
	
	<input type="submit" name="submit" value="upload"/>
		
	</form>
	
	

	</div>
	
	<div data-role="footer" data-position="fixed">
	<h1>Pro-file @2016</h1>
	</div>
	</div>
	
	<!------------------------------------------------set pro pic---------------------------------------------------->
	
	<div data-role="page" id="setpropic" data-theme="d">
	<div data-role="header" data-position="fixed">
	<a href="index.html" data-role="button" class = "ui-btn-right" data-transsition="flip">Home</a>
	<center><p><img src="themes/images/icon1.jpg" width="35px" height="35px" align="left" onmouseover="this.src='themes/images/tebza.jpg'" width="200px" height="200px" align="left" onmouseout="this.src='themes/images/icon1.jpg'" />update fro-pic</p></center>
	
	</div>
	<div data-role="content" data-theme="a">
	
	
	
<!--------------------------------javascript--------------------------------------------->
<script type="text/javascript">
function showitpict(){

  window.location.href="http://localhost/profile/propic.php";
}
</script>
<!----------------------------------------------------------------------------------->

	
	<form action="http://localhost/profile/profilepic.php" method="post" enctype="multipart/form-data">
	         <p>Set profile pic.</p>
	<input type="file" name="photo"></br />
	
	
	<input type="submit" id="userpropic" name="submit" value="upload"/>
		
	</form>
	
	<!-------------------------------propic--------------------------------------------------->
<button id="profiles" value="send" onClick="showitpict()" width="50px" data-theme="d">View profile picture</button>

	</div>
	
	<div data-role="footer" data-position="fixed">
	<h1>Pro-file @2016</h1>
	</div>
	</div>
	
	<!---------------------------------------------------------------------------------------------------->
	<div data-role="page" id="inputmusic" data-theme="d">
	<div data-role="header" data-position="fixed">
	<a href="index.html" data-role="button" class = "ui-btn-right" data-transsition="flip">Home</a>
	<center><p><img src="themes/images/icon1.jpg" width="35px" height="35px" align="left" onmouseover="this.src='themes/images/tebza.jpg'" width="200px" height="200px" align="left" onmouseout="this.src='themes/images/icon1.jpg'" />upload music</p></center>
	
	</div>
	<div data-role="content" data-theme="d">
	
	
	<form  id="audio_form" action="http://localhost/profile/musicgood.php" method="post" enctype="multipart/form-data">
<fieldset>
<a>Audio File:</a>
<input type="file" name="audio_file" value="search"/>
<input type="submit" name="submit" value="upload" />
</fieldset>
</form>



	
	</div>
	
	<div data-role="footer" data-position="fixed">
	<h1>Pro-File @2016</h1>
	</div>
	</div>
	<!------------------------------------------------------------------------------------------------->
	<div data-role="page" id="inputpdf" data-theme="d">
	<div data-role="header" data-position="fixed">
	<a href="index.html" data-role="button" class = "ui-btn-right" data-transsition="flip">Home</a>
	<center><p><img src="themes/images/icon1.jpg" width="35px" height="35px" align="left" onmouseover="this.src='themes/images/tebza.jpg'" width="200px" height="200px" align="left" onmouseout="this.src='themes/images/icon1.jpg'" />upload files</p></center>
	
	</div>
	<div data-role="content" data-theme="d">
	
	
	 <form action="http://localhost/profile/upload.php" method="post" enctype="multipart/form-data">
 <input type="file" name="file" />
 <button type="submit" name="btn-upload">upload</button>
 </form>
    
    <?php
 if(isset($_GET['success']))
 {
  ?>
        <label>If file Uploaded Successfully...  <a href="views.php"><button>View your files.</button></a></label>
        <?php
 }
 else if(isset($_GET['fail']))
 {
  ?>
        <label>...!</label>
        <?php
 }
 else
 {
  ?>
        <label>You can upload files like(PDF, DOC, ZIP, atc..)</label>
        <?php
 }
 ?>
	
	</div>
	<div data-role="footer" data-position="fixed">
	<h1>Pro-file @2016</h1>
	</div>
	
	</div>
	<!----------------------------------------------------------------------------------------------->
	<div data-role="page" id="search" data-theme="a">
	<div data-role="header" data-position="fixed" data-theme="d">
	<a href="sihle.html" data-role="button" class = "ui-btn-right" data-transsition="flip">Home</a>
	<center><p><img src="themes/images/icon1.jpg" width="35px" height="35px" align="left" onmouseover="this.src='themes/images/tebza.jpg'" width="200px" height="200px" align="left" onmouseout="this.src='themes/images/icon1.jpg'" />search for members</p></center>
	
	</div>


	
	<div data-role="content" data-theme="d">
	
	
	<form action="http://localhost/profile/search.php"  data-theme="d" method="POST">
    <input type="text" name="search" placeholder="search by username..."/>
    <button type="submit" value="go">search</button>
	
    </form>
	
	<div id="responsible" align="center">

</div>
 
	</div>
	<div data-role="footer" data-position="fixed">
	<h1>Pro-file @2016</h1>
	</div>
	
	</div>
	<!---------------------------------------search2----------------------------------->

	
	
	<!------------------------------------------------------------------------------------------------>
		<div data-role="page" id="myimages" data-theme="a">
	<div data-role="header" data-position="fixed" data-theme="d">
	<a href="#myimages" data-role="button" class = "ui-btn-right" data-transsition="flip">back</a>
	<center><p><img src="themes/images/icon1.jpg" width="35px" height="35px" align="left" onmouseover="this.src='themes/images/tebza.jpg'" width="200px" height="200px" align="left" onmouseout="this.src='themes/images/icon1.jpg'" />Media</p></center>
	 
	</div>
	<div data-role="content" data-theme="a">
	
    	

	<!-------------------------------------------------------------------------------------->
	<button id="images" name="imagesvisi" value="send" onClick="sendit()" data-theme="d">my Images</button>
	<button id="image" value="send" onClick="viewfiles()" data-theme="d">My Files</button>
	<button id="videoD" value="sending" onClick="viewvids()" data-theme="d">My vids</button>
	<button id="musicD" value="send" onClick="viewmusic()" data-theme="d">My Audios</button>
	
<!--------------------------------javascript--------------------------------------------->
<script type="text/javascript">
function viewvids(){

  window.location.href="http://localhost/profile/theone.html";
}
</script>
<!--------------------------------------------------------------------------------->
<script type="text/javascript">
function viewfiles(){

  window.location.href="http://localhost/profile/views.php";
}
</script>


<!------------------------------------------------------------------------------------->
	<script type="text/javascript">
	
	
	
function sendit(){

  window.location.href="http://localhost/profile/thetwo.html";
}
</script>
<!--------------------------------------------------------------------------------------->

	<script type="text/javascript">
	
	
	
function viewmusic(){

  window.location.href="http://localhost/profile/thefour.html";
}
</script>
<!--------------------------------------------------------------------------------------->
	
	</div>
	
	<div data-role="footer" data-position="fixed" data-theme="d">
	<h1>Pro-file @2016</h1>
	</div>
	</div>
	<!------------------------------------------------------------------------------------------------>
	<div data-role="page" id="myvideos" data-theme="d">
	<div data-role="header" data-position="fixed">
	<a href="index.html" data-role="button" class = "ui-btn-right" data-transsition="flip">Home</a>
	<center><p><img src="themes/images/icon1.jpg" width="35px" height="35px" align="left" onmouseover="this.src='themes/images/tebza.jpg'" width="200px" height="200px" align="left" onmouseout="this.src='themes/images/icon1.jpg'" />My Videos</p></center>
	
	</div>
	<div data-role="content" data-theme="d">
	
	<video controls="controls" height="230px" width="230px">
    <source src="uploaded/<?= $video['src']; ?>" type="video/mp4">
	
  Your browser does not support the video tag.
    </video>


	
	
	</div>
	<div data-role="footer" data-position="fixed">
	<h1>Pro-file @2016</h1>
	</div>
	</div>
	<!----------------------------------------------------------------------------------------------->
	<div data-role="page" id="pfbc" data-theme="d">
	<div data-role="header" data-position="fixed">
	<a href="index.html" data-role="button" class = "ui-btn-right" data-transsition="flip">Home</a>
	<center><p><img src="themes/images/icon1.jpg" width="35px" height="35px" align="left" onmouseover="this.src='themes/images/tebza.jpg'" width="200px" height="200px" align="left" onmouseout="this.src='themes/images/icon1.jpg'" />LIVE</p></center>
	
	</div>
	<div data-role="content" data-theme="d">
	<center><label>You are watching <strong><span style="color:green">PFBC-Tv</span></strong></label></center>
	<div id="video_container">
			
            <center><video controls="controls" height="230px" width="230px">  
			<source src="http://localhost/profile/uploaded/BECHA_x264_001.mp4" type="video/mp4"> 
                         
            
        </video></center> 
	
	</div><br/>
	
	<center><div style="display:none;" class="html5gallery" data-skin="horizontal" data-width="200" data-height="200">
	   
       <!-- Add images to Gallery -->
       <a href="images/"><img src="images/<?= $row['filename']; ?>" alt="Tulips"></a>
       

      
    </div></center>
	
	</div>
	<div data-role="footer" data-position="fixed">
	<h1>Pro-file @2016</h1>
	</div>
	</div>
	<!---------------------------------------------------------------------------------------------->
	
	<div data-role="page" id="mypdf" data-theme="d">
	<div data-role="header" data-position="fixed">
	<a href="index.html" data-role="button" class = "ui-btn-right" data-transsition="flip">Home</a>
	<center><p><img src="themes/images/icon1.jpg" width="35px" height="35px" align="left" onmouseover="this.src='themes/images/tebza.jpg'" width="200px" height="200px" align="left" onmouseout="this.src='themes/images/icon1.jpg'" />My Pdf</p></center>
	
	</div>
	<div data-role="content" data-theme="d">
	
	
	
	</div>
	
	<div data-role="footer" data-position="fixed">
	<h1>Pro-file @2016</h1>
	</div>
	</div>
	
	<!--------------------------------------------------------------------------------------------->
    <div data-role="page" id="find" data-theme="d">
	<div data-role="header" data-position="fixed">
	<a href="index.php" data-role="button" class = "ui-btn-right" data-transsition="flip">Home</a>
	<center><p><img src="themes/images/icon.jpg" width="35px" height="35px" align="left">login2User</p></center>
	
	</div>
	<div data-role="content" data-theme="d">
	
		
		<form>
		access code: <input type="text" id="name" placeholder="Enter given access code">
              <input type="submit" id="nameted" value="grab">
	  </form>
	  
	  
	  
	</div>
	
	<div data-role="footer" data-position="fixed">
	<h1>Pro-File</h1>
	</div>
	</div>

	
<!--------------------------------------------yes--------------------------------------------------->
	<div data-role="page" id="community" data-theme="d">
	<div data-role="header" data-position="fixed">
	<a href="index.html" data-role="button" class = "ui-btn-right" data-transsition="flip">Home</a>
	<center><p><img src="themes/images/icon1.jpg" width="35px" height="35px" align="left" onmouseover="this.src='themes/images/tebza.jpg'" width="200px" height="200px" align="left" onmouseout="this.src='themes/images/icon1.jpg'" />Community</p></center>
	
	</div>
	
			<input name="show" type="button" class="box" onClick="revel_community()" id="submit" value="Upload"><br />
	
	<script type="text/javascript">
	
	
	
function revel_community(){

  window.location.href="http://localhost/profile/sihle.php";
}
</script>


	<div data-role="content" data-theme="d">
	
	
	  <input type="button" name="displaycommun" id="displaycommun" value="View Community"/>
     
       <div id="comms">
	   
	   </div>
	

</div>
   
	
	 
	
	<div data-role="footer" data-position="fixed" data-theme="d">
	<h1>Pro-file @2016</h1>
	</div>
	
	</div>
	
	<!--------------------------------------------------------------------------------------------->
	
	<script src="showit.js"></script>
	<script src="revilpropic.js"></script>
	<script src="communityz.js"></script>
</body>
</html>
