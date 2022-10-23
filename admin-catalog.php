<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>

    <link rel="stylesheet" href="css/style-dashboard.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="img/2.png" alt="Blist" style="height: 60px; width:60px;">
                </span>

                <div class="text logo-text">
                    <span class="name" style="padding-left:10px;color: rgb(223, 111, 71);font-size: 25px;">Blist</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="admin-dashboard.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="admin-account.php">
                            <i class='bx bxs-user-account icon' ></i>
                            <span class="text nav-text">Account</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="admin-members.php">
                            <i class='bx bx-group icon'></i>
                            <span class="text nav-text">Membership</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="admin-catalog.php">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Catalog</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="admin-transactions.php">
                            <i class='bx bx-book-add icon' ></i>
                            <span class="text nav-text">Transactions</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="admin-requests.php">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Book Requests</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text" style = "text-align:center;">Catalog</div>

        <!-- Contents Here-->
      
    </section>

    <script src="js/script-dash.js"></script>
</body>
</html>