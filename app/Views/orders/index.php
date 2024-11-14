<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeSmart POS - Orders</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php include APPPATH . 'Views/layouts/navbar.php'; ?>

        <main class="main-content">
            <div class="header">
                <h1>Order Management</h1>
                <a href="<?= site_url('/orders/create'); ?>" class="btn btn-primary">Create New Order</a>
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
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td>#<?= $order['order_id']; ?></td>
                            <td><?= $order['customer_name']; ?></td>
                            <td>$<?= number_format($order['total'], 2); ?></td>
                            <td><span class="badge badge-<?= strtolower($order['status']); ?>"><?= $order['status']; ?></span></td>
                            <td><button class="btn btn-primary">Details</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>
