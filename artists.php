<?php
include 'include/session.php';
require_once 'models/statistic.php';
$statistic = new Statistic();
$statistic->table = "artists";
// include 'include/role.php';
// $categories = getAllCategories();
// $countCategories = countCategories();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poor+Story&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet" />
  <!-- Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>Dashboard Artists - RockStars</title>
</head>

<body class="font-Poppins">
  <div class="flex h-screen overflow-y-hidden bg-white">
    <!-- Sidebar -->
    <?php
    include 'include/side-dash.php';
    sidebar('artists');
    ?>
    <div class="flex flex-col flex-1 h-full overflow-hidden">
      <!-- Navbar -->
      <?php include 'include/nav-dash.php'; ?>
      <!-- Main content -->
      <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
        <!-- Main content header -->
        <div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
          <h1 class="text-2xl font-semibold whitespace-nowrap">Manage Artists</h1>
        </div>

        <!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->
        <div class="flex mt-6 items-center justify-between">
          <h3 class="text-xl">All Artists (<?= $statistic->countt() ?>)</h3>
          <button onclick="openModal()" type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            Add Artist
          </button>
        </div>

        <?php
        include 'views/tab-artists.php';
        ?>
      </main>
      <!-- Main footer -->
      <footer class="py-1 bg-transparentBlack">
        <div class="container mx-auto">
          <p class="text-shadow-lg text-xs md:text-base text-center text-white">Made with ❤️ by ABDELGHAFOUR AOUAD 🌪</p>
        </div>
      </footer>
    </div>
  </div>
  <!-- Modal -->
  <div id="modal" class="z-20 h-screen w-full hidden fixed left-0 top-0 justify-center items-center bg-black bg-opacity-50">
    <div class="bg-white rounded shadow-lg md:w-3/4 md:mx-0 w-full mx-2">
      <form id="form" action="scripts.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" id="id_category" name="id_category">
        <input type="hidden" id="type" name="">
        <div class="border-b px-4 py-2">
          <h3>Add Category</h3>
        </div>
        <div class="p-2">
          <div class="flex justify-center">
            <!-- xl:w-96 -->
            <div class="mb-1">
              <div class="picture rounded-sm w-16 mx-auto">

              </div>
              <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" />
              </div>
              <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Description</label>
                <textarea name="description" id="description" cols="30" rows="3" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"></textarea>
              </div>
              <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Picture</label>
                <input name="picture" type="file" class="form-control cursor-pointer block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-describedby="file_input_help" />
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
              </div>
            </div>
          </div>
        </div>
        <div class="flex justify-end items-center w-100 border-t p-2">
          <button type="button" id="cancel" onclick="closeModal()" class="bg-gray-600 hover:bg-gray-700 px-3 py-1 rounded text-white mr-1">cancel</button>
          <button type="submit" id="add" onclick="setType('add_category')" class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white mr-1">save</button>
          <button type="submit" id="update" onclick="setType('update_category')" class="bg-orange-500 hover:bg-orange-600 px-3 py-1 rounded text-white mr-1">update</button>
          <button type="submit" id="delete" onclick="confirms();setType('delete_category')" class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-1">delete</button>
        </div>
      </form>
    </div>
  </div>
  <!-- Modal -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="assets/js/sweetalert.js"></script>
  <script src="assets/js/main.js"></script>
  <?php
  include 'include/alert.php';
  ?>
</body>

</html>