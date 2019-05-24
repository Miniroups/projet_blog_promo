<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand large" href="<?= $publicPath?>/home"><img class='tree' src="<?= $publicPath ?>/img/logo_tree.png"><img class="text" src="<?= $publicPath ?>/img/logo_text.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?= $publicPath?>/home">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= $publicPath?>/blog">Articles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= $publicPath?>/contact">Contact</a>
        </li>
        </ul>
        <ul class="navbar-nav">
            <?php if(isset($_SESSION['connexion']) && $_SESSION['connexion'] === true) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $publicPath?>/user/profil/<?= $_SESSION['userInfos']['id'] ?>"><i class="fas fa-user"></i> Mon profil</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $publicPath?>/home/login"><i class="fas fa-user"></i> Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $publicPath?>/home/register"><i class="fas fa-sign-in-alt"></i> Inscription</a>
                </li>
            <?php } ?>

        </ul>
    </div>
    </div>
</nav>
