<?php

include __DIR__ . '/../api/data.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <title>Php-dischi</title>
</head>

<body>
   <header>
      <div class="logo">
         <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/768px-Spotify_logo_without_text.svg.png" alt="logo spotify" />
      </div>
      <div id="search">
         <label for="search-genre">Choose genre:</label>
         <!-- <select id="search-genre">
            <option value="">ALL</option>
            <option v-for="(genre, index) in genres" :key="index" :value="genre">
               {{ genre }}
            </option>
         </select> -->
      </div>
   </header>
   <main>
      <div class="container">
         <div class="albums py-5 d-flex flex-wrap justify-content-center">
            <?php foreach ($database as $item) : ?>
               <div class="card">
                  <div class="img-album">
                     <img src='<?php echo $item['poster'] ?>' class="img-fluid" alt='<?php echo $item['title'] ?>' />
                  </div>
                  <div class="card-body">
                     <h4 class="card-title"><?php echo $item['title'] ?></h4>
                     <div class="author text-muted h6"><?php echo $item['author'] ?></div>
                     <div class="year text-muted h6"><?php echo $item['year'] ?></div>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </main>
</body>

</html>