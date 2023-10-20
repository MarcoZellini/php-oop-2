<?php

/*  Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
        -L'e-commerce vende prodotti per animali.
        -I prodotti sono categorizzati, le categorie sono Cani o Gatti.
        -I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
    Bonus (non opzionale):
    organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati.
*/

/* DEBUG - ricordarsi di eliminare */
$debug = true;

if ($debug) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}

function dd($element)
{
    var_dump($element);
    die;
}


DEFINE('ROOT', __DIR__);
DEFINE('DS', DIRECTORY_SEPARATOR);
DEFINE('MODELS', 'Models' . DS);

require ROOT . DS . MODELS . 'Product.php';
require ROOT . DS . MODELS . 'Food.php';
require ROOT . DS . MODELS . 'Toy.php';
require ROOT . DS . MODELS . 'Kennel.php';
require ROOT . DS . MODELS . 'Category.php';

$product_1 = new Product('product_name', new Category('Cane'), 50);
$product_2 = new Food('product_name', new Category('Cane'), 50, 'Crocchette', 500, '2023-12-31');
$product_3 = new Toy('product_name', new Category('Cane'), 50, 'Legno');
$product_4 = new Kennel('product_name', new Category('Cane'), 50, 50.5, 25, 30);

// dd($product);

echo $product_1->toString();
echo '<br>';
echo $product_2->toString();
echo '<br>';
echo $product_3->toString();
echo '<br>';
echo $product_4->toString();
echo '<br>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>