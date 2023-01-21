<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>E-Lyrics</title>
</head>

<body class="bg-white">

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
      <li><a class="text-sm text-gold font-bold" href="#">Home</a></li>
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
            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-black hover:text-white rounded" href="#">Home</a>
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

  <!-- Hero section -->
  <section class="relative bg-deep-purple-accent-400">
    <div class="absolute background w-full">
      <img src="assets/img/wave-line.svg" alt="Monkey face" style="width: 100%; height: 560px" />
    </div>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-20">
      <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
        <h2 class="mb-6 font-sans text-3xl font-bold tracking-tight text-teal sm:text-4xl sm:leading-none">E-lyrics is
          the world's biggest collection of song lyrics and musical knowledge.</h2>
        <p class="mb-6 text-base text-indigo-100 md:text-lg">Sed ut perspiciatis unde omnis iste natus error sit
          voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo. Sed ut
          perspiciatis unde omnis.</p>
        <form class="flex flex-col items-center w-full mb-4 md:flex-row md:px-16">
          <div id="ntf-area">
            <div id="ntf-btn">Search</div>
            <div id="ntf-form-cover">
              <form method="post" class="tb" autocomplete="off">
                <div class="td" id="td-inp">
                  <input type="text" name="search" id="email-inp" placeholder="Search" spellcheck="false" required />
                </div>
                <div class="td" id="td-pre"><button class="valid" type="submit" id="submit-btn">Search</button></div>
              </form>
            </div>
          </div>
        </form>
        <p class="max-w-md mb-10 text-xs tracking-wide text-indigo-100 sm:text-sm sm:mx-auto md:mb-16">Sed ut
          perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
        <a href="./" aria-label="Scroll down" class="flex items-center justify-center w-10 h-10 mx-auto text-white duration-300 transform border border-gray-400 rounded-full hover:text-teal-accent-400 hover:border-teal-accent-400 hover:shadow hover:scale-110">
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
            <path d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z">
            </path>
          </svg>
        </a>
      </div>
    </div>
  </section>

  <!-- Categories Section -->
  <?php require_once 'views/categoriesView.php'; ?>
  <!-- Foooter -->
  <?php require_once 'include/footer.php'; ?>

  <script src="assets/js/jquery-3.6.3.min.js"></script>
  <script src="assets/js/main.js"></script>
  <?php require_once 'include/alert.php'; ?>
</body>

</html>