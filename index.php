<?php

/*  Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
        -L'e-commerce vende prodotti per animali.
        -I prodotti sono categorizzati, le categorie sono Cani o Gatti.
        -I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
    Bonus (non opzionale):
    organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati.
*/

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
?>

<?php include ROOT . PARTIALS . 'head.php'; ?>

<?php include ROOT . PARTIALS . 'main.php'; ?>

<?php include ROOT . PARTIALS . 'foot.php'; ?>