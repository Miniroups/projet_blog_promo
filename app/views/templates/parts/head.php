<?php $publicPath = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER["HTTP_HOST"].'/projet_blog_promo/public' ; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> <?= $this->title = isset($this->title) ? $this->title : 'Blog Promo'  ?> </title>

<link rel="stylesheet" href="<?= $publicPath?>/assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= $publicPath?>/assets/fontawesome/css/all.min.css">
<link rel="stylesheet" href="<?= $publicPath?>/css/style.css">


<script src="<?= $publicPath?>/assets/jquery.min.js"></script>
<script src="<?= $publicPath?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= $publicPath?>/assets/fontawesome/js/all.min.js"></script>
<script src="<?= $publicPath?>/js/script.js"></script>
