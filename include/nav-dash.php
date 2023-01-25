<header class="flex-shrink-0 border-b">
  <div class="flex items-center justify-end p-2">
    <!-- Navbar right -->
    <div class="relative flex items-center space-x-3">
      <!-- avatar button -->
      <div class="relative ">
        <div id="dropdown" class="flex items-center cursor-pointer">
          <div class="text-black mr-4 sm:block hidden"><?= $_SESSION['full_name'] ?></div>
          <button class="p-1 bg-gray-200 rounded-full focus:outline-none focus:ring">
            <img class="object-cover w-8 h-8 rounded-full" src="assets/img/users/user.png" alt="<?= $_SESSION['full_name']  ?>" />
          </button>
        </div>
        <!-- Dropdown card -->
        <div id="dropdown-card" style="right: -160px;" class="z-20 hidden absolute mt-3 transform -translate-x-full bg-white rounded-md shadow-lg min-w-max">
          <div class="flex flex-col p-4 space-y-1 font-medium border-b">
            <span class="text-gray-800"><?= $_SESSION['full_name'] ?></span>
            <span class="text-sm text-gray-400"><?= $_SESSION['email'] ?></span>
          </div>
          <ul class="flex flex-col p-2 my-2 space-y-1">
            <li>
              <a href="dashboard.php" class="block px-2 py-1 transition rounded-md text-gray-700 hover:bg-gray-100">Dashboard</a>
            </li>
          </ul>
          <div class="flex items-center justify-center p-4 text-blue-700 border-t">
            <a href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>