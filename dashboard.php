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
  <link rel="stylesheet" href="css/style.css" />
  <title>Dashboard lyrics - E-LYRICS</title>
</head>

<body class="font-Poppins">
  <div class="flex h-screen overflow-y-hidden bg-white">
    <!-- Sidebar -->
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
            <a href="dashboard.php" class="flex justify-start items-center p-2 space-x-2 rounded-md <?= ($path == 'dashboard') ? 'bg-gray-100 font-bold' : 'hover:bg-gray-100' ?>">
              <span>
                <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
              </span>
              <span class="hidden md:block">Dashboard</span>
            </a>
          </li>
          <li class="pb-1">
            <a href="users.php" class="flex justify-start items-center p-2 space-x-2 rounded-md <?= ($path == 'users') ? 'bg-gray-100 font-bold' : 'hover:bg-gray-100' ?>">
              <span>
                <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
              </span>
              <span class="hidden md:block">Users</span>
            </a>
          </li>
          <li class="pb-1">
            <a href="categories.php" class="flex justify-start items-center p-2 space-x-2 rounded-md <?= ($path == 'categories') ? 'bg-gray-100 font-bold' : 'hover:bg-gray-100' ?>">
              <span>
                <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                </svg>
              </span>
              <span class="hidden md:block">Artists</span>
            </a>
          </li>

          <li class="pb-1">
            <a href="products.php" class="flex justify-start items-center p-2 space-x-2 rounded-md <?= ($path == 'products') ? 'bg-gray-100 font-bold' : 'hover:bg-gray-100' ?>">
              <span>
                <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z" />
                </svg>
              </span>
              <span class="hidden md:block">Songs</span>
            </a>
          </li>
          <li class="pb-1">
            <a href="brands.php" class="flex justify-start items-center p-2 space-x-2 rounded-md <?= ($path == 'brands') ? 'bg-gray-100 font-bold' : 'hover:bg-gray-100' ?>">
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
    <div class="flex flex-col flex-1 h-full overflow-hidden">
      <!-- Navbar -->
      <header class="flex-shrink-0 border-b">
        <div class="flex items-center justify-end p-2">
          <!-- Navbar right -->
          <div class="relative flex items-center space-x-3">
            <!-- avatar button -->
            <div class="relative">
              <button id="dropdown" class="p-1 bg-gray-200 rounded-full focus:outline-none focus:ring">
                <img class="object-cover w-8 h-8 rounded-full" src="img/users/user.png" alt="<?= $_SESSION['first_name'] . '_' . $_SESSION['last_name'] ?>" />
              </button>

              <!-- Dropdown card -->
              <div id="dropdown-card" class="z-20 hidden absolute mt-3 transform -translate-x-full bg-white rounded-md shadow-lg min-w-max">
                <div class="flex flex-col p-4 space-y-1 font-medium border-b">
                  <span class="text-gray-800">abdelghafour aouad</span>
                  <span class="text-sm text-gray-400">abdelghafour@gmail.com</span>
                </div>
                <ul class="flex flex-col p-2 my-2 space-y-1">
                  <li>
                    <a href="edit.php" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Edit profil</a>
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
      <!-- Main content -->
      <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
        <!-- Main content header -->
        <div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
          <h1 class="text-2xl font-semibold whitespace-nowrap">Manage Lyrics</h1>
        </div>

        <!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->
        <div class="flex mt-6 items-center justify-between">
          <h3 class="text-xl">All Lyrics (1)</h3>
          <button onclick="openModal()" type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add Lyrics</button>
        </div>

        <div class="flex flex-col mt-6">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
              <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Song</th>
                      <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Lyrics
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Views
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Created
                        at</th>
                    </tr>
                  </thead>

                  <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="transition-all hover:bg-gray-100 hover:shadow-lg" onclick="getProduct()" id="">
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                          <div class="flex-shrink-0 w-12 h-12">
                            <img class="mx-auto picture h-12 rounded-md" product="<?= $product['picture'] ?>" src="img/covers/cover.jpg" alt="" />
                          </div>
                          <div class="ml-4">
                            <div class="model text-sm font-medium text-gray-900" product="<?= $product['model'] ?>">Song
                              name</div>
                            <div class="category text-sm text-gray-500" product="<?= $product['categories_id'] ?>">
                              artist - [album]</div>
                          </div>
                        </div>
                      </td>
                      <td class="brand px-6 py-4 whitespace-nowrap" product="<?= $product['brands_id'] ?>">
                        <p class="description text-sm truncate max-w-sm text-gray-900" product="<?= $product['description'] ?>">Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Suscipit repellat maiores quod at culpa, repudiandae quisquam non aspernatur voluptate
                          illo exercitationem minus quae debitis illum voluptatibus quos sed reiciendis minima!</p>
                      </td>

                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="quantity inline-flex px-2 text-xs font-semibold leading-5 <?= $product['quantity'] <= 5 ? 'text-red-800 bg-red-100' : ' text-green-800 bg-green-100' ?> rounded-full" product="<?= $product['quantity'] ?>"> 5.9K </span>
                      </td>
                      <td class="price px-6 py-4 text-sm text-gray-500 whitespace-nowrap" product="<?= $product['price'] ?>">12-12-2022 13:45</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
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
  <div id="modal" class="z-20 snap-x h-screen w-full hidden fixed left-0 top-0 justify-center items-center bg-black bg-opacity-50">
    <div class="z-30 bg-white max-h-screen rounded shadow-lg md:w-3/4 md:mx-0 w-full mx-2">
      <form id="form" action="scripts.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" id="id_product" name="id_product" />
        <input type="hidden" id="type" name="" />
        <div class="flex justify-between border-b px-4 py-2">
          <h3>Add Product</h3>
          <button type="button" onclick="closeModal()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="p-2">
          <div class="flex justify-center">
            <!-- xl:w-96 -->
            <div class="mb-1">
              <div id="picture" class="hidden picture rounded-sm h-16 justify-center"></div>
              <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Model</label>
                <input type="text" id="model" name="model" placeholder="Model" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" />
              </div>
              <div class="mb-2 flex">
                <div class="mr-2 w-1/2">
                  <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Brand</label>
                  <select name="brand" id="brand" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                    <option value="" disabled selected>Select Brand</option>

                    <option value="<?= $brand['id'] ?>">
                      <?= $brand['name'] ?>
                    </option>
                  </select>
                </div>
                <div class="ml-2 w-1/2">
                  <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Category</label>
                  <select name="category" id="category" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                    <option value="" disabled selected>Select Category</option>

                    <option value="<?= $category['id'] ?>">
                      <?= $category['name'] ?>
                    </option>
                  </select>
                </div>
              </div>

              <div class="mb-2 flex">
                <div class="mr-2 w-1/2">
                  <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Quantity</label>
                  <input type="number" id="quantity" name="quantity" placeholder="Quantity" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" />
                </div>
                <div class="ml-2 w-1/2">
                  <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Price</label>
                  <input type="number" id="price" name="price" placeholder="Price" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" />
                </div>
              </div>

              <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Description</label>
                <textarea name="description" id="description" cols="30" rows="3" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"> </textarea>
              </div>
              <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Picture</label>
                <input id="picture" name="picture" type="file" class="form-control cursor-pointer block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-describedby="file_input_help" />
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX.
                  800x400px).</p>
              </div>
            </div>
          </div>
        </div>
        <div class="flex justify-end items-center w-100 border-t p-2">
          <button type="button" id="cancel" onclick="closeModal()" class="bg-gray-600 hover:bg-gray-700 px-3 py-1 rounded text-white mr-1">cancel</button>
          <button type="submit" id="add" onclick="setType('add')" class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white mr-1">save</button>
          <button type="submit" id="update" onclick="setType('update')" class="bg-orange-500 hover:bg-orange-600 px-3 py-1 rounded text-white mr-1">update</button>
          <button type="submit" id="delete" onclick="confirms();setType('delete')" class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-1">delete</button>
        </div>
      </form>
    </div>
  </div>
  <!-- Modal -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="assets/js/sweetalert.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>