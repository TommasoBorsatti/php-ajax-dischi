
<header>
  <div class="logo">
    <img src="img/logo.png" alt="logo di Spotify">
  </div>
  <div class="g-selection">
    <label for="genres">Scegli il tuo genere di musica preferito:</label>
    <select id="genres" name="genres">
      <option value="All">All</option>
      <?php foreach ($database as $opzioni){ ?>
        <option value="<?php echo $opzioni["genre"]?>"><?php echo $opzioni["genre"]?></option>
      <?php } ?>
    </select>
  </div>
</header>
