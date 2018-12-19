<div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                    <?php echo e(Auth::user()->name); ?>

                  <small><?php echo e(Auth::user()->nomor_induk); ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                  <div class="pull-center">
                      <a class="btn btn-default btn-flat glyphicon glyphicon-log-out" href="<?php echo e(route('logout')); ?>"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <?php echo e(__('Keluar')); ?>

                     </a>
    
                     <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                         <?php echo csrf_field(); ?>
                     </form>
                    </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
        </ul>
      </div>