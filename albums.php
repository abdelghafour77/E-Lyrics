<?php
require_once 'include/session.php';
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
  <title>Albums - E-LYRICS</title>
</head>

<body class="font-Poppins">
  <div class="flex h-screen bg-white">
    <!-- Sidebar -->
    <?php
    require_once 'include/side-dash.php';
    sidebar('albums');
    ?>
    <div class="flex flex-col flex-1 h-full overflow-hidden">
      <!-- Navbar -->
      <?php require_once 'include/nav-dash.php'; ?>
      <!-- Main content -->
      <main class="flex-1 max-h-full p-5 ">
        <!-- Main content header -->
        <div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
          <h1 class="text-2xl font-semibold whitespace-nowrap">Manage Albums</h1>
        </div>

        <!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->
        <div class="flex mt-6 items-center justify-between">
          <h3 class="text-xl">All Albums (1)</h3>
          <button onclick="openModal()" type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add Albums</button>
        </div>

        <?php require_once 'views/tab-albums.php'; ?>
      </main>
      <!-- Main footer -->
      <footer class="py-1 bg-transparentBlack">
        <div class="container mx-auto">
          <p class="text-shadow-lg text-xs md:text-base text-center text-white">Made with ❤️ by ABDELGHAFOUR AOUAD 🌪
          </p>
        </div>
      </footer>
    </div>
  </div>
  <!-- Modal -->

  <div id="modal" class="z-20  min-h-screen w-full hidden absolute left-0 top-0 justify-center items-center bg-black bg-opacity-50 overflow-y-auto">
    <div tabindex="0" class="showHide my-8 bg-white rounded shadow-lg md:w-3/4 md:mx-0 w-full mx-2 ">
      <form id="form_model" action="scripts.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" id="id_brand" name="id_brand">
        <input type="hidden" id="type" name="">
        <div class="border-b px-4 py-2">
          <h3>Add Brand</h3>
        </div>
        <div class="p-2 overflow-x-auto">
          <div id="inputsParent" class="justify-center divide-y divide-transparentBlack">
            <!-- xl:w-96 -->
            <div class="inputss" id="inputss" name="inputs" data-num="1">
              <div class="hover:bg-gray-100 border-2 p-3 my-2 rounded-md transform transition duration-200 ease-in-out">
                <h4 class="text-center font-bold">Song n°<span class="index">1</span></h4>
                <div class="mb-2">
                  <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Name</label>
                  <input type="text" name="name" placeholder="Name" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" />
                </div>
                <div class="mb-2">
                  <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Category</label>

                  <select name="category" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                    <option value="1">pop</option>
                    <option value="2">rap</option>
                  </select>
                </div>

                <div class="mb-2">
                  <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Description</label>
                  <textarea name="description" cols="30" rows="3" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"></textarea>
                </div>
                <div class="mb-2">
                  <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Lyrics</label>
                  <textarea name="lyrics" cols="30" rows="3" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"></textarea>
                </div>
                <div class="mb-1">
                  <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Picture</label>
                  <input name="picture" type="file" class="form-control cursor-pointer block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-describedby="file_input_help" />
                  <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex justify-end items-center w-100 border-t p-2">
          <button type="button" id="cancel" onclick="closeModal()" class="bg-gray-600 hover:bg-gray-700 px-3 py-1 rounded text-white mr-1">cancel</button>
          <button type="button" id="addmore" onclick="addMore()" class="bg-gray-600 hover:bg-gray-700 px-3 py-1 rounded text-white mr-1">add</button>
          <button type="button" id="add" onclick="senddata()" class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white mr-1">save</button>
          <button type="submit" id="update" onclick="setType('update_brand')" class="bg-orange-500 hover:bg-orange-600 px-3 py-1 rounded text-white mr-1">update</button>
          <button type="submit" id="delete" onclick="confirms();setType('delete_brand')" class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-1">delete</button>
        </div>
      </form>
    </div>
  </div>
  <!-- Modal -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
  <script src="assets/js/jquery-3.6.3.min.js"></script>
  <script src="assets/js/sweetalert.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/admin-main.js"></script>
</body>

</html>