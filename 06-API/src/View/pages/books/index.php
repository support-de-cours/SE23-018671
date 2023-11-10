<?php include "./../src/View/layout/header.php" ?>

<!-- ----------------------------------- -->

    <h1>Nos livres</h1>

    <hr>
    <a href="<?= url('book:create') ?>">Ajouter un livre</a>
    <hr>

    <ul>
    <?php foreach ($books as $book): ?>
        <li>
            <?= $book->id ?> : <?= $book->title ?>

            <a href="<?= url(
                'book:read', 
                ['id' => $book->id],
                true
            ) ?>">Voir en detail</a>
            
        </li>
    <?php endforeach; ?>
    </ul>

<!-- ----------------------------------- -->

<?php include "./../src/View/layout/footer.php" ?>
