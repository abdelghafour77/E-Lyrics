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

  <!-- navbar -->
  <?php
  require_once 'include/session.php';

  require_once 'include/navbar.php';  ?>

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