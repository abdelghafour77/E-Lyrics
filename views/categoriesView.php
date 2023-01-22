<?php
require_once 'models/categories.php';
$categories = new Category();
$categories = $categories->allCategories();
?>
<section id="categories" class="container pb-9 mx-auto p-6">
      <h3 class="text-xl text-center font-bold p-4">Categories</h3>
      <div class="grid grid-cols-1 py-6 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-2">
            <?php
            foreach ($categories as $category) {
            ?>
                  <a href="index.php?id=1" class="flex justify-center">
                        <div class="overflow-hidden aspect-video cursor-pointer rounded-xl relative group h-60">
                              <div class="rounded-xl z-50 sm:opacity-0 opacity-100 group-hover:opacity-100 transition duration-300 ease-in-out cursor-pointer absolute from-black/80 to-transparent bg-gradient-to-t inset-x-0 -bottom-2 pt-30 text-white flex items-end">
                                    <div>
                                          <div class="p-4 space-y-3 text-xl sm:opacity-100 group-hover:opacity-100 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out">
                                                <div class="font-bold"><?= $category['name'] ?></div>
                                          </div>
                                    </div>
                              </div>
                              <img src="assets/img/categories/<?= $category['image'] ?>" alt="1" class="object-cover w-full aspect-square group-hover:scale-110 transition duration-300 ease-in-out" />
                        </div>
                  </a>
            <?php } ?>
      </div>
</section>