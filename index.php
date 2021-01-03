<?php include 'includes/header.php'; ?>

<section id="loginSection">
  <div class="login-card">
    <div class="card">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="login-form">
            <h5 class="text-center text-uppercase">Login Form</h5>
            <form method="post" action="#" class="ml-4 mr-4">
              <input type="email" name="email" class="form-control mt-4" placeholder="Email" />
              <input type="password" name="psw" class="form-control mt-3" placeholder="Password" />
              <button name="login" class="btn btn-block login-btn mt-4">Log In</button>
              <span><a href="" title="forgot_password">Forgot Password</a></span>
            </form>
          </div>
          <span class="sb-title hidden">SalesBook</span>
        </div>
        <div class="col-lg-8 col-md-8">
          <div class="login-page-carousel ">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" style="height: 500px; width: 700px" src="images/image1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" style="height: 500px; width: 700px" src="images/image1.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" style="height: 500px; width: 700px" src="images/image1.png" alt="Third slide">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<?php

if (isset($_POST['login'])) {
  
}

?>