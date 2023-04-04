function openLoginForm(){
    var LoginForm = document.getElementById("LoginForm");
    if(LoginForm.style.display === 'flex'){
        LoginForm.style.display = 'none';
    }
    else{
        LoginForm.style.display = 'flex';
    }
}
LoginForm.addEventListener("mouseleave", function() {
    LoginForm.style.display = "none";
})

