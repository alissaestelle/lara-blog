<nav
     class="mx-auto pt-6 flex flex-wrap items-center justify-center gap-x-2 gap-y-2 base:justify-between base:px-5 base:py-6 base:flex-nowrap base:gap-y-0">

   {{-- Left Nav for Mobile --}}
   <a href="/"
      class="w-full base:hidden">
      <img src="../images/howls.png"
           alt="Calcifer"
           class="mx-auto w-12 h-12" />
   </a>
   <a href="/"
      class="text-xs font-bold uppercase base:hidden">Resources</a>
   <a href="/"
      class="text-xs font-bold uppercase base:hidden">Archive</a>
   <a href="/"
      class="text-xs font-bold uppercase base:hidden">About</a>

   {{-- Right Nav for Mobile --}}
   <a href="/"
      class="text-xs font-bold uppercase base:hidden">Account</a>
   <div class="mt-1 w-full text-center base:hidden">
      <a href="#"
         class="px-4 py-2 w-full bg-blue-500 text-xs font-semibold text-white uppercase rounded-full">
         Subscribe for Updates
      </a>
   </div>

   {{-- Left Nav for Desktop --}}
   <div class="hidden base:flex base:items-center">
      <a href="/"
         class="w-auto shrink-0">
         <img src="../images/howls.png"
              alt="Calcifer"
              class="mx-auto w-12 h-12 base:mx-0" />
      </a>
      <a href="/"
         class="pl-1 text-xs font-bold uppercase">Resources</a>
      <a href="/"
         class="pl-4 text-xs font-bold uppercase">Archive</a>
      <a href="/"
         class="pl-4 text-xs font-bold uppercase">About</a>
   </div>

   {{-- Right Nav for Desktop --}}
   <div class="hidden base:flex base:items-center base:gap-x-4">
      <a href="/"
         class="text-xs font-bold uppercase">Account</a>
      <a href="#"
         class="px-4 py-2 w-full bg-blue-500 text-xs font-semibold text-white uppercase rounded-full base:flex-grow base:w-auto">
         Subscribe for Updates
      </a>
   </div>
</nav>