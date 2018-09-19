
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Gerador de Imagens do Bill Murray</title>
  </head>
  <body>
    <h1>Gerador de Imagens do Bill Murray</h1>
    <form class="" method="post">
      <input type="number" name="largura" value="<?php echo($_POST['largura']) ?>" placeholder="Largura" max="800">
      <input type="number" name="altura" value="<?php echo($_POST['altura']) ?>" placeholder="Altura" max="800">
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
      else:
    ?>
      <img src="<?php echo "https://www.fillmurray.com/g/{$_POST['largura']}/{$_POST['altura']}"; ?>" alt="">
    <?php
      endif
    ?>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
