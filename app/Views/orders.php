<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeSmart POS - Orders</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #8B4513;
            --accent-color: #DAA520;
            --bg-color: #2C2C2C;
            --text-color: #FFFFFF;
            --card-bg: #292929;
            --badge-success: #28a745;
            --badge-warning: #ffc107;
            --badge-danger: #dc3545;
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
            padding: 30px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        h1 {
            color: var(--accent-color);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: var(--card-bg);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #444;
        }

        th {
            background-color: var(--primary-color);
        }

        td {
            color: var(--text-color);
        }

        .badge {
            padding: 5px 10px;
            border-radius: 12px;
            font-size: 12px;
        }

        .badge-success { background-color: var(--badge-success); }
        .badge-warning { background-color: var(--badge-warning); }
        .badge-danger { background-color: var(--badge-danger); }

        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary {
            background-color: var(--accent-color);
            color: var(--text-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-color);
        }

        .chart-container {
            position: relative;
            width: 100%;
            height: 300px;
            margin-top: 30px;
            background-color: var(--card-bg);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .chart-container canvas {
            width: 100% !important;
            height: 100% !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php include APPPATH . 'Views/layouts/navbar.php'; ?>

        <main class="main-content">
            <div class="header">
                <h1>Order Management</h1>
                <button class="btn btn-primary">Create New Order</button>
            </div>

            <h2>Order List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1024</td>
                        <td>John Doe</td>
                        <td>$500.00</td>
                        <td><span class="badge badge-success">Completed</span></td>
                        <td><button class="btn btn-primary">Details</button></td>
                    </tr>
                    <tr>
                        <td>#1025</td>
                        <td>Jane Smith</td>
                        <td>$320.00</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                        <td><button class="btn btn-primary">Details</button></td>
                    </tr>
                    <tr>
                        <td>#1026</td>
                        <td>Mike Brown</td>
                        <td>$200.00</td>
                        <td><span class="badge badge-danger">Cancelled</span></td>
                        <td><button class="btn btn-primary">Details</button></td>
                    </tr>
                </tbody>
            </table>

            <div class="chart-container">
                <canvas id="orderChart"></canvas>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctxOrders = document.getElementById('orderChart').getContext('2d');
        const orderChart = new Chart(ctxOrders, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Orders Over Time',
                    data: [10, 15, 8, 20, 12, 18],
                    backgroundColor: 'rgba(218, 165, 32, 0.3)',
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
    </script>
</body>
</html>
