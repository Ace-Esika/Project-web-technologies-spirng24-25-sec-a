function validate(){
    let username = document.getElementById("username").value.trim();
    let password = document.getElementById("password").value.trim();
    if(username == "" || password == ""){
        document.getElementById("table").innerHTML = "***Both fields must be given to login";
        return false;
    }
    else if(username == "user" && password == "user"){
        return true;
    }
    else if(username == "admin" && password == "admin"){
        return true;
    }
    else if(username == "chef" && password == "chef"){
        return true;
    }
    else if(username == "server" && password == "server"){
        return true;
    }
    else{
        document.getElementById("table").innerHTML = "***Wrong username or password.";
        return false;
    }
}