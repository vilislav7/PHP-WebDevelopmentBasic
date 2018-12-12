<?php

include_once 'Trainer.php';

$trainers = [];
$pokemons = [];
$created_trainers = [];

while (1) {
    $line = readline();
    $trainer = null;
    $pokemon = null;

    if ($line === 'Tournament') {
        break;
    }

    $line = explode(' ', $line);
    $trainer_name = $line[0];

    if(!in_array($trainer_name, $created_trainers, false)) {
        $trainer = new Trainer($trainer_name);
        $trainers[] = $trainer;
        $created_trainers[] = $trainer_name;
    } else {
        foreach ($trainers as $t) {
            if ($t->getName() == $trainer_name) {
                $trainer = $t;
                break;
            }
        }
    }

    $pokemon_name = $line[1];
    $pokemon_element = $line[2];
    $pokemon_health = (int)$line[3];

    $pokemon = new Pokemon($pokemon_name, $pokemon_element, $pokemon_health);
    $pokemons[] = $pokemon;

    $trainer->addPokemon($pokemon);
}

while (1) {
    $line = readline();
    if ($line ==='End') {
        break;
    }

    foreach ($trainers as $trainer) {
        $trainer->possessElement($line);
    }
}

usort($trainers, function ($a, $b) {
    return $b->getNumbersOfBadges() > $a->getNumbersOfBadges();
});

foreach ($trainers as $trainer) {
    echo $trainer;
}