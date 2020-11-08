<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <h1>album</h1>
<a href="?page=new_album" class="btn btn-success"> Adicionar novo álbum </a>

    <div class="row">
    <?php
    
    $albuns = getAlbuns();
   
    foreach ($albuns as $album):
      $infoAlbum = explode('/', $album);
      $cantor = $infoAlbum[1];
      $imgAlbum = $album . '/'. $cantor . '.jpg';
      
    ?>
     <div class="col-3 album">
        <a href="?page=musics&album=<?=$cantor ?>">
          <img src="<?="$imgAlbum"?>" alt="$album" class="img-album">
            <h4 class="text-center mt-2"> Álbum <?=$cantor ?> </h4>
        </a>   
    </div>
    <?php 
      endforeach;
    ?> 
  
    </div>
  </div>
</body>
</html>