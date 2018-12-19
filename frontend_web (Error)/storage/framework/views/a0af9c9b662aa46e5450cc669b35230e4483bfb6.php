<!DOCTYPE html>
<html>
<?php echo $__env->make('templates/login/head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>SI</b> Rubik</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Masuk untuk memulai</p>

    <form action="<?php echo e(route('login')); ?>" method="post">
        <?php echo csrf_field(); ?>
      <div class="form-group has-feedback">
          <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="Alamat email" required autofocus>

          <?php if($errors->has('email')): ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($errors->first('email')); ?></strong>
              </span>
          <?php endif; ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="Kata Sandi" name="password" required>

          <?php if($errors->has('password')): ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($errors->first('password')); ?></strong>
              </span>
          <?php endif; ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p><br></br></p>
      <a href="<?php echo e(route('password.request')); ?>" class="btn btn-primary btn-block btn-flat">Lupa kata sandi?</a>
      <a href="<?php echo e(route('register')); ?>" class="btn btn-primary btn-block btn-flat"></i>Buat akun baru</a>
    </div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
