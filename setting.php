<?php
	include "common.php";
	if (!isset($_SESSION['email'])) { 
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="style.css" rel="stylesheet" type="text/css"/>
   
    <title>Setting</title>
  </head>
  <body>
  <?php
		include "header.php";
		?>
		 <p>&nbsp;</p>
		 <br><br>
		
		
		 <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>Change Password</h2>
                        <form method="POST" action="settings_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old Password" name="old_password"  required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="New Password"  name="new_password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-Type Password" name="re_password" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Change</button>
                        </form>
                    </div>
                </div>
            </div>
		<br><br>
		
		
		<?php
		include "footer.php";
		?>
	</body>
</html>