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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
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
        <tbody id="stock-table"></tbody>
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

  <script src="../controller/inventoryControl.js"></script>
</body>
</html>
