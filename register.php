 <?php include('server.php'); ?>  
<!DOCTYPE html>
<html lang="en">
<head> 
<head> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
<script scr="js/caroufredsel.js" type="text/javascript"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
<link type="text/css" rel="stylesheet" href="css/style1.css" />
</head> 
<body>  
	<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/2.jpg')">
			<div class="overlay"></div>
		</div>
    <div class="header"> 
        <h2>Register</h2> 
</div>  
<form method="post" action="register.php">  
    <!-- display pentru validarea errorilor aici --> 
    <?php include('errors.php'); ?>
    <div class="input-group"> 
        <label>Username</label> 
        <input type="text" name="username" value="<?php echo $username;?>"> 
</div>     
<div class="input-group"> 
        <label>Email</label> 
        <input type="text" name="email" value="<?php echo $email;?>"> 
</div>    
<div class="input-group"> 
        <label>Password</label> 
        <input type="password" name="password_1"> 
</div>    
<div class="input-group"> 
        <label>Confirm password</label> 
        <input type="password" name="password_2"> 
</div>      
<div class="input-group"> 
    <button type="submit"  name="register" class="btn">Register</button> 
</div>    
<p> Already a member? <a href="login.php">Sing in</a>
</form> 
</body> 
	</head>   
    </html>    
