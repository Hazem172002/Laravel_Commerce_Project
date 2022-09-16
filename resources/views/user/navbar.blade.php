<div class="col-lg-9">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
        <a href="" class="text-decoration-none d-block d-lg-none">
            <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link d-block" href="{{url('home')}}">
                         <b>Home</b>
                    </a>
                </li>
            </ul>

            <div class="navbar-nav ml-auto py-0">
                @if(Route::has('login'))
                @auth
                <x-app-layout>

                </x-app-layout>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link d-block" href="{{url('view_cart')}}">
                             <b>Cart</b>
                        </a>
                    </li>
                </ul>


                @else


                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link d-block" href="{{route('login')}}">
                             <b>Login</b>
                        </a>
                    </li>
                </ul>

                <li class="nav-item">
                    <a class="nav-link d-block" href="{{route('register')}}">
                         <b>Register</b>
                    </a>
                </li>
                @endauth
                @endif
            </div>
        </div>
    </nav>

</div>

