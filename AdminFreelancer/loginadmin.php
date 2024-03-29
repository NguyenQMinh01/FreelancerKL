<html lang="en">

<head>
    <title> Admin Freelancer</title>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs.">
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template">
    <meta name="author" content="CodedThemes">

    <link rel="stylesheet" href="https://lite.codedthemes.com/datta-able/bootstrap/assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Favicon icon -->
    <link rel="icon" href="https://lite.codedthemes.com/datta-able/bootstrap/assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="https://lite.codedthemes.com/datta-able/bootstrap/assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="https://lite.codedthemes.com/datta-able/bootstrap/assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="styleloginadmin.css">

</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-unlock auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Login Admin</h3>
                    <div class="input-group mb-3">
                        <input id='username' type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="input-group mb-4">
                        <input id='pwd' type="password" class="form-control" placeholder="password">
                    </div>
                    <!-- <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                            <label for="checkbox-fill-a1" class="cr"> Save Details</label>
                        </div>
                    </div> -->
                    <button class="btn btn-primary shadow-2 mb-4 btnlogin">Login</button>
                    <p class="mb-2 text-muted">Forgot password? <a href="resetpassword_admin.php">Reset</a></p>
                    <p class="mb-0 text-muted">Don't have an account? <a href="signupadmin.php">Signup</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <script src="https://lite.codedthemes.com/datta-able/bootstrap/assets/js/vendor-all.min.js"></script>
    <script src="https://lite.codedthemes.com/datta-able/bootstrap/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script src="https://appsrv1-147a1.kxcdn.com/data-able-v100-enh1/js/vendor-all.min.js"></script>
    <script src="https://appsrv1-147a1.kxcdn.com/data-able-v100-enh1/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script>
         $(document).ready(function() {
            $('.btnlogin').on('click',function(){
                let username = $('#username').val();
				let pwd = $('#pwd').val();
                var data = {
					username : username,
					password : pwd,
					"api_key": 1
                }
                $.ajax({
                    url: 'https://job.ahlupos.com/modules/job/api.php?ac=login_admin',
                    data: data,
                    method:'POST',
                    success: function(res){
                        let a = JSON.parse(res);
						
                        if(a.code==1){						
                            localStorage.setItem('admin',JSON.stringify(a));
      						window.location = 'http://localhost:3000/AdminFreelancer/admin.php#';
                        }
						else{
							alert("sai tên đăng nhập hoặc mật khẩu");
						}
                    },
                    async: true
                });
            })
         })
    </script>


</body>

</html>