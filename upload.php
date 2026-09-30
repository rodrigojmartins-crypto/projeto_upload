<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="U!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>index</title>
</head>
<body>
 <h1>Galeria de imagens</h1>
 <a href="upload.php">Enviar nove imagem</a>
 <hr>

 <h2>Imagens enviadas:</h2>
 <div style="display: flex; flex-wrap: wrap; gap: 10px;">
 <?php
 $pasta = "upload/";
 if (is_dir($pasta)) {
 $arquivos = scandir($pasta);
 foreach ($arquivos as $arquivo) {
 if ($arquivo != "." && $arquivo != ".." && is_file($pasta . $arquivo)) {
 echo "<div>
 <img src='{$pasta}{$arquivo}' width='150' style='border:1px solid #ccc;'>
 </div>";
 }
 }
 } else {
 echo "<p>Nenhuma imagem encontrada.</p>";
 }
 ?>
 </div>
TF-8">
  <meta name="viewport" content="width=!, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>Enviar Imagem</h1>
  <form action="processo_upload.php" method="post" enctype="multipart/form-data">
    <label>Selecione a imagem:</label><br><br>
    <input type="file" name="arquivo" require><br><br>
    <button> type="submit">Enviar</button>
  
  </form>
  <br>
  <a href="index.php"><--Voltar para a Galeria</a>
</body>
</html>