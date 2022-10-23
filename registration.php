<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link rel="stylesheet"  href="css/style-login-reg.css">
</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h3 class="text-center mb-5">Create New Account</h3>
              
              <form action = "config.php" method = "post">
                

                <div class="form-outline mb-3">
                  <input type="text"
                  id="First_Name"
                  class="form-control form-control-m"
                  for = "First_Name"
                  placeholder = "First Name"
                  style = "border-radius:20px;"
                  name = "First_Name"
                  value="" required>

                </div>

                <div class="form-outline mb-3">
                  <input type="text"
                  id="Last_Name"
                  class="form-control form-control-m"
                  for = "Last_Name"
                  placeholder = "Last Name"
                  style = "border-radius:20px;"
                  name = "Last_Name"
                  value="" required>
                </div>
                
                <div class="form-outline mb-3">
                  <input type="date"
                  id="Birth_Date"
                  class="form-control form-control-m"
                  for = "Birth_Date"
                  style = "border-radius:20px;"
                  name = "Birth_Date"
                  value="" required>
                </div>

                <div class="form-outline mb-3">
                  <input type="email"
                  id="Email"
                  class="form-control form-control-m"
                  for = "Email"
                  placeholder = "Email"
                  style = "border-radius:20px;"
                  name = "Email"
                  value="" required>
                </div>

                <div class="form-outline mb-3">
                  <input type="number"
                  id="Contact_Number" 
                  class="form-control form-control-m"
                  for = "Contact_Number"
                  placeholder = "Contact Number"
                  style = "border-radius:20px;"
                  name = "Contact_Number"
                  value="" required>
                </div>

                <div class="form-outline mb-3">
                  <input type="text" id="Address"
                  class="form-control form-control-m"
                  for = "Address"
                  placeholder = "Complete Address"
                  style = "border-radius:20px;"
                  name = "Address"
                  value="" required>
                </div>

                <div class="form-outline mb-3">
                  <input type="password"
                  id="Password"
                  class="form-control form-control-m"
                  for = "Password"
                  placeholder = "Password"
                  style = "border-radius:20px;"
                  name = "Password"
                  value="" required>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" style = "border-radius:20px;">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>