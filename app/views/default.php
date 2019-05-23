<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php
    include DIR_ROOT.'views/templates/parts/head.php';
    ?>
  </head>

  <body>
    <header>
      <?php
      include DIR_ROOT.'views/templates/parts/nav.php';
       ?>
    </header>
    <?php
      echo $this->content;
      include DIR_ROOT.'views/templates/parts/footer.php'
     ?>
  </body>

</html>
