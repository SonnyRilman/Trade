<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeSmart POS - Reservation</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #8B4513;
            --secondary-color: #A0522D;
            --accent-color: #CD853F;
            --gold-color: #DAA520;
            --bg-color: #1E1E1E;
            --text-color: #FFFFFF;
            --grid-color: #333333;
            --card-bg-color: #2C2C2C;
            --card-active-color: #CD853F;
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

        .sidebar {
            width: 250px;
            background-color: var(--primary-color);
            padding: 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--gold-color);
            margin-bottom: 30px;
            text-align: center;
        }

        .nav-item {
            padding: 10px 15px;
            color: var(--text-color);
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .nav-item:hover, .nav-item.active {
            background-color: var(--accent-color);
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            overflow-x: auto;
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
            background-color: var(--accent-color);
            color: var(--text-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
        }

        .btn-outline {
            background-color: var(--card-bg-color);
            border: 1px solid var(--accent-color);
            color: var(--text-color);
        }

        .btn-outline:hover, .btn-outline.active {
            background-color: var(--accent-color);
        }

        .reservation-grid {
            display: grid;
            grid-template-columns: auto repeat(11, 1fr);
            gap: 1px;
            background-color: var(--grid-color);
            border: 1px solid var(--grid-color);
        }

        .grid-header, .grid-cell {
            background-color: var(--bg-color);
            padding: 10px;
            text-align: center;
        }

        .grid-header {
            font-weight: bold;
        }

        .reservation-card {
            background-color: var(--card-bg-color);
            border-radius: 5px;
            padding: 5px;
            font-size: 12px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .reservation-card:hover {
            background-color: var(--accent-color);
        }

        .reservation-card.active {
            background-color: var(--card-active-color);
        }

        .user-icon {
            margin-right: 5px;
        }

        .floor-tabs {
            display: flex;
            margin-bottom: 20px;
        }

        .floor-tab {
            margin-right: 10px;
        }

        .date-select {
            padding: 10px;
            background-color: var(--card-bg-color);
            color: var(--text-color);
            border: 1px solid var(--accent-color);
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="sidebar">
            <div class="logo">TradeSmart POS</div>
            <a href="#" class="nav-item"><i class="fas fa-th-large"></i> Dashboard</a>
            <a href="#" class="nav-item"><i class="fas fa-utensils"></i> Menu</a>
            <a href="#" class="nav-item"><i class="fas fa-users"></i> Staff</a>
            <a href="#" class="nav-item"><i class="fas fa-box"></i> Inventory</a>
            <a href="#" class="nav-item"><i class="fas fa-chart-bar"></i> Reports</a>
            <a href="#" class="nav-item"><i class="fas fa-concierge-bell"></i> Order/Table</a>
            <a href="#" class="nav-item active"><i class="fas fa-calendar-alt"></i> Reservation</a>
        </nav>
        
        <main class="main-content">
            <div class="header">
                <h1>Reservation</h1>
                <div>
                    <select class="date-select">
                        <option>Today</option>
                        <option>Tomorrow</option>
                        <option>Next 7 days</option>
                    </select>
                    <button class="btn btn-primary">Add New Reservation</button>
                </div>
            </div>
            
            <div class="floor-tabs">
                <button class="btn btn-outline active floor-tab">1st Floor</button>
                <button class="btn btn-outline floor-tab">2nd Floor</button>
                <button class="btn btn-outline floor-tab">3rd Floor</button>
            </div>
            
            <div class="reservation-grid">
                <div class="grid-header"></div>
                <div class="grid-header">10:00</div>
                <div class="grid-header">11:00</div>
                <div class="grid-header">12:00</div>
                <div class="grid-header">13:00</div>
                <div class="grid-header">14:00</div>
                <div class="grid-header">15:00</div>
                <div class="grid-header">16:00</div>
                <div class="grid-header">17:00</div>
                <div class="grid-header">18:00</div>
                <div class="grid-header">19:00</div>
                <div class="grid-header">20:00</div>
                
                <div class="grid-header">Bar</div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell">
                    <div class="reservation-card">
                        John Doe
                        <div><i class="fas fa-user user-icon"></i>01</div>
                    </div>
                </div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell">
                    <div class="reservation-card">
                        John Doe
                        <div><i class="fas fa-user user-icon"></i>01</div>
                    </div>
                </div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>

                <div class="grid-header">A1</div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell">
                    <div class="reservation-card active">
                        John Doe
                        <div><i class="fas fa-user user-icon"></i>01</div>
                    </div>
                </div>
                <div class="grid-cell"></div>

                <div class="grid-header">A2</div>
                <div class="grid-cell"></div>
                <div class="grid-cell">
                    <div class="reservation-card">
                        John Doe
                        <div><i class="fas fa-user user-icon"></i>01</div>
                    </div>
                </div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell">
                    <div class="reservation-card active">
                        John Doe
                        <div><i class="fas fa-user user-icon"></i>01</div>
                    </div>
                </div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>

                <!-- Add more rows for B1, B2, B3 etc. -->
            </div>
        </main>
    </div>
</body>
</html>