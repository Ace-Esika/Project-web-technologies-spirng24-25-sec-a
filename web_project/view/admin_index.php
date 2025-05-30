
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard – Ingredients</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
      body {
        font-family: Arial, sans-serif;
        background: #eef2f3;
        padding: 0;
        margin: 0;
      }

      .shortchut {
        max-width: 700px;
        margin: 40px auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
      }

      .shortchut ul{
        list-style: none;
        padding: 0;
      margin: 0;
      }
      .shortchut li{
        margin: 15px 0;
      }
      .shortchut ul li a{
      color: #00796b;
     
      text-decoration: none;
      font-size: 18px;
      display: block;
      padding: 10px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      }
      .shortchut ul li a:hover{
        background-color: #00796b;
        color: white;
      }
      
      .side{
        max-width: 400px;
        margin: 40px auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin: 10px;
      }
      .sec{
        max-width: 700px;
        margin: 40px auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin: 10px;
      }
      .card {
      background-color: #e8f5e9;
      padding: 20px;
      margin: 10px;
      border-radius: 10px;
      width: 250px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      text-align: center;

      display: flex;
      flex-direction: column;
      justify-content: center; 
      align-items: center; 
    }

    .card h2 {
      margin: 0;
      color: #2e7d32;
    }

    .card p {
      font-size: 14px;
      color: #555;
    }

      h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #00796b;
      }

      table {
        width: 100%;
        border-collapse: collapse;
      }

      th,
      td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
      }

      th {
        background: #00796b;
        color: white;
      }
      .total_order ,.total_expence ,.total_pending{
      background-color: #fff;
      border-radius: 10px;
      margin: 10px;
      width: 100%;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      text-align: center;

      display: flex;
      flex-direction: column;
      justify-content: center; 
      align-items: center; 
      }
      .chart-container {
      width: 90%;
      max-width: 1000px;
      margin: 40px auto;
      padding: 20px;
      background-color: white;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

      tr.low-stock {
        background-color: #ffcccc;
      }

      tr.ok-stock {
        background-color: #e8f5e9;
      }
    </style>
  </head>
  <body>
    <?php include 'admin_nav.php'; ?>
    <div style="display: flex; margin-top: 80px;" class="container">
      <div class="shortchut side" style="flex: 1;">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Employee</a></li>
          <li><a href="#">Tables</a></li>
          <li><a href="#">Discounts</a></li>
          <li><a href="#">Emails</a></li>
          <li><a href="#">Posts</a></li>
        </ul>
      </div>
      <div  style="flex: 3">
          <div style="display: flex;">
            <div class="sec" style="flex: 1;">
              <h2 style="text-align:center; color:#00796b;">Activity – Total Sales (৳)</h2>
              <canvas id="activityChart" width="400" height="250"></canvas>
            </div>
            <div class="sec card" style="flex: 1;">
              <h2>৳12,000</h2>
              <p>Total Sales</p>
            </div>

          </div>
          <div  class="chart-container">
            <h2 class="chart-title">Order Rate</h2>
            <canvas id="Order_rate_chart"></canvas>
          </div>
          <div  class="chart-container">
            <h2 class="chart-title">Order Activity</h2>
            <canvas id="Order_chart"></canvas>
          </div>
      </div>
      <div style="flex: 1;">
        <div>
          <div class="total_order">
            <h3>456</h3>
            <p>Total Order</p>
          </div>
          <div class="total_expence">
            <h3>1300</h3>
            <p>Total Expences</p>
          </div>
          <div class="total_pending">
            <h3>7</h3>
            <p>Pending Order</p>
          </div>
        </div>
        <div class="chart-container">
          <h2 class="chart-title">Popular Items</h2>
          <canvas id="item_rank"></canvas>
        </div>

      </div>
    </div>
    
  </body>
  <script>
    
  const ctx = document.getElementById('activityChart').getContext('2d');

const activityChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 
    datasets: [{
      label: 'Total Sell (৳)',
      data: [1200, 1500, 1000, 1800, 1600, 2000, 1700], 
      backgroundColor: 'rgba(0, 121, 107, 0.1)',
      borderColor: '#00796b',
      borderWidth: 2,
      fill: true,
      tension: 0.4
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true,
        title: {
          display: true,
          text: 'Taka (৳)'
        }
      },
      x: {
        title: {
          display: true,
          text: 'Day'
        }
      }
    }
  }
});
const order_rate_ctx = document.getElementById('Order_rate_chart').getContext('2d');

  const orderRateChart = new Chart(order_rate_ctx, {
    type: 'line',
    data: {
      labels: [
        'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
      ],
      datasets: [
        {
          label: '2023',
          data: [120, 150, 170, 140, 180, 200, 190, 210, 180, 160, 170, 220],
          backgroundColor: 'rgba(0, 150, 136, 0.1)',
          borderColor: '#009688',
          borderWidth: 2,
          tension: 0.4,
          fill: true
        },
        {
          label: '2024',
          data: [130, 140, 160, 155, 175, 220, 210, 230, 200, 190, 180, 240],
          backgroundColor: 'rgba(255, 152, 0, 0.1)',
          borderColor: '#ff9800',
          borderWidth: 2,
          tension: 0.4,
          fill: true
        }
      ]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
          title: {
            display: true,
            text: 'Order Count'
          }
        },
        x: {
          title: {
            display: true,
            text: 'Month'
          }
        }
      }
    }
  });
new Chart(document.getElementById("Order_chart"), {
    type: "bar", 
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May" ,"Jun" ,"July","Aug","Sept","Oct","Nov","Dec"],  
      datasets: [{
        label: "Orders",
        data: [150, 40, 200, 350, 370], 
        backgroundColor: "#ff9800", 
        borderColor: "#f57c00",     
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,  
          ticks: {
            stepSize: 50  
          }
        }
      },
      plugins: {
        tooltip: {
          callbacks: {
            label: function(context) {
              return `৳${context.raw}`;  
            }
          }
        }
      }
    }
  });
new Chart(document.getElementById("item_rank"), {
    type: "pie",
    data: {
      labels: ["Cheese Burger", "Fried Chicken", "Veg Pizza", "Beef Steak", "Club Sandwich", "Pasta Alfredo", "French Fries"],
      datasets: [{
        label: "Revenue ()",
        data: [80, 150, 85, 75, 60, 50, 70],
        backgroundColor: [
          "#4caf50", "#2196f3", "#ff9800", "#9c27b0", "#f44336",
    "#00bcd4", "#ffc107", "#795548", "#607d8b"
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'right'
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              return `${context.label}: ${context.parsed}`;
            }
          }
        }
      }
    }
  });
  </script>
</html>
