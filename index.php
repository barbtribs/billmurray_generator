
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gerador de Imagens do Bill Murray</title>
  </head>
  <body>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <form class="" method="post">
      <h1>Gerador de Imagens do Bill Murray</h1>
      <input type="number" name="largura" value="<?php echo(isset($_POST['largura'])? $_POST['largura'] : "") ?>" placeholder="Largura" max="800">
      <input type="number" name="altura" value="<?php echo(isset($_POST['altura'])? $_POST['altura'] : "") ?>" placeholder="Altura" max="800">
      <select name="categoria">
        <option value="calm">Calmo</option>
        <option value="gray">Cinza</option>
      </select>
      <button type="reset">Limpar</button>
      <button type="submit">Enviar</button>
    </form>
    <?php
      if (isset($_POST['categoria']) && $_POST['categoria'] == "calm"):
    ?>
      <img src="<?php echo "https://www.fillmurray.com/{$_POST['largura']}/{$_POST['altura']}"; ?>" alt="">
    <?php
      elseif (isset($_POST['categoria']) && $_POST['categoria'] == "gray"):
    ?>
      <img src="<?php echo "https://www.fillmurray.com/g/{$_POST['largura']}/{$_POST['altura']}"; ?>" alt="">
    <?php
      else:
    ?>
    <br/>
    <p>Bem vindo(a) ao gerador de imagens do Bill Murray</p>
    <p>Por favor, insira as dimensões da imagem e clique em enviar.</p>
    <?php
      endif
    ?>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
