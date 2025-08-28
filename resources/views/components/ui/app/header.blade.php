<header class="top-0 left-0 w-full z-50 bg-white/70 dark:bg-neutral-950/70 backdrop-blur-md border-b border-gray-200/30 shadow-sm transition-all duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-24">

    <!-- Logo -->
    <!-- Logo + Text -->
    <div class="flex items-center space-x-3">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center space-x-2">
            <x-application-mark class="h-10 w-auto" />
            <span class="text-xs font-serif text-black dark:text-white">{{ config('app.name', 'Laravel') }}</span>
        </a>
    </div>


    <!-- Horizontal Icon Nav -->
    <nav class="flex items-center space-x-6">
      <!-- Home -->
      <a href="#" class="group relative p-3 rounded-full transition-all duration-300 hover:bg-red-100 dark:hover:bg-red-800 hover:scale-110">
      <svg class="w-6 h-6 text-gray-700 dark:fill-white dark:text-gray-200 group-hover:text-red-600 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48">
        <path d="M 23.951172 4 A 1.50015 1.50015 0 0 0 23.072266 4.3222656 L 8.859375 15.519531 C 7.0554772 16.941163 6 19.113506 6 21.410156 L 6 40.5 C 6 41.863594 7.1364058 43 8.5 43 L 18.5 43 C 19.863594 43 21 41.863594 21 40.5 L 21 30.5 C 21 30.204955 21.204955 30 21.5 30 L 26.5 30 C 26.795045 30 27 30.204955 27 30.5 L 27 40.5 C 27 41.863594 28.136406 43 29.5 43 L 39.5 43 C 40.863594 43 42 41.863594 42 40.5 L 42 21.410156 C 42 19.113506 40.944523 16.941163 39.140625 15.519531 L 24.927734 4.3222656 A 1.50015 1.50015 0 0 0 23.951172 4 z M 24 7.4101562 L 37.285156 17.876953 C 38.369258 18.731322 39 20.030807 39 21.410156 L 39 40 L 30 40 L 30 30.5 C 30 28.585045 28.414955 27 26.5 27 L 21.5 27 C 19.585045 27 18 28.585045 18 30.5 L 18 40 L 9 40 L 9 21.410156 C 9 20.030807 9.6307412 18.731322 10.714844 17.876953 L 24 7.4101562 z"/>
      </svg>
        <span class="absolute -top-6 left-1/2 transform -translate-x-1/2 text-xs text-gray-700 dark:text-gray-200 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Home</span>
      </a>

      <!-- About -->
      <a href="#" class="group relative p-3 rounded-full transition-all duration-300 hover:bg-red-100 dark:hover:bg-red-800 hover:scale-110">
        <svg class="w-6 h-6 text-gray-700 dark:fill-white dark:text-gray-200 group-hover:text-red-600 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
          <path d="M 24 3 C 12.413858 3 3 12.413866 3 24 C 3 35.586134 12.413858 45 24 45 C 35.586142 45 45 35.586134 45 24 C 45 12.413866 35.586142 3 24 3 z M 24 5 C 34.505263 5 43 13.494744 43 24 C 43 34.505256 34.505263 43 24 43 C 13.494737 43 5 34.505256 5 24 C 5 13.494744 13.494737 5 24 5 z M 24 12.185547 C 23.159 12.185547 22.474609 12.863313 22.474609 13.695312 C 22.474609 14.535312 23.159 15.220703 24 15.220703 C 24.85 15.220703 25.541016 14.535312 25.541016 13.695312 C 25.541016 12.863312 24.85 12.185547 24 12.185547 z M 24 17.935547 C 23.305 17.935547 22.818359 18.454312 22.818359 19.195312 L 22.818359 33.757812 C 22.818359 34.498812 23.304 35.017578 24 35.017578 C 24.696 35.017578 25.181641 34.498813 25.181641 33.757812 L 25.181641 19.193359 C 25.181641 18.452359 24.695 17.935547 24 17.935547 z"/>
        </svg>
        <span class="absolute -top-6 left-1/2 transform -translate-x-1/2 text-xs text-gray-700 dark:text-gray-200 opacity-0 group-hover:opacity-100 transition-opacity duration-300">About</span>
      </a>

      <!-- Light/Dark Switch -->
      <div class="p-3 rounded-full hover:scale-110 transition-transform duration-300">
        <x-ui.light-dark-switch />
      </div>
    </nav>

  </div>
</header>
