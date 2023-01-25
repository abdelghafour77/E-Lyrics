<?php
require_once 'models/artist.php';
$artists = (new Artist)->allArtists();
?>
<label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Artist</label>
<select id="artist" onchange="change(this.value,event)" name="artist" class="artist form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
      <option selected disabled value="">Select artist</option>
      <?php
      foreach ($artists as $artist) { ?>
            <option value="<?= $artist['id'] ?>"><?= $artist['name'] ?></option>
      <?php } ?>
</select>