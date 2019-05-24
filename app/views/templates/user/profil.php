<div class="content">

    <section id="infos" class="container-fluid">
        <a href="<?= $publicPath?>/user/edit" class="btn btn-primary">Editer votre profil</a>
        <div class="row my-3">
            <div class="col-4" id="avatar">
                <img src="https://lorempixel.com/500/700/abstract/?12345" alt="Avatar" class="img-fluid">
            </div>
            <div class="col">
                <div class="row">
                    <h3 class="col-6">Nom: <?= $firstname ?></h3>
                    <h3 class="col-6">Prénom: <?= $lastname ?></h3>
                </div>
                <div class="row">
                    <h3 class="col-12">Email : <?= $email ?></h3>
                </div>
            </div>
        </div>
        <hr>
        <main class="row container">
            <h2>Description de <?= $firstname ?></h2>
            <p><?= $about ?></p>
        </main>
        <a id="voir-changer-cv" class="btn btn-info">Voir + Changer CV</a>
    </section>  

</div> <!--content-->