

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
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('about') }}">About</a>
                    </li>
                    @if (Auth::guest())
                    <li>
                        <a href="{{ url('register') }}">SignUp</a>
                    </li>
                    <li>
                        <a href="{{ url('login') }}">Login</a>
                    </li>
                     @endif
                   

                    <li>
                       <a href="{{ url('shout') }}">Shout</a>
                    </li>

                      @if (Auth::guest())
                      @else
                    <li class="dropdown">
<!--
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/{profile}') }}">Profile</a></li>
                                <li><a href="{{ url('/logout') }}">Logout</a></li>
                            </ul>

                            
                                <li><a href="{{ url('/logout') }}">{{ Auth::user()->firstname }} <i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                -->


                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->firstname }} <span class="caret"></span></a>


                        <ul class="dropdown-menu" role="menu">
                            <li> {!! Html::link(url('/'.Auth::user()->firstname), Lang::get('titles.profile'), array('class' => '')) !!}</li>
                            <li>{!! Html::link(url('/logout'), Lang::get('titles.logout'), array('class' => '')) !!}</li>
                        </ul>
                           
                      
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

 
