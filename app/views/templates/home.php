<div class="content">

  <div class='container-fluid nopadding'>
    <div class="row video indent">
      <iframe src="https://www.youtube.com/embed/b4u3t9gUrmQ" frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-md-12 flex-center">
          <h1><i class="fas fa-newspaper"></i> Articles</h1>
        </div>
      </div>
      <div class="row stretch indent">
        <?php for ($i = 0; $i < 3; $i++) { ?>
        <div class="col-md-4 stretch">
          <div class="card text-white bg-secondary mb-3">
            <a href="#"><img src="<?= $articles[$i]["url_img"] ?>" class="card-img-top"
                alt="<?= $articles[$i]["alt_img"] ?>"></a>

            <div class="card-body">
              <h2 class="card-title"><a href="#"><?= $articles[$i]["title"] ?></a></h2>
              <p class="card-text"><?= $articles[$i]["content"] ?></p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>

      <div class="row indent">
        <div class="col-md-12 flex-center">
          <a href="<?= $publicPath?>/blog">
            <button type="button" class="btn btn-primary">Charger plus</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid parallax">
    <div class="dark">
      <div class="container">
        <div class="row indent">
          <div class="col-md-12 flex-center">
            <h1><i class="fas fa-users"></i> Equipe</h1>
          </div>
        </div>

        <div class="row indent">
          <?php for ($j = 1; $j <= count($users); $j++) { ?>
          <div class="col-md-4">
            <div class="card text-white bg-secondary mb-3 team">
              <a href="#"><img src="<?= $users[0]["url_avatar"] ?>" class="card-img-top"
                  alt="Photo de <?= $users[0]["url_avatar"] ?>"></a>

              <div class="card-body">
                <h2 class="card-title"><a href="#"><?= $users[0]["firstname"] . $users[0]["lastname"] ?></a></h2>
                <p class="card-text"><?= $users[0]["firstname"] ?></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>


</div>


</div>
<!--content-->