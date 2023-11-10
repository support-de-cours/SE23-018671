<?php include "./../src/View/layout/header.php" ?>

<!-- ----------------------------------- -->

    <h1>Details du livre</h1>

    <hr>
    <a href="<?= url('book:create') ?>">Ajouter un livre</a>
    <hr>

    <div>Id : <?= $book->id ?></div>
    <div>Title : <?= $book->title ?></div>
    <div>Description : <?= $book->description ?></div>
    <div>Price : <?= $book->price ?></div>

    <hr>
<!-- ----------------------------------- -->

<?php include "./../src/View/layout/footer.php" ?>
