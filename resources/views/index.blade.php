@extends("layouts.app")

@section("title")
    Golden Garden Dev
@endsection

@section("content")
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    @component('components.navbar')
    @endcomponent
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    @component('components.header')
    @endcomponent
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    @component('components.product')
    @endcomponent
    <!-- ***** Features Small End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    @component('components.bigproduct')
    @endcomponent
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Home Parallax Start ***** -->
    @component('components.progress')
    @endcomponent
    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    @component('components.testimoni')
    @endcomponent
    <!-- ***** Testimonials End ***** -->

    <!-- ***** Blog Start ***** -->
    @component('components.blog')
    @endcomponent
    <!-- ***** Blog End ***** -->

    <!-- ***** Contact Us Start ***** -->
    @component('components.contact')
    @endcomponent
    <!-- ***** Contact Us End ***** -->
@endsection

@section("footer") 
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">Copyright &copy; {{ now()->year }} Golden Garden Dev</p>
                </div>
            </div>
        </div>
    </footer>
@endsection

@section("modal")

@endsection
