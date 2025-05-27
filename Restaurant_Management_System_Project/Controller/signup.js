
function validate(){

    document.getElementById("table").style.display = "block";

    let firstname = document.getElementById("firstname").value.trim();
    let lastname = document.getElementById("lastname").value.trim();
    let username = document.getElementById("username").value.trim();
    let email = document.getElementById("email").value.trim().toLowerCase();
    let dob = document.getElementById("dob").value;
    let phoneNo = document.getElementById("phone").value.trim();
    let gender = document.getElementById("gender").value;
    let pass = document.getElementById("password").value.trim();
    let cpass = document.getElementById("confirmPassword").value.trim();

    if(firstname == "" || lastname == "" || username == "" || email == "" || dob == "" || phoneNo == "" || pass == "" || cpass == ""){
        document.getElementById("table").innerHTML = "All fields must be entered for registration.";
        return false;
    }

    for(let i = 0;i<firstname.length;i++){
        if(!isNaN(firstname[i])){
            document.getElementById("table").innerHTML = "First Name can't contain numbers";
            return false;
        }
    }

    for(let i = 0;i<lastname.length;i++){
        if(!isNaN(lastname[i])){
            document.getElementById("table").innerHTML = "Last Name can't contain numbers";
            return false;
        }
    }

    let index1 = email.lastIndexOf("@");
    let index2 = email.lastIndexOf(".");
    let len = email.length;
    if(!email.includes("@") || !email.includes(".") || email.includes(" ")){
        document.getElementById("table").innerHTML = "Please enter a valid email";
        return false;
    }
    else if(index1 == 0 || index2 == 0 || index2-index1<=1 || len == index2+1){
        document.getElementById("table").innerHTML = "Please enter a valid email";
        return false;
    }

    for(let i = 0;i<phoneNo.length;i++){
        if(isNaN(phoneNo[i])){
            document.getElementById("table").innerHTML = "Phone number can only contain number";
            return false;
        }
    }
    if(phoneNo.length != 11){
        document.getElementById("table").innerHTML = "Please provide a valid phone number.";
        return false;
    }
    let phonePart = phoneNo.slice(0,3);
    if(phonePart == "013" || phonePart == "015" || phonePart == "016" || phonePart == "017" || phonePart == "018" || phonePart == "019"){

    }
    else{
        document.getElementById("table").innerHTML = "Please provide a valid phone number.";
        return false;
    }

    if(gender == ""){
        document.getElementById("table").innerHTML = "Please select a gender.";
        return false;
    }
    
    if(pass.length<=6){
        document.getElementById("table").innerHTML = "Please select a password more than 6 character.";
        return false;
    }

    if(pass != cpass){
        document.getElementById("table").innerHTML = "Password and Confirm Password are not matched.";
        return false;
    }

    if(true){
        return true;
    }

}