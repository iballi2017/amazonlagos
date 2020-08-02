<!-- header -->
<?php include_once '../components/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-4 offset-md-4">
        <div class="card my-5">
            <div class="card-header bg-white">
                <h5 class="text-center text_upper">Login</h5>
            </div>
  <div class="card-body">
    <form action="#">
        <div class="form_grp mb-4">
            <label class="text_capital d-block" for="email">Email Address</label>
            <input type="text" class="d-block w-100 py-2" name="email" id="email">
        </div>
        <div class="form_grp mb-4">
            <label class="text_capital" for="password">Password</label>
            <small class="float-right">
                <a href="#">Forgot Password?</a>
            </small>
            <input type="password" class="d-block w-100 py-2" name="password" id="password">
        </div>
        <div class="form_grp mb-4">
            <button class="btn-block py-2 light_grn_btn">Login</button>
        </div>
    </form>

    <div class="my-5">
        <small class="d-block text-center mb-1">Don't have an account?</small>
        <a href="./register-page.php" class="d-block text-center border_lemon py-2 txt_lemon green_hover rounded">Sign Up</a>
    </div>
  </div>
</div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include_once '../components/footer.php'; ?>