function validatePassword(){
    let pass = document.getElementById("password").value.trim();
    let cpass = document.getElementById("confirmPassword").value.trim();
    let info = document.getElementById("info");

    if(pass.length <= 6){
        info.innerHTML = "Please select a password more than 6 characters.";
        info.style.display = "block"; 
        return false;
    }

    if(pass !== cpass){
        info.innerHTML = "Password and Confirm Password do not match.";
        info.style.display = "block"; 
        return false;
    }

    info.style.display = "none"; 
    return true;
}
