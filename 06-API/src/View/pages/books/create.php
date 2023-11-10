<?php include "./../src/View/layout/header.php" ?>

<!-- ----------------------------------- -->

    <h1>Ajouter un livre</h1>

    <hr>
    
    <form method="post">

        <input type="text" name="_crsf" value="<?= $crsf_token ?>">

        <div>
            <label for="title">Titre du livre</label>
            <input type="text" name="title" id="title" value="<?= $title ?>">
        </div>

        <div>
            <label for="description">description du livre</label>
            <input type="text" name="description" id="description" value="<?= $description ?>">
        </div>

        <div>
            <label for="price">Titre du livre</label>
            <input type="text" name="price" id="price" value="<?= $price ?>">
        </div>

        <button type="submit">Ajouter le livre</button>

    </form>

    <hr>

<!-- ----------------------------------- -->

<?php include "./../src/View/layout/footer.php" ?>
