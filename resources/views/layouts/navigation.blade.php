<nav class="navbar navbar-expand-lg bg-body-tertiary p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3>
    <div class="container">
      <a class="navbar-brand" href="#">Funiture Palace</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}"  :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('product') }}"  :active="request()->routeIs('product')">
                {{ __('Product') }}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('about') }}"  :active="request()->routeIs('about')">
                {{ __('About') }}
            </a>
          </li>
          <li class="nav-item">
            {{-- <a class="nav-link active" aria-current="page" href="{{ route('bouquet') }}"  :active="request()->routeIs('bouquet')">
                {{ __('Bouquet') }}
            </a> --}}
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Essentials
            </a> 
         <ul class="dropdown-menu">
              {{-- <li><a class="dropdown-item"aria-current="page" href="{{ route('florist) }}"  :active="request()->routeIs('florist')">
                {{ __('Florist') }}>Florists</a></li>  --}}
             <li><a class="dropdown-item" href="#">Lamps</a></li>
             <li><hr class="dropdown-divider"></li>
             <li> <a class="dropdown-item"  :active="request()->routeIs('bouquet')">
                {{ __('Bouquet') }}
             </li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">bed</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('cart') }}"  :active="request()->routeIs('cart')">
                {{ __('Cart') }}
            </a>
            <div class="d-flex flex-column ">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
            </svg> --}}
            </div>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2 mx-auto"  type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="hidden sm:flex sm:items-center sm:ml-6">
            <x-dropdown align="right" width="">
                 <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                         {{-- <div>{{ Auth::user()->name  }}</div>
                         <div>{{ Auth::user()->email }}</div>  --}}
                        <div>{{ Auth::check() ? Auth::user()->name : 'Guest' }}</div>
                        <div>{{ Auth::check() ? Auth::user()->email : 'Guest' }}</div>  

                        <div class="ml-1">
                            {{-- <svg class="fill-current h-1 w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg> --}}
                        </div> 
                    </button>
                </x-slot>
               



                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();"
                           > {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>



      </div>
    </div>
  </nav>
    
    