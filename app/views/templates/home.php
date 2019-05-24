<div class="content">

  <div class='container-fluid nopadding'>
    <div class="row video indent">
      <iframe src="https://www.youtube.com/embed/LE6iX_QQ_js" frameborder="0"
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
              <p class="card-text"><?= substr($articles[$i]["content"], 0, 200)  ?> ...</p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>

      <div class="row indent">
        <div class="col-md-12 flex-center">
          <a href="<?= PUBLIC_PATH?>/blog">
            <button type="button" class="btn btn-primary">Blog</button>
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
          <?php for ($j = 0; $j < count($users); $j++) { ?>
          <div class="col-md-4">
            <div class="card text-white bg-secondary mb-3 team">
              <a href="#"><img src="<?= $avatar = !empty($users[$j]["url_avatar"]) ? $users[$j]["url_avatar"] : 'https://lorempixel.com/500/500/abstract/?12345' ?>" class="img-circle card-img-top"
                  alt="Photo de profil"></a>
              <div class="card-body">
                <h2 class="card-title"><a href="<?= PUBLIC_PATH.'/user/profil/'.$users[$j]['id'] ?>"><?= $users[$j]["firstname"] . $users[$j]["lastname"] ?></a></h2>
                <p class="card-text"><?= $users[$j]["firstname"] ?></p>
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
