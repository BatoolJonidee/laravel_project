<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo-img">
                            <a href="index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="menu_wrap d-none d-lg-block">
                            <div class="menu_wrap_inner d-flex align-items-center justify-content-end">

           <!--------------------------------- NavBar ---------------------------------->
                                <div class="main-menu">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{url('/home')}}">Home</a></li>
                                            <li><a href="{{url('#Asection')}}">About</a></li>
                                            <li><a href="{{url('doctors')}}">Doctors</a></li>
                                            <li><a href="{{url('contact')}}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>

           <!--------------------------------- /NavBar ---------------------------------->


           <!--------------------------------- BTNS In Nav ---------------------------------->

                                <div class="book_room">
                                    @if(session()->has('user_id')==NULL)
                                    <div class="book_btn">
                                        <a href="{{route('signup')}}">
                                            {{-- {{session()->get('user_id')}} --}}
                                            Sign Up
                                        </a>

                                        <a href="{{route('login')}}">Log In</a>
                                    </div>
                                    @else
                                    <a href={{route('profile.fname')}}><i class="fa-solid fa-user fa-2xl" style="color: white"></i></a>
                                    @endif
                                </div>

           <!--------------------------------- /BTNS In Nav ---------------------------------->

                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
