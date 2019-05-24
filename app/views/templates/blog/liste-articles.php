<div class="content">
    <section id="mainArticle" class="container">
          <div class="row">
              <div class="col-5">
                  <a href="<?= PUBLIC_PATH ?>/blog/article/<?= $article[0]['id'] ?>">
                      <img class="img-fluid" src="<?= $article[0]["url_img"] ?>" alt="<?= $article[0]["alt_img"] ?>">
                  </a>
              </div>
              <div class="col">
                  <h2><?= $article[0]["title"] ?></h2>
                  <p><?= substr($article[0]["content"], 0, 200) ?></p>
                  <a href="<?= PUBLIC_PATH ?>/blog/article/<?= $article[0]['id'] ?>" class="btn btn-info">Lire l'article !</a>
              </div>
          </div>
      </section>

      <section id="allArticle" class="container">
          <div class="row">
              <?php for($i = 1; $i < count($article); $i++) { ?>
              <div class="col">
                  <a href="<?= PUBLIC_PATH ?>/blog/article/<?= $article[$i]['id']  ?>"><img class="img-fluid" src="<?= $article[$i]["url_img"] ?>" alt="<?= $article[$i]["alt_img"] ?>"></a>
                  <p><?= substr($article[$i]["content"], 0, 200) ?></p>
                  <a href="<?= PUBLIC_PATH ?>/blog/article/<?= $article[$i]['id']  ?>" class="btn btn-info">Lire l'article !</a>
              </div>
              <?php } ?>
          </div>

          <div class="row button-center">
              <a href="#" class="btn btn-info">Voir plus d'articles</a>
          </div>
      </section>
</div>
