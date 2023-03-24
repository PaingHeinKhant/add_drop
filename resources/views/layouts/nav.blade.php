<nav class="navbar-light py-2 bg-dark  shadow-sm sticky-top" style="z-index: 100">
<div class="container-fluid ">
   <div class="row d-flex align-items-center">
       <div class="col-3">
           <a class="navbar-brand d-flex align-items-center mx-3" href="{{ url('/') }}">
               <div class="ms-2">
                   <i class="bi bi-music-note fs-1 me-3 text-light"></i>
               </div>
               <h3 class=' text-light'>Music App</h3>
           </a>
       </div>

       <div class="col-5">
       
       </div>

       <div class="col-4 ">
           <div class="me-5 pe-5 d-flex" id="navbarSupportedContent">
               <!-- Left Side Of Navbar -->
                       <ul class="navbar-nav me-auto">

                       </ul>


               <!-- Right Side Of Navbar -->
               <ul class="navbar-nav ms-auto">
                   <!-- Authentication Links -->
                   @guest
                       @if (Route::has('login'))
                           <li class="nav-item">
                               <a class="nav-link d-inline-block" href="{{ route('login') }}">{{ __('Login') }}</a>
                           </li>
                       @endif

                       @if (Route::has('register'))
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                           </li>
                       @endif
                   @else
                       <li class="nav-item dropdown">
                           <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{ Auth::user()->name }}
                           </a>

                           <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   {{ __('Logout') }}
                               </a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                   @csrf
                               </form>
                           </div>
                       </li>
                   @endguest
               </ul>
           </div>
       </div>
   </div>
</div>
</nav>
