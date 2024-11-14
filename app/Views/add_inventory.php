<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Statue</title>
    <link href="/css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <main class="main-content">
            <h1>Add New Statue</h1>
            <form action="/inventory/save" method="POST">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="artist">Artist:</label>
                    <input type="text" id="artist" name="artist" required>
                </div>
                <div>
                    <label for="stock">Stock:</label>
                    <input type="number" id="stock" name="stock" required>
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="text" id="price" name="price" required>
                </div>
                <div>
                    <label for="status">Status:</label>
                    <select name="status" id="status" required>
                        <option value="Available">Available</option>
                        <option value="Limited Stock">Limited Stock</option>
                        <option value="Out of Stock">Out of Stock</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save Statue</button>
            </form>
        </main>
    </div>
</body>

</html>