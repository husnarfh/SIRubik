<!DOCTYPE html>
<html>
<?php echo $__env->make('templates/register/head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo"><b>SI</b> Rubik</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Buat akun baru</p>

    <form action="<?php echo e(route('register')); ?>" method="post">
      <?php echo csrf_field(); ?>
      <div class="form-group has-feedback">
        <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>"placeholder="Nama lengkap" required autofocus>
        <?php if($errors->has('name')): ?>
        <span class="invalid-feedback" role="alert">
          <strong><?php echo e($errors->first('name')); ?></strong>
        </span>
        <?php endif; ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <input id="nomor_induk" type="text" class="form-control<?php echo e($errors->has('nomor_induk') ? ' is-invalid' : ''); ?>" name="nomor_induk" value="<?php echo e(old('nomor_induk')); ?>"placeholder="Nomor induk" required autofocus>
          <?php if($errors->has('nomor_induk')): ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('nomor_induk')); ?></strong>
          </span>
          <?php endif; ?>
          <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <input id="email" type="text" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>"placeholder="Alamat email" required autofocus>
          <?php if($errors->has('email')): ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('email')); ?></strong>
          </span>
          <?php endif; ?>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" value="<?php echo e(old('password')); ?>"placeholder="Kata sandi" required autofocus>
          <?php if($errors->has('password')): ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('password')); ?></strong>
          </span>
          <?php endif; ?>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password_confirmation" type="password" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
        <p><br></br></p>
        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary btn-block btn-flat">Sudah punya akun?</a>
    </div>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

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
