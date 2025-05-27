function validate(){
    let username = document.getElementById("username").value.trim();
    let password = document.getElementById("password").value.trim();
    if(username == "" || password == ""){
        document.getElementById("table").innerHTML = "***Both fields must be given to login";
        return false;
    }
    else{
        return true;
    }
}