<!DOCTYPE html>
<?php include_once 'functions.php' ?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$title?> - Tự học ICT</title>
    <link rel="stylesheet" href="<?=url('lib/bootstrap/dist/css/bootstrap.min.css')?>" />
    <link rel="stylesheet" href="<?=url('css/site.css')?>" />
</head>
<body>
<header>
    <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
        <div class="container">
            <a class="navbar-brand" href="/index.php"><?=APPLICATION_NAME?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                <ul class="navbar-nav flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?=url('index.php')?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?=url('about.php')?>">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <main role="main" class="pb-3">
        <?=$content?>
    </main>
</div>

<footer class="border-top footer text-muted">
    <div class="container">
        &copy; 2020 - <?=APPLICATION_NAME?>
    </div>
</footer>

<script src="<?=url('lib/jquery/dist/jquery.min.js')?>"></script>
<script src="<?=url('lib/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?=url('js/site.js')?>"></script>

</body>
</html>
