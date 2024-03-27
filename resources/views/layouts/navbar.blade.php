
  <!-- Header-start -->
  <div class="nav-menu fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark navbar-expand-lg">
                    <a class="navbar-brand" href="#home"><img src="/images/logo.png" class="img-fluid" alt="logo" width="180"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#about">ABOUT US</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#service">SERVICE</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#contact">CONTACT</a> </li>


                            {{-- @if (Route::has('login'))
                              <li class="nav-item">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">
                                        Log in
                                    </a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">
                                            Register
                                        </a>
                                    @endif
                                @endauth
                              </li>
                            @endif --}}
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
  <!-- Header-end -->