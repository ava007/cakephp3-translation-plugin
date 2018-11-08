<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
echo '<meta name="description" content="';
if (isset($metadescription))
    echo $metadescription;
else 
    echo __('Translation');
echo '">';
?>
<meta name="author" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="robots" content="noindex, nofollow" />

<title>CakePHP 3 Translation Plugin</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<div id="preloader"><div id="load"></div></div>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
<div class="container-fluid">
<div class="navbar-header page-scroll">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
    <i class="fa fa-bars"></i>
</button>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
<ul class="nav navbar-nav">
<li class="active"><a href="/"><?= env('HTTP_HOST') ?></a></li>
<li><a href="#about">About</a></li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container -->
</nav>

<div class="container-fluid">
<div class="row" style="padding-top: 60px">
   <div class="col-sm-12 col-md-9">
   <?= $this->Flash->render() ?>
   <?= $this->fetch('content') ?>
   </div>
</div>
</div><!-- end of container -->

<footer><div class="container">
<div class="row"><div class="col-md-12 col-lg-12">
<p>©Copyright 2018 - wanaka GmbH. All rights reserved.</p>
</div></div>

<div class="row"><div class="col-md-12 col-lg-12">
<a href="/wnk_translation/translations/index">Translations</a>
<small><?= $this->request->env('HTTP_ACCEPT_LANGUAGE') ?></small>
</div></div>

<div class="row"><div class="col-md-12 col-lg-12">
<a href="/wnk_translation/translations/about">About</a>
</div></div>


</div></footer>

</body></html>
