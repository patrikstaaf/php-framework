<?php

declare(strict_types=1);

use App\Exception\NotFoundException;
use App\Pokemon;

if (isset($_GET['id']) === false) {
    throw new NotFoundException();
}

$pokemon = $database->select()->from('pokemon')->where('id', '=', $_GET['id'])->first();

if ($pokemon === false) {
    throw new NotFoundException();
}

$pokemon = new Pokemon($pokemon->id, $pokemon->name);

require view('pokemon');
