function validate(){
  let table = document.getElementById("table").value;
  let orderItem = document.getElementById("item").value;
  let station = document.getElementById("station").value;
  let notes = document.getElementById("notes").value;

  if(table == ""){
    alert("Please enter the table no")
    return false;
  }

  if(isNaN(table)){
    alert("Table Number should be a number.");
    return false;
  }

  if(orderItem == ""){
    alert("Please enter the ordered item");
    return false;
  }

  if(station == ""){
    alert("Please assign a station");
    return false;
  }

  document.getElementById("confirmation").innerHTML = `Table No: ${table} <br> Order Item: ${orderItem} <br> Sent to: ${station} staton <br> Special Instructions: ${notes}`;
  alert("Order successfully assign to a kitchen station");
  return false;
}