<?php
require_once 'models/category.php';
$categories = (new Category)->allCategories();
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
                                          <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Description</th>
                                          <!-- <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">price</th> -->
                                    </tr>
                              </thead>

                              <tbody class="bg-white divide-y divide-gray-200">
                                    <?php
                                    foreach ($categories as  $category) { ?>
                                          <tr class="transition-all hover:bg-gray-100 hover:shadow-lg" onclick="getCategory(<?= $category['id'] ?>)" id="<?= $category['id'] ?>">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                      <div class="flex items-center">
                                                            <div class="flex-shrink-0 md:w-24 w-14">
                                                                  <img class="picture" category="<?= $category['image'] ?>" src="assets/img/categories/<?= $category['image'] ?>" alt="" />
                                                            </div>
                                                            <!--  -->
                                                      </div>
                                                </td>
                                                <td class="category px-6 py-4 whitespace-nowrap">
                                                      <p class="name text-sm truncate max-w-sm text-gray-900" category="<?= $category['name'] ?>"><?= $category['name'] ?></p>
                                                </td>
                                                <td class="category px-6 py-4 whitespace-nowrap">
                                                      <p class="description text-sm truncate max-w-sm text-gray-900" category="<?= $category['description'] ?>"><?= $category['description'] ?></p>
                                                </td>
                                          </tr>
                                    <?php } ?>

                              </tbody>
                        </table>
                  </div>
            </div>
      </div>
</div>