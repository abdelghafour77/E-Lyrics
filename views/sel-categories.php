<?php
require_once 'models/category.php';
$categories = (new Category)->allCategories();
?>
<label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Category</label>
<select name="category" id="category" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
      <option value="" disabled selected>Select Category</option>
      <?php
      foreach ($categories as $category) { ?>
            <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
      <?php } ?>
</select>