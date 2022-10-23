<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>


  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
          <img src = "img/3.png" style = "width:150px;height:150px;">
            <h4 class="fw-bold mb-5" style = "color:rgb(255, 134, 53);">Log In Now</h4>


            <form action = "authenticate.php" method = "post">

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email"
                id="Email"
                class="form-control"
                style = "border-radius:20px;"
                placeholder = "Enter Your Email Here"
                for = "Email"
                name = "Email"
                value = "" required>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password"
                id="Password"
                class="form-control" 
                style = "border-radius:20px;"
                placeholder = "Enter Your Password Here"
                for = "Password"
                name = "Password"
                value = "" required>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2"
                type="checkbox" value="" id="checkbox" checked 
                style = "border-radius:20px;"/>
                <label class="form-check-label">
                  Remember Me
                </label> <br>
                
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4 btn-lg"   style = "border-radius:20px;background-color:rgb(255, 134, 53);border-color:white;">
                Log In
              </button>

              <div class="registration">
                <a href = "registration.php">
                  <p> New User? Register Here. </p>
                </a>
              </div>

    
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="img/flib.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>

</section>
 
</body>
</html>