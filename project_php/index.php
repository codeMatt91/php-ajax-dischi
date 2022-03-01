<?php 



?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
         <div class="albums py-5 d-flex justify-content-center">
            <div v-for="(album, index) in getGenreAlbum" :key="index" class="card">
               <div class="img-album">
                  <img :src="album.poster" class="img-fluid" :alt="album.genre" />
               </div>
               <div class="card-body">
                  <h4 class="card-title">{{ album.title }}</h4>
                  <div class="author text-muted h6">{{ album.author }}</div>
                  <div class="year text-muted h6">{{ album.year }}</div>
               </div>
            </div>
         </div>
      </div>
   </main>
</body>

</html>