<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>

    <link rel="stylesheet" href="css/style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    
        <style>
            input[type=text], select {
            text-align:center;
            width: 50%;
            padding: 10px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid orange;
            border-radius: 20px;
            box-sizing: border-box;
            }
            
            input[type=date],select{
                text-align:center;
                width:50%;
                padding:10px 20px;
                margin:8px 0;
                display:inline-block;
                border-radius:20px;
                box-sizing:border-box;
                border:1px solid orange;
            }
            
            input[type=email],select{
                text-align:center;
                width:50%;
                padding:10px 20px;
                margin:8px 0;
                display:inline-block;
                border-radius:20px;
                border:1px solid orange;
            }

            input[type=submit] {
            text-align:center;
            width: 50%;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            }

            input[type=submit]:hover {
            background-color: #45a049;
            }

            .account-content {
            border-radius: 5px;
            padding: 50px;
            }

            .btn-submit{
                background-color: orange; 
                border: none;
                color: white;
                padding: 10px 50px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                border-radius:20px;
                font-size: 16px;
            }
            .btn-save{
                background-color:green;
                border:none;
                color:white;
                padding:10px 50px;
                text-align:center;
                text-decoration:none;
                display:inline-block;
                border-radius:20px;
                font-size:16px;
                margin-left:50px;
            }
        </style>
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
        <div class="text">
        </div>
        
        <div class = "account-content">

                <form action = "" method = "">

                    <div class="form-outline mb-3" style = "margin-left:20px;text-align:center;"><hr> <br>
                    <h3>Update Account Information</h3> <br> <br>
                        <label>First Name</label>
                        <div class = "form-group">
                                <input type="text"
                                id="First_Name"
                                class="form-control form-control-m"
                                for = "First_Name"
                                name = "First_Name"
                                value="" required>
                        </div>
                        <label> Last Name </label>
                        <div class = "form-group">
                                <input type="text"
                                id="First_Name"
                                class="form-control form-control-m"
                                for = "Last_Name"
                                name = "Last_Name"
                                value="" required>
                        </div>
                        
                        <label> Birth Date</label>
                        <div class = "form-group">
                                <input type="date"
                                id="Birth_Date"
                                class="form-control form-control-m"
                                for = "Birth_Date"
                                name = "Birth_Date"
                                value="" required>
                        </div>

                        <label>Email</label>
                        <div class = "form-group">
                                <input type="email"
                                id="Email"
                                class="form-control form-control-m"
                                for = "Email"
                                name = "Email"
                                value="" required>
                        </div>

                        <label> Password</label>
                        <div class = "form-group">
                            <input type = "text"
                                    id = "Password"
                                    class = "form-control"
                                    for = "Password"
                                    name = "Password"
                                    value = "">

                        </div>

                        <button type = "submit" class = "btn-submit"> Edit </button>
                        <button type = "submit" class = "btn-save"> Save </button>
                    </div>
                        

                </form>
        </div>
    </section>

    <script src="js/script-dash.js"></script>
</body>
</html>