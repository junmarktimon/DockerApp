<?PHP
	// include('');
	// require_once('');
	require('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Docker App</title>
</head>
<body>
	<h1 id="head">Welcome to Docker, GCCians!</h1>
	<?PHP 
		if(isset($_REQUEST['insertUser'])){
			// Capture POST Method from FORM
			$un	=	mysqli_real_escape_string($conn,$_POST['uname']);
			$pw	=	mysqli_real_escape_string($conn,$_POST['passwd']);
			// Database Insert
			$sql = mysqli_query($conn,"INSERT INTO tbl_user (`uid`,`uname`,`passwd`) VALUES (1,'".$un."','".$pw."')");
			if(!$sql){
				echo "Not Inserted!";
			}else{
				echo "Successfully Inserted!";
			}
			// var_dump($sql);
		}
	?>
	<form action="" method="POST">
		<label for="uname">Username</label>
		<input type="text" id="uname" name="uname">
		<label for="pwd">Password</label>
		<input type="password" name="passwd" id="pwd">
		<button type="submit" name="insertUser">Submit</button>
	</form>
	<script>
		let id = document.querySelector("#head");
		id.innerHtml = 'JavaScript!';
		console.log("JavaScript is working...");
	</script>	
</body>
</html>
