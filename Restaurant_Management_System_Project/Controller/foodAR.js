function validate(){
  let itemName = document.getElementById("itemName").value;
  let itemPrice = document.getElementById("itemPrice").value;
  let tag = document.getElementById("itemTag").value;

  if(itemName == ""){
    alert("Please give the food item name.");
    return false;
  }
  if(itemPrice == ""){
    alert("Please enter the item price");
    return false;
  }
  if(isNaN(itemPrice)){
    alert("Item price should be only number");
    return false;
  }
  if(tag == ""){
    alert("Please select a dietary tag");
    return false;
  }
  // document.getElementById("div4").innerHTML = `Food Name: ${itemName} <br> Price: $${itemPrice} <br> Dietary Tag: ${tag}`;
  return true;
}
