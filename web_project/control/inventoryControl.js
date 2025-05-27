let ingredients = [];
const stockTable = document.getElementById("stock-table");
const alertList = document.getElementById("alerts-list");

function loadInventory() {
  fetch("../controller/inventoryDatabase.php")
    .then(res => res.json())
    .then(data => {
      ingredients = data.map(item => ({
        name: item.name,
        quantity: parseInt(item.quantity),
        parLevel: item.parLevel || 5
      }));
      update_stock();
    })
    .catch(err => console.error("Error loading inventory:", err));
}

function update_stock(filtered = ingredients) {
  stockTable.innerHTML = "";
  filtered.forEach((item, index) => {
    const row = document.createElement("tr");
    if (item.quantity < item.parLevel) {
      row.classList.add("low-stock");
    }
    row.innerHTML = `
      <td>${item.name}</td>
      <td>${item.quantity}</td>
      <td>
        <button class="btn" onclick="add_del(${index})">+</button>
        <input type="number" id="change-${index}" min="1" />
        <button class="btn" onclick="remove_del(${index})">−</button>
      </td>`;
    stockTable.appendChild(row);
  });
  update_alert();
}

function add_del(index) {
  const input = document.getElementById(`change-${index}`);
  let amount = parseInt(input.value);
  if (isNaN(amount)) amount = 1;
  ingredients[index].quantity += amount;
  input.value = "";
  syncInventory(ingredients[index]);
  update_stock();
}

function remove_del(index) {
  const input = document.getElementById(`change-${index}`);
  let amount = parseInt(input.value);
  if (isNaN(amount)) amount = 1;
  ingredients[index].quantity = Math.max(0, ingredients[index].quantity - amount);
  input.value = "";
  syncInventory(ingredients[index]);
  update_stock();
}

function update_alert() {
  alertList.innerHTML = "";
  ingredients.forEach(item => {
    if (item.quantity < item.parLevel) {
      const div = document.createElement("div");
      div.classList.add("alert");
      div.textContent = `${item.name} stock below par level!`;
      alertList.appendChild(div);
    }
  });
}

function filter_stock() {
  const query = document.getElementById("search-input").value.toLowerCase();
  const filtered = ingredients.filter(item => item.name.toLowerCase().includes(query));
  update_stock(filtered);
}

function syncInventory(item) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../controller/inventoryDatabase.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  const data = JSON.stringify({
    name: item.name,
    quantity: item.quantity
  });

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status !== 200) {
      alert("Failed to update inventory.");
    }
  };

  xhr.send("data=" + data);
}

loadInventory();
