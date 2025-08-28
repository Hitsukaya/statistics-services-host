<footer class="w-full py-6 bg-gray-100 dark:bg-neutral-950 border-t border-gray-200 dark:border-neutral-800 select-none">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col lg:flex-row items-center justify-between gap-6">

      <!-- Left -->
      <span class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 text-center lg:text-left"> &copy; {{ date('Y') }}
        <a href="/" class="hover:text-blue-600 font-medium">{{ config('app.name', 'Laravel') }}</a>. All rights reserved.
        <span class="block sm:inline">Powered by
          <a href="https://hitsukaya.com/" class="uppercase hover:text-blue-500">Hitsukaya</a>
        </span>
      </span>

      <!-- Links -->
      <ul class="flex items-center gap-6 text-xs sm:text-sm text-gray-500 dark:text-gray-400">
        <li><a href="#" class="hover:text-blue-600">Terms</a></li>
        <li><a href="#" class="hover:text-blue-600">Privacy</a></li>
        <li><a href="#" class="hover:text-blue-600">Cookies</a></li>
      </ul>
    </div>
  </div>
</footer>
