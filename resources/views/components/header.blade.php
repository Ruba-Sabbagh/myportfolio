 <!-- Header Start -->
 <div class="top-header" id="top-header">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ url('img/profile-pic.jpg')}}" alt="Anamul Hasan" />
            </div>

            <div class="col-md-12">
                <h1>I'm Ruba Al Sabbagh</h1>
            </div>

            <div class="col-md-12">
                <p>Web Developer, Full Stack Developer, PHP Developer</p>
                <h2></h2>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Nav Start -->
<div class="header">
    <div class="container">

        <div class="logo pull-left">
            <h1><a href="{{url('index')}}">MyFolio</a></h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="#top-header">Home</a></li>
                <li><a href="#about">About me</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li class="menu-has-children"><a href="#">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li class="menu-has-children"><a href="#">Drop Down 3</a>
                            <ul>
                                <li><a href="#">Drop Down 1</a></li>
                                <li><a href="#">Drop Down 2</a></li>
                                <li><a href="#">Drop Down 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#contact">Contact me</a></li>
            </ul>
        </nav>

        <nav class="nav social-nav pull-right d-none d-lg-inline">
            <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a>
        </nav>
    </div>
</div>
<!-- Nav End -->