<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href= "https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href=<?= base_url("loginn/fonts/icomoon/style.css")?>>

    <link rel="stylesheet" href=<?=base_url("loginn/css/owl.carousel.min.css")?>>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=<?=base_url("loginn/css/bootstrap.min.css")?>>
    
    <!-- Style -->
    <link rel="stylesheet" href=<?=base_url("loginn/css/style.css")?>>

    <title>Login #2</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('login/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7" style="margin-top:-1px;">
            <h3 style="text-align:center; font-family:'Times New Roman', Times, serif; color: brown;font-size :35px;"><strong>Login Fiflowers <br></strong></h3> <br>
            <form action="<?= route_to('login') ?>" method="post">
            <?= csrf_field() ?>
            <?= view('Myth\Auth\Views\_message_block') ?>
              
            <?php if ($config->validFields === ['email']) : ?>
                <div class="form-group first">
                <label for="Login"><?= lang('Auth.email') ?></label>
                <input name="login"type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.email') ?>" id="login">
                    <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                        </div>
                </div>  <br>
                

            <?php else : ?>
                <div class="form-group first">
                <label for="Login"><?= lang('Auth.emailOrUsername') ?></label>
                <input name="login"type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.emailOrUsername') ?>" id="login">
                    <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                </div> 
            <?php endif; ?>
            
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" type="password" name="password">
                    <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>
                </div> <br>
              
            <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                <input type="checkbox" checked="checked"/>
                <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
            </div>
              <button type="submit" class="btn btn-block btn-primary"><?= lang('Auth.loginAction') ?></button>

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src=<?=base_url("loginn/js/jquery-3.3.1.min.js")?>></script>
    <script src=<?=base_url("loginn/js/popper.min.js")?>></script>
    <script src=<?=base_url("loginn/js/bootstrap.min.js")?>></script>
    <script src=<?=base_url("loginn/js/main.js")?>></script>
  </body>
</html>