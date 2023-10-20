<?php

DEFINE('DS', DIRECTORY_SEPARATOR);
DEFINE('ROOT', __DIR__ . DS);
DEFINE('MODELS', 'Models' . DS);
DEFINE('PARTIALS', 'Partials' . DS);
DEFINE('DATABASE', 'Database' . DS);

require ROOT . MODELS . 'Product.php';
require ROOT . MODELS . 'Food.php';
require ROOT . MODELS . 'Toy.php';
require ROOT . MODELS . 'Kennel.php';
require ROOT . MODELS . 'Category.php';

require ROOT . DATABASE . 'db.php';
include ROOT . PARTIALS . 'head.php';
include ROOT . PARTIALS . 'main_products.php';
include ROOT . PARTIALS . 'foot.php';
