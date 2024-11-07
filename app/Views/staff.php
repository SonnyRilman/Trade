<!-- File: app/Views/staff.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeSmart POS - Staff Management</title>
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
            background-color: transparent;
            border: 1px solid var(--accent-color);
            color: var(--accent-color);
        }

        .btn-outline:hover {
            background-color: var(--accent-color);
            color: var(--text-color);
        }

        .sort-select {
            padding: 10px;
            background-color: var(--bg-color);
            color: var(--text-color);
            border: 1px solid var(--accent-color);
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid var(--accent-color);
        }

        th {
            background-color: var(--primary-color);
        }

        .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }

        .badge-success { background-color: #28a745; }
        .badge-warning { background-color: var(--gold-color); color: var(--bg-color); }
        .badge-info { background-color: #17a2b8; }
        .badge-danger { background-color: #dc3545; }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Include Navbar -->
        <?php include APPPATH . 'Views/layouts/navbar.php'; ?>

        <main class="main-content">
            <div class="header">
                <h1>Staff Management</h1>
                <div>
                    <button class="btn btn-primary">Add Staff</button>
                    <select class="sort-select">
                        <option>Sort by</option>
                        <option>Name</option>
                        <option>Date</option>
                        <option>Status</option>
                    </select>
                </div>
            </div>

            <h2>Staff (22)</h2>

            <div>
                <button class="btn btn-primary">Staff Management</button>
                <button class="btn btn-outline">Attendance</button>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Timings</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#101</td>
                        <td>
                            <img src="/api/placeholder/40/40" alt="Watson Joyce" class="avatar">
                            Watson Joyce
                            <div style="color: #888;">Manager</div>
                        </td>
                        <td>16-Apr-2024</td>
                        <td>9am to 6pm</td>
                        <td><span class="badge badge-success">Present</span></td>
                        <td><button class="btn btn-outline"><i class="fas fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>#102</td>
                        <td>
                            <img src="/api/placeholder/40/40" alt="Emma Thompson" class="avatar">
                            Emma Thompson
                            <div style="color: #888;">Waitress</div>
                        </td>
                        <td>16-Apr-2024</td>
                        <td>10am to 7pm</td>
                        <td><span class="badge badge-warning">Absent</span></td>
                        <td><button class="btn btn-outline"><i class="fas fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>#103</td>
                        <td>
                            <img src="/api/placeholder/40/40" alt="John Smith" class="avatar">
                            John Smith
                            <div style="color: #888;">Chef</div>
                        </td>
                        <td>16-Apr-2024</td>
                        <td>8am to 4pm</td>
                        <td><span class="badge badge-info">Half Shift</span></td>
                        <td><button class="btn btn-outline"><i class="fas fa-edit"></i></button></td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>
