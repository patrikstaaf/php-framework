<h1>Pokedex</h1>
<ul>
    <?php foreach ($pokemon as $monster) : ?>
        <li>
            <a href="/pokemon?id=<?= $monster->id; ?>">
                <?= $monster->name; ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>