<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeSmart POS - Inventory Management</title>
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

        .search-bar {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        .search-bar input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid var(--accent-color);
            margin-right: 10px;
            outline: none;
            color: var(--text-color);
            background-color: #3b3b3b;
        }

        .search-bar input::placeholder {
            color: var(--text-color);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid var(--accent-color);
            transition: background-color 0.2s;
        }

        th {
            background-color: var(--primary-color);
        }

        tr:hover {
            background-color: var(--secondary-color);
        }

        .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }

        .badge-success {
            background-color: #28a745;
        }

        .badge-warning {
            background-color: var(--gold-color);
            color: var(--bg-color);
        }

        .badge-info {
            background-color: #17a2b8;
        }

        .badge-danger {
            background-color: #dc3545;
        }

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
        <?php include APPPATH . 'Views/layouts/navbar.php'; ?>

        <main class="main-content">
            <div class="header">
                <h1>Inventory Management</h1>
                <div class="search-bar">
                    <input type="text" placeholder="Search by name...">
                    <button class="btn btn-primary">Search</button>
                </div>
                <div>
                    <a href="/inventory/add"><button class="btn btn-primary">Add Statue</button></a>
                    <select class="sort-select">
                        <option>Sort by</option>
                        <option>Name</option>
                        <option>Date</option>
                        <option>Status</option>
                    </select>
                </div>
            </div>

            <h2>Statue Inventory</h2>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Artist</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inventory as $item): ?>
                    <tr>
                        <td>#<?= $item['id']; ?></td>
                        <td>
                            <img src="/api/placeholder/40/40" alt="<?= $item['name']; ?>" class="avatar">
                            <?= $item['name']; ?>
                        </td>
                        <td><?= $item['artist']; ?></td>
                        <td><?= $item['stock']; ?></td>
                        <td>$<?= number_format($item['price'], 2); ?></td>
                        <td><span class="badge badge-success"><?= $item['status']; ?></span></td>
                        <td><button class="btn btn-outline"><i class="fas fa-edit"></i></button></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>