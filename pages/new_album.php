<a href="?page=albuns">Voltar para os álbuns</a>

<h1>Cadastro de novo álbum</h1>

<div class="container">
  <form action="#" method="POST" enctype="multipart/form-data">
  <div class="form-group">
  <input type="text" name="name" placeholder="Nome:" class="form-control">
  </div>
  <div class="form-group">
  <input type="file" name="image" placeholder="Album:" class="form-control">
  </div>
  <button type="submit" class="btn btn-success">Cadastrar</button>
  </form>

</div>


<?php 

 //verifica que tipo de requisição que está sendo feita
if($_SERVER['REQUEST_METHOD'] == 'POST') { 
  $album = $_POST['name'];  
  $path = "albuns/{$album}";

  if (!is_dir($path)) {
    mkdir($path);
  }

  $file = $_FILES['image'];
  $fileInfo = explode('.', $file['name']);

  $extension = $fileInfo[1];
  $nameImage = $album . '.' . $extension;

  //função de upload

 if (move_uploaded_file($file['tmp_name'], $path . '/' . $nameImage)) {
  header('Location: ?page=albuns');
} else {
  echo 'Falha no upload!';
  } 

}

?>