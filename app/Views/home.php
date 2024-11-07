<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to TradeSmart</title>
    <style>
        :root {
            --primary-color: #8B4513;
            --secondary-color: #A0522D;
            --accent-color: #CD853F;
            --gold-color: #DAA520;
            --bg-color: #2C2C2C;
            --card-bg-color: #383838;
            --text-color: #FFFFFF;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        .home-card {
            background-color: var(--card-bg-color);
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .home-card h1 {
            color: var(--gold-color);
            margin-bottom: 1rem;
        }

        .home-card p {
            color: var(--accent-color);
            margin-bottom: 1.5rem;
        }

        .btn-login {
            display: block;
            width: 100%;
            padding: 0.75rem 1rem;
            background-color: var(--primary-color);
            color: var(--text-color);
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
            font-size: 1rem;
            text-decoration: none;
            text-align: center;
        }

        .btn-login:hover {
            background-color: var(--secondary-color);
        }
    </style>
</head>
<body>
    <div class="home-card">
        <h1>Welcome to TradeSmart</h1>
        <p>Manage your statue business in Bali with ease. Please log in as admin to continue.</p>
        <a href="/login" class="btn-login">Admin Login</a>
    </div>
</body>
</html>
