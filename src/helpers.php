<?php

declare(strict_types=1);

function view(string $name): string
{
    return __DIR__ . "/../views/$name.view.php";
}
