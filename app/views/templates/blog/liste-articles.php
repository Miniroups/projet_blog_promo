<div class="content">
    <section id="mainArticle" class="container">
          <div class="row">
              <div class="col-5">
                  <a href="#">
                      <img class="img-fluid" src="<?= $article[0]["url_img"] ?>" alt="<?= $article[0]["alt_img"] ?>">
                  </a>
              </div>
              <div class="col">
                  <h2><?= $article[0]["title"] ?></h2>
                  <p><?= $article[0]["content"] ?></p>
                  <a href="#" class="btn btn-info">Lire l'article !</a>
              </div>
          </div>
      </section>
  
      <section id="allArticle" class="container">
          <div class="row">
              <? for($i = 0; $i < count($article); $i++) { ?>
              <div class="col">
                  <a href="#"><img class="img-fluid" src="<?= $article[$i]["url_img"] ?>" alt="<?= $article[$i]["alt_img"] ?>"></a>
                  <p><?= $article[$i]["content"] ?></p>
                  <a href="#" class="btn btn-info">Lire l'article !</a>
              </div>
              <?php } ?>
          </div>
  
          <div class="row button-center">
              <a href="#" class="btn btn-info">Voir plus d'articles</a>
          </div>
      </section>
</div>
