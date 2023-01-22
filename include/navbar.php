<!-- Desktop Menu -->
<nav class="relative bg-black text-white px-4 py-4 flex justify-between items-center">
  <a class="text-3xl font-bold leading-none" href="#">
    <svg class="h-10" alt="logo" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
    </svg>
  </a>
  <div class="lg:hidden">
    <button class="navbar-burger flex items-center text-gold p-3">
      <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Mobile menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </button>
  </div>
  <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6">
    <li><a class="text-sm text-gold font-bold" href="index">Home</a></li>
    <li class="text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">About Us</a></li>
    <li class="text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>

    <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Contact</a></li>
  </ul>
  <a class="hidden lg:inline-block  py-2 px-6  border-2  hover:bg-gray-100 hover:text-black text-white text-sm font-bold rounded-xl transition duration-200 lg:ml-auto lg:mr-3" href="login.php">Login</a>
  <a class="hidden lg:inline-block py-2 px-6 bg-white hover:bg-gray-100 text-black text-sm font-bold rounded-xl transition duration-200" href="signup.php">Sign up</a>
</nav>
<!-- Modile Menu -->
<div class="navbar-menu relative z-50 hidden">
  <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
  <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
    <div class="flex items-center mb-8">
      <a class="mr-auto text-3xl font-bold leading-none" href="#">
        <svg class="h-10" alt="logo" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
        </svg>
      </a>
      <button class="navbar-close">
        <svg class="h-6 w-6 text-gold cursor-pointer hover:text-goldenrod" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
    <div>
      <ul>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-black hover:text-white rounded" href="index">Home</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-black hover:text-white rounded" href="#">About Us</a>
        </li>

        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-black hover:text-white rounded" href="#">Contact</a>
        </li>
      </ul>
    </div>
    <div class="mt-auto">
      <div class="pt-6">
        <a class="block px-4 py-3 mb-3 text-xs text-center border-2 border-black font-semibold leading-none bg-gray-50 hover:bg-black hover:text-white rounded-xl" href="login.php">Login</a>
        <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center bg-black text-white font-semibold bg-gold hover:bg-goldenrod rounded-xl" href="signup.php">Sign Up</a>
      </div>
      <p class="my-4 text-xs text-center text-gray-400">
        <span>Copyright © 2023</span>
      </p>
    </div>
  </nav>
</div>