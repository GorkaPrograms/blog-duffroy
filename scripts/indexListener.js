const signUp = document.getElementById("signupButton")
const login = document.getElementById("loginButton")



function signFunction(){
    window.open("../pages/log/signup.php", "_self")
}
function loginFunction(){
    window.open("../pages/log/login.php", "_self")
}

signUp.addEventListener('click', signFunction)
login.addEventListener('click', loginFunction)