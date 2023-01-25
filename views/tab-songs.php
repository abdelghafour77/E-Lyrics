<?php
require_once 'models/song.php';
$songs = (new Song)->allSongs();
// var_dump($songs);
// die;
?>

<div class="flex flex-col mt-6">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                  <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                        <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                              <thead class="bg-gray-50">
                                    <tr>
                                          <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Songs</th>
                                          <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Lyrics
                                          </th>
                                          <!-- <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Views
                                          </th> -->
                                          <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Created
                                                at</th>
                                    </tr>
                              </thead>

                              <tbody class="bg-white divide-y divide-gray-200">
                                    <!-- <tr class="transition-all hover:bg-gray-100 hover:shadow-lg" onclick="getProduct()" id="">
                                          <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                      <div class="flex-shrink-0 w-12 h-12">
                                                            <img class="mx-auto picture h-12 rounded-md" product="" src="assets/img/covers/cover.jpg" alt="" />
                                                      </div>
                                                      <div class="ml-4">
                                                            <div class="model text-sm font-medium text-gray-900" product="">Song
                                                                  name</div>
                                                            <div class="category text-sm text-gray-500" product="">
                                                                  artist - [album]</div>
                                                      </div>
                                                </div>
                                          </td>
                                          <td class="brand px-6 py-4 whitespace-nowrap" product="">
                                                <p class="description text-sm truncate max-w-sm text-gray-900" product="">Lorem ipsum dolor sit amet consectetur adipisicing
                                                      elit. Suscipit repellat maiores quod at culpa, repudiandae quisquam non aspernatur voluptate
                                                      illo exercitationem minus quae debitis illum voluptatibus quos sed reiciendis minima!</p>
                                          </td>

                                          <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="quantity inline-flex px-2 text-xs font-semibold leading-5  text-green-800 bg-green-100 rounded-full" product=""> 5.9K </span>
                                          </td>
                                          <td class="price px-6 py-4 text-sm text-gray-500 whitespace-nowrap" product="">12-12-2022 13:45</td>
                                    </tr> -->
                                    <?php
                                    foreach ($songs as $song) { ?>
                                          <tr class="transition-all hover:bg-gray-100 hover:shadow-lg" onclick="getProduct()" id="">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                      <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-12 h-12">
                                                                  <img class="mx-auto picture h-12 rounded-md" product="" src="assets/img/songs/<?= $song['image'] ?>" alt="" />
                                                            </div>
                                                            <div class="ml-4">
                                                                  <div class="model text-sm font-medium text-gray-900" product="">
                                                                        <?= $song['name'] ?> </div>
                                                                  <div class="category text-sm text-gray-500" product="">
                                                                        <?= $song['artist'] . " - [" . $song['album'] . "]" ?></div>
                                                            </div>
                                                      </div>
                                                </td>
                                                <td class="brand px-6 py-4 whitespace-nowrap" product="">
                                                      <p class="description text-sm truncate max-w-sm text-gray-900" product=""><?= $song['lyrics'] ?></p>
                                                </td>

                                                <!-- <td class="px-6 py-4 whitespace-nowrap">
                                                      <span class="quantity inline-flex px-2 text-xs font-semibold leading-5  text-green-800 bg-green-100 rounded-full" product=""> 5.9K </span>
                                                </td> -->
                                                <td class="price px-6 py-4 text-sm text-gray-500 whitespace-nowrap" product=""><?= $song['created_at'] ?></td>
                                          </tr>
                                    <?php } ?>
                              </tbody>
                        </table>
                  </div>
            </div>
      </div>
</div>