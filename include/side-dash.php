<?php function sidebar($path)
{ ?>
  <aside class="inset-y-0 z-10 flex flex-col flex-shrink-0 w-fit max-h-screen overflow-hidden transition-all transform bg-white border-r shadow-lg lg:z-auto lg:static lg:shadow-none">
    <!-- sidebar header -->
    <div class="flex items-center justify-center flex-shrink-0 p-2">
      <a href="index.php" class="pt-2">
        <div class="font-RockStars font-semibold text-sm ms:text-xl md:text-xl">
          <span class="text-gold">E-L</span>
        </div>
      </a>
    </div>
    <!-- Sidebar links -->
    <nav class="flex-1 overflow-hidden hover:overflow-y-auto">
      <ul class="p-2 overflow-hidden">
        <li class="pb-1">
          <a href="dashboard.php" class="flex justify-start items-center p-2 space-x-2 rounded-md <?= ($path == 'dashboard') ? 'bg-gray-100 font-bold' : 'hover:bg-gray-100' ?> hover:bg-gray-100 ">
            <span>
              <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
            </span>
            <span class="hidden md:block">Dashboard</span>
          </a>
        </li>
        <li class="pb-1">
          <a href="users.php" class="flex justify-start items-center p-2 space-x-2 rounded-md <?= ($path == 'users') ? 'bg-gray-100 font-bold' : 'hover:bg-gray-100' ?> hover:bg-gray-100">
            <span>
              <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
              </svg>
            </span>
            <span class="hidden md:block">Users</span>
          </a>
        </li>
        <li class="pb-1">
          <a href="artists.php" class="flex justify-start items-center p-2 space-x-2 rounded-md <?= ($path == 'artists') ? 'bg-gray-100 font-bold' : 'hover:bg-gray-100' ?> hover:bg-gray-100">
            <span>
              <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
              </svg>
            </span>
            <span class="hidden md:block">Artists</span>
          </a>
        </li>

        <li class="pb-1">
          <a href="albums.php" class="flex justify-start items-center p-2 space-x-2 rounded-md <?= ($path == 'albums') ? 'bg-gray-100 font-bold' : 'hover:bg-gray-100' ?> hover:bg-gray-100">
            <span>
              <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
              </svg>
            </span>
            <span class="hidden md:block">Albums</span>
          </a>
        </li>

        <li class="pb-1">
          <a href="songs.php" class="flex justify-start items-center p-2 space-x-2 rounded-md <?= ($path == 'songs') ? 'bg-gray-100 font-bold' : 'hover:bg-gray-100' ?> hover:bg-gray-100">
            <span>
              <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z" />
              </svg>
            </span>
            <span class="hidden md:block">Songs</span>
          </a>
        </li>
        <li class="pb-1">
          <a href="categories.php" class="flex justify-start items-center p-2 space-x-2 rounded-md <?= ($path == 'categories') ? 'bg-gray-100 font-bold' : 'hover:bg-gray-100' ?> hover:bg-gray-100">
            <span>
              <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
              </svg>
            </span>
            <span class="hidden md:block">Categories</span>
          </a>
        </li>
        <!-- Sidebar Links... -->
      </ul>
    </nav>
  </aside>
<?php
}
?>