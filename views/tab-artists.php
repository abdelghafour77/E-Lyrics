<?php
require_once 'models/artist.php';
$artists = (new Artist)->allArtists();
?>
<div class="flex flex-col mt-6">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                  <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                        <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                              <thead class="bg-gray-50">
                                    <tr>
                                          <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Picture</th>
                                          <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Name</th>
                                          <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Biography</th>
                                    </tr>
                              </thead>

                              <tbody class="bg-white divide-y divide-gray-200">
                                    <?php
                                    foreach ($artists as  $artist) { ?>
                                          <tr class="transition-all hover:bg-gray-100 hover:shadow-lg" onclick="getartist(<?= $artist['id'] ?>)" id="<?= $artist['id'] ?>">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                      <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-12 h-12">
                                                                  <img class="mx-auto picture h-12 rounded-md" product="" src="assets/img/artists/<?= $artist['picture'] ?>" alt="" />
                                                            </div>

                                                      </div>
                                                </td>
                                                <td class="artist px-6 py-4 whitespace-nowrap">
                                                      <p class="name text-sm truncate max-w-sm text-gray-900" artist="<?= $artist['name'] ?>"><?= $artist['name'] ?></p>
                                                </td>
                                                <td class="artist px-6 py-4 whitespace-nowrap">
                                                      <p class="name text-sm truncate max-w-sm text-gray-900" artist="<?= $artist['biography'] ?>"><?= $artist['biography'] ?></p>
                                                </td>
                                          </tr>
                                    <?php } ?>
                              </tbody>
                        </table>
                  </div>
            </div>
      </div>
</div>