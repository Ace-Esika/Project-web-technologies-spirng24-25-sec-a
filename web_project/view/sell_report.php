<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sell Report</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background-color: #f4f4f4;
      color: #333;
    }

    header {
      background-color: #4CAF50;
      color: white;
      padding: 20px 0;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }

    .dashboard {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      padding: 20px;
      background-color: white;
    }

    .card {
      background-color: #e8f5e9;
      padding: 20px;
      margin: 10px;
      border-radius: 10px;
      width: 250px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      text-align: center;
    }

    .card h2 {
      margin: 0;
      color: #2e7d32;
    }

    .card p {
      font-size: 14px;
      color: #555;
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

    .chart-title {
      text-align: center;
      font-size: 18px;
      margin-bottom: 20px;
    }

    button {
      padding: 10px 20px;
      background-color: #00796b;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      margin: 40px auto;
      display: block;
    }
  </style>
</head>
<body>

  <?php include 'admin_nav.php'; ?>

<section class="dashboard" style="margin-top: 60px;">
  <div class="card">
    <h2>৳12,000</h2>
    <p>Total Sales</p>
  </div>
  <div class="card">
    <h2>150</h2>
    <p>Total Orders</p>
  </div>
  <div class="card">
    <h2>৳80</h2>
    <p>Avg Order Value</p>
  </div>
</section>

  <div style="display: flex;">
    <div style="flex: 1;">
      <div class="chart-container">
        <h2 class="chart-title">Popular Items</h2>
        <canvas id="item_rank"></canvas>
      </div>
    </div>
    <div style="flex: 2;">
      <div class="chart-container">
        <h2 class="chart-title"> Sales by Daypart</h2>
        <canvas id="day_part"></canvas>
      </div>
      
      <div class="chart-container">
        <h2 class="chart-title">Sales by Server</h2>
        <canvas id="server_part"></canvas>
      </div>
      
      <div class="chart-container">
        <h2 class="chart-title">Sales by Menu Item</h2>
        <canvas id="menu_part"></canvas>
      </div>
      
      <div class="chart-container">
        <h2 class="chart-title">Year-over-Year Sales Trend</h2>
        <canvas id="year_part"></canvas>
      </div>
    </div>
    <div style="flex: 1;">
      <div class="chart-container">
        <h2 class="chart-title">Labour Cost by Role</h2>
        <canvas id="labout_part"></canvas>
      </div>
    </div>

  </div>



<button>Export</button>

<script>
  new Chart(document.getElementById("day_part"), {
    type: "line",
    data: {
      labels: ["6–8AM", "8–10AM", "10–12PM", "12–2PM", "2–4PM", "4–6PM", "6–8PM", "8–10PM", "10–12AM"],
      datasets: [{
        label: "Revenue (৳)",
        data: [200, 400, 600, 800, 750, 500, 650, 400, 300],
        borderColor: "#ff9800",
        backgroundColor: "rgba(255, 152, 0, 0.2)",
        tension: 0.3,
        pointRadius: 5,
        pointBackgroundColor: "#ff9800"
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: { beginAtZero: true }
      }
    }
  });

  new Chart(document.getElementById("server_part"), {
    type: "line",
    data: {
      labels: ["Hasan", "Ali", "Shakib","Tamim","Maruf","Tonmoy","Esika","Dristy"],
      datasets: [{
        label: "Revenue (৳)",
        data: [900, 1100, 750,300,400,1100,700,650],
        borderColor: "#3f51b5",
        backgroundColor: "rgba(63, 81, 181, 0.2)",
        tension: 0.3,
        pointRadius: 5,
        pointBackgroundColor: "#3f51b5"
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: { beginAtZero: true }
      }
    }
  });
  new Chart(document.getElementById("labout_part"), {
    type: "bar",  
    data: {
      labels: ["Waiter", "Chef", "Cashier", "Manager", "Cleaner"], 
      datasets: [{
        label: "Labour Cost (৳)",
        data: [1500, 4000, 2000, 3500, 1000],  
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
            stepSize: 500  
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

  new Chart(document.getElementById("menu_part"), {
    type: "line",
    data: {
      labels: ["Cheese Burger", "Fried Chicken", "Veg Pizza", "Beef Steak", "Club Sandwich", "Pasta Alfredo", "French Fries"],
      datasets: [{
        label: "Units Sold",
        data: [80, 95, 85, 75, 60, 50, 70],
        borderColor: "#009688",
        backgroundColor: "rgba(0, 150, 136, 0.2)",
        tension: 0.3,
        pointRadius: 5,
        pointBackgroundColor: "#009688"
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: { beginAtZero: true }
      }
    }
  });

  new Chart(document.getElementById("year_part"), {
    type: "line",
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr"],
      datasets: [
        {
          label: "2024",
          data: [3000, 3200, 3100, 3500],
          borderColor: "#4caf50",
          backgroundColor: "rgba(76, 175, 80, 0.2)",
          tension: 0.3,
          pointRadius: 5,
          pointBackgroundColor: "#4caf50"
        },
        {
          label: "2025",
          data: [3200, 3400, 3300, 3700],
          borderColor: "#f44336",
          backgroundColor: "rgba(244, 67, 54, 0.2)",
          tension: 0.3,
          pointRadius: 5,
          pointBackgroundColor: "#f44336"
        }
      ]
    },
    options: {
      responsive: true,
      scales: {
        y: { beginAtZero: true }
      }
    }
  });
  
</script>

</body>
</html>
