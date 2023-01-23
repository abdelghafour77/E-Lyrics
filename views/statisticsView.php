<?php
require_once 'models/statistic.php';
$statistic = new Statistic();
?>
<section class="text-gray-600 body-font">
  <div class="container px-5 pb-12 mx-auto">
    <div class="flex flex-wrap w-full mb-8">
      <div class="w-full mb-6 lg:mb-0">
        <h1 class="sm:text-4xl text-5xl font-medium title-font mb-2 text-gray-900">Statistic</h1>
        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
      </div>
    </div>
    <div class="flex flex-wrap -m-4 text-center">
      <div class="p-4 sm:w-1/4 w-1/2">
        <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">
            <?php
            $statistic->table = "users";
            echo $statistic->countt(); ?>
          </h2>
          <p class="leading-relaxed text-gray-100 font-bold">Users</p>
        </div>
      </div>
      <div class="p-4 sm:w-1/4 w-1/2">
        <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">
            <?php
            $statistic->table = "songs";
            echo $statistic->countt(); ?>
          </h2>
          <p class="leading-relaxed text-gray-100 font-bold">Songs</p>
        </div>
      </div>
      <div class="p-4 sm:w-1/4 w-1/2">
        <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">
            <?php
            $statistic->table = "artists";
            echo $statistic->countt(); ?>
          </h2>
          <p class="leading-relaxed text-gray-100 font-bold">Artists</p>
        </div>
      </div>
      <div class="p-4 sm:w-1/4 w-1/2">
        <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">
            <?php
            $statistic->table = "categories";
            echo $statistic->countt(); ?>
          </h2>
          <p class="leading-relaxed text-gray-100 font-bold">Categories</p>
        </div>
      </div>
    </div>
  </div>
</section>