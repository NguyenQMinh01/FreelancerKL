<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css" />
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
				<form class="login" method="post">
					<div class="field">
						<input id="username" type="text" placeholder="Email Address" required>
					</div>
					<div class="field">
						<input id ="pwd" class="form-input" type="password" placeholder="Password" required>
						<span>
							<i class="fa fa-eye" aria-hidden="true" type="button" id="eye"></i>
						</span>
					</div>
					<div class=" fg" style="display: flex; justify-content:space-between; padding-top: 20px; padding-bottom: 20px;">

						<span class="pass-link">
							<label class="remember-me " for="remember_me"><input type="checkbox" id="remember_me" tabindex="3" name="data[remember]" value="1" /> Remember me</label>
						</span>

						<span class="pass-link"><a href="#">Forgot password?</a></span>
					</div>
					<fieldset>
						<legend>Your account is:</legend>
						<div style="display: flex; justify-content:space-between; ">
							<span>
								<input class="choose" type="radio" id="contactChoice1" name="contact" value="freelancer" , style="display:flex;" />
								<label for="contactChoice1">Freelancer</label>
							</span>
							<span>
								<input class="choose" type="radio" id="contactChoice2" name="contact" value="client" , style="display:flex;" />
								<label for="contactChoice2">Client</label>
							</span>
						</div>
					</fieldset>
					<div class="field btn">
						<button class="btnlogin" type="button">Login</button>
					</div>
					<!-- <div class="field btn">
						<div class="btn-layer"></div>
						<a href="#"><input type="submit" value="Login"></a>
					</div> -->

					<div class="or"></div>

					<a href="" class="login-with-fb">
						<span class="icon fa fa-facebook"></span>
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
						<legend>You want to do:</legend>
						<div style="display: flex; justify-content:space-between; ">
							<span>
								<input type="radio" id="contactChoice1" name="contact" value="freelancer" , style="display:flex;" />
								<label for="contactChoice1">Freelancer</label>
							</span>
							<span>
								<input type="radio" id="contactChoice2" name="contact" value="client" , style="display:flex;" />
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script src="https://appsrv1-147a1.kxcdn.com/data-able-v100-enh1/js/vendor-all.min.js"></script>
    <script src="https://appsrv1-147a1.kxcdn.com/data-able-v100-enh1/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://appsrv1-147a1.kxcdn.com/data-able-v100-enh1/js/pcoded.min.js"></script>
    <script src="https://appsrv1-147a1.kxcdn.com/data-able-v100-enh1/js/dark-mode.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
	<script src="loginstyle.js"></script>
	<script src="app.js"></script>
	<script>
		 $(document).ready(function() {
			let choose;
            $('.choose').on('click', function () {
				choose = this.value;
  				// if(this.value=="freelancer")  {
				// 	$('form.login').attr("action","/Freelancer/freelancer.php");
				// } 
				// else{
				// 	$('form.login').attr("action","/Client/client.php");
				// }           
            });
			$('.btnlogin').on('click',function(){
				let username = $('#username').val();
				let pwd = $('#pwd').val();
				var data = {
					username : username,
					password : pwd,
					"api_key": 1
                }
				if(choose=="freelancer"){
					$.ajax({
                    url: 'https://job.ahlupos.com/modules/job/api.php?ac=login_freelancer',
                    data: data,
                    method:'POST',
                    success: function(res){
                        let a = JSON.parse(res);
						//alert(JSON.stringify(a));
                        if(a.code==1){						
                            localStorage.setItem('profile',JSON.stringify(a));
      						window.location = 'http://localhost:3000/Freelancer/freelancer.php#';
                        }
						else{
							alert("sai tên đăng nhập hoặc mật khẩu");
						}
                    },
                    async: true
                });
				}
				else if(choose=="client"){
					$.ajax({
                    url: 'https://job.ahlupos.com/modules/job/api.php?ac=login_client',
                    data: data,
                    method:'POST',
                    success: function(res){
                        let a = JSON.parse(res);
						//alert(JSON.stringify(a));
                        if(a.code==1){						
                            localStorage.setItem('profile',JSON.stringify(a));
      						window.location = 'http://localhost:3000/Client/client.php#';
                        }
						else{
							alert("sai tên đăng nhập hoặc mật khẩu");
						}
                    },
                    async: true
               		 });
				}
				else{
					alert("Vui lòng chọn loại tài khoản");
				}
			})
           
        });
	</script>


</body>

</html>