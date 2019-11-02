<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http=equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>

<body>
	<form action="updateAction.php" method="POST">
    	<label for="txtuser">Username:</label><br>
        <input type="text" name="txtuser" id="txtuser" value="<?php echo $_SESSION['username']; ?>"><br>
        
        <label for="txtuser">Name:</label><br>
        <input type="text" name="txtname" id="txtname" value="<?php echo $_SESSION['name']; ?>"><br>
        
        <label for="txtuser">Gender:</label><br>
        <input type="text" name="txtgender" id="txtgender" value="<?php echo $_SESSION['gender']; ?>"><br>
        
        <label for="txtuser">Address:</label><br>
        <input type="text" name="txtaddress" id="txtaddress" value="<?php echo $_SESSION['address']; ?>"><br>
        
        <label for="txtuser">Password:</label><br>
        <input type="text" name="txtpassword" id="txtpassword" value="<?php echo $_SESSION['password']; ?>"><br>
        
        <input type="submit" name="Save">
    
    </form>
</body>
</html>