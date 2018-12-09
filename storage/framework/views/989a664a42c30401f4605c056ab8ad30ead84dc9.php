<div class="headerWrapper">
  <header>
      <nav>
          <a href="/" class="nav-home active">
              Home
            </a>
      </nav>
      <div class="logo">
          <a href="/" class="logo--link">
              </a>
      </div>
      <div class="right">
          <?php if(session()->exists('data')): ?>
          <a href="<?php echo e(route('user.dashboard')); ?>">
                  <?php echo e(session()->get('data')['nama']); ?>

              </a>
          <a href="<?php echo e(route('user.logout')); ?>">
                      logout
                  </a> <?php endif; ?> <?php if(!session()->exists('data')): ?>
          <a href="<?php echo e(route('login')); ?>">
                  Log in
              </a> <?php endif; ?>


      </div>

      <div class="mobile">
          <div class="link active">
              <?php if(session()->exists('data')): ?>
              <a href="">
                          logout
                      </a> <?php endif; ?> <?php if(!session()->exists('data')): ?>
              <a href="<?php echo e(route('login')); ?>">
                      Log in
                  </a> <?php endif; ?>
          </div>

          <div class="logo">
              <a href="/" class="logo--link">
                </a>
          </div>

          <div class="burger">
              <div class="bars">
                  <span></span>
                  <span></span>
                  <span></span>
              </div>
          </div>
      </div>

      <ul class="mobile-dropdown">
          <li class="log-in">
                  <?php if(session()->exists('data')): ?>
                  <a href="<?php echo e(route('user.dashboard')); ?>">
                      <?php echo e(session()->get('data')['nama']); ?>

                  </a>
                  <a href="">
                          logout
                      </a>
              <?php endif; ?>
              <?php if(!session()->exists('data')): ?>
                  <a href="<?php echo e(route('login')); ?>">
                      Log in
                  </a>
              <?php endif; ?>
          </li>
      </ul>
  </header>
</div>