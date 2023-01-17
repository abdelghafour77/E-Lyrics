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
    <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold rounded-xl transition duration-200" href="login.php">Login</a>
    <a class="hidden lg:inline-block py-2 px-6 bg-orange hover:bg-orange_h text-sm text-white font-bold rounded-xl transition duration-200" href="signup.php">Sign up</a>
  </nav>
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
            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-goldtransparent hover:text-gold rounded" href="#">Home</a>
          </li>
          <li class="mb-1">
            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-goldtransparent hover:text-gold rounded" href="#">About Us</a>
          </li>

          <li class="mb-1">
            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-goldtransparent hover:text-gold rounded" href="#">Contact</a>
          </li>
        </ul>
      </div>
      <div class="mt-auto">
        <div class="pt-6">
          <a class="block px-4 py-3 mb-3 text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="login.php">Login</a>
          <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-black font-semibold bg-gold hover:bg-goldenrod rounded-xl" href="signup.php">Sign Up</a>
        </div>
        <p class="my-4 text-xs text-center text-gray-400">
          <span>Copyright © 2023</span>
        </p>
      </div>
    </nav>
  </div>
  <div class="relative bg-deep-purple-accent-400">
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
        <a href="/" aria-label="Scroll down" class="flex items-center justify-center w-10 h-10 mx-auto text-white duration-300 transform border border-gray-400 rounded-full hover:text-teal-accent-400 hover:border-teal-accent-400 hover:shadow hover:scale-110">
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
            <path d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z">
            </path>
          </svg>
        </a>
      </div>
    </div>
  </div>

  <!-- Categories Section -->
  <section id="categories" class="container pb-9 mx-auto p-6">
    <h3 class="text-xl text-center font-bold p-4">Categories</h3>
    <div class="grid grid-cols-1 py-6 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-2">

      <a href="category.php?id=1" class="flex justify-center">
        <div class="overflow-hidden aspect-video cursor-pointer rounded-xl relative group h-60">
          <div class="rounded-xl z-50 sm:opacity-0 opacity-100 group-hover:opacity-100 transition duration-300 ease-in-out cursor-pointer absolute from-black/80 to-transparent bg-gradient-to-t inset-x-0 -bottom-2 pt-30 text-white flex items-end">
            <div>
              <div class="p-4 space-y-3 text-xl sm:opacity-100 group-hover:opacity-100 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out">
                <div class="font-bold">Soft POP</div>
              </div>
            </div>
          </div>
          <img src="assets/img/categories/soft-pop-hits.jpg" alt="1" class="object-cover w-full aspect-square group-hover:scale-110 transition duration-300 ease-in-out" />
        </div>
      </a>

      <a href="category.php?id=1" class="flex justify-center">
        <div class="overflow-hidden aspect-video cursor-pointer rounded-xl relative group h-60">
          <div class="rounded-xl z-50 sm:opacity-0 opacity-100 group-hover:opacity-100 transition duration-300 ease-in-out cursor-pointer absolute from-black/80 to-transparent bg-gradient-to-t inset-x-0 -bottom-2 pt-30 text-white flex items-end">
            <div>
              <div class="p-4 space-y-3 text-xl sm:opacity-100 group-hover:opacity-100 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out">
                <div class="font-bold">Lit</div>
              </div>
            </div>
          </div>
          <img src="assets/img/categories/lit.jpg" alt="1" class="object-cover w-full aspect-square group-hover:scale-110 transition duration-300 ease-in-out" />
        </div>
      </a>

      <a href="category.php?id=1" class="flex justify-center">
        <div class="overflow-hidden aspect-video cursor-pointer rounded-xl relative group h-60">
          <div class="rounded-xl z-50 sm:opacity-0 opacity-100 group-hover:opacity-100 transition duration-300 ease-in-out cursor-pointer absolute from-black/80 to-transparent bg-gradient-to-t inset-x-0 -bottom-2 pt-30 text-white flex items-end">
            <div>
              <div class="p-4 space-y-3 text-xl sm:opacity-100 group-hover:opacity-100 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out">
                <div class="font-bold">Soft songs</div>
              </div>
            </div>
          </div>
          <img src="assets/img/categories/soft-songs.jpg" alt="1" class="object-cover w-full aspect-square group-hover:scale-110 transition duration-300 ease-in-out" />
        </div>
      </a>

      <a href="category.php?id=1" class="flex justify-center">
        <div class="overflow-hidden aspect-video cursor-pointer rounded-xl relative group h-60">
          <div class="rounded-xl z-50 sm:opacity-0 opacity-100 group-hover:opacity-100 transition duration-300 ease-in-out cursor-pointer absolute from-black/80 to-transparent bg-gradient-to-t inset-x-0 -bottom-2 pt-30 text-white flex items-end">
            <div>
              <div class="p-4 space-y-3 text-xl sm:opacity-100 group-hover:opacity-100 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out">
                <div class="font-bold">Trap</div>
              </div>
            </div>
          </div>
          <img src="assets/img/categories/trap.jpg" alt="1" class="object-cover w-full aspect-square group-hover:scale-110 transition duration-300 ease-in-out" />
        </div>
      </a>

      <a href="category.php?id=1" class="flex justify-center">
        <div class="overflow-hidden aspect-video cursor-pointer rounded-xl relative group h-60">
          <div class="rounded-xl z-50 sm:opacity-0 opacity-100 group-hover:opacity-100 transition duration-300 ease-in-out cursor-pointer absolute from-black/80 to-transparent bg-gradient-to-t inset-x-0 -bottom-2 pt-30 text-white flex items-end">
            <div>
              <div class="p-4 space-y-3 text-xl sm:opacity-100 group-hover:opacity-100 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out">
                <div class="font-bold">Brand new chill</div>
              </div>
            </div>
          </div>
          <img src="assets/img/categories/brand-new-chill.jpg" alt="1" class="object-cover w-full aspect-square group-hover:scale-110 transition duration-300 ease-in-out" />
        </div>
      </a>

    </div>
  </section>

  <!-- Foooter -->
  <footer id="footer-img">
    <div class="max-w-screen-xl px-4 py-28 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
      <div class="flex flex-wrap justify-center mx-5 mb-12">
        <div class="font-semibold text-2xl text-white">E-lyrics</div>
      </div>
      <nav class="flex flex-wrap justify-center -mx-5 -my-2">
        <div class="px-5 py-2">
          <a href="#" class="text-base leading-6 text-white hover:text-gray-500"> About Us </a>
        </div>
        <div class="px-5 py-2">
          <a href="#categories" class="text-base leading-6 text-white hover:text-gray-500"> Categories </a>
        </div>
        <div class="px-5 py-2">
          <a href="#" class="text-base leading-6 text-white hover:text-gray-500"> Contact </a>
        </div>
        <div class="px-5 py-2">
          <a href="#" class="text-base leading-6 text-white hover:text-gray-500"> Terms </a>
        </div>
      </nav>
      <div class="flex justify-center mt-8 space-x-6">
        <a href="https://www.facebook.com/abdo.aouad1/" class="text-white hover:text-gray-500">
          <span class="sr-only">Facebook</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
          </svg>
        </a>
        <a href="https://www.instagram.com/abdo_aouad/" class="text-white hover:text-gray-500">
          <span class="sr-only">Instagram</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
          </svg>
        </a>
        <a href="https://github.com/abdelghafour77" class="text-white hover:text-gray-500">
          <span class="sr-only">Twitter</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
            </path>
          </svg>
        </a>
        <a href="https://github.com/abdelghafour77" class="text-white hover:text-gray-500">
          <span class="sr-only">GitHub</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
          </svg>
        </a>
        <a href="https://www.linkedin.com/in/abdelghafour-aouad/" class="text-white hover:text-gray-500">
          <span class="sr-only">Linkedin</span>
          <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" clip-rule="evenodd"></path>
          </svg>
        </a>
      </div>
    </div>
    <!-- Credit Section -->
    <div class="py-3 bg-transparentBlack">
      <div class="container mx-auto">
        <p class="text-shadow-lg text-xs md:text-base text-center text-white">Made with ❤️ by ABDELGHAFOUR AOUAD 🌪</p>
      </div>
    </div>
  </footer>
</body>
<script src="assets/js/jquery-3.6.3.min.js"></script>
<script src="assets/js/main.js"></script>

</html>