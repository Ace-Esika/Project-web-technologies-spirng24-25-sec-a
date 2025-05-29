function validate(){
    let cname = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let phoneNo = document.getElementById("phone").value;
    let party_size = document.getElementById("party_size").value;

    if(cname == "" || email == "" || phoneNo == "" || party_size == ""){
        alert("For reservation, please fill all the input box");
        return false;
    }
    for(let i = 0;i<cname.length;i++){
        if(!isNaN(cname[i])){
            alert("Name can't contain any number.")
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
    return true;
}
