function enableEditing() {
    const inputs = document.querySelectorAll('input');
    inputs.forEach(input => input.disabled = false);
    document.getElementById('saveBtn').style.display = 'inline-block';
    document.getElementById('passwordSection').style.display = 'block';
  }

  function saveChanges(){
    let firstname = document.getElementById("firstname").value.trim();
    let lastname = document.getElementById("lastname").value.trim();
    let username = document.getElementById("username").value.trim();
    let email = document.getElementById("email").value.trim().toLowerCase();
    let dob = document.getElementById("dob").value;
    let phoneNo = document.getElementById("phone").value.trim();
    let gender = document.getElementById("gender").value;
    let pass = document.getElementById("currentPassword").value.trim();
    let npass = document.getElementById("newPassword").value.trim();
    let cnpass = document.getElementById("confirmPassword").value.trim();

    for(let i = 0;i<firstname.length;i++){
        if(!isNaN(firstname[i])){
            alert("First Name can't contain numbers");
            return false;
        }
    }

    for(let i = 0;i<lastname.length;i++){
        if(!isNaN(lastname[i])){
            alert("Last Name can't contain numbers");
            return false;
        }
    }

    let index1 = email.lastIndexOf("@");
    let index2 = email.lastIndexOf(".");
    let len = email.length;
    if(!email.includes("@") || !email.includes(".") || email.includes(" ")){
        alert("Please enter a valid email");
        return false;
    }
    else if(index1 == 0 || index2 == 0 || index2-index1<=1 || len == index2+1){
        alert("Please enter a valid email");
        return false;
    }

    for(let i = 0;i<phoneNo.length;i++){
        if(isNaN(phoneNo[i])){
            alert("Phone number can only contain number");
            return false;
        }
    }
    if(phoneNo.length != 11){
        alert("Please provide a valid phone number.");
        return false;
    }
    let phonePart = phoneNo.slice(0,3);
    if(phonePart == "013" || phonePart == "015" || phonePart == "016" || phonePart == "017" || phonePart == "018" || phonePart == "019"){

    }
    else{
        alert("Please provide a valid phone number.");
        return false;
    }

    if(gender == ""){
        alert("Please select a gender.");
        return false;
    }

    if(pass == "" || npass == "" || cnpass == ""){
      alert("Please provide the current password,new password and confirm new password");
      return false;
    }

    if(pass != "user123"){
      alert("Current Password doesn't match");
      return false;
    }
    
    if(npass.length<=6){
        alert("Please select a password more than 6 character.");
        return false;
    }

    if(npass != cnpass){
        alert("Password and Confirm Password are not matched.");
        return false;
    }

    return true;
  }