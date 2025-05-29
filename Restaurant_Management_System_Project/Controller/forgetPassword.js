function validate(){
    let email = document.getElementById("email").value.trim().toLowerCase();

    let index1 = email.lastIndexOf("@");
    let index2 = email.lastIndexOf(".");
    let len = email.length;

    if(email == ""){
        document.getElementById("div1").innerHTML = "Please enter your email";
        return false;
    }
    else if(!email.includes("@") || !email.includes(".") || email.includes(" ")){
        document.getElementById("div1").innerHTML = "Please enter a valid email";
        return false;
    }

    else if(index1 == 0 || index2 == 0 || index2-index1<=1 || len == index2+1){
        document.getElementById("div1").innerHTML = "Please enter a valid email";
        return false;
    }
    else{
        document.getElementById("info").style.display = "block";
        return true;
        
    }

}