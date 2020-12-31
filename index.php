<?php
require("header.php");
?>
<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-8 col-md-7">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4" style="font-weight: bold;">Login to you Lada Account</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Email Address">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                    </div>
                  
                    <div class="form-group">
                      <a href="account/dashboard.php" class="btn btn-primary btn-block">Login</a>
                    </div>
                   
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="register.php">Create an Account!</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  require("footer.php");
  ?>