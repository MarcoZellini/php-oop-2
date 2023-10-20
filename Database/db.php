<?php


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

$products = [];

array_push(
    $products,
    new Toy('Palla', new Category('Cane'), 50, 'Legno'),
    new Kennel('Cuccia Grande', new Category('Gatto'), 30, 50.5, 25, 30),
    new Toy('Palla', new Category('Cane'), 50, 'Legno'),
    new Kennel('Cuccia Piccola', new Category('Gatto'), 40, 25.5, 15, 20),
    new Food('Crocchette', new Category('Cane'), 25, 'Crocchette', 500, '2023-12-31'),
    new Toy('Pupazzetto', new Category('Gatto'), 50, 'Legno'),
    new Kennel('Cuccia Grande', new Category('Gatto'), 30, 50.5, 25, 30),
    new Food('Crocchette', new Category('Cane'), 25, 'Crocchette', 500, '2023-12-31'),
    new Toy('Pupazzetto', new Category('Gatto'), 50, 'Legno'),
    new Kennel('Cuccia Grande', new Category('Gatto'), 30, 50.5, 25, 30),
    new Toy('Palla', new Category('Cane'), 50, 'Legno'),
    new Food('Cibo in Scatola', new Category('Cane'), 15, 'Crocchette', 50, '2024-03-24'),
    new Kennel('Cuccia Piccola', new Category('Gatto'), 40, 25.5, 15, 20),
    new Food('Crocchette', new Category('Cane'), 25, 'Crocchette', 500, '2023-12-31'),
    new Toy('Pupazzetto', new Category('Gatto'), 50, 'Legno'),
    new Kennel('Cuccia Grande', new Category('Gatto'), 30, 50.5, 25, 30),
    new Kennel('Cuccia Grande', new Category('Gatto'), 30, 50.5, 25, 30),
    new Food('Cibo in Scatola', new Category('Cane'), 15, 'Crocchette', 50, '2024-03-24'),
    new Toy('Palla', new Category('Cane'), 50, 'Legno'),
    new Kennel('Cuccia Piccola', new Category('Gatto'), 40, 25.5, 15, 20),
    new Toy('Pupazzetto', new Category('Gatto'), 50, 'Legno'),
    new Toy('Palla', new Category('Cane'), 50, 'Legno'),
    new Kennel('Cuccia Piccola', new Category('Gatto'), 40, 25.5, 15, 20),
    new Food('Cibo in Scatola', new Category('Cane'), 15, 'Crocchette', 50, '2024-03-24'),
    new Kennel('Cuccia Piccola', new Category('Gatto'), 40, 25.5, 15, 20),
    new Food('Crocchette', new Category('Cane'), 25, 'Crocchette', 500, '2023-12-31'),
    new Food('Cibo in Scatola', new Category('Cane'), 15, 'Crocchette', 50, '2024-03-24'),
    new Toy('Pupazzetto', new Category('Gatto'), 50, 'Legno'),
    new Food('Cibo in Scatola', new Category('Cane'), 15, 'Crocchette', 50, '2024-03-24'),
    new Food('Crocchette', new Category('Cane'), 25, 'Crocchette', 500, '2023-12-31')
);
