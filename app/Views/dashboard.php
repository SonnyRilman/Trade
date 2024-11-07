<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bali Statue Sales Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">

</head>

<body>
    <!-- Vertical Navbar -->
    <nav class="vertical-nav">
        <a href="#" class="nav-item active">
            <i class="fas fa-th-large"></i>
            Dashboard
        </a>
        <a href="/statues" class="nav-item">
            <i class="fas fa-monument"></i>
            Statues
        </a>
        <a href="/staff" class="nav-item">
            <i class="fas fa-users"></i>
            Staff
        </a>
        <a href="/inventory" class="nav-item">
            <i class="fas fa-box"></i>
            Inventory
        </a>
        <a href="/reports" class="nav-item">
            <i class="fas fa-chart-bar"></i>
            Reports
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-shopping-cart"></i>
            Orders
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-truck"></i>
            Shipping
        </a>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
       <div class="header">
    <div class="d-flex align-items-center">
        <img src="/LOGO TRANSPARANT.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 10px;">
        <h1>TradeSmart</h1>
    </div>
    <div>
        <i class="fas fa-bell me-3"></i>
        <img src="/api/placeholder/40/40" alt="User" class="rounded-circle">
    </div>
</div>


        <div class="row g-4">
            <!-- Daily Sales Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daily Sales <i class="fas fa-dollar-sign float-end"></i></h5>
                        <p class="card-value">$2k</p>
                        <p class="text-muted">9 February 2024</p>
                        <div class="mini-chart">
                            <div class="mini-chart-bar" style="height: 60%;"></div>
                            <div class="mini-chart-bar" style="height: 40%;"></div>
                            <div class="mini-chart-bar" style="height: 80%;"></div>
                            <div class="mini-chart-bar" style="height: 50%;"></div>
                            <div class="mini-chart-bar" style="height: 70%;"></div>
                            <div class="mini-chart-bar" style="height: 90%;"></div>
                            <div class="mini-chart-bar" style="height: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Monthly Revenue Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Monthly Revenue <i class="fas fa-chart-line float-end"></i></h5>
                        <p class="card-value">$55k</p>
                        <p class="text-muted">1 Jan - 1 Feb</p>
                        <div class="mini-chart">
                            <div class="mini-chart-bar" style="height: 80%;"></div>
                            <div class="mini-chart-bar" style="height: 60%;"></div>
                            <div class="mini-chart-bar" style="height: 70%;"></div>
                            <div class="mini-chart-bar" style="height: 90%;"></div>
                            <div class="mini-chart-bar" style="height: 75%;"></div>
                            <div class="mini-chart-bar" style="height: 85%;"></div>
                            <div class="mini-chart-bar" style="height: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inventory Status Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Inventory Status <i class="fas fa-boxes float-end"></i></h5>
                        <p class="card-value">250 Statues</p>
                        <p class="text-muted">Current Stock</p>
                        <div class="mini-chart">
                            <div class="mini-chart-bar" style="height: 50%;"></div>
                            <div class="mini-chart-bar" style="height: 70%;"></div>
                            <div class="mini-chart-bar" style="height: 60%;"></div>
                            <div class="mini-chart-bar" style="height: 80%;"></div>
                            <div class="mini-chart-bar" style="height: 90%;"></div>
                            <div class="mini-chart-bar" style="height: 75%;"></div>
                            <div class="mini-chart-bar" style="height: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Popular Statues -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Popular Statues <a href="#" class="float-end text-muted">See All</a></h5>
                        <div class="popular-statues">
                            <div class="statue-item">
                                <img src="/api/placeholder/60/60" alt="Dewi Sri Statue" class="statue-image">
                                <div class="statue-details">
                                    <div class="statue-name">Dewi Sri Statue</div>
                                    <div class="statue-info">Size: 30cm</div>
                                </div>
                                <div class="text-end">
                                    <div class="statue-price">$150.00</div>
                                    <div class="statue-status in-stock">In Stock</div>
                                </div>
                            </div>
                            <div class="statue-item">
                                <img src="/api/placeholder/60/60" alt="Ganesha Statue" class="statue-image">
                                <div class="statue-details">
                                    <div class="statue-name">Ganesha Statue</div>
                                    <div class="statue-info">Size: 45cm</div>
                                </div>
                                <div class="text-end">
                                    <div class="statue-price">$200.00</div>
                                    <div class="statue-status in-stock">In Stock</div>
                                </div>
                            </div>
                            <div class="statue-item">
                                <img src="/api/placeholder/60/60" alt="Buddha Statue" class="statue-image">
                                <div class="statue-details">
                                    <div class="statue-name">Buddha Statue</div>
                                    <div class="statue-info">Size: 50cm</div>
                                </div>
                                <div class="text-end">
                                    <div class="statue-price">$180.00</div>
                                    <div class="statue-status out-of-stock">Out of Stock</div>
                                </div>
                            </div>
                            <div class="statue-item">
                                <img src="/api/placeholder/60/60" alt="Barong Mask" class="statue-image">
                                <div class="statue-details">
                                    <div class="statue-name">Barong Mask</div>
                                    <div class="statue-info">Size: 40cm</div>
                                </div>
                                <div class="text-end">
                                    <div class="statue-price">$120.00</div>
                                    <div class="statue-status in-stock">In Stock</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Orders <a href="#" class="float-end text-muted">See All</a></h5>
                        <div class="popular-statues">
                            <div class="statue-item">
                                <img src="/api/placeholder/60/60" alt="Garuda Wisnu Statue" class="statue-image">
                                <div class="statue-details">
                                    <div class="statue-name">Garuda Wisnu Statue</div>
                                    <div class="statue-info">Order: #12345</div>
                                </div>
                                <div class="text-end">
                                    <div class="statue-price">$250.00</div>
                                    <div class="statue-status in-stock">Processing</div>
                                </div>
                            </div>
                            <div class="statue-item">
                                <img src="/api/placeholder/60/60" alt="Rama Sita Statue" class="statue-image">
                                <div class="statue-details">
                                    <div class="statue-name">Rama Sita Statue</div>
                                    <div class="statue-info">Order: #12346</div>
                                </div>
                                <div class="text-end">
                                    <div class="statue-price">$300.00</div>
                                    <div class="statue-status in-stock">Shipped</div>
                                </div>
                            </div>
                            <div class="statue-item">
                                <img src="/api/placeholder/60/60" alt="Hanuman Statue" class="statue-image">
                                <div class="statue-details">
                                    <div class="statue-name">Hanuman Statue</div>
                                    <div class="statue-info">Order: #12347</div>
                                </div>
                                <div class="text-end">
                                    <div class="statue-price">$220.00</div>
                                    <div class="statue-status out-of-stock">Pending</div>
                                </div>
                            </div>
                            <div class="statue-item">
                                <img src="/api/placeholder/60/60" alt="Hanuman Statue" class="statue-image">
                                <div class="statue-details">
                                    <div class="statue-name">Hanuman Statute</div>
                                    <div class="statue-info">Order: #12347</div>
                                </div>
                                <div class="text-end">
                                    <div class="statue-price">$220.00</div>
                                    <div class="statue-status out-of-stock">Pending</div>
                                </div>
                            </div>
                            <div class="statue-item">
                                <img src="/api/placeholder/60/60" alt="Legong Dancer Statue" class="statue-image">
                                <div class="statue-details">
                                    <div class="statue-name">Legong Dancer Statue</div>
                                    <div class="statue-info">Order: #12348</div>
                                </div>
                                <div class="text-end">
                                    <div class="statue-price">$180.00</div>
                                    <div class="statue-status in-stock">Delivered</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>