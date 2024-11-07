<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeSmart POS - Reports</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #8B4513;
            --secondary-color: #A0522D;
            --accent-color: #CD853F;
            --gold-color: #DAA520;
            --bg-color: #2C2C2C;
            --text-color: #FFFFFF;
            --card-bg: #1E1E1E;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            animation: fadeIn 0.5s ease-in-out;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--accent-color), var(--gold-color));
            color: var(--text-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
        }

        .report-section {
            margin-bottom: 40px;
        }

        .report-section h2 {
            margin-bottom: 20px;
        }

        .chart-container {
            position: relative;
            width: 100%;
            height: 300px;
            background-color: var(--card-bg);
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--text-color);
            font-size: 18px;
            font-weight: bold;
            padding: 10px;
        }

        .chart-container canvas {
            width: 100% !important;
            height: 100% !important;
        }

        .stat-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .stat-card {
            background-color: var(--card-bg);
            padding: 20px;
            border-radius: 10px;
            transition: transform 0.3s, background-color 0.3s;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .stat-card:hover {
            transform: scale(1.05);
            background-color: var(--secondary-color);
        }

        .stat-card .stat-icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .stat-card .stat-info {
            font-size: 16px;
        }

        .stat-card .stat-value {
            font-size: 24px;
            font-weight: bold;
            margin-top: 10px;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <?php include APPPATH . 'Views/layouts/navbar.php'; ?>

        <main class="main-content">
            <div class="header">
                <h1>Reports</h1>
                <button class="btn btn-primary">Generate Report</button>
            </div>
            
            <!-- Sales Overview Chart -->
            <div class="report-section">
                <h2>Sales Overview</h2>
                <div class="chart-container">
                    <canvas id="salesChart"></canvas>
                </div>
            </div>

            <!-- Key Statistics Cards -->
            <div class="report-section">
                <h2>Key Statistics</h2>
                <div class="stat-cards">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="stat-info">Total Sales</div>
                        <div class="stat-value">$10,000</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="stat-info">Total Orders</div>
                        <div class="stat-value">150</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-gem"></i>
                        </div>
                        <div class="stat-info">Top Selling Product</div>
                        <div class="stat-value">Bali Stone Elephant</div>
                    </div>
                </div>
            </div>

            <!-- Inventory Status Chart -->
            <div class="report-section">
                <h2>Inventory Status</h2>
                <div class="chart-container">
                    <canvas id="inventoryChart"></canvas>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctxSales = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctxSales, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May'],
                datasets: [{
                    label: 'Sales ($)',
                    data: [1000, 2000, 1500, 2500, 3000],
                    backgroundColor: 'rgba(218, 165, 32, 0.2)',
                    borderColor: 'rgba(218, 165, 32, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });

        const ctxInventory = document.getElementById('inventoryChart').getContext('2d');
        const inventoryChart = new Chart(ctxInventory, {
            type: 'doughnut',
            data: {
                labels: ['Available', 'Limited', 'Out of Stock'],
                datasets: [{
                    label: 'Inventory Status',
                    data: [70, 20, 10],
                    backgroundColor: [
                        'rgba(40, 167, 69, 0.8)',
                        'rgba(218, 165, 32, 0.8)',
                        'rgba(220, 53, 69, 0.8)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
</body>
</html>
