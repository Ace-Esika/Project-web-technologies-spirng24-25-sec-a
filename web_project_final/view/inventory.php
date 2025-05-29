<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Inventory Management</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f4f6f9;
      overflow-x: hidden;
    }


    .low-stock {
      background-color: #ffcccc;
    }

    .content {
      max-width: 800px;
      margin: 40px auto;
      background: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      padding: 20px;
    }

    .inventory-container {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      gap: 20px;
      margin: 40px auto;
      width: 100%;
    }

    .center-section {
      flex: 3;
    }

    .side-section {
      flex: 1;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }

    th {
      background: #00796b;
      color: white;
    }

    .alert {
      color: red;
      font-weight: bold;
    }

    input[type="number"] {
      width: 60px;
    }

    .btn {
      background: #00796b;
      color: white;
      padding: 6px 12px;
      border: none;
      border-radius: 50%;
      cursor: pointer;
    }

    .btn:hover {
      background: #004d40;
    }

    .search-bar {
      width: 80%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
  </style>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  />
</head>
<body>

  <?php include 'admin_nav.php'; ?>

  <div class="inventory-container">
    <div id="alerts" class="content side-section">
      <h2>Low Stock Alerts</h2>
      <div id="alerts-list"></div>
    </div>
  
    <div id="stock" class="content center-section">
      <h2>Current Stock</h2>

      <input
        type="text"
        id="search-input"
        class="search-bar"
        placeholder="Search ingredients..."
        oninput="filter_stock()"
      />
      <table>
        <thead>
          <tr><th>Ingredient</th><th>Quantity</th><th>Add/Delete</th></tr>
        </thead>
        
        <tbody id="stock-table">
        </tbody>
      </table>
    </div>
  
    <div id="waste" class="content side-section">
      <h2>Waste Log</h2>
      <table>
        <thead><tr><th>Ingredient</th><th>Wasted Quantity</th><th>Reason</th></tr></thead>
        <tbody>
          <tr><td>Tomatoes</td><td>2kg</td><td>Expired</td></tr>
          <tr><td>Cheese</td><td>1kg</td><td>Spilled</td></tr>
        </tbody>
      </table>
    </div>
  </div>

  <script>
let ingredients = [];
const stockTable = document.getElementById("stock-table");
const alertList = document.getElementById("alerts-list");
function fetchInventory() {
  
  fetch("../Model/get_inventory.php")
    .then(res => res.json())
    .then(data => {
      ingredients = data.map(item => ({
        id: item.id,
        name: item.name,
        quantity: parseInt(item.quantity),
        parLevel: 5 
      }));
      update_stock();
    });
}

function update_stock(filterd_ingred = ingredients) {
  stockTable.innerHTML = "";
  filterd_ingred.forEach((item, index) => {
    let row = document.createElement("tr");
    if (item.quantity < item.parLevel) {
      row.classList.add("low-stock");
    }
    row.innerHTML = `
      <td>${item.name}</td>
      <td>${item.quantity}</td>
      <td>
        <button class="btn" onclick="updateQuantity(${item.id}, ${index}, 1)">+</button>
        <input type="number" id="change-${index}" min="1" />
        <button class="btn" onclick="updateQuantity(${item.id}, ${index}, -1)">−</button>
      </td>
    `;
    stockTable.appendChild(row);
  });
  update_alert();
}

function updateQuantity(id, index, direction) {
  let input = document.getElementById(`change-${index}`);
  let change = parseInt(input.value);
  if (isNaN(change) || change <= 0) change = 1;
  input.value = "";

  fetch("../controller/update_inventory.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: `id=${id}&change=${direction * change}`
  })
    .then(res => res.json())
    .then(res => {
      if (res.success) {
        ingredients[index].quantity += direction * change;
        update_stock();
      }
    });
}

function update_alert() {
  alertList.innerHTML = "";
  ingredients.forEach(item => {
    if (item.quantity < item.parLevel) {
      let div = document.createElement("div");
      div.classList.add("alert");
      div.textContent = `${item.name} stock below par level!`;
      alertList.appendChild(div);
    }
  });
}

function filter_stock() {
  const q = document.getElementById("search-input").value.toLowerCase();
  const filtered = ingredients.filter(item => item.name.toLowerCase().includes(q));
  update_stock(filtered);
}

fetchInventory();
</script>

</body>
</html>
