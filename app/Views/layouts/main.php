<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= isset($titulo) ? ($titulo) : 'ShiaiFlow' ?></title>
  <?php $baseUrl = $GLOBALS['__baseUrl'] ?? ''; ?>
  <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/base.css">
  <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/layout.css">
</head>

<body>
  <header class="topbar">
    <div class="brand">ShiaiFlow</div>
    <nav>
      <a href="<?= $baseUrl ?>/">Início</a>
      <a href="<?= $baseUrl ?>/login">Login</a>
    </nav>
  </header>

  <main class="page">
    <?= $content ?>
  </main>

  <footer class="footer">© <?= date('Y') ?> ShiaiFlow</footer>
  <script src="<?= $baseUrl ?>/assets/js/main.js" type="module"></script>
</body>

</html>