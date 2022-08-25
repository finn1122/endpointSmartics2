<nav class="bg-gray-800" x-data=" { open: false }">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
       
       <!-- Mobile menu button-->
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <button x-on:click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
            {{-- logotipo --}}
            <a href="/"class="flex-shrink-0 flex items-center">
            <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
            <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
            </a>

            {{-- menu --}}

            <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"  }}>Dashboard</a>
                
                @auth
                <!-- dropdown transacciones -->
                <div class="relative inline-block text-left " x-data=" { open: false }">
                  <div>
                    <button x-on:click="open = true" type="button" class="bg-gray-800  inline-flex justify-center rounded-md border px-4 py-2 text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-700" id="menu-button">
                      Transacciones
                      <!-- Heroicon name: solid/chevron-down -->
                      <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                    </button>
                  </div>
                
                  <div x-show="open" x-on:click.away="open = false" class=" bg-gray-800 origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 divide-y focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                      <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                      <a href="#" class="text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Ventas</a>
                      <a href="#" class="text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Caja</a>
                    </div>
                    
                  </div>
                </div>

                <!-- dropdown de productos -->
                <div class="relative inline-block text-left " x-data=" { open: false }">
                  <div>
                    <button x-on:click="open = true" type="button" class="bg-gray-800  inline-flex justify-center rounded-md border px-4 py-2 text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-700" id="menu-button">
                      Productos
                      <!-- Heroicon name: solid/chevron-down -->
                      <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                    </button>
                  </div>
                
                  <div x-show="open" x-on:click.away="open = false" class=" bg-gray-800 origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 divide-y focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                      <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                      <a href="{{ route('productos.index') }}" class="text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Catalogo</a>
                      <a href="#" class="text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Inventario</a>
                      <a href="#" class="text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Endpoint</a>
                    </div>
                    
                  </div>
                </div>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Usuarios</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Plataformas</a>

            </div>
            </div>
      </div>
      
      <!-- verificar si el usuario esta autenticado -->
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        {{-- boton notificacion --}}
        <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
          <span class="sr-only">View notifications</span>
          <!-- Heroicon name: outline/bell -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
          </svg>
        </button>

        <!-- Profile dropdown -->
        <div class="ml-3 relative" x-data="{ open:false }">
          <div>
            <button x-on:click="open = true" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
            </button>
          </div>

          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div x-show="open" x-on:click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Tu perfil</a>
            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2" onclick="event.preventDefault(); this.closest('form').submit();">
                                Sign out
                                </a>
            </form>
          </div>

          
        </div>
        </div>
        </div>
      </div>
    <!-- mostrar esto si el usuario no esta autenticado -->
      @else
      <a href="{{ route('login') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
      Login
      </a>
      <a href="{{ route('register') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Registrar</a>

      @endauth

  <!-- Mobile menu -->
  <div class="sm:hidden" x-show="open" x-on:click.away=" open = false ">
    <div  class="px-2 pt-2 pb-3 space-y-1">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

      
      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
    </div>
  </div>
</nav>







<!-- <select class="bg-gray-800 text-white hover:text-white text-sm font-medium rounded-md">
                    <option >
                      <a href="{{ route('productos.index') }}" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">
                        Productos
                      </a>
                    </option>
                    <option>Catalogo</option>
                    <option>Inventario</option>
                    <option>Endpoint</option>
                  </select> -->