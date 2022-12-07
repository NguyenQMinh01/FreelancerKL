const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = (()=>{
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (()=>{
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
});
signupLink.onclick = (()=>{
  signupBtn.click();
  return false;
});




function show() {
  var p = document.getElementById('pwd');
  p.setAttribute('type', 'text');
}

function hide() {
  var p = document.getElementById('pwd');
  p.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
  if (pwShown == 0) {
      pwShown = 1;
      show();
  } else {
      pwShown = 0;
      hide();
  }
}, false);

const login = async() => {
  var email = document.getElementById('username').value;
  var password = document.getElementById('pwd').value;

  fetch('https://job.ahlupos.com/modules/job/api.php?ac=login_freelancer', {
    method: 'POST',
    headers: {
       Accept: "application/json, text/plain, */*",
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      username: email,
      password: password,
      api_key: 1
    }), 
  })
  .then((res) => res.json())
  .then((data) => {
    console.log(data);
    if(data.code === 1){
      localStorage.setItem('profile',JSON.stringify(data));
      window.location = 'http://localhost:3000/Freelancer/freelancer.php#';
    }
    else{
        alert("Sai tên tài khoản hoặc mật khẩu");
    }
  })


  
}