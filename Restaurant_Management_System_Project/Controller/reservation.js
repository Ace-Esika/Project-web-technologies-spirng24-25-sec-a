function submitReservation() {
    let date = document.getElementById("date").value;
    let timeF = document.getElementById("timeFrom").value;
    let timeT = document.getElementById("timeTo").value;
    let partySize = document.getElementById("partySize").value;
    let uname = document.getElementById("name").value;
    let phoneNo = document.getElementById("phone").value;
    let email = document.getElementById("email").value;

    if(date == ""){
      alert("Please select a date");
      return false;
    }

    if(timeF == "" || timeT == ""){
      alert("Please select a time slot");
      return false;
    }


    if(partySize == ""){
      alert("Please enter the party size");
      return false;
    }
    for(let i=0;i<partySize.length;i++){
      if(isNaN(partySize[i])){
        alert('Please enter a number for party size.');
        return false;
      }
    }
    partySize = Number(partySize);
    if(partySize<1 || partySize>=10){
      alert("Party Size can't be less than 1 and greater than 10.");
      return false;
    }

    if(uname == ""){
      alert("Plese fill up the name field");
      return false;
    }
    for(let i = 0;i<uname.length;i++){
      if(!isNaN(uname[i])){
          alert("Name can't contain numbers or space");
          return false;
      }
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

    let index1 = email.lastIndexOf("@");
    let index2 = email.lastIndexOf(".");
    let len = email.length;
    if(email == ""){
      alert("Please enter your email");
      return false;
    }
    if(!email.includes("@") || !email.includes(".") || email.includes(" ")){
        alert("Please enter a valid email");
        return false;
    }
    else if(index1 == 0 || index2 == 0 || index2-index1<=1 || len == index2+1){
        alert("Please enter a valid email");
        return false;
    }

    if(true){
      const confirmation = document.getElementById('confirmationMessage');
      confirmation.textContent = "Thank you! We will send a confirmation email with a QR code.";
      return true;
    }
  }