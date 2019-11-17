<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>ASD Lab</title>
</head>

<body>

  <div class="navigation-bar">
    <h class="header"><b>EVENTS BOOKER</b></h>	    
    <button class ="login" onclick="document.getElementById('id01').style.display='block'">Login</button>
  </div>

  <div>
	
	<a style="text-decoration:none" href="events page/events.php?E=Y">
		<button class="btn">
	   		<img src="imgs\tech.png" class="float-img">
    			<p><b>Tech Events</b></p>
		</button>
	</a>

	<a style="text-decoration:none" href="events page/events.php?E=N">
		<button  class="btn">
		    <img src="imgs\non tech.png" class="float-img">
		    <p><b>Non-Tech Events</b></p>
		</button>
	</a>

  </div>	

<!-- The Login Modal -->
  <div id="id01" class="modal">
  	<span onclick="document.getElementById('id01').style.display='none'"
		class="close" title="Close Modal">&times;</span>
  <!-- Modal Content -->
  <form class="modal-content animate" action="login page/login.php">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" style="cursor:pointer">Login</button>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

</body>
</html>
