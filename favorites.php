<?php
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('PARTIAL_PATH', $root . 'partial' . DIRECTORY_SEPARATOR);
#require APP_PATH.'favorites.php';
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./static/css/output.css" rel="stylesheet">
  <title>房屋管理｜看房網</title>
</head>
<body>
<?php require PARTIAL_PATH . 'navbar.php'; ?>
<div class="h-24"></div>
<?php if (isset($_GET['region'])): ?>
<div class="max-w-screen-lg mx-auto">
  <span class="ml-2 font-bold"><?= $_GET['region'] ?></span> 的搜尋結果：
</div>
<?php endif; ?>
<div class="w-full h-screen">
  <?php require PARTIAL_PATH . 'navbar.php'; ?>
  <div class="max-w-screen-lg mx-auto mb-4 py-24">
    <div class="min-w-max overflow-hidden mx-auto my-2">
      <img src="<?= $favorites['images'][0] ?>" class="w-1/2 mx-auto">
    </div>
    <span class="text-3xl font-bold text-gray-700"><?= $favorites['title'] ?></span>
      <p class="text-xl text-gray-700"><?= $favorites['subtitle'] ?>
      <p class="mt-2 whitespace-pre-line"><?= $favorites['description'] ?></p>
  </div>
</div>
</body>