<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
    <link href="/css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <?php include APPPATH . 'Views/layouts/navbar.php'; ?>

        <main class="main-content">
            <h1>Create New Order</h1>
            <form action="<?= site_url('/orders/store'); ?>" method="post">
                <div class="form-group">
                    <label for="customer_name">Customer Name</label>
                    <input type="text" id="customer_name" name="customer_name" required>
                </div>
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="number" id="total" name="total" required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status">
                        <option value="Pending">Pending</option>
                        <option value="Completed">Completed</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create Order</button>
            </form>
        </main>
    </div>
</body>

</html>