<a href="?page=musics&album=<?=$_GET['album']?>">Voltar para o álbum <?=$_GET['album'] ?> </a>

<h1>Cadastrar  nova música</h1>

<div class="container">
  <form action="#" method="POST" enctype="multipart/form-data">
 
  <div class="form-group">
  <input type="file" name="audio" placeholder="Album:" class="form-control">
  </div>
  <button type="submit" class="btn btn-success">Cadastrar</button>
  </form>

</div>


<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $album = $_GET['album'];
    var_dump($album);
    $path = "albuns/{$album}/musics/";
    if(!is_dir($path)) {
      mkdir($path);
    } 

    if(move_uploaded_file($_FILES['audio']['tmp_name'], $path . $_FILES['audio']['name'])) {
      header("Location: ?page=musics&album={$album}");
    } else {
      echo 'Falha no upload...';
    }

  }


?>
