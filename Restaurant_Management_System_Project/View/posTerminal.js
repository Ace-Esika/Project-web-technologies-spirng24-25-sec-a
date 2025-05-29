function processPayment(){
  let tableNo = document.getElementById("tableNo").value;
  let foodItems = document.getElementById("foodItems").value;
  let totalBill = document.getElementById("totalBill").value;
  let nog = document.getElementById("splitCount").value;
  let payMethod = document.getElementById("paymentMethod").value;

  if(tableNo == ""){
    alert("Enter the table no");
    return false;
  }
  if(isNaN(tableNo)){
    alert("Table Number should ba a number");
    return false;
  }
  if(foodItems == ""){
    alert("Enter the food items");
    return false;
  }
  if(totalBill == ""){
    alert("Please enter the total bill");
    return false;
  }
  if(isNaN(totalBill)){
    alert("Total Bill should be a number");
    return false;
  }
  if(isNaN(nog)){
    alert("Number of guest should be a number");
    return false;
  }
  nog = Number(nog);

  if(payMethod == ""){
    alert("Please select a payment method");
    return false;
  }
  let grandTotal;
  let tip = 0.1;
  totalBill = Number(totalBill);
  grandTotal = totalBill + (totalBill*tip);

  if(nog == 1){
  document.getElementById("receipt").innerHTML = `Table No: ${tableNo} <br> Food Items: ${foodItems} <br> Total Bill: BDT${totalBill} <br> Tip: 10% <br> Grand Total: BDT${grandTotal} <br> Payment by: ${payMethod} <br> No split payment`;
  return false;
  }
  else{
    document.getElementById("receipt").innerHTML = `Table No: ${tableNo} <br> Food Items: ${foodItems} <br> Total Bill: BDT${totalBill} <br> Tip: 10% <br> Grand Total: BDT${grandTotal} <br> Split bill(per person): $${Math.floor(grandTotal)/nog}`;
    return false;
  }

  
}

  function printReceipt(){
    alert("Your receipt is printing.");
    window.location.href = 'posTerminal.php';
  }
  