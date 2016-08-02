

 <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">حـاضــر | HAZZIR</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('about')); ?>">About</a>
                    </li>
                    <?php if(Auth::guest()): ?>
                    <li>
                        <a href="<?php echo e(url('register')); ?>">SignUp</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('login')); ?>">Login</a>
                    </li>
                     <?php endif; ?>
                   

                    <li>
                       <a href="<?php echo e(url('shout')); ?>">Shout</a>
                    </li>

                      <?php if(Auth::guest()): ?>
                      <?php else: ?>
                    <li class="dropdown">
<!--
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo e(Auth::user()->firstname . ' ' . Auth::user()->lastname); ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/{profile}')); ?>">Profile</a></li>
                                <li><a href="<?php echo e(url('/logout')); ?>">Logout</a></li>
                            </ul>

                            
                                <li><a href="<?php echo e(url('/logout')); ?>"><?php echo e(Auth::user()->firstname); ?> <i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                -->


                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo e(Auth::user()->firstname); ?> <span class="caret"></span></a>


                        <ul class="dropdown-menu" role="menu">
                            <li> <?php echo Html::link(url('/'.Auth::user()->firstname), Lang::get('titles.profile'), array('class' => '')); ?></li>
                            <li><?php echo Html::link(url('/logout'), Lang::get('titles.logout'), array('class' => '')); ?></li>
                        </ul>
                           
                      
                    <?php endif; ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

 
