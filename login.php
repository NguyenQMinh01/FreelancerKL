<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>  
</head>
<body>
    <div class="wrapper">
		<div class="title-text">
		  <div class="title login">Freelancer Login </div>
		  <div class="title signup">Freelancer Signup</div>
		</div>
		<div class="form-container">
		  <div class="slide-controls">
			<input type="radio" name="slide" id="login" checked>
			<input type="radio" name="slide" id="signup">
			<label for="login" class="slide login">Login</label>
			<label for="signup" class="slide signup">Signup</label>
			<div class="slider-tab"></div>
		  </div>
		  <div class="form-inner">
			<form action="#" class="login">
			  <div class="field">
				<input type="text" placeholder="Email Address" required>
			  </div>
			  <div class="field">
			  <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" required>
				<span>
				<i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
				</span>
			  </div>
			  <div class = " fg" style= "display: flex; justify-content:space-between; padding-top: 20px; padding-bottom: 20px;">
				
			  <span class="pass-link">
			  	<label class="remember-me " for="remember_me"><input type="checkbox" id="remember_me" tabindex="3" name="data[remember]" value="1" />  Remember me</label>
			  </span>
				
				<span class="pass-link"><a href="#">Forgot password?</a></span>
			  </div>
			 
			  <div class="field btn">
				<div class="btn-layer"></div>
				<a href="#"><input type="submit" value="Login"></a>
			  </div>

			  <div class="or"></div>

			  <a href="" class="login-with-fb">
				  <span class="icon fa fa-facebook"  ></span>
				  Login with facebook
			  </a>
			  <a href="" class="login-with-google">
				  <span class="icon fa fa-google-plus"></span>
				  Login with google
			  </a>
			  <div class="signup-link">Not a member? <a href="">Signup now</a></div>
			</form>
			<form action="#" class="signup">
			  <div class="field">
				<input type="text" placeholder="Email Address" required>
			  </div>
			  <div class="field">
				<input type="password" placeholder="Password" required>
			  </div>
			  <div class="field">
				<input type="password" placeholder="Confirm password" required>
			  </div>
			  <fieldset>
			<legend>Please select your preferred contact method:</legend>
			<div style= "display: flex; justify-content:space-between; ">
				<span>
					<input  type="radio" id="contactChoice1" name="contact" value="freelancer", style="display:flex;" />
					<label for="contactChoice1">Freelancer</label>
				</span>
				<span>
					<input type="radio" id="contactChoice2" name="contact" value="client", style="display:flex;" />
					<label for="contactChoice2">Client</label>
				</span>
			</div>
    		</fieldset>
			
			<div class="field btn">
				<div class="btn-layer"></div>
				<input type="submit" value="Signup">
			  </div>
			</form>
		  </div>
		</div>
	  </div>
	<script src="loginstyle.js"></script>
	<script src="app.js"></script>
	<script>
  

 

</script>
	
</body>
</html>