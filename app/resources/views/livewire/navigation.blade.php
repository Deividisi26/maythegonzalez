<nav class=" bg-white fixed w-full" x-data="{ open: false}">
    <div class="max-w-full mx-auto  px-2 sm:px-6 lg:px-8 ">
      <div class="relative flex items-center justify-center h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button x-on:click="open = true " type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-[#9c76ed] focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
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
        
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-20">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#inicio" class="text-gray-900 hover:bg-[#9c76ed] hover:text-white px-3 py-2 rounded-md text-sm font-medium">Inicio</a>
  
              <a href="#detalles" class="text-gray-900 hover:bg-[#9c76ed] hover:text-white px-3 py-2 rounded-md text-sm font-medium">Detalles</a>
  
              <a href="#mapa" class="text-gray-900 hover:bg-[#9c76ed] hover:text-white px-3 py-2 rounded-md text-sm font-medium">¿Cómo llegar?</a>
  
              <a href="#confir" class="text-gray-900 hover:bg-[#9c76ed] hover:text-white px-3 py-2 rounded-md text-sm font-medium">Confirmar</a>
            </div>
          </div>
        </div>
       
  
          
  
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away= "open= false">
      <div  class="px-2 pt-2 pb-3 space-y-1">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#inicio" class="text-gray-900 hover:bg-[#9c76ed] hover:text-white block px-3 py-2 rounded-md text-base font-medium">Inicio</a>
  
        <a href="#detalles" class="text-gray-900 hover:bg-[#9c76ed] hover:text-white block px-3 py-2 rounded-md text-base font-medium">Detalles</a>
  
        <a href="#mapa" class="text-gray-900 hover:bg-[#9c76ed] hover:text-white block px-3 py-2 rounded-md text-base font-medium">¿Cómo llegar?</a>
  
        <a href="#confir" class="text-gray-900 hover:bg-[#9c76ed] hover:text-white block px-3 py-2 rounded-md text-base font-medium">Confirmar</a>
      </div>
    </div>
</nav>
  

